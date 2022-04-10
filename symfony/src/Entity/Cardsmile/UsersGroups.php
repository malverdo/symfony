<?php

namespace App\Entity\Cardsmile;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity(repositoryClass="App\Repository\UsersGroupsRepository")
 * @Table(name="user_group")
 */
class UsersGroups
{
    /**
     * @ORM\Column(type="integer")
     */
    private int $userId;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @ORM\Column(type="integer")
     */
    private int $groupId;
}