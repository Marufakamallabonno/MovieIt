<?php

function setComment($link)
{
	if(isset($_POST['commentSubmit']))
	{
		$userName=$_POST['userName'];
		$date=$_POST['date'];
		$message=$_POST['message'];
		$movieId=$_POST['movieId'];
		$Csql= "INSERT INTO comment(userName,message, date,movieId ) values('$userName','$message','$date','$movieId')";
		$result=mysqli_query($link,$Csql);
	}

}

?>