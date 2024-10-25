//Question bank
var questionBank= [
    {
        question : 'What does SQL stand for?',
        option : ['Structured Query Language  ','Structured Question Language','Strong Question Language','none of these'],
        answer : 'Structured Query Language  '
    },
    {
        question : 'Which SQL statement is used to update data in a database?',
        option : ['UPDATE  ','SAVE','SAVE AS','MODIFY'],
        answer : 'UPDATE'
    },
    {
        question : 'Which SQL statement is used to delete data from a database?',
        option : ['DELETE  ','REMOVE','COLLAPSE','All of the above'],
        answer : 'DELETE  '
    },
    {
        question : 'Which class shapes an image to a circle?',
        option : ['.img-circle','.img-circle  ','table-bordered','none of these'],
        answer : '.img-circle  ',
    },
    {
        question : 'Which SQL statement is used to insert new data in a database?',
        option : ['INSERT INTO  ','INSERT NEW','ADD NEW','ADD RECORD'],
        answer : 'INSERT INTO   '
    },
    {
        question : 'With SQL, how do you select all the columns from a table named "Persons"?',
        option : ['SELECT *.Persons','SELECT Persons ','SELECT [all] FROM Persons','SELECT * FROM Persons  '],
        answer : 'SELECT * FROM Persons  '
    },
    {
        question : 'Which class is used to create a basic pagination?',
        option : ['.pages','.pagination  ','.page','.navigation'],
        answer : '.pagination'
    },
    {
        question : 'Which SQL keyword is used to sort the result-set?',
        option : ['SORT    ','ORDER','ORDER BY','SORT BY'],
        answer : 'ORDER BY    '
    },
    {
        question : 'Which SQL statement is used to create a database table called(?) ?',
        option : [' CREATE DATABASE TAB Customers   ','CREATE TABLE Customers  ','CREATE DB Customers','CREATE DATABASE TABLE Customers'],
        answer : 'CREATE TABLE Customers  '
    },
    {
        question : 'Which operator is used to search for a specified pattern in a column?',
        option : ['FROM ','GET','LIKE  ','post'],
        answer : 'LIKE    '
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