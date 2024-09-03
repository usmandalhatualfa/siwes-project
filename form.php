<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>IT Project/Register Form</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand text-uppercase fw-bolder" href="index.html">02 Flowers</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#packages">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Transaction Section-->
  <div class="container mt-5 bg-dark text-white py-4">
    <h3 class="text-center pb-3">Make Transfer & Fill in your Details below</h3>
    <div class="row">
      <div class="col-sm-6">
        <h4><span class="text-info">Account Name:</span> 02 Flowers LTD</h4>
        <h4><span class="text-info">Account Number:</span> 0602619812</h4>
        <h4><span class="text-info">Bank:</span>GT Bank Plc</h4>
      </div>
      <div class="col-sm-6">
        <h4><span class="text-info">Account Name:</span> 02 Flowers LTD</h4>
        <h4><span class="text-info">Account Number:</span> 9060447607</h4>
        <h4><span class="text-info">Bank:</span>  Stanbic IBTC </h4>
      </div>
    </div>
  </div>

  <div class="container mt-1 py-2 bg-primary text-white">
    <h5 class="text-center py-2 bg-danger">Registration Form</h5>
    <form action="admin.php" method="POST">
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label fw-bolder">Full Name</label>
        <div class="col-sm-10">
          <input type="text" name="fName" class="form-control" placeholder="Your name here" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label fw-bolder">Email address</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label fw-bolder">Phone Number</label>
        <div class="col-sm-10">
          <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label fw-bolder">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label fw-bolder">Upload Receipt here</label>
        <div class="col-sm-10">
          <input type="file" name="upload" class="form-control" required>
        </div>
      </div>
      
      <button class="btn btn-danger text-center">Submit</button>
    </div>
  </form>
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>