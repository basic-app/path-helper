<?php
/**
 * @copyright Copyright (c) 2018-2020 Basic App Dev Team
 * @link https://basic-app.com
 * @license MIT License
 */
use BasicApp\PathHelper\PathHelper;

if (!function_exists('normalizepath'))
{
    function normailzepath(string $path)
    {
        return PathHelper::normailze($path);
    }
}

if (!function_exists('rootpath'))
{
    function rootpath(string $path)
    {
        return PathHelper::root($path);
    }
}

if (!function_exists('apppath'))
{
    function apppath(string $path)
    {
        return PathHelper::app($path);
    }
}

if (!function_exists('systempath'))
{
    function systempath(string $path)
    {
        return PathHelper::system($path);
    }
}

if (!function_exists('fcpath'))
{
    function fcpath(string $path)
    {
        return PathHelper::fc($path);
    }
}

if (!function_exists('writepath'))
{
    function writepath(string $path)
    {
        return PathHelper::write($path);
    }
}