//Question bank
var questionBank= [
    {
        question : 'Which class provides a responsive fixed width container?',
        option : ['container-fixed','container ','container-fluid','none of these'],
        answer : 'container'
    },
    {
        question : 'Which class provides a full width container, spanning the entire width of the viewport?',
        option : ['container-fluid ','container-fixed','container','Google'],
        answer : 'container'
    },
    {
        question : 'The Bootstrap grid system is based on how many columns?',
        option : ['9','10','12','All of the above'],
        answer : '12'
    },
    {
        question : 'Which class shapes an image to a circle?',
        option : ['.img-circle','.img-circle  ','table-bordered','none of these'],
        answer : '.img-circle  ',
    },
    {
        question : 'Which button class is used to create a large button?',
        option : ['.btn-lg   ','.btn-l','.btn-xl','.btn-large'],
        answer : '.btn-lg  '
    },
    {
        question : 'Which class is used to create a badge?',
        option : ['.label','.badge  ','.tag','.flag'],
        answer : '.badge  '
    },
    {
        question : 'Which class is used to create a basic pagination?',
        option : ['.pages','.pagination  ','.page','.navigation'],
        answer : '.pagination'
    },
    {
        question : 'Which plugin is used to cycle through elements, like a slideshow?',
        option : ['Carousel  ','Orbit','Slideshow','Scrollspy '],
        answer : 'Carousel  '
    },
    {
        question : 'Which HTML element is used to specify a footer for a document or section?',
        option : ['footer','bottom','section','none of these'],
        answer : 'footer'
    },
    {
        question : 'Which plugin is used to create a modal window?',
        option : ['window','model','Dialog','Popup'],
        answer : 'Modal  '
    },
]

var question= document.getElementById('question');
var quizContainer= document.getElementById('quiz-container');
var scorecard= document.getElementById('scorecard');
var option0= document.getElementById('option0');
var option1= document.getElementById('option1');
var option2= document.getElementById('option2');
var option3= document.getElementById('option3');
var next= document.querySelector('.next');
var points= document.getElementById('score');
var span= document.querySelectorAll('span');
var i=0;
var score= 0;

//function to display questions
function displayQuestion(){
    for(var a=0;a<span.length;a++){
        span[a].style.background='none';
    }
    question.innerHTML= 'Q.'+(i+1)+' '+questionBank[i].question;
    option0.innerHTML= questionBank[i].option[0];
    option1.innerHTML= questionBank[i].option[1];
    option2.innerHTML= questionBank[i].option[2];
    option3.innerHTML= questionBank[i].option[3];
    stat.innerHTML= "Question"+' '+(i+1)+' '+'of'+' '+questionBank.length;
}

//function to calculate scores
function calcScore(e){
    if(e.innerHTML===questionBank[i].answer && score<questionBank.length)
    {
        score= score+1;
        document.getElementById(e.id).style.background= 'limegreen';
    }
    else{
        document.getElementById(e.id).style.background= 'tomato';
    }
    setTimeout(nextQuestion,300);
}

//function to display next question
function nextQuestion(){
    if(i<questionBank.length-1)
    {
        i=i+1;
        displayQuestion();
    }
    else{
        points.innerHTML= score+ '/'+ questionBank.length;
        quizContainer.style.display= 'none';
        scoreboard.style.display= 'block'
    }
}

//click events to next button
next.addEventListener('click',nextQuestion);

//Back to Quiz button event
function backToQuiz(){
    location.reload();
}

//function to check Answers
function checkAnswer(){
    var answerBank= document.getElementById('answerBank');
    var answers= document.getElementById('answers');
    answerBank.style.display= 'block';
    scoreboard.style.display= 'none';
    for(var a=0;a<questionBank.length;a++)
    {
        var list= document.createElement('li');
        list.innerHTML= questionBank[a].answer;
        answers.appendChild(list);
    }
}


displayQuestion();