<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Number\Response;

class SpellNumberCallable
{
    /**
     * Constructor for SpellNumberCallable.
     *
     * @param array $data An associative array containing response data.
     */
    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
    
}
