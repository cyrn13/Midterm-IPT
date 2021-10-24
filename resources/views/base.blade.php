<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <title>CheapTalk</title>
</head>
<body>
@include('nav')

<div class="landing-page">


@if(session('Error'))
    <div class="alert alert-danger">
        <div class="container">
            {{session('Error')}}
        </div>
    </div>

    @endif

    @if(session('Message'))
    <div class="alert alert-info">
        <div class="container">
            {{session('Message')}}
        </div>
    </div>
    
    @endif

    @if(session('errors'))
    <div class="alert alert-danger">
        <div class="container">
            Please fix the following errors
            <ul>
                @foreach(session('errors')->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
    @endif


    <div class="container">
    @yield('content')
    </div>
    
</body>
</html>