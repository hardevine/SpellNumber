<?php

use PHPUnit\Framework\TestCase;
use Rmunate\Utilities\Validator\SpellValidator;

class PackageTest extends TestCase
{
    public function testValidator()
    {
        //Validar que los valores no sean vacios.
        $this->assertFalse(SpellValidator::value("Algo")->isNotEmpty()->validate()->fail());
        $this->assertTrue(SpellValidator::value("")->isNotEmpty()->validate()->fail());

        //Validar que los valores sean vacios
        $this->assertFalse(SpellValidator::value("")->isEmpty()->validate()->fail());
        $this->assertTrue(SpellValidator::value("Algo")->isEmpty()->validate()->fail());
        
        //Validar que sea un String
        $this->assertFalse(SpellValidator::value("string")->isNotEmpty()->isString()->validate()->fail());
        $this->assertTrue(SpellValidator::value(123)->isNotEmpty()->isString()->validate()->fail());
        
        //Validar que sea Entero
        $this->assertFalse(SpellValidator::value(123)->isNotEmpty()->isInt()->validate()->fail());
        $this->assertTrue(SpellValidator::value("123")->isNotEmpty()->isInt()->validate()->fail());
        
        //Validar que sea flotante
        $this->assertFalse(SpellValidator::value(12.3)->isNotEmpty()->isFloat()->validate()->fail());
        $this->assertTrue(SpellValidator::value(12)->isNotEmpty()->isFloat()->validate()->fail());

        //Validar que sea doble
        $this->assertFalse(SpellValidator::value(12.3)->isNotEmpty()->isDouble()->validate()->fail());
        $this->assertTrue(SpellValidator::value(12)->isNotEmpty()->isDouble()->validate()->fail());
        
        //Validar que sea fecha
        $this->assertFalse(SpellValidator::value("2023-12-01")->isNotEmpty()->isDate()->validate()->fail());
        $this->assertTrue(SpellValidator::value("2023-13-01")->isNotEmpty()->isDate()->validate()->fail());
        
        //Validar que sea Bool
        $this->assertFalse(SpellValidator::value(false)->isBoolean()->validate()->fail());
        $this->assertTrue(SpellValidator::value("false")->isBoolean()->validate()->fail());
        
        //Validar si es un arreglo
        $this->assertFalse(SpellValidator::value([])->isArray()->validate()->fail());
        $this->assertTrue(SpellValidator::value("[]")->isArray()->validate()->fail());
        
        //Validar si es un objeto
        $this->assertEquals(SpellValidator::value(new \stdClass())->isObject()->validate()->fail(), 1);
        $this->assertTrue(SpellValidator::value([])->isObject()->validate()->fail());

    }
}
