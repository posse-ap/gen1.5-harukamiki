<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel Quizy</title>
</head>

<body>
    <h1>ガチで東京の人しか解けない！＃東京の難読地名クイズ</h1> 

    for (let i = 0; i < choices.length; i++) {
        let h =  
            `<div class="question" id="question${i+1}">`
            +   `<h2>${i + 1}.この地名はなんて読む？</h2>`
            +   `<img src="${images[i]}" alt="高輪photo">`
            +   '<ul>'
            +     `<li id="choice${i}-0" name="choicesName" onclick="onclickFunction(${i},0)">${choices[i][0]}</li>`
            +     `<li id="choice${i}-1" name="choicesName" onclick="onclickFunction(${i},1)">${choices[i][1]}</li>`
            +     `<li id="choice${i}-2" name="choicesName" onclick="onclickFunction(${i},2)">${choices[i][2]}</li>`
            +   '</ul>'
            +   `<div id="answerBox${i}" class="answerBox">`
            +     `<p id="answerTitle${i}" class="answerTitle"></p>`
            +     `<p id="answerExplanation${i}" class="answerExplanation">正解は「${choices[i][0]}」です！</p>`
            +   '</div>'
            + '</div>';
    
        document.write(h);
        document.getElementById(`answerExplanation${i}`).style.display = 'none';
    };
      <script src="{{ asset('/js/quizy.js') }}"></script>
</body>

</html>