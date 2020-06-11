console.log("lkjl");


$(document).ready(function(){
    $('.parallax').parallax();
    $('.modal').modal();
    $('.collapsible').collapsible();
});

// (function(){
//     let isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
//     let isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
//     let scrollbarDiv = document.querySelector('.scrollbar');
//       if (!isChrome && !isSafari) {
//         scrollbarDiv.innerHTML = 'You need Webkit browser to run this code';
//       }
//   })();