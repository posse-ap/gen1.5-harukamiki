var barchart = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(barchart, {
  type: 'bar',
  data: {
    labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'],
    datasets: [{
      backgroundColor: "#3BCDFD",
      data: [0, 3, 4, 5, 3, 0, 0, 4, 2, 2, 8, 8, 2, 2, 1, 7, 4, 4, 3, 3, 3, 2, 2, 6, 2, 2, 1, 1, 1, 7, 8],
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