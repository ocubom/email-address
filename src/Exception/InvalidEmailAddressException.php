<?php

/*
 * This file is part of "Email Address" component.
 *
 * © Oscar Cubo Medina <ocubom@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ocubom\Email\Exception;

use Ocubom\Email\Diagnosis;

/**
 * Invalid Email Address detected
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 */
class InvalidEmailAddressException extends \UnexpectedValueException
{
    /**
     * Constructor.
     *
     * @param string    $address   The email address that fails its verification.
     * @param Diagnosis $diagnosis The diagnosis
     * @param Exception $previous  The previous exception used for the exception chaining.
     */
    public function __construct($address, Diagnosis $diagnosis, \Exception $previous = null)
    {
        parent::__construct(
            sprintf(
                'Invalid email address "%s": %s',
                $address,
                $diagnosis->description
            ),
            $diagnosis->severity,
            $previous
        );
    }
}
