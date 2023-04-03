<?php

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class GreaterThan implements \Validation
{

    public function __construct(protected float $definedValue)
    {
    }

    public function validate(string $propertyName, mixed $value): mixed
    {
        if ($value <= $this->definedValue) {
            throw new Exception("Erro ocorrido na hora de definir  a propiedade {$propertyName}", 1);
        }

        return $value;
    }
}
