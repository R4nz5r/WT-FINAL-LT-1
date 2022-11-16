<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']="POST"){
		$category = sanitize($_POST['category']);
		$value = sanitize($_POST['value']);
		$isValid = true;

		if(empty($category)){
			$_SESSION['category_error_msg']="Category can not be empty";
			$isValid=false;
		}
		if(empty($value)){
			$_SESSION['value_error_msg']="Value can not be empty";
			$isValid=false;
		}
        if($isValid === true){
			$_SESSION['category_error_msg']="";
			$_SESSION['value_error_msg']="";
        }
        else{
			header("Location: ../view/page1st.php");
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