
$.fn.editable.defaults.mode = 'inline'; // defino el tipo de popup
$.fn.editable.defaults.ajaxOptions = {type: "PUT"}; //defino el metodo de envio en vez de post le paso put

$(document).ready(function(){
  $(".set-guide-number").editable(); //inicializa los controles de modificacion para el campo

  $(".select-status").editable({ //al ser un select le pasamos las posibles entradas
    source:[
      {value:"creado", text: "Creado"},
      {value:"enviado", text: "Enviado"},
      {value:"recibido", text: "Recibido"}
      ]
  });
});
const items = document.querySelectorAll('img');
const itemCount = items.length;
const nextItem = document.querySelector('.next');
const previousItem = document.querySelector('.previous');
let count = 0;

function showNextItem() {
  items[count].classList.remove('active');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active');
  console.log(count);
}

function keyPress(e) {
  e = e || window.event;

  if (e.keyCode == '37') {
    showPreviousItem();
  } else if (e.keyCode == '39') {
    showNextItem();
  }
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
document.addEventListener('keydown', keyPress);
