# PHP Backwards Compatibility Library

This library provides a set of functions to emulate or replace functions and configuration variables that were declared deprecated or dropped to provide backwards compatibility layer.

The goal of the project is to facilitate migration of legacy PHP code to newer PHP versions.

The project was founded to facilitate migration to PHP 5.3 and 5.4 and improve cross-SAPI portability, while maintaining compatibility with all PHP 5.x versions.

## Usage

* Check out the project into your application directory

```sh
git clone https://github.com/paul-at/phpcompat phpcompat
```

* Include it in the beginning of your PHP code

```php
<?php
include_once 'phpcompat/main.php';
compat_ini_set('register_globals');
compat_ini_set('register_long_arrays');
?>
```

### compat_ini_set($varname, $newvalue = TRUE)

compat_ini_set function works similar to [ini_set](http://php.net/manual/en/function.ini-set.php) PHP function. The second argument is optional and defaults to TRUE. It returns TRUE on successful call or FALSE if an error has occured.

The following variables are currently supported:

* register_globals
* register_long_arrays

## Developers

This is ambitious project and contributions are very welcome. Fork this repository, make changes and request a pull. Your code will be merged in the project as long as it:

* covers backward incompatible change, deprecated feature or provides compatibility layer for functionality that is not supported by all SAPIs (e.g. php_* Apache directives that have no runtime equivalent).
* makes no assumptions. Always check existence of variable or function you are going to redeclare.

## See also

If you are looking into migrating from PHP 4 to PHP 5, then [PHP_Compat](http://pear.php.net/package/PHP_Compat/) PEAR module may present interest as well.

[Upgrade PHP](http://include-once.org/p/upgradephp/) does the opposite job, providing compatibility library that allows to run newer code on older PHP servers.

## Legal stuff

   Copyright 2012

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.