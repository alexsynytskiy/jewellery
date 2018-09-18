var PublicationPage = function (options) {
    var pageOptions = $.extend(true, {
        types: []
    }, options);

    var selectors = {
        newsCategory: '#news-category',
        toMainPage: '#to-main-page',
        title: '#title',
        short: '#short'
    };

    function setFields(value) {
        if(value === pageOptions.types[0][0]) {
            $(selectors.toMainPage).hide();
            $(selectors.short).hide();
        }
        else {
            $(selectors.toMainPage).show();
            $(selectors.short).show();
        }
    }

    setFields($(selectors.newsCategory).val());

    $('body').on("change", selectors.newsCategory, function (e) {
        e.preventDefault();

        setFields($(this).val());
    });
};
