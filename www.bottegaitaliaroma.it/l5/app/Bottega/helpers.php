<?php

function tokenTruncate($string, $your_desired_width) {

    if(strlen($string) < $your_desired_width) return $string;

  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
  $parts_count = count($parts);

  $length = 0;
  $last_part = 0;
  for (; $last_part < $parts_count; ++$last_part) {
    $length += strlen($parts[$last_part]);
    if ($length > $your_desired_width) { break; }
  }

  return implode(array_slice($parts, 0, $last_part)).'...';
}

function checkActivePath($path, $last = false)
{
    if( \Session::get('path') == $path)
    {

        if($last) return ' active ';

        return "class=active";
        
    }
}

function prepTitle($string, $base)
{
    if(strlen($string) > 0)
    {
        return ucfirst(
            str_replace('_', ' ', str_replace(['body_', 'pants_'], '', $string), $string)

            ) . ' | ' . $base;
    }

    return $base;
}

function formatLoadMoreUrl($input)
{
    return str_replace('/?', '/loadMoreGalleries?', $input);
}