<?php
include_once('xloop/stepin.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Diet App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/loader.css" rel="stylesheet" type="text/css"/>
</head>
  <body>
      <div class="diet-screen">
        <div class="mp-heading">
            <h1 class="mp-welcome">Welcome</h1>
            <h3 class="mp-username"><span><?php echo $obj->getUserDataDI('full_name'); ?></span></h3>
            <img class="mp-logo" src="images/mp-logo.png">
        </div>
      </div>
  </body>
  <script>
    const log_count = Math.round(<?php echo $obj->countUserLogData($_SESSION["rm_user_id"]) ?>);
    setTimeout(changeLocation, 2000);
    function changeLocation() {
      if(log_count > 0){
        sessionStorage.setItem('uids', <?php echo $_SESSION["rm_user_id"];?>);
        window.location.href = "program.php";
      }
      else{
        window.location.href = "user_info.php";
      }
    }
  </script>
</html>