<?php

$xTitle = $_POST['xTitle'];
$xSubTitle = $_POST['xSubTitle'];
$xContent = $_POST['xContent'];
$xCreated = new DateTime();
$xModified = new DateTime();
//Get form data
$formdata = array(
  'xTitle'=> $xTitle,
  'xSubTitle'=> $xSubTitle,
  'xContent'=> $xContent,
  'xCreated'=> $xCreated,
  'xModified'=> $xModified
);
// create empty array
$arr_data = array();
//Get data from existing json file
$jsondata = file_get_contents('_cmsXj.json');
// converts json data into array
$arr_data = json_decode($jsondata, true);
// replace content data in array
$arr_data["cmsXj-content"][0] = $formdata;
//Convert updated array to JSON
$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
//write json data into json file
if(file_put_contents('_cmsXj.json', $jsondata)) {
	header( 'Location: ../index.php?z=workflows' );
}

?>

