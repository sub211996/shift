<?php include "../includes/header.php" ?>


    <section class="question_section business--questions">
      <h1 class="heading">Add your Business Questions</h1>
        <form>
            <div class="create--study">
                <div class="row no-gutters">
                    <div class="col-11 offset-md-1 business-info">
                        <button type="button" class="question--btn" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-question-circle"></i>
                        </button>
                        <h5>
                            Add up to 5 business questions here. These are the actual business 
                            questions you are looking to get answers to. Your business questions 
                            are stuff like... 
                        </h4>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5>Question 1 (required)</h5>
                        <input type="text" class="form-control" placeholder="e.g. ipsum dolor samat it ">
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                      <h5>Question 2</h5>
                      <input type="text" class="form-control" placeholder="Type here">
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                  <div class="col-md-1">
                      <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                  </div>
                  <div class="col-md-11">
                    <h5>Question 3</h5>
                    <input type="text" class="form-control" placeholder="Type here">
                  </div>
                </div>
                <div class="row no-gutters mt-4">
                  <div class="col-md-1">
                      <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                  </div>
                  <div class="col-md-11">
                    <h5>Question 4</h5>
                    <input type="text" class="form-control" placeholder="Type here">
                  </div>
              </div>
              <div class="row no-gutters mt-4">
                <div class="col-md-1">
                    <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                </div>
                <div class="col-md-11">
                  <h5>Question 5</h5>
                  <input type="text" class="form-control" placeholder="Type here">
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
                      <a href="./create-your-study.php" class="review--btn mb-3">Current Customers</a>
                      <a href="#" class="review--btn mb-3" data-dismiss="modal">Targeted Customers</a>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <?php include "../includes/footer.php" ?>