<?php

declare(strict_types=1);

namespace Rmunate\Utilities\Validator\Trait;

use DateTime;

trait ValidateScenarios
{
    /**
     * Validate if the value is empty based on the specified conditions.
     */
    private function validateIsEmpty()
    {
        if ($this->empty !== null) {
            if ($this->empty) {
                if (is_null($this->value) || $this->value == "" || empty($this->value)) {
                    array_push($this->errors, "The value is empty.");
                }
            } else {
                if (!is_null($this->value) && $this->value != "" && !empty($this->value)) {
                    array_push($this->errors, "The value is not empty.");
                }
            }
        }
    }

    /**
     * Validate the type of the value based on the specified conditions.
     */
    private function validateType()
    {
        if ($this->type) {

            $actualType = gettype($this->value);
            $strictType = $this->type;

            if (in_array($this->type, $this->standardTypes)) {

                if ($actualType !== $this->type){
                    array_push($this->errors, "The supplied value is not of type '{$this->type}', instead it is '{$actualType}'.");
                }

            } else {

                switch ($this->type) {

                    case 'numeric':

                        if (!is_numeric($this->value) || empty($this->value) || is_null($this->value) || is_bool($this->value)) {

                            array_push($this->errors, "El valor suministrado no es numerico.");

                        }

                        break;

                    case 'date':

                        $message = "The supplied value does not match the date format YYYY-MM-DD.";

                        if (empty($this->value) || is_null($this->value) || is_bool($this->value)) {

                            array_push($this->errors, $message);

                        } else {

                            $dateTime = DateTime::createFromFormat('Y-m-d', $this->value);

                            if (is_null($dateTime) || $dateTime->format('Y-m-d') !== $this->value) {
                                array_push($this->errors, $message);
                            }
                        }

                        break;
                }

            }
        }
    }
}
