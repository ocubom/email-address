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
    '' => array(
        'address' => '',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NODOMAIN,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '1',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 40,
        ),
    ),
    'test' => array(
        'address' => 'test',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NODOMAIN,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '2',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 47,
        ),
    ),
    '@' => array(
        'address' => '@',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NOLOCALPART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '3',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 54,
        ),
    ),
    'test@' => array(
        'address' => 'test@',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NODOMAIN,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '4',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 61,
        ),
    ),
    'test@io' => array(
        'address' => 'test@io',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => 'io. currently has an MX-record (Feb 2011). Some DNS setups seem to find it, some don\'t. If you don\'t see the MX for io. then try setting your DNS server to 8.8.8.8 (the Google DNS server)',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '5',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 68,
        ),
    ),
    '@io' => array(
        'address' => '@io',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NOLOCALPART,
            ),
        ),
        'comment' => 'io. currently has an MX-record (Feb 2011)',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '6',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 76,
        ),
    ),
    '@iana.org' => array(
        'address' => '@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NOLOCALPART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '7',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 84,
        ),
    ),
    'test@iana.org' => array(
        'address' => 'test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '8',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 91,
        ),
    ),
    'test@nominet.org.uk' => array(
        'address' => 'test@nominet.org.uk',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '9',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 98,
        ),
    ),
    'test@about.museum' => array(
        'address' => 'test@about.museum',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '10',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 105,
        ),
    ),
    'a@iana.org' => array(
        'address' => 'a@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '11',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 112,
        ),
    ),
    'test@e.com' => array(
        'address' => 'test@e.com',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '12',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 119,
        ),
    ),
    'test@iana.a' => array(
        'address' => 'test@iana.a',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '13',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 126,
        ),
    ),
    'test.test@iana.org' => array(
        'address' => 'test.test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '14',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 133,
        ),
    ),
    '.test@iana.org' => array(
        'address' => '.test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '15',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 140,
        ),
    ),
    'test.@iana.org' => array(
        'address' => 'test.@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_END,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '16',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 147,
        ),
    ),
    'test..iana.org' => array(
        'address' => 'test..iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CONSECUTIVEDOTS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '17',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 154,
        ),
    ),
    'test_exa-mple.com' => array(
        'address' => 'test_exa-mple.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NODOMAIN,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '18',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 161,
        ),
    ),
    '!#$%&`*+/=?^`{|}~@iana.org' => array(
        'address' => '!#$%&`*+/=?^`{|}~@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '19',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 168,
        ),
    ),
    'test\\@test@iana.org' => array(
        'address' => 'test\\@test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '20',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 175,
        ),
    ),
    '123@iana.org' => array(
        'address' => '123@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '21',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 182,
        ),
    ),
    'test@123.com' => array(
        'address' => 'test@123.com',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '22',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 189,
        ),
    ),
    'test@iana.123' => array(
        'address' => 'test@iana.123',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_TLDNUMERIC,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '23',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 196,
        ),
    ),
    'test@255.255.255.255' => array(
        'address' => 'test@255.255.255.255',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_TLDNUMERIC,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '24',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 203,
        ),
    ),
    'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@iana.org' => array(
        'address' => 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '25',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 210,
        ),
    ),
    'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklmn@iana.org' => array(
        'address' => 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklmn@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_LOCAL_TOOLONG,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '26',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 217,
        ),
    ),
    'test@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.com' => array(
        'address' => 'test@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.com',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '27',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 224,
        ),
    ),
    'test@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm.com' => array(
        'address' => 'test@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm.com',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_LABEL_TOOLONG,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '28',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 231,
        ),
    ),
    'test@mason-dixon.com' => array(
        'address' => 'test@mason-dixon.com',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '29',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 238,
        ),
    ),
    'test@-iana.org' => array(
        'address' => 'test@-iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOMAINHYPHENSTART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '30',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 245,
        ),
    ),
    'test@iana-.com' => array(
        'address' => 'test@iana-.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOMAINHYPHENEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '31',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 252,
        ),
    ),
    'test@c--n.com' => array(
        'address' => 'test@c--n.com',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => 'c--n.com currently has an MX-record (May 2011)',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '32',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 259,
        ),
    ),
    'test@iana.co-uk' => array(
        'address' => 'test@iana.co-uk',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '33',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 267,
        ),
    ),
    'test@.iana.org' => array(
        'address' => 'test@.iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '34',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 274,
        ),
    ),
    'test@iana.org.' => array(
        'address' => 'test@iana.org.',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_END,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '35',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 281,
        ),
    ),
    'test@iana..com' => array(
        'address' => 'test@iana..com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CONSECUTIVEDOTS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '36',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 288,
        ),
    ),
    'a@a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v' => array(
        'address' => 'a@a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z.a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '37',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 295,
        ),
    ),
    'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghi' => array(
        'address' => 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghi',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '38',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 302,
        ),
    ),
    'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghij' => array(
        'address' => 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghij',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_TOOLONG,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '39',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 309,
        ),
    ),
    'a@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefg.hij' => array(
        'address' => 'a@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefg.hij',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_TOOLONG,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '40',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 316,
        ),
    ),
    'a@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefg.hijk' => array(
        'address' => 'a@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefg.hijk',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAIN_TOOLONG,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '41',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 323,
        ),
    ),
    '"test"@iana.org' => array(
        'address' => '"test"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '42',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 330,
        ),
    ),
    '""@iana.org' => array(
        'address' => '""@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '43',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 337,
        ),
    ),
    '"""@iana.org' => array(
        'address' => '"""@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '44',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 344,
        ),
    ),
    '"\\a"@iana.org' => array(
        'address' => '"\\a"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '45',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 351,
        ),
    ),
    '"\\""@iana.org' => array(
        'address' => '"\\""@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '46',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 358,
        ),
    ),
    '"\\"@iana.org' => array(
        'address' => '"\\"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDQUOTEDSTR,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '47',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 365,
        ),
    ),
    '"\\\\"@iana.org' => array(
        'address' => '"\\\\"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '48',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 372,
        ),
    ),
    'test"@iana.org' => array(
        'address' => 'test"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '49',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 379,
        ),
    ),
    '"test@iana.org' => array(
        'address' => '"test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDQUOTEDSTR,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '50',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 386,
        ),
    ),
    '"test"test@iana.org' => array(
        'address' => '"test"test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_QS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '51',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 393,
        ),
    ),
    'test"text"@iana.org' => array(
        'address' => 'test"text"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '52',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 400,
        ),
    ),
    '"test""test"@iana.org' => array(
        'address' => '"test""test"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '53',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 407,
        ),
    ),
    '"test"."test"@iana.org' => array(
        'address' => '"test"."test"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_LOCALPART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '54',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 414,
        ),
    ),
    '"test\\ test"@iana.org' => array(
        'address' => '"test\\ test"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '55',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 421,
        ),
    ),
    '"test".test@iana.org' => array(
        'address' => '"test".test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_LOCALPART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '56',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 428,
        ),
    ),
    '"test "@iana.org' => array(
        'address' => '"test "@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_QTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '57',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 435,
        ),
    ),
    '"test\\ "@iana.org' => array(
        'address' => '"test\\ "@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QP,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '58',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 442,
        ),
    ),
    '"abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghj"@iana.org' => array(
        'address' => '"abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghj"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_LOCAL_TOOLONG,
            ),
        ),
        'comment' => 'Quotes are still part of the length restriction',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '59',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 449,
        ),
    ),
    '"abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefg\\h"@iana.org' => array(
        'address' => '"abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefg\\h"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_LOCAL_TOOLONG,
            ),
        ),
        'comment' => 'Quoted pair is still part of the length restriction',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '60',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 457,
        ),
    ),
    'test@[255.255.255.255]' => array(
        'address' => 'test@[255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '61',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 465,
        ),
    ),
    'test@a[255.255.255.255]' => array(
        'address' => 'test@a[255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '62',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 472,
        ),
    ),
    'test@[255.255.255]' => array(
        'address' => 'test@[255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '63',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 479,
        ),
    ),
    'test@[255.255.255.255.255]' => array(
        'address' => 'test@[255.255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '64',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 486,
        ),
    ),
    'test@[255.255.255.256]' => array(
        'address' => 'test@[255.255.255.256]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '65',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 493,
        ),
    ),
    'test@[1111:2222:3333:4444:5555:6666:7777:8888]' => array(
        'address' => 'test@[1111:2222:3333:4444:5555:6666:7777:8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '66',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 500,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666:7777]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666:7777]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_GRPCOUNT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '67',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 507,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:8888]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '68',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 514,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:8888:9999]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:8888:9999]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_GRPCOUNT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '69',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 521,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:888G]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:888G]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_BADCHAR,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '70',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 528,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666::8888]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666::8888]',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_IPV6DEPRECATED,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '71',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 535,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555::8888]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555::8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '72',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 542,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666::7777:8888]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666::7777:8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_MAXGRPS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '73',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 549,
        ),
    ),
    'test@[IPv6::3333:4444:5555:6666:7777:8888]' => array(
        'address' => 'test@[IPv6::3333:4444:5555:6666:7777:8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '74',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 556,
        ),
    ),
    'test@[IPv6:::3333:4444:5555:6666:7777:8888]' => array(
        'address' => 'test@[IPv6:::3333:4444:5555:6666:7777:8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '75',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 563,
        ),
    ),
    'test@[IPv6:1111::4444:5555::8888]' => array(
        'address' => 'test@[IPv6:1111::4444:5555::8888]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '76',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 570,
        ),
    ),
    'test@[IPv6:::]' => array(
        'address' => 'test@[IPv6:::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '77',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 577,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:255.255.255.255]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_GRPCOUNT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '78',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 584,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666:255.255.255.255]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666:255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '79',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 591,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:255.255.255.255]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666:7777:255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_GRPCOUNT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '80',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 598,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444::255.255.255.255]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444::255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '81',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 605,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:5555:6666::255.255.255.255]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:5555:6666::255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_MAXGRPS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '82',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 612,
        ),
    ),
    'test@[IPv6:1111:2222:3333:4444:::255.255.255.255]' => array(
        'address' => 'test@[IPv6:1111:2222:3333:4444:::255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '83',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 619,
        ),
    ),
    'test@[IPv6::255.255.255.255]' => array(
        'address' => 'test@[IPv6::255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '84',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 626,
        ),
    ),
    ' test @iana.org' => array(
        'address' => ' test @iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '85',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 633,
        ),
    ),
    'test@ iana .com' => array(
        'address' => 'test@ iana .com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '86',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 640,
        ),
    ),
    'test . test@iana.org' => array(
        'address' => 'test . test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_FWS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '87',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 647,
        ),
    ),
    '
 test@iana.org' => array(
        'address' => '
 test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_FWS,
            ),
        ),
        'comment' => 'FWS',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '88',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 654,
        ),
    ),
    '
 
 test@iana.org' => array(
        'address' => '
 
 test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_FWS,
            ),
        ),
        'comment' => 'FWS with one line composed entirely of WSP -- only allowed as obsolete FWS (someone might allow only non-obsolete FWS)',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '89',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 662,
        ),
    ),
    '(comment)test@iana.org' => array(
        'address' => '(comment)test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_COMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '90',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 670,
        ),
    ),
    '((comment)test@iana.org' => array(
        'address' => '((comment)test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '91',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 677,
        ),
    ),
    '(comment(comment))test@iana.org' => array(
        'address' => '(comment(comment))test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_COMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '92',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 684,
        ),
    ),
    'test@(comment)iana.org' => array(
        'address' => 'test@(comment)iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '93',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 691,
        ),
    ),
    'test(comment)test@iana.org' => array(
        'address' => 'test(comment)test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '94',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 698,
        ),
    ),
    'test@(comment)[255.255.255.255]' => array(
        'address' => 'test@(comment)[255.255.255.255]',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '95',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 705,
        ),
    ),
    '(comment)abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@iana.org' => array(
        'address' => '(comment)abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghiklm@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_COMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '96',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 712,
        ),
    ),
    'test@(comment)abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.com' => array(
        'address' => 'test@(comment)abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghikl.com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '97',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 719,
        ),
    ),
    '(comment)test@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghik.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghik.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijk.abcdefghijklmnopqrstuvwxyzabcdefghijk.abcdefghijklmnopqrstu' => array(
        'address' => '(comment)test@abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghik.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghik.abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijk.abcdefghijklmnopqrstuvwxyzabcdefghijk.abcdefghijklmnopqrstu',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_COMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '98',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 726,
        ),
    ),
    'test@iana.org
