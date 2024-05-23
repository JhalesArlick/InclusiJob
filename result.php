<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Results - InclusiJob</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <style>
    /* Custom font and color styles */
    .navbar-brand {
      font-family: 'Roboto', sans-serif;
      color: #007bff; /* Blue color for InclusiJob */
    }

    .navbar-nav .nav-link {
      color: black !important; /* Black color for other links */
    }

    /* Sticky buttons */
    .sticky-buttons {
      position: fixed;
      bottom: 50px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #fff;
      padding: 10px 20px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .sticky-buttons button {
      margin-right: 10px;
    }

    /* Employers and Workers sections */
    .section {
      display: none;
    }

    .section.active {
      display: block;
    }
  </style>
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
  <div id="employers-section" class="section">
    <h1>View Employers</h1>
    <!-- Add content for employers section here -->
  </div>

  <div id="workers-section" class="section">
    <h1>View Workers</h1>
    <!-- Add content for workers section here -->
  </div>
</div>

<div class="sticky-buttons">
  <button id="viewEmployersBtn">View Employers</button>
  <button id="viewWorkersBtn">View Workers</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  // Show corresponding section when clicking on buttons
  document.getElementById('viewEmployersBtn').addEventListener('click', function() {
    document.getElementById('employers-section').classList.add('active');
    document.getElementById('workers-section').classList.remove('active');
  });

  document.getElementById('viewWorkersBtn').addEventListener('click', function() {
    document.getElementById('employers-section').classList.remove('active');
    document.getElementById('workers-section').classList.add('active');
  });

  // Sticky buttons functionality
  window.addEventListener('scroll', function() {
    var stickyButtons = document.querySelector('.sticky-buttons');
    if (window.scrollY > 100) {
      stickyButtons.style.display = 'block';
    } else {
      stickyButtons.style.display = 'none';
    }
  });
</script>
</body>
</html>
