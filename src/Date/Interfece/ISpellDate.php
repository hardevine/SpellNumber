<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Date\Interfece;

use Closure;

interface ISpellDate
{
    /**
     * Convert the numeric value to its textual representation.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The textual representation of the numeric value.
     */
    public function toLetters(?Closure $callback = null): string;
}
