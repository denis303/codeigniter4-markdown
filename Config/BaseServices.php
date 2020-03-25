<?php

namespace Denis303\Markdown\Config;

use Denis303\Markdown\MarkdownService;

abstract class BaseServices extends \CodeIgniter\Config\Services
{

    public static function markdown($getShared = true)
    {
        if ($getShared)
        {
            return static::getSharedInstance(__FUNCTION__);
        }

        $config = config(Markdown::class);

        $return = new MarkdownService;

        foreach(get_object_vars($config) as $key => $value)
        {
            $return->$key = $value;
        }

        return $return;
    }

}