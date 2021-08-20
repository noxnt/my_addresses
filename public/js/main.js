$(function () {

    // Area/City handler
    $('select[name=area_id]').change(function () {
        let area = $(this).val();

        $('option.plh').hide();

        $('select[name=city_id]').val('value', false);

        let cities = $('option[data-area]');

        cities.each(function () {
            if ($(this).data('area') != area) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });

    // Flash
    setTimeout(function () {
        $('.success-message').fadeOut(1000);
    }, 2000);

});
