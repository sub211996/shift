<?php include "../includes/header.php" ?>

    <section class="question_section">
      <h1 class="heading">Create your study</h1>
        <form>
            <div class="create--study">
                <div class="row no-gutters">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5>Name your study</h5>
                        <input type="text" class="form-control" placeholder="Alpha Zero One">
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5>How many participants are you looking for?</h5>
                        <div class="row">
                          <div class="col-md-6">
                            <select class="custom--select">
                              <option class="form-control" data-display="Choose a question type">Senior Management</option>
                              <option value="1">Yes/No</option>
                              <option value="numericscale">Numeric scale - opinion</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <select class="custom--select">
                              <option class="form-control" data-display="Choose a question type">Senior Management</option>
                              <option value="1">Yes/No</option>
                              <option value="numericscale">Numeric scale - opinion</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col-md-6">
                            <select class="custom--select">
                              <option class="form-control" data-display="Choose a question type">Senior Management</option>
                              <option value="1">Yes/No</option>
                              <option value="numericscale">Numeric scale - opinion</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="20">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11 cost--wrap">
                        <h5>Your total cost:</h5>
                        <div class="cost">£130.00</div>
                    </div>
                </div>
                <div class="row create--study-actions mt-4">
                    <button type="button" class="cancel--btn mr-4">Cancel</button>
                    <button type="button" class="next--btn" data-toggle="modal" data-target="#myModalRegularStudy">Next</button>
                </div>
            </div>
        </form>
    </section>

     <!-- POPUP WHICH TYPE OF ANSWERS STUDY -->
     <div class="modal fade type" id="myModalRegularStudy">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="../assets/img/Arrow.png" class="modal--arrow" alt="">
                <h4 class="modal-title">How do you want to receive the answers to this study?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Audio responses will add the detail of tone and hesitations in 
                  the answers providing you with better insight, video responses gives 
                  you extra insight through body language and facial expressions and 
                  survey questions lets you choose different types of questions receive 
                  your answers in written format and/or numbers.</p>
                
                <div class="modal-actions mt-4 pt-4">
                    <a href="./add-questions-study.php" class="review--btn mb-3">Audio</a>
                    <a href="./add-questions-study.php" class="review--btn mb-3">Video</a>
                    <a href="./create-your-study-current-customers.php" class="review--btn mb-3">Survey/ written</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <?php include "../includes/footer.php" ?>