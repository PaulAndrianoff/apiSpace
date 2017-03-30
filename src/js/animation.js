var map = document.querySelector('.map');
var section_map = document.querySelector('.section-map'); //rouge
var section_right = document.querySelector('.section-right'); //bleu
var test_button = document.querySelector('.test');

console.log(section_map);

test_button.addEventListener('click', function() {

console.log('ok');
    if (section_right.classList.contains('apparition-right')) {

        section_map.classList.add('delete-map');
        section_map.classList.remove('apparition-map');

        section_right.classList.add('delete-right');
        section_right.classList.remove('apparition-right');

        window.setTimeout(function(){
            section_map.classList.add('section-map');
            section_map.classList.remove('delete-map');
            // section_map.classname = 'section-map';
            section_right.classList.add('section-right');
            section_right.classList.remove('delete-right');

        }, 1100)
    }
    else {
        section_map.classList.add('apparition-map');
        section_right.classList.add('apparition-right');
        // section_map.className = 'apparition-map';
        // section_right.className = 'apparition-right section_right ';

    }
});
