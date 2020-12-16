$(document).ready(function() {
    $('select').niceSelect();
});



let questions = [];
let ID;
let questionBlock = document.getElementById('question_block--wrapper');
let questionForm = document.getElementById('question_form');
let addQuestion = document.querySelector('.add--question');
let submitQuestionBtn = document.getElementById('question_submit--btn');
let isoptionalCheckbox;
let questionInput;
let questionTypeSelect;
let questionInputValid;
let questionTypeValid;


let question_block_HTML = `
<div class="question-block">
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
                <div class="col-md-12">
                    <div class="row no-gutters numeric--scale">
                        <div class="col scale">1</div>
                        <div class="col scale">2</div>
                        <div class="col scale">3</div>
                        <div class="col scale">4</div>
                        <div class="col scale">5</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <input type="text">
                        <input type="text">
                    <div>
                <div>
            </div>
        </div>
    </div>
</div>`

addQuestion.addEventListener('click', initForm)

let questionId;

function initForm(){
    questionInputValid = false;
    questionTypeValid = false;
    addQuestion.disabled = true;
    submitQuestionBtn.disabled = true;

    let new_Question_HTML; 
    if (questions.length > 0){
        ID = questions[questions.length - 1].id + 1;
    } else {
        ID = 0;
    }
    
    new_Question_HTML = question_block_HTML.replaceAll('%id%', ID);

    questions.push({id:ID, question: '', questionType: '', optional: false});
    questionBlock.insertAdjacentHTML('beforeend', new_Question_HTML);

    $('select').niceSelect();
}

questionForm.addEventListener('submit', (e)=>{
    e.preventDefault();

    for(let i=0; i < questions.length; i++){
        questionId = questions[i].id;
        isoptionalCheckbox = document.getElementById(`optional-${questionId}`).checked;
        questionInput = document.getElementById(`question-${questionId}`).value;
        questionTypeSelect = document.getElementById(`question-type-${questionId}`).value;
      
        let newQuestionsArrayToBeSubmitted=[];
    
        let newQuestionObj = {
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
    let id = w.id.split('-')[2];
    if(w.value == 1){
        document.getElementById(`alert-select-${id}`).style.display = "block";
        questionTypeValid = true;
        checkValidity(questionInputValid, questionTypeValid);
    } else if (w.value == 'numericscale'){
        document.getElementById(`alert-select-${id}`).textContent = 'Your study participants can state their opinion through a numbered scale'
        document.getElementById(`alert-select-${id}`).style.display = "block";
        document.querySelector('.numeric_selected--row').style.display = "block";
        questionTypeValid = true;
        checkValidity(questionInputValid, questionTypeValid);
    } else {
        document.getElementById(`alert-select-${id}`).style.display = "none";
        addQuestion.disabled = false;
        checkValidity(questionInputValid, questionTypeValid);
    }
    console.log(w, id, w.value);
}

function onInput(t){
    let id = t.id.split('-')[1];
    console.log(id)
    questionInputValid = true;
    checkValidity(questionInputValid, questionTypeValid);
}

function checkValidity(questionValidity, questionTypeValidity){
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

initForm();