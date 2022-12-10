(function ($) {
    'use strict';

    $(document).ready(function () {
        const setFormStringValueFieldSet = $('#set-form-value-string').parents('div').first();
        const setFormNumberValueFieldSet = $('#set-form-value-number').parents('div').first();
        const setFormType = $('#set-form-type');
        setFormType.change(function () {
            setFormNumberValueFieldSet.hide();
            setFormStringValueFieldSet.hide();
            if (setFormType.val() === 'string') {
                setFormStringValueFieldSet.show();
            } else {
                setFormNumberValueFieldSet.show();
            }
        })
    });

})(jQuery);
