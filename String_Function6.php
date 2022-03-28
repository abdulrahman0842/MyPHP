 <?php
 $string = "Hii Everyone";
 $search = "hi";
 $replace = "hello";
 echo '<b>'."String before replacement:".'</br></b>';
 echo $string.'</br>';
 $newstr = str_replace($search,$replace,$string,$count);
 echo '<b>'."New replaced String is :".'</br></b>';
 echo $newstr.'</br>';
 echo 'Number of replacement ='.$count;
 ?>