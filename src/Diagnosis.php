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
 * Diagnosis
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 *
 * @property-read string  $description The detailed description
 * @property-read string  $category    The category
 * @property-read string  $name        Internal name of the diagnose
 * @property-read integer $severity    The severity level
 */
class Diagnosis extends Meta
{
    /**
     * Translations
     *
     * @var array
     */
    protected static $properties = array(
        'description' => 'description',
        'name'        => 'id',
        'severity'    => 'value',
    );

    /**
     * Constructor.
     *
     * @param mixed $name Diagnosis name or identifier
     */
    public function __construct($name)
    {
        if (!array_key_exists('category', static::$properties)) {
            static::$properties['category'] = function ($diagnosis) {
                return new DiagnosisCategory($diagnosis['category']);
            };
        }

        parent::__construct($name, 'diagnoses');
    }
}
