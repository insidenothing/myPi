<?PHP
// take a photo and return the image
$cmd = "raspistill -o cam.jpg";
exec($cmd);
?>
<iframe src="cam.jpg"></iframe>
