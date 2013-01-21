#AWS SDK for Laravel
===========

This **AWS SDK for Laravel** plugin integrate both AWS PHP SDK 1 and 2 and enable you to call both the API methods. SDK 1 support has been integrated to cover services which are not currently supportedin AWS PHP SDK 2. It currently only supports installtion via composer.

* [AWS SDK 2 for PHP](https://github.com/aws/aws-sdk-php)
* [AWS SDK 1 for PHP](https://github.com/amazonwebservices/aws-sdk-for-php)

## Installing AWS PHP SDK via Composer

Using [Composer](http://getcomposer.org) is the recommended way to install the AWS SDK for PHP. Composer is
dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into
your project. In order to use the AWS SDK for PHP 2 through Composer, you must do the following:

1. Create `composer.json` file at the root of your project. Add following in your `composer.json`.

    ```json
        {
		  "require": {
			  "php": ">=5.3.0",
			  "aws/aws-sdk-php": "*",
			  "amazonwebservices/aws-sdk-for-php": "*"
		  }
		}
    ```

1. Download and install Composer.

        curl -s "http://getcomposer.org/installer" | php

1. Install AWS SDK via composer.

        php composer.phar install


## Installing Laravel bundle

Download this bundle, extract and place it into bundles directory. Place config/aws.php into application/config/aws.php folder and Enter your AWS key, region and secret (can be found at security credentials tab in AWS account -https://portal.aws.amazon.com/gp/aws/securityCredentials)

## Using AWS SDK 

User folloing code to create instances of aws services. 
```php
$ses=IoC::resolve('ses');
```