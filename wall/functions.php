<?php

function set_session_vars_from_user($email){
	$whatup= 'SELECT * FROM users';
	$data = fetch_all($whatup);
	foreach ($data as $row) {
		if ($email == $row['email']){
	    $_SESSION['users_id']=$row['id'];
	    $_SESSION['first_name']=$row['first_name'];
	    $_SESSION['last_name']=$row['last_name'];
	    $_SESSION['email']=$row['email'];
	    $_SESSION['updated_at']=$row['updated_at'];
		}
	}
}

function checkpass($upass){
	$whatup= 'SELECT * FROM users';
	$data = fetch_all($whatup);
	foreach ($data as $row){
		if ($upass == $row['password']){
			return TRUE;
		}

	}
}


function display_msg(){
		$message_listing = "SELECT * FROM  messages WHERE users_id='".$_SESSION['users_id']."' ORDER BY created_at";
		run_mysql_query($message_listing);
		$user_info = "SELECT * FROM  users WHERE email='".$_SESSION['email']."'";
		run_mysql_query($user_info);
		foreach ($message_listing as $msg) {
			echo '<div id="message_title">'.$usr[first_name].' '.$usr['last_name'].' '.$msg['created_at'].'</div>';
			echo '<div id="message_body">'.$msg['message'].'</div>';
		}
	} 


function insert_user(){
	 $fname = $_POST['first_name'];
	 $lname = $_POST['last_name'];
	 $email = $_POST['email'];
	 $user_pass = md5($_POST['u8843p5ssw0rd']);
	 
	 if(run_mysql_query("INSERT INTO users(first_name,last_name,email,password,created_at,updated_at) VALUES('$fname','$lname','$email','$user_pass',now(),now())"))
		 {
		        echo '<script>alert("Successfully Registered");</script>';
		 }
		 else
		 {
		        echo '<script>alert("Error While Registering You...");</script>';
				}
		$query = run_mysql_query("INSERT INTO users(first_name,last_name,email,password,created_at,updated_at) VALUES('$fname','$lname','$email','$user_pass',now(),now())");
		$_SESSION['logged'] = TRUE;
	}

function user_login(){
			$user_email = $_POST['email'];
			$user_pass = $_POST['u8843p5ssw0rd'];
			if(checkpass($user_pass))
			{
				set_session_vars_from_user($user_email);
		 	}
			else
				{
			     echo '<script>alert("wrong details");</script>';
				]}
		}

function insert_msg(){
	$query = "INSERT INTO messages(
								message, 
								created_at, 
								updated_at, 
								users_id) 
					VALUES ('".$_POST['message']."', 
						NOW(),
						NOW(),
						'".$_POST['user_id']."'
						)";
	    			run_mysql_query($query);
			        if (headers_sent()) {
					    die('Redirect failed. Please click on this link: <a href="index.php">GO BACK</a>');
					}
					else{
					    exit(header('Location: index.php'));
					}
		}


function insert_comment(){
		$query = "INSERT INTO comments(
									comment, 
									created_at, 
									updated_at, 
									messages_id, 
									users_id) 
				VALUES ('".$_POST['comment']."',
						 NOW(),
						 NOW(),
						'".$_POST['messages_id']."',
						'".$_POST['user_id']."'
						)";
	    		run_mysql_query($query);
		        if (headers_sent()) {
				    die('Redirect failed. Please click on this link: <a href="index.php">GO BACK</a>');
				}
				else{
				    exit(header('Location: index.php'));
				} 
		}

?>