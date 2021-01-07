<?php

namespace Codanux\Components\Macros;

use Codanux\Components\Components;

class ComponentMacros
{
    public function tag()
    {
        return function ($tag, $type = "-") {
            return Components::filterTag($this, $tag, $type);
        };
    }

    public function key()
    {
        return function () {
            return Components::errorRegex($this[config('components.key')]);
        };
    }

}
