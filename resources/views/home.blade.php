@extends("layouts.master")
@section("contenido")

    <body style="background: white">
        
        <div class="container text-center"> 

            <div class= "col-lg-12 col-lg-offset-4" >

            

            
                <div class="card text-center rounded border-danger mt-5" style="width: 100%;">
                
                    <div class="card-header border-danger" style="background: rgb(219, 219, 219)">
                    <h4>Servicio de Gestion RDI</h4>
                    </div>
                    <div class="card-body" style='background: rgb(219, 219, 219)'>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Remitente</th>
                                <th scope="col">Accion</th>
                                </tr>
                            </thead>
                        </table>
                    <a href="#" class=" pt-1 btn btn-danger">Generar RDI


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