


<!DOCTYPE html>
<html lang="es-ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_gsHoUscLGUtw4rL3iHp7yMfbYF7x2DQ&callback=initMap">
  </script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">

        
        <form action="registro.php" method="post" id="map-form" class="py-4 px-4 mr-2 mt-2">

            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label tag">Nombre</label>
                <input type="text" name="name" class="form-control form-control-sm col-9" id="name" value="" placeholder="Ej: Av. Madero 1652">
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label tag">Dirección</label>
                <input type="text" name="address" class="form-control form-control-sm col-9" id="address" value="" placeholder="Ej: Av. Madero 1652">
            </div>

            <div class="form-group row">
                <label for="tel" class= "col-sm-3 col-form-label tag">Teléfono</label>
                <input type="text" name="tel" class="form-control form-control-sm col-9" id="tel" value="" placeholder="Número de teléfono">
            </div>

            <div class="form-group row">
                <label for="categoria" class="col-sm-3 col-form-label tag">Categoría</label>

                <select name="categoria" class="form-control form-control-sm col-9" id="categoria">
                    <option selected>Seleccione una categoría</option>
                    <option value="comercial">Comercial</option>
                    <option value="residencial">Residencial</option>
                    <option value="mixta">Mixta</option>
                </select>
            </div>
              
            <div class="form-group row">
                <label for="coordenadas" class="col-sm-3 col-form-label tag">Coord.</label>
                <input type="text" name="coordenadas" class="form-control form-control-sm col-9" id="coordenadas" value="" placeholder="lat,long">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
                    
        </form>
        
        <div class="row py-5 mapawrapper">
            <div class="" id="mapa"></div>
        </div>

    
    </div>

</body>
</html> 