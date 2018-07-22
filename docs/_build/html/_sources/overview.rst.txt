========
Overview
========

Requirements
============

- PHP >= 7.1.3


.. _installation:

Installation
============

The recommended way to install PHP Utility Belt is with
`Composer <http://getcomposer.org>`_. Composer is a dependency management tool
for PHP that allows you to declare the dependencies your project needs and
installs them into your project.

You can find out more on how to install Composer, configure autoloading, and
other best-practices for defining dependencies at `getcomposer.org <http://getcomposer.org>`_.

You can add PHP Utility Belt as a dependency using the composer.phar CLI:

.. code-block:: bash

    php composer.phar require josephldaigle/php-utility-belt:dev-master

Alternatively, you can specify PHP Utility Belt as a dependency in your project's
existing composer.json file:

.. code-block:: js

    {
      "require": {
                  "josephldaigle/php-utility-belt": "dev-master"
      }
   }

After installing, you need to require Composer's autoloader:

.. code-block:: php

    require 'vendor/autoload.php';

You can find out more on how to install Composer, configure autoloading, and
other best-practices for defining dependencies at `getcomposer.org <http://getcomposer.org>`_.


Contributing
============

Not available doesn't mean impossible.

If you want to contribute, I'd love you have you help push things forward. Let me know how you'd like to help!


Reporting a security vulnerability
==================================

I am not a security expert! If you find a security vulnerability, please let me know in a `responsible manner <http://en.wikipedia.org/wiki/Responsible_disclosure>`_.

It is my goal and intent to provide this software free of charge, and more importantly,
as risk-free as can reasonably be expected.

Publicly disclosing a vulnerability can put the entire community at risk. If
you've discovered a security concern, please email me at
josephldaigle@yahoo.com. I'll personally work with you to make sure that I understand the
scope of the issue, and that I fully address your concern. I consider
correspondence sent to josephldaigle@yahoo.com a high priority, and work to
address any issues that arise as quickly as possible.

After a security vulnerability has been corrected, a security hotfix release will
be deployed as soon as possible.

License
=======

Licensed using the `MIT license <http://opensource.org/licenses/MIT>`_.

    Copyright (c) 2015 Michael Dowling <https://github.com/mtdowling>

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in
    all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    THE SOFTWARE.