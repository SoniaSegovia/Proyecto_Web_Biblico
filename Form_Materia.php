<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Proyecto Biblico</title>
    <?php require_once "menu.php";?>
  </head>
  <body>
      <div class="container">
<div class="row justify-content-center">
<div class="col-6 p-5 bg-white shadow-lg rounded">
    <h3>  MATERIAS CITAS BIBLICAS </h3>
    <hr>
    <form method="post" action="">
        <div class="form-group">
            <label for="id">ID</label>
            <input id="id" class="form-control" type="text" name="id" autocomplete= "off">
        </div>
        
         <div class="form-group">
         <label for="codigo">CODIGO</label>
          <input id="codigo" class="form-control" type="text" name="codigo" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="nombre">NOMBRE</label>
             <input id="nombre" class="form-control" type="text" name="nombre" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="contenido">CONTENIDO</label>
             <input id="contenido" class="form-control" type="text" name="contenido" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="unidad_valorativa">UNIDAD VALORATIVA</label>
             <input id="unidad_valorativa" class="form-control" type="text" name="unidad_valorativa" autocomplete= "off">
         </div>

         <br>
         <button class="btn btn-primary"  type="submit" >Enviar</button>
    </form>
</div>     
                      </div>
                  </div>
              </div>
          </div>
      
      </div>
     
    </div> 
    
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
