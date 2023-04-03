<?php

declare(strict_types=1);

// class Config
// {
//     public static function get(string $config): array
//     {
//         $_SERVER['APPLICATION_ENV'] = 'production';

//         // se eu nao encontrar o o storekeys eu ja retorno vazio
//         if ($config !== 'storekeys') {
//             return [];
//         }

//         switch ($_SERVER['APPLICATION_ENV']) {
//             case 'development':
//                 return [
//                     'key' => 'teste',
//                     'password' => 'tenhoValor'
//                 ];
//             case 'production':
//                 return [
//                     'key' => 'teste',
//                     'password' => 'tenhoValor'
//                 ];
//             default:
//                 die('APPLICATION_ENV NOT DEFINED');
//         }
//     }
// }

// class Config
// {
//     // passar ja a criacao dentro da declaracao
//     // ja cria o atributo no construtor
//     protected string $applicationEnv;

//     public function __construct(
//         string $applicationEnv
//     ) {
//         $this->applicationEnv =  $applicationEnv;
//     }
//     public  function get(string $config): array
//     {
//         // se eu nao encontrar o o storekeys eu ja retorno vazio
//         if ($config !== 'storekeys') {
//             return [];
//         }
//         switch ($this->applicationEnv) {
//             case 'development':
//                 return [
//                     'key' => 'teste',
//                     'password' => 'tenhoValor'
//                 ];
//             case 'production':
//                 return [
//                     'key' => 'teste',
//                     'password' => 'tenhoValor'
//                 ];
//             default:
//                 die('APPLICATION_ENV NOT DEFINED');
//         }
//     }
// }
// // ambiente
// $config = new Config('development');
// // quais atributors?

// $config->get('storekeys');

// echo '<pre>';
// print_r($config->get('storekeys'));
// die;


class Config
{
    // passar ja a criacao dentro da declaracao
    // ja cria o atributo no construtor
    protected string $applicationEnv;

    public function __construct(
        string $applicationEnv
    ) {
        $this->applicationEnv =  $applicationEnv;
    }
    public  function get(string $config): array
    {
        // se eu nao encontrar o o storekeys eu ja retorno vazio
        if ($config !== 'storekeys') {
            return [];
        }

        // return match ($this->applicationEnv) {
        //     'development', 'stagging' => [
        //         'key' => 'teste',
        //         'password' => 'tenhoValor',
        //     ],
        //     'production' => [
        //         'key' => 'teste',
        //         'password' => 'tenhoValor',
        //     ],
        //     default => die('APPLICATION_ENV NOT DEFINED')
        // };
        return match ($this->applicationEnv) {
            'development' => true
        };
    }
}
// ambiente
$config = new Config('development');
// quais atributors?

$config->get('storekeys');

echo '<pre>';
print_r($config->get('storekeys'));
die;
