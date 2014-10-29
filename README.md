PhpSpecExtension
================

Behat extension to run phpspec desc command automatically for missing classes

Installation
------------

This extension requires:

* Behat 3.0+
* PHP 5.4+

Through Composer
~~~~~~~~~~~~~~~~

The easiest way to keep your suite updated is to use `Composer <http://getcomposer.org>`_:

1. Define dependencies in your ``composer.json``:

    .. code-block:: js

        {
            "require-dev": {
                ...

                "rmiller/phpspec-extension": "dev-master"
            }
        }

2. Install/update your vendors:

    .. code-block:: bash

        $ composer update rmiller/phpspec-extension

3. Activate extension by specifying its class in your ``behat.yml``:

    .. code-block:: yaml

        # behat.yml
        default:
          # ...
          extensions:
            RMiller\PhpSpecExtension:
              path:  bin/phpspec #default value is bin/phpspec