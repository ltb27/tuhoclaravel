(function ($) {
    "use strict";
    
    const $document = $(document);
    const HT = {}

    HT.switchery = () => {
        $('.js-switch').each(function () {
            const switchery = new Switchery(this, {color: "#1aba94"})
        })
    }

    $document.ready(function () {
        HT.switchery();
    });
})(jQuery);