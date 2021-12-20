@extends("layouts.master_admin")
@section("contenido_admin")

<main class="container-fluid">
    <div class="text-center pt-5">
      <img src="{{asset('/images/logo.png')}}" alt="" class="img-fluid">


    </div>
    

    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5 pb-5">

      <div class="card mt-5 border-danger pb-5" style="width: 50rem;">

        <div class="card-header text-center">
          <h2>Registro de Proyecto <i class="fas fa-building"></i></h2>

        </div>

        <div class="card-body">
          <label class="form-label" for="registro_nombre_proyecto">Nombre Proyecto</label>
          <input maxlength="100" class="form-control" type="text" id="registro_nombre_proyecto">

          <label class="form-label" for="registro_fecha_proyecto">Fecha</label>
          <input class="form-control" type="date" id="registro_fecha_proyecto">
          


          


        </div>

        <div class="card-footer">
          <div class="pt-3 text-center">

          <button type="button" id="btn_admin_registro_proyecto" class="btn btn-danger">Registrar <i class="far fa-check-square"></i></button>

          


          </div>
        </div>


      </div>
    </div>
    
    
    
  </main>

@endsection

