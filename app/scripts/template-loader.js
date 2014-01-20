var myApp; // sublime-text-2

$(function(){
    'use strict';
    var compiledTemplate = myApp.Templates['app/templates/screenshots.hbs'];

    $('.screenshot').each(function(i, hook){
        var url = $(hook).data('json');
        $.getJSON(url).then(function (json) {
            var tpl = compiledTemplate( json );
            $(hook).html(tpl);
        });
    });
});
