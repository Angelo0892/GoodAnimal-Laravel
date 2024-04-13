<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoodAnimal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/style-admin.css')}}">
</head>

<body>
    
    @include('admin.components.nav-bar')

    
    <section class="row">
        
        <div class="col-lg-2">
            @include('admin.components.aside')
        </div>
        
        <div class="col-lg-10 content_table">
            @yield('content_html')
        </div>
    
    </section>
    
</body>
</html>