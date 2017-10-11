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

use FOS\OAuthServerBundle\Entity\ClientManager as BaseClientManager;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class ClientManager extends BaseClientManager
{
    /**
     * {@inheritdoc}
     */
    public function findClientByPublicId($publicId)
    {
        return $this->findClientBy(['randomId' => $publicId]);
    }
}
