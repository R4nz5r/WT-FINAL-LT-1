<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']="POST"){
		$category = sanitize($_POST['category']);
		$unit = sanitize($_POST['unit']);
        $rate = sanitize($_POST['rate']);
		$isValid = true;
        
		if(empty($category)){
			$_SESSION['category_error_msg']="Category can not be empty";
			$isValid=false;
		}
        if(empty($unit)){
			$_SESSION['unit_error_msg']="Unit can not be empty";
			$isValid=false;
		}
		if(empty($rate)){
			$_SESSION['rate_error_msg']="rate can not be empty";
			$isValid=false;
		}
        if($isValid === true){
			$_SESSION['category_error_msg']="";
			$_SESSION['unit_error_msg']="";
            $_SESSION['rate_error_msg']="";
            //connecting to database
            $servername="localhost";
            $username="root";
            $password="";
            $database="finallab";
            $conn=mysqli_connect($servername,$username,$password,$database);
            if(!$conn){
                die("Sorry we failed to connect".mysqli_connect_error());
            }
            else{
                $sql="INSERT INTO `conversion` ( `category`, `unit`, `rate`) VALUES ('$category', '$unit', '$rate');";
                $result=mysqli_query($conn,$sql);
                if ($result) {
                     
                    header("Location: ../view/page2nd.php");
                     
                }
                else{
                     
                    header("Location: ../view/page2nd.php");
                    mysqli_error($conn);
                }
            }

        }
        else{
			header("Location: ../view/page2nd.php");
		} 
          

    }

function sanitize($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>