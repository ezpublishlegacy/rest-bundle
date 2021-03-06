<?php

namespace xrow\restBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
* xrow\restBundle\Entity\User
*
* @ORM\Table(name="api_Users")
* @ORM\Entity(repositoryClass="xrow\restBundle\Repository\UserRepository")
*/
class User implements UserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    protected $crmuserId;

    public function __construct($crmuserId)
    {
        $this->crmuserId = $crmuserId;
    }

    public function getId(){
        return $this->id;
    }

    /**
    * @inheritDoc
    */
    public function getUsername()
    {
        return $this->username;
    }

    /**
    * @inheritDoc
    */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
    * @inheritDoc
    */
    public function getCrmuserId()
    {
        return $this->crmuserId;
    }

    public function setCrmuserId($crmuserId)
    {
        $this->crmuserId = $crmuserId;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getCurrency()
    {
        return 'EUR';
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonExpired()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonLocked()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return true;
    }
}