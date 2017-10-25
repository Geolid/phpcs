#!/bin/sh

BASEDIR=$(dirname $0)
cd ${BASEDIR}/../
php vendor/bin/phpcs --standard=src/Geolid/ruleset.xml tests/Example/
