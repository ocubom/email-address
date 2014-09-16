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

use Ocubom\Email\Diagnosis;

/**
 * Test Email utility functions
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 */
class DiagnosisTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Valid address
     *
     * @param mixed $args      Argument to create Diagnosis
     * @param array $diagnosis Expected diagnosis data
     * @param array $category  Expected diagnosis category data
     *
     * @dataProvider provideDiagnoses
     */
    public function testValid($args, $diagnosis, $category)
    {
        // Check diagnosis
        $obj = new Diagnosis($args);
        // Must have local, domain and status properties
        $this->assertTrue(isset($obj->description), 'Email diagnosis must have description attribute');
        $this->assertTrue(isset($obj->category), 'Email diagnosis must have category attribute');
        $this->assertTrue(isset($obj->name), 'Email diagnosis must have name attribute');
        $this->assertTrue(isset($obj->severity), 'Email diagnosis must have severity attribute');
        // Must return parsed values
        $this->assertEquals($diagnosis['description'], $obj->description);
        $this->assertEquals($diagnosis['id'], $obj->name);
        $this->assertEquals($diagnosis['value'], $obj->severity);
        // Must convert into string
        $this->assertEquals($diagnosis['id'], (string) $obj, 'Email diagnosis must convert to string');

        // Check category
        $obj = $obj->category;
        // Must have local, domain and status properties
        $this->assertTrue(isset($obj->description), 'Email diagnosis must have description attribute');
        $this->assertTrue(isset($obj->name), 'Email diagnosis must have name attribute');
        $this->assertTrue(isset($obj->severity), 'Email diagnosis must have severity attribute');
        // Must return parsed values
        $this->assertEquals($category['description'], $obj->description);
        $this->assertEquals($category['id'], $obj->name);
        $this->assertEquals($category['value'], $obj->severity);
        // Must convert into string
        $this->assertEquals($category['id'], (string) $obj, 'Email diagnosis must convert to string');
    }

    /**
     * Invalid address must generate exceptions
     *
     * @expectedException        \InvalidArgumentException
     * @expectedExceptionMessage Unknown diagnoses identifier "-1"
     * @expectedExceptionCode    0
     */
    public function testInvalid()
    {
        $obj = new Diagnosis(-1);

        echo $obj;
    }

    /**
     * Access to undefined properties must generate errors
     *
     * @expectedException        PHPUnit_Framework_Error
     * @expectedExceptionMessage Undefined property: Ocubom\Email\Diagnosis::$noexists
     * @expectedExceptionCode    1024
     */
    public function testUndefinedProperties()
    {
        $obj = new Diagnosis(ISEMAIL_VALID);

        echo $obj->noexists;
    }

    /**
     * Test that email Meta is inmutable
     *
     * @expectedException        PHPUnit_Framework_Error
     * @expectedExceptionMessage Cannot modify read-only class property: Ocubom\Email\Diagnosis::$severity
     * @expectedExceptionCode    1024
     */
    public function testInmutableHasSetDisabled()
    {
        $obj = new Diagnosis(ISEMAIL_VALID);

        $obj->severity = 0;
    }

    /**
     * Test that email address is inmutable
     *
     * @expectedException        PHPUnit_Framework_Error
     * @expectedExceptionMessage Cannot delete read-only class property: Ocubom\Email\Diagnosis::$description
     * @expectedExceptionCode    1024
     */
    public function testInmutableHasUnsetDisabled()
    {
        $obj = new Diagnosis(ISEMAIL_VALID);

        unset($obj->description);
    }

    /**
     * Provide diagnosis
     *
     * @return array
     */
    public function provideDiagnoses()
    {
        $categories = require(__DIR__ . '/../Resources/data/categories.php');

        return array_map(
            function ($diagnose) use ($categories) {
                return array(
                    'id'        => $diagnose['value'],
                    'diagnosis' => $diagnose,
                    'category'  => $categories[$diagnose['category']],
                );
            },
            require(__DIR__ . '/../Resources/data/diagnoses.php')
        );
    }

    /**
     * Returns reflected class to test
     *
     * @return \ReflectionClass
     */
    protected function getClass()
    {
        // Cache instance on first call
        static $class = null;
        if (null === $class) {
            $class = new \ReflectionClass('\\Xpl\\DateTime\\DateTimeInmutable');
        }

        return $class;
    }
}
