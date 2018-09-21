var PortfolioPage = function (options) {
    var pageOptions = $.extend(true, {
        startBlockUrl: ''
    }, options);

    var selectors = {
        project: '.project-small-item',
        clearAll: '#clear-portfolio',
        projectsContainer: '#projectPages',
        prevProject: '.prev-project',
        nextProject: '.next-project'
    };

    $('body').on("click", selectors.project, function (e) {
        e.preventDefault();

        $.ajax({
            url: pageOptions.startBlockUrl,
            type: 'POST',
            data: {
                _csrf: SiteCore.getCsrfToken(),
                slug: $(this).attr('href'),
                nextValue: $(this).data('next-item'),
                prevValue: $(this).data('prev-item')
            },
            dataType: "json",
            success: function (json) {
                if (typeof json !== 'undefined' && json.status === 'ok') {
                    $('#page').addClass('page-open');

                    $(selectors.projectsContainer).empty();
                    $(selectors.projectsContainer).append(json.html);

                    $('html, body').animate({
                        scrollTop: $(selectors.projectsContainer).offset().top - 100
                    }, 1000);
                }
            }
        });
    }).on("click", selectors.clearAll, function (e) {
        e.preventDefault();

        $(selectors.projectsContainer).empty();
    }).on("click", selectors.prevProject + ', ' + selectors.nextProject, function (e) {
        e.preventDefault();

        var slug = $(this).data('slug');
        $('a[href=' + slug + ']').trigger("click");
    });
};
