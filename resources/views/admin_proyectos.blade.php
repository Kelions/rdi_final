@extends("layouts.master_admin")
@section("contenido_admin")
<body style="background: white">
    <body style="background: white">
        
        <div class="container text-center"> 
      
            <div class= "col-lg-12 col-lg-offset-4" >
      
            
      
            
                <div class="card text-center rounded border-danger mt-5" style="width: 100%;">
                
                    <div class="card-header border-danger" style="background: rgb(219, 219, 219)">
                    <h4>Gestion de Proyectos <i class="fas fa-building"></i></h4>
                    </div>
                    <div class="mt-3 pb-3">
                        <button id="btn_admin_guardar_proyecto" type="button" class="btn btn-info">Guardar Cambios</button>
                    </div>
                    <div class="card-body" style='background: rgb(219, 219, 219)'>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Nombre Proyecto</th>
                                <th scope="col">Fecha Inicio</th>
                                <th scope="col">Estado</th>
                                <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody id="tabla_admin_proyectos">
                                <td>Test</td>
                                <td>Test</td>
                                <td> <select class="form-control text-light" id="select_admin_proyecto_estado" style="background-color: rgb(19, 16, 16)">
                                  <option value="activo" selected>Activo</option>
                                  <option value="finalizado">Finalizado</option>
      
                                </select></td>
                                <td>
                                    <a href="{{route('home_rdi')}}" class="btn btn-danger">RDI <i class="fas fa-archive"></i></a>
      
                                </td>
                                
      
                            </tbody>
                        </table>
                    
      
      
                    </a>
                    </div>
                    <div class="card-footer text-muted border-danger style='background: rgb(219, 219, 219)">
                    Proyectos
                    </div>
                </div>
            </div>
        </div>
      </body>
@endsection