<?php
	require "db.php";
	echo "Hello";
	if($stmt = $mysqli->prepare("SELECT eID, eventName, eventTime, eventDate, eventLocation, eventLong, eventLat from events")){
		$stmt->execute();
		$stmt->bind_result($eID, $eventName, $eventTime, $eventDate, $location, $eventLong, $eventLat);
		while($stmt->fetch()){
			echo'
			<tr class="rowClickable" id="M'.$eID.'>
				<td>'.$eventName.'</td>
				<td>'.$location.'</td>
			</tr>
			';
		}
	}
?>