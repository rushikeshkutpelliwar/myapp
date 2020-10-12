<?php
$message = $_POST['msg'];
$visitor_email= $_POST['email'];
$name= $_POST['fname'];
$contact = $_POST['phn'];




$email_form = $visitor_email;
$email_subject = "New Enquiry For Hair OIl";
$email_body = "User Name:$name.\n".
                       "User Email: $visitor_email.\n".
	                   "User Contact_details:$contact.\n".
                        "Message: $message.\n";
                        
                        
                        
                       

$to ="info@atharvashantihairoil.co.in";

$headers = "From: $email_form \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
  echo "Thank you For Contacting Us";  

		
?>
<script>
    window.location = 'https://atharvashantihairoil.co.in/';
</script>