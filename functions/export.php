<?php
    include '../config/config.php';

$sql1 = "select * from events, event_sub,faculty where events.eid = event_sub.eid and event_sub.fid = faculty.fid ";
$row = mysqli_query($conn, $sql1);

$items = array();

while( $result = $row->fetch_assoc() ) {
$items[] = $result;
}
//print_r($items);

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