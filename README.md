# Geolid PHP Coding Style [![Build Status](https://travis-ci.org/Geolid/phpcs.svg?branch=master)](https://travis-ci.org/Geolid/phpcs)

PHPCS ruleset used at Geolid.

## Installation

    composer require --dev geolid/phpcs

You only need this package, no need to require manually `squizlabs/php_codesniffer` or `friendsofphp/php-cs-fixer`.

After require, copy in your path : `phpcs.xml.dist` and rename to `phpcs.xml̀`
or add the rule below in your existing `phpcs.xml`.

```xml
<rule ref="./vendor/geolid/phpcs/src/Geolid/ruleset.xml" />
```

Copy in your path the `.php_cs.dist` file.

## Usage

Use php_codesniffer normally.

    vendor/bin/phpcs

Use php-cs-fixer normally.

    vendor/bin/php-cs-fixer fix

## Description

We follow the PSR-2 coding style with additional rules.

## Additional rules :

### code quality
 - Add leading \ before function invocation to speed up resolving.
 - Parameters with a default null value needs ? before type declarations.
 - No unused imports (`use` statements). 
 - Php must contains ```declare(strict_types=1);``` with one blank line between declaration and php open tag.
 - No more 3 nesting identation levels.
 - Classes must be declared "abstract" or "final".

### readability
 - Array must be in short syntax.
 - One space around concatenation operator.
 - One space after casting operator.
 - Object instantiation must always be with parentheses.
 - Must have blank line before return statement.
 - Must have one space before return typehint.
    ```php
    public function foo(): self {}
    ```
 - Only one use per line for traits.
 - No empty phpdoc

### PR readability
 - Trailing comma : multiline arrays must have comma in all line.
 - Trailing comma : multiline call must have comma in all line.


### naming
 - Prefix all abstract classes with Abstract except PHPUnit *TestCase. (name of empty abstract not detected for moment).
 - Suffix interfaces with Interface.
 - Suffix traits with Trait.
 - Suffix exceptions with Exception.

###  PSR-12
 - Visibility MUST be declared on all constants.
 - Private methods and properties MUST not be prefixed with an underscore.

## Testing

    composer test
