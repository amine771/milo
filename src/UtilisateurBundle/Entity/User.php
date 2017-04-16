<?php

namespace UtilisateurBundle\Entity;
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 15/04/2017
 * Time: 22:55
 */
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */

class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *
     * @ORM\Column(name="mok", type="string", length=255, nullable=true)
     *
     */
    protected $mok;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}