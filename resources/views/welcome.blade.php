<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spic & Span Auto Detailing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>.carousel-item img {
  width: 500px;
  height: 450px;
  object-fit: cover;}

  .card-holder-container {
  display: flex;
  justify-content: space-between;
}

.card {
  width: 30%;
  text-align: center;
  padding: 20px;
}

.card-title {
  font-size: 24px;
  margin-top: 20px;
}

.card-text {
  font-size: 16px;
  margin: 20px 0;
}

.btn {
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #000;
  color: #fff;
  border: none;
  border-radius: 10px;
  text-decoration: none;
}

.testimonials {
        background-color: #f5f5f5;
        padding: 50px;
        text-align: center;
    }

    .testimonial-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
        padding: 40px;
        max-width: 400px;
        display: inline-block;
    }

    .testimonial-card p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .testimonial-card .author {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

</style>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-black">
        <a class="navbar-brand" href="#">Spic & Span Auto Detailing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/BMW-M140i-front.jpg') }}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 1</h5>
                <p>This is slide 1 description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/car polish.jpg') }}" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 2</h5>
                <p>This is slide 2 description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/carwash.jpg') }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 3</h5>
                <p>This is slide 3 description</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br><br>
<div class="card-holder-container">
  <div class="card">
    <img src="card-1-image.jpg" alt="card 1 image">
    <h3 class="card-title">Interior Detailing</h3>
    <p class="card-text">Our interior detailing service includes a thorough cleaning of the inside of your vehicle, including the dashboard, seats, carpets, and upholstery.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>

  <div class="card">
    <img src="card-2-image.jpg" alt="card 2 image">
    <h3 class="card-title">Exterior Detailing</h3>
    <p class="card-text">Our exterior detailing service includes a deep cleaning of the outside of your vehicle, including the paint, wheels, and windows.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>

  <div class="card">
    <img src="card-3-image.jpg" alt="card 3 image">
    <h3 class="card-title">Complete Detailing</h3>
    <p class="card-text">Our complete detailing service includes a combination of our interior and exterior detailing services for a comprehensive cleaning of your vehicle.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <h2 class="text-center mb-5">Contact Us</h2>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" id="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <hr>
      <p class="text-center">
        Phone: +265 999 690 332<br>
        Email: marankhata@spicandspangmw.com<br>
        Address:
      </p>
    </div>
    <div class="col-md-6">
      <div id="map" style="width:100%;height:500px;"></div>
      <script>
        function initMap() {
          var location = {lat: 37.7749, lng: -122.4194};
          var map = new google.maps.Map(
              document.getElementById("map"), {zoom: 10, center: location});
          var marker = new google.maps.Marker({position: location, map: map});
        }
      </script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
      </script>
    </div>
  </div>
</div>
