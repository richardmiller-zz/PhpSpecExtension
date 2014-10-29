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

The easiest way to manage your dependencies is to use `Composer <http://getcomposer.org>`_:


1. Require the extension:

    .. code-block:: bash

        $ composer require --dev rmiller/phpspec-extension:dev-master

2. Activate the extension by specifying its class in your ``behat.yml``:

    .. code-block:: yaml

        # behat.yml
        default:
          # ...
          extensions:
            RMiller\PhpSpecExtension\PhpSpecExtension:
              path:  bin/phpspec #default value is bin/phpspec