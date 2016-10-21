<?php
$news_location = $_POST["location"];//Not Apply yet
$title = $_POST["title"];
$content = $_POST["content"];
$url= $_POST["url"];
$img= $_POST["img"];
$news_date= $_POST["yyyy"].'-'.$_POST["mm"].'-'.$_POST["dd"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "NoticeMe";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "UPDATE News SET "
		."title = '".$title
		."', content = '".$content
		."', url = '".$url
		."', img = '".$img
		."', news_date = '".$news_date
		."' WHERE LocID = ".$news_location;

if($news_location != null){
	$conn->query($sql);
}
$conn->close();
?>