<?php
// src/ConnectBundle/Entity/User.php

namespace ConnectBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * 
     * @ORM\Column(type="string",nullable=true)
     * 
     */
    protected $adresse;
    
     /**
     * @var date birthday
     * @ORM\Column(name="birthday", type="date",nullable=true,)
     * 
     */
    protected $birthday=null;
    
     /**
     *@var date dateentree
     *@ORM\Column(name="dateEntree", type="date", nullable=true)
     * 
     */
    protected $dateEntree=null;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    function getAdresse() {
        return $this->adresse;
    }

    function getBirthday() {
        return $this->birthday;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setBirthday($birthday) {
        $this->birthday = $birthday;
    }
    function getDateEntree() {
        return $this->dateEntree;
    }

    function setDateEntree($dateEntree) {
        $this->dateEntree = $dateEntree;
    }




    








}