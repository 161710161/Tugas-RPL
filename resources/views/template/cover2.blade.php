@extends('layouts.gallery')

@section('content')
<!DOCTYPE HTML>
<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta name="author" content="lolkittens" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title>Membuat Tampilan Gallery Dengan Bootstrap</title>
    
    <!-- CSS Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    
    <!-- CSS Lightbox -->
    <link href="css/lightbox.css" rel="stylesheet"/>
</head>

<div class="container-fluid">
  <body style="background: url(gambar/sc2.jpg) no-repeat center center fixed;
  -webkit-background-size:-cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

    <div class="container">
        <div class="row mtb-60">
            <div class="heading">
               <center><h1 style="color: white"><b>Gallery</b></h1></center><br>
            </div>
            <div class="row">
                <div class="col-md-4">
                        <a class="example-image-link"><img class="thumbnail img-responsive" alt="Bootstrap template" src="gambar/knn.png" /> </a>
                    
                </div>
                <div class="col-md-4">
                        <a class="example-image-link"><img class="thumbnail img-responsive" alt="Bootstrap template" src="gambar/sao.png" /> </a>
                    
                </div>
                <div class="col-md-4">
                        <a class="example-image-link"><img class="thumbnail img-responsive" alt="Bootstrap template" src="gambar/s1.jpg" /> </a>
                    
                </div>
                <div class="col-md-4">
                        <a class="example-image-link"><img class="thumbnail img-responsive" alt="Bootstrap template" src="gambar/s2.jpg" /> </a>
                    
                </div>
                <div class="col-md-4">
                        <a class="example-image-link"><img class="thumbnail img-responsive" alt="Bootstrap template" src="gambar/op.jpg" /> </a>
                    
                </div>
                <div class="col-md-4">
                        <a class="example-image-link"><img class="thumbnail img-responsive" alt="Bootstrap template" src="gambar/n.jpg" /> </a>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- jQuery Lightbox -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>


@endsection
