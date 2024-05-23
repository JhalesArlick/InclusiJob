<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar-brand {
            font-family: 'Roboto', sans-serif;
            color: #007bff;
            cursor: pointer;
        }

        .navbar-nav .nav-link {
            color: black !important;
        }

        .talent {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px; /* Adjust padding for spacing */
            border-bottom: 1px solid #ccc; /* Solid line */
        }

        .talent-image {
            width: 100px; /* 2x2 inch equivalent in px at 96dpi */
            height: 100px;
            margin-right: 20px;
        }

        .talent-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .talent-info {
            flex: 1;
        }
        .talent-info p {
            font-size: 18px; /* Slightly larger font size */
        }


        .social-icons {
    position: fixed;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
}

.social-icons a {
    display: block;
    margin-bottom: 10px;
}

.social-icons img {
    width: 30px; /* Adjust the width of the logos as needed */
    height: auto;
}

        
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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

<div class="container mt-5 pt-5"> <!-- Adjusted pt-5 (padding top) -->
    <h1 class="mb-4">Talent Search Results</h1>

    <!-- Talent 1: Steve Jobs -->
    <div class="talent" data-bs-toggle="modal" data-bs-target="#talentModal1">
        <div class="talent-image">
            <img src="steve.jpg" alt="Steve Jobs">
        </div>
        <div class="talent-info">
            <h3>Steve Jobs</h3>
            <p>Steve Jobs was an American business magnate, industrial designer, investor, and media proprietor. He was the chairman, chief executive officer (CEO), and co-founder of Apple Inc.</p>
        </div>
    </div>



    <div class="social-icons">
    <a href="https://www.facebook.com/your-facebook-page" target="_blank"><img src="fb.png" alt="Facebook" style="width: 70px; height: 70px;"></a>
    <a href="https://twitter.com/your-twitter-page" target="_blank"><img src="twitter.png" alt="Twitter" style="width: 70px; height: 70px;"></a>
    <a href="https://www.instagram.com/your-instagram-page" target="_blank"><img src="ig.webp" alt="Instagram" style="width: 70px; height: 70px;"></a>
</div>








    <!-- Talent 2: Mark Zuckerberg -->
    <div class="talent" data-bs-toggle="modal" data-bs-target="#talentModal2">
        <div class="talent-image">
            <img src="mark.jpg" alt="Mark Zuckerberg">
        </div>
        <div class="talent-info">
            <h3>Mark Zuckerberg</h3>
            <p>Mark Zuckerberg is an American media magnate, internet entrepreneur, and philanthropist. He is known for co-founding Facebook, Inc.</p>
        </div>
    </div>

    <!-- Talent 3: Elon Musk -->
    <div class="talent" data-bs-toggle="modal" data-bs-target="#talentModal3">
        <div class="talent-image">
            <img src="elon.jpg" alt="Elon Musk">
        </div>
        <div class="talent-info">
            <h3>Elon Musk</h3>
            <p>Elon Musk is a business magnate, industrial designer, and engineer. He is the founder, CEO, CTO, and chief designer of SpaceX.</p>
        </div>
    </div>
    
    <!-- Talent 4: Alyza Elsa -->
    <div class="talent" data-bs-toggle="modal" data-bs-target="#talentModal4">
        <div class="talent-image">
            <img src="alyza.png" alt="Alyza Elsa">
        </div>
        <div class="talent-info">
            <h3>Alyza Elsa</h3>
            <p>Computer proficiency. Leadership. Communication. Organizational know-how. People skills. Collaboration talent. Problem-solving abilities.</p>
        </div>
    </div>

    <!-- Talent 5: Adrian Santiago -->
    <div class="talent" data-bs-toggle="modal" data-bs-target="#talentModal5">
        <div class="talent-image">
            <img src="adrian.png" alt="Adrian Santiago">
        </div>
        <div class="talent-info">
            <h3>Adrian Santiago</h3>
            <p>I offer extensive SEO services such as keyword research, on-page optimization, and content production. My expertise is in improving meta descriptions, optimizing blog content, and increasing website visibility.</p>
        </div>
    </div>
</div>

<!-- Talent Modals -->
<div class="modal fade" id="talentModal1" tabindex="-1" aria-labelledby="talentModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="talentModal1Label">Steve Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bachelor's Degree in Engineering</p>
        <p>Steve Jobs was an American entrepreneur, business magnate, and industrial designer. He was the chairman, chief executive officer (CEO), and co-founder of Apple Inc.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="talentModal2" tabindex="-1" aria-labelledby="talentModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="talentModal2Label">Mark Zuckerberg</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bachelor's Degree in Computer Science</p>
        <p>Mark Zuckerberg is an American computer programmer and Internet entrepreneur. He is the co-founder of Facebook, Inc. and serves as its chairman, chief executive officer, and controlling shareholder.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="talentModal3" tabindex="-1" aria-labelledby="talentModal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="talentModal3Label">Elon Musk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bachelor's Degree in Physics</p>
        <p>Elon Musk is an industrial designer, technology entrepreneur, and philanthropist. He is the founder, CEO, CTO, and chief designer of SpaceX; early investor, CEO, and product architect of Tesla, Inc.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="talentModal4" tabindex="-1" aria-labelledby="talentModal4Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="talentModal4Label">Alyza Elsa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bachelor of Science in Information Technology</p>
        <p>Alyza Elsa is an industrial designer and technology entrepreneur. She is skillful in networking.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="talentModal5" tabindex="-1" aria-labelledby="talentModal5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="talentModal5Label">Adrian Santiago</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bachelor's Degree</p>
        <p>Adrian Santiago is committed to growing organic traffic and improving search engine rankings. He strives to provide successful SEO tactics that are suited to your company's demands.</p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>
</body>
</html>

