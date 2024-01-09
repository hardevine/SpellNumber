<?php

declare(strict_types=1);

namespace Rmunate\Utilities;

use Rmunate\Utilities\Date\Base\SpellDateBase;
use Rmunate\Utilities\Date\Interfece\ISpellDate;

class SpellDate extends SpellDateBase implements ISpellDate
{
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
}