$(document).ready(function() {
    $('#tintuc').on('click', function() {
        $('.formtt').show();
        $('.formsk').hide();
    });
    $('#sukien').on('click', function() {
        $('.formsk').show();
        $('.formtt').hide();
    });
});