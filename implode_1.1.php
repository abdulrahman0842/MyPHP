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
$text=implode(",",$course);
echo $text;
?>
</body>
</html>