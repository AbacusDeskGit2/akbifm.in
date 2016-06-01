<?php
// send email 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: '.'praveensrivastava1981@gmail.com'. "\r\n";
$headers .= 'From: '.$_POST['email'] . "\r\n";
$message='<table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC"  style="border-width: 1px; border-collapse: collapse;font-family:Trebuchet MS; font-size:13px; color:#333;">
  <tr>
    <td width="263" height="19"><strong>Name</strong></td>
    <td width="669">'.$_POST['Name'].'</td>
  </tr>
  <tr>
    <td><strong>Designation</strong></td>
    <td>'.$_POST['Designation'].'</td>
  </tr>
  <tr>
    <td><strong>Organization</strong></td>
    <td>'.$_POST['Organization'].'</td>
  </tr>
  <tr>
    <td><strong>City</strong></td>
    <td>'.$_POST['City'].'</td>
  </tr>
  <tr>
    <td><strong>State</strong></td>
    <td>'.$_POST['State'].'</td>
  </tr>
  <tr>
    <td class="packers"><strong>Country</strong></td>
    <td class="packers">'.$_POST['Country'].'</td>
  </tr>
  <tr>
    <td class="packers"><strong>Land- Line Number</strong></td>
    <td class="packers">'.$_POST['Phone'].'</td>
  </tr>
  <tr>
    <td class="packers"><strong>Mobile</strong></td>
    <td class="packers">'.$_POST['Mobile'].'</td>
  </tr>
  <tr>
    <td class="packers"><strong>Email</strong></td>
    <td class="packers">'.$_POST['email'].'</td>
  </tr>
  <tr>
    <td class="packers"><strong>Category</strong></td>
    <td class="packers">'.$_POST['Category'].'</td>
  </tr>
  <tr>
    <td height="24"><strong>Description 
      of the Requirement</strong></td>
    <td height="24">'.$_POST['Description-of-the-Requirement'].'</td>
  </tr>
  <tr>
    <td><strong><span class="packers">Comfortable Time 
      for Contacting</span>&nbsp; </strong></td>
    <td><span class="packers4">Between</span> <span class="packers">'.$_POST['1'].'</span> to <span class="packers">'.$_POST['2'].'</span> <span class="packers4">IST    <span class="packers">eg.</span><span class="packers3"> (10 am to 5:30 pm)</span></span></td>
  </tr>
  <tr>
    <td class="packers"><strong>Where You Find Info About 
      Us</strong></td>
    <td class="packers">'.$_POST['Where-You-Find-Info-About-Us'].'</td>
  </tr>
</table>
';

$to = "praveensrivastava1981@gmail.com"; 
        $from = $_POST['email'] ; 
		//$headers = "From: $from";
		$subject = "Online Enquiry Form"; 
if(mail( $to, $subject, $message, $headers )){
$success="True";
echo "Your information has succesfully submitted";
}
else
{
echo "error";
}
// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"4;URL=Enquiry Form.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>