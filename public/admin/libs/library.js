(function ($) {
    "use strict";

    const $document = $(document);
    const HT = {};

    /**
     * Switchery plugin, adds a switch toggle to the given element(s)
     * @function
     */
    HT.switchery = () => {
        $('.js-switch').each(function () {
            new Switchery(this, {color: "#1aba94"});
        });
    };

    /**
     * Setup select2 for the given element(s)
     * @param {string} [selector='.setup-select-2'] - The jQuery selector for the element(s)
     */
    HT.setupSelect2 = (selector = '.setup-select-2') => {
        $(selector).select2();
    };

    /**
     * Initialize all plugins
     */
    HT.init = () => {
        HT.switchery();
        HT.setupSelect2();
    };

    $document.ready(HT.init);

})(jQuery);
