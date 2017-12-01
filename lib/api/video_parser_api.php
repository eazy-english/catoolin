<?php
//##     ## #### ########  ########  #######          ########     ###    ########   ######  ######## ########             ###    ########  #### 
//##     ##  ##  ##     ## ##       ##     ##         ##     ##   ## ##   ##     ## ##    ## ##       ##     ##           ## ##   ##     ##  ##  
//##     ##  ##  ##     ## ##       ##     ##         ##     ##  ##   ##  ##     ## ##       ##       ##     ##          ##   ##  ##     ##  ##  
//##     ##  ##  ##     ## ######   ##     ##         ########  ##     ## ########   ######  ######   ########          ##     ## ########   ##  
// ##   ##   ##  ##     ## ##       ##     ##         ##        ######### ##   ##         ## ##       ##   ##           ######### ##         ##  
//  ## ##    ##  ##     ## ##       ##     ##         ##        ##     ## ##    ##  ##    ## ##       ##    ##          ##     ## ##         ##  
//   ###    #### ########  ########  #######          ##        ##     ## ##     ##  ######  ######## ##     ##         ##     ## ##        #### 
// Created by Ostap34PHP
class video_parser_api {

    //youtube iframe
    public function youtube($url, $width=560, $height=315, $fullscreen=true)
    {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        $youtube= '<iframe allowtransparency="true" scrolling="no" width="'.$width.'" height="'.$height.'" src="//www.youtube.com/embed/'.$my_array_of_vars['v'].'" frameborder="0"'.($fullscreen?' allowfullscreen':NULL).'></iframe>';
        return $youtube;
    }
    
    //P.S Over time, there will be more features to work with video from various sites ^_^
}

?>
