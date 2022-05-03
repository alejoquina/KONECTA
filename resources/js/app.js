require('./bootstrap');

let button = document.getElementById('agregarProducto');
const html = document.getElementsByClassName('item')[0];
button.addEventListener('click', function(event){
  let clonedElement = html.cloneNode(true);
 document.getElementById('form').appendChild(clonedElement)
});

