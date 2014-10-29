PhpSpecExtension
================

Behat extension to run phpspec desc command automatically for missing classes

Installation
------------

This extension requires:

* Behat 3.0+
* PHP 5.4+

Through Composer
________________

The easiest way to manage your dependencies is to use Composer

```
    $ composer require --dev rmiller/phpspec-extension:dev-master
```

Activate the extension by specifying its class in your ``behat.yml``:

```yaml

    # behat.yml
    default:
      # ...
      extensions:
        RMiller\PhpSpecExtension\PhpSpecExtension:
          path:  bin/phpspec #default value is bin/phpspec
```