' => array(
        'address' => 'test@iana.org
',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '99',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 733,
        ),
    ),
    'test@xn--hxajbheg2az3al.xn--jxalpdlp' => array(
        'address' => 'test@xn--hxajbheg2az3al.xn--jxalpdlp',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => 'A valid IDN from ICANN\'s IDN TLD evaluation gateway',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '100',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 740,
        ),
    ),
    'xn--test@iana.org' => array(
        'address' => 'xn--test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => 'RFC 3490: "unless the
   email standards are revised to invite the use of IDNA for local
   parts, a domain label that holds the local part of an email address
   SHOULD NOT begin with the ACE prefix, and even if it does, it is to
   be interpreted literally as a local part that happens to begin with
   the ACE prefix"',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '101',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 748,
        ),
    ),
    'test@iana.org-' => array(
        'address' => 'test@iana.org-',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOMAINHYPHENEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '102',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 761,
        ),
    ),
    '(test@iana.org' => array(
        'address' => '(test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '104',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 775,
        ),
    ),
    'test@(iana.org' => array(
        'address' => 'test@(iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '105',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 782,
        ),
    ),
    'test@[1.2.3.4' => array(
        'address' => 'test@[1.2.3.4',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDDOMLIT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '106',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 789,
        ),
    ),
    '"test\\"@iana.org' => array(
        'address' => '"test\\"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDQUOTEDSTR,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '107',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 796,
        ),
    ),
    '(comment\\)test@iana.org' => array(
        'address' => '(comment\\)test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '108',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 803,
        ),
    ),
    'test@iana.org(comment\\)' => array(
        'address' => 'test@iana.org(comment\\)',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '109',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 810,
        ),
    ),
    'test@iana.org(comment\\' => array(
        'address' => 'test@iana.org(comment\\',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_BACKSLASHEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '110',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 817,
        ),
    ),
    'test@[RFC-5322-domain-literal]' => array(
        'address' => 'test@[RFC-5322-domain-literal]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '112',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 824,
        ),
    ),
    'test@[RFC-5322]-domain-literal]' => array(
        'address' => 'test@[RFC-5322]-domain-literal]',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_DOMLIT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '113',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 831,
        ),
    ),
    'test@[RFC-5322-[domain-literal]' => array(
        'address' => 'test@[RFC-5322-[domain-literal]',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_DTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '114',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 838,
        ),
    ),
    'test@[RFC-5322-\\-domain-literal]' => array(
        'address' => 'test@[RFC-5322-\\-domain-literal]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMLIT_OBSDTEXT,
            ),
        ),
        'comment' => 'obs-dtext and obs-qp',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '115',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 845,
        ),
    ),
    'test@[RFC-5322-\\	-domain-literal]' => array(
        'address' => 'test@[RFC-5322-\\	-domain-literal]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMLIT_OBSDTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '116',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 853,
        ),
    ),
    'test@[RFC-5322-\\]-domain-literal]' => array(
        'address' => 'test@[RFC-5322-\\]-domain-literal]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMLIT_OBSDTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '117',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 860,
        ),
    ),
    'test@[RFC-5322-domain-literal\\]' => array(
        'address' => 'test@[RFC-5322-domain-literal\\]',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDDOMLIT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '118',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 867,
        ),
    ),
    'test@[RFC-5322-domain-literal\\' => array(
        'address' => 'test@[RFC-5322-domain-literal\\',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_BACKSLASHEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '119',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 874,
        ),
    ),
    'test@[RFC 5322 domain literal]' => array(
        'address' => 'test@[RFC 5322 domain literal]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => 'Spaces are FWS in a domain literal',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '120',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 881,
        ),
    ),
    'test@[RFC-5322-domain-literal] (comment)' => array(
        'address' => 'test@[RFC-5322-domain-literal] (comment)',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '121',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 889,
        ),
    ),
    '@iana.org' => array(
        'address' => '@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '122',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 896,
        ),
    ),
    'test@.org' => array(
        'address' => 'test@.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '123',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 903,
        ),
    ),
    '""@iana.org' => array(
        'address' => '""@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '124',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 910,
        ),
    ),
    '"\\"@iana.org' => array(
        'address' => '"\\"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QP,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '125',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 917,
        ),
    ),
    '()test@iana.org' => array(
        'address' => '()test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '126',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 924,
        ),
    ),
    'test@iana.org' => array(
        'address' => 'test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CR_NO_LF,
            ),
        ),
        'comment' => 'No LF after the CR',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '127',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 931,
        ),
    ),
    'test@iana.org' => array(
        'address' => 'test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CR_NO_LF,
            ),
        ),
        'comment' => 'No LF after the CR',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '128',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 939,
        ),
    ),
    '"test"@iana.org' => array(
        'address' => '"test"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CR_NO_LF,
            ),
        ),
        'comment' => 'No LF after the CR',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '129',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 947,
        ),
    ),
    '()test@iana.org' => array(
        'address' => '()test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CR_NO_LF,
            ),
        ),
        'comment' => 'No LF after the CR',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '130',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 955,
        ),
    ),
    'test@iana.org()' => array(
        'address' => 'test@iana.org()',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CR_NO_LF,
            ),
        ),
        'comment' => 'No LF after the CR',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '131',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 963,
        ),
    ),
    '
