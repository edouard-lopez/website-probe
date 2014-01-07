var myApp; // sublime-text-2

$(function(){
    'use strict';
    var compiledTemplate = myApp.Templates['app/templates/screenshots.hbs'];

    $('.screenshots').each(function(i, sheet){
        var url = $(sheet).data('json');
        $.getJSON(url).then(function (json) {
            var tpl = compiledTemplate( json );
            $(sheet).html(tpl);
        });
    });
});
