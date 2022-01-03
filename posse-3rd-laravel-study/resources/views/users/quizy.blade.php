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
    @section('title', 'quizy')

    @section('content')
    <h1>ガチで東京の人しか解けない！＃東京の難読地名クイズ</h1> 

    @foreach ($question_choices as $question_choice)

    <div class="question" id="question{{ $question_choice->id}}">
        <h2>{{ $question_choice->id}}.この地名はなんて読む？</h2>
        <img src="{{ asset('image/image' . $question_choice->area . '-' . $question_choice->id) . '.png'}}" alt="image{{$question_choice->id}}">
        <ul>
            <li id="choice{{ $question_choice->id}}-0" name="choicesName" onclick="onclickFunction({{ $question_choice->id}},0)">{{ $question_choice->choice1}}</li>
            <li id="choice{{ $question_choice->id}}-1" name="choicesName" onclick="onclickFunction({{ $question_choice->id}},1)">{{ $question_choice->choice2}}</li>
            <li id="choice{{ $question_choice->id}}-2" name="choicesName" onclick="onclickFunction({{ $question_choice->id}},2)">{{ $question_choice->choice3}}</li>
        </ul>
        <div id="answerBox{{ $question_choice->id}}" class="answerBox">
            <p id="answerTitle{{ $question_choice->id}}" class="answerTitle"></p>
            <p id="answerExplanation{{ $question_choice->id}}" class="answerExplanation">正解は「{{ $question_choice->choice1}}」です！</p>
        </div>
    </div>
        @endforeach

      <script src="{{ asset('/js/quizy.js') }}"></script>

</body>

</html>
