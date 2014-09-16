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
 * Diagnosis categories
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 *
 * @property-read string  $description The detailed description
 * @property-read string  $name        Internal name of the diagnose
 * @property-read integer $severity    The severity level
 */
class DiagnosisCategory extends Meta
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
        parent::__construct($name, 'categories');
    }
}
