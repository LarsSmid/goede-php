<?php
    
    $bg = "morning.png";
    $time = date("H");

    if ($time >= 6 && $time < 12){
        $bg = "morning.png";
        $greeting = "";
    } elseif ($time >= 12 && $time < 18) {
        $bg = "afternoon.png";
    } elseif ($time >= 18 && $time == 23 ) {
        $bg = "evening.png";
    } elseif ($time >= 0 && $time < 6) {
        $bg = "night.png";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>goede php</title>
	<link rel="stylesheet" type="text/css" href="opmaak.css">
</head>

<body style="background: url('bg/<?php echo $bg ?>'); background-size: cover;">


</body>
</html>