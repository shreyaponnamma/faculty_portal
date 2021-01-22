<?php
if (isset($_POST["input_name"]) && is_array($_POST["input_name"])){
    echo '<pre>';
    print_r($_POST["input_name"]);
    echo '</pre>';

    $input_name = $_POST["input_name"];
    echo $input_name;
    foreach($input_name as $field_value){
    print_r($field_value) ;
    }
    exit;
}
?>