<?php
$data = $_POST["myData"];
$handler = fopen("retriever.txt","a");
$data_Record = date('Y-m-d H:i:s')." ".$data."<br />";
fwrite($handler,$data_Record);
fclose($handler);
print("data saved");

header("Location:./index.php")

?>