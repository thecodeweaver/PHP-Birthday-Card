<?php
    $birthday_banner = <<< END
<p>
__   __  _______  _______  _______  __   __    _______         ______   _______  __   __  __  
|  | |  ||   _   ||       ||       ||  | |  |  |  _    |       |      | |   _   ||  | |  ||  | 
|  |_|  ||  |_|  ||    _  ||    _  ||  |_|  |  | |_|   | ____  |  _    ||  |_|  ||  |_|  ||  | 
|       ||       ||   |_| ||   |_| ||       |  |       ||____| | | |   ||       ||       ||  | 
|       ||       ||    ___||    ___||_     _|  |  _   |        | |_|   ||       ||_     _||__| 
|   _   ||   _   ||   |    |   |      |   |    | |_|   |       |       ||   _   |  |   |   __  
|__| |__||__| |__||___|    |___|      |___|    |_______|       |______| |__| |__|  |___|  |__| 
 
</p>
END;

$gif_html = <<< END
<iframe src="https://giphy.com/embed/3ohhwmQ0xIg8W3pHd6" width="480" height="456" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/happy-birthday-3ohhwmQ0xIg8W3pHd6">via GIPHY</a></p>
END;

echo $birthday_banner;
echo $gif_html;
?>