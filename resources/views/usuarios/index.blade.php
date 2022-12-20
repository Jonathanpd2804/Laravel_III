

    <h1>Listado de precios</h1>
    

        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha</th>
                </tr>
                
                    
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr data-id='{{$user->id}}'>
                    <td>{{$user->nombre}}</td>
                    <td>{{$user->apellidos}}</td>
                    <td>{{$user->f_nacimiento}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>










