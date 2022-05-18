<?php


$presentTime = new DateTime();

$destinationTime = new DateTime('1985-08-21 04:29');


$interval = $presentTime->diff($destinationTime);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="present">
        <?php echo $presentTime->format('M d Y H:i'); ?>
    </div>
    <div class="destination">
        <?php echo $destinationTime->format('M d Y H:i'); ?>
    </div>
    <div>
        <?php echo $interval->format("différence : " . " %Y ans %M mois %D jours et %H h %I minutes et %S" . " secondes"); ?>
    </div>


</body>

</html>