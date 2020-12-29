<?php include "../includes/header.php" ?>


    <section class="question_section">
      <h1 class="heading">Add questions to your study</h1>
        <form>
            <div class="create--study">
                <div class="row justify-content-center">
                    <p>
                        <button type="button" class="question--btn" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-question-circle"></i>
                        </button>
                        Need help? Want professionally formed questions? We are here to help, send us a message.</p>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5>Question 1</h5>
                        <input type="text" class="form-control" placeholder="Type here">
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
                <div class="row no-gutters mt-4 mb-4">
                    <div class="col-md-1">
                        <img src="../assets/img/Arrow.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                    <div class="col-md-11">
                        <h5>Question 3</h5>
                        <input type="text" class="form-control" placeholder="Type here">
                    </div>
                </div>
                <div class="row create--study-actions">
                    <button type="button" class="cancel--btn mr-4">Cancel</button>
                    <a href="./review-study.php" type="button" class="next--btn">Next</a>
                </div>
            </div>
        </form>
    </section>

    <?php include "../includes/footer.php" ?>