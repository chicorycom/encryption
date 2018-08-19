# Encrytion

##chicorycom
> Votre Intégrateur Reseau Système et Sécurité.

[![GitHub issues](https://img.shields.io/github/issues/chicorycom/encryption.svg?style=popout-square)](https://github.com/chicorycom/encryption/issues)
[![GitHub forks](https://img.shields.io/github/forks/chicorycom/encryption.svg?style=popout-square)](https://github.com/chicorycom/encryption/network)
[![GitHub stars](https://img.shields.io/github/stars/chicorycom/encryption.svg?style=popout-square)](https://github.com/chicorycom/encryption/stargazers)
[![GitHub license](https://img.shields.io/github/license/chicorycom/encryption.svg?style=popout-square)](https://github.com/chicorycom/encryption)

Déclaration d'un à deux paragraphes sur votre produit et son rôle.

![](header.png)

## Installation

OS X & Linux & window:

```sh
composer require chicorycom/encryption
```
- v1.0.0 requires PHP >= 7.1 
- v1.0.1 requires PHP >= 7.1 

## Usage example
```php
require __DIR__.'/../vendor/autoload.php';

use chicorycom\encryption;
$encryption = new encryption(Your-KEY Optionel)
echo $encryption->Crypte('test');
UCRTNgx1B3A=

echo $encryption->Decrypte('UCRTNgx1B3A=');
test
```

> use Facade
```php
require __DIR__.'/../vendor/autoload.php';

use chicorycom\facade\Encrypte;

echo Encrypte::Crypt('test');
WS0EYQB5AXY=

echo Encrypte::Decrypt('WS0EYQB5AXY=');
test
```

## Meta

[@Assane Sarr](https://www.facebook.com/chicorycom.net) – chickoryproduction@gmail.com

Distribué sous la licence MIT. Voir `` LICENCE`` pour plus d'informations.

[https://github.com/chicorycom/encryption.git](https://github.com/chicorycom/)

