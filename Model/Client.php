<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PhpMob\RestBundle\Model;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class Client extends BaseClient implements ClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function getPublicId()
    {
        return $this->getRandomId();
    }
}