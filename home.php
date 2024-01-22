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
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <meta charset utf="8">
    <!--font-awesome-css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <!-- <link rel="stylesheet" href="css/goals-page.css"> -->
    <!--Iconify Link-->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>
    <div class="diet-screen">
    <div class="arrow">
      <div class="previous" onclick="history.back()"><i class="fa-solid fa fa-arrow-circle-left "></i></a>
      </div>
    </div>
    <div class="pad">
    <div id="meals">
      <h1>Today's Meal</h1>
      <ul class="meals-list">
        <li class="breakfast list-item">
          <input type="checkbox" checked>
          <i></i>
          <div class="accord">
            <iconify-icon class="accord-icon" icon="fluent-mdl2:breakfast"></iconify-icon>
            <h2 class="meals-heading"> Breakfast</h2>
          </div>
        </li>
        <li class="lunch list-item">
          <input type="checkbox" checked>
          <i></i>
          <div class="accord">
            <iconify-icon class="accord-icon" icon="material-symbols:lunch-dining"></iconify-icon>
            <h2 class="meals-heading">Lunch</h2>
          </div>
        </li>
        <li class="dinner list-item">
          <input type="checkbox" checked>
          <i></i>
          <div class="accord">
            <iconify-icon class="accord-icon" icon="cil:dinner"></iconify-icon>
            <h2 class="meals-heading">Dinner</h2>
          </div>
        </li>
      </ul>
      <h2 class="resetlink" onclick="openConfirmModal()"><iconify-icon class="icon" icon="carbon:reset"></iconify-icon> RESET</h2>
    </div>
  </div>

  

  </div>



  
  <!-- The Height Modal -->
  <div id="myConfirmModal" class="modal">
    <!-- Modal content -->
    <div class="height-modal-content">
      <h1>RESET</h1>
      <p>Are you sure?</p>
      <div class="save">
        <button type="button" class="modalbtn" id="heightbtn">Confirm</button>
        <button type="button" class="modalbtn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>
  <!-- The Height Modal end -->


</body>

<script src="js/home.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script>

function openConfirmModal() {
    document.getElementById("myConfirmModal").style.display = "block";
    // Add the "show" class to animate the modal
    setTimeout(function () {
        document.getElementById("myConfirmModal").querySelector('.height-modal-content').classList.add('show');
    }, 10);
}

function closeModal() {
    document.getElementById("myConfirmModal").querySelector('.height-modal-content').classList.remove('show');
    // Remove the "show" class to animate the modal
    setTimeout(function () {
        document.getElementById("myConfirmModal").style.display = "none";
    }, 300); // Wait for the animation to finish
}
$("#heightbtn").click(function() {
      window.location.assign('reset.php?uid=<?php echo $_SESSION["rm_user_id"];?>');
});



let calories = Math.round(<?php echo $obj->getUserDataDI('calories');?>);
if(calories == 0){
  window.location.assign('user_info.php');
}
if (calories < 1000) {
    calories = 750;
} else if (calories < 1250) {
    calories = 1000;
} else if (calories < 1500) {
    calories = 1250;
} else if (calories < 1750) {
    calories = 1500;
} else if (calories < 2000) {
    calories = 1750;
} else if (calories < 2250) {
    calories = 2000;
} else if (calories < 2500) {
    calories = 2250;
} else if (calories < 2750) {
    calories = 2500;
} else if (calories < 3000) {
    calories = 2750;
} else {
    calories = 3000;
}

$.post('ajax/getplan.php', {
    bmr: calories,
    uid: sessionStorage.getItem('uids')
}, function(response) {
    let data = $.parseJSON(response);
    for (var i = 0, len = data.length; i < len; i++) {
        switch (data[i].meal_type) {
          case "Breakfast":
            $('.breakfast').append("<p><span class='left'>" + data[i].item + "</span><span class='right'>" +
                data[i].qty + "</span></p>");
            break;
          case "Lunch":
            $('.lunch').append("<p><span class='left'>" + data[i].item + "</span><span class='right'>" + data[i]
                .qty + "</span></p>");
            break;
          case "Dinner":
            $('.dinner').append("<p><span class='left'>" + data[i].item + "</span><span class='right'>" + data[
                i].qty + "</span></p>");
            break;
        }
    }
});
</script>

</html>