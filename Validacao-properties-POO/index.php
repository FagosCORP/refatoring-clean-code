<?php
$instanciaValidada = new EntityFactore('Payments');
$instanciaValidada->create(
    (object)[
        "installments" => 1000,
        "amount" => 100.22
    ]
);

echo '<pre>';
print_r($instanciaValidada);
die;
