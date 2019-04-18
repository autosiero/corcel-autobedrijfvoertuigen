# Autobedrijf Voertuigen integration for Corcel

Adds support for the [Autobedrijf Voertuigen][1] plugin to [Corcel][2], allowing you to use the
vehicles in your WordPress installation in Laravel.

## Key features

This package adds a `Siero\\Corcel\\Vehicle` model to use with Corcel, which can be used to
retrieve a vehicle from your WordPress installation with most properties available.

The code follows the structure installed by Corcel, and has some key points:

- Contains enums for fuel, transmission, colour, vehicle kind, energy rating and more
- Base Vehicle object, with all accessories and images as child items (through relations)
- Full support for accessory groups

[1]: https://tussendoor.nl/wordpress-plugins/autobedrijf-voertuigen-wordpress-plugin
[2]: https://github.com/corcel/corcel

## License

The project is licened under the [MIT license][3].

[3]: LICENSE.md
