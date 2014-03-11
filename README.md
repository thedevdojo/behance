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

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Devdojo\Behance\BehanceServiceProvider',

That's it! You're all set to go.

## Usage

Here's an example of how to get the featured projects from behance.

```php
$behance = new Behance( $client_id, $client_secret )	

$results = $behance->searchProjects();

print_r($results);
```

For further info on using the Behance API, be sure to checkout: https://github.com/behance/network_api_php

Hope you enjoy :)
