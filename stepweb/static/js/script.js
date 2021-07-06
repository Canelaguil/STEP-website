$(document).ready(function(){
    $('.parallax').parallax();
    $('.modal').modal();
    $('.collapsible').collapsible();
    // $('.select').formSelect();
    // $('.select').material_select();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker();
    // $('select').formSelect();
    $('select').material_select();
});

// (function(){
//     let isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
//     let isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
//     let scrollbarDiv = document.querySelector('.scrollbar');
//       if (!isChrome && !isSafari) {
//         scrollbarDiv.innerHTML = 'You need Webkit browser to run this code';
//       }
//   })();