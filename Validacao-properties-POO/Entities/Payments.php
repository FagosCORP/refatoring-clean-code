<?php
class Payment
{
    // validacoes dentro do atributtos em cima das propiedades

    // e andar sobre a classe original
    // classes de validacao

    #[GreaterThan(0), LowerThan(13)]
    protected int $installments;

    #[GreaterThan(0)]
    protected float $amount;

    
    public function __construct()
    {
    }
}
