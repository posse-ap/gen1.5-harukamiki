<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel Quizy</title>
</head>

<body>
    @section('title', 'quizy')

    @section('content')
    {{-- TODO foreach以外の方法で取り出す --}}
    <h1>ガチで{{ $area->area }}の人しか解けない！＃{{$area->area}}の難読地名クイズ</h1> 

    <?php 
    foreach ($questions as $key => $question){ ?>
    <div class="question" id="question{{ $key+1 }}">
        <h2>{{  $key+1 }}.この地名はなんて読む？</h2>
        <div>
            <img class="w-100" src="{{ asset('storage/image/' . $question->image1)}}" alt="question_{{$question->id}}">
        </div>
        <ul>
            <?php 
            $question_number = $question->id;
            $this_choices = $choices->where('question_id', $question_number);
            // var_dump($this_choices);
            $index = 0;
            foreach($this_choices as $choice){
                if($choice->question_id == $question->id){
            ?>
            <li id="choice{{  $key+1 }}-{{ $index }}" name="choicesName" onclick="onclickFunction({{ $key+1 }},{{ $index }})">{{$choice->name}}</li>
            <?php
            $index = $index+1;  
             }};?>
        </ul>
        <div id="answerBox{{  $key+1 }}" class="answerBox">
            <p id="answerTitle{{  $key+1 }}" class="answerTitle"></p>
            <p id="answerExplanation{{  $key+1 }}" class="answerExplanation">正解は「{{ $correct_answers[$question_number-1]->name }}」です！</p>
        </div>
    </div>
    <?php 
    $index = 1;
    };?>

      <script src="{{ asset('/js/quizy.js') }}"></script>

</body>

</html>
