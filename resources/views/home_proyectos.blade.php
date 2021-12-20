@extends("layouts.master")
@section("contenido")

    <body style="background: white">
        
        <div class="container text-center"> 

            <div class= "col-lg-12 col-lg-offset-4" >

            

            
                <div class="card text-center rounded border-danger mt-5" style="width: 100%;">
                
                    <div class="card-header border-danger" style="background: rgb(219, 219, 219)">
                    <h4>Gestion de Proyectos <i class="fas fa-building"></i></h4>
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
                            <tbody id="tabla_proyectos_usuario">
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>
                                    <a href="{{route('home_rdi')}}" class="btn btn-danger">RDI <i class="fas fa-archive"></i></a>

                                </td>
                                

                            </tbody>
                        </table>
                    


                    </a>
                    </div>
                    <div class="card-footer text-muted border-danger style='background: rgb(219, 219, 219)">
                    RDI
                    </div>
                </div>
            </div>
        </div>
    </body>


@endsection