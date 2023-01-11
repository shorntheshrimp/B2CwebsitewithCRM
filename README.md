# DIYone

DIYone is a B2C website developed fully with CakePHP framework with phpmyadmin(MySQL) as backend. This project is a concept piece for connecting talented craftsman to customers with an interest for customized hardware with a focus on innovative DIY. With different tiers in Craftsmanship, consumers of different backgrounds and economical restraints can shop without feeling overwhelmed by the marked up pricing in other retail settings. This idea is inspired from my personal experience as a consumer. 

# CakePHP Application Skeleton

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.

## Screenshots

![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/aboutus.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/craftsman_1.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/craftsman_2.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/homepage_1.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/homepage_2.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/shop_1.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/shop_2.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/login.png?raw=true)
![alt text](https://github.com/shorntheshrimp/B2CwebsitewithCRM/blob/main/Screenshots/register.png?raw=true)