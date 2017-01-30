<?php
    date_default_timezone_set('Europe/Amsterdam');
    
    $time = date("H");

    if ($time >= 6 && $time < 11){
        $bg = "morning.png";
        $greeting = "goedemorgen";
    } elseif ($time >= 11 && $time < 17) {
        $bg = "afternoon.png";
        $greeting = "goedemiddag";
    } elseif ($time >= 17 && $time < 23 ) {
        $bg = "evening.png";
        $greeting = "goedeavond";
    } elseif ($time >= 0 && $time < 6) {
        $bg = "night.png";
        $greeting = "goedenacht";
    }
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>goede php</title>
	<link rel="stylesheet" type="text/css" href="test.css">
</head>

<body style="background: url('bg/<?php echo $bg ?>'); background-size: cover;">
<h1> <?php echo $greeting; ?> </h1>
<p> <?php echo "Het is nu " . date("H:i"); ?> </p>
</body>
</html>