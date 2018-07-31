<?php
//##     ## #### ########  ########  #######          ########     ###    ########   ######  ######## ########             ###    ########  #### 
//##     ##  ##  ##     ## ##       ##     ##         ##     ##   ## ##   ##     ## ##    ## ##       ##     ##           ## ##   ##     ##  ##  
//##     ##  ##  ##     ## ##       ##     ##         ##     ##  ##   ##  ##     ## ##       ##       ##     ##          ##   ##  ##     ##  ##  
//##     ##  ##  ##     ## ######   ##     ##         ########  ##     ## ########   ######  ######   ########          ##     ## ########   ##  
// ##   ##   ##  ##     ## ##       ##     ##         ##        ######### ##   ##         ## ##       ##   ##           ######### ##         ##  
//  ## ##    ##  ##     ## ##       ##     ##         ##        ##     ## ##    ##  ##    ## ##       ##    ##          ##     ## ##         ##  
//   ###    #### ########  ########  #######          ##        ##     ## ##     ##  ######  ######## ##     ##         ##     ## ##        #### 
class video_parser_api {

    //                          _             _                                                         
    //                         | |           | |                                                        
    //  _   _    ___    _   _  | |_   _   _  | |__     ___     _ __     __ _   _ __   ___    ___   _ __ 
    // | | | |  / _ \  | | | | | __| | | | | | '_ \   / _ \   | '_ \   / _` | | '__| / __|  / _ \ | '__|
    // | |_| | | (_) | | |_| | | |_  | |_| | | |_) | |  __/   | |_) | | (_| | | |    \__ \ |  __/ | |   
    //  \__, |  \___/   \__,_|  \__|  \__,_| |_.__/   \___|   | .__/   \__,_| |_|    |___/  \___| |_|   
    //   __/ |                                                | |                                       
    //  |___/                                                 |_|                                                                               
    // Created by Ostap34PHP
    public function get_youtube_video_id($url)
    {
        $youtube_video_id = str_replace("https://www.youtube.com/watch?v=", "", $url);
        return $youtube_video_id;
    }

    public function create_youtube_video_iframe($id, @$width, @$height, @$controls)
    {
        if(!$width){
            $width = 560;
        }
        if(!$height){
            $width = 315;
        }
        if(!$controls){
            $controls = 1;
        }else{
            $controls = 0;
        }
        $video_iframe_html = "<iframe src='https://www.youtube.com/embed/$id&controls=$controls' width='$width' height='$height' frameborder='0' allowfullscreen></iframe>";
        return $video_iframe_html;
    }
    
    
}

?>
