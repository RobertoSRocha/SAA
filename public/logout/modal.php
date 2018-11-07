<?php
    require_once '../../config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAA-EMCM</title>
 <style>
    .load {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 30%;
    left: 45%;
    color: blue;
 }
</style>
</head>
<body>
    <div class="load"> <img src="<?php echo BASEURL; ?>dist/img/loadin.gif"></div>
</body>
</html>

<?php
    require_once 'sleep.php';