<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Tests\Exception;

use Pantarei\Oauth2\Exception\UnauthorizedClientException;

/**
 * Test unauthorized client exception.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class UnauthorizedClientExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Pantarei\Oauth2\Exception\UnauthorizedClientException
     */
    public function testUnauthorizedClientException()
    {
        throw new UnauthorizedClientException();
    }
}
