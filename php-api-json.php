<?php
//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.
$db=new PDO('mysql:dbname=php-ai;host=localhost;','root','');
//here prepare the query for analyzing, prepared statements use less resources and thus run faster
$row=$db->prepare('select * from users');
$row->execute();//execute the query
$json_data=array();//create the array
foreach($row as $rec)//foreach loop
{
$json_array['Id']=$rec['Id'];
    $json_array['Username']=$rec['Username'];
    $json_array['Password']=$rec['Password'];
    $json_array['Level']=$rec['Level'];
    $json_array['Fullname']=$rec['Fullname'];
//here pushing the values in to an array
    array_push($json_data,$json_array);
}
//built in PHP function to encode the data in to JSON format
echo json_encode($json_data);
echo "messege :Show data user succes,";
echo "code : 200";
?>