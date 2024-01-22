<?php
//live credentials
// $host = "localhost";
// $user = "afnan";
// $pass = "fitlynk100%";
// $dbname = "fitlynk";

//local credentials
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "fitlynk";

class xloop
{
	function xcon()
	{
	    
global $host;
global $user;
global $pass;
global $dbname;
		$con = mysqli_connect($host, $user, $pass, $dbname) or die("Error in connection!");
		return $con;
	}

	function getUserData($uid)
	{
		$qu = "
			SELECT c.user_id,c.username,concat(c.first_name,' ',c.last_name) as 'full_name',c.gender,c.birthday,b.height, b.weight, 
			(ifnull(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),c.birthday)), '%Y'),0)*1) as 'age'
			FROM `ffc_user_fitness_profile` as b
			join 
			`Wo_Users` as c 
			on 
			b.user_id = c.user_id 
			where b.user_id = $uid;
			";
		$q = mysqli_query($this->xcon(), $qu) or die("Error in query! getUserData");
		return $q;
	}

	function getUserDataDI($key)
	{
		$query = "SELECT CONCAT(c.first_name, ' ', c.last_name) AS full_name, c.birthday, c.gender, CONCAT(FLOOR(d.height/100), 'm ', d.height % 100, 'cm') as height,d.height/100 as decimal_height, d.weight ,ifnull(l.target_weight - d.weight,0) as dtw, ifnull(l.target_weight,0) as target_weight, ifnull(l.calories,0) as calories
		FROM Wo_Users AS c
		JOIN ffc_user_fitness_profile AS d ON c.user_id = d.user_id
		left outer JOIN Di_Log AS l ON c.user_id = l.uid
		WHERE c.user_id = " . $_SESSION["rm_user_id"] . ";";
		$q = mysqli_query($this->xcon(), $query) or die("Error in query! getUserDataDI");
		$result = mysqli_fetch_array($q);
		return $result[$key];
	}

	//update gender 
	function updategender($gender,$uid){
		$query="update `Wo_Users` set gender = '$gender' where user_id = $uid";
		mysqli_query($this->xcon(),$query) or die("error in query! updategender");
	}

	//update birthday 
	function updatebirthday($birthday,$uid){
		$query="update `Wo_Users` set birthday = '$birthday' where user_id = $uid";
		mysqli_query($this->xcon(),$query) or die("error in query! updatebirthday");
	}

	//update weight 
	function updateweight($weight,$uid){
		$query="update `ffc_user_fitness_profile` set weight = '$weight' where user_id = $uid";
		mysqli_query($this->xcon(),$query) or die("error in query! updateweight");
	}

	//update birthday 
	function updateheight($height,$uid){
		$query="update `ffc_user_fitness_profile` set height = '$height' where user_id = $uid";
		mysqli_query($this->xcon(),$query) or die("error in query! updateheight");
	}

	//get plan for User
	function getPlan($bmr,$uid){
		$day = $this->getuserday($uid);
		$day = $day == 0 ? 1 : $day;
		$query="select `id`, `day`, `meal_type`, `item`,`c".$bmr."` as qty from Di_Dietplan where day = $day;";
		//return $query;
		$q = mysqli_query($this->xcon(),$query) or die("error in query! diet plan");
		return $q;
	}

	function setPlan($calories,$target_weight,$progress,$date,$uid){
		$query = "replace INTO `Di_Log`(`uid`,`start_date`,`target_weight`, `progress`, `calories`) VALUES ($uid,'$date',$target_weight,'$progress',$calories)";
		$q = mysqli_query($this->xcon(),$query) or die("error in query! set diet plan");
		return $q;
	}

	function getuserday($uid){
		$query="select MOD(DATEDIFF(CURRENT_DATE, start_date), 7) + 1 AS day from Di_Log where uid = $uid;";
		//return $query;
		$q = mysqli_query($this->xcon(),$query) or die("error in query! get day number");
		$qq = mysqli_fetch_assoc($q);
		return $qq['day'];
	}

	function countUserLogData($uid){
		$query="SELECT COUNT(*) as log_count FROM Di_Log WHERE uid=$uid;";
		//return $query;
		$q = mysqli_query($this->xcon(),$query) or die("error in query! get Count User Log Data");
		$result = mysqli_fetch_array($q);
		return $result['log_count'];
	}

	function resetuserlog($uid){
		$query="delete FROM Di_Log WHERE uid=$uid;";
		//return $query;
		mysqli_query($this->xcon(),$query) or die("error in query! Error while Reseting User Log");
	}
}	//end of xloop class

?>