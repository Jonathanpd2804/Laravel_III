@extends('layouts.app')

@section("contenido")

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

<script>
     $(document).ready(function() {
    $('#tabla').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
     $(document).ready(function(){

        


$("#tabla").on("click",".bi-trash-fill",function(e){
    e.preventDefault();
    //confirmar con sweetalert
    Swal.fire({
        title: '¿Está seguro?',
        text: "No podras revertir esta accion",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!'
    }).then((result) => {
        if (result.isConfirmed) {
            //redireccionar a la url
            //borrar con ajax
            const tr=$(this).closest("tr"); //tr más cercano al botón, o sea el tr que contiene al botón
            const id=tr.data("id"); //obtener el id del tr
            $.ajax({
                url: "{{url('/precios')}}/"+id,
                method: "DELETE",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(){
                    tr.fadeOut();
                }
            })
        }
    })    
});
});

$(document).ready( function () {
    $('#tabla').DataTable({
        "columnDefs": [
            
          
          { "orderable": false, "targets": 1 },//ocultar para columna 1
          { "orderable": false, "targets": 2 },//ocultar para columna 1

          //`Asi para cada columna`...
        ],
    });
} );


</script>

    

@endsection







