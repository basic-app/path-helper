<?php
/**
 * @copyright Copyright (c) 2018-2020 Basic App Dev Team
 * @link https://basic-app.com
 * @license MIT License
 */
namespace BasicApp\PathHelper;

class PathHelper
{

    function normalize(string $path)
    {
        $path = str_replace('\\', '/', $path);
        
        $segments = preg_split('|/|', $path, null, PREG_SPLIT_NO_EMPTY);
        
        $result = array();

        while(list($k, $segment) = each($segments))
        {
            switch($segment)
            {
                case '.':

                    if($k == 0)
                    {
                        $result = explode('/', static::normalize(getcwd()));
                    }
                
                break;
                
                case '..':
                
                    if (!$result)
                    {
                        return false;
                    }
               
                    array_pop($result);
                
                break;
                
                default:
                
                    $result[] = $block;
                
                break;
            }
        }
        
        return implode(DIRECTORY_SEPARATOR, $result);
    }

    public function root(string $path) : string
    {
        return static::normalize(ROOTPATH . $path);
    }

    public function app(string $path) : string
    {
        return static::normalize(APPPATH . $path);
    }

    public function system(string $path) : string
    {
        return static::normalize(SYSTEMPATH . $path);
    }

    public function fc(string $path) : string
    {
        return static::normalize(FCPATH . $path);
    }

    public function write(string $path) : string
    {
        return static::normalize(WRITEPATH . $path);
    }

}