<?php
session_start();

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
	    			header('Location:index.php');
		}

function insert_user(){
	 $query = "INSERT INTO users(
	 							first_name, 
	 							last_name, 
	 							email, 
	 							password, 
	 							created_at, 
	 							updated_at
	 							)
	 		    VALUES('".$_POST['first_name']."',
	 		           '".$_POST['last_name']."', 
	 		           '".$_POST['email']."',
	 		           '".$_POST['password']."',
	 		           NOW(),
	 		           NOW()
	 		           )";
	    		run_mysql_query($query); 
	    		header('Location:index.php');
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
	    		header('Location:index.php'); 
		}

function user_login(){
		$query ="SELECT * FROM users WHERE email = '".$_POST['email']."'";
		$data = fetch_all($query);
		if ($_POST['password'] == $data['password']) {
			$query = "SELECT * FROM messages WHERE user_id = $data['user_id']";
			$_SESSION['user_msgs'] = run_mysql_query($query);
		}
}
?>