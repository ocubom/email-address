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

/**
 * Diagnosis metadata dictionary
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 *
 * @property-read string  $description The detailed description
 * @property-read string  $name        Internal name of the diagnose
 * @property-read integer $severity    The severity level
 */
abstract class Meta
{
    /**
     * Item identifier
     *
     * @var integer
     */
    private $item;

    /**
     * Database
     *
     * {@see http://github.com/dominicsayers/isemail/blob/master/test/meta.xml}
     *
     * @var array
     */
    private static $items;

    /**
     * Public properties
     *
     * @var array
     */
    protected static $properties = array();

    /**
     * Constructor.
     *
     * @param mixed  $name  Metadata item name or identifier
     * @param string $class Class of the data to load
     */
    protected function __construct($name, $class)
    {
        if (!isset(self::$items[get_class($this)])) {
            self::$items[get_class($this)] = require __DIR__ . '/../Resources/data/' . $class . '.php';
        }

        $this->item = defined($name) ? constant($name) : $name;
        if (!array_key_exists($this->item, self::$items[get_class($this)])) {
            throw new \InvalidArgumentException(sprintf('Unknown %s identifier "%s"', $class, $name));
        }
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
        return null !== $this->getGetter($name);
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
        // Return value
        $getter = $this->getGetter($name);
        if (null !== $getter) {
            return $getter();
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
        // Avoid changes on properties
        trigger_error(sprintf('Cannot modify read-only class property: %s::$%s', get_class($this), $name, $value));

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
        // Avoid changes on properties
        trigger_error(sprintf('Cannot delete read-only class property: %s::$%s', get_class($this), $name));

        // @codeCoverageIgnoreStart
        return;
        // @codeCoverageIgnoreEnd
    }

    /**
     * Provide a function to get the value of a property
     *
     * @param string $name The property name
     *
     * @return Callable or null if no getter is available
     */
    private function getGetter($name)
    {
        // Obtain value (will be needed)
        $val = self::$items[get_class($this)][$this->item];

        // Check for property "translation"
        $key = array_key_exists($name, static::$properties) ? static::$properties[$name] : $name;

        // Use custom callback function to convert/extract value
        if (is_callable($key)) {
            return (function () use ($key, $val) {
                return $key($val);
            });
        }

        // Return the value as-is
        if (array_key_exists($key, $val)) {
            return (function () use ($key, $val) {
                return $val[$key];
            });
        }

        // The propertie does not exists
        return null;
    }

    /**
     * String representation
     *
     * @return string
     */
    public function __toString()
    {
        return self::$items[get_class($this)][$this->item]['id'];
    }
}
