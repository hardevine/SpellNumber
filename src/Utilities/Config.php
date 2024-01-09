<?php

namespace Rmunate\Utilities\Utilities;

class Config
{
    /**
     * Get the configuration data for the "spell" component.
     *
     * If the Laravel `config` function is available, it retrieves the configuration using it.
     * Otherwise, it includes the configuration file directly.
     *
     * @return object|null An object representing the configuration data, or null if the configuration is not available.
     */
    public static function numbers()
    {
        if (function_exists('config')) {
            
            return (object)[
                'locale' => config("spell.numbers.locale") ?? config("app.locale"),
                'currency' => config("spell.numbers.currency") ?? 'dollars',
                'fraction' => config("spell.numbers.fraction") ?? 'cents',
                'connector' => config("spell.numbers.connector") ?? 'and',
                'ordinalOutput' => config("spell.numbers.ordinal_output") ?? 'default',
                'replacements' => config("spell.numbers.replacements") ?? [],
            ];

        } else {

            $data = include(__DIR__.'/../../config/spell.php');

            return (object)[
                'locale' => $data['numbers']['locale'] ?? 'en',
                'currency' => $data['numbers']['currency'] ?? 'dollars',
                'fraction' => $data['numbers']['fraction'] ?? 'cents',
                'connector' => $data['numbers']['connector'] ?? 'and',
                'ordinalOutput' => $data['numbers']['ordinal_output'] ?? 'default',
                'replacements' => $data['numbers']['replacements'] ?? [],
            ];
        }
    }
}
