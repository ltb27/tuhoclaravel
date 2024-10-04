(function ($) {
    "use strict";
    const HT = {};

    HT.getLocation = () => {
        $(document).on('change', '.location', function () {
            const _this = $(this);
            const parentId = _this.val();
            const target = _this.attr('data-target');
            const options = {
                parentId,
                target
            }
            HT.getDataByAjax(options);
        })
    }

    HT.getDataByAjax = (options) => {
        $.ajax({
            url: "ajax/location/getLocation",
            method: "GET",
            data: options,
            dataType: "json",

            beforeSend: function () {
            },
            success: function (response) {
                let html = '<option value="0">-- Chọn quận/huyện --</option>';

                $.each(response, function (key, value) {
                    html += '<option value="' + value.code + '">' + value.name + '</option>';
                })

                if (options.target) {
                    $(`.${options.target}`).html(html);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
            complete: function () {
            }
        });
    }


    HT.int = () => {
        HT.getLocation();
    };

    $(document).ready(HT.int);
})(jQuery);
