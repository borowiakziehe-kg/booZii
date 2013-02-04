<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jrgregory
 * Date: 01.02.13
 * Time: 11:48
 * To change this template use File | Settings | File Templates.
 */
class Helper
{
    public static $head = array();

    public static function addJs($items)
    {
        if(is_string($items))
        {
            static::$head['js'][] = $items;
        } else if(is_array($items))
        {
            foreach($items as $item)
            {
                static::$head['js'][] = $item;
            }
        }
    }

    public static function addCSS($items)
    {
        if(is_string($items))
        {
            static::$head['css'][] = $items;
        } else if(is_array($items))
        {
            foreach($items as $item)
            {
                static::$head['css'][] = $item;
            }
        }
    }

    public static function getJS()
    {
        return static::$head['js'];
    }

    public static function getCSS()
    {
        return static::$head['css'];
    }
}
