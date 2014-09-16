<?php

/*
 * This file is part of "Email Address" component.
 *
 * © Oscar Cubo Medina <ocubom@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ocubom\Email;

use Ocubom\Email\Exception\InvalidEmailAddressException;

/**
 * Email address value
 *
 * @author Oscar Cubo Medina <ocubo@cesvima.upm.es>
 *
 * @property-read string $local  The parsed local part
 * @property-read string $domain The parsed domain part
 * @property-read array  $status The diagnoses
 */
class Address
{
    /**
     * Parsed address components
     *
     * @var array
     */
    private $data;

    /**
     * Constructor
     *
     * @param string  $address  The email address
     * @param boolean $checkdns Perform DNS checks (may impact performance)
     */
    public function __construct($address, $checkdns = true)
    {
        $diagnosis = new Diagnosis(is_email($address, $checkdns, true, $parsed));
        if (ISEMAIL_THRESHOLD < $diagnosis->severity) {
            throw new InvalidEmailAddressException($address, $diagnosis);
        }

        $this->data = array(
            // Case on local-part is mandatory but most domains just ignore it
            // http://wikipedia.org/wiki/Email_address#Local_part
            'local' => $parsed[0],

            // Lowercased domain is mandatory
            // http://tools.ietf.org/html/rfc1035#section-2.3.1
            'domain' => strtolower($parsed[1]),

            // Diagnoses
            // http://github.com/dominicsayers/isemail/blob/master/is_email.php#L61
            'status' => array_map(
                function ($status) {
                    return new Diagnosis($status);
                },
                $parsed['status']
            ),
        );
    }

    /**
     * Whether or not a property exists.
     *
     * @param string $name A property to check for.
     *
     * @return boolean True if the property exists
     */
    public function __isset($name)
    {
        return array_key_exists($name, $this->data);
    }

    /**
     * Returns the specified property value.
     *
     * @param string $name The property to retrieve.
     *
     * @return mixed
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        // Simulate PHP native behaviour
        // http://php.net/manual/en/language.oop5.overloading.php#example-232
        trigger_error(sprintf('Undefined property: %s::$%s', get_class($this), $name));

        // Previous sentence must abort execution on tests: this will never be called
        // @codeCoverageIgnoreStart
        return null;
        // @codeCoverageIgnoreEnd
    }

    /**
     * Assigns a value to the specified property.
     *
     * @param string $name  The property to assign the value to.
     * @param mixed  $value The value to set.
     */
    final public function __set($name, $value)
    {
        // Avoid changes
        trigger_error(sprintf('Cannot modify read-only class property: %s::$%s', get_class($this), $name, $value));

        // Previous sentence must abort execution on tests: this will never be called
        // @codeCoverageIgnoreStart
        return;
        // @codeCoverageIgnoreEnd
    }

    /**
     * Unsets a property.
     *
     * @param string $name The property to unset.
     */
    final public function __unset($name)
    {
        // Avoid changes
        trigger_error(sprintf('Cannot delete read-only class property: %s::$%s', get_class($this), $name));

        // Previous sentence must abort execution on tests: this will never be called
        // @codeCoverageIgnoreStart
        return;
        // @codeCoverageIgnoreEnd
    }

    /**
     * Textual representation
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s@%s', $this->data['local'], $this->data['domain']);
    }
}
