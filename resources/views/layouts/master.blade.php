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


      
    <style>
        .row-striped:nth-of-type(odd) {
            background-color: #c9d5fc;
        }

        .row-striped:nth-of-type(even) {
            background-color: #ffffff;
        }

        a:hover{
            background-color: darkblue  ;
            border-radius: 5px;
        }
        tr:hover {
            background-color: gainsboro;
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



<script>
    
(function(){
    if(<?php echo !empty($errors->first())?'1':'0' ?>){
        var errors = <?php echo $errors ?>;
        // console.log(errors);
        Object.keys(errors).forEach(function(key){
            //  console.log(key);
            var element = document.getElementById(key);
            //  console.log(element);
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

</html>

