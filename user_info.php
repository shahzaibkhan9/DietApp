<?php
include_once('xloop/stepin.php');
?>
<!DOCTYPE html>
<html>



<head>
    <title>Diet App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <!--bootstrap-->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <!--custom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--component-css-->

    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--script-->
    <!--weight design links-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.2/roundslider.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.2/roundslider.min.js"></script>
    <!--weight design links-->
</head>

<body>
    <div class="diet-screen">

        <div class="arrow">
            <div class="previous" onclick="history.back()">
                <i class="fa-solid fa fa-arrow-circle-left "></i>
            </div>
        </div>

        <div class="main-content">
            <h1 class="heading1"><?php echo $obj->getUserDataDI('full_name'); ?></h1>
            <div class="box1">

                <div onclick="openModal()" class="inner-box" id="genderbox">
                    <!-- <i class="fa-light fa fa-mars female"></i> -->
                    <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 4a6 6 0 0 1 6 6c0 2.97-2.16 5.44-5 5.92V18h2v2h-2v2h-2v-2H9v-2h2v-2.08c-2.84-.48-5-2.95-5-5.92a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4Z" />
                    </svg>
                    <!-- <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4Z"/></svg> -->

                    <!--  -->
                    <h2 class="boxtitle">Sex</h2>
                    <h2 class="heading2" id="showgender"><?php echo ucfirst($obj->getUserDataDI('gender')); ?></h2>
                </div>
                <!--gender-->

                <div onclick="openBirthdayModal()" class="inner-box">
                    <!-- <i class="fa-solid fa fa-birthday-cake cake icons"></i> -->
                    <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="currentColor"
                            d="M38.026 30.765a35.948 35.948 0 0 0 2.005-.265v-4.701c-1.024.489-2.092.791-3.154 1.025c-2.693.563-5.432.629-8.146.345c-1.368-.173-2.685-.399-4.049-.884c-.27-.102-.538-.216-.805-.344v4.226c4.682.767 9.443 1.092 14.149.598" />
                        <path fill="currentColor"
                            d="M56.299 41.987V24.841c0-1.988-1.366-3.839-3.703-5.407v-7.509c0-.735-.583-1.343-1.342-1.458c.557-.236.951-.723.951-1.309c0-.813-1.652-3.437-1.652-3.437s-1.654 2.623-1.654 3.437c0 .578.385 1.061.931 1.301c-.802.08-1.431.703-1.431 1.466v5.385a35.157 35.157 0 0 0-4.49-1.377a1.6 1.6 0 0 0 .123-.596c0-.983-2-4.154-2-4.154s-1.83 2.904-1.984 4.014c-1.959-.289-4.044-.457-6.195-.525V7.467c0-.661-.512-1.213-1.188-1.334c.461-.215.783-.631.783-1.126C33.447 4.295 32 2 32 2s-1.447 2.295-1.447 3.007c0 .489.314.901.766 1.118c-.713.092-1.266.655-1.266 1.342v7.206c-2.103.07-4.142.236-6.06.518c-.188-1.135-1.981-3.979-1.981-3.979s-2 3.17-2 4.154c0 .197.045.383.111.56a34.638 34.638 0 0 0-4.633 1.429V11.94c0-.734-.584-1.342-1.344-1.457c.557-.236.953-.724.953-1.31c0-.813-1.654-3.437-1.654-3.437s-1.654 2.623-1.654 3.437c0 .578.386 1.061.932 1.301c-.803.081-1.432.704-1.432 1.466v7.574c-2.267 1.552-3.592 3.374-3.592 5.328V41.99C4.117 44.066 2 46.62 2 49.383C2 56.352 15.432 62 32 62s30-5.648 30-12.617c0-2.764-2.118-5.318-5.701-7.396M49.725 9.943c0-.407.828-1.719.828-1.719s.828 1.312.828 1.719a.677.677 0 0 1-.249.512c-.046-.004-.091-.013-.138-.013h-.992c-.013 0-.024.003-.037.003a.67.67 0 0 1-.24-.502m-.327 1.982c0-.262.276-.482.604-.482h.992c.326 0 .602.221.602.482v10.797a.422.422 0 0 1-.116.284l-.368.188a.708.708 0 0 1-.117.011h-.992c-.327 0-.604-.222-.604-.483V11.925zm-7.367 2.284s1.002 1.585 1.002 2.077c0 .491-.449.89-1.002.89s-1-.398-1-.89s1-2.077 1-2.077M31.277 5.693c0-.355.723-1.502.723-1.502s.725 1.146.725 1.502a.59.59 0 0 1-.197.427c-.048-.005-.094-.014-.143-.014h-.867c-.018 0-.034.004-.052.005a.583.583 0 0 1-.189-.418m-.224 1.774c0-.195.213-.36.465-.36h.867c.253 0 .467.165.467.36v9.448a.294.294 0 0 1-.078.195l-.305.157a.583.583 0 0 1-.084.006h-.867c-.252 0-.465-.164-.465-.358V7.467m-9.041 6.769s1 1.586 1 2.078c0 .49-.447.89-1 .89s-1-.399-1-.89c0-.492 1-2.078 1-2.078m-9.393-4.28c0-.405.826-1.717.826-1.717s.828 1.312.828 1.717a.677.677 0 0 1-.25.514c-.046-.004-.09-.013-.137-.013h-.992c-.012 0-.023.003-.035.003a.677.677 0 0 1-.24-.504m-.328 1.982c0-.261.276-.481.604-.481h.992c.327 0 .604.221.604.481v10.798a.417.417 0 0 1-.117.282l-.368.189a.72.72 0 0 1-.118.011h-.992c-.327 0-.604-.221-.604-.482V11.938zm-1.104 11.643c.033-.17.099-.325.158-.483c.066.242.196.459.373.638c-.078.571.062 1.15.367 1.651c.649 1.043 1.76 1.773 2.892 2.353c1.585.789 3.291 1.292 5.035 1.688V19.249c0-.265.127-.497.313-.688c-.288.056-.578.098-.864.162c-1.345.306-2.713.711-3.971 1.296v-.529c.015-.007.029-.015.044-.021c1.228-.549 2.509-.952 3.808-1.26a41.605 41.605 0 0 1 7.928-1.046c.935-.035 1.872-.03 2.81-.007c.097.492.479.886.98 1.041a40.685 40.685 0 0 0-3.778-.213a43.034 43.034 0 0 0-4.439.208c.589.114 1.035.532 1.035 1.057v1.832l.053-.026c.686-.298 1.365-.47 2.051-.6c1.369-.252 2.74-.307 4.105-.229c1.372.095 2.712.285 4.052.856c.33.15.659.333.964.609c.289.253.628.744.492 1.306c-.145.524-.506.79-.814.994a4.03 4.03 0 0 1-1.002.44c-1.357.393-2.73.389-4.073.218c-.673-.107-1.329-.231-1.969-.54c-.297-.162-.649-.359-.753-.777c-.057-.461.34-.701.616-.847l.072.131c-.264.16-.526.422-.45.664s.375.41.653.527c.573.229 1.245.312 1.88.36c1.285.069 2.612-.053 3.784-.456c.526-.169 1.18-.601 1.206-.9c.082-.214-.438-.64-.99-.827c-1.125-.414-2.458-.54-3.719-.587c-1.276-.029-2.566.069-3.794.34c-.609.136-1.213.318-1.734.567a4.123 4.123 0 0 0-.63.375v1.517c.372.258.839.472 1.323.642c1.137.389 2.449.607 3.705.741c2.545.269 5.159.183 7.659-.286c1.229-.242 2.446-.587 3.467-1.171V20.52c-.402-.24-.827-.46-1.276-.648c-1.157-.485-2.412-.806-3.689-1.075a42.754 42.754 0 0 0-3.36-.522h.68c.125 0 .249-.015.37-.045l.544-.264l.104-.071c.153-.138.268-.301.344-.479c.514.063 1.027.125 1.539.213c1.319.231 2.652.521 3.958 1.015c.283.106.563.229.841.361c.126-.501.638-.887 1.28-.887h1.199c.736 0 1.334.496 1.334 1.106V29.63c3.086-.913 6.008-2.354 8.468-4.521l.104.107c-1.798 1.965-4.084 3.494-6.544 4.568c-.665.287-1.342.544-2.027.779v.837c0 .304-.148.581-.389.78l-.6.288a1.69 1.69 0 0 1-.346.039h-1.199c-.653 0-1.172-.397-1.287-.913c-.633.127-1.27.236-1.908.324c-4.763.653-9.605.425-14.306-.44a1.03 1.03 0 0 1-.374.729l-.6.287c-.109.024-.227.04-.346.04h-1.199c-.738 0-1.334-.496-1.334-1.107v-.821c-1.87-.511-3.719-1.16-5.432-2.131c-1.165-.685-2.331-1.519-3.032-2.784c-.342-.628-.511-1.39-.362-2.11m43.112 23.756c0 3.881-9.536 8.221-22.299 8.221c-12.764 0-22.301-4.34-22.301-8.221v-3.974c.984-.053 1.77-.766 1.77-1.645v-3.855c0-1.214 1.119-2.198 2.5-2.198s2.502.984 2.502 2.198v4.756c0 1.412 1.303 2.558 2.908 2.558c1.607 0 2.91-1.146 2.91-2.558V37.76c0-1.271 1.172-2.3 2.617-2.3c1.447 0 2.619 1.029 2.619 2.3v3.098c0 .707.65 1.279 1.455 1.279c.803 0 1.453-.572 1.453-1.279V38.4c0-.918.848-1.662 1.893-1.662c1.043 0 1.889.744 1.889 1.662v4.22c0 1.412 1.305 2.558 2.91 2.558c1.607 0 2.91-1.146 2.91-2.558v-4.73c0-1.2 1.107-2.174 2.473-2.174s2.473.974 2.473 2.174v3.452c0 .706.65 1.278 1.455 1.278c.803 0 1.455-.572 1.455-1.278v-2.417c0-.629.578-1.139 1.293-1.139c.717 0 1.297.51 1.297 1.139v3.695c0 1.412 1.301 2.558 2.908 2.558c.32 0 .622-.057.91-.141v2.3" />
                    </svg>
                    <h2 class="boxtitle">Date Of Birth</h2>
                    <h2 class="heading2" id="birthdate"><?php echo $obj->getUserDataDI('birthday'); ?></h2>
                </div>
                <!--birthday-->
            </div>
            <!--box1-->

            <div class="box1">
                <div onclick="openHeightModal()" class="inner-box">
                    <!-- <img src="./mdi_human-male-height.png" alt=""> -->
                    <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7 2c1.78 0 2.67 2.16 1.42 3.42C7.16 6.67 5 5.78 5 4a2 2 0 0 1 2-2M5.5 7h3a2 2 0 0 1 2 2v5.5H9V22H5v-7.5H3.5V9a2 2 0 0 1 2-2M21 8h-6v2h6m0 1h-3v2h3m0-11h-6v2h6m0 1h-3v2h3m0 7h-6v2h6m0 4h-6v2h6m0-5h-3v2h3" />
                    </svg>
                    <h1 class="boxtitle">Height</h1>
                    <h2 class="heading2" id="showheight"><?php echo $obj->getUserDataDI('height'); ?></h2>
                </div>
                <div onclick="openWeightModal()" class="inner-box">
                    <!-- <img src="./mdi_weight-lifter.png" alt=""> -->
                    <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 5c-1.11 0-2 .89-2 2s.89 2 2 2s2-.89 2-2s-.89-2-2-2m10-4v5h-2V4H4v2H2V1h2v2h16V1h2m-7 10.26V23h-2v-5h-2v5H9V11.26C6.93 10.17 5.5 8 5.5 5.5V5h2v.5C7.5 8 9.5 10 12 10s4.5-2 4.5-4.5V5h2v.5c0 2.5-1.43 4.67-3.5 5.76Z" />
                    </svg>
                    <h1 class="boxtitle">Weight</h1>
                    <h2 class="heading2"><span id="weight"><?php echo $obj->getUserDataDI('weight'); ?></span> Kg</h2>
                </div>
            </div>
            <!--box2-->

            <div class="next">
                <button type="button" id="btnnext" class="next-des">NEXT</button>

            </div>

        </div>
        <!--main content-->

    </div>

    <!-- The gender Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="select_gender">
                <div class="gender" onclick="setgender('Male')">
                    <input type="hidden" value="<?php echo $_SESSION["rm_user_id"]; ?>" id="uid" />
                    <input type="hidden" value="<?php echo $_SESSION["rm_user_gender"]; ?>" id="gender" />
                    <i
                        class="fa-light fa fa-mars modal_male Male <?php echo  $_SESSION["rm_user_gender"] == 'Male' ? 'active' : ''; ?>"></i>
                    <p>Male</p>
                    <label class="rad-label">
                        <!-- <input type="radio" class="rad-input" name="rad"> -->
                        <!-- <div class="rad-design"></div> -->
                    </label>
                </div>
                <div class="gender" onclick="setgender('Female')">
                    <i
                        class="fa-light fa fa-venus modal_male Female  <?php echo  $_SESSION["rm_user_gender"] == 'Female' ? 'active' : ''; ?>"></i>
                    <p>Female</p>
                    <label class="rad-label">
                        <!-- <input type="radio" class="rad-input" name="rad"> -->
                        <!-- <div class="rad-design"></div> -->
                    </label>
                </div>
            </div>
            <div class="save">
                <button type="button" class="modalbtn" id="genderbtn">Save</button>
            </div>
        </div>
    </div>
    <!-- The gender Modal end -->
    <!-- The Birthday Modal -->
    <div id="myBirthdayModal" class="modal">
        <!-- Modal content -->
        <div class="birthday-modal-content">
            <input type="hidden" id="birthday-input" value="<?php echo $obj->getUserDataDI('birthday'); ?>" />
            <div class="calendar"></div>
            <div class="save">
                <button type="button" class="modalbtn" id="birthdaybtn">Save</button>
            </div>
        </div>
    </div>
    <!-- The Birthday Modal end -->

    <!-- The Height Modal -->
    <div id="myHeightModal" class="modal">
        <!-- Modal content -->
        <div class="height-modal-content">
            <?php $dweight = $obj->getUserDataDI('decimal_height'); ?>
            <input type="number" id="heightmanual" class="manualheight"
                value="<?php echo number_format((float)$dweight, 2, '.', ''); ?>" step="0.01" min="0.1" max="3.0" />
            <input class="range" type="range" id="range" value="<?php echo $dweight; ?>" step="0.01" min="0.5"
                max="2.5">
            <br>
            <output id="range-output"><?php echo $obj->getUserDataDI('height'); ?></output>
            <div class="save">
                <button type="button" class="modalbtn" id="heightbtn">Save</button>
            </div>
        </div>
    </div>
    <!-- The Height Modal end -->

    <!-- The Weight Modal -->
    <div id="myWeightModal" class="modal">
        <!-- Modal content -->
        <div class="weight-modal-content">
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
            <div class="save" style="z-index:11111">
                <button type="button" class="modalbtn" id="weightbtn">Save</button>
            </div>
        </div>
    </div>
    <!-- The Weight Modal end -->
</body>
<!--weight design script-->

<script src="js/app.js"></script>
<script>
$(document).ready(function() {

    $("#range").on("input", function() {
        var value = parseFloat($(this).val());
            if (isNaN(value)) {
                value = 0;
            }
    $("#heightmanual").val(value.toFixed(2));
        var n = $("#heightmanual").val().split(".");
            if (!n[1]) {
                n[1] = 0;
            }
    $("#range-output").html(n[0] + "m " + n[1] + "cm");
    });


    $("#genderbtn").click(function() {

        $.post('ajax/updategender.php', {
            gender: $("#gender").val(),
            uid: $("#uid").val()
        }, function(response) {
            $("#showgender").html(response);
        });

        closeModal();
    });

    $("#birthdaybtn").click(function() {
        $.post('ajax/updatebirthday.php', {
            birthday: $("#birthday-input").val(),
            uid: $("#uid").val()
        }, function(response) {
            $("#birthdate").html(response);
            const dateString = response;
            const date = new Date(dateString);
            const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                "Saturday"
            ];
            const monthNames = ["January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December"
            ];
            const formattedDate =
                `${dayNames[date.getDay()]} ${date.getDate()}, ${monthNames[date.getMonth()]} ${date.getFullYear()}`;

            $(".calendar-today-date").html("Selected: " + formattedDate);
        });
        closeBirthdayModal();
    });

    $("#weightbtn").click(function() {
        $.post('ajax/updateweight.php', {
            weight: $('.rs-tooltip').html(),
            uid: $("#uid").val()
        }, function(response) {
            $("#weight").html(response);
        });
        closeWeightModal();
    });

    $("#range").change(function() {
        var n = $('#range').val().split(".");
        $("#range-output").html(n[0] + "m " + n[1] + "cm");
        $("#heightmanual").val($('#range').val());
    });

    $("#heightmanual").keyup(function() {

        var n = $('#heightmanual').val().split(".");
        if (!n[1]) {
            n[1] = 0;
        }
        $("#range-output").html(n[0] + "m " + n[1] + "cm");
        $("#range").val($('#heightmanual').val());
    });

    $("#heightmanual").change(function() {
        let value = parseFloat($(this).val());
        if (isNaN(value)) {
            value = 0;
        }
        $(this).val(value.toFixed(2));
        var n = $('#heightmanual').val().split(".");
        $("#range-output").html(n[0] + "m " + n[1] + "cm");
        $("#range").val($('#heightmanual').val());
    });

    $("#heightbtn").click(function() {
        $.post('ajax/updateheight.php', {
            height: $("#range").val() * 100,
            uid: $("#uid").val()
        }, function(response) {
            var n = response / 100;
            n = (n + "").split(".");
            if (!n[1]) {
                n[1] = 0;
            }
            $("#range-output-m").html(n[0]);
            $("#range-output-cm").html(n[1]);
            $("#showheight").html(n[0] + "m " + n[1] + "cm");
        });

        closeHeightModal();
    });

    $('.gender').click(function() {
        var gender = $(this).find('p').text();
        $('.gender i').removeClass('active');
        $(this).find('i').addClass('active')
        setgender(gender);
    });
});


$("#btnnext").click(function() {
    let gender = $("#showgender").html();
    let age = getAge($("#birthdate").html());
    let height = $('#range').val() * 100;
    let weight = $("#weight").html();

    //Validation to be added
    (!gender || !birthdate || !range || !weight) ? console.log("Error"):
        sessionStorage.setItem('gender', gender)
    sessionStorage.setItem('age', age)
    sessionStorage.setItem('height', height)
    sessionStorage.setItem('weight', weight)
    sessionStorage.setItem('uids', $("#uid").val())
    window.location.href = 'goals-page.php';

    //Validation to be added

    let BMR = gender == "Male" ? 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age) : 447.593 + (
        9.247 * weight) + (3.098 * height) - (4.330 * age);

    //multiply BMR with activity value
    // Sedentary (little or no exercise): BMR x 1.2
    // Moderately active (moderate exercise or sports 3-5 days a week): BMR x 1.55
    // Extremely active (very hard exercise or sports and physical job or training twice a day): BMR x 1.9

    let calories = Math.round(BMR);
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
    console.log(calories);

    $.post('ajax/getplan.php', {
        bmr: calories,
        uid: $("#uid").val()
    }, function(response) {
        console.log(response);
    });
});

function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}
</script>



</html>