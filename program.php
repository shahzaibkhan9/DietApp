<?php
include_once('xloop/stepin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Diet App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Fit Health App Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script
        type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset utf="8">
    <!--font-awesome-css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--custom css-->
    <link href="css/program.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--component-css-->



</head>
<body>
    <div class="diet-screen">
        <?php if($obj->countUserLogData($_SESSION["rm_user_id"]) < 1){ ?>
        <div class="arrow">
            <div class="previous" onclick="history.back()"><i class="fa-solid fa fa-arrow-circle-left "></i></a>
            </div>
        </div>
        <?php 
        }
        ?>
        <div class="details">
            <h1 class="heading1">Your Personal Program is ready</h1>
            <p class="paragraph">To achieve your target weight we've tailored this plan for you </p>
        </div>

        <!-- Chart  -->
        <div class="chart">

            <div class="line-chart">
                <input type="hidden" id="weight" value="<?php echo $obj->getUserDataDI('weight')?>"/>
                <input type="hidden" id="target_weight" value="<?php echo $obj->getUserDataDI('target_weight')?>"/>
                <div class="week">
                    <h2 class="inc_weight" id="target"><?php echo $obj->getUserDataDI('dtw')?> kg</h2>
                    <p> <span>04</span> weeks &nbsp; &nbsp; <span><?php echo number_format((float)($obj->getUserDataDI('dtw')/4), 1, '.', '');?>kg</span> / week </p>
                </div>
                <div class="aspect-ratio">
                    <canvas id="chart"></canvas>
                </div>
            </div>

            <h2 style="color: white;">Nutritional Recommendations</h2>
            <div class="nutritional">
                <div class="total">
                    <div class="total_exc">
                        <h3 class="total_kcal"><span><?php echo $obj->getUserDataDI('calories')?> kcal</span></h3>
                        <h4 class="daily-calo"><span>Required Daily Calories</span></h4>
                    </div>
                    <div class="percentage"> 
                        <span class="percentage">100%</span>
                    </div>
                </div>
                <hr class="bar">
            </div>

        </div>
        <!-- Chart End  -->

        
        <!-- How To Reach Your Goal -->

        <div class="reach-goal">
            <div class="how">
                <h3>How to reach your goal</h3>
                <p>Do these 4 activites</p>
            </div>
            <div class="four-goals">
                <div class="track">
                    <iconify-icon class="goal-icon" icon="material-symbols:food-bank"></iconify-icon>
                    <p>Track Your Food</p>
                </div>
                <div class="track">
                    <iconify-icon class="goal-icon" icon="material-symbols:balance"></iconify-icon>
                    <p>Balance Your Intake</p>
                </div>
                <div class="track">
                    <iconify-icon class="goal-icon" icon="mdi:food-fork-drink"></iconify-icon>
                    <p>Stay Hydrated</p>
                </div>
                <div class="track">
                    <iconify-icon class="goal-icon" icon="fa6-solid:weight-scale"></iconify-icon>
                    <p>Update You Weight </p>
                </div>
            </div>
            <div class="explore-btn">
                <button onclick="window.location.href='home.php'">Today's Meal</button>
            </div>
        </div>


    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script src="js/program.js"></script>

</html>