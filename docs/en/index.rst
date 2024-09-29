Doctrine Guides extension
=========================

This extension provides the necessary features to build the Doctrine
documentation.

It is intended for use for building the documentation as part of
``doctrine/doctrine-website``, but also in CI actions of each Doctrine
project, so that contributors can validate and preview their changes.

Installation
------------

To install the extension, use Composer:

.. code-block:: bash

    composer require doctrine/guides-extension

Then, enable the extension in your ``guides.xml``:

..  literalinclude:: sample_guides.xml
    :language: php
    :caption: guides.xml

.. toc::

   .. tocheader:: This is created by the ``tocheader`` directive
