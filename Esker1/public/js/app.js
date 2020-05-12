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

  $('.your-class').slick({ //este codigo es del slide de la pag principal
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
  });
  $("#menu-toggle").click(function() {
      $("#wrapper").toggleClass("toggled");
      let icon = document.getElementById('iconito');
      icon.classList.toggle('fa-angle-double-left');
      icon.classList.toggle('fa-angle-double-right');
    });
})
