<?php

/*
    Composer no PHP
    Gerenciador de dependências que instala bibliotecas, controla versões e
    gera o autoload das classes.
    Instalação no Windows: https://getcomposer.org/download/
*/

// Verificar instalação e ambiente:
// composer --version
// composer diagnose

// Arquivos principais:
// composer.json  -> declara dependências e configurações.
// composer.lock  -> fixa as versões instaladas; deve ser versionado.
// vendor/        -> contém dependências; normalmente não é versionado.

// composer init                         Cria o composer.json.
// composer require fornecedor/pacote   Instala uma dependência.
// composer require --dev pacote         Instala para desenvolvimento.
// composer install                      Instala versões do composer.lock.
// composer update                       Atualiza pacotes e composer.lock.
// composer remove fornecedor/pacote    Remove uma dependência.
// composer dump-autoload                Regenera o autoload.
// composer audit                        Procura vulnerabilidades.

// Carregar as classes instaladas:
// require __DIR__ . '/vendor/autoload.php';

// Boas práticas:
// - Versione composer.json e composer.lock.
// - Não edite vendor/ manualmente.
// - Use composer install em produção, não composer update.

// Exemplo de composer.json:

// {
//     "name": "pricila/composer-found-courses",
//     "description": "App to found courses",
//     "type": "library",
//     "license": "MIT",
//     "authors": [
//         {
//             "name": "Pricila",
//             "email": "pricila@gmail.com"
//         }
//     ]
// }

// Os componentes são instalados em vendor/ e carregados automaticamente pelo autoload.php. Por exemplo, para usar a biblioteca GuzzleHttp:
// use GuzzleHttp\Client;
// $client = new Client();
// $response = $client->request('GET', 'https://api.example.com/data');
// $data = json_decode($response->getBody(), true);

// são buscados no Packagist (https://packagist.org/) e instalados os arquivos necessários em vendor/guzzlehttp/guzzle. O autoload.php é gerado pelo Composer e carrega as classes automaticamente.
