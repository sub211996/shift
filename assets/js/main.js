$(document).ready(function() {
    $('select').niceSelect();

    if(window.innerWidth <= 411){
        document.querySelectorAll('footer .col-md-3').forEach(el => {
            el.classList.add('col-6')
        })
    }

    // $('.control-options input[type="checkbox"]').ezMark({
    //     checkboxCls: 'your-default-checkbox-class-name' ,
    //     checkedCls: 'your-checkbox-class-in-checked-state'
    // });
});

// document.getElementById('create_study--btn').addEventListener('click', ()=>{
//     window.location.href="./create-your-study.html"
// })



var questions = [];
var ID;
var questionBlock = document.getElementById('question_block--wrapper');
var questionForm = document.getElementById('question_form');
var addQuestion = document.getElementById('add_question--btn');
var submitQuestionBtn = document.getElementById('question_submit--btn');
var addSingleChoiceAnswerBtn = document.getElementById('add_single-choice-answer--btn');
var isoptionalCheckbox;
var questionInput;
var questionTypeSelect;
var questionInputValid;
var questionTypeValid;
let noOfQuestionCount;
let singleAnswerValid = false;
let multipleAnswerValid = false;


var question_block_HTML = `
<div class="question-block" id="question-block-%id%">
    
  <div class="row ml-0 mr-0 no-gutters">
      <div class="col-1">
          <img src="./assets/img/Arrow.png" class="arrow-icon" alt="">
      </div>
      <div class="col-11 pl-2">
          <div class="row justify-content-between">
              <h4 class="question question--title">Question %noOfQuestionCount%</h4>
              <div class="d-flex align-items-center">
                  <h4 class="text--grey">Optional</h4>&nbsp;&nbsp;
                  <label class="switch">
                      <input type="checkbox" id="optional-%id%">
                      <span class="slider round"></span>
                  </label>
                  <button type="button" id="delete_question-%id%" class="question--delete" onclick="onDeleteQuestion(this)"><i class="fa fa-times"></i></button>
              </div>
          </div>

          <div class="row">
              <input id="question-%id%" type="text" class="form-control question--input" placeholder="Type here" oninput="onInput(this)" required>
          </div>
          <div class="row mt-4 no-gutters">
              <div class="col-1">
                  <img src="./assets/img/Arrow.png" class="arrow-icon" alt="">
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
              <div class="col-md-6">
                  <select class="custom--select" id="question-type-%id%" onchange="onChangeQUestionType(this)" required>
                      <option class="form-control" data-display="Choose a question type">Choose a question type</option>
                      <option value="1">Yes/No</option>
                      <option value="numericscale">Numeric scale - opinion</option>
                      <option value="singlechoice">Single choice</option>
                      <option value="multiplechoice">Multiple choice</option>
                      <option value="opentext">Open Text</option>
                  </select>
              </div>
              <div class="col-md-6 alert--select" id="alert-select-%id%">
                  The study participants can only answer Yes or No
              </div>
          </div>
          <div class="row numeric_selected--row" id="numeric_selected--row-%id%">
              <div class="col-md-11 offset-md-1 pr-0">
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
                          <input type="text" class="form-control" placeholder="Add label e.g. ‘disagree’" id="numeric_scale--lable-start-%id%" on>
                      </div>
                      <div class="col-md offset-md-3">
                          <input type="text" class="form-control" placeholder="Add label e.g. ‘strongly agree’" id="numeric_scale--lable-end-%id%">
                      </div>
                  </div>
              </div>
          </div>
          <div class="row single_choice--row" id="single_choice--row-%id%">
              <div class="col-md-11 offset-1 pr-0">
                  <div class="row">
                      <div class="col-md-12 single_choice--container" id="single_choice--container-%id%">
                          <input class="form-control single--choice" placeholder="Answer 1" id="single_choice--answer-0">
                          <input class="form-control single--choice" placeholder="Answer 2" id="single_choice--answer-1">
                      </div>
                      <div class="col-md-12">
                        <button class="text--grey add--choice" type="button" id="add_single-choice-answer--btn-%id%" onclick="onClikcedAddSingleChoiceAnswerBtn(this)">
                            <img src="./assets/img/+.png" class="img-fluid" alt="">&nbsp;&nbsp;Add another answer
                        </button>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row multiple_choice--row" id="multiple_choice--row-%id%">
              <div class="col-md-11 offset-1 pr-0">
                  <div class="row">
                      <div class="col-md-12 single_choice--container" id="multiple_choice--container-%id%">
                          <input class="form-control single--choice" placeholder="Answer 1" id="multiple_choice--answer-0">
                          <input class="form-control single--choice" placeholder="Answer 2" id="multiple_choice--answer-1">
                      </div>
                      <div class="col-md-12">
                        <button class="text--grey add--choice" type="button" id="add_multiple-choice-answer--btn-%id%" onclick="onClikcedAddMultipleChoiceAnswerBtn(this)">
                            <img src="./assets/img/+.png" class="img-fluid" alt="">&nbsp;&nbsp;Add another answer
                        </button>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>`


