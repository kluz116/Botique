<?php
require 'connection.php';

session_start();
ob_start();

function myAdmin(){

		if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

				return true;

		}else{

			return false;
		}

}


function addAdmin(){

	if(isset($_POST['users'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$hash_password = md5($password);
		
		if(!empty($firstname) &&!empty($lastname) &&!empty($phone) &&!empty($email) &&!empty($username) && !empty($password)){
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
				
			if($query_run = mysql_query($query)){
				
					if(mysql_num_rows($query_run)==0){
						//echo "added";
						$sql = "INSERT INTO admin VALUES('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($phone)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."')";
					if($sql_run = mysql_query($sql)){

						echo "<h1>Successfuly Added User</h1>";

					}
				
		$login="INSERT INTO login VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."')";
		
				if($login_run = mysql_query($login)){
							
							}
		

					}else{

						echo "Admin Already Exists";
					}

			}else{
				//echo "No working";
			}
			}else{
				echo'Fill In All Fields!!';
				}
		
		}
	
	
	}

function LoginAdmin(){


		if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$hash_password = md5($password);

		if(!empty($username) && !empty($password)){
				$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

				if($query_run=mysql_query($query)){
					//echo "string";	

					if(mysql_num_rows($query_run)==1){
						//$username = mysql_result($query_run,0,['username']);
						$username = mysql_result($query_run,0,'username');

						$_SESSION['username'] = $username;
						if(isset($_SESSION['username'])&& $_SESSION['username']=="admin"){

                             header("Location:administrator.php");
                             exit();
						}else{
							 header("Location:login.php");
						}
						

					}else{

						echo "User Doesnt Exist";
					}

				}

		}else{

				echo "Fill In All Fields";

		}

	}

}

function AddDress(){
	        if(isset($_POST['adddresses'])){
			$botique_name = $_POST['botique_name'];
			$botique_image = $_FILES['botique_image']['name'];
		    $temp_name = $_FILES['botique_image']['tmp_name'];
		    $image = $_FILES['image']['name'];
		    $temp_name_image = $_FILES['image']['tmp_name'];
			$details = $_POST['details'];

		if(!empty($botique_name) && !empty($botique_image)&& !empty($image) && !empty($details)){
			
	$sql="INSERT INTO dresses VALUES('','".mysql_real_escape_string($botique_name)."','".mysql_real_escape_string('../images/'.$botique_image)."','".mysql_real_escape_string('../images/'.$image)."','".mysql_real_escape_string($details)."')";
	
	if($sql_run=mysql_query($sql)){
	move_uploaded_file($temp_name,'../images/'.$botique_image);
	move_uploaded_file($temp_name_image,'../images/'.$image);
		 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Successfuly Posted..</font>';
		
		}else{
			//echo "Not Working";
		}
			//echo "Not Working";
			}else{
				 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Fill In All Fields.</font>';
				
				}
		}
	}

function AddPants(){
	        if(isset($_POST['pants'])){
			$botique_name = $_POST['botique_name'];
			$botique_image = $_FILES['botique_image']['name'];
		    $temp_name = $_FILES['botique_image']['tmp_name'];
		    $image = $_FILES['image']['name'];
		    $temp_name_image = $_FILES['image']['tmp_name'];
			$details = $_POST['details'];

		if(!empty($botique_name) && !empty($botique_image)&& !empty($image) && !empty($details)){
			
	$sql="INSERT INTO pants VALUES('','".mysql_real_escape_string($botique_name)."','".mysql_real_escape_string('../images/'.$botique_image)."','".mysql_real_escape_string('../images/'.$image)."','".mysql_real_escape_string($details)."')";
	
	if($sql_run=mysql_query($sql)){
	move_uploaded_file($temp_name,'../images/'.$botique_image);
	move_uploaded_file($temp_name_image,'../images/'.$image);
		 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Successfuly Posted..</font>';
		
		}else{
			//echo "Not Working";
		}
			//echo "Not Working";
			}else{
				 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Fill In All Fields.</font>';
				
				}
		}
	}

function AddTops(){
	        if(isset($_POST['tops'])){
			$botique_name = $_POST['botique_name'];
			$botique_image = $_FILES['botique_image']['name'];
		    $temp_name = $_FILES['botique_image']['tmp_name'];
		    $image = $_FILES['image']['name'];
		    $temp_name_image = $_FILES['image']['tmp_name'];
			$details = $_POST['details'];

		if(!empty($botique_name) && !empty($botique_image)&& !empty($image) && !empty($details)){
			
	$sql="INSERT INTO tops VALUES('','".mysql_real_escape_string($botique_name)."','".mysql_real_escape_string('../images/'.$botique_image)."','".mysql_real_escape_string('../images/'.$image)."','".mysql_real_escape_string($details)."')";
	
	if($sql_run=mysql_query($sql)){
	move_uploaded_file($temp_name,'../images/'.$botique_image);
	move_uploaded_file($temp_name_image,'../images/'.$image);
		 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Successfuly Posted..</font>';
		
		}else{
			//echo "Not Working";
		}
			//echo "Not Working";
			}else{
				 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Fill In All Fields.</font>';
				
				}
		}
	}
function AddShoes(){
	        if(isset($_POST['shoes'])){
			$botique_name = $_POST['botique_name'];
			$botique_image = $_FILES['botique_image']['name'];
		    $temp_name = $_FILES['botique_image']['tmp_name'];
		    $image = $_FILES['image']['name'];
		    $temp_name_image = $_FILES['image']['tmp_name'];
			$details = $_POST['details'];

		if(!empty($botique_name) && !empty($botique_image)&& !empty($image) && !empty($details)){
			
	$sql="INSERT INTO shoes VALUES('','".mysql_real_escape_string($botique_name)."','".mysql_real_escape_string('../images/'.$botique_image)."','".mysql_real_escape_string('../images/'.$image)."','".mysql_real_escape_string($details)."')";
	
	if($sql_run=mysql_query($sql)){
	move_uploaded_file($temp_name,'../images/'.$botique_image);
	move_uploaded_file($temp_name_image,'../images/'.$image);
		 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Successfuly Posted..</font>';
		
		}else{
			//echo "Not Working";
		}
			//echo "Not Working";
			}else{
				 echo'<font face="Georgia, Times New Roman, Times, serif" color="#FF0000"> Fill In All Fields.</font>';
				
				}
		}
	}

?>