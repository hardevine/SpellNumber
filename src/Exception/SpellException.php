<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Exception;

use Exception;
use Rmunate\Utilities\Exception\Base\SpellExceptionBase;
use Rmunate\Utilities\Exception\Interface\ISpellException;

class SpellException extends SpellExceptionBase implements ISpellException
{
    /** @var string The name of the class associated with the exception. */
    private $class;

    /** @var string The exception message. */
    private $message;

    /** @var int The exception code. */
    private $code = 0;

    /**
     * SpellException constructor.
     *
     * @param string $class The name of the class associated with the exception.
     */
    public function __construct(string $class)
    {
        $this->class = $class;
    }

    /**
     * Set the exception message.
     *
     * @param string $message The exception message.
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * Set the exception code.
     *
     * @param int $code The exception code.
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }

    /**
     * Throw the exception.
     *
     * @throws Exception The thrown exception with a formatted message.
     */
    public function throw()
    {
        throw new Exception("Exception in {$this->class} - {$this->message}", $this->code);
    }
}