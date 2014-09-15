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

/**
 * Test email address
 *
 * @author Oscar Cubo Medina <ocubom@gmail.com>
 */
class IsEmailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * is_email original test suite
     *
     * @param string $address The address
     * @param array  $output  The expected output
     * @param string $source  The source of the test
     * @param string $comment The comment (if any)
     *
     * @dataProvider provideEmails
     */
    public function testEmailAddress($address, $output, $source, $comment = '')
    {
        if (!is_array($output['status'])) {
            $this->markTestIncomplete(sprintf('No status for address "%s"', $address));
        }

        is_email($address, true, true, $parsed);

        $this->assertEquals(
            max($output['status']),
            max($parsed['status']),
            empty($comment) ? $source : sprintf('%s @ %s', $comment, $source)
        );
    }

    /**
     * Provide test email set
     *
     * @return array
     */
    public function provideEmails()
    {
        return array_map(
            function ($test) {
                return array(
                    'address' => $test['address'],
                    'output'  => array(
                        'status' => $test['analysis']['diagnosis'],
                    ),
                    'source' => trim(sprintf(
                        "%s:%s (id=%s)",
                        $test['source']['path'],
                        $test['source']['line'],
                        $test['id']
                    )),
                    'comment' => $test['comment'],
                );
            },
            require(__DIR__ . '/../Resources/data/tests.php')
        );
    }
}
