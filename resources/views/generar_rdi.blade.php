@extends("layouts.master")
@section("contenido")

<body class="text-center">

    <div class="card text-center  mt-1">

        
        <div class="card-header text-center bg-danger">
       <h4 class="bi bi-file-earmark" style="color:#f8f8f8	"> <i class="fas fa-pen-square sizex5"></i> Ingreso de RDI </h6>

        </div>

        <div class="card-body">

            <div class="container">
            <div class="row row-cols-3 row-cols-lg-10 g-2 g-lg-3">
              <div class="col">
                <div class="p-3 border border-danger bg-light ">
                    <h6><i class="fas fa-archive"></i> N° RDI</h6>
                    {{-- Solo Cambiar el Placeholder para mostrar el Numro del RDI --}}
                    <input id="rdi_numero" class="form-control text-center" type="text" value="" disabled>
                </div>
              </div>
              <div class="col">
                <div class="p-3 border border-danger bg-light">
                    <h6><i class="fas fa-building"></i> PROYECTO</h6>
                    <label for="rdi_proyecto" class="form-label">Seleccione el proyecto</label>
                    <select class="form-select" id="rdi_proyecto"></select>
                </div>
              </div>
              <div class="col">
                <div class="p-3 border border-danger bg-light">
                    <h6><i class="fas fa-user-tie"></i> DESTINATARIO: </h6>
                <label for="rdi_destinatario" class="form-label">Nombre y apellidos </label>
                <input type="text" class="form-control" id="rdi_destinatario">

                </div>
              </div>
              <div class="col">
                  <div class="p-3 border border-danger bg-light">
                      <h6><i class="fas fa-calendar-alt"></i> FECHA INGRESO</h6>

                      <input id="rdi_fecha" class="form-control text-center" type="date" >

                  </div>

              </div>
              <div class="col">
                  <div class="p-3 border border-danger bg-light">
                      <h6><i class="fas fa-user-edit"></i> PREPARADO POR: </h6>
                      {{-- Autocompletar nombre de usuario por Javascript cambiar el value--}}
                      <input type="text" class="form-control text-center" id="rdi_remitente" value="Nombre de Usuario" disabled>

                  </div>
              </div>

              <div class="col">

                <div class="p-3 border border-danger bg-light">
                    <h6><i class="fas fa-glasses"></i> ESPECIALIDAD</h6>
                    <label for="rdi_especialidad" class="form-label"> Seleccione Especialidad</label>
                    <select class="form-select" id="rdi_especialidad"></select>

                </div>
              </div>
              
            </div>

            <div class="row row-cols-1 mt-5">

                <div class="col">
                    <div class="p-2 border border-danger bg-light">
                        <h6><i class="fas fa-book"></i> Tema</h6>

                        <input maxlength="100" class="form-control" type="text" placeholder="Cuenta de 100 Caracteres">

                    </div>
                </div>
                {{--Agregar maxlength segun la base de datos--}}
                <div class="col mt-3">
                    <div class="p-3 border border-danger bg-light">
                        <h6><i class="fas fa-pen-fancy"></i> INFORMACION SOLICITADA</h6>
                        
                        <textarea name="" id="rdi_contenido" cols="30" rows="15" placeholder="Escriba Aqui su Consulta..."></textarea>

                       
                    </div>

                </div>

                <div class="col mt-3">
                    <div class="p-3 border border-danger bg-light">
                        <h6><i class="fas fa-file"></i> PLANOS REF </h6>
                        
                        <input type="file" class="form-control-file mt-5" id="rdi_documento1">

                        <input type="file" class="form-control-file mt-3" id="rdi_documento2">
                    
                        <input type="file" class="form-control-file mt-3" id="rdi_documento3">
                    
                    </div>

                </div>

                <div class="col mt-3">
                    <div class="p-3 border border-danger bg-light">
                        <h6><i class="fas fa-location-arrow"></i> Ubicacion identificar ejes</h6>

                        <input class="form-control" type="text">


                    </div>

                </div>

                <div class="col mt-3">

                    <button id="btn_ingreso_rdi" type="button" class="btn btn-danger">Ingresar RDI</button>


                </div>

            </div>

        </div>



    </div>




    
    

</body>

@endsection