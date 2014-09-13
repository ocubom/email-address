Email Address
=============

_Email Address_ is a PHP implementation of an Email Address [value object][].

The address is checked against
[RFC 3696](http://tools.ietf.org/html/rfc3696 "RFC 3696: Application Techniques for Checking and Transformation of Names"),
[RFC 1123](http://tools.ietf.org/html/rfc1123 "RFC 1123: Requirements for Internet Hosts — Application and Support"),
[RFC 4291](http://tools.ietf.org/html/rfc4291 "RFC 4291: IP Version 6 Addressing Architecture"),
[RFC 5321](http://tools.ietf.org/html/rfc5321 "RFC 5321: Simple Mail Transfer Protocol") and
[RFC 5322](http://tools.ietf.org/html/rfc5322 "RFC 5322: Internet Message Format")
thanks to [is_email()][] code by [Dominic Sayers][].

Installation
------------

Just use [composer][] to add the dependency:

```
composer require ocubom/email-address:dev-master
```

Or add the dependecy manually:

1.  Update ``composer.json`` file with the lines:

    ```
    {
        "require": {
            "ocubom/email-address": "dev-master"
        }
    }
    ```

2.  And update the dependencies:

    ```
    composer update "ocubom/email-address"
    ```

Authorship
----------

Current maintainer:

* [Oscar Cubo Medina](http://github.com/ocubom/ "@ocubom projects").
  Twitter: [@ocubom](http://twitter.com/ocubom/ "@ocubom on twitter").

Copyright and License
---------------------

_Email Address_ is licensed under the MIT License — see the [`LICENSE`][0] file
for details.

If you did not receive a copy of the license, contact with the author.

### is_email() License

Includes "[is_email()][]” code by [Dominic Sayers][]:

> Copyright © 2008—2011 Dominic Sayers
> (http://isemail.info)
> BSD License (http://www.opensource.org/licenses/bsd-license.php)

[0]: https://github.com/ocubom/email-address/blob/master/LICENSE
    "PHP Email Type"


[Dominic Sayers]: http://github.com/dominicsayers
    "@dominicsayers on github"

[is_email()]: http://github.com/dominicsayers/isemail
    "dominicsayers/isemail"

[Composer]: http://getcomposer.org/
    "Composer Dependency Manager for PHP"

[value object]: http://wikipedia.org/wiki/value_object
    "Value object"
