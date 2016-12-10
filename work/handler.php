<?php
$errors = '';
$myemail = 'bcranmer@ottcom.com';
if(empty($_POST['name'])  ||                                          empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$companyname = $_POST['companyname'];
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact form submission: $companyname";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email\n Description \n $description";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
header('Location: thanks.php');
}
?>
