<?php 
preg_match('/index|about|contact/', $_SERVER['SCRIPT_FILENAME'], $matches);
$path = isset($matches[0]) ? $matches[0] : '';
$string = " class=\"active\"";
?>	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="header-div">
		<div>
			<h1 id="page-header"><a href="/index.php"><img id="header-logo" width="240" height="30" src="/images/exports/ottweblogo.png"></a></h1>
			<ul id="main-nav">
				<li<?php echo ($path == 'index') ? $string : ''; ?>><a href="/index.php">Home</a></li>
				<!-- <li><a href="/work/index.php">Work</a></li> -->
				<li<?php echo ($path == 'about') ? $string : ''; ?>><a href="/about.php">About</a></li>
				<li<?php echo ($path == 'contact') ? $string : ''; ?>><a href="/contact.php">Contact</a></li>
				<!-- <li><a href="33degrees.php">33 Degrees</a></li> -->
			</ul>
		</div>
	</div>
	<div id="everything-else">
