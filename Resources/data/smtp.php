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
    'ISEMAIL_META_SMTP_250_215' => array(
        'text' => '250 2.1.5 ok',
        'value' => '2.1.5',
        'id' => 'ISEMAIL_META_SMTP_250_215',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 45,
        ),
    ),
    'ISEMAIL_META_SMTP_553_510' => array(
        'text' => '553 5.1.0 Other address status',
        'value' => '5.1.0',
        'id' => 'ISEMAIL_META_SMTP_553_510',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 49,
        ),
    ),
    'ISEMAIL_META_SMTP_553_511' => array(
        'text' => '553 5.1.1 Bad destination mailbox address',
        'value' => '5.1.1',
        'id' => 'ISEMAIL_META_SMTP_553_511',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 53,
        ),
    ),
    'ISEMAIL_META_SMTP_553_512' => array(
        'text' => '553 5.1.2 Bad destination system address',
        'value' => '5.1.2',
        'id' => 'ISEMAIL_META_SMTP_553_512',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 57,
        ),
    ),
    'ISEMAIL_META_SMTP_553_513' => array(
        'text' => '553 5.1.3 Bad destination mailbox address syntax',
        'value' => '5.1.3',
        'id' => 'ISEMAIL_META_SMTP_553_513',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 61,
        ),
    ),
);
