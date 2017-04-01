<?php
error_reporting('ERROR');
 $name=$_REQUEST[name];
 $sub=$_REQUEST[sub];
 $email=$_REQUEST[email];
 $phone=$_REQUEST[phone];
 $msg=$_REQUEST[msg];     
 
   $email_to = "pankajsharma750@gmail.com,cs@stucomp.com";
//    
//    $first_name = $_POST['first_name']; // required
// 
//    $last_name = $_POST['last_name']; // required
// 
//    $email_from = $_POST['email']; // required
// 
//    $telephone = $_POST['telephone']; // not required
// 
//    $comments = $_POST['comments']; // required
  
    $string_exp = "/^[A-Za-z .'-]+$/";
  
    $email_message = "Form details below.\n\n";
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Full Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telephone: ".clean_string($phone)."\n";
    $email_message .= "Subject: ".clean_string($sub)."\n";
    $email_message .= "Comments: ".clean_string($msg)."\n";
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
if(@mail($email_to, $sub, $email_message, $headers)){
echo 'Thank you for contacting us. We will be in touch with you very soon.';   
}
 
?>