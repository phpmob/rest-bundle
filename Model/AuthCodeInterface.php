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

use FOS\OAuthServerBundle\Model\AuthCodeInterface as BaseAuthCodeInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface AuthCodeInterface extends BaseAuthCodeInterface, ResourceInterface
{
}
