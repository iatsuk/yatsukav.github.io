<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang){
        case "ru":
        case "ua":
        case "by":
        case "kz":
            //echo "PAGE RU";
            include("blog.ru.php");
            break;
        default:
            //echo "PAGE EN - Setting Default";
            include("blog.en.php");
            break;
    }