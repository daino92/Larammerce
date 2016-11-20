Stripe.setPublishableKey('pk_test_i9rY0PordF8ulQ3MCX7dycn6');

var $form = $('#checkout-form'); //Grab the form

$form.submit(function(event){
    $('charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {   //if problem...
        $('charge-error').removeClass('hidden');    //Show errors on the form
        $('charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {    //token was created
        var token = response.id; //get the token ID

        // Insert the token into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        $form.get(0).submit();  // Submit the form:
    }
}