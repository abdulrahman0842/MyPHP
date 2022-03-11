<html>
<head>
<title>array</title>
</head>
<body>
<h3>Extracting Variables from array</h3>
<?PHP
$course[0]="Computer Engg.";
$course[1]="Information Tech.";
$course[2]="Electronics.";

list($one,$two,$three)=$course;
echo $one,"<br>";
echo $two,"<br>";
echo $three;
?>
</body>
</html>