Laravel Database
================


[![Build Status](https://img.shields.io/travis/GrahamCampbell/Laravel-Database/master.svg)](https://travis-ci.org/GrahamCampbell/Laravel-Database)
[![Coverage Status](https://img.shields.io/coveralls/GrahamCampbell/Laravel-Database/master.svg)](https://coveralls.io/r/GrahamCampbell/Laravel-Database)
[![Software License](https://img.shields.io/badge/license-Apache%202.0-brightgreen.svg)](https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md)
[![Latest Version](https://img.shields.io/github/release/GrahamCampbell/Laravel-Database.svg)](https://github.com/GrahamCampbell/Laravel-Database/releases)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Database/badges/quality-score.png?s=8b83d4d22d5af457e6313d26c037fffef76b85d0)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Database)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/9f583ab1-1203-44b9-927b-86488a326f65/mini.png)](https://insight.sensiolabs.com/projects/9f583ab1-1203-44b9-927b-86488a326f65)


## What Is Laravel Database?

Laravel Database provides some extra database stuff for [Laravel 4.2+](http://laravel.com).

* Laravel Database was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell).
* Laravel Database uses [Travis CI](https://travis-ci.org/GrahamCampbell/Laravel-Database) with [Coveralls](https://coveralls.io/r/GrahamCampbell/Laravel-Database) to check everything is working.
* Laravel Database uses [Scrutinizer CI](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Database) and [SensioLabsInsight](https://insight.sensiolabs.com/projects/9f583ab1-1203-44b9-927b-86488a326f65) to run additional checks.
* Laravel Database uses [Composer](https://getcomposer.org) to load and manage dependencies.
* Laravel Database provides a [change log](https://github.com/GrahamCampbell/Laravel-Database/blob/master/CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Database/releases), and [api docs](http://grahamcampbell.github.io/Laravel-Database).
* Laravel Database is licensed under the Apache License, available [here](https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md).


## System Requirements

* PHP 5.4.7+ or HHVM 3.1+ is required.
* You will need [Laravel 4.2+](http://laravel.com) because this package is designed for it.
* You will need [Composer](https://getcomposer.org) installed to load the dependencies of Laravel Database.


## Installation

Please check the system requirements before installing Laravel Database.

To get the latest version of Laravel Database, simply require `"graham-campbell/database": "~0.1"` in your `composer.json` file. You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

You can now extend or implement the classes and filters in this package to speed up writing Laravel packages further. There are no service providers to register.


## Configuration

Laravel Database requires no configuration. Just follow the simple install instructions and go!


## Usage

There is currently no usage documentation besides the [API Documentation](http://grahamcampbell.github.io/Laravel-Database
) for Laravel Database.

You may see an example of implementation in [Laravel Credentials](https://github.com/GrahamCampbell/Laravel-Credentials) or [Bootstrap CMS](https://github.com/GrahamCampbell/Bootstrap-CMS).


## Updating Your Fork

Before submitting a pull request, you should ensure that your fork is up to date.

You may fork Laravel Database:

    git remote add upstream git://github.com/GrahamCampbell/Laravel-Database.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).

You can then update the branch:

    git pull --rebase upstream master
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.


## Pull Requests

Please review these guidelines before submitting any pull requests.

* When submitting bug fixes, check if a maintenance branch exists for an older series, then pull against that older branch if the bug is present in it.
* Before sending a pull request for a new feature, you should first create an issue with [Proposal] in the title.
* Please follow the [PSR-2 Coding Style](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PHP-FIG Naming Conventions](https://github.com/php-fig/fig-standards/blob/master/bylaws/002-psr-naming-conventions.md).


## License

Apache License

Copyright 2013-2014 Graham Campbell

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
