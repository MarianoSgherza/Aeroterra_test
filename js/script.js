$(document).ready(function () {

var mapa;

function initMap() {

  var opcionesDeMapa = {

    zoom: 13,
    center: new google.maps.LatLng(-34.603562, -58.381582)
      
    };

  mapa = new google.maps.Map(document.getElementById("mapa"), opcionesDeMapa);
  
  var marcador;
 

    var pin;
		
		var puntoRojo = "images/red_dot.png";
		var puntoAzul = "images/blue-dot.png";
    var puntoNaranja = "images/orange-dot.png";
    var contenido;
    var infowindow;
    
		for( var i = 0; i < info.marcadores.length; i++){
		
      var coord = info.marcadores[i].coordenadas;
      var cat = info.marcadores[i].categoria;
      /*pin = url;*/
      switch (cat) {
        case "residencial":
            pin = puntoRojo;
          break;

        case "comercial":
            pin = puntoAzul;
          break;
          
        case "mixta":
            pin = puntoNaranja;
          break;    
      
        default:
          pin = puntoAzul;
        
          
      }

      var a = coord.split('"').join('');
      var b = a.split(",");
      var c = b[0];
      var d = b[1];

      console.log(a);

		  // nuevo marcador
		  marcador = new google.maps.Marker({
		  		position: new google.maps.LatLng(c , d),
		  		map: mapa,
		  		title: info.marcadores[i].name,
		  		icon: pin
      });

      contenido = '<div class="etiqueta">'+'<p>'+'<b>Descripción: </b>'+info.marcadores[i].name+'</p>'+'<p>'+'<b>Dirección: </b>'+info.marcadores[i].address+'</p>'+'<p>'+'<b>Teléfonico: </b>'+info.marcadores[i].tel+'</p>'+'<p>'+'<b>(X,Y): </b>'+b+'</p>'+'<p>'+'<b>Categoría: </b>'+info.marcadores[i].categoria+'</p>'+'</div>';
    infowindow = new google.maps.InfoWindow();

  
  

  google.maps.event.addListener(marcador,'click', (function(marcador,contenido,infowindow){ 
    return function() {
        infowindow.setContent(contenido);
        infowindow.open(mapa,marcador);
        
      };
    })(marcador,contenido,infowindow));
    
    


      
  

		}

}

  var pedidoJson = new XMLHttpRequest();

  var info;
  pedidoJson.onreadystatechange = function() {
  
    if (pedidoJson.readyState == 4 && pedidoJson.status == 200) {
  
  
      // Declaramos y definimos una variable cuyo valor es la respuesta transformada a JSON
      info = JSON.parse(pedidoJson.responseText);
      initMap();
  
      console.log(info.marcadores[0].name);

    }
  

    
  };
   
    pedidoJson.open("POST", "marcadores.json", true);
  
  
  
  pedidoJson.send();
 
  

    
})