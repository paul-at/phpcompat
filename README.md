# PHP Backwards Compatibility Library

This library provides a set of functions to emulate or replace functions and configuration variables that were declared deprecated or dropped in PHP 5.3 onwards to provide backwards compatibility layer.

The goal of the project is to facilitate migration of legacy PHP code to newer PHP versions.

## Usage

Check out the project into your project directory by running ```git clone … phpcompat```. Include it in the beginning of your PHP code and call ```compat_ini_set``` function to emulate deprecated PHP configuration parameters.

    include_once 'phpcompat/main.php';
    compat_ini_set('register_globals', TRUE);
    compat_ini_set('register_long_arrays', TRUE);

### compat_ini_set

```compat_ini_set``` function work similar to [ini_set](http://php.net/manual/en/function.ini-set.php) PHP function.

The following variables are currently supported:
* register_globals
* register_long_arrays

## Developers

This is ambitious project and contributions are very welcome. Fork this repository, make changes and request a pull. Your code will be merged in the project as long as it conforms to the following requirements:

* It covers backward incompatible change, deprecated feature or provides compatibility layer for functionality that is not supported by all SAPIs (e.g. php_* Apache directives).
* It makes no assumptions. Check PHP version and existence of variable or function you are going to redeclare.

## See also

If you look into migrating from PHP 4 to PHP 5, [PHP_Compat](http://pear.php.net/package/PHP_Compat/) PEAR module may present interest as well.

[Upgrade PHP](http://include-once.org/p/upgradephp/) project offers the reverse thing: compatibility library that allows to run newer code on older PHP servers.

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