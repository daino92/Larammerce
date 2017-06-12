var $category = $('#category'), $subcategory = $('#subcategory'), $options = $subcategory.find('option');

$category.on('change', function() {
    $subcategory.html($options.filter('[data-options="' + this.value + '"]'));
} ).trigger('change');

$('#category').change(function(e){
    $('#subcategory').prop('disabled', !$(this).val());
});

$(function(){
    $('#subcategory').prop('disabled', true);
});