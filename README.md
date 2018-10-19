# A Laravel Nova tool to list your previous and future schedules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rrr/nova-schedule-list.svg?style=flat-square)](https://packagist.org/packages/rrr/nova-schedule-list)
![CircleCI branch](https://img.shields.io/circleci/project/github/RicardoRamirezR/nova-schedule-list/master.svg?style=flat-square)
[![StyleCI](https://github.styleci.io/repos/153673852/shield?branch=master)](https://github.styleci.io/repos/153673852)
[![Total Downloads](https://img.shields.io/packagist/dt/rrr/nova-schedule-list.svg?style=flat-square)](https://packagist.org/packages/rrr/nova-schedule-list)

This [Nova](https://nova.laravel.com) tool lets you list your previous and next scheduled tasks

## Installation

You can install the nova tool in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require rrr/nova-schedule-list
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function tools()
{
    return [
        // ...
        new \i8086\ScheduleList\ScheduleList,
    ];
}
```

## Usage

Click on the "Schedule List" menu item in your Nova app to see the shcdule list tool.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ricardo Ramirez R.](https://github.com/RicardoRamirezR)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

