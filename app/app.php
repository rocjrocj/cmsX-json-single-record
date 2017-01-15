<?php

// set defaults vars
$oNow = new DateTime();
$aNow = (array)$oNow;
$now = $aNow['date'];

// get json
$jsondata = file_get_contents('app/_cmsXj.json');
$d = json_decode($jsondata, true);
$c = $d['cmsXj-content'];

// set vars
$xTitle = $c[0]['xTitle'];
$xSubTitle = $c[0]['xSubTitle'];
$xContent = $c[0]['xContent'];
$xCreated = $c[0]['xCreated'];
$xCreatedDate = $xCreated['date'];
$xModified = $c[0]['xModified'];
$xModifiedDate = $xModified['date'];

?>


