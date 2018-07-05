<?php
$lastreceived=$_POST['lastreceived'];
$room_file=file("room1.txt",FILE_IGNORE_NEW_LINES);
for($line=0;$line<count($room_file);$line++){
$messageArr=split("<!@!>",$room_file[$line]);
$timestamp=$messageArr[0];
$date=gmdate("d-m-Y H:i", $timestamp+ 3600);
if($messageArr[0]>$lastreceived)echo "<span style='font-size:11px; color:#7e7e7e'>".$date."</span><br><span style='font-size:11px; color:#000'>".$messageArr[1]."</span><br>";
}
echo "<SRVTM>".$messageArr[0];
?>

