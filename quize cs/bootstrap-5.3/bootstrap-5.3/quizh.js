//Question bank
var questionBank= [
    {
        question : 'What does HTML stand for?',
        option : ['home tool markup language','hyperlinks and text markup language','hyper text markup language','none of these'],
        answer : 'hyper text markup language'
    },
    {
        question : 'Who is making the Web standards?',
        option : ['The World Wide Web Consortium','Mozilla','Microsoft','Google'],
        answer : 'The World Wide Web Consortium '
    },
    {
        question : 'Which character is used to indicate an end tag',
        option : ['*','<','/','All of the above'],
        answer : '/'
    },
    {
        question : 'How can you make a numbered list?<tag>',
        option : ['list','ul','ol','dl'],
        answer : 'ol'
    },
    {
        question : 'What is the correct HTML for inserting an image?<tag>',
        option : ['img href="#" alt="MyImage"','image src="#" alt="MyImage"','img src="ima" alt="MyImage"','img alt="MyImage"ima</img'],
        answer : 'img src="ima" alt="MyImage"'
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
        question : 'Which HTML element defines the title of a document?',
        option : ['title','head','meta','none of these'],
        answer : 'title'
    },
    {
        question : 'Which HTML element is used to specify a footer for a document or section?',
        option : ['footer','bottom','section','none of these'],
        answer : 'footer'
    },
    {
        question : 'In HTML, onblur and onfocus are:',
        option : ['Style attributes','Event attributes','HTML elements','none of these'],
        answer : 'Event attributes'
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