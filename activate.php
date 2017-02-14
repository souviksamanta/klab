<?php
require('includes/config.php');
$memberID = trim($_GET['x']);
$active = trim($_GET['y']);
if(is_numeric($memberID) && !empty($active)){
	$stmt = $db->prepare("UPDATE members SET active = 'Yes' WHERE memberID = :memberID AND active = :active");
	$stmt->execute(array(
		':memberID' => $memberID,
		':active' => $active
	));
	if($stmt->rowCount() == 1){
		header('Location: index.php?action=active');
		exit;
	} else {
		echo "Your account could not be activated."; 
	}
}
?>