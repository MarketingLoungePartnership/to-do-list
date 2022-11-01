<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            background-color: #eee;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="row">
            <!--Header-->
            <div class="float-img" style="padding: 20px 0 50px 40px">
                <img src="{{ asset('images/logo.png') }}" alt="MLP logo">
            </div>
        </div>

        <!--Error messages on top of page-->
        @if ($errors->any())
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <ul class="unstyled">
                            <li>{{ implode('', $errors->all(':message')) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!--Main page content-->
        <div class="row">
            <div class="container">
                @yield('content')
            </div>
        </div>


        <!--Footer-->
        <div class="row">
            <div class="col-md-12" style="padding-top: 200px">
                <p class=text-center>Copyright <span>&copy</span> 2020 All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
