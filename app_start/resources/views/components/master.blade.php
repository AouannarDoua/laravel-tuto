<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    @guest
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    @endguest
</head>
<body>  
    @guest
    @else  
        @include('partials.nav')
    @endguest
    
    <main>
        <div class="row my-4 mx-2">
            @include('partials.flashbag')
        </div>
        
        {{$slot}}
    </main>
    
    @guest
    @else 
        @include('partials.footer')
    @endguest
</body>
</html>
