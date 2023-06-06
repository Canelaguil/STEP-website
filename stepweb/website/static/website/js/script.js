$(document).ready(function(){
    $('.parallax').parallax();
    $('.modal').modal();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker();
    $('select').material_select();

    // Set copyright year in footer; sadly, this
    // does not work for Date.now().
    let now = new Date();
    $('#footer-year').text(now.getFullYear());
});