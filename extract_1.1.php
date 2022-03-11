<html>
<head>
<title>array</title>
</head>
<body>
<h3>Extracting Variables from array</h3>
<?PHP
$course["CO"]="Computer Engg.";
$course["IF"]="Information Tech.";
$course["EJ"]="Electronics.";
extract($course);
echo"CO=$CO<BR>";
echo"IF=$IF<BR>";
echo"EJ=$EJ";
?>
</body>
</html>