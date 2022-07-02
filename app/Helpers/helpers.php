<?php 

// function to get id from url
if (!function_exists('GetIdFromUrl')) {
    function GetIdFromUrl($url)
    {
        $path = parse_url($url, PHP_URL_PATH);
        $pathFragments = array_filter(explode('/', $path));
        $id = end($pathFragments);
        return $id;

    }
}
?>