<!DOCTYPE html>
<html>

<head>
<title>Happy Birthday!</title>
</head>

<style>
    body {
        background-color:  #14141f;
    }
</style>

<style>
.centered {
    width: 500px;
  
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
   }
</style>

<body>

<pre style="color:white">


__    __       ___      .______   .______   ____    ____    .______    __  .______     .___________.__    __   _______       ___   ____    ____  __  
|  |  |  |     /   \     |   _  \  |   _  \  \   \  /   /    |   _  \  |  | |   _  \    |           |  |  |  | |       \     /   \  \   \  /   / |  | 
|  |__|  |    /  ^  \    |  |_)  | |  |_)  |  \   \/   /     |  |_)  | |  | |  |_)  |   `---|  |----|  |__|  | |  .--.  |   /  ^  \  \   \/   /  |  | 
|   __   |   /  /_\  \   |   ___/  |   ___/    \_    _/      |   _  <  |  | |      /        |  |    |   __   | |  |  |  |  /  /_\  \  \_    _/   |  | 
|  |  |  |  /  _____  \  |  |      |  |          |  |        |  |_)  | |  | |  |\  \----.   |  |    |  |  |  | |  '--'  | /  _____  \   |  |     |__| 
|__|  |__| /__/     \__\ | _|      | _|          |__|        |______/  |__| | _| `._____|   |__|    |__|  |__| |_______/ /__/     \__\  |__|     (__) 
                                                                                                                                                      


</pre>

<div class="centered">
<?php
# Grab a random GIF from Giphy
require_once('./vendor/autoload.php'); 

$api_client = new GPH\Api\DefaultApi();
$api_key = "oTn3BUxnNuwiHwSElgoVANoKX8Ru0b3d";
$query = "birthday";
$rating = "";
$format = "json";

try {
    $result = $api_client->gifsRandomGet($api_key, $query, $rating, $format);

    $url = $result["data"]["image_url"];
    echo "<img src=\"$url\" alt=\"Random Birthday GIF\">";
} catch (Exception $e) {
    echo "Error loading GIF: " . $e->getMessage() . "\n";
}
?>
</div>

<?php echo "<p style=\"color:white\">Reload the page for a different GIF!</p>"; ?>

</body>

</html>