"use strict";
let contentsBox = document.getElementById('contents');

// console.log("できてるよ");

// let choices = Array();
// choices.push(["たかなわ", "たかわ", "こうわ"]);
// choices.push(["かめいど", "かめと", "かめど"]);
// choices.push(["こうじまち", "おかとまち", "かゆまち"]);
// choices.push(["おなりもん", "おかどもん", "ごせいもん"]);
// choices.push(["とどろき", "たたりき", "たたら"]);
// choices.push(["しゃくじい", "せきこうい", "いじい"]);
// choices.push(["ぞうしき", "ざっしょく", "ざっしき"]);
// choices.push(["おかちまち", "みとちょう", "ごしろちょう"]);
// choices.push(["ししぼね", "ろっこつ", "しこね"]);
// choices.push(["こぐれ", "こばく", "こしゃく"]);

// let images = Array();
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');
// images.push('https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png');

// var quizyOutputBox = document.getElementById('quizyOutputBox')
// for (let i = 0; i < choices.length; i++) {
//     let h =  
//         `<div class="question" id="question${i+1}">`
//         +   `<h2>${i + 1}.この地名はなんて読む？</h2>`
//         +   `<img src="${images[i]}" alt="photo${i}">`
//         +   '<ul>'
//         +     `<li id="choice${i}-0" name="choicesName" onclick="onclickFunction(${i},0)">${choices[i][0]}</li>`
//         +     `<li id="choice${i}-1" name="choicesName" onclick="onclickFunction(${i},1)">${choices[i][1]}</li>`
//         +     `<li id="choice${i}-2" name="choicesName" onclick="onclickFunction(${i},2)">${choices[i][2]}</li>`
//         +   '</ul>'
//         +   `<div id="answerBox${i}" class="answerBox">`
//         +     `<p id="answerTitle${i}" class="answerTitle"></p>`
//         +     `<p id="answerExplanation${i}" class="answerExplanation">正解は「${choices[i][0]}」です！</p>`
//         +   '</div>'
//         + '</div>';

//     document.write(h);
//     document.getElementById(`answerExplanation${i}`).style.display = 'none';
// };


// ↓↓クリックしても正解！らへんが出ない
var onclickFunction = function (question, clicked) {
    let clickedOption = document.getElementById('choice' + question + '-' + clicked);
    let answerOption = document.getElementById('choice' + question + '-0');
    let answerBox = document.getElementById('answerBox' + question);
    let answerTitle = document.getElementById('answerTitle' + question);
   
    for (let t=0; t<3; t++){
    document.getElementById('choice' + question + `-${t}`).style.pointerEvents ="none"; 
}
    
    document.getElementById('answerExplanation'+ question).style.display = 'block';
    answerBox.style.display = 'block';
    answerTitle.style.display = 'inline-block';

    clickedOption.className= 'wrongAnswer';
    answerOption.className= 'rightAnswer';

    console.log("clickedoption =" + clickedOption);
    console.log("answeroption =" + answerOption);

    if(clicked == 0){
        console.log('反応してるよ');
        answerTitle.textContent = '正解!';
        answerTitle.className = 'rightUnderbar';
    }else{
        console.log('反応してないよ');
        answerTitle.textContent = '不正解!';
        answerTitle.className = 'wrongUnderbar';
    }
}