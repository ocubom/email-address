<?php

/*
 * This file is part of "Email Address" library
 *
 * © Oscar Cubo Medina <ocubom@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
    ISEMAIL_VALID_CATEGORY => array(
        'value' => 1,
        'description' => 'Address is valid',
        'id' => 'ISEMAIL_VALID_CATEGORY',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 14,
        ),
    ),
    ISEMAIL_DNSWARN => array(
        'value' => 7,
        'description' => 'Address is valid but a DNS check was not successful',
        'id' => 'ISEMAIL_DNSWARN',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 18,
        ),
    ),
    ISEMAIL_RFC5321 => array(
        'value' => 15,
        'description' => 'Address is valid for SMTP but has unusual elements',
        'id' => 'ISEMAIL_RFC5321',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 22,
        ),
    ),
    ISEMAIL_CFWS => array(
        'value' => 31,
        'description' => 'Address is valid within the message but cannot be used unmodified for the envelope',
        'id' => 'ISEMAIL_CFWS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 26,
        ),
    ),
    ISEMAIL_DEPREC => array(
        'value' => 63,
        'description' => 'Address contains deprecated elements but may still be valid in restricted contexts',
        'id' => 'ISEMAIL_DEPREC',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 30,
        ),
    ),
    ISEMAIL_RFC5322 => array(
        'value' => 127,
        'description' => 'The address is only valid according to the broad definition of RFC 5322. It is otherwise invalid.',
        'id' => 'ISEMAIL_RFC5322',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 34,
        ),
    ),
    ISEMAIL_ERR => array(
        'value' => 255,
        'description' => 'Address is invalid for any purpose',
        'id' => 'ISEMAIL_ERR',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 38,
        ),
    ),
);
