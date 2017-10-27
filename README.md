# Geolid PHP Coding Style [![Build Status](https://travis-ci.org/Geolid/phpcs.svg?branch=master)](https://travis-ci.org/Geolid/phpcs)

Phpcs used at geolid

## Installation

    composer require geolid/phpcs

after require, copy in your path : phpcs.xml.dist and rename to phpcs.xml

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

## Testing

    composer test
