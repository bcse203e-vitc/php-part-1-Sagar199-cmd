<html>
<body>
<?php
    $a=array('1','2','3','4','5');
    echo "Original array :<br>";
    foreach($a as $i){
        echo "$i ";
    }
    echo "<br>After inserting '$' the array is :<br>";
    array_splice($a,3,0,'$');
    foreach($a as $i){
        echo "$i ";
    }
?>

</body>
</html>


