'use strict';

let choices = [
    ['たかわ', 'こうわ', 'たかなわ'],
    ['かめど', 'かめと', 'かめいど'],
    ['かゆまち', 'おかちまち', 'こうじまち'],
    ['おかどもん', 'ごせいもん', 'おなりもん'],
    ['たたりき', 'たたら', 'とどろき'],
    ['せきこうい', 'いじい', 'しゃくじい'],
    ['ざっしき', 'ざっしょく', 'ぞうしき'],
    ['ごしろちょう', 'みとちょう', 'おかちまち'],
    ['ろっこつ', 'しこね', 'ししぼね'],
    ['こしゃく', 'こばく', 'こぐれ']
];

let answerBoxAnswer = [
    "たかなわ", "かめいど", "こうじまち", "おなりもん", "とどろき", "しゃくじい", "ぞうしき", "おかちまち", "ししぼね", "こぐれ"
];

let images = ["https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png",
    "https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png",
    "https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png",
    "https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png"];

/////////////////////////////////シャッフル関数////////////////////
let i, k, m;
const shuffle = (choices) => {
    for (m = choices.length - 1; m >= 0; m--) {
        const j = Math.floor(Math.random() * (m+1));
        [choices[m], choices[j]] = [choices[j], choices[m]];
    };
    return choices;
};

choices.map(shuffle);

/////////////////////////////シャッフル後の正解の位置確保////////////
// let p, a;
// let b = [];
// for (p = 0; p < choices.length; p++) {
//     a = choices[p].indexOf(answerBoxAnswer[p]);
//     b.push(a);
// };
// console.log(b);

/////////////////////////////html format/////////////////////////////
for (i = 0; i < choices.length; i++) {
    /////////シャッフル後の正解の位置確保////////////
    let a = choices[i].indexOf(answerBoxAnswer[i]);
    /////////////////////////////////////////////////
    // let h =
    //      `<div class="monnme1" id="monnme${i}">`
    //     + `<h2>${i + 1}. この地名はなんて読む？</h2>`
    //     + `<img src= ${images[i]} alt="No.${i}.photo">`
    //     + '<ul>'
    // // for (let c = 0; c < choices[0].length; c++) {
    // //     h = h + `<li id="option${i}-${c}" onclick="clickedFunction(${i},'${c}','${a}')">${choices[i][c]}</li>`
    // // };
    //     + `<li id="option${i}-0" onclick="clickedFunction(${i},'0','${a}')"><?= $questions[0]['choice1'] ?></li>`
    //     + `<li id="option${i}-1" onclick="clickedFunction(${i},'1','${a}')"><?= $questions[0]['choice2'] ?></li>`
    //     + `<li id="option${i}-2" onclick="clickedFunction(${i},'2','${a}')"><?= $questions[0]['choice3'] ?></li>`
    //     + '</ul>'
    //     + `<div id="answerBox${i}">`
    //     + `<p id="seikai${i}"></p>`
    //     + `<p id="seikaiexp${i}"></p>`
    //     + '</div>';
    // document.write(h + '</div>');
};

/////////////////////////////////function after clicking//////////////////////////////
                    // 変数 (何問目か,クリックした選択肢,シャッフル後の答えの位置)
var clickedFunction = function (rounds, clkdButton, answer) {

    // for(let p=1; p < 4; p++){
    //     let option = document.getElementById('option' + rounds + `-${p}`);
    //     console.log(p);
    // }


    let option1 = document.getElementById('option' + rounds + '-0');
    let option2 = document.getElementById('option' + rounds + '-1');
    let option3 = document.getElementById('option' + rounds + '-2');

    let answerBox = document.getElementById('answerBox' + rounds);
    let answer1 = document.getElementById('option' + rounds + '-' + answer);
    let pressedButton = document.getElementById('option' + rounds + '-' + clkdButton);

    let seikai = document.getElementById('seikai' + rounds);
    let seikaiexp = document.getElementById('seikaiexp' + rounds);

    let seikaiword = document.createTextNode(" 正解！");
    let fuseikaiword = document.createTextNode("不正解！");
    let explanation = document.createTextNode(`正解は「${answerBoxAnswer[rounds]}」です！`);

    option1.classList.add('cantclick');
    option2.classList.add('cantclick');
    option3.classList.add('cantclick');
    answerBox.classList.add('answerBox');

    //  最後の質問の下の空白
    if (rounds == choices.length - 1) {
        console.log('空白作成OK');
        let monnme = document.getElementById('monnme' + rounds);
        monnme.classList.add('bottommargin');
    };
    //   自動スクロール 
    let scrollarea = pressedButton.getBoundingClientRect();
    let scrollareatop = scrollarea.top + window.pageYOffset;
    document.documentElement.scrollTop = scrollareatop;

    // 正誤判定
    seikaiexp.appendChild(explanation);
    answer1.classList.add('successButton');

    if (answer == clkdButton) {
        seikai.appendChild(seikaiword);
        seikai.classList.add('successBar');
    } else {
        pressedButton.classList.add('wrongButton');
        seikai.appendChild(fuseikaiword);
        seikai.classList.add('wrongBar');
    };
};
