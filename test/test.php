<?
error_reporting(0);
$json_array = file_get_contents("http://192.168.7.11:8048/api/Values/GetData?url=http://aequor.com");

$json_data=json_decode($json_array,true);
if ($json_data[GoogleAnalyticsTest]==1)
{
echo "yes";
 }
else
 {
 echo "No";
 }
?>