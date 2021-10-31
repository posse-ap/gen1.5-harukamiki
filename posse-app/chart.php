<?php
require('requiresql.php');

$stmt = $pdo->prepare('SELECT studied_on, sum(timelength) FROM studydata GROUP BY studiedon');
$stmt->execute();
$timelength = $stmt->fetchAll();
// この状態　→　書いてある日程
// foreach
// if{$timelength }

$datelabel = $pdo->prepare('SELECT studied_on FROM studydata');
$datelabel -> execute();
$datelabels = $datelabel->fetchAll();

?>

var barchart = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(barchart,{
  type: 'bar',
  data: {
    labels:[
<?php
$datelabels = range(1,date('t'));
foreach($datelabels as $key => $bargraphlabels){
  echo '\'' . $bargraphlabels . '\''. ',' . PHP_EOL;

if ($bargraphlabels == end($datelabels)) {
  echo '\'' . $bargraphlabels . '\'' . PHP_EOL;
}
}
?>
<!-- '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30' -->
],
    datasets:[{
      backgroundColor: "#3BCDFD",
      data: [
      <!-- TODO -->
      <!-- https://ja.stackoverflow.com/questions/12597/sql%E3%81%A7%E7%84%A1%E3%81%84%E3%83%87%E3%83%BC%E3%82%BF%E3%82%92%E8%A1%A8%E7%A4%BA%E3%81%95%E3%81%9B%E3%81%9F%E3%81%84 -->
        <?php 
      $stmt = $pdo->prepare('SELECT studied_on FROM studydata GROUP BY studied_on');
      $stmt->execute();
      $timelength = $stmt->fetchAll();
      
      // foreach($timelength as $length):
      //   echo $length[0] . ',' . PHP_EOL;
      // endforeach;

      // $everyday = query

      ?>
      ],
    
  }]
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
<!--  -->
// // ////////////////学習言語//////////////////
var ctx = document.getElementById("langPiechart").getContext('2d');
var langPiechartChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    // label: ["HTML", "CSS", "JavaScript", "PHP", "Laravel", "SQL", "SHELL", "その他"]
    datasets: [{
      backgroundColor: [
        "#0B40F6",
        "#1172C3",
        "#1FC0E2",
        "#23D1FF",
        "#B69DFB",
        "#753FF5",
        "#5400F9",
        "#3A00C8"
      ],
      borderWidth: 0,
      data: [30, 20, 10, 5, 5, 20, 20, 10]
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
      label: ["N予備校", "ドットインストール", "課題"],
      backgroundColor: [
        "#0B40F6",
        "#1172C3",
        "#3A00C8"
      ],
      borderWidth: 0,
      data: [40, 20, 40]
    }]
  },
  options: {
    cutoutPercentage: 40,
    width: "100%",
    tooltips: { enabled: false },
  },
});