<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  </head>
  <body>
    <main class="container-fluid">
      <div class="text-center pt-5">

        <img src="{{asset('/images/logo.png')}}" alt="" class="img-fluid">

      </div>
        

      

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="col-12 col-md-12 col-lg-12">
                <form>
                    <div class="mb-3">
                      <label for="usuario_nombre" class="form-label">Nombre de Usuario Administrador <i class="fas fa-user"></i> </label>
                      <input type="text" class="form-control" id="usuario_nombre">
                    </div>
                    <div class="mb-3">

                      <label for="usuario_pass" class="form-label">Contraseña <i class="fas fa-key"></i></label>
                      <input type="password" class="form-control" id="usuario_pass">

                    </div>
                    <div class="text-center">

                    <button type="button" id="btn_admin_ingreso" class="btn btn-danger">Ingresar <i class="fas fa-sign-in-alt"></i></button>
                
                    <a href="{{route('ingreso')}}" class="btn btn-danger">Regresar <i class="fas fa-undo"></i></a>
                    
                    </div>
                  </form>

                  
            </div>
            
        </div>

    </main>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- codigo personal -->
    <script src="js/rdi_ingreso.js"></script>
  </body>
</html>