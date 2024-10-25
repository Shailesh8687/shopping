//Question bank
var questionBank= [
    {
        question : 'What does CSS stand for?',
        option : ['Creative Style Sheets','Cascading Style Sheets ','Cascading Style Sheets ','none of these'],
        answer : 'Cascading Style Sheets '
    },
    {
        question : 'Where in an HTML document is the correct place to refer to an external style sheet?',
        option : ['At the end of the document','In the head section  ','In the body section','Google'],
        answer : 'In the head section'
    },
    {
        question : 'Which HTML tag is used to define an internal style sheet?',
        option : ['class','style','font','All of the above'],
        answer : 'style'
    },
    {
        question : 'Which property is used to change the background color?',
        option : ['bgcolor','color','background-color','none of these'],
        answer : 'background-color'
    },
    {
        question : 'Which CSS property is used to change the text color of an element?',
        option : ['font-size  ','text-style','text-size','font-style'],
        answer : 'font-size '
    },
    {
        question : 'HTML comments start with <!-- and end with -->',
        option : ['true','false','none of these','both a and b'],
        answer : 'true'
    },
    {
        question : 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?',
        option : ['alt','src','longdesc','url'],
        answer : 'alt'
    },
    {
        question : 'How do you make each word in a text start with a capital letter?',
        option : ['You can not do that with CSS','text-style:capitalize','transform:capitalize','text-transform:capitalize  '],
        answer : 'text-transform:capitalize  '
    },
    {
        question : 'Which HTML element is used to specify a footer for a document or section?',
        option : ['footer','bottom','section','none of these'],
        answer : 'footer'
    },
    {
        question : 'Which property is used to change the font of an element?',
        option : ['font-weight','font-family  ','font-style','none of these'],
        answer : 'font-family  '
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