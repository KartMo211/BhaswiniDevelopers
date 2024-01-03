<?php
	if(isset($_POST['submit'])){
		require 'mail.inc.db.php';
		$mailID = $_POST['mail'];

		if(!filter_var($mailID,FILTER_VALIDATE_EMAIL)){
			header("Location:../form.php?error=failed");
			exit();
		}
		else{
			$sql = "SELECT * FROM mailinglist WHERE mailID ='$mailID'";
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("location:../form.php?error=mysqli_failure");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"s",$mailID);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$result = mysqli_stmt_num_rows($stmt);

				if($result>0){
					header("location:../form.php?error=email_already");
					exit();
				}
				else{
					$stmt = mysqli_stmt_init($conn);
					$sql = "INSERT INTO mailinglist (mailID) VALUES ('$mailID')";

					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("location:../form.php?error=mysqli_failure");
						exit();
					}
					else{
					mysqli_stmt_bind_param($stmt,"s",$mailID);
					mysqli_stmt_execute($stmt);
					header("location:../form.php?error=success");
					exit();
					}
				}
			}
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else{
		header("Location:../home.php");
		exit();
	}
?>