test@iana.org' => array(
        'address' => '
test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '132',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 971,
        ),
    ),
    '"
"@iana.org' => array(
        'address' => '"
"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_QTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '133',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 978,
        ),
    ),
    '"\\
"@iana.org' => array(
        'address' => '"\\
"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QP,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '134',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 985,
        ),
    ),
    '(
)test@iana.org' => array(
        'address' => '(
)test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_CTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '135',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 992,
        ),
    ),
    '@iana.org' => array(
        'address' => '@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '136',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 999,
        ),
    ),
    'test@.org' => array(
        'address' => 'test@.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '137',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1006,
        ),
    ),
    '""@iana.org' => array(
        'address' => '""@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '138',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1013,
        ),
    ),
    '"\\"@iana.org' => array(
        'address' => '"\\"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QP,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '139',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1020,
        ),
    ),
    '()test@iana.org' => array(
        'address' => '()test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CTEXT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '140',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1027,
        ),
    ),
    '
test@iana.org' => array(
        'address' => '
test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not FWS because no actual white space',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '141',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1034,
        ),
    ),
    '
 
test@iana.org' => array(
        'address' => '
 
test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not obs-FWS because there must be white space on each "fold"',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '142',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1042,
        ),
    ),
    ' 
test@iana.org' => array(
        'address' => ' 
