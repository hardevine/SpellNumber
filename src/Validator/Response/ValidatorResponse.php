<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Validator\Response;

final class ValidatorResponse
{
    /**
     * Indicates whether the validation failed or not.
     *
     * @var bool
     */
    public $fail;

    /**
     * An array containing detailed error messages.
     *
     * @var array
     */
    public $errors;

    /**
     * ValidatorResponse constructor.
     *
     * @param array $errors An array of errors. Defaults to an empty array.
     */
    public function __construct(array $errors = [])
    {
        $this->fail = count($errors) > 0;
        $this->errors = $errors;
    }

    /**
     * Check if the validation failed.
     *
     * @return bool True if validation failed, false otherwise.
     */
    public function fail(): bool
    {
        return $this->fail;
    }

    /**
     * Check if the validation succeeded.
     *
     * @return bool True if validation succeeded, false otherwise.
     */
    public function success(): bool
    {
        return !$this->fail;
    }

    /**
     * Get the detailed error messages.
     *
     * @return array An array of error messages.
     */
    public function errors(): array
    {
        return $this->errors;
    }
}
