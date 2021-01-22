<?php
    include '../config/config.php';

$query = "select * from events";
$row = mysqli_query($conn, $query);
$items = array();

while( $result = $row->fetch_assoc() ) {
$items[] = $result;
}

if(isset($_POST["export"])) {

$fileName = "itemdata-".date('d-m-Y').".xls";

//Set header information to export data in excel format
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$fileName);


$heading = false;


if(!empty($items)) {
foreach($items as $item) {
if(!$heading) {
echo implode("\t", array_keys($item)) . "\n";
$heading = true;
}
echo implode("\t", array_values($item)) . "\n";
}
}
exit();
}

?>