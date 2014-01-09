var Handlebars;

$(function(){
    'use strict';

    Handlebars.registerHelper('localize', function(msg) {
        var regex = /.*([\w]{2})/;
        var l10n = location.hash.match(regex)[1];

        return msg[l10n] || msg['en'];
    });
});
