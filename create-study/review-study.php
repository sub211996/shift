

<?php include "../includes/header.php" ?>

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
                      <a href="./create-your-study.php" class="review--btn mb-3">Current Customers</a>
                      <a href="#" class="review--btn mb-3" data-dismiss="modal">Targeted Customers</a>
                  </div>
              </div>
          </div>
        </div>
    </div>

<?php include "../includes/footer.php" ?>