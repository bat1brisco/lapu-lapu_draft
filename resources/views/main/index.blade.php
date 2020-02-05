<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>City of Lapu-Lapu | Official Website of City Government of Cebu</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">
        <link rel="stylesheet" href="css/app.css">
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com//docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <!-- Favicons -->
        <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="https://pbs.twimg.com/profile_images/1096973957/city_400x400.jpg" sizes="32x32" type="image/png">
        <link rel="icon" href="https://pbs.twimg.com/profile_images/1096973957/city_400x400.jpg" sizes="16x16" type="image/png">
        <link rel="manifest" href="https://getbootstrap.com//docs/4.4/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com//docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="https://pbs.twimg.com/profile_images/1096973957/city_400x400.jpg">
        <meta name="msapplication-config" content="https://getbootstrap.com//docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">


        <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/sticky-footer.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.4/examples/carousel/carousel.css" rel="stylesheet">
    </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-center">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="content-start">
            <div class="text-center p-1">
              <a class="navbar-brand text-light" href="#">Know Lapu-Lapu City</a> 

              <a class="navbar-brand text-light" href="#">Online Services</a>

              <a class="navbar-brand text-light" href="#">Departments</a>

              <a class="navbar-brand text-light" href="#">Transparency</a>

              <a class="navbar-brand text-light" href="#">Events</a>
              
              <a class="navbar-brand text-light" href="#">Contact US</a>
            </div>
          </div>
        </nav>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-4 px-0">
                    <img src="images/sample.png" alt="">
                </div>
                <div class="col-md-4 px-0">
                    <img src="images/sample.png" alt="">
                </div>
                <div class="col-md-4 px-0">
                    <img src="images/sample.png" alt="">
                </div>
            </div>
        </div>
      </div>

    </header>

    <main role="main">
      <div class="container-fluid mt-2">
        <div>
          
        </div>
        <div id="myCarousel" class="carousel slide px-32" data-ride="carousel">
          <ol class="carousel-indicators">
            @foreach ($images as $key => $image)
            <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{$key == 0 ? 'active' : ''}}"></li>
            @endforeach
          </ol>
          <div class="carousel-inner">
            @foreach ($images as $key => $item)
              <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{url('storage/Banner/' . $item->file_name)}}" alt="">
              </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <footer class="h-16 p-4 bg-dark fixed-bottom">
        <span class="text-center text-light"><p class="no-underline">The offical website of the City Government of Lapu-Lapu City | {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now())->format('l, F d, Y')  }} | <a  href="facebook.com" class="text-decoration-none"><i class="fa fa-facebook"></i> Facebook </a> </p> </span>
      </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
