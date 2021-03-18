<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quiz1 - Oudessya Sesha</title> 
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> 
</head> 
<body id="page-top"> 
    <div id="wrapper"> 
        @include("Template/sidebar") 
        <div id="content-wrapper" class="d-flex flex-column"> 
            <div id="content">
                @include("Template/header")
                <div class="container-fluid"> 
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> 
                </div>  
            </div> 
            @include("Template/footer") 
        </div> 
    </div> 
    @include("Template/logout") 
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script> 
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script> 
</body> 
</html>