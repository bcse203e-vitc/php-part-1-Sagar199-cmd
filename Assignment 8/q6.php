<html>
<body>
<?php
    $filePath='sample.json';
    $jsonData=file_get_contents($filePath);
    if($jsonData==false){
        echo "Failed to fetch json";
    }
    else{
        $data=json_decode($jsonData);
        foreach($data as $k=>$v){
            echo "{$k} : {$v}<br>";
        }
        echo "Publisher : {$data->Detail->Publisher}<br>";
    }
?>

</body>
</html>
