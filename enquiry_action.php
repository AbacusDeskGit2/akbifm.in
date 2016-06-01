<?php
extract($_POST);
   $to = "akbifm@gmail.com";
   $subject = "Enquiry[Akbifm Website]";
   $message = "<b>Describe Enquiry.</b>".$txaEnquiryContent."<br>";
   $message .= "<b>Name.</b>".$Name."<br>";
   $message .= "<b>Address.</b>".$Address."<br>";
   $message .= "<b>City.</b>".$City."<br>";
   $message .= "<b>State.</b>".$State."<br>";
   $message .= "<b>Postal Code.</b>".$Postalcode."<br>";
   $message .= "<b>Fixed No.</b>".$PhoneNumber."<br>";
   $message .= "<b>Mobile NO.</b>".$MobileNumber."<br>";
   $message .= "<b>Email Id.</b>".$ID."<br>";
   
   $header = "From:".$email." \r\n";
   //$header = "Cc:afgh@somedomain.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )
   {
      echo "<script>window.location='conformation.html'</script>";
   }
   else
   {
      echo "Message could not be sent...";
   }
 
	   
 ?>

