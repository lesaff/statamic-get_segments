<?php
/**
 * Modifier_get_segments
 * Grab segments from given URL
 * @author: Rudy Affandi (2015)
 * @url: https://github.com/lesaff/statamic-get_segments
 *
 */
class Modifier_get_segments extends Modifier
{
    public function index($value, $parameters=array()) {
        $segment = (isset($parameters[0])) ? $parameters[0] : 1;
        $url = preg_replace("(^https?://)", "", $value );;
        $get_segments = explode('/', $url);
        return $get_segments[$segment];
    }
}
