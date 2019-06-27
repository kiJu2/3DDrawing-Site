<?php
if(!isset($_SESSION))
{
		session_start();
}

	$userid=$_POST['userid'];
	$password1=$_POST['password1'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$question=$_POST['question'];
	$answers=$_POST['answers'];

	if($userid==NULL || $password1==NULL || $name==NULL || $phone==NULL||$question==NULL || $answers==NULL){
		echo "Please enter all the blanks.";
		echo "<a href=hongchong_join.php>back page</a>";
		exit();
	}
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "dPtskfdPtwjrtksrltmfrdptkfdkTejstksrhdiddl";
	$db_name = "think_things";

	$mysqli = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	$check="SELECT * from member WHERE id='$userid'";
	$result=$mysqli->query($check);
	if($result->num_rows==1){
		echo "Duplicate ID.";
		echo "<a href=/TermProject>main page</a>";
		exit();
	}

	$signup=mysqli_query($mysqli,"INSERT INTO member(id,pw,name,phone,q_num,q_ans) VALUES ('$userid','$password1','$name','$phone','$question','$answers')");

	if($signup){
		echo "Join Success";
	}



?>
