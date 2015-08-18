<?
$subject = "Unite Overview";
$from = "sales@getkeep.net";
$headers = "MIME-Version: 1.0\r\n" .
        "Content-type: text/html; charset=iso-8859-1\r\n" .
        "From: $from" . "\r\n" .
        "Reply-To: $from" . "\r\n" .
        "Return-Path: $from" . "\r\n" .
        "Message-ID: <".strtotime("now")."TheSystem@".$_SERVER['SERVER_NAME'].">" .
$to = "josh@eleet-tech.com";
$handle = fopen("unite-overview.html", "r");
$contents = fread($handle, filesize("unite-overview.html"));
$message = $contents;
mail($to, $subject, $message, $headers);


?>
