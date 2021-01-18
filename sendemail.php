<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$message = $_POST['message'];
	
    $from = 'samareoman.com'; 
    $to = 'anas@existors.com'; 
    $subject = 'Email Inquiry';

   	$body = " From         : $name\n
			  E-Mail       : $email\n
			  Phone-Number : $phone \n
			  Message      : $message";

$mail_status = mail($to, $subject, $body, $from);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'contact.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
//  alert('Message sending failed. Please, send an email to aldibaj.admn@gmail.com');
  window.location = 'contact.html';
 </script>
<?php
}
?>