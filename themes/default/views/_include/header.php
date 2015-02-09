<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $this->sPageTitle !== '' ? $this->sPageTitle . ' - ' : ''; ?>Site Title</title>

	<?php
	if (in_array(ENVIRONMENT, array('development', 'testing'))) {
		echo link_tag('vendor/css/reset.css');
		echo link_tag('vendor/css/bootstrap.css');
		echo link_tag('vendor/fonts/font-awesome/css/font-awesome.css');

		echo link_tag($this->sThemePath . 'css/style.css');
	} else {
		echo link_tag('vendor/css/reset.min.css');
		echo link_tag('vendor/css/bootstrap.min.css');
		echo link_tag('vendor/fonts/font-awesome/css/font-awesome.min.css');

		echo link_tag($this->sThemePath . 'css/style.min.css');
	}
	echo link_tag('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic');
	?>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>