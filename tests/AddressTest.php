<?php

/*
 * This file is part of "Email Address" component.
 *
 * © Oscar Cubo Medina <ocubom@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ocubom\Email\Tests;

use Ocubom\Email\Address as EmailAddress;

/**
 * Email Address Tests
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 */
class AddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Valid address
     */
    public function testValidEmailAddress()
    {
        $obj = new EmailAddress('JohnDoe@eXample.com');

        // Must have local, domain and status properties
        $this->assertTrue(isset($obj->local), 'Email address must have local attribute');
        $this->assertTrue(isset($obj->domain), 'Email address must have domain attribute');
        $this->assertTrue(isset($obj->status), 'Email address must have status attribute');

        // Must return parsed values
        $this->assertEquals('JohnDoe', $obj->local);
        $this->assertEquals('example.com', $obj->domain);
        $this->assertEquals(array(ISEMAIL_DNSWARN_NO_MX_RECORD), $obj->status);

        // Must convert into string
        $this->assertEquals('JohnDoe@example.com', (string) $obj, 'Email address must convert to string');
    }

    /**
     * Valid address without DNS check
     */
    public function testValidEmailAddressWithoutDNS()
    {
        $obj = new EmailAddress('JohnDoe@eXample.com', false);

        // Must have local, domain and status properties
        $this->assertTrue(isset($obj->local), 'Email address must have local attribute');
        $this->assertTrue(isset($obj->domain), 'Email address must have domain attribute');
        $this->assertTrue(isset($obj->status), 'Email address must have status attribute');

        // Must return parsed values
        $this->assertEquals('JohnDoe', $obj->local);
        $this->assertEquals('example.com', $obj->domain);
        $this->assertEquals(array(ISEMAIL_VALID), $obj->status);

        // Must convert into string
        $this->assertEquals('JohnDoe@example.com', (string) $obj, 'Email address must convert to string');
    }

    /**
     * Invalid address must generate exceptions
     *
     * @expectedException        \RuntimeException
     * @expectedExceptionMessage Invalid email address ""
     * @expectedExceptionCode    131
     */
    public function testInvalidEmailAddress()
    {
        new EmailAddress('');
    }

    /**
     * Access to undefined properties must generate errors
     *
     * @expectedException        PHPUnit_Framework_Error
     * @expectedExceptionMessage Undefined property: Ocubom\Email\Address::$noexists
     * @expectedExceptionCode    1024
     */
    public function testEmailAddressUndefinedProperties()
    {
        $obj = new EmailAddress('john@example.com');

        echo $obj->noexists;
    }

    /**
     * Test that email address is inmutable
     *
     * @expectedException        PHPUnit_Framework_Error
     * @expectedExceptionMessage Cannot modify read-only class property: Ocubom\Email\Address::$local
     * @expectedExceptionCode    1024
     */
    public function testInmutableEmailAddressHasSetDisabled()
    {
        $obj = new EmailAddress('john@example.com');

        $obj->local = 'doe';
    }

    /**
     * Test that email address is inmutable
     *
     * @expectedException        PHPUnit_Framework_Error
     * @expectedExceptionMessage Cannot delete read-only class property: Ocubom\Email\Address::$domain
     * @expectedExceptionCode    1024
     */
    public function testInmutableEmailAddressHasUnsetDisabled()
    {
        $obj = new EmailAddress('john@example.com');

        unset($obj->domain);
    }
}
