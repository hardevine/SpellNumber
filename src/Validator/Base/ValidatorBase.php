<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Validator\Base;

abstract class ValidatorBase
{
    /**
     * Create a new instance of the validator for a specific value.
     *
     * @param mixed $value The value to be validated.
     *
     * @return static
     */
    public static function value($value): static
    {
        return new static($value);
    }

    /**
     * Validate that the "Intl" extension is loaded.
     * 
     * @return bool
     */
    public static function intlExtension() : bool
    {
        return extension_loaded('intl');
    }
}
