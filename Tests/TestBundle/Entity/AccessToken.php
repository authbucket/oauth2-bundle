<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\Bundle\Oauth2Bundle\Entity\AccessToken as AbstractAccessToken;

/**
 * AccessToken
 *
 * @ORM\Table(name="access_token")
 * @ORM\Entity(repositoryClass="Pantarei\Bundle\Oauth2Bundle\Entity\AccessTokenManager")
 */
class AccessToken extends AbstractAccessToken
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token", type="string", length=255)
     */
    protected $access_token;

    /**
     * @var string
     *
     * @ORM\Column(name="token_type", type="string", length=255)
     */
    protected $token_type;

    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255)
     */
    protected $client_id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    protected $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires", type="datetime")
     */
    protected $expires;

    /**
     * @var array
     *
     * @ORM\Column(name="scope", type="array")
     */
    protected $scope;
}
