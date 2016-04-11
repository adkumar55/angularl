<?
$json_array = file_get_contents("https://www.flickr.com/services/rest?method=flickr.places.find&api_key=c5336c8cc248142bbda940c1f771bfd5&query=Ahmedabad,%20Gujarat,%20India&format=json&nojsoncallback=1");

$json_data=json_decode($json_array,true);
print_r($json_data);
?>