<?php

interface Validation
{
    public function validate(string $propertyName, mixed $value): mixed;
}
