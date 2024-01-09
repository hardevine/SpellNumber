<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Validator\Interface;

use Rmunate\Utilities\Validator\Response\ValidatorResponse;

interface ISpellValidator
{
    /**
     * Set the condition to consider the value as not empty.
     *
     * @return static
     */
    public function isNotEmpty(): static;

    /**
     * Set the condition to consider the value as empty.
     *
     * @return static
     */
    public function isEmpty(): static;

    /**
     * Set the expected type to string for validation.
     *
     * @return static
     */
    public function isString(): static;

    /**
     * Set the expected type to integer for validation.
     *
     * @return static
     */
    public function isInt(): static;

    /**
     * Set the expected type to float for validation.
     *
     * @return static
     */
    public function isFloat(): static;

    /**
     * Alias for isFloat method. Set the expected type to double for validation.
     *
     * @return static
     */
    public function isDouble(): static;

    /**
     * Set the expected type to date for validation.
     *
     * @return static
     */
    public function isDate(): static;

    /**
     * Set the expected type to boolean for validation.
     *
     * @return static
     */
    public function isBoolean(): static;

    /**
     * Set the expected type to array for validation.
     *
     * @return static
     */
    public function isArray(): static;

    /**
     * Set the expected type to object for validation.
     *
     * @return static
     */
    public function isObject(): static;

    /**
     * Validate the provided value based on set conditions.
     *
     * @return ValidatorResponse
     */
    public function validate(): ValidatorResponse;
}
