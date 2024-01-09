<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Configuracion Global SpellPackage ^5.0 
    |--------------------------------------------------------------------------
    |
    | Visita la documentacion oficial en https://rmunate.github.io/SpellNumber/
    |
    */

    'numbers' => [

        /*
        |--------------------------------------------------------------------------
        | Configuracion global de zona
        |--------------------------------------------------------------------------
        | Defina de forma global la configuracion de zona para converir entre 
        | numeros y textos
        | Con este ajuste puede omitir el uso del metodo  locale(...).
        |
        */

        'locale' => 'en',

        /*
        |--------------------------------------------------------------------------
        | Configuracion global para traducciones a formato moneda
        |--------------------------------------------------------------------------
        |
        | Defina la configuracion global para salida en texto en formato moneda
        | Aplicando esta configuracion, puede omitir el metodo currency(...)
        |
        */

        'currency' => 'dollars',

        /*
        |--------------------------------------------------------------------------
        | Configuración global de la fraccion en el formato menda
        |--------------------------------------------------------------------------
        |
        | Defines the global output for currency fractions when the supplied value is
        | in floating-point format (double|float). With this configuration, you can avoid
        | using the fraction(...) method in package usage.
        |
        */

        'fraction' => 'cents',

        /*
        |--------------------------------------------------------------------------
        | Conector para la unicio de valores en numeros dobles
        |--------------------------------------------------------------------------
        |
        | Defina el conector para los casos donde se traten con valores float|double
        | Este sera el conector entre el valor entero y el valor decimal.
        |
        */

        'connector' => 'and',

        /*
        |--------------------------------------------------------------------------
        | Global Configuration for Ordinal Values
        |--------------------------------------------------------------------------
        |
        | Defines the global output for ordinal numbers. This varies by language;
        | for English, use 'default', while for romance languages, you may choose
        | between masculine and feminine forms.
        | Options: 'default', 'male', 'female'
        |
        */

        'ordinal_output' => 'default',

        /*
        |--------------------------------------------------------------------------
        | Remplazos a la traduccion ofrecida
        |--------------------------------------------------------------------------
        |
        | Puede que en algunos casos la salida carexca de alguna mejora de acuerdo a la lengua
        | de la zona o de la region, por lo cual podra definir que valores buscar en la salida y como 
        | remplazarlos para que se ajusten a la salida mas conveniente.
        |
        | Esto suele pasar cuando las palabras se cortan o se les pone un acento especifico.
        |
        */
        'replacements' => [
            'antes' => 'ahora'
        ],

        
    ],

    'date' => [

        /*
        |--------------------------------------------------------------------------
        | Configuracion global de zona
        |--------------------------------------------------------------------------
        | Defina de forma global la configuracion de zona para converir fechas a texto
        | Con este ajuste puede omitir el uso del metodo  locale(...).
        |
        */

        'locale' => 'en',

        /*
        |--------------------------------------------------------------------------
        | Configuracion global para la salida en texto de fechas
        |--------------------------------------------------------------------------
        |
        | Defina la salida global de las traducciones de fecha,
        | Emplenado esta configuracion pude omitir el metodo format();
        |
        */

        'format' => 'default',

        /*
        |--------------------------------------------------------------------------
        | Remplazos a la traduccion ofrecida
        |--------------------------------------------------------------------------
        |
        | Puede que en algunos casos la salida carexca de alguna mejora de acuerdo a la lengua
        | de la zona o de la region, por lo cual podra definir que valores buscar en la salida y como 
        | remplazarlos para que se ajusten a la salida mas conveniente.
        |
        | Esto suele pasar cuando las palabras se cortan o se les pone un acento especifico.
        |
        */
        'replacements' => [
            'antes' => 'ahora'
        ],
    ],

];