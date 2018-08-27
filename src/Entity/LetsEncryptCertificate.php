<?php

/*
 * This file is part of the DigitalOceanV2 library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Support\DigitalOcean\Entity;

use DigitalOceanV2\Entity\AbstractEntity;

final class LetsEncryptCertificate extends AbstractEntity
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var array
     */
    public $dns_names;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = static::convertDateTime($createdAt);
    }

    /**
     * @param string $createdAt
     */
    public function setType()
    {
        $this->type = 'lets_encrypt';
    }
}
