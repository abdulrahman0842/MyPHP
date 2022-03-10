<?php  
    $employee = array (  
        "Name" => "Professor",  
        "Email" => "professor004@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
    foreach ($employee as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }  
?>  