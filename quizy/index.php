<?php
try {
    $pdo = new PDO(
        'mysql:host=db;dbname=quizy;charset=utf8mb4',
        'mikiharu',
        'password',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
    
    $id = filter_input(INPUT_GET, 'id');
    if($id == 1){
        $theme = '東京';
        $stmt = $pdo->query("SELECT * FROM questions_tokyo");
        $images = [   
            "https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png",
            "https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png",
            "https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png"];
    }if($id == 2){
        $theme = '広島';
        $stmt = $pdo->query("SELECT * FROM questions_hiroshima");
        $images = [
            "https://d1khcm40x1j0f.cloudfront.net/quiz/d876208414d51791af9700a0389b988b.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/51e91a5c0b3bc7d6bef3b4c02d6c553d.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/93c494f3017e03085dae7e63a85baed9.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/d1ef34278e86dc91f475e7a23c1c607d.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/5ba6db6204af5465585decf24143888c.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/4ec63a14f42864acc07d849a3415dcfa.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/dc3a568d402ec4150946504b763de755.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/4546e69435df751600539979a68cb0a4.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/90806c11c7d473c78b6235060736ab7c.png",
            "https://d1khcm40x1j0f.cloudfront.net/quiz/748410d33b48ab39319a705a8f5c1662.png"
        ];
    }
    $questions = $stmt->fetchAll();
    // var_dump($questions);

    // foreach($questions as $question){
    //     print_r($question);
    // };
    $answerBoxAnswer = [
        "たかなわ", "かめいど", "こうじまち", "おなりもん", "とどろき", "しゃくじい", "ぞうしき", "おかちまち", "ししぼね", "こぐれ"
    ];

}catch(PDOException $e){
    echo $e -> getMessage() . PHP_EOL;
    exit;
  };


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチで<?=$theme ?>の人しか解けない！ #<?=$theme ?>の難読地名クイズ</title>
</head>

<body>
    <div class="monnme">
        <h1 class="title">ガチで<?=$theme ?>の人しか解けない！ #<?=$theme ?>の難読地名クイズ</h1>
        <?php foreach($questions as $question){
        $question_number = $question['id'] -1;?>

        <div class="monnme<?= $question_number +1?>" id="monnme<?= $question_number +1?>">
        <h2><?= $question_number +1?>. この地名はなんて読む？</h2>
        <img src= "<?=$images[$question_number] ?>" alt="No.<?=$question_number ?>.photo">
        <ul>
        <li id="option<?=$question_number ?>-0" onclick="clickedFunction(<?=$question_number ?>,'0','<?= $answerBoxAnswer[$question_number]?>')"><?= $questions[$question_number]['choice1'] ?></li>
        <li id="option<?=$question_number ?>-1" onclick="clickedFunction(<?=$question_number ?>,'1','<?= $answerBoxAnswer[$question_number]?>')"><?= $questions[$question_number]['choice2'] ?></li>
        <li id="option<?=$question_number ?>-2" onclick="clickedFunction(<?=$question_number ?>,'2','<?= $answerBoxAnswer[$question_number]?>')"><?= $questions[$question_number]['choice3'] ?></li>
        </ul>
        <div id="answerBox<?= $question_number ?>">
        <p id="seikai<?= $question_number ?>"></p>
        <p id="seikaiexp<?= $question_number ?>"></p>
        </div>
        <?php }; ?>

    <script src="quizy.js"></script>
</body>

</html>