test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not FWS because no white space after the fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '143',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1050,
        ),
    ),
    ' 
 test@iana.org' => array(
        'address' => ' 
 test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_FWS,
            ),
        ),
        'comment' => 'FWS',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '144',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1058,
        ),
    ),
    ' 
 
test@iana.org' => array(
        'address' => ' 
 
test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not FWS because no white space after the second fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '145',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1066,
        ),
    ),
    ' 

test@iana.org' => array(
        'address' => ' 

test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_X2,
            ),
        ),
        'comment' => 'Not FWS because no white space after either fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '146',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1074,
        ),
    ),
    ' 

 test@iana.org' => array(
        'address' => ' 

 test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_X2,
            ),
        ),
        'comment' => 'Not FWS because no white space after the first fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '147',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1082,
        ),
    ),
    'test@iana.org
 ' => array(
        'address' => 'test@iana.org
 ',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_FWS,
            ),
        ),
        'comment' => 'FWS',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '148',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1090,
        ),
    ),
    'test@iana.org
 
 ' => array(
        'address' => 'test@iana.org
 
 ',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_FWS,
            ),
        ),
        'comment' => 'FWS with one line composed entirely of WSP -- only allowed as obsolete FWS (someone might allow only non-obsolete FWS)',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '149',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1098,
        ),
    ),
    'test@iana.org
' => array(
        'address' => 'test@iana.org
',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not FWS because no actual white space',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '150',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1106,
        ),
    ),
    'test@iana.org
 
' => array(
        'address' => 'test@iana.org
 
',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not obs-FWS because there must be white space on each "fold"',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '151',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1114,
        ),
    ),
    'test@iana.org 
' => array(
        'address' => 'test@iana.org 
',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not FWS because no white space after the fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '152',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1122,
        ),
    ),
    'test@iana.org 
 ' => array(
        'address' => 'test@iana.org 
 ',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_FWS,
            ),
        ),
        'comment' => 'FWS',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '153',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1130,
        ),
    ),
    'test@iana.org 
 
' => array(
        'address' => 'test@iana.org 
 
',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_END,
            ),
        ),
        'comment' => 'Not FWS because no white space after the second fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '154',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1138,
        ),
    ),
    'test@iana.org 

' => array(
        'address' => 'test@iana.org 

