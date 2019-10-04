<html>
<head>
<title>Online PHP Script Execution</title>
    <style>
        body{
            font-family: monospace;
            font-size: 2rem;
        }
    </style>
</head>
<body>

<?php
$numAlmenas = rand(1,10);

for($i=0; $i<=$numAlmenas; $i++){
    for($j=1; $j<=3; $j++){
        echo "****&nbsp";
    }
    echo "<br>";
    
}
echo "**************";
?>
</body>
</html>