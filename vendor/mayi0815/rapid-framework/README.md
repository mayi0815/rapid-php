RapidPHP
===============

RapidPHP is a free, open-source, fast, efficient, and simple object-oriented lightweight PHP development framework.

>**Version:** `4.0.1`

## Naming Convention

`rapidPHP` follows the Camel-Case naming convention, autoload standard, and adheres to the following rules:
### Directories and Files

*   Directories can be in lowercase or uppercase. For consistency, it is recommended to use lowercase for all directories and avoid special characters like underscores.
*   Class libraries and function files should have a `.php` extension, with the first letter of the class name capitalized and the filename matching the class name.
*   Class filenames should be defined using namespaces, and the namespace path should match the class library file path.
*   Class names and class filenames should be consistent, using CamelCase naming (with the first letter capitalized).

### Functions, Classes, and Attribute Naming
*   Class names should use CamelCase, with the first letter capitalized, in the format `NameType`. For example, `BaseController`. The `Controller` suffix is optional, but it is recommended for consistency.
*   Function names should use lowercase letters without underscores, like `getUser`.
*   Variable names should use CamelCase, with the first letter in lowercase, such as `tableName` and `instance`.
*   Functions or methods starting with a double underscore "__" are considered magic methods, like `__call` and `__autoload`.

### Constants and Configuration
*   Constants should be in uppercase with underscores.
*   Configuration parameters can be static methods, constants, or members.

> RapidPHP requires PHP 7.1+ to run.

## Installation

~~~
composer require mayi0815/rapid-framework
~~~

## Contributing

Submit a PR or an Issue directly.

## Copyright Information

RapidPHP is released under the MIT open-source license and is free to use.

The copyright information for third-party source code and binary files included in this project is indicated separately.

Copyright © 2020-2024 by rapidPHP

All rights reserved.