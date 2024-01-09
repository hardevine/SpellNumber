<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Validator;

use Rmunate\Utilities\Validator\Base\ValidatorBase;
use Rmunate\Utilities\Validator\Trait\ValidateScenarios;
use Rmunate\Utilities\Validator\Interface\ISpellValidator;
use Rmunate\Utilities\Validator\Response\ValidatorResponse;

class SpellValidator extends ValidatorBase implements ISpellValidator
{
    use ValidateScenarios;

    /** @var mixed The value to be validated. */
    private $value;

    /** @var string|null The expected type for validation. */
    private $type;

    /** @var bool Indicates whether the value is allowed to be empty. */
    private $empty = false;

    /** @var array Variable to store validation errors. */
    private $errors = [];

    /** @var array Validation type values. */
    private $standardTypes = ["boolean", "integer", "double", "string", "array", "object"];

    /**
     * SpellNumberValidator constructor.
     *
     * @param mixed $value The value to be validated.
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
    
    /**
     * Set the condition to consider the value as not empty.
     *
     * @return static
     */
    public function isNotEmpty() : static
    {
        $this->empty = true;

        return $this;
    }

    /**
     * Set the condition to consider the value as empty.
     *
     * @return static
     */
    public function isEmpty() : static
    {
        $this->empty = false;

        return $this;
    }    

    /**
     * Set the expected type to string for validation.
     *
     * @return static
     */
    public function isString() : static
    {
        $this->type = 'string';

        return $this;
    }

    /**
     * Set the expected type to integer for validation.
     *
     * @return static
     */
    public function isInt() : static
    {
        $this->type = 'integer';

        return $this;
    }

    /**
     * Set the expected type to float for validation.
     *
     * @return static
     */
    public function isFloat() : static
    {
        $this->type = 'double';

        return $this;
    }

    /**
     * Alias for isFloat method. Set the expected type to double for validation.
     *
     * @return static
     */
    public function isDouble() : static
    {
        return $this->isFloat();
    }

    /**
     * Set the expected type to date for validation.
     *
     * @return static
     */
    public function isDate() : static
    {
        $this->type = 'date';

        return $this;
    }

    /**
     * Set the expected type to boolean for validation.
     *
     * @return static
     */
    public function isBoolean() : static
    {
        $this->type = 'boolean';

        return $this;
    }

    /**
     * Set the expected type to array for validation.
     *
     * @return static
     */
    public function isArray() : static
    {
        $this->type = 'array';

        return $this;
    }

    /**
     * Set the expected type to object for validation.
     *
     * @return static
     */
    public function isObject() : static
    {
        $this->type = 'object';

        return $this;
    }

    /**
     * Set the expected type to numeric for validation.
     *
     * @return static
     */
    public function isNumeric() : static
    {
        $this->type = 'numeric';

        return $this;
    }

    /**
     * Validate the provided value based on set conditions.
     *
     * @return object
     */
    public function validate() : ValidatorResponse
    {
        // Validate if the value is empty.
        $this->validateIsEmpty();

        // Validate the type.
        $this->validateType();

        // Return the validation result.
        return new ValidatorResponse($this->errors);
    } 
   
}