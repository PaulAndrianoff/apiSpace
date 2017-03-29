var script = {}

script.elements = {}
script.elements.container   = document.querySelector('.container-stats');
script.elements.section_map = script.elements.container.querySelector('.section-map');
script.elements.wrapper_map = script.elements.container.querySelector('.wrapper-map');
script.elements.map         = script.elements.container.querySelector('#vmap');


console.log(script.elements.map);

// script.elements.map.addEventListener('click', function() {
//     console.log('ok');
//
//     script.elements.wrapper_map.classList.add('expand');
//     // script.elements.map.classList.add('expand');
//     //  script.elements.section_map.classList.remove('section-map');
//     //   script.elements.section_map.classList.6dd('expand');
//     // script.elements.wrapper_map.classList.remove('expand');
//     // script.elements.map.classList.remove('expand');
//
//     script.elements.section_map.style.width = '60%';
//     script.elements.section_map.style.height= '50%';
//     // script.elements.wrapper_map.style.width = '30%';
//     // script.elements.wrapper_map.style.height = '30%';
//         // script.elements.map.style.width = '30%';
//         // script.elements.map.style.height = '30%';
// });
