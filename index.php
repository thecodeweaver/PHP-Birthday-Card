<?php
    $birthday_banner = <<< END
<pre>

__   __  _______  _______  _______  __   __    _______         ______   _______  __   __    __   __  _______  __   __  __  
|  | |  ||   _   ||       ||       ||  | |  |  |  _    |       |      | |   _   ||  | |  |  |  |_|  ||       ||  |_|  ||  | 
|  |_|  ||  |_|  ||    _  ||    _  ||  |_|  |  | |_|   | ____  |  _    ||  |_|  ||  |_|  |  |       ||   _   ||       ||  | 
|       ||       ||   |_| ||   |_| ||       |  |       ||____| | | |   ||       ||       |  |       ||  | |  ||       ||  | 
|       ||       ||    ___||    ___||_     _|  |  _   |        | |_|   ||       ||_     _|  |       ||  |_|  ||       ||__| 
|   _   ||   _   ||   |    |   |      |   |    | |_|   |       |       ||   _   |  |   |    | ||_|| ||       || ||_|| | __  
|__| |__||__| |__||___|    |___|      |___|    |_______|       |______| |__| |__|  |___|    |_|   |_||_______||_|   |_||__| 


</pre>
END;

$gif_html = <<< END
<style type="text/css">
    .centered {
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>
<div class="centered">
<iframe src="https://giphy.com/embed/3ohhwmQ0xIg8W3pHd6" width="480" height="456" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/happy-birthday-3ohhwmQ0xIg8W3pHd6">via GIPHY</a></p>
</div>
END;

echo "<head><title>Happy Birthday Mom!</title></head>";
echo $birthday_banner;
echo $gif_html;
?>