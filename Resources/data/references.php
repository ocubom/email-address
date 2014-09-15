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
    'local-part' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   local-part      =   dot-atom / quoted-string / obs-local-part

   dot-atom        =   [CFWS] dot-atom-text [CFWS]

   dot-atom-text   =   1*atext *("." 1*atext)

   quoted-string   =   [CFWS]
                       DQUOTE *([FWS] qcontent) [FWS] DQUOTE
                       [CFWS]

   obs-local-part  =   word *("." word)

   word            =   atom / quoted-string

   atom            =   [CFWS] 1*atext [CFWS]',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'local-part',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 68,
        ),
    ),
    'local-part-maximum' => array(
        'cite' => 'RFC 5322 section 4.5.3.1.1',
        'quote' => '
   The maximum total length of a user name or other local-part is 64
   octets.',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.5.3.1.1',
        'id' => 'local-part-maximum',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 87,
        ),
    ),
    'obs-local-part' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   obs-local-part  =   word *("." word)

   word            =   atom / quoted-string

   atom            =   [CFWS] 1*atext [CFWS]

   quoted-string   =   [CFWS]
                       DQUOTE *([FWS] qcontent) [FWS] DQUOTE
                       [CFWS]
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'obs-local-part',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 93,
        ),
    ),
    'dot-atom' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   dot-atom        =   [CFWS] dot-atom-text [CFWS]

   dot-atom-text   =   1*atext *("." 1*atext)
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'dot-atom',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 107,
        ),
    ),
    'quoted-string' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   quoted-string   =   [CFWS]
                       DQUOTE *([FWS] qcontent) [FWS] DQUOTE
                       [CFWS]

   qcontent        =   qtext / quoted-pair

   qtext           =   %d33 /             ; Printable US-ASCII
                       %d35-91 /          ;  characters not including
                       %d93-126 /         ;  "\\" or the quote character
                       obs-qtext

   quoted-pair     =   ("\\" (VCHAR / WSP)) / obs-qp
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'quoted-string',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 115,
        ),
    ),
    'CFWS-near-at' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   Comments and folding white space
   SHOULD NOT be used around the "@" in the addr-spec.
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'CFWS-near-at',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 132,
        ),
    ),
    'SHOULD-NOT' => array(
        'cite' => 'RFC 2119 section 4',
        'quote' => '
 4. SHOULD NOT   This phrase, or the phrase "NOT RECOMMENDED" mean that
    there may exist valid reasons in particular circumstances when the
    particular behavior is acceptable or even useful, but the full
    implications should be understood and the case carefully weighed
    before implementing any behavior described with this label.
',
        'link' => 'http://tools.ietf.org/html/rfc2119',
        'id' => 'SHOULD-NOT',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 139,
        ),
    ),
    'atext' => array(
        'cite' => 'RFC 5322 section 3.2.3',
        'quote' => '
    atext           =   ALPHA / DIGIT /    ; Printable US-ASCII
                        "!" / "#" /        ;  characters not including
                        "$" / "%" /        ;  specials.  Used for atoms.
                        "&" / "\'" /
                        "*" / "+" /
                        "-" / "/" /
                        "=" / "?" /
                        "^" / "_" /
                        "`" / "{" /
                        "|" / "}" /
                        "~"
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.2.3',
        'id' => 'atext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 149,
        ),
    ),
    'obs-domain' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   obs-domain      =   atom *("." atom)

   atom            =   [CFWS] 1*atext [CFWS]
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'obs-domain',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 165,
        ),
    ),
    'domain-RFC5322' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   domain          =   dot-atom / domain-literal / obs-domain

   dot-atom        =   [CFWS] dot-atom-text [CFWS]

   dot-atom-text   =   1*atext *("." 1*atext)
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'domain-RFC5322',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 173,
        ),
    ),
    'domain-RFC5321' => array(
        'cite' => 'RFC 5321 section 4.1.2',
        'quote' => '
   Domain         = sub-domain *("." sub-domain)
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.1.2',
        'id' => 'domain-RFC5321',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 183,
        ),
    ),
    'sub-domain' => array(
        'cite' => 'RFC 5321 section 4.1.2',
        'quote' => '
   Domain         = sub-domain *("." sub-domain)

   Let-dig        = ALPHA / DIGIT

   Ldh-str        = *( ALPHA / DIGIT / "-" ) Let-dig
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.1.2',
        'id' => 'sub-domain',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 189,
        ),
    ),
    'label' => array(
        'cite' => 'RFC 5321 section 4.1.2',
        'quote' => '
   labels          63 octets or less
',
        'link' => 'http://tools.ietf.org/html/rfc1035#section-2.3.4',
        'id' => 'label',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 199,
        ),
    ),
    'CRLF' => array(
        'cite' => 'RFC 5234 section 2.3',
        'quote' => '
   CRLF        =  %d13.10
',
        'link' => 'http://tools.ietf.org/html/rfc5234#section-2.3',
        'id' => 'CRLF',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 205,
        ),
    ),
    'CFWS' => array(
        'cite' => 'RFC 5322 section 3.2.2',
        'quote' => '
   CFWS            =   (1*([FWS] comment) [FWS]) / FWS

   FWS             =   ([*WSP CRLF] 1*WSP) /  obs-FWS
                                          ; Folding white space

   comment         =   "(" *([FWS] ccontent) [FWS] ")"

   ccontent        =   ctext / quoted-pair / comment

   ctext           =   %d33-39 /          ; Printable US-ASCII
                       %d42-91 /          ;  characters not including
                       %d93-126 /         ;  "(", ")", or "\\"
                       obs-ctext
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.2.2',
        'id' => 'CFWS',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 211,
        ),
    ),
    'domain-literal' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   domain-literal  =   [CFWS] "[" *([FWS] dtext) [FWS] "]" [CFWS]
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'domain-literal',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 229,
        ),
    ),
    'address-literal' => array(
        'cite' => 'RFC 5321 section 4.1.2',
        'quote' => '
   address-literal  = "[" ( IPv4-address-literal /
                    IPv6-address-literal /
                    General-address-literal ) "]"
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.1.2',
        'id' => 'address-literal',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 235,
        ),
    ),
    'address-literal-IPv4' => array(
        'cite' => 'RFC 5321 section 4.1.3',
        'quote' => '
   IPv4-address-literal  = Snum 3("."  Snum)

   Snum           = 1*3DIGIT
                  ; representing a decimal integer
                  ; value in the range 0 through 255
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.1.3',
        'id' => 'address-literal-IPv4',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 243,
        ),
    ),
    'address-literal-IPv6' => array(
        'cite' => 'RFC 5321 section 4.1.3',
        'quote' => '
   IPv6-address-literal  = "IPv6:" IPv6-addr

   IPv6-addr      = IPv6-full / IPv6-comp / IPv6v4-full / IPv6v4-comp

   IPv6-hex       = 1*4HEXDIG

   IPv6-full      = IPv6-hex 7(":" IPv6-hex)

   IPv6-comp      = [IPv6-hex *5(":" IPv6-hex)] "::"
                  [IPv6-hex *5(":" IPv6-hex)]
                  ; The "::" represents at least 2 16-bit groups of
                  ; zeros.  No more than 6 groups in addition to the
                  ; "::" may be present.

   IPv6v4-full    = IPv6-hex 5(":" IPv6-hex) ":" IPv4-address-literal

   IPv6v4-comp    = [IPv6-hex *3(":" IPv6-hex)] "::"
                  [IPv6-hex *3(":" IPv6-hex) ":"]
                  IPv4-address-literal
                  ; The "::" represents at least 2 16-bit groups of
                  ; zeros.  No more than 4 groups in addition to the
                  ; "::" and IPv4-address-literal may be present.
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.1.3',
        'id' => 'address-literal-IPv6',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 253,
        ),
    ),
    'dtext' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   dtext           =   %d33-90 /          ; Printable US-ASCII
                       %d94-126 /         ;  characters not including
                       obs-dtext          ;  "[", "]", or "\\"
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'dtext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 280,
        ),
    ),
    'obs-dtext' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   obs-dtext       =   obs-NO-WS-CTL / quoted-pair

   obs-NO-WS-CTL   =   %d1-8 /            ; US-ASCII control
                       %d11 /             ;  characters that do not
                       %d12 /             ;  include the carriage
                       %d14-31 /          ;  return, line feed, and
                       %d127              ;  white space characters
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'obs-dtext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 288,
        ),
    ),
    'qtext' => array(
        'cite' => 'RFC 5322 section 3.2.4',
        'quote' => '
   qtext           =   %d33 /             ; Printable US-ASCII
                       %d35-91 /          ;  characters not including
                       %d93-126 /         ;  "\\" or the quote character
                       obs-qtext
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.2.4',
        'id' => 'qtext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 300,
        ),
    ),
    'obs-qtext' => array(
        'cite' => 'RFC 5322 section 4.1',
        'quote' => '
   obs-qtext       =   obs-NO-WS-CTL

   obs-NO-WS-CTL   =   %d1-8 /            ; US-ASCII control
                       %d11 /             ;  characters that do not
                       %d12 /             ;  include the carriage
                       %d14-31 /          ;  return, line feed, and
                       %d127              ;  white space characters
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-4.1',
        'id' => 'obs-qtext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 309,
        ),
    ),
    'ctext' => array(
        'cite' => 'RFC 5322 section 3.2.3',
        'quote' => '
   ctext           =   %d33-39 /          ; Printable US-ASCII
                       %d42-91 /          ;  characters not including
                       %d93-126 /         ;  "(", ")", or "\\"
                       obs-ctext
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.2.3',
        'id' => 'ctext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 321,
        ),
    ),
    'obs-ctext' => array(
        'cite' => 'RFC 5322 section 4.1',
        'quote' => '
   obs-qtext       =   obs-NO-WS-CTL

   obs-NO-WS-CTL   =   %d1-8 /            ; US-ASCII control
                       %d11 /             ;  characters that do not
                       %d12 /             ;  include the carriage
                       %d14-31 /          ;  return, line feed, and
                       %d127              ;  white space characters
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-4.1',
        'id' => 'obs-ctext',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 330,
        ),
    ),
    'quoted-pair' => array(
        'cite' => 'RFC 5322 section 3.2.1',
        'quote' => '
   quoted-pair     =   ("\\" (VCHAR / WSP)) / obs-qp

   VCHAR           =  %d33-126            ; visible (printing) characters
   WSP             =  SP / HTAB           ; white space
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.2.1',
        'id' => 'quoted-pair',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 342,
        ),
    ),
    'obs-qp' => array(
        'cite' => 'RFC 5322 section 4.1',
        'quote' => '
   obs-qp          =   "\\" (%d0 / obs-NO-WS-CTL / LF / CR)

   obs-NO-WS-CTL   =   %d1-8 /            ; US-ASCII control
                       %d11 /             ;  characters that do not
                       %d12 /             ;  include the carriage
                       %d14-31 /          ;  return, line feed, and
                       %d127              ;  white space characters
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-4.1',
        'id' => 'obs-qp',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 351,
        ),
    ),
    'TLD' => array(
        'cite' => 'RFC 5321 section 2.3.5',
        'quote' => '
   In the case
   of a top-level domain used by itself in an email address, a single
   string is used without any dots.  This makes the requirement,
   described in more detail below, that only fully-qualified domain
   names appear in SMTP transactions on the public Internet,
   particularly important where top-level domains are involved.
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-2.3.5',
        'id' => 'TLD',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 363,
        ),
    ),
    'TLD-format' => array(
        'cite' => 'John Klensin, RFC 1123 erratum 1353',
        'quote' => '
   Errata ID 1081, reported 2007-11-20, identifies a problem with the
   evolution of naming of top-level domains and the text of RFC 1123.
   It reads:

   Section 2.1 says:

                           However, a valid host name can never
   have the dotted-decimal form #.#.#.#, since at least the
   highest-level component label will be alphabetic.

   It should say:

                           However, a valid host name can never
   have the dotted-decimal form #.#.#.#, since at least the
   highest-level component label will be not all-numeric.

   Notes:

   RFC 3696 section 2 states: "There is an additional rule that
   essentially requires that top-level domain names not be
   all-numeric." The eleven IDN test TLDs created in
   September 2007 contain hyphen-minus as specified in the
   IDNA RFCs.
   It should say:

   However, a valid host name can never have the dotted-decimal
   form #.#.#.#, since this change does not permit the highest-level
   component label to start with a digit even if it is not all-numeric.
   Notes:

   This is a correct identification of the problem, but the wrong fix.
   RFC 3696, which ID 1081 cites, is an informational document that is
   deliberately relaxed about the fine details and says so. It is not
   relevant to determination of the text that should have been (with
   perfect knowledge of the future) in 1123.

   Based on discussions when we were doing RFC 1591 and subsequently,
   the expectation then (and presumably when 1123 was written) was
   that the name of any new TLD would follow the rules for the
   existing ones, i.e., that they would be exactly two or three
   characters long and be all-alphabetic (which is exactly what 1123
   says). The slightly-odd "will be" language in 1123 was, I believe,
   because that restriction was expected to be enforced by IANA,
   rather than being a protocol issue. ICANN, with a different set of
   assignment policies, effectively eliminated the length rule with
   the TLDs allocated in 2000. IDNA (RFC 3490) uses a syntax for IDNs
   that requires embedded hyphens in TLDs if there were ever to be an
   actual IDN TLD (hence the comment in ID 1081 about the IANA IDN
   testbed).

   While the proposed correction in Errata ID 1081 would fix the
   problem by imposing the narrowest possible restriction ("not
   all-numeric"), the original host name rule and the original
   statement in 1123 both assume the possibility of a minimal check
   to differentiate between domain names and IP addresses, i.e.,
   checking the first digit only. Because I believe that there are
   probably implementations that depend on such minimal parsing --some
   probably ancient and embedded-- it would appear to be wise to relax
   the rule as little as possible and, in particular, to restrict the
   "leading digit" exception to domains below the top-level, as 1123
   effectively does.

   The suggested text above reflects that reasoning. Because of the
   possible consequences of this issue, I would hope that it would be
   discussed with the relevant DNS-related WGs, the Root Server Advisory
   Committee (RSAC), and with IANA for comment and as a heads-up. This
   issue is substantive enough that it should probably be dealt with by
   a document that explicitly updates 1123 and that is processed on the
   Standards Track, but an accurate statement in the errata is the
   next-best option until that can be done. In the interim and while
   this suggestion is being discussed, Errata ID 1081 should probably
   be taken out of "validated" status.',
        'link' => 'http://www.rfc-editor.org/errata_search.php?eid=1353',
        'id' => 'TLD-format',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 374,
        ),
    ),
    'mailbox-maximum' => array(
        'cite' => 'Dominic Sayers, RFC 3696 erratum 1690',
        'quote' => '
   However, there is a restriction in RFC 2821 on the length of an
   address in MAIL and RCPT commands of 254 characters.  Since addresses
   that do not fit in those fields are not normally useful, the upper
   limit on address lengths should normally be considered to be 254.
',
        'link' => 'http://www.rfc-editor.org/errata_search.php?eid=1690',
        'id' => 'mailbox-maximum',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 450,
        ),
    ),
    'domain-maximum' => array(
        'cite' => 'RFC 5321 section 4.5.3.1.2',
        'quote' => '
   The maximum total length of a domain name or number is 255 octets.
',
        'link' => 'http://tools.ietf.org/html/rfc1035#section-4.5.3.1.2',
        'id' => 'domain-maximum',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 459,
        ),
    ),
    'mailbox' => array(
        'cite' => 'RFC 5321 section 4.1.2',
        'quote' => '
   Mailbox        = Local-part "@" ( Domain / address-literal )
',
        'link' => 'http://tools.ietf.org/html/rfc5321#section-4.1.2',
        'id' => 'mailbox',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 465,
        ),
    ),
    'addr-spec' => array(
        'cite' => 'RFC 5322 section 3.4.1',
        'quote' => '
   addr-spec       =   local-part "@" domain
',
        'link' => 'http://tools.ietf.org/html/rfc5322#section-3.4.1',
        'id' => 'addr-spec',
        'source' => array(
            'path' => new \SplFileInfo(dirname(__DIR__) . '/xml/meta.xml'),
            'line' => 471,
        ),
    ),
);
