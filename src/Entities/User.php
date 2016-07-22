<?php

namespace Slack\Entities;

class User extends BaseEntity
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var array
     */
    private $profile;

    /**
     * @var bool $isAdmin
     */
    private $isAdmin;

    /**
     * @var bool $isOwner
     */
    private $isOwner;

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param array $profile
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;
    }

    /**
     * @param bool $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param bool $isOwner
     */
    public function setIsOwner($isOwner)
    {
        $this->isOwner = $isOwner;
    }

    /**
     * @return bool
     */
    public function isOwner()
    {
        return $this->isOwner;
    }

    /**
     * @return string|NULL
     */
    public function getFirstName()
    {
        return $this->profile['first_name'];
    }

    /**
     * @return string|NULL
     */
    public function getLastName()
    {
        return $this->profile['last_name'];
    }

    /**
     * @return string|NULL
     */
    public function getRealName()
    {
        return $this->profile['real_name'];
    }

    /**
     * @return string|NULL
     */
    public function getEmail()
    {
        return $this->profile['email'];
    }

    /**
     * @return string|NULL
     */
    public function getSkype()
    {
        return $this->profile['skype'];
    }

    /**
     * @return string|NULL
     */
    public function getPhone()
    {
        return $this->profile['phone'];
    }
}
