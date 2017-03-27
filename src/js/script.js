
var header_todo = document.querySelectorAll('.products-wrapper');
var validate = document.querySelectorAll('.validate');

console.log(validate);
for (var i = 0; i < validate.length; i++) {
    validate[i].addEventListener('click', function()
    {
        for (var j = 0; j < header_todo.length; j++)
        {
            header_todo[j].classList.add('product-wrapper-validate');
        }

    });
}
