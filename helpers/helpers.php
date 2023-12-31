<?php
function site_url($route)
{
    return $_ENV['HOST'] . $route;
}

function asset_url($route)
{
    return site_url("assets/" . $route);
}

function view($path, $data = [])
{ #error.404
    extract($data);
    $path = str_replace('.', '/', $path);
    $view_full_path =  BASEPATH . "views/$path.php";
    include_once $view_full_path;
}


function strContains($str, $needle, $case_sensitive = 0)
{
    if ($case_sensitive)
        $pos = strpos($str, $needle);
    else
        $pos = stripos($str, $needle);
    return ($pos !== false) ? true : false;
}

function nice_dump($var)
{
    echo "<pre style='display: block; text-align: left; direction: ltr; background-color: #fff;";
    var_dump($var);
    echo "</pre>";
}
function nice_dd($var)
{
    nice_dump($var);
    die();
}
