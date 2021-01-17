<?php
function urlBasic($myURL){
    $newURL = $myURL;
    $subdominio = SUBDOMINIO;
    
    if(strrpos($newURL, "?") !== false){
        $pos = strrpos($newURL, "?");
        $newURL = substr($newURL,0,$pos);
    }

    if (strrpos($newURL, $subdominio) === false) {
        return $newURL;
    }else if (strlen($subdominio)===1) {
        return substr($newURL,1);
    } else {
        return str_replace($subdominio,"",$newURL);
        
    }
    
}
