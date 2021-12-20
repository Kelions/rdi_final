@extends("layouts.master_admin")
@section("contenido_admin")


<div class="container-fluid">

    <div class="card bg-white border border-danger">

        <div class="card-header text-center border border-danger">

            <h4>Solicitudes de Registro de Usuario</h4>

        </div>

        <div class="card-body text-center">

            <table class="table table-dark table-striped">
                <thead>
                    <th>Nombre de Usuario</th>
                    <th>Apellido de Usuario</th>
                    <th>Rut</th>
                    <th>Especialidad</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>rol</th>
                    <th>#</th>
                </thead>

                <tbody id="tbody_admin_usuarios">
                    <td>TestTestTestTestTest</td>
                    <td>TestTestTestTestTest</td>
                    <td>TestTestTestTestTest</td>
                    <td>TestTestTestTestTest</td>
                    <td>TestTestTestTestTest</td>
                    <td>TestTestTestTestTest</td>
                    <td><select class="form-control text-light" name="select_admin_rol_usuario" id="select_admin_rol_usuario" style="background-color: rgb(19, 16, 16)">

                        <option value="0" selected>Usuario</option>
                        <option value="1" >Administrador</option>

                        </select>
                    </td>
                    <td>
                        <button id="btn_admin_solicitudes" type="button" class="btn btn-danger">Ingresar</button>
                    </td>

                </tbody>

            </table>

        </div>

    </div>

</div>
@endsection