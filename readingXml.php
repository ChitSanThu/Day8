<!-- xml=>store data,flexible ,
api request => cases,
json=>javascript object notation -->
<?php
// simplexml_load_file=>read from file
// simplexml_load_string=>read from string
// $data=<<<XMLR
// <myself>
//     <name>Chit San </name>
//     <age> 19</age>
//     <education>Third Year</education>
//     <language>php,java,python,js</language>
//     <certificate>get 5 certificate</certificate>
//     <relationship>rs</relationship>
// </myself>
// XMLR;
// $result=simplexml_load_string($data);
// $data=simplexml_load_file("mySelf.xml");
// echo "<pre>".print_r($result,true)."</pre>";
// foreach($data as $key => $value){
//     echo $key ." is ". $value."<br>";
// }
$return_data=array("name"=>"chit san thu","age"=>"19","year"=>"third year");
$result="<myself>";
foreach($return_data as $key => $value){
    $result.="<".$key.">".$value."</".$key.">";
}
$result.="</myself>";
echo $result;

