<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!--clases-personalizadas-->
    <link rel="stylesheet" href="{{asset('css/table-round-blue.css')}}">
    <!--Buscador dinamico de tablas-->
{{--      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"/
  --}}    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    @section('css')
        
    @show
    
      
    <style>
        .row-striped:nth-of-type(odd) {
            background-color: #c9d5fc;
        }

        .row-striped:nth-of-type(even) {
            background-color: #ffffff;
        }

      
        
    </style>
    <title>@yield('title')</title>
</head>

<body>

    @section('content')
    @show
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

{{--  Buscador dinamico de tablas  --}}
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js "></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js "></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script>
  
    $(document).ready(function() {
        $('.table-round-blue').DataTable( {
            paging:   true,
            ordering: true,
            info:     true,
            responsive: true,
            autoWidth: false,    
            pagingType: "full_numbers",
            language: {
                "lengthMenu": 'Mostrar <select class = "custom-select form-select form-select-sm">'+
                    '<option value="10">10</option>'+
                    '<option value="25">25</option>'+
                    '<option value="50">50</option>'+
                    '<option value="-1">Todos</option>'+
                    '</select> registros',
                "zeroRecords": "No existen resultados",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "No hay resultados",
                "infoFiltered": "(filtrado de _MAX_ total registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Último",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
            }
        } );
    } );
</script>

<script>
    
(function(){
    if(<?php echo $errors->any()?'1':'0' ?>){
       
        var errors = <?php echo $errors ?>;
       // console.log(errors);
        Object.keys(errors).forEach(function(key){
            //  console.log(key);
            var element = document.getElementById(key);
           //   console.log(element);
            if(element != null){
                element.classList.add('is-invalid');
                element.addEventListener('input', function(){
                    element.classList.remove('is-invalid');
                });
            }
        })
    }
})()

</script>
@section('js')
    
@show
</html>

