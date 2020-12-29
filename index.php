<?php include "../includes/header.php" ?>

    <section class="question_section">
      <h1 class="heading">Add study questions</h1>
        <form id="question_form" name="questionForm">
          <div class="question_card card">
            <div id="question_block--wrapper">
              <!-- Placeholder Entry Container For The Questions -->
            </div>
            
            <div class="row ml-0 mr-0">
              <button class="text--grey add--question" type="button" id="add_question--btn">
                <img src="./assets/img/+.png" class="img-fluid" alt="">&nbsp;&nbsp;Add another question
              </button>
            </div>
            <div class="row ml-0 mr-0">
              <button class="review--btn" type="submit" id="question_submit--btn">Review your study</button>
            </div>
          </div>
        </form>
    </section>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Choosing a question type</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h4>Yes/No</h4>
            <p>The study participants can only answer Yes or No</p>

            <h4>Numeric Scale - Opinion</h4>
            <p>Give your study participants a numbered scale to choose from. 
              Great for letting people express their feelings.</p>

            <h4>Single Choice</h4>
            <p>Your study participants can only choose one answer from a list of answers</p>

            <h4>Multiple Choice</h4>
            <p>Let your study participants choose more than one answer from a list of answers</p>

            <h4>Open text</h4>
            <p>Let your study participants write out their answer in their own words.</p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="review--btn">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <?php include "../includes/footer.php" ?>






<!-- Injected HTML -->
<!-- <div class="question-block">
  <div class="row ml-0 mr-0">
      <div class="col-1">
          <img src="./assets/img/Arrow.png" alt="">
      </div>
      <div class="col-11">
          <div class="row justify-content-between">
              <h4 class="question">Question 1</h4>
              <div class="d-flex align-items-center">
                  <h4 class="text--grey">Optional</h4>&nbsp;&nbsp;
                  <label class="switch">
                      <input type="checkbox" id="optional-%id%">
                      <span class="slider round"></span>
                  </label>
              </div>
          </div>

          <div class="row">
              <input id="question-%id%" type="text" class="form-control question--input" placeholder="Type here" oninput="onInput(this)" required>
          </div>
          <div class="row mt-4">
              <div class="col-1">
                  <img src="./assets/img/Arrow.png" alt="">
              </div>
              <div class="col-11">
                  <h4 class="question">Choose a question type 
                  <button type="button" class="question--btn" data-toggle="modal" data-target="#myModal">
                      <i class="fa fa-question-circle"></i>
                  </button>
                  </h4>
              </div>
          </div>
          <div class="row">
              <div class="col-6">
                  <select class="custom--select" id="question-type-%id%" onchange="onChangeQUestionType(this)" required>
                      <option class="form-control" data-display="Choose a question type">Choose a question type</option>
                      <option value="1">Yes/No</option>
                      <option value="numericscale">Numeric scale - opinion</option>
                      <option value="3">Single choice</option>
                      <option value="4">Multiple choice</option>
                      <option value="5">Open Text</option>
                  </select>
              </div>
              <div class="col-6 alert--select" id="alert-select-%id%">
                  The study participants can only answer Yes or No
              </div>
          </div>
          <div class="row numeric_selected--row">
              <div class="col-md-11 offset-1 pr-0">
                  <div class="row no-gutters numeric--scale">
                      <div class="col scale">1</div>
                      <div class="col scale">2</div>
                      <div class="col scale">3</div>
                      <div class="col scale">4</div>
                      <div class="col scale">5</div>
                  </div>
              </div>
              <div class="col-md-11 offset-1 pr-0">
                  <div class="row numeric_scale--input-lable">
                      <div class="col-md">
                          <input type="text" class="form-control" placeholder="Add label e.g. ‘disagree’">
                      </div>
                      <div class="col-md offset-3">
                          <input type="text" class="form-control" placeholder="Add label e.g. ‘strongly agree’">
                      </div>
                  </div>
              </div>
          </div>
          <div class="row single_choice--row">
              <div class="col-md-11 offset-1 pr-0">
                  <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" placeholder="Answer 1">
                          <input class="form-control" placeholder="Answer 2">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> -->