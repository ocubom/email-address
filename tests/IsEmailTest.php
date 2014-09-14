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
use Ocubom\Email\RFC\Diagnose;

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
        // Replace special characters (http://github.com/dominicsayers/isemail/blob/master/test/tests.php#L138)
        $searchs = array(' ', mb_convert_encoding('&#9229;&#9226;', 'UTF-8', 'HTML-ENTITIES'));
        $replace = array(' ', chr(13) . chr(10));
        for ($i = 0; $i < 32; $i++) {
            // PHP bug doesn't allow us to use hex notation (http://bugs.php.net/48645)
            $entity    = mb_convert_encoding('&#' . (string) (9216 + $i) . ';', 'UTF-8', 'HTML-ENTITIES');
            $searchs[] = $entity;
            $replace[] = chr($i);
        }

        return array_values(array_reduce(
            iterator_to_array(array_reduce(
                array(
                    __DIR__ . '/tests-original.xml',
                    __DIR__ . '/tests.xml',
                ),
                function (\Traversable $iterator, $path) {
                    $document = new \DOMDocument();
                    $document->load($path);
                    $document->schemaValidate(__DIR__ . '/tests.xsd');

                    $xpath = new \DOMXPath($document);
                    $nodes = $xpath->query('//test');

                    if ($nodes) {
                        $iterator->append(new \ArrayIterator(iterator_to_array($nodes)));
                    }

                    return $iterator;
                },
                new \AppendIterator()
            )),
            function ($tests, $node) use ($searchs, $replace) {
                $test = array(
                    'address'  => '',
                    'analysis' => array(
                        'category'  => '',
                        'diagnosis' => '',
                    ),
                    'comment'  => '',
                    'credit'   => array(),
                    'id'       => $node->hasAttribute('id') ? $node->getAttribute('id') : '',
                    // For reference
                    'source' => array(
                        'path' => new \SplFileInfo($node->baseURI),
                        'line' => $node->getLineNo(),
                    ),
                );

                foreach ($node->childNodes as $child) {
                    switch ($child->localName) {
                        case '':
                            break;

                        case 'address':
                        case 'comment':
                            $test[$child->localName] = str_replace($searchs, $replace, $child->nodeValue);
                            break;

                        case 'category':
                            $test['analysis'][$child->localName] = constant($child->nodeValue);
                            break;

                        case 'diagnosis':
                            $test['analysis'][$child->localName][] = constant($child->nodeValue);
                            break;

                        case 'source':
                            $test['credit']['name'] = (string) $child->nodeValue;
                            break;

                        case 'sourcelink':
                            $test['credit']['link'] = (string) $child->nodeValue;
                            break;

                        default:
                            fprintf(STDERR, "Ignoring \"%s\" attribute\n", $child->localName);
                            break;
                    }
                }

                if (isset($tests[$test['address']])) {
                    fprintf(
                        STDERR,
                        "Ignoring duplicate test for \"%s\" on %s:%s (id=%s) (previous: %s)\n",
                        $test['address'],
                        $test['source']['path'],
                        $test['source']['line'],
                        $test['id'],
                        $tests[$test['address']]['source']
                    );

                    return $tests;
                }

                $tests[$test['address']] = array(
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

                return $tests;
            },
            array()
        ));
    }
}
