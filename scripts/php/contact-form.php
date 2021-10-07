<?php
header('Location: https://petroholod.com');

$to = "gaga9393@gmail.com";
$subject = "Петрохолод запрос";

strip_tags($messagge, '<br>');

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th style='text-align:left;'>Имя: </th>
<th style='text-align:left;'>$_POST[name]</th>
</tr>
<tr>
<th style='text-align:left;'>Номер Телефона: </th>
<th style='text-align:left;'>$_POST[phone]</th>
</tr>
<tr>
<th style='text-align:left;'>Email: </th>
<th style='text-align:left;'>$_POST[email]</th>
</tr>
<tr>
<th style='text-align:left;'>Сообщение: </th>
<th style='text-align:left;'>$_POST[messagge]</th>
</tr>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@petroholod.com>' . "\r\n";

mail($to,$subject,$message,$headers);
exit();
?>