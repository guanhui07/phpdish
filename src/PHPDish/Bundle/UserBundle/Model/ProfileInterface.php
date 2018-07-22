<?php

/*
 * This file is part of the phpdish/phpdish
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDish\Bundle\UserBundle\Model;

use PHPDish\Bundle\ResourceBundle\Model\IdentifiableInterface;

interface ProfileInterface extends IdentifiableInterface
{
    /**
     * 设置用户.
     *
     * @param UserInterface $user
     *
     * @return ProfileInterface
     */
    public function setUser(UserInterface $user);

    /**
     * 获取用户.
     *
     * @return UserInterface
     */
    public function getUser();
}
