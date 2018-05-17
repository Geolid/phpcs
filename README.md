# Geolid PHP Coding Style [![Build Status](https://travis-ci.org/Geolid/phpcs.svg?branch=master)](https://travis-ci.org/Geolid/phpcs)

PHPCS ruleset used at Geolid

## Installation

    composer require --dev geolid/phpcs

You only need this package, no need to require manually `squizlabs/php_codesniffer`

after require, copy in your path : `phpcs.xml.dist` and rename to `phpcs.xml̀`
or add the rule below in your existing `phpcs.xml`

```xml
<rule ref="./vendor/geolid/phpcs/src/Geolid/ruleset.xml" />
```

## Usage

Use phpcs normally

    vendor/bin/phpcs

## Description

We follow the PSR-2 coding style with additional rules.

## Additional rules :

 - private methods and properties MUST not be prefixed with an underscore
 - one space around concatenation operator
 - array must be in short syntax
 - trailing comma : multiline arrays must have comma in all line
 - no more 3 nesting identation levels
 - minimal length of naming (function, variable, constant...) is 3 chars (except for i, id, em, om, to, ID, TO)
 - object instantiation must always be with parentheses
 - must have blank line before return statement
 - must have one space before return typehint
    ```php
    public function foo(): self {}
    ```
 - php must contains ```declare(strict_types=1);``` with one blank line between declaration and php open tag
 - Visibility MUST be declared on all constants  (PSR-12)

### naming

 - Prefix all abstract classes with Abstract except PHPUnit *TestCase. (name of empty abstract not detected for moment)
 - Suffix interfaces with Interface
 - Suffix traits with Trait
 - Suffix exceptions with Exception


## Testing

    composer test
