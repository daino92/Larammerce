$(document).ready(function() {
    var $category = $('#category'), $subcategory = $('#subcategory'), $options = $subcategory.find('option');

    $category.on('change', function() {
        $('#subcategory').prop('disabled', !$(this).val());
        $subcategory.html($options.filter('[data-options="' + this.value + '"],[value="0"]'));
    } ).trigger('change');
});