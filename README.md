Behance API
=======

Behance API Package for Laravel 4

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `devdojo/behance`.

	"require": {
		"devdojo/behance": "dev-master"
	}

Next, update Composer from the Terminal:

    composer update

Once this operation completes, you'll need to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Devdojo\Behance\BehanceServiceProvider',
    
Finally, you'll need to publish the config file. Add the following command in Terminal.

    php artisan config:publish devdojo/behance

Then open up `app/config/packages/devdojo/behance/keys.php` and add your Behance Client ID and Client Secret. And that's it! You're all set to go.

## Usage

Here's an example of how to get the featured projects from behance.

```php
print_r(Behance::searchProjects());
```

For further info on using the Behance API, be sure to checkout: https://github.com/behance/network_api_php

Hope you enjoy :)
