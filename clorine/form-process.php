
    <?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];		
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Clorine - Responsive Business Template";
	mail("shahadat.cse12@yahoo.com", $subject, $message, $from)
    ?>
   

