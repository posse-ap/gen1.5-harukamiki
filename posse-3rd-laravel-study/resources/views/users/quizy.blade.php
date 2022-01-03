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
    {{-- TODO foreach以外の方法で取り出す --}}
    <h1>ガチで 
        @foreach ( $quizy_areas as $quizy_area)
            {{ $quizy_area->area }}の人しか解けない！＃{{$quizy_area->area }}
        @endforeach
    の難読地名クイズ</h1> 

    <?php $counter = 1; ?>
    @foreach ($question_choices as $index => $question_choice)

    <div class="question" id="question<?= $counter ?>">
        <h2><?= $counter ?>.この地名はなんて読む？</h2>
        <img src="{{ asset('image/image' . $question_choice->area . '-' . $counter . '.png')}}" alt="image{{ $question_choice->area }}-{{$index}}.png">
        <ul>
            <li id="choice<?= $counter ?>-0" name="choicesName" onclick="onclickFunction(<?= $counter ?>,0)">{{ $question_choice->choice1}}</li>
            <li id="choice<?= $counter ?>-1" name="choicesName" onclick="onclickFunction(<?= $counter ?>,1)">{{ $question_choice->choice2}}</li>
            <li id="choice<?= $counter ?>-2" name="choicesName" onclick="onclickFunction(<?= $counter ?>,2)">{{ $question_choice->choice3}}</li>
        </ul>
        <div id="answerBox<?= $counter ?>" class="answerBox">
            <p id="answerTitle<?= $counter ?>" class="answerTitle"></p>
            <p id="answerExplanation<?= $counter ?>" class="answerExplanation">正解は「{{ $question_choice->choice1}}」です！</p>
        </div>
    </div>
    <?php $counter++; ?>
        @endforeach

      <script src="{{ asset('/js/quizy.js') }}"></script>

</body>

</html>
