<?php
session_start();
$order = isset($_SESSION['order']) ? $_SESSION['order'] : '-';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '-';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '-';

$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'ru';
$translationDir = dirname(__DIR__) . '/translations';
if (file_exists($translationDir)) {
    $i18nFile = file_exists("$translationDir/$language.php") ? "$translationDir/$language.php" : "$translationDir/ru.php";
    include_once $i18nFile;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/s.png" type="image/x-icon">
	<title><?= $i18n['newsuccess_thanks'] ?></title>
	<style type="text/css">
		:root {
	--bg: rgba(240, 242, 245, 1);
}

body {
	background: var(--bg);
	font-family: 'Tahoma', sans-serif;
}

.main {
	display: grid;
	justify-items: center;
	margin: 4rem auto;
	width:min(90%);
	grid-template-columns: repeat(1, 1fr);
}
	</style>
</head>
<body class="main">
	<div><h1><?= $i18n['newsuccess_thanks'] ?></h1></div>
	<div><img src="img/s.png" height="200"></div>
	<div><p> <?= $i18n['newsuccess_orderinfo'] ?>  <b> <?= $order ?> </b></div>
	<div><p> <?= $i18n['newsuccess_contactyou'] ?> </p></div>
</body>
</html>