addQuestion.addEventListener('click', initForm)

var questionId;



questionForm.addEventListener('submit', (e)=>{
    e.preventDefault();

    for(var i=0; i < questions.length; i++){
        questionId = questions[i].id;
        isoptionalCheckbox = document.getElementById(`optional-${questionId}`).checked;
        questionInput = document.getElementById(`question-${questionId}`).value;
        questionTypeSelect = document.getElementById(`question-type-${questionId}`).value;
      
        var newQuestionsArrayToBeSubmitted=[];
    
        var newQuestionObj = {
            id: questionId, 
            question: questionInput, 
            questionType: questionTypeSelect, 
            optional: isoptionalCheckbox
        }
    
        newQuestionsArrayToBeSubmitted.push(newQuestionObj);
        console.log(newQuestionsArrayToBeSubmitted)
    }
})


function onChangeQUestionType(w){
    var id = w.id.split('-')[2];
    if(w.value == 1){
        questionTypeValid = false;
        document.getElementById(`alert-select-${id}`).style.display = "block";
        document.getElementById(`alert-select-${id}`).textContent = 'The study participants can only answer Yes or No'
        document.getElementById(`numeric_selected--row-${id}`).style.display = "none";
        document.getElementById(`single_choice--row-${id}`).style.display = "none";
        questionTypeValid = true;
        checkValidity(questionInputValid, questionTypeValid);
    } else if (w.value == 'numericscale'){
        let startlabelvalid = false;
        let endlabelvalid = false;
        questionTypeValid = false;
        checkValidity(questionInputValid, questionTypeValid);
        document.getElementById(`alert-select-${id}`).textContent = 'Your study participants can state their opinion through a numbered scale'
        document.getElementById(`alert-select-${id}`).style.display = "block";
        document.getElementById(`numeric_selected--row-${id}`).style.display = "block";
        document.getElementById(`single_choice--row-${id}`).style.display = "none";
        document.getElementById(`multiple_choice--row-${id}`).style.display = "none";
        console.log(document.querySelector(`#numeric_selected--row-${id} #numeric_scale--lable-start-${id}`));


        document.querySelector(`#numeric_selected--row-${id} #numeric_scale--lable-start-${id}`).addEventListener('input', function(event){
            // console.log(event);
            startlabelvalid = true;
            if(startlabelvalid && endlabelvalid){
                questionTypeValid = true;
                return checkValidity(questionInputValid, questionTypeValid);
            }
        })

        document.querySelector(`#numeric_selected--row-${id} #numeric_scale--lable-end-${id}`).addEventListener('input', function(event){
            // console.log(event);
            endlabelvalid = true;
            if(startlabelvalid && endlabelvalid){
                questionTypeValid = true;
                return checkValidity(questionInputValid, questionTypeValid);
            }
        })
    } else if(w.value == 'singlechoice'){
        questionTypeValid = false;
        
        checkValidity(questionInputValid, questionTypeValid);

        document.getElementById(`alert-select-${id}`).style.display = "block";
        document.getElementById(`alert-select-${id}`).textContent = 'Your study participants can only choose one answer from the list.'
        document.getElementById(`numeric_selected--row-${id}`).style.display = "none";
        document.getElementById(`single_choice--row-${id}`).style.display = "block";
        document.getElementById(`multiple_choice--row-${id}`).style.display = "none";

        console.log(document.querySelectorAll(`#single_choice--row-${id} .single--choice`))
        // document.querySelectorAll(`#single_choice--row-${id} .single--choice`).forEach(el => {
            
        //     el.addEventListener('input', function(){
        //         if (el.value){
        //             answerValid = true;
        //             questionTypeValid = true;
        //             checkValidity(questionInputValid, questionTypeValid);
        //             console.log('kk');
        //             answerValid = true;
        //             questionTypeValid = true;
        //             checkValidity(questionInputValid, questionTypeValid);
        //         }
                
        //     })
        // })
        return inputValiditySingleChoice(id)
        
    } else if(w.value == 'multiplechoice'){
        document.getElementById(`numeric_selected--row-${id}`).style.display = "none";
        document.getElementById(`single_choice--row-${id}`).style.display = "none";
        document.getElementById(`alert-select-${id}`).style.display = "block";
        document.getElementById(`alert-select-${id}`).textContent = 'Your study participants can choose more than one answer from the list.'
        document.getElementById(`multiple_choice--row-${id}`).style.display = "block";

        return inputValidityMultipleChoice(id)
    } else if(w.value == 'opentext'){
        document.getElementById(`alert-select-${id}`).style.display = "block";
        document.getElementById(`alert-select-${id}`).textContent = 'Your study participants write out their answer in their own words.'
        document.getElementById(`multiple_choice--row-${id}`).style.display = "none";
        document.getElementById(`single_choice--row-${id}`).style.display = "none";
        questionTypeValid = true;
        checkValidity(questionInputValid, questionTypeValid);

    } else {
        document.getElementById(`alert-select-${id}`).style.display = "none";
        document.getElementById(`numeric_selected--row-${id}`).style.display = "none";
        document.getElementById(`single_choice--row-${id}`).style.display = "none";
        document.getElementById(`multiple_choice--row-${id}`).style.display = "none";
        addQuestion.disabled = false;
        checkValidity(questionInputValid, questionTypeValid);
    }
    console.log(w, id, w.value);
}

