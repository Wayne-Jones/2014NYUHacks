<?php
	require "db.php";
	require "WideImage/WideImage.php";
	session_start();
	/*echo $_POST['location'];
	echo $_POST['eventTitle'];
	echo $_POST['datepicker'];
	echo $_POST['time'];
	echo $_POST['description'];*/
	$eventName = $_POST['eventTitle'];
	$eventTime = $_POST['time'];
	$eventDate = $_POST['datepicker'];
	$location = $_POST['location'];
	$eventDescription = $_POST['description'];
	$location = urlencode($location);
	$loc = geocoder::getLocation($location);
	$eventLat = $loc['lat'];
	$eventLong = $loc['lng'];

	class geocoder{
    static private $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=";

    static public function getLocation($address){
        $url = self::$url.urlencode($address);
        
        $resp_json = file_get_contents($url);
        $resp = json_decode($resp_json, true);

        if($resp['status']='OK'){
            return $resp['results'][0]['geometry']['location'];
        }else{
            return false;
        }
    }


    static private function curl_file_get_contents($URL){
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
            else return FALSE;
    }
}


	if(!isset($_SESSION['user'])){
		header("Location: ./index.php");
		exit();
	}
	if(!is_uploaded_file($_FILES["file"]['tmp_name'])){
		//No File has been submitted, Insert default image as profile pic
		$imgPath = "images/image1.png";
		if($stmt = $mysqli->prepare("INSERT INTO events (eventName, eventTime, eventDate, eventLocation, eventLong, eventLat, eventDescription, privacyIndicator, pictureURL) VALUES (?, ?, ?, ?, ?, ?, ?, '0', ?)")){
			$stmt->bind_param("ssssssss", $eventName, $eventTime, $eventDate, $location, $eventLong, $eventLat, $eventDescription, $imgPath);
			$stmt->execute();
			$stmt->close();
		}
		header("Location: ./index.php");
		exit();
	}
	else{
		//Upload Image File Script
			$imgPath = "images/".$_FILES["file"]["name"];
			$imgPath = str_replace(' ', '_', $imgPath);
			$img = WideImage::loadFromUpload('file');
			$img->saveToFile($imgPath);
			if($stmt = $mysqli->prepare("INSERT INTO events (eventName, eventTime, eventDate, eventLocation, eventLong, eventLat, eventDescription, privacyIndicator, pictureURL) VALUES (?, ?, ?, ?, ?, ?, ?, '0', ?)")){
				$stmt->bind_param("ssssssss", $eventName, $eventTime, $eventDate, $location, $eventLong, $eventLat, $eventDescription, $imgPath);
				$stmt->execute();
				$stmt->close();
			header("Location: ./index.php");
			exit();
			}
	}

?>