',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_X2,
            ),
        ),
        'comment' => 'Not FWS because no white space after either fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '155',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1146,
        ),
    ),
    'test@iana.org 

 ' => array(
        'address' => 'test@iana.org 

 ',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_X2,
            ),
        ),
        'comment' => 'Not FWS because no white space after the first fold',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '156',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1154,
        ),
    ),
    ' test@iana.org' => array(
        'address' => ' test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_FWS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '157',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1162,
        ),
    ),
    'test@iana.org ' => array(
        'address' => 'test@iana.org ',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_FWS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '158',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1169,
        ),
    ),
    'test@[IPv6:1::2:]' => array(
        'address' => 'test@[IPv6:1::2:]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '159',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1176,
        ),
    ),
    '"test\\©"@iana.org' => array(
        'address' => '"test\\©"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_QPAIR,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '160',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1183,
        ),
    ),
    'test@iana/icann.org' => array(
        'address' => 'test@iana/icann.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAIN,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '161',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1190,
        ),
    ),
    'test.(comment)test@iana.org' => array(
        'address' => 'test.(comment)test@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_COMMENT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '165',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1197,
        ),
    ),
    'test@org' => array(
        'address' => 'test@org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_TLD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '166',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1204,
        ),
    ),
    'test@test.com' => array(
        'address' => 'test@test.com',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => 'test.com has an A-record but not an MX-record (as a 2014-09-14 has an MX-record)',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '167',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1211,
        ),
    ),
    'test@nic.no' => array(
        'address' => 'test@nic.no',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => 'nic.no currently has no MX-records or A-records (Feb 2011). If you are seeing an A-record for nic.io then try setting your DNS server to 8.8.8.8 (the Google DNS server) - your DNS server may be faking an A-record (OpenDNS does this, for instance).',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '168',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests.xml'),
            'line' => 1219,
        ),
    ),
    'cal(woo(yay)hoopla)@iamcal.com' => array(
        'address' => 'cal(woo(yay)hoopla)@iamcal.com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'A valid address containing comments',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '165',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1282,
        ),
    ),
    'cal(foo\\@bar)@iamcal.com' => array(
        'address' => 'cal(foo\\@bar)@iamcal.com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'A valid address containing comments',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '166',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1290,
        ),
    ),
    'cal(foo\\)bar)@iamcal.com' => array(
        'address' => 'cal(foo\\)bar)@iamcal.com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'A valid address containing comments and an escaped parenthesis',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '167',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1298,
        ),
    ),
    'cal(foo(bar)@iamcal.com' => array(
        'address' => 'cal(foo(bar)@iamcal.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => 'Unclosed parenthesis in comment',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '168',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1306,
        ),
    ),
    'cal(foo)bar)@iamcal.com' => array(
        'address' => 'cal(foo)bar)@iamcal.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => 'Too many closing parentheses',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '169',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1314,
        ),
    ),
    'cal(foo\\)@iamcal.com' => array(
        'address' => 'cal(foo\\)@iamcal.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => 'Backslash at end of comment has nothing to escape',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '170',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1322,
        ),
    ),
    'first().last@iana.org' => array(
        'address' => 'first().last@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_LOCALPART,
            ),
        ),
        'comment' => 'A valid address containing an empty comment',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '171',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1330,
        ),
    ),
    'first.(
 middle
 )last@iana.org' => array(
        'address' => 'first.(
 middle
 )last@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_COMMENT,
            ),
        ),
        'comment' => 'Comment with folding white space',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '172',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1338,
        ),
    ),
    'first(12345678901234567890123456789012345678901234567890)last@(1234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890)iana.org' => array(
        'address' => 'first(12345678901234567890123456789012345678901234567890)last@(1234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890)iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => 'Too long with comments, not too long without',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '173',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1346,
        ),
    ),
    'first(Welcome to
 the ("wonderful" (!)) world
 of email)@iana.org' => array(
        'address' => 'first(Welcome to
 the ("wonderful" (!)) world
 of email)@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'Silly example from my blog post',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '174',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1354,
        ),
    ),
    'pete(his account)@silly.test(his host)' => array(
        'address' => 'pete(his account)@silly.test(his host)',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'Canonical example from RFC 5322',
        'credit' => array(
            'name' => 'RFC 5322',
            'link' => 'http://tools.ietf.org/html/rfc5322',
        ),
        'id' => '175',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1362,
        ),
    ),
    'c@(Chris\'s host.)public.example' => array(
        'address' => 'c@(Chris\'s host.)public.example',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'Canonical example from RFC 5322',
        'credit' => array(
            'name' => 'RFC 5322',
            'link' => 'http://tools.ietf.org/html/rfc5322',
        ),
        'id' => '176',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1370,
        ),
    ),
    'jdoe@machine(comment).  example' => array(
        'address' => 'jdoe@machine(comment).  example',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_FWS,
            ),
        ),
        'comment' => 'Canonical example from RFC 5322',
        'credit' => array(
            'name' => 'RFC 5322',
            'link' => 'http://tools.ietf.org/html/rfc5322',
        ),
        'id' => '177',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1378,
        ),
    ),
    '1234   @   local(blah)  .machine .example' => array(
        'address' => '1234   @   local(blah)  .machine .example',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'Canonical example from RFC 5322',
        'credit' => array(
            'name' => 'RFC 5322',
            'link' => 'http://tools.ietf.org/html/rfc5322',
        ),
        'id' => '178',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1386,
        ),
    ),
    'first(middle)last@iana.org' => array(
        'address' => 'first(middle)last@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => 'Can\'t have a comment or white space except at an element boundary',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '179',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1394,
        ),
    ),
    'first(abc.def).last@iana.org' => array(
        'address' => 'first(abc.def).last@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_LOCALPART,
            ),
        ),
        'comment' => 'Comment can contain a dot',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '180',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1402,
        ),
    ),
    'first(a"bc.def).last@iana.org' => array(
        'address' => 'first(a"bc.def).last@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_LOCALPART,
            ),
        ),
        'comment' => 'Comment can contain double quote',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '181',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1410,
        ),
    ),
    'first.(")middle.last(")@iana.org' => array(
        'address' => 'first.(")middle.last(")@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'Comment can contain a quote',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '182',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1418,
        ),
    ),
    'first(abc("def".ghi).mno)middle(abc("def".ghi).mno).last@(abc("def".ghi).mno)example(abc("def".ghi).mno).(abc("def".ghi).mno)com(abc("def".ghi).mno)' => array(
        'address' => 'first(abc("def".ghi).mno)middle(abc("def".ghi).mno).last@(abc("def".ghi).mno)example(abc("def".ghi).mno).(abc("def".ghi).mno)com(abc("def".ghi).mno)',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => 'Can\'t have comments or white space except at an element boundary',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '183',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1426,
        ),
    ),
    'first(abc\\(def)@iana.org' => array(
        'address' => 'first(abc\\(def)@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'Comment can contain quoted-pair',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '184',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1434,
        ),
    ),
    'first.last@iana(1234567890123456789012345678901234567890123456789012345678901234567890).org' => array(
        'address' => 'first.last@iana(1234567890123456789012345678901234567890123456789012345678901234567890).org',
        'analysis' => array(
            'category' => ISEMAIL_CFWS,
            'diagnosis' => array(
                0 => ISEMAIL_CFWS_COMMENT,
            ),
        ),
        'comment' => 'Label is longer than 63 octets, but not with comment removed',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '185',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1442,
        ),
    ),
    'a(a(b(c)d(e(f))g)h(i)j)@iana.org' => array(
        'address' => 'a(a(b(c)d(e(f))g)h(i)j)@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '186',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1450,
        ),
    ),
    'a(a(b(c)d(e(f))g)(h(i)j)@iana.org' => array(
        'address' => 'a(a(b(c)d(e(f))g)(h(i)j)@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_UNCLOSEDCOMMENT,
            ),
        ),
        'comment' => 'Braces are not properly matched',
        'credit' => array(
            'name' => 'Cal Henderson',
            'link' => 'http://code.iamcal.com/php/rfc822/',
        ),
        'id' => '187',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1457,
        ),
    ),
    'name.lastname@domain.com' => array(
        'address' => 'name.lastname@domain.com',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '188',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1465,
        ),
    ),
    '.@' => array(
        'address' => '.@',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '189',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1472,
        ),
    ),
    'a@b' => array(
        'address' => 'a@b',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_TLD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '190',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1479,
        ),
    ),
    '@bar.com' => array(
        'address' => '@bar.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NOLOCALPART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '191',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1486,
        ),
    ),
    '@@bar.com' => array(
        'address' => '@@bar.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NOLOCALPART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '192',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1493,
        ),
    ),
    'a@bar.com' => array(
        'address' => 'a@bar.com',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_MX_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '193',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1500,
        ),
    ),
    'aaa.com' => array(
        'address' => 'aaa.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_NODOMAIN,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '194',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1507,
        ),
    ),
    'aaa@.com' => array(
        'address' => 'aaa@.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '195',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1514,
        ),
    ),
    'aaa@.123' => array(
        'address' => 'aaa@.123',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '196',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1521,
        ),
    ),
    'aaa@[123.123.123.123]' => array(
        'address' => 'aaa@[123.123.123.123]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '197',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1528,
        ),
    ),
    'aaa@[123.123.123.123]a' => array(
        'address' => 'aaa@[123.123.123.123]a',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_DOMLIT,
            ),
        ),
        'comment' => 'extra data outside address-literal',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '198',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1535,
        ),
    ),
    'aaa@[123.123.123.333]' => array(
        'address' => 'aaa@[123.123.123.333]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_DOMAINLITERAL,
            ),
        ),
        'comment' => 'not a valid IP',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '199',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1543,
        ),
    ),
    'a@bar.com.' => array(
        'address' => 'a@bar.com.',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_END,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '200',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1551,
        ),
    ),
    'a@bar' => array(
        'address' => 'a@bar',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_TLD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '201',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1558,
        ),
    ),
    'a-b@bar.com' => array(
        'address' => 'a-b@bar.com',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_MX_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '202',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1565,
        ),
    ),
    '+@b.c' => array(
        'address' => '+@b.c',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => 'TLDs can be any length',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '203',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1572,
        ),
    ),
    '+@b.com' => array(
        'address' => '+@b.com',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '204',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1580,
        ),
    ),
    'a@-b.com' => array(
        'address' => 'a@-b.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOMAINHYPHENSTART,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '205',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1587,
        ),
    ),
    'a@b-.com' => array(
        'address' => 'a@b-.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOMAINHYPHENEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '206',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1594,
        ),
    ),
    '-@..com' => array(
        'address' => '-@..com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '207',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1601,
        ),
    ),
    '-@a..com' => array(
        'address' => '-@a..com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_CONSECUTIVEDOTS,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '208',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1608,
        ),
    ),
    'a@b.co-foo.uk' => array(
        'address' => 'a@b.co-foo.uk',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '209',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1615,
        ),
    ),
    '"hello my name is"@stutter.com' => array(
        'address' => '"hello my name is"@stutter.com',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '210',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1622,
        ),
    ),
    '"Test \\"Fail\\" Ing"@iana.org' => array(
        'address' => '"Test \\"Fail\\" Ing"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '211',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1629,
        ),
    ),
    'valid@about.museum' => array(
        'address' => 'valid@about.museum',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '212',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1636,
        ),
    ),
    'invalid@about.museum-' => array(
        'address' => 'invalid@about.museum-',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOMAINHYPHENEND,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '213',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1643,
        ),
    ),
    'shaitan@my-domain.thisisminekthx' => array(
        'address' => 'shaitan@my-domain.thisisminekthx',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => 'Disagree with Paul Gregg here',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '214',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1650,
        ),
    ),
    'test@...........com' => array(
        'address' => 'test@...........com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_DOT_START,
            ),
        ),
        'comment' => '......',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '215',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1658,
        ),
    ),
    'foobar@192.168.0.1' => array(
        'address' => 'foobar@192.168.0.1',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_TLDNUMERIC,
            ),
        ),
        'comment' => 'ip need to be []',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '216',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1666,
        ),
    ),
    '"Joe\\\\Blow"@iana.org' => array(
        'address' => '"Joe\\\\Blow"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '217',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1674,
        ),
    ),
    'Invalid \\
 Folding \\
 Whitespace@iana.org' => array(
        'address' => 'Invalid \\
 Folding \\
 Whitespace@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => 'Even obs-local-part doesn\'t allow CFWS in the middle of an atom',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '218',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1681,
        ),
    ),
    'HM2Kinsists@(that comments are allowed)this.is.ok' => array(
        'address' => 'HM2Kinsists@(that comments are allowed)this.is.ok',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '219',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1689,
        ),
    ),
    'user%uucp!path@berkeley.edu' => array(
        'address' => 'user%uucp!path@berkeley.edu',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Paul Gregg',
            'link' => 'http://pgregg.com/projects/php/code/showvalidemail.php',
        ),
        'id' => '220',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1696,
        ),
    ),
    '"first(last)"@iana.org' => array(
        'address' => '"first(last)"@iana.org',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_QUOTEDSTRING,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '221',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1703,
        ),
    ),
    ' 
 (
 x 
 ) 
 first
 ( 
 x
 ) 
 .
 ( 
 x) 
 last 
 (  x 
 ) 
 @iana.org' => array(
        'address' => ' 
 (
 x 
 ) 
 first
 ( 
 x
 ) 
 .
 ( 
 x) 
 last 
 (  x 
 ) 
 @iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => '',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '222',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1710,
        ),
    ),
    'first.last @iana.org' => array(
        'address' => 'first.last @iana.org',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_CFWS_NEAR_AT,
            ),
        ),
        'comment' => 'FWS is allowed after local part (this is similar to #152 but is the test proposed by John Kloor)',
        'credit' => array(
            'name' => 'John Kloor',
            'link' => 'http://isemail.info',
        ),
        'id' => '223',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1717,
        ),
    ),
    'test. 
 
 obs@syntax.com' => array(
        'address' => 'test. 
 
 obs@syntax.com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_FWS,
            ),
        ),
        'comment' => 'obs-fws allows multiple lines (test 2: space before break)',
        'credit' => array(
            'name' => 'George Pollard',
            'link' => 'http://porg.es/blog/properly-validating-e-mail-addresses',
        ),
        'id' => '224',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1725,
        ),
    ),
    'test.

 obs@syntax.com' => array(
        'address' => 'test.

 obs@syntax.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_FWS_CRLF_X2,
            ),
        ),
        'comment' => 'obs-fws must have at least one WSP per line',
        'credit' => array(
            'name' => 'George Pollard',
            'link' => 'http://porg.es/blog/properly-validating-e-mail-addresses',
        ),
        'id' => '225',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1733,
        ),
    ),
    '"Unicode NULL \\ "@char.com' => array(
        'address' => '"Unicode NULL \\ "@char.com',
        'analysis' => array(
            'category' => ISEMAIL_DEPREC,
            'diagnosis' => array(
                0 => ISEMAIL_DEPREC_QP,
            ),
        ),
        'comment' => 'Can have escaped Unicode Character \'NULL\' (U+0000)',
        'credit' => array(
            'name' => 'George Pollard',
            'link' => 'http://porg.es/blog/properly-validating-e-mail-addresses',
        ),
        'id' => '226',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1741,
        ),
    ),
    '"Unicode NULL  "@char.com' => array(
        'address' => '"Unicode NULL  "@char.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_QTEXT,
            ),
        ),
        'comment' => 'Cannot have unescaped Unicode Character \'NULL\' (U+0000)',
        'credit' => array(
            'name' => 'George Pollard',
            'link' => 'http://porg.es/blog/properly-validating-e-mail-addresses',
        ),
        'id' => '227',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1749,
        ),
    ),
    'Unicode NULL \\ @char.com' => array(
        'address' => 'Unicode NULL \\ @char.com',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_ATEXT_AFTER_CFWS,
            ),
        ),
        'comment' => 'Escaped Unicode Character \'NULL\' (U+0000) must be in quoted string',
        'credit' => array(
            'name' => 'George Pollard',
            'link' => 'http://porg.es/blog/properly-validating-e-mail-addresses',
        ),
        'id' => '228',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1757,
        ),
    ),
    'cdburgess+!#$%&\'*-/=?+_{}|~test@gmail.com' => array(
        'address' => 'cdburgess+!#$%&\'*-/=?+_{}|~test@gmail.com',
        'analysis' => array(
            'category' => ISEMAIL_VALID_CATEGORY,
            'diagnosis' => array(
                0 => ISEMAIL_VALID,
            ),
        ),
        'comment' => 'Example given in comments',
        'credit' => array(
            'name' => 'cdburgess',
            'link' => 'http://isemail.info/#comment-30024957',
        ),
        'id' => '229',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1765,
        ),
    ),
    'first.last@[IPv6:::a2:a3:a4:b1:b2:b3:b4]' => array(
        'address' => 'first.last@[IPv6:::a2:a3:a4:b1:b2:b3:b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_IPV6DEPRECATED,
            ),
        ),
        'comment' => ':: only elides one zero group (IPv6 authority is RFC 4291)',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '230',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1773,
        ),
    ),
    'first.last@[IPv6:a1:a2:a3:a4:b1:b2:b3::]' => array(
        'address' => 'first.last@[IPv6:a1:a2:a3:a4:b1:b2:b3::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_IPV6DEPRECATED,
            ),
        ),
        'comment' => ':: only elides one zero group (IPv6 authority is RFC 4291)',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '231',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1781,
        ),
    ),
    'first.last@[IPv6::]' => array(
        'address' => 'first.last@[IPv6::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '232',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1789,
        ),
    ),
    'first.last@[IPv6:::]' => array(
        'address' => 'first.last@[IPv6:::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '233',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1797,
        ),
    ),
    'first.last@[IPv6::::]' => array(
        'address' => 'first.last@[IPv6::::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '234',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1805,
        ),
    ),
    'first.last@[IPv6::b4]' => array(
        'address' => 'first.last@[IPv6::b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '235',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1813,
        ),
    ),
    'first.last@[IPv6:::b4]' => array(
        'address' => 'first.last@[IPv6:::b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '236',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1821,
        ),
    ),
    'first.last@[IPv6::::b4]' => array(
        'address' => 'first.last@[IPv6::::b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '237',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1829,
        ),
    ),
    'first.last@[IPv6::b3:b4]' => array(
        'address' => 'first.last@[IPv6::b3:b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '238',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1837,
        ),
    ),
    'first.last@[IPv6:::b3:b4]' => array(
        'address' => 'first.last@[IPv6:::b3:b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '239',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1845,
        ),
    ),
    'first.last@[IPv6::::b3:b4]' => array(
        'address' => 'first.last@[IPv6::::b3:b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '240',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1853,
        ),
    ),
    'first.last@[IPv6:a1::b4]' => array(
        'address' => 'first.last@[IPv6:a1::b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '241',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1861,
        ),
    ),
    'first.last@[IPv6:a1:::b4]' => array(
        'address' => 'first.last@[IPv6:a1:::b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '242',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1869,
        ),
    ),
    'first.last@[IPv6:a1:]' => array(
        'address' => 'first.last@[IPv6:a1:]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONEND,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '243',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1877,
        ),
    ),
    'first.last@[IPv6:a1::]' => array(
        'address' => 'first.last@[IPv6:a1::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '244',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1885,
        ),
    ),
    'first.last@[IPv6:a1:::]' => array(
        'address' => 'first.last@[IPv6:a1:::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '245',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1893,
        ),
    ),
    'first.last@[IPv6:a1:a2:]' => array(
        'address' => 'first.last@[IPv6:a1:a2:]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONEND,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '246',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1901,
        ),
    ),
    'first.last@[IPv6:a1:a2::]' => array(
        'address' => 'first.last@[IPv6:a1:a2::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '247',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1909,
        ),
    ),
    'first.last@[IPv6:a1:a2:::]' => array(
        'address' => 'first.last@[IPv6:a1:a2:::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '248',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1917,
        ),
    ),
    'first.last@[IPv6:0123:4567:89ab:cdef::]' => array(
        'address' => 'first.last@[IPv6:0123:4567:89ab:cdef::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '249',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1925,
        ),
    ),
    'first.last@[IPv6:0123:4567:89ab:CDEF::]' => array(
        'address' => 'first.last@[IPv6:0123:4567:89ab:CDEF::]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '250',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1933,
        ),
    ),
    'first.last@[IPv6:::a3:a4:b1:ffff:11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:::a3:a4:b1:ffff:11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '251',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1941,
        ),
    ),
    'first.last@[IPv6:::a2:a3:a4:b1:ffff:11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:::a2:a3:a4:b1:ffff:11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_IPV6DEPRECATED,
            ),
        ),
        'comment' => ':: only elides one zero group (IPv6 authority is RFC 4291)',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '252',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1949,
        ),
    ),
    'first.last@[IPv6:a1:a2:a3:a4::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1:a2:a3:a4::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '253',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1957,
        ),
    ),
    'first.last@[IPv6:a1:a2:a3:a4:b1::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1:a2:a3:a4:b1::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_IPV6DEPRECATED,
            ),
        ),
        'comment' => ':: only elides one zero group (IPv6 authority is RFC 4291)',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '254',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1965,
        ),
    ),
    'first.last@[IPv6::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '255',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1973,
        ),
    ),
    'first.last@[IPv6::::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6::::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '256',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1981,
        ),
    ),
    'first.last@[IPv6:a1:11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1:11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_GRPCOUNT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '257',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1989,
        ),
    ),
    'first.last@[IPv6:a1::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '258',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 1997,
        ),
    ),
    'first.last@[IPv6:a1:::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1:::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '259',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2005,
        ),
    ),
    'first.last@[IPv6:a1:a2::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1:a2::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '260',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2013,
        ),
    ),
    'first.last@[IPv6:a1:a2:::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1:a2:::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '261',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2021,
        ),
    ),
    'first.last@[IPv6:0123:4567:89ab:cdef::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:0123:4567:89ab:cdef::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '262',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2029,
        ),
    ),
    'first.last@[IPv6:0123:4567:89ab:cdef::11.22.33.xx]' => array(
        'address' => 'first.last@[IPv6:0123:4567:89ab:cdef::11.22.33.xx]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_BADCHAR,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '263',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2037,
        ),
    ),
    'first.last@[IPv6:0123:4567:89ab:CDEF::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:0123:4567:89ab:CDEF::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '264',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2045,
        ),
    ),
    'first.last@[IPv6:0123:4567:89ab:CDEFF::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:0123:4567:89ab:CDEFF::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_BADCHAR,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '265',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2053,
        ),
    ),
    'first.last@[IPv6:a1::a4:b1::b4:11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1::a4:b1::b4:11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '266',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2061,
        ),
    ),
    'first.last@[IPv6:a1::11.22.33]' => array(
        'address' => 'first.last@[IPv6:a1::11.22.33]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_BADCHAR,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '267',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2069,
        ),
    ),
    'first.last@[IPv6:a1::11.22.33.44.55]' => array(
        'address' => 'first.last@[IPv6:a1::11.22.33.44.55]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_BADCHAR,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '268',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2077,
        ),
    ),
    'first.last@[IPv6:a1::b211.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1::b211.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_BADCHAR,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '269',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2085,
        ),
    ),
    'first.last@[IPv6:a1::b2:11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1::b2:11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5321,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5321_ADDRESSLITERAL,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '270',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2093,
        ),
    ),
    'first.last@[IPv6:a1::b2::11.22.33.44]' => array(
        'address' => 'first.last@[IPv6:a1::b2::11.22.33.44]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_2X2XCOLON,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '271',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2101,
        ),
    ),
    'first.last@[IPv6:a1::b3:]' => array(
        'address' => 'first.last@[IPv6:a1::b3:]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONEND,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '272',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2109,
        ),
    ),
    'first.last@[IPv6::a2::b4]' => array(
        'address' => 'first.last@[IPv6::a2::b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '273',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2117,
        ),
    ),
    'first.last@[IPv6:a1:a2:a3:a4:b1:b2:b3:]' => array(
        'address' => 'first.last@[IPv6:a1:a2:a3:a4:b1:b2:b3:]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONEND,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '274',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2125,
        ),
    ),
    'first.last@[IPv6::a2:a3:a4:b1:b2:b3:b4]' => array(
        'address' => 'first.last@[IPv6::a2:a3:a4:b1:b2:b3:b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_COLONSTRT,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Dominic Sayers',
            'link' => 'http://isemail.info',
        ),
        'id' => '275',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2133,
        ),
    ),
    'first.last@[IPv6:a1:a2:a3:a4::b1:b2:b3:b4]' => array(
        'address' => 'first.last@[IPv6:a1:a2:a3:a4::b1:b2:b3:b4]',
        'analysis' => array(
            'category' => ISEMAIL_RFC5322,
            'diagnosis' => array(
                0 => ISEMAIL_RFC5322_IPV6_MAXGRPS,
            ),
        ),
        'comment' => 'IPv6 authority is RFC 4291',
        'credit' => array(
            'name' => 'Daniel Marschall',
            'link' => 'http://isemail.info',
        ),
        'id' => '276',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2141,
        ),
    ),
    'test@example.com
' => array(
        'address' => 'test@example.com
',
        'analysis' => array(
            'category' => ISEMAIL_ERR,
            'diagnosis' => array(
                0 => ISEMAIL_ERR_EXPECTING_ATEXT,
            ),
        ),
        'comment' => 'Address has a newline at the end',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '278',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2157,
        ),
    ),
    'test@xn--example.com' => array(
        'address' => 'test@xn--example.com',
        'analysis' => array(
            'category' => ISEMAIL_DNSWARN,
            'diagnosis' => array(
                0 => ISEMAIL_DNSWARN_NO_RECORD,
            ),
        ),
        'comment' => 'Address is at an Internationalized Domain Name (Punycode)',
        'credit' => array(
            'name' => 'Michael Rushton',
            'link' => 'http://squiloople.com/tag/email/',
        ),
        'id' => '279',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/tests-original.xml'),
            'line' => 2165,
        ),
    ),
);
