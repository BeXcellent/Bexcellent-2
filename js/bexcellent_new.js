var resizeText = function(size) {
    if ($('body').css('fontSize') === "") {
        $('body').css('fontSize', '1.0em');
    }
                
    $('body').css('fontSize', String(size) + "pt");
};
