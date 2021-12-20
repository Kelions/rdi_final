@extends("layouts.master")
@section("contenido")

<body class="center">

    <div class="card text-center mt1">
         
        <div class="card-header text-center bg-danger">
       <h4 class="bi bi-file-earmark" style="color:#f8f8f8	"> <i class="fas fa-arrow-circle-left"></i> Respuesta RDI </h6>


        </div>

        <div class="card-body">
            
            <div class="container">

                <div class="mb-5">
                    <textarea  id="respuesta_pregunta_rdi" cols="30" rows="10" >

                        {{--Meter los datos de contenido--}}
                    </textarea>
                </div>

                <div class="row row-cols-3 row-cols-lg-10 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3 border border-danger bg-light">
                            <h6><i class="fas fa-archive"></i> N° RDI</h6>
                            {{-- Solo Cambiar el Value para mostrar el Numro del RDI --}}
                            <input id="rdi_numero" class="form-control text-center" value="56" type="text"  disabled>

                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 border border-danger bg-light">
                        {{--Cambiar el value por el proyecto del RDI --}}
                            <h6><i class="fas fa-building"></i> PROYECTO</h6>
                            
                            <input type="text" class="form-control" id="respuesta_proyecto" value="" disabled>


                        </div>
                    </div>

                    <div class="col">

                        <div class="p-3 border border-danger bg-light">
                            {{--Cambiar el value por Nombre del Destinatario--}}
                            <h6><i class="fas fa-user-tie"></i> DESTINATARIO </h6>
                            <input type="text" class="form-control" value="Nombre generico" id="respuesta_destinatario" disabled>

                        </div>

                    </div>
                    
                    <div class="col">

                        <div class="p-3 border border-danger bg-light">

                            <h6><i class="fas fa-calendar-alt"></i> FECHA INGRESO</h6>
                            {{--Cambiar el vlue por la fecha de ingreso--}}
                            <input type="text" class="form-control" value="31/12/2021" id="respuesta_fecha" disabled>


                        </div>

                    </div>

                    <div class="col">

                        <div class="p-3 border border-danger bg-light">

                            <h6><i class="fas fa-user-edit"></i> PREPARADO POR: </h6>
                            
                            <input type="text" class="form-control" value="Nombre Emisor" id="respuesta_emisor" disabled>

                        </div>
                        
                    </div>

                    <div class="col">

                        <div class="p-3 border border-danger bg-light">

                            <h6><i class="fas fa-glasses"></i> ESPECIALIDAD</h6>

                            <input type="text" class="form-control" value="Especialidad" id="respuesta_especialidad" disabled>

                        </div>

                    </div>
                    {{--DIV COL solo para centrar btn--}}
                    <div class="col">

                    </div>

                   

                    <button id="btn_respuesta_descarga" type="button" class="btn btn-danger mt-3"> <i class="fas fa-file-download"></i> Descargar Archivos</button>

                    

                </div>
                

            </div>
            

        </div>


        <div class="card-footer mt-5">

            <div class="container">
            <textarea name="" id="respuesta_contenido" cols="30" rows="15" placeholder="Respuesta..."></textarea>

            </div>

            
            <div class="col mt-3">

                <button id="btn_respuesta_rdi" type="button" class="btn btn-danger">Responder</button>


            </div>
        </div>
    </div>
    
</body>


@endsection