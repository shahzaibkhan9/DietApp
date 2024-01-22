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
  <link href="css/goals-page.css" rel="stylesheet" type="text/css" />
  <!--component-css-->
  <!--weight design links-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.2/roundslider.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!--weight design links-->
  

</head>

<body>
  <div class="diet-screen">
    <div class="arrow">
      <div class="previous" onclick="history.back()"><i class="fa-solid fa fa-arrow-circle-left "></i></a>
      </div>

    </div>
    <div class="details">
      <h1 class="heading1"><?php echo $obj->getUserDataDI('full_name'); ?></h1>
      <h1 class="heading2">What is your goal?</h1>
      <p class="paragraph">We will use this data to give you a better diet type for you</p>
    </div>

    <div class="goalsarea">
      <div onclick="openWeightModal()" class="goals">
        <h2 class="heading3">Lose Weight</h2>
        <iconify-icon icon="healthicons:underweight-outline" class="image1"></iconify-icon>
      </div>

      <!-- Lose Weight Modal -->
      <!-- <div id="myModal" class="lose-modal">
        <div class="lose-modal-content">
          <div class="slidecontainer">
              <p>Target Weight</p>
            <input type="text" min="1" max="120" value="60" id="lose_rangeValue">
            <input type="range" min="1" max="120" value="60" class="slider" id="lose_myRange">
            <p style="font-size: 0;" >Value: <span id="lose_demo">  </span></p>
            <button onclick="lose_closeModal()" type="button" class="next-des ">Next</button> 
          </div>
        </div>
      </div> -->


      <div onclick="openGainWeightModal()" class="goals">
        <h2 class="heading3">Gain weight</h2>
        <iconify-icon icon="mdi:weight-lifter" class="image1"></iconify-icon>
      </div>

      <!-- Lose Weight Modal -->
      <div id="myWeightModal" class="modal">
        <div class="weight-modal-content">
          <h3 class="target-weight">Target Weight</h3>
          <div class="weight-main-div">
            <div class="frame">
            
              <div id="slider" class="rslider"></div>
              <div class="thermostat">
                <div class="ring">
                  <div class="bottom_overlay"></div>
                </div>
                <div class="control">
                  <div class="temp_room"><span>kg</span></div>
                  <div class="room">Weight</div>
                </div>
              </div>
            </div>
          </div>
          <div class="save">
            <button type="button" class="modalbtn" onclick="handleGoal()">Save</button>
          </div>
        </div>
      </div>

      <!-- Gain Weight Modal -->
      <div id="myGainWeightModal" class="modal">
        <div class="gainweight-modal-content">
          <h3 class="target-weight">Target Weight</h3>
          <div class="weight-main-div">
            <div class="frame">
            
              <div id="slider" class="rslider gain-slider"></div>
              <div class="thermostat">
                <div class="ring">
                  <div class="bottom_overlay"></div>
                </div>
                <div class="control">
                  <div class="temp_room"><span>kg</span></div>
                  <div class="room">Weight</div>
                </div>
              </div>
            </div>
          </div>
          <div class="save">
            <button type="button" class="modalbtn" onclick="handleGainGoal()">Save</button>
          </div>
        </div>
      </div>

      <div class="goals" onclick="handleGoal()">
        <h2 class="heading3">Stay Healthy</h2>
        <iconify-icon icon="mdi:trophy-award" class="image1"></iconify-icon>
      </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
  integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!--weight design script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.2/roundslider.min.js"></script>
<script src="js/goals-page.js"></script>

</html>