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

use Symfony\Component\Security\Core\User\UserInterface as BaseUserInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface UserInterface extends BaseUserInterface
{
}