function onInput(t){
    var id = t.id.split('-')[t.id.split('-').length-1];
    console.log(id)
    questionInputValid = true;
    checkValidity(questionInputValid, questionTypeValid);
}

function checkValidity(questionValidity, questionTypeValidity){
    console.log(questionValidity, questionTypeValidity)
    if(questionTypeValidity && questionValidity){
        addQuestion.disabled = false;
        submitQuestionBtn.disabled = false;
    } else if(!questionTypeValidity) {
        addQuestion.disabled = true;
        submitQuestionBtn.disabled = true;
    }else if(!questionValidity){
        addQuestion.disabled = true;
        submitQuestionBtn.disabled = true;
    }
}


function onClikcedAddSingleChoiceAnswerBtn(event){
    var id = event.id.split('-')[event.id.split('-').length-1];
    console.log(event.id, id, `single_choice--container-${id}`);

    var singleChoiceInputPlaceholderNumber;
    var nodelist = document.querySelectorAll(`#single_choice--container-${id} .single--choice`);
        singleChoiceInputPlaceholderNumber = (nodelist.length + 1);
    
    function countPlaceholder(){
        var singleChoiceAnswerHTML = document.createElement('input');
        singleChoiceAnswerHTML.placeholder = `Answer ${singleChoiceInputPlaceholderNumber}`;
        singleChoiceAnswerHTML.setAttribute('id', `single_choice--answer-${singleChoiceInputPlaceholderNumber-1}`)
        singleChoiceAnswerHTML.classList.add('form-control');
        singleChoiceAnswerHTML.classList.add('single--choice');
        document.getElementById(`single_choice--container-${id}`).insertAdjacentElement('beforeend', singleChoiceAnswerHTML);
    }
    console.log(typeof singleChoiceAnswerHTML);
    countPlaceholder();
    console.log(event.id, id, `single_choice--container-${id}`, singleChoiceInputPlaceholderNumber)
}


function onClikcedAddMultipleChoiceAnswerBtn(event){
    var id = event.id.split('-')[event.id.split('-').length-1];
    console.log(event.id, id, `single_choice--container-${id}`);

    var singleChoiceInputPlaceholderNumber;
    var nodelist = document.querySelectorAll(`#multiple_choice--container-${id} .single--choice`);
        singleChoiceInputPlaceholderNumber = (nodelist.length + 1);
    
    function countPlaceholder(){
        var singleChoiceAnswerHTML = document.createElement('input');
        singleChoiceAnswerHTML.placeholder = `Answer ${singleChoiceInputPlaceholderNumber}`;
        singleChoiceAnswerHTML.setAttribute('id', `multiple_choice--answer-${singleChoiceInputPlaceholderNumber-1}`)
        singleChoiceAnswerHTML.classList.add('form-control');
        singleChoiceAnswerHTML.classList.add('single--choice');
        document.getElementById(`multiple_choice--container-${id}`).insertAdjacentElement('beforeend', singleChoiceAnswerHTML);
    }
    console.log(typeof singleChoiceAnswerHTML);
    countPlaceholder();
    console.log(event.id, id, `single_choice--container-${id}`, singleChoiceInputPlaceholderNumber)
}

function inputValiditySingleChoice(id){
    let arr = document.querySelectorAll(`#single_choice--row-${id} .single--choice`);
    
    for(let i=0; i < arr.length; i++){
        arr[i].addEventListener('input', function(){
            if(arr[i].value){
                console.log('kk')
                singleAnswerValid = true;
                questionTypeValid = true;
                checkValidity(questionInputValid, questionTypeValid);
                console.log('kk');
                return checkValidity(questionInputValid, questionTypeValid);
            }
        })
        
    }
}

function inputValidityMultipleChoice(id){
    let arr = document.querySelectorAll(`#multiple_choice--row-${id} .single--choice`);
    
    for(let i=0; i < arr.length; i++){
        arr[i].addEventListener('input', function(){
            if(arr[i].value){
                console.log('kk')
                multipleAnswerValid = true;
                questionTypeValid = true;
                checkValidity(questionInputValid, questionTypeValid);
                console.log('kk');
                return checkValidity(questionInputValid, questionTypeValid);
            }
        })
        
    }
}

function onDeleteQuestion(event){
    let id = event.id.split('-')[event.id.split('-').length - 1];
    console.log(id)
    
    document.getElementById(`question-block-${id}`).style.display = "none";
    document.getElementById(`question-block-${id}`).parentNode.removeChild(document.getElementById(`question-block-${id}`));

    console.log(document.querySelectorAll('.question--title'));

    let questionArr = document.querySelectorAll('.question--title');
    for(let i=0; i<questionArr.length; i++){
        questionArr[i].textContent = `Question ${i+1}`;
    }

    // let questionBlockArr = document.querySelectorAll('.question-block');
    // noOfQuestionCount = parseInt(questionBlockArr.length);
    // for(let i=0; i< questionBlockArr.length-1; i++){
    //     console.log(document.querySelector(`#question-block-${id} .question`).innerHTML)
    //     console.log(questionBlockArr[i])
        
    //     noOfQuestionCount=i+1;
    //     document.querySelector(`#question-block-${id} .question`).innerHTML = `${noOfQuestionCount}`;
    //     console.log(noOfQuestionCount)
    // }



    questionTypeValid = true;
    questionInputValid = true;
    checkValidity(questionInputValid, questionTypeValid);
}
function initForm(){
    questionInputValid = false;
    questionTypeValid = false;
    addQuestion.disabled = true;
    submitQuestionBtn.disabled = true;

    var new_Question_HTML; 
    if (questions.length > 0){
        ID = questions[questions.length - 1].id + 1;
    } else {
        ID = 0;
    }
    
    let questionBlockArr = document.querySelectorAll('.question-block');

    noOfQuestionCount = parseInt(questionBlockArr.length);

    new_Question_HTML = question_block_HTML.replaceAll('%id%', ID);
    new_Question_HTML = new_Question_HTML.replaceAll('%noOfQuestionCount%', noOfQuestionCount+1)
    
    questions.push({id:ID, question: '', questionType: '', optional: false});
    questionBlock.insertAdjacentHTML('beforeend', new_Question_HTML);
    
    
    console.log(document.querySelectorAll('.question-block'), questionBlockArr.length, noOfQuestionCount)

    $('select').niceSelect();
}
initForm();





