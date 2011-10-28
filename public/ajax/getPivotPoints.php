<?php
include '../../protected/classes/pivotPoints.php';
include '../../protected/classes/pivotCalculations.php';

$dataFields = json_decode(stripslashes($_POST['data']),true);

$pivotCalc = new PivotCalculations($dataFields['high'],
				 $dataFields['low'], $dataFields['close']);

$pivotCalc->calculatePivot();
$pivotCalc->calculateR1();
$pivotCalc->calculateR2();
$pivotCalc->calculateR3();
$pivotCalc->calculateS1();
$pivotCalc->calculateS2();
$pivotCalc->calculateS3();

$data = array("pivot" => $pivotCalc->getPivot(),
			  "r1" => $pivotCalc->getR1(),
			  "r2" => $pivotCalc->getR2(),
			  "r3" => $pivotCalc->getR3(),
			  "s1" => $pivotCalc->getS1(),
			  "s2" => $pivotCalc->getS2(),
			  "s3" => $pivotCalc->getS3());
echo json_encode($data);
?>