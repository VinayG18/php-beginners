<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Project: An Interactive HTML Color Sampler</title>
</head>

<body>
<h2>Project: An Interactive HTML Color Sampler</h2>
<?php
// get input values
$r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];
// generate RGB string from input
$rgb = $r . ',' . $g . ',' . $b;
?>
R: <?php echo $r; ?>
G: <?php echo $g; ?>
B: <?php echo $b; ?>
<p />
<div style="width:150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>)" />
</body>
</html>
