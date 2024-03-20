<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

include '../connect.php';
session_start();

function strip_quotes($str) {
		$str = @trim($str);
		if(is_array($str)) {
            foreach($str as $k => $v) {
                $data[$k] = strip_quotes($str [$k]);
            }
           return $data;
        } else
            return stripslashes($str);
    
	}
	
	//Sanitize the POST values
	$login = strip_quotes($_POST['username']);
	$password = strip_quotes($_POST['password']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	
	
	//Create query
	$qry="SELECT * FROM table_admin WHERE username='$login' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			//Login Successful
session_regenerate_id();
$member = mysqli_fetch_assoc($result);
$_SESSION['SESS_MEMBER_ID'] = $member['id'];
$_SESSION['SESS_FIRST_NAME'] = $member['name'];
$_SESSION['SESS_LAST_NAME'] = $member['email'];
$_SESSION['SESS_PRO_PIC'] = $member['file'];
session_write_close();
header("location: index.php");
exit();
}else {

  echo "";
            // echo “window.location.href=’login.php'”;
  echo "alert('Something went wrong  Enter correct details');window.location.href='login.php'";
   echo "";
   exit;
                //  echo ” alert(‘Wrong Details’);'”;

}
}else {
die("Query failed");
}