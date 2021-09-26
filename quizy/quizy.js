'use strict';

// 変数 (何問目か,クリックした選択肢)
var clickedFunction = function (rounds, clkdButton) {
    let option1 = document.getElementById('option' + rounds + '-0');
    let option2 = document.getElementById('option' + rounds + '-1');
    let option3 = document.getElementById('option' + rounds + '-2');

    let answerBox = document.getElementById('answerBox' + rounds);
    let answer = document.getElementById('option' + rounds + '-0');
    console.log(answer);
    let pressedButton = document.getElementById('option' + rounds + '-' + clkdButton);

    let seikai = document.getElementById('seikai' + rounds);
    let seikaiexp = document.getElementById('seikaiexp' + rounds);
    seikaiexp.style.display = "block";

    let seikaiword = document.createTextNode("正解！");
    let fuseikaiword = document.createTextNode("不正解！");

    option1.classList.add('cantclick');
    option2.classList.add('cantclick');
    option3.classList.add('cantclick');
    answerBox.classList.add('answerBox');

    //   自動スクロール 
    let scrollarea = pressedButton.getBoundingClientRect();
    let scrollareatop = scrollarea.top + window.pageYOffset;
    document.documentElement.scrollTop = scrollareatop;

    // 正誤判定
    answer.classList.add('successButton');

    if (clkdButton === 0) {
        seikai.appendChild(seikaiword);
        seikai.classList.add('successBar');
    } else {
        pressedButton.classList.add('wrongButton');
        seikai.appendChild(fuseikaiword);
        seikai.classList.add('wrongBar');
    };
};
