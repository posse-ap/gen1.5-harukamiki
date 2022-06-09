<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="css/posse-app.css">
    <script src="https://kit.fontawesome.com/deee3ad54f.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <header class="header">
        <img src="images/posselogoss.png" alt="posse.logo">
        <span class="weekNo">4th week</span>
        <button class="topbutton" onclick="openModal()">記録・投稿</button>
    </header>

    <main class="main">
        <div class="bargraphBigBox">
            <div class="hourBigBox">
                <div class="hourBox">
                    <span class="hourBoxTitle">Today</span>
                    <span class="todayNo"><?php echo e($study_time_today); ?></span>
                    <span class="hour">hour</span>
                </div>
                <div class="hourBox">
                    <span class="hourBoxTitle">Month</span>
                    <span class="monthNo"><?php echo e($study_time_month); ?></span>
                    <span class="hour">hour</span>
                </div>
                <div class="hourBox">
                    <span class="hourBoxTitle">Total</span>
                    <span class="totalNo"><?php echo e($study_time_total); ?></span>
                    <span class="hour">hour</span>
                </div>
            </div>
            <div class="bar"></div>
            <div class="bargraph">
                <canvas id="myChart" class="bargraphItself"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
                
                <script>                   
                    //ラベル
                    var labels = [
                        <?php
                        $datelabels = range(1,date('t'));
                        foreach($datelabels as $key => $bargraphlabels)
                        if ($bargraphlabels !== end($datelabels)) {
                            echo '\'' . $bargraphlabels . '\''. ',' . PHP_EOL;
                        }else{
                            echo '\'' . $bargraphlabels . '\'' . PHP_EOL;
                        }
                        ?>
                	];
        	        //実査の勉強のデータ
        	        var study_data = [
                        <?php
                        foreach($study_length_per_day as $study_length){
                                echo $study_length , ',' . PHP_EOL;
                        }
                         ?>
                	];
                                
                var ctx = document.getElementById("myChart");
                var myChart = new Chart(ctx, {
        		type: 'line',
                // TODO：barにすると何も表示されない
        		data : {
        			labels: labels,
        			datasets: [
        				{
        					label: '勉強時間',
        					data: study_data,
        					borderColor: "rgb(72,138,199)",
                			backgroundColor: "rgba(0,0,0,0)"
        				},
        			]
        		},
        		options: {
        			title: {
        				display: false,
        			},
                    // legend: {
                    //     display: false
                    // },
                    
                    // xAxes: [{
                    //     gridLines: {
                    //         display: false
                    //     },
                    //     ticks: {
                    //         min: 1,
                    //         max: 30,
                    //         stepSize: 2,
                    //         maxTicksLimit: 16,
                    //     }
                    //     }],
                    // yAxes: [{
                    //     gridLines: {
                    //         display: false
                    //     },
                    //     ticks: {
                    //         suggestedMax: 8,
                    //         suggestedMin: 0,
                    //         stepSize: 2,
                    //         callback: function (value, index, values) {
                    //         return value + 'h'
                    //         }
                    //     }
                    // }]
                }
            });
            </script>
            
        </div>
    </div>

        <div class="piechartBigBox">
            <div class="languageBigBox">
                <div class="piechartTitle">学習言語</div>
                
                <script>                   
                    // ラベル
                        var labels = [
                            <?php
                            $datelabels = range(1,date('t'));
                            foreach($datelabels as $key => $bargraphlabels){
                            if ($bargraphlabels !== end($datelabels)) {
                                echo '\'' . $bargraphlabels . '\''. ',' . PHP_EOL;
                            }else{
                                echo '\'' . $bargraphlabels . '\'' . PHP_EOL;
                            }
                            }
                            ?>
                    	];

        	        //実査の勉強のデータ
        	            var study_data = [
                            <?php
                            foreach($study_length_per_day as $study_length){
                                    echo $study_length , ',' . PHP_EOL;
                            }
                             ?>
                    	];

                        var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
        		        type: 'line',
        		        data : {
        		    	    labels: labels,
        		    	    datasets: [
        		    	    	{
        		    		    	label: '勉強時間',
        		    		    	data: study_data,
        		    		    	borderColor: "rgb(72,138,199)",
                    		    	backgroundColor: "rgba(0,0,0,0)"
        		    	    	},
        		        	]
        		        },
                        });
                </script>

                
                <canvas id="langPiechart" class="langPiechart" width="100" height="100"></canvas>
                <script>
                
                    var labels = [
                        <?php 
                            foreach($language_list as $language){
                                if ($language !== end($language_list)) {
                                    echo '\'' . $language->language . '\''. "," . PHP_EOL;
                                }else{
                                    echo '\'' . $language->language . '\'' . PHP_EOL;
                                }
                            }
                        ?>
                     ];

                    var backgroundcolor = [
                        <?php 
                              foreach($language_list as $language){
                                if ($language !== end($language_list)) {
                                    echo '\'#' . $language->language_color . '\''. "," . PHP_EOL;
                                }else{
                                    echo '\'#' . $language->language_color . '\'' . PHP_EOL;
                                }
                              }
                        ?>
                    ]

                    var study_data = [
                        <?php
                            foreach($study_time_by_language as $lang_total){
                                if ($lang_total !== end($study_time_by_language)) {
                                    echo '\'' . $lang_total->lang_total . '\''. "," . PHP_EOL;
                                }else{
                                    echo '\'' . $lang_total->lang_total . '\'' . PHP_EOL;
                                }
                              }
                        ?>
                    ]
                    
                    var ctx = document.getElementById("langPiechart");
                        var langPiechart = new Chart(ctx, {
        		        type: 'doughnut',
        		        data : {
        		    	    // labels: labels,
        		    	    datasets: [
        		    	    	{
        		    		    	data: study_data,
        		    		    	// borderColor: "rgb(72,138,199)",
                    		    	backgroundColor: backgroundcolor,
        		    	    	},
        		        	]
        		        },
                        cutoutPercentage: 40,
                        });
                </script>


                <?php 
                   foreach($language_list as $language):
                ?>
                <li>
                    <p class="<?php echo e($language->language); ?>" style="background: #<?php echo e($language->language_color); ?>;"></p>
                    <?php echo e($language->language); ?>

                </li>
                <?php endforeach; ?>
            </div>

            <div class="contentsBigBox">
                <div class="piechartTitle">学習コンテンツ</div>
                <canvas id="contPiechart" class="langPiechart" width="100" height="100"></canvas>
                <script>

                var backgroundcolor = [
                    <?php 
                          foreach($contents_list as $content){
                            if ($content !== end($contents_list)) {
                                echo '\'#' . $content->content_color . '\''. "," . PHP_EOL;
                            }else{
                                echo '\'#' . $content->content_color . '\'' . PHP_EOL;
                            }
                          }
                    ?>
                ]

                var study_data = [ 
                    <?php
                        foreach($study_time_by_content as $content_total){
                            if ($content_total !== end($study_time_by_content)) {
                                echo '\'' . $content_total->content_total . '\''. "," . PHP_EOL;
                            }else{
                                echo '\'' . $content_total->content_total . '\'' . PHP_EOL;
                            }
                          }
                    ?>
                ]
                
                var ctx = document.getElementById("contPiechart");
                    var contPiechart = new Chart(ctx, {
                    type: 'doughnut',
                    data : {
                        // labels: labels,
                        datasets: [
                            {
                                data: study_data,
                                // borderColor: "rgb(72,138,199)",
                                backgroundColor: backgroundcolor,
                            },
                        ]
                    },
                    cutoutPercentage: 40,
                    });
            </script>

                <?php 
                    foreach($contents_list as $content):
                ?>
                <li>
                    <p class="<?php echo e($content->content); ?>>" style="background: #<?php echo e($content->content_color); ?>;"></p>
                    <?php echo e($content->content); ?>

                </li>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

    <footer class="footer">
        <i class="fas fa-chevron-left calendarback"></i>
        <div class="bottomCalendar">2020年10月</div>
        <i class="fas fa-chevron-right calendarforward"></i>
        <button class="bottombutton" onclick="openModal()">記録・投稿</button>
    </footer>

    <section class="modalOutside" id="modalOutside">
        <div id="modal" class='modal'>
            <div onclick="closeModal()" id="closeModal">×</div>
            <div class="modalInside" id="modalInside">
                <div class="modal-lefthalf">
                    <h3>学習日</h3>
                    <input id="modal-calendar" class="modal-calendar" type="text" onclick="openCalendar()"
                        readonly="readonly">
                    <h3>学習コンテンツ(複数選択可)</h3>
                    <ul>
                    <?php 
                        foreach($contents_list as $content):
                    ?>
                        <label class="modal-checkbox"><input class="modal-checkboxInput" type="checkbox"><?php echo e($content->content); ?></label>
                    <?php endforeach; ?>

                    </ul>
                    <h3>学習言語(複数選択可)</h3>
                    <ul>
                        <?php 
                        foreach($language_list as $language):
                        ?>
                        <label for="<?php echo e($language->language); ?>>" class="modal-checkbox"><input name="<?php echo e($language->language); ?>" class="modal-checkboxInput"
                                type="checkbox"><?php echo e($language->language); ?></label>

                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="modal-righthalf">
                    <h3>学習時間</h3>
                    <input class="modal-input" type="text">
                    <h3>Twitter用コメント</h3>
                    <textarea name="" id="content" class="modal-inputTWT" cols="2" rows="3" maxlength="140"></textarea>
                    <input name="twitterCheck" type="checkbox">Twitterにシェアする</i>
                    <!-- <i id="twitter" class="fas fa-check-circle twt">Twitterにシェアする</i> -->
                </div>

            </div>
            <button onclick="completeModal()" class="modalbutton" id="modalbutton">記録・投稿</button>

            <div id="loading">
                <div class="loader"></div>
            </div>

            <div id="postComplete" class="postComplete">
                <p class="awe">AWESOME!</p>
                <i class="fas fa-check-circle size"></i>
                <p>
                    記録・投稿<br>完了しました
                </p>
            </div>

            <div id="modalCalendar" class="modalCalendar">
                <i class="fas fa-arrow-left arrow" onclick="openModal()"></i>
                <!-- <iframe class="calendar" src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=aGFydS5tMWsxQGtlaW8uanA&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y19ndmoxZHZybTJzcDFsc2ZxdG5wY2o0OGs0b0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=a2Vpby5qcF9jbGFzc3Jvb200MmY0MTFlMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%23795548&amp;color=%23137333&amp;color=%230B8043&amp;hl=en&amp;showTitle=0&amp;showPrint=0&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0&amp;showDate=0" style="border-width:0" width="800" height="500" frameborder="0" scrolling="no"></iframe> -->
                <div class="CalendarModalTitle">2020年10月</div>
                <table class="calendar">
                    <tr>
                        <th>SUN</th>
                        <th>MON</th>
                        <th>TUE</th>
                        <th>WED</th>
                        <th>THU</th>
                        <th>FRI</th>
                        <th>SAT</th>
                    </tr>

                    <tr class="day">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="calendarDate1" onclick="dateclicked(1)">1</td>
                        <td id="calendarDate2" onclick="dateclicked(2)">2</td>
                        <td onclick="dateclicked('03')">3</td>
                    </tr>
                    <tr class="day">
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                    </tr>
                    <tr class="day">
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                    </tr>
                    <tr class="day">
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                    </tr>
                    <tr class="day">
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                    </tr>
                </table>
                <button type="submit" class="calendarSubmitButton" onclick="submitDate()">決定</button>
            </div>
        </div>
    </section>

    <script src="<?php echo e(asset('/js/posse-app.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/chart.php')); ?>" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
    <script src="<?php echo e(asset('js/chartjs-plugin-labels.js')); ?>"></script>
</body>

</html><?php /**PATH /work/backend/resources/views/index.blade.php ENDPATH**/ ?>