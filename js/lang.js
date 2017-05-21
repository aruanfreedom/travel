$("#kz").click(function() {
    $("html").attr("lang", "kz");
    localStorage.lang = "kz";
    language();
});

$("#ru").click(function() {
    $("html").attr("lang", "ru");
    localStorage.lang = "ru";
    language();
});

function language() {
    var langs = ['ru', 'kz'];
    var langCode = '';
    var langJS = null;


    var translate = function (jsdata) {
        $("[tkey]").each (function (index)
        {
            var strTr = jsdata [$(this).attr ('tkey')];
            $(this).html (strTr);
        });
    };

    if (localStorage.lang) {
        $("html").attr("lang", localStorage.lang);
    }


   $.getJSON('js/lang/'+ $("html").attr("lang") +'.json', translate);

}

language();




