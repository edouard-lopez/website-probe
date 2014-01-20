var Handlebars;

$(function(){
    'use strict';

    Handlebars.registerHelper('localize', function(msg) {
        var regex = /.*([\w]{2})/;
        var l10n = location.hash.match(regex)[1];

        var locale = msg[l10n] ? l10n : 'en';

        return new Handlebars.SafeString(msg[locale]);
    });
});
