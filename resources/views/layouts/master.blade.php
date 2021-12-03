<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
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
    
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-4 mx-auto fixed-top" role="alert">
        {{session()->get('success')}}
        <<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show col-4 mx-auto fixed-top" role="alert">
        {{session()->get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @section('content')
    @show
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>