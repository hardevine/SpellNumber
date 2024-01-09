<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Exception\Interface;

use Exception;

interface ISpellException
{
    /**
     * Set the exception message.
     *
     * @param string $message The exception message.
     */
    public function setMessage(string $message);

    /**
     * Set the exception code.
     *
     * @param int $code The exception code.
     */
    public function setCode(int $code);

    /**
     * Throw the exception.
     *
     * @throws Exception The thrown exception with a formatted message.
     */
    public function throw();
}
