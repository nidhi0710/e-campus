<?php
	session_start();
	require './model.php';
	$m = new model();
	extract($_POST);
	if(isset($_POST['register_btn'])){/*IF REGISTER BUTTON IS CLICKED*/
		$name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$dept = $_POST['user_dept'];
		$contact = $_POST['user_contact_number'];
		$password = $_POST['user_password'];
		$user_type = $_POST['user_type'];
		$parent_contact = $_POST['parent_contact_number'];
		$m->register_user( $name, $email,$dept, $contact, $password, $user_type,$parent_contact );
		header("location: ./index.php");
	}
	if(isset($_POST['log_in_btn'])){/*IF LOG IN BUTTON IS CLICKED*/
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
		$m->login_user( $email, $password );
		header("location: ./index.php");
	}
	if(isset($_POST['log_out_btn'])){/*IF LOGOUT BUTTON IS CLICKED*/
		$m->log_out();
		header("location: ./register.php");
	}
	if(isset($_POST['new_blog_btn'])){/*IF NEW BLOG BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['blog_heading'];
		$content = $_POST['blog_content'];
		$department = $_POST['department_type'];
		$post = $_POST['post_type'];
		$m->new_blog( $email, $heading, $content, $department, $post );
		header("location: ./index.php");
	}
	if(isset($_POST['lost_item_btn'])){/*IF LOST ITEM BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['lost_heading'];
		$content = $_POST['lost_content'];
		$type = "LOST";
		$m->lost_found_function( $email, $heading, $content, $type );
		header("location: ./lost_found.php");
	}
	if(isset($_POST['found_item_btn'])){/*IF LOST ITEM BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['found_heading'];
		$content = $_POST['found_content'];
		$type = "FOUND";
		$m->lost_found_function( $email, $heading, $content, $type );
		header("location: ./lost_found.php");
	}
	if(isset($_POST['new_query_btn'])){/*IF NEW QUERY BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['query_heading'];
		$content = $_POST['query_content'];
		$department = $_POST['department_type'];
		$student = $_POST['std_no'];
		$prof_email = $_POST['prof_id'];
		if($student > 0){
			ini_set('SMTP','smtp.gmail.com');
			ini_set('smtp_port',465);
			$to = $prof_email;
			$subject = "REQUEST FOR LIVE SESSION\n";
			$txt = "Need extra lecture to discuss the doubt where number of students will be: $student";
			$headers = "From: nftnidhi@gmail.com";
			mail($to,$subject,$txt,$headers);
			$mail = mail($to,$subject,$txt,$headers);
		}
		$image_Arr=$_FILES["img"];
		move_uploaded_file($image_Arr['tmp_name'], 'img/'.$image_Arr['name']);
		$img=$image_Arr['name'];
		$m->new_query( $email, $heading, $content, $department,$img,$student,$prof_email);
		header("location: ./department.php");
	}
	if(isset($_POST['new_comment_btn'])){/*IF NEW BLOG BUTTON IS CLICKED*/
		$qid = $_POST['comment_id'];
		$email = $_SESSION['user_email'];
		$content = $_POST['comment'];
		$m->new_comment($qid,$content,$email);
		header("location: ./department.php");
	}
	if(isset($_POST['insert_new_book'])){/*IF INSERT NEW BOOK BUTTON IS CLICKED*/
		$name = $_POST['book_name'];
		$author = $_POST['author_name'];
		$url = $_POST['book_url'];
		$department = $_POST['department_type'];
		$m->new_book_entry( $name, $author, $department, $url );
		header("location: ./elibrary.php");
	}
	if(isset($_POST['get_book_btn'])){/*IF INSERT NEW BOOK BUTTON IS CLICKED*/
		$name = $_POST['book_name'];
		$author = $_POST['author_name'];
		$department = $_POST['department_type'];
		$m->get_book_list( $name, $author, $department );
		header("location: ./elibrary_display.php");
	}
	if (isset($_POST['order'])) {
		$name=$_POST['name'];
		$enrollment_no=$_POST['enrollment_no'];
		$item_name=$_POST['item_name'];
		$quantity_item=$_POST['quantity_item'];
		echo($enrollment_no);
		$m->insert_canteen_data( $name, $enrollment_no, $item_name, $quantity_item);
		header("location:./canteen.php");
	}
	if (isset($_POST['new_ad_btn'])) {/*IF NEW AD BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$name = $_SESSION['user_name'];
		$type = $_SESSION['user_type'];
		$heading = $_POST['ad_heading'];
		$content = $_POST['ad_content'];
		$m->post_new_ad( $email, $name, $type, $heading, $content );
		header("location:./olx_ad_display.php");
	}
	if (isset($_POST['new_hire_btn'])) {/*IF NEW HIRE BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$name = $_SESSION['user_name'];
		$type = $_POST['vehicle_type'];
		$heading = $_POST['hire_heading'];
		$content = $_POST['hire_content'];
		$m->post_new_hire( $email, $name, $type, $heading, $content );
		header("location:./forhire_display.php");
	}
?>
