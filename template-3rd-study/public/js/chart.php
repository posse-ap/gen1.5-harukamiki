<?php
header('Content-Type: text/javascript');


?>

var barchart = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(barchart,{
                    type: 'bar',
                    data: {
                        labels:[
                        <?php
                        $datelabels = range(1,date('t'));
                        foreach($datelabels as $key => $bargraphlabels)
                        if ($bargraphlabels !== end($datelabels)) {
                            echo '\'' . $bargraphlabels . '\''. ',' . PHP_EOL;
                        }else{
                            echo '\'' . $bargraphlabels . '\'' . PHP_EOL;
                        }
                        ?>
                                ],
                        datasets:[{
                        backgroundColor: "#3BCDFD",
                        data: [
                            
                        <?php
                            foreach($study_length_per_day as $study_length){
                                    echo $study_length , ',' . PHP_EOL;
                            }
                        ?>
                        ];
                            

                        }];
                    },
                    
                    options: {
                        legend: {
                        display: false
                        },
                        xAxes: [{
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            min: 1,
                            max: 30,
                            stepSize: 2,
                            maxTicksLimit: 16,
                        }
                        }],
                        yAxes: [{
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            suggestedMax: 8,
                            suggestedMin: 0,
                            stepSize: 2,
                            callback: function (value, index, values) {
                            return value + 'h'
                            }
                        }
                        }]
                    }
                });

// // ////////////////学習言語//////////////////

var ctx = document.getElementById("langPiechart").getContext('2d');
var langPiechartChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    label: [
      <?php 
        $stmt = $pdo->prepare('SELECT * FROM languages');
        $stmt->execute();
        $languagelist = $stmt->fetchAll();
        foreach($languagelist as $eachlanguage){
          echo "\"" . $eachlanguage["language"] . "\"" . "," . PHP_EOL;
        }
      ?>

    <!-- "HTML", "CSS", "JavaScript", "PHP", "Laravel", "SQL", "SHELL", "その他" -->
    ],
    datasets: [{
      backgroundColor: [
        <?php 
          foreach($languagelist as $eachlanguage){
            echo "\"#" . $eachlanguage["lang_color"] . "\"" . "," . PHP_EOL;
          }
        ?>
      ],
      borderWidth: 0,
      data: [
        <?php
        // 合計勉強時間取得
        $stmt = $pdo->prepare('SELECT sum(timelength) as total FROM studydata');
        $stmt->execute();
        $totalstudytime= $stmt->fetch();
        // var_dump($totalstudytime["total"]);

        // 言語主体で勉強データ取得
        $lang = $pdo->prepare('SELECT languages, sum(timelength) as lang_total FROM studydata GROUP BY languages');
        $lang->execute();
        $data_by_language = $lang->fetchAll();

        foreach($data_by_language as $eachlanguage){
        echo round(($eachlanguage["lang_total"] / $totalstudytime["total"])*100, 0) . "," . PHP_EOL;
        }
      // 30, 20, 10, 5, 5, 20, 20, 10
        ?>
      ]
    }]
  },
  options: {
    plugins: {
      labels: {
        render: 'percentage',
        fontColor: 'white',
        fontSize: 20,
      },
      // },
      // formatter: (value,) => {
      //   return value + '%';
      // },
    },
      cutoutPercentage: 40,
      tooltips: { enabled: false },
      width: "100%",
    

  }});

// langPiechart.style.width = window.innerWidth + 'px';

//////////////////////////////学習コンテンツ///////////
var contPiechart = document.getElementById("contPiechart").getContext('2d');
var contPiechartChart = new Chart(contPiechart, {
  type: 'doughnut',
  data: {
    datasets: [{
      label: [
        <?php 
        $stmt = $pdo->prepare('SELECT * FROM contents');
        $stmt->execute();
        $contentslist = $stmt->fetchAll();
        foreach($contentslist as $eachcontent){
          echo "\"" . $eachcontent["content"] . "\"" . "," . PHP_EOL;
        }
      ?>
        ],
      backgroundColor: [
        <?php 
        $stmt = $pdo->prepare('SELECT * FROM contents');
        $stmt->execute();
        $contentslist = $stmt->fetchAll();
        foreach($contentslist as $eachcontent){
          echo "\"#" . $eachcontent["content_color"] . "\"" . "," . PHP_EOL;
        }
      ?>
      ],
      borderWidth: 0,
      data: [
        <?php
        // 教材主体で勉強データ取得
        $cont = $pdo->prepare('SELECT contents, sum(timelength) as contents_total FROM studydata GROUP BY contents');
        $cont->execute();
        $data_by_contents = $cont->fetchAll();

        foreach($data_by_contents as $eachcontent){
        echo round(($eachcontent["contents_total"] / $totalstudytime["total"])*100, 0) . "," . PHP_EOL;
        }
      // 30, 20, 10, 5, 5, 20, 20, 10
        ?>
        ]
    }]
  },
  options: {
    cutoutPercentage: 40,
    width: "100%",
    tooltips: { enabled: false },
  },
});