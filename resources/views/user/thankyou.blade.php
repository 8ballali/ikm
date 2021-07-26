<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Thank You</title>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1>Terimakasih</h1>
                <p>Kami akan terus berusaha untuk meningkatkan pelayanan</p>
                <br>
                <a class="go-home" href="{{url('/')}}" role="button" style="text-decoration: none">Lanjutkan</a>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            e.preventDefault(); //will stop the link href to call the blog page

            setTimeout(function () {
                window.location.href = "{{utl('/')}}"; //will redirect to your blog page (an ex: blog.html)
                }, 3000); //will call the function after 2 secs.
        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
</body>

</html>
