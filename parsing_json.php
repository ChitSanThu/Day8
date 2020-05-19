<?php
// json_encode()=>aray=>json format=>string
// json_decode=>json format=>array =>loop
$return_data = array(
    ["name" => "chit san thu", "age" => "19", "year" => "third year"],
    ["name" => "chit san thu", "age" => "19", "year" => "third year", "skills" => "html"],
    ["name" => "chit san thu", "age" => "19", "year" => "third year"],
    ["name" => "chit san thu", "age" => "19", "year" => "third year"]
);

$result=json_decode(file_get_contents("auwae.json"));
foreach($result as $key => $value){
    foreach($value as $k=>$v)
        echo $k." is ".$v."<br>";
}
// echo json_encode($return_data);
