<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Date\Base;

use Rmunate\Utilities\Exception\SpellException;
use Rmunate\Utilities\Validator\SpellValidator;

abstract class SpellDateBase
{
    /**
     * Create a new instance based on a string value.
     *
     * @param string $value The string value.
     *
     * @return static A new instance of the class.
     *
     * @throws SpellException If the value is not a string.
     */
    public static function date(string $value): static
    {
        $stringValidator = SpellValidator::value($value)->isNotEmpty()->isDate()->validate();

        if ($stringValidator->fail()) {
            SpellException::setClassName(static::class)
                ->setMessage("The supplied value is not a valid date in format YYYY-MM-DD.")
                ->setCode(409)
                ->throwException();
        }

        return new static($value);
    }

}
