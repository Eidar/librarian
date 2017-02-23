<?php

class ImageUpload {


	public function upload(){

		$dir = "resource/";
		$image = $dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$mime = pathinfo($image, PATHINFO_EXTENSION);

		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"])

			if($check){
				$uploadOk = 1;		
			} else {
				$uploadOk = 0;
			}

			
		}

		if ($_FILES["fileToUpload"]["size"] > 5000000) {
	    	$uploadOk = 'File too large. Must be less than 5MB.';
		}

	    if($mime != "jpg" && $mime != "jpeg") {
	        $uploadOk = 'File must be jpg/jpeg';
		}

		return $uploadOk;
	}

}