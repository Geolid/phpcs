#!/bin/sh

BASEDIR=$(dirname $0)

php "${BASEDIR}/../vendor/bin/phpcs" --standard=src/Geolid/ruleset.xml tests/Example/
