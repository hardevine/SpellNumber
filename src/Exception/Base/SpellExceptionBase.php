<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Exception\Base;

abstract class SpellExceptionBase
{
    /**
     * Create a new instance of the derived exception class and set the associated class name.
     *
     * @param string $className The name of the class associated with the exception.
     *
     * @return static A new instance of the derived exception class.
     */
    public static function setClassName(string $className)
    {
        return new static($className);
    }
}
