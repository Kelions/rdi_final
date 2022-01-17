<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

  </head>
  <body>
    <main class="container-fluid">
      <div class="text-center pt-5">
        <img src="{{asset('/images/logo.png')}}" alt="" class="img-fluid">


      </div>
      

      <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">

        <div class="card mt-5 border-danger " style="width: 50rem;">

          <div class="card-header text-center">
            <h2>Registro de Usuarios <i class="fas fa-users"></i></h2>
  
          </div>
  
          <div class="card-body">
            <label class="form-label" for="usuario_nombre">Nombre </label>
            <input class="form-control" type="text" id="usuario_registro_nombre">

            <label class="form-label" for="usuario_apellido">Apellido </label>
            <input class="form-control" type="text" id="usuario_registro_apellido">

            <label class="form-label" for="usuario_clave">Clave </label>
            <input class="form-control" type="password" id="usuario_registro_clave">

            <label class="form-label" for="usuario_rut">Rut </label>
            <input class="form-control" type="text" id="usuario_registro_rut">
            <small class="form-text text-muted">Ejemplo: 19158375-5 </small>

            

            <div class="pt-3">
              <label for="usuario_registro_especialidad" class="form-label">Seleccione Especialidad</label>
              <select class="form-select" id="usuario_registro_especialidad">
                <option value="calculista">Calculista</option>
                <option value="ingeniero">Ingeniero</option>
                <option value="arquitecto">Arquitecto</option>
                <option value="prevencionista">prevencionista de riesgos</option>
              </select>
            </div>

            

  
          </div>
  
          <div class="card-footer">
            <div class="pt-3 text-center">

            <button type="button" id="btn_registro" class="btn btn-danger">Registrar <i class="far fa-check-square"></i></button>

            <a href="{{route('ingreso')}}" class="btn btn-danger">Ingresar <i class="fas fa-sign-in-alt"></i></a>


            </div>
          </div>
  
  
        </div>
      </div>
      
      
      
    </main>

    

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/rdi_registro.js"></script>
  </body>
</html>