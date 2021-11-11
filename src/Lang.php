<?php

namespace Omerfdmrl\Lang;

class Lang
{

    protected static $path = '/lang/';

    protected static function session()
    {
        if(!@$_SESSION){
            session_start();
        }
    }

    public static function setPath($path)
    {
        self::$path = $path;
    }

    public static function select($lang)
    {
        self::session();
        $_SESSION['_lang'] = $lang;
    }

    public static function create()
    {
        if(!file_exists(self::$path)){
            mkdir(self::$path);
        }
    }

    public static function add($lang)
    {
        if(!file_exists(self::$path . $lang)){
            mkdir(self::$path . $lang);
        }
    }

    public static function get($word)
    {
        self::session();
        $word = explode('.',$word);
        $fullPath = self::$path . $_SESSION['_lang'] . '/' . $word[0] . '.php';
        if(file_exists($fullPath)){
            require $fullPath;
            return $handle[$word[1]];
        }else {
            return False;
        }
    }
}