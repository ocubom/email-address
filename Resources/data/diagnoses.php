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
    ISEMAIL_VALID => array(
        'value' => 0,
        'category' => ISEMAIL_VALID_CATEGORY,
        'description' => 'Address is valid. Please note that this does not mean the address actually exists, nor even that the domain actually exists. This address could be issued by the domain owner without breaking the rules of any RFCs.',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(),
        'id' => 'ISEMAIL_VALID',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 480,
        ),
    ),
    ISEMAIL_DNSWARN_NO_MX_RECORD => array(
        'value' => 5,
        'category' => ISEMAIL_DNSWARN,
        'description' => 'Couldn\'t find an MX record for this domain but an A-record does exist',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(),
        'id' => 'ISEMAIL_DNSWARN_NO_MX_RECORD',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 486,
        ),
    ),
    ISEMAIL_DNSWARN_NO_RECORD => array(
        'value' => 6,
        'category' => ISEMAIL_DNSWARN,
        'description' => 'Couldn\'t find an MX record or an A-record for this domain',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(),
        'id' => 'ISEMAIL_DNSWARN_NO_RECORD',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 492,
        ),
    ),
    ISEMAIL_RFC5321_TLD => array(
        'value' => 9,
        'category' => ISEMAIL_RFC5321,
        'description' => 'Address is valid but at a Top Level Domain',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'TLD',
        ),
        'id' => 'ISEMAIL_RFC5321_TLD',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 498,
        ),
    ),
    ISEMAIL_RFC5321_TLDNUMERIC => array(
        'value' => 10,
        'category' => ISEMAIL_RFC5321,
        'description' => 'Address is valid but the Top Level Domain begins with a number',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'TLD-format',
        ),
        'id' => 'ISEMAIL_RFC5321_TLDNUMERIC',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 505,
        ),
    ),
    ISEMAIL_RFC5321_QUOTEDSTRING => array(
        'value' => 11,
        'category' => ISEMAIL_RFC5321,
        'description' => 'Address is valid but contains a quoted string',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'quoted-string',
        ),
        'id' => 'ISEMAIL_RFC5321_QUOTEDSTRING',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 512,
        ),
    ),
    ISEMAIL_RFC5321_ADDRESSLITERAL => array(
        'value' => 12,
        'category' => ISEMAIL_RFC5321,
        'description' => 'Address is valid but at a literal address not a domain',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'address-literal',
            1 => 'address-literal-IPv4',
        ),
        'id' => 'ISEMAIL_RFC5321_ADDRESSLITERAL',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 519,
        ),
    ),
    ISEMAIL_RFC5321_IPV6DEPRECATED => array(
        'value' => 13,
        'category' => ISEMAIL_DEPREC,
        'description' => 'Address is valid but contains a :: that only elides one zero group. All implementations must accept and be able to handle any legitimate RFC 4291 format.',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5321_IPV6DEPRECATED',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 527,
        ),
    ),
    ISEMAIL_CFWS_COMMENT => array(
        'value' => 17,
        'category' => ISEMAIL_CFWS,
        'description' => 'Address contains comments',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'dot-atom',
        ),
        'id' => 'ISEMAIL_CFWS_COMMENT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 534,
        ),
    ),
    ISEMAIL_CFWS_FWS => array(
        'value' => 18,
        'category' => ISEMAIL_CFWS,
        'description' => 'Address contains Folding White Space',
        'smtp' => 'ISEMAIL_META_SMTP_250_215',
        'references' => array(
            0 => 'local-part',
        ),
        'id' => 'ISEMAIL_CFWS_FWS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 541,
        ),
    ),
    ISEMAIL_DEPREC_LOCALPART => array(
        'value' => 33,
        'category' => ISEMAIL_DEPREC,
        'description' => 'The local part is in a deprecated form',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'obs-local-part',
        ),
        'id' => 'ISEMAIL_DEPREC_LOCALPART',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 548,
        ),
    ),
    ISEMAIL_DEPREC_FWS => array(
        'value' => 34,
        'category' => ISEMAIL_DEPREC,
        'description' => 'Address contains an obsolete form of Folding White Space',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'obs-local-part',
            1 => 'obs-domain',
        ),
        'id' => 'ISEMAIL_DEPREC_FWS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 555,
        ),
    ),
    ISEMAIL_DEPREC_QTEXT => array(
        'value' => 35,
        'category' => ISEMAIL_DEPREC,
        'description' => 'A quoted string contains a deprecated character',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'obs-qtext',
        ),
        'id' => 'ISEMAIL_DEPREC_QTEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 563,
        ),
    ),
    ISEMAIL_DEPREC_QP => array(
        'value' => 36,
        'category' => ISEMAIL_DEPREC,
        'description' => 'A quoted pair contains a deprecated character',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'obs-qp',
        ),
        'id' => 'ISEMAIL_DEPREC_QP',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 570,
        ),
    ),
    ISEMAIL_DEPREC_COMMENT => array(
        'value' => 37,
        'category' => ISEMAIL_DEPREC,
        'description' => 'Address contains a comment in a position that is deprecated',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'obs-local-part',
            1 => 'obs-domain',
        ),
        'id' => 'ISEMAIL_DEPREC_COMMENT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 577,
        ),
    ),
    ISEMAIL_DEPREC_CTEXT => array(
        'value' => 38,
        'category' => ISEMAIL_DEPREC,
        'description' => 'A comment contains a deprecated character',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'obs-ctext',
        ),
        'id' => 'ISEMAIL_DEPREC_CTEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 585,
        ),
    ),
    ISEMAIL_DEPREC_CFWS_NEAR_AT => array(
        'value' => 49,
        'category' => ISEMAIL_DEPREC,
        'description' => 'Address contains a comment or Folding White Space around the @ sign',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'CFWS-near-at',
            1 => 'SHOULD-NOT',
        ),
        'id' => 'ISEMAIL_DEPREC_CFWS_NEAR_AT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 592,
        ),
    ),
    ISEMAIL_RFC5322_DOMAIN => array(
        'value' => 65,
        'category' => ISEMAIL_RFC5322,
        'description' => 'Address is RFC 5322 compliant but contains domain characters that are not allowed by DNS',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'domain-RFC5322',
        ),
        'id' => 'ISEMAIL_RFC5322_DOMAIN',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 600,
        ),
    ),
    ISEMAIL_RFC5322_TOOLONG => array(
        'value' => 66,
        'category' => ISEMAIL_RFC5322,
        'description' => 'Address is too long',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'mailbox-maximum',
        ),
        'id' => 'ISEMAIL_RFC5322_TOOLONG',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 607,
        ),
    ),
    ISEMAIL_RFC5322_LOCAL_TOOLONG => array(
        'value' => 67,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The local part of the address is too long',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'local-part-maximum',
        ),
        'id' => 'ISEMAIL_RFC5322_LOCAL_TOOLONG',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 614,
        ),
    ),
    ISEMAIL_RFC5322_DOMAIN_TOOLONG => array(
        'value' => 68,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The domain part is too long',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'domain-maximum',
        ),
        'id' => 'ISEMAIL_RFC5322_DOMAIN_TOOLONG',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 621,
        ),
    ),
    ISEMAIL_RFC5322_LABEL_TOOLONG => array(
        'value' => 69,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The domain part contains an element that is too long',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'label',
        ),
        'id' => 'ISEMAIL_RFC5322_LABEL_TOOLONG',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 628,
        ),
    ),
    ISEMAIL_RFC5322_DOMAINLITERAL => array(
        'value' => 70,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The domain literal is not a valid RFC 5321 address literal',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'domain-literal',
        ),
        'id' => 'ISEMAIL_RFC5322_DOMAINLITERAL',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 635,
        ),
    ),
    ISEMAIL_RFC5322_DOMLIT_OBSDTEXT => array(
        'value' => 71,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The domain literal is not a valid RFC 5321 address literal and it contains obsolete characters',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'obs-dtext',
        ),
        'id' => 'ISEMAIL_RFC5322_DOMLIT_OBSDTEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 642,
        ),
    ),
    ISEMAIL_RFC5322_IPV6_GRPCOUNT => array(
        'value' => 72,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The IPv6 literal address contains the wrong number of groups',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5322_IPV6_GRPCOUNT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 649,
        ),
    ),
    ISEMAIL_RFC5322_IPV6_2X2XCOLON => array(
        'value' => 73,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The IPv6 literal address contains too many :: sequences',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5322_IPV6_2X2XCOLON',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 656,
        ),
    ),
    ISEMAIL_RFC5322_IPV6_BADCHAR => array(
        'value' => 74,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The IPv6 address contains an illegal group of characters',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5322_IPV6_BADCHAR',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 663,
        ),
    ),
    ISEMAIL_RFC5322_IPV6_MAXGRPS => array(
        'value' => 75,
        'category' => ISEMAIL_RFC5322,
        'description' => 'The IPv6 address has too many groups',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5322_IPV6_MAXGRPS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 670,
        ),
    ),
    ISEMAIL_RFC5322_IPV6_COLONSTRT => array(
        'value' => 76,
        'category' => ISEMAIL_RFC5322,
        'description' => 'IPv6 address starts with a single colon',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5322_IPV6_COLONSTRT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 677,
        ),
    ),
    ISEMAIL_RFC5322_IPV6_COLONEND => array(
        'value' => 77,
        'category' => ISEMAIL_RFC5322,
        'description' => 'IPv6 address ends with a single colon',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'address-literal-IPv6',
        ),
        'id' => 'ISEMAIL_RFC5322_IPV6_COLONEND',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 684,
        ),
    ),
    ISEMAIL_ERR_EXPECTING_DTEXT => array(
        'value' => 129,
        'category' => ISEMAIL_ERR,
        'description' => 'A domain literal contains a character that is not allowed',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'dtext',
        ),
        'id' => 'ISEMAIL_ERR_EXPECTING_DTEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 691,
        ),
    ),
    ISEMAIL_ERR_NOLOCALPART => array(
        'value' => 130,
        'category' => ISEMAIL_ERR,
        'description' => 'Address has no local part',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'local-part',
        ),
        'id' => 'ISEMAIL_ERR_NOLOCALPART',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 698,
        ),
    ),
    ISEMAIL_ERR_NODOMAIN => array(
        'value' => 131,
        'category' => ISEMAIL_ERR,
        'description' => 'Address has no domain part',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'addr-spec',
            1 => 'mailbox',
        ),
        'id' => 'ISEMAIL_ERR_NODOMAIN',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 705,
        ),
    ),
    ISEMAIL_ERR_CONSECUTIVEDOTS => array(
        'value' => 132,
        'category' => ISEMAIL_ERR,
        'description' => 'The address may not contain consecutive dots',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'local-part',
            1 => 'domain-RFC5322',
            2 => 'domain-RFC5321',
        ),
        'id' => 'ISEMAIL_ERR_CONSECUTIVEDOTS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 713,
        ),
    ),
    ISEMAIL_ERR_ATEXT_AFTER_CFWS => array(
        'value' => 133,
        'category' => ISEMAIL_ERR,
        'description' => 'Address contains text after a comment or Folding White Space',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'local-part',
            1 => 'domain-RFC5322',
        ),
        'id' => 'ISEMAIL_ERR_ATEXT_AFTER_CFWS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 722,
        ),
    ),
    ISEMAIL_ERR_ATEXT_AFTER_QS => array(
        'value' => 134,
        'category' => ISEMAIL_ERR,
        'description' => 'Address contains text after a quoted string',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'local-part',
        ),
        'id' => 'ISEMAIL_ERR_ATEXT_AFTER_QS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 730,
        ),
    ),
    ISEMAIL_ERR_ATEXT_AFTER_DOMLIT => array(
        'value' => 135,
        'category' => ISEMAIL_ERR,
        'description' => 'Extra characters were found after the end of the domain literal',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'domain-RFC5322',
        ),
        'id' => 'ISEMAIL_ERR_ATEXT_AFTER_DOMLIT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 737,
        ),
    ),
    ISEMAIL_ERR_EXPECTING_QPAIR => array(
        'value' => 136,
        'category' => ISEMAIL_ERR,
        'description' => 'The address contains a character that is not allowed in a quoted pair',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'quoted-pair',
        ),
        'id' => 'ISEMAIL_ERR_EXPECTING_QPAIR',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 744,
        ),
    ),
    ISEMAIL_ERR_EXPECTING_ATEXT => array(
        'value' => 137,
        'category' => ISEMAIL_ERR,
        'description' => 'Address contains a character that is not allowed',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'atext',
        ),
        'id' => 'ISEMAIL_ERR_EXPECTING_ATEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 751,
        ),
    ),
    ISEMAIL_ERR_EXPECTING_QTEXT => array(
        'value' => 138,
        'category' => ISEMAIL_ERR,
        'description' => 'A quoted string contains a character that is not allowed',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'qtext',
        ),
        'id' => 'ISEMAIL_ERR_EXPECTING_QTEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 758,
        ),
    ),
    ISEMAIL_ERR_EXPECTING_CTEXT => array(
        'value' => 139,
        'category' => ISEMAIL_ERR,
        'description' => 'A comment contains a character that is not allowed',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'qtext',
        ),
        'id' => 'ISEMAIL_ERR_EXPECTING_CTEXT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 765,
        ),
    ),
    ISEMAIL_ERR_BACKSLASHEND => array(
        'value' => 140,
        'category' => ISEMAIL_ERR,
        'description' => 'The address can\'t end with a backslash',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'domain-RFC5322',
            1 => 'domain-RFC5321',
            2 => 'quoted-pair',
        ),
        'id' => 'ISEMAIL_ERR_BACKSLASHEND',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 772,
        ),
    ),
    ISEMAIL_ERR_DOT_START => array(
        'value' => 141,
        'category' => ISEMAIL_ERR,
        'description' => 'Neither part of the address may begin with a dot',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'local-part',
            1 => 'domain-RFC5322',
            2 => 'domain-RFC5321',
        ),
        'id' => 'ISEMAIL_ERR_DOT_START',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 781,
        ),
    ),
    ISEMAIL_ERR_DOT_END => array(
        'value' => 142,
        'category' => ISEMAIL_ERR,
        'description' => 'Neither part of the address may end with a dot',
        'smtp' => 'ISEMAIL_META_SMTP_553_511',
        'references' => array(
            0 => 'local-part',
            1 => 'domain-RFC5322',
            2 => 'domain-RFC5321',
        ),
        'id' => 'ISEMAIL_ERR_DOT_END',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 790,
        ),
    ),
    ISEMAIL_ERR_DOMAINHYPHENSTART => array(
        'value' => 143,
        'category' => ISEMAIL_ERR,
        'description' => 'A domain or subdomain cannot begin with a hyphen',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'sub-domain',
        ),
        'id' => 'ISEMAIL_ERR_DOMAINHYPHENSTART',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 799,
        ),
    ),
    ISEMAIL_ERR_DOMAINHYPHENEND => array(
        'value' => 144,
        'category' => ISEMAIL_ERR,
        'description' => 'A domain or subdomain cannot end with a hyphen',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'sub-domain',
        ),
        'id' => 'ISEMAIL_ERR_DOMAINHYPHENEND',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 806,
        ),
    ),
    ISEMAIL_ERR_UNCLOSEDQUOTEDSTR => array(
        'value' => 145,
        'category' => ISEMAIL_ERR,
        'description' => 'Unclosed quoted string',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'quoted-string',
        ),
        'id' => 'ISEMAIL_ERR_UNCLOSEDQUOTEDSTR',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 813,
        ),
    ),
    ISEMAIL_ERR_UNCLOSEDCOMMENT => array(
        'value' => 146,
        'category' => ISEMAIL_ERR,
        'description' => 'Unclosed comment',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'CFWS',
        ),
        'id' => 'ISEMAIL_ERR_UNCLOSEDCOMMENT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 820,
        ),
    ),
    ISEMAIL_ERR_UNCLOSEDDOMLIT => array(
        'value' => 147,
        'category' => ISEMAIL_ERR,
        'description' => 'Domain literal is missing its closing bracket',
        'smtp' => 'ISEMAIL_META_SMTP_553_512',
        'references' => array(
            0 => 'domain-literal',
        ),
        'id' => 'ISEMAIL_ERR_UNCLOSEDDOMLIT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 827,
        ),
    ),
    ISEMAIL_ERR_FWS_CRLF_X2 => array(
        'value' => 148,
        'category' => ISEMAIL_ERR,
        'description' => 'Folding White Space contains consecutive CRLF sequences',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'CFWS',
        ),
        'id' => 'ISEMAIL_ERR_FWS_CRLF_X2',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 834,
        ),
    ),
    ISEMAIL_ERR_FWS_CRLF_END => array(
        'value' => 149,
        'category' => ISEMAIL_ERR,
        'description' => 'Folding White Space ends with a CRLF sequence',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'CFWS',
        ),
        'id' => 'ISEMAIL_ERR_FWS_CRLF_END',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 841,
        ),
    ),
    ISEMAIL_ERR_CR_NO_LF => array(
        'value' => 150,
        'category' => ISEMAIL_ERR,
        'description' => 'Address contains a carriage return that is not followed by a line feed',
        'smtp' => 'ISEMAIL_META_SMTP_553_513',
        'references' => array(
            0 => 'CFWS',
            1 => 'CRLF',
        ),
        'id' => 'ISEMAIL_ERR_CR_NO_LF',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 848,
        ),
    ),
);
