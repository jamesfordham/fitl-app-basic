<?php
$title='Beer Rating System #2';
$question = 'Looking for 2nd best local craft beer? Can you help';
$description ='What Australian Craft beers would you suggest I try?';
$date = 'July 1, 2017';
$code = 'alert(This is a message)';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
</head>

<body>
<h1><?php echo $question;?></h1>
<p><?php echo $description;?></p>
<pre>
			<?php echo $code;?>
		</pre>
<p><?php echo $date;?></p>
</body>
</html>