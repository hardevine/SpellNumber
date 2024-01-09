<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Number\Base;

use ResourceBundle;
use Rmunate\Utilities\Exception\SpellException;
use Rmunate\Utilities\Validator\SpellValidator;

abstract class SpellNumberBase
{
    /**
     * Create a new instance based on a numeric value.
     *
     * @param int|float $value The numeric value.
     *
     * @return static A new instance of the class.
     *
     * @throws SpellException If the value is not numeric.
     */
    public static function value(int|float $value): static
    {
        $numericValidator = SpellValidator::value($value)->isNotEmpty()->isNumeric()->validate();

        if ($numericValidator->fail()) {
            SpellException::setClassName(static::class)
                ->setMessage("The supplied value is not numeric.")
                ->setCode(409)
                ->throwException();
        }

        return new static($value, 'value');
    }

    /**
     * Create a new instance based on a floating-point value.
     *
     * @param float $value The floating-point value.
     *
     * @return static A new instance of the class.
     *
     * @throws SpellException If the value is not a valid float.
     */
    public static function float(float $value): static
    {
        $floatValidator = SpellValidator::value($value)->isNotEmpty()->isFloat()->validate();

        if ($floatValidator->fail()) {
            SpellException::setClassName(static::class)
                ->setMessage("The supplied value is not a valid float.")
                ->setCode(409)
                ->throwException();
        }

        return new static($value, 'float');
    }

    /**
     * Create a new instance based on an integer value.
     *
     * @param int $value The integer value.
     *
     * @return static A new instance of the class.
     *
     * @throws SpellException If the value is not a valid integer.
     */
    public static function integer(int $value): static
    {
        $intValidator = SpellValidator::value($value)->isNotEmpty()->isInt()->validate();

        if ($intValidator->fail()) {
            SpellException::setClassName(static::class)
                ->setMessage("The supplied value is not a valid integer.")
                ->setCode(409)
                ->throwException();
        }

        return new static($value, 'integer');
    }

    /**
     * Create a new instance based on a string value.
     *
     * @param string $value The string value.
     *
     * @return static A new instance of the class.
     *
     * @throws SpellException If the value is not a string.
     */
    public static function text(string $value): static
    {
        $stringValidator = SpellValidator::value($value)->isNotEmpty()->isString()->validate();

        if ($stringValidator->fail()) {
            SpellException::setClassName(static::class)
                ->setMessage("The supplied value is not a valid string.")
                ->setCode(409)
                ->throwException();
        }

        return new static($value, 'text');
    }

    /**
     * Returns the list of available premises according to PHP.
     *
     * @return array|null An array containing all locales or null on error.
     */
    public static function getLocales(): ?array
    {
        try {
            $availableLocales = ResourceBundle::getLocales('');

            return $availableLocales;
        } catch (\Throwable $th) {
            // Handle exceptions (optional)
            return null;
        }
    }
}
