<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/ezmark.css">
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


    <section class="question_section dashboard">
      <h1 class="heading">Study overview</h1>

      <div class="row dashboard_wrapper--row">
        <div class="col-md-12">
          <div class="control-options">
            <div class="d-flex justify-content-between">
              <div>
                <select class="custom--select">
                  <option class="form-control" data-display="Choose a question type">Choose a question type</option>
                  <option value="1">Yes/No</option>
                  <option value="numericscale">Numeric scale - opinion</option>
                  <option value="singlechoice">Single choice</option>
                  <option value="multiplechoice">Multiple choice</option>
                  <option value="opentext">Open Text</option>
                </select>
              </div>
              
              <div class="checkbox--wrapper">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">View studies to Current Customers
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">View studies to Targeted Customers
                  </label>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">
              <button  data-toggle="modal" data-target="#myModal" class="create_study--btn">Create new study&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
            </div>
          </div>
        </div>
        <div class="col-md-12 d-flex justify-content-end learn--link-wrap"> 
          <a href="#" class="learn--link">Learn how to set up a study</a>
        </div>
        <div class="col-md-12">
          <div class="row study--single">
            <div class="col-md-1 arrow--wrapper">
              <img src="../assets/img/Arrow.png" class="arrow--icon" alt="">
            </div>
            <div class="col-md-5 responsive--mob">
              <div class="head">
                Study name
              </div>
              <div class="name">
                Alpha One Zero
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Customer type
              </div>
              <div class="type">
                Target
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Status
              </div>
              <div class="status draft">
                <div></div> Draft
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Responses
              </div>
              <div class="responses">
                0/0
              </div>
              <div class="date">Date: 29 aug ‘20</div>
            </div>
            
          </div>
          <div class="row study--single">
            <div class="col-md-1 arrow--wrapper">
              <img src="../assets/img/Arrow.png" class="arrow--icon" alt="">
            </div>
            <div class="col-md-5 responsive--mob">
              <div class="head">
                Study name
              </div>
              <div class="name">
                Alpha One Zero
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Customer type
              </div>
              <div class="type">
                Target
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Status
              </div>
              <div class="status active">
                <div></div> Active
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Responses
              </div>
              <div class="responses">
                0/0
              </div>
              <div class="date">Date: 29 aug ‘20</div>
            </div>
            
          </div>
          <div class="row study--single">
            <div class="col-md-1 arrow--wrapper">
              <img src="../assets/img/Arrow.png" class="arrow--icon" alt="">
            </div>
            <div class="col-md-5 responsive--mob">
              <div class="head">
                Study name
              </div>
              <div class="name">
                Alpha One Zero
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Customer type
              </div>
              <div class="type">
                Target
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Status
              </div>
              <div class="status closed">
                <div></div> Closed
              </div>
            </div>
            <div class="col-md-2 responsive--mob">
              <div class="head">
                Responses
              </div>
              <div class="responses">
                0/0
              </div>
              <div class="date">Date: 29 aug ‘20</div>
            </div>
            
          </div>
        </div>

      <img src="../assets/img/dashboard-fight.png" class="dashboard--fig" alt="">

      <!-- POPUP TECTONIC -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <img src="../assets/img/Arrow.png" class="modal--arrow" alt="">
                  <h4 class="modal-title">Do you want to make a Tectonic Customer Discovery study or a regular study?</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <p>The Tectonic Customer Discovery study deepens you understanding of what 
                    problems you are trying to solve, what your assumptions 
                    are and which hypothesis you are trying to validate through your study</p>
                  
                  <div class="modal-actions mt-4 pt-4">
                      <a href="./business-questions.php" class="review--btn mb-3">Tectonic Customer Discovery Study</a>
                      <a href="#" class="review--btn mb-3" data-toggle="modal" data-dismiss="modal" data-target="#myModalRegularStudy">Regular Study</a>
                  </div>
              </div>
          </div>
        </div>
      </div>
  
      <!-- POPUP REGULAR STUDY -->
      <div class="modal fade" id="myModalRegularStudy">
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
                      <a href="./create-your-study-current-customers.php" class="review--btn mb-3">Current Customers</a>
                      <a href="./create-your-study-targeted-customers.php" class="review--btn mb-3">Targeted Customers</a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    

    <footer class="dash-footer">
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
    <script src="../assets/js/jquery.ezmark.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>

$(document).ready(function() {
    $('select').niceSelect();

    
});

    </script>
</body>
</html>