<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>InclusiJob</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">InclusiJob</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="howItWorksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            How it Works
          </a>
          <ul class="dropdown-menu" aria-labelledby="howItWorksDropdown">
            <li><a class="dropdown-item" href="employer.php">Employer - FAQ</a></li>
            <li><a class="dropdown-item" href="jobseeker.php">Jobseeker - FAQ</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="result.php">Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container mt-5">
  <h1>Welcome to InclusiJob</h1>
  <p>Your platform for inclusive job opportunities.</p>
  <!-- Search forms -->
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Looking for Talent</h5>
          <p class="card-text">Search and find talented individuals for your job openings.</p>
          <form action="talentsearch.php" method="GET">
            <input type="text" name="search_talent" placeholder="Search for talent...">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Looking for Work</h5>
          <p class="card-text">Find job opportunities that match your skills and preferences.</p>
          <form action="worksearch.php" method="GET">
            <input type="text" name="search_work" placeholder="Search for work...">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="footer" id="footer">
  <div class="container">
    <span>InclusiJob &copy; 2024 Inclusijob.ph. All rights reserved.</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
