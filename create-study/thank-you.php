<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Study</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/Shift-logo.png" alt="">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fa fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto mt-2">
            <li class="nav-item">
              <a class="nav-link" href="#">My studies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Customer Profiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout&nbsp;&nbsp;<i class="fa fa-power-off"></i></a>
            </li>
          </ul>
        </div>
    </nav>


    <section class="question_section business--questions review--study">
      <h1 class="heading">Review study</h1>
        <form>
            <div class="create--study">
                <div class="row no-gutters">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5 class="thin">Study name</h5>
                        <span class="answer">Alpha Zero One</span>
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5 class="thin">Customer Profile</h5>
                        <input type="text" class="form-control" placeholder="Type here" disabled="true" value="10 participants">
                        <input type="text" class="form-control mt-2" placeholder="Type here" disabled="true" value="Regular Joe Profile">
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5>Questions</h5>
                        <div class="review--question">
                            <button type="button" class="question--btn">
                                <i class="fa fa-question-circle"></i>
                            </button>
                            <span>What are your top challenges in the early career recruitment space?</span>
                        </div>
                        <div class="review--question">
                            <button type="button" class="question--btn">
                                <i class="fa fa-question-circle"></i>
                            </button>
                            <span>How do you currently attract talent to apply for open early career opportunities?</span>
                        </div>
                        <div class="review--question">
                            <button type="button" class="question--btn">
                                <i class="fa fa-question-circle"></i>
                            </button>
                            <span>What are your top challenges in the early career recruitment space?</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        <div class="help--alert">
                            <button type="button" class="question--btn">
                                <i class="fa fa-question-circle"></i>
                            </button>
                            Need help? Want professionally formed questions? We are here to help, send us a message.
                        </div>
                    </div>
                </div>
                <div class="row create--study-actions mt-4">
                    <button type="button" class="cancel--btn mr-4">Cancel</button>
                    <button type="button" class="next--btn">Next</button>
                </div>
            </div>
        </form>
    </section>

    <!-- BUSINESS QUESTIONS STUDY -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <img src="../assets/img/Arrow.png" class="modal--arrow" alt="">
                  <h4 class="modal-title">Which Audience is this study for?</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <p>Are you planning on sending this study to a targeted demographic 
                    group or sharing it with your own respondents?</p>
                  
                  <div class="modal-actions mt-4 pt-4">
                      <a href="./create-your-study.html" class="review--btn mb-3">Current Customers</a>
                      <a href="#" class="review--btn mb-3" data-dismiss="modal">Targeted Customers</a>
                  </div>
              </div>
          </div>
        </div>
      </div>

    <footer>
      <div class="blur"></div>
      <div class="row">
        <div class="col-md-3">
          <h3>Address</h3>
          <p>Tectonic<br>
            1–15 Clere Street<br>
            London EC2A 4UY</p>
        </div>
        <div class="col-md-3">
          <h3>Phone</h3>
          <p>+44 (0) 1234 5678</p>
        </div>
        <div class="col-md-3">
          <h3>Email</h3>
          <a href="mailto:info@shift.com">info@shift.com</a>
        </div>
        <div class="col-md-3 d-flex justify-content-end socials">
            <a href="#" class="mr-3">
              <img src="../assets/img/insta.png" alt="">
            </a>
            <a href="#" class="mr-3">
              <img src="../assets/img/fb.png" alt="">
            </a>
            <a href="#">
              <img src="../assets/img/twitter.png" alt="">
            </a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <h3 >Help and Advice</h3>
          <a href="#">How it works</a>
          <a href="#">Terms & Conditioons</a>
          <a href="#">Privacy Policy</a>
        </div>
        <div class="col-md-3">
          <h3>Company</h3>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
      </div>
      <div class="footer-copy d-flex align-items-center justify-content-between">
        <img src="../assets/img/Shift-logo.png" alt="">
        <span>&copy; Tectonic 2020</span>
      </div>
    </footer>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>