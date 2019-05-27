<?php

$host = "localhost";
$username = "root";
$password = "";
$database_name = "okpp";


$conn = mysqli_connect($host, $username, $password, $database_name);
$conn->set_charset("utf8");

$table = "user";

$sqlScript = "";

$colNames = array();

$sql = "SHOW COLUMNS FROM " . $table;
$cols = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($cols)){
    $colNames[]= $row['Field'];
}
$colString = '(';
$len = count($colNames);

foreach ($colNames as $key => $colName) {
	
        	if($key < $len - 1){
        		$colString .= $colName . ', ';
        	}
        	else{
        		$colString .= $colName . '';
        	}
        }
$colString .= ')';
    

$query = "SELECT * FROM $table";
$result = mysqli_query($conn, $query);

$columnCount = mysqli_num_fields($result);



for ($i = 0; $i < $columnCount; $i ++) {
    while ($row = mysqli_fetch_row($result)) {
        $sqlScript .= "INSERT INTO $table ".$colString." \r\n VALUES(";
        for ($j = 0; $j < $columnCount; $j ++) {
            $row[$j] = $row[$j];
            
            if (isset($row[$j])) {
                $sqlScript .= '"' . $row[$j] . '"';
            } else {
                $sqlScript .= '""';
            }
            if ($j < ($columnCount - 1)) {
                $sqlScript .= ',';
            }
        }
        $sqlScript .= ");\r\n";
    }
}

$sqlScript .= "\r\n"; 

echo $sqlScript;

$file = "backup.txt";

file_put_contents($file, $sqlScript);

?>