DluPhpSettings
==============

--------------------------

Introduction
------------

DluPhpSettings is a [Zend Framework 2](http://framework.zend.com/zf2) module used to set the PHP ini settings based
on the configuration data.

More info
---------

You can find more information and discussion of this module on my blog [ZF Daily](http://www.zfdaily.com) here:
[Configuring PHP ini Settings in ZF2](http://www.zfdaily.com/2012/04/configuring-php-settings-in-zf2/)

--------------------------

Installation
------------

1.   Go to your project's directory.
2.   Clone this project into your `./vendor/` directory as a `DluPhpSettings` module:

     `git clone https://bitbucket.org/dlu/dluphpsettings.git ./vendor/DluPhpSettings`

3.   Enable this module in your `./config/application.config.php`

Usage
-----

Put any allowed PHP ini settings under the `phpSettings` key into any of your configuration files:

    /* Global application configuration in /config/autoload/global.php */
    <?php
    return array(
        'phpSettings'   => array(
            'display_startup_errors'        => false,
            'display_errors'                => false,
            'max_execution_time'		    => 60,
            'date.timezone'                 => 'Europe/Prague',
            'mbstring.internal_encoding'    => 'UTF-8',
        ),
    );

You can find the [list of available PHP ini directives](http://www.php.net/manual/en/ini.list.php) in the PHP docs.

Use the global config files for global application configuration and local config files for settings relevant only
to the local environment.

Links
-----

- [DluPhpSettings](https://bitbucket.org/dlu/dluphpsettings) - git repository on BitBucket
- [Configuring PHP ini Settings in ZF2](http://www.zfdaily.com/2012/04/configuring-php-settings-in-zf2/) - blog post
  about this module