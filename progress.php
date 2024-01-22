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
  <link href="css/progress.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery-2.1.4.min.js"></script>
  <!--component-css-->

</head>
<body>
  <input type="hidden" value="<?php echo $_SESSION["rm_user_id"]; ?>" id="uid" />
  <div class="diet-screen">
    <div class="arrow">
      <div class="previous" onclick="history.back()"><i class="fa-solid fa fa-arrow-circle-left "></i></a>
      </div>

    </div>
    <div class="details">
      <h1 class="heading1"><?php echo $obj->getUserDataDI('full_name'); ?></h1>
      <h1 class="heading2">Choose the progress</h1>
      <p class="paragraph">We will use this data to give you a better diet type for you</p>
    </div>

    <div class="goalsarea">
      <div class="goals" onclick="handleExtreme()">
        <div class="extreme">
          <h2 class="heading3">Extreme</h2>
          <p>Hard</p>
        </div>
        <iconify-icon icon="mdi:trophy" class="image1"></iconify-icon>
      </div>

      <div class="goals" onclick="handleVeryActive()">
        <div class="extreme">
          <h2 class="heading3">Very Active</h2>
          <p>Very Active</p>
        </div>
        <iconify-icon icon="mdi:shimmer" class="image1"></iconify-icon>
      </div>

      <div class="goals" onclick="handleModerate()">
        <div class="extreme">
          <h2 class="heading3">Moderate</h2>
          <p>Medium</p>
        </div>
        <iconify-icon icon="mingcute:bulb-fill" class="image1"></iconify-icon>
      </div>

      <div class="goals" onclick="handleLightActive()">
        <div class="extreme">
          <h2 class="heading3">Light Active</h2>
          <p>Light Active</p>
        </div>
        <iconify-icon icon="mdi:hexagram-outline" class="image1"></iconify-icon>
      </div>

      <div class="goals" onclick="handleSedentary()">
        <div class="extreme">
          <h2 class="heading3">Sedentary</h2>
          <p>Easy</p>
        </div>
        <iconify-icon icon="carbon:thumbs-up-filled" class="image1"></iconify-icon>
      </div>
    </div>

    <script src="js/progress.js"></script>
    <script>
      let date = new Date();
      date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
      let gender = sessionStorage.getItem("gender");
      let age = sessionStorage.getItem("age");
      let height = sessionStorage.getItem("height");
      let target_weight = sessionStorage.getItem("target_weight");
      
      
      //let BMR = gender == "Male" ? 88.362 + (13.397 * target_weight) + (4.799 * height) - (5.677 * age) : 447.593 + (9.247 * target_weight) + (3.098 * height) - (4.330 * age);
      let BMR = 0;
      //trying fixing ios issue
      if(gender == "Male"){
        BMR = 88.362 + (13.397 * target_weight) + (4.799 * height) - (5.677 * age);
      }
      else{
        BMR = 447.593 + (9.247 * target_weight) + (3.098 * height) - (4.330 * age);
      }
      //trying fixing ios issue
      
      const handleExtreme=()=>{
        let extremeBMR = BMR * 1.30;
        let progress = "Extreme";
        let calories = Math.round(extremeBMR);
        $.post('ajax/setdietplan.php', {
          calories: calories,
          target_weight: target_weight,
          progress: progress,
          date:date,
          uid: $("#uid").val()
        }, function(response) {
          console.log(response);
          window.location.href = 'preparing.php';
        });
      }
      const handleVeryActive=()=>{
        let extremeBMR = BMR * 1.20;
        let progress = "Very Active";
        let calories = Math.round(extremeBMR);
        $.post('ajax/setdietplan.php', {
          calories: calories,
          target_weight: target_weight,
          progress: progress,
          date:date,
          uid: $("#uid").val()
        }, function(response) {
          console.log(response);
          window.location.href = 'preparing.php';
        });
      }
      const handleModerate=()=>{
        let moderateBMR = BMR * 1.10;
        let progress = "Moderate";
        let calories = Math.round(moderateBMR);
        $.post('ajax/setdietplan.php', {
          calories: calories,
          target_weight: target_weight,
          progress: progress,
          date:date,
          uid: $("#uid").val()
        }, function(response) {
          console.log(response);
          window.location.href = 'preparing.php';
        });
      }
      const handleLightActive=()=>{
        let moderateBMR = BMR * 1.00;
        let progress = "Light Active";
        let calories = Math.round(moderateBMR);
        $.post('ajax/setdietplan.php', {
          calories: calories,
          target_weight: target_weight,
          progress: progress,
          date:date,
          uid: $("#uid").val()
        }, function(response) {
          console.log(response);
          window.location.href = 'preparing.php';
        });
      }
      const handleSedentary=()=>{
        let sedentaryBMR = BMR * 0.90;
        let progress= "Sedentary";
        let calories = Math.round(sedentaryBMR);
        $.post('ajax/setdietplan.php', {
          calories: calories,
          target_weight: target_weight,
          progress: progress,
          date:date,
          uid: $("#uid").val()
        }, function(response) {
          console.log(response);
          window.location.href = 'preparing.php';
        });
      }
    </script>
</body>

</html>