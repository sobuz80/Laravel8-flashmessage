<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</head>

<body>

  

<div class="container">

    

    <div class="row">

        <div class="col-md-12 mt-5">

            @include('flashMessage')

        </div>

        <div class="col-md-12">

            @yield('content')

        </div>

    </div>

  

</div>


</body>

</html>