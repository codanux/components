# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codanux/components.svg?style=flat-square)](https://packagist.org/packages/codanux/components)
[![Build Status](https://img.shields.io/travis/codanux/components/master.svg?style=flat-square)](https://travis-ci.org/codanux/components)
[![Quality Score](https://img.shields.io/scrutinizer/g/codanux/components.svg?style=flat-square)](https://scrutinizer-ci.com/g/codanux/components)
[![Total Downloads](https://img.shields.io/packagist/dt/codanux/components.svg?style=flat-square)](https://packagist.org/packages/codanux/components)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require codanux/components
```

## Components

``` php

<x-input label="Name" name="name" class="m-2" type="text" />

<x-textarea label="Body" name="body" rows="4" />

<x-radio :options="[1 => 'First', 2 => 'Two']" label="Radio" name="radio"/>

<x-select :options="[1 => 'First', 2 => 'Two']" label="Select" name="select"/>

<x-checkboxes :options="[1 => 'First', 2 => 'Two']" label="Checkboxes" name="checkboxes[]"/>
```

## Component Attributes

``` php

Label or Error customize

"{field}-{attribute}" match field attributes attach 

<x-$component label-id="label_1" label-class="mb-2"   />

<x-$component error-id="error_1" error-class-class="mt-2"   />
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email codanux@hotmail.com instead of using the issue tracker.

## Credits

- [Omer](https://github.com/codanux)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).# components
