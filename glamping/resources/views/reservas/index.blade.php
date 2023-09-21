@extends('adminlte::page')

@section('title', 'Glamping Nube')

@section('content_header')

@stop

@section('content')
<br>
<div class="section-box">
<h1 id="demoFont">LISTA DE RESERVAS</h1>
</div>
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<br>
                    @can('crear-reserva')
                     <a class="btn" id="button-19" href="{{ route('reservas.create') }}">Crear Reserva</a>
                    @endcan
                    <br>
                    <br>

                    <table id="reservas" class="table table-striped mt-2">

<thead class="text-white">
<th style="display:none;">ID</th>
<th style="color:white;">Fecha inicio</th>
<th style="color:white;">Fecha fin</th>
<th style="color:white;">Fecha registro</th>
<th style="color:white;">Usuario</th>
<th style="color:white;">Cliente</th>
<!--<th style="color:white;">Domo</th>
<th style="color:white;">Servicios</th>
<th style="color:white;">Cantidad personas</th>
<th style="color:white;">Descuento</th>
<th style="color:white;">Total</th>-->
<th style="color:white;">Estado</th>
<th style="color:white;">Acciones</th>
</thead>
<tbody>
    @foreach($reservas as $reserva)
      <tr>
       <td style="display: none;">{{$reserva->id}}</td>
       <td>{{ $reserva->res_fecha_ini}}</td>
       <td>{{ $reserva->res_fecha_fin}}</td>
       <td>{{ $reserva->res_fecha_registro}}</td>
       <td>{{ $reserva->usuario->name. ' ' . $reserva->usuario->usu_apellido }}</td>
       <td>{{ $reserva->cliente->cli_nombre. ' ' . $reserva->cliente->cli_apellido }}</td>
       <td>{{ $reserva->res_estado}}</td>


       <td>
        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
        <a href="{{ route('reserva.pdf', $reserva->id) }}" class="btn btn-primary"><i class="fas fa-upload"></i></a>
            @can('ver-reserva')
            <a class="btn btn-secondary" href="{{route('reservas.show', $reserva->id) }}"><i class="fas fa-eye"></i></a>
         @endcan
           @can('editar-reserva')
           <a class="btn btn-info" href="{{route('reservas.edit', $reserva->id) }}"><i class="fas fa-pen"></i></a>
        @endcan
           @csrf
           @method('DELETE')
           @can('borrar-reserva')
           <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
           @endcan
        </form>
       </td>
      </tr>
    @endforeach
</tbody>

</table>

@stop

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384- 53vJWv+BujzBfQzYuhtDYW+Pj2уc1D3xpsK10YPAYjqT685Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<style>
    thead{
        background-color: rgb(74, 220, 162); 
    }
    .section-box {
    text-align:center;
    border: 1px solid #ffffff; /* Borde alrededor del cuadro */
    padding: 20px; /* Espaciado interno del cuadro */
    border-radius: 10px; /* Borde redondeado */
    background-color: #ffffff; /* Color de fondo del cuadro */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave */
}
    #demoFont {
font-family: "Arial Black", Gadget, sans-serif;
font-size: 33px;
letter-spacing: 0.2px;
word-spacing: 2px;
background-image: linear-gradient(to left, #11d298, #a4ffe3);
color: transparent;
background-clip: text;
-webkit-background-clip: text;
font-weight: 400;
text-decoration: none solid rgb(68, 68, 68);
font-style: normal;
font-variant: normal;
text-transform: none;
}
/* CSS */
#button-19 {
  appearance: button;
  background-color: #37eebd;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 100%;
}

#button-19:after {
  background-clip: padding-box;
  background-color: #11efca;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

#button-19:main,
#button-19:focus {
  user-select: auto;
}

#button-19:hover:not(:disabled) {
  filter: brightness(1.1);
  -webkit-filter: brightness(1.1);
}

#button-19:disabled {
  cursor: auto;
}
</style>

@stop

@section('js')

<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="DataTables/Buttons-2.4.2/js/dataTables.buttons.min.js"></script>
<script  src="DataTables/JSZip-3.10.1/jszip.min.js"></script>
<script  src="DataTables/pdfmake-0.2.7/pdfmake.min.js"></script>
<script src="DataTables/pdfmake-0.2.7/vfs_fonts.js"></script>
<script src="DataTables/Buttons-2.4.2/js/buttons.html5.min.js"></script>

<script> 
$(document).ready(function() {
$('#reservas').DataTable({ 
    "searching": true,
    "language":
{
    "search": "Buscar",
    "lengthMenu": "Mostrar _MENU_ registros por página",
    "info": "Mostrando página _PAGE_ de _PAGES_",
    "paginate": {
        "previous": "Anterior",
        "next": "Siguiente",
        "first": "Primero",
        "last": "Último"
    }
    
}

}


);
});

</script>
<script>
    console.log('Hi!');
</script>
<script>
    // Agrega este script en la vista
    $(document).ready(function () {
        $('.eliminar-domo').on('click', function (e) {
            e.preventDefault();
            var domoId = $(this).data('domo-id');
            
            if (confirm('¿Estás seguro de que deseas eliminar este domo?')) {
                $.ajax({
                    type: 'DELETE',

                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        alert(response.message); // Muestra el mensaje de éxito
                        window.location.reload(); // Actualiza la página si el domo se eliminó correctamente
                    },
                    error: function (response) {
                        // Muestra el mensaje de error y luego lo oculta después de 5 segundos
                        $('#error-message').fadeIn().delay(5000).fadeOut();
                    }
                });
            }
        });
    });
</script>

@stop