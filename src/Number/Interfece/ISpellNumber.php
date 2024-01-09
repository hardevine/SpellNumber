<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Number\Interfece;

use Closure;

interface ISpellNumber
{
    /**
     * Convert the supplied numeric value to an integer or float.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return int|float The converted numeric value.
     */
    public function toNumbers(?Closure $callback = null): int|float;

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

    /**
     * Convert the numeric value to its textual representation in currency format.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The currency-formatted textual representation of the numeric value.
     */
    public function toCurrency(?Closure $callback = null): string;

    /**
     * Convert the numeric value to its Roman numeral representation.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The Roman numeral representation of the numeric value.
     */
    public function toRomanNumeral(?Closure $callback = null): string;

    /**
     * Convert the supplied numeric value to its summary representation.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The summary representation of the numeric value.
     */
    public function toSummary(?Closure $callback = null): string;

    /**
     * Convert the numeric value to its textual representation in the specified currency format.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The currency-formatted textual representation of the numeric value.
     */
    public function toCurrencyFormat(?Closure $callback = null): string;

    /**
     * Convert the numeric value to its percentage representation.
     *
     * @param int $digits The number of digits after the decimal point.
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The percentage representation of the numeric value.
     */
    public function toPercent(int $digits = 2, ?Closure $callback = null): string;

    /**
     * Convert the numeric value to its scientific notation representation.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The scientific notation representation of the numeric value.
     */
    public function toScientific(?Closure $callback = null): string;

    /**
     * Convert the numeric value to its clock time representation.
     *
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The clock time representation of the numeric value.
     */
    public function toClock(?Closure $callback = null): string;

    /**
     * Convert the numeric value to its ordinal representation.
     *
     * @param null|string $attr Additional attributes for the ordinal representation.
     * @param Closure|null $callback An optional callback function to customize the conversion.
     *
     * @throws SpellException If an error occurs during the conversion.
     *
     * @return string The ordinal representation of the numeric value.
     */
    public function toOrdinal(?string $attr = null, ?Closure $callback = null): string;
}
