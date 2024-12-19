import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import anime from 'animejs/lib/anime.es.js';

window.anime = anime;

// anime({
//     targets: '.bar',

//     translateX: [
//         {value: -50, duration: 1000},    // Start from left
//     ],

//     translateY: [
//         {value: -50, duration: 1000},    // Start from left
//         {value: 0, duration: 1000},     // Move to center
//     ],

//     duration: 4000,
//     easing: 'easeOutElastic(1, .8)',
//     loop: true
// });

var path = anime.path('.motion-path-demo path');

anime({
  targets: '.bar',
  translateX: path('x'),
  translateY: path('y'),
//   rotate: path('angle'),
  easing: 'cubicBezier(0.130, 0.310, 0.630, 0.815)',
  duration: 3000,
  loop: true
});
