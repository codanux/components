<?php

namespace Codanux\Components;

class Components
{
    public static function filterTag($attributes, $tag, $type = '-')
    {
        $filters = $attributes->whereStartsWith($tag.$type);
        foreach ($filters as $key => $value)
        {
            $filters[substr($key,strlen($tag) +1)] = $value;
            unset($filters[$key]);
        }

        return $filters;
    }

    public static function errorRegex($name)
    {
        return preg_replace("/\[]/", '', preg_replace("/\[(\w+)\]/", '.${1}', $name));
    }


}
