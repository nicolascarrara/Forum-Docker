<?php
namespace forum\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="pseudo", message="Ce pseudo est déjà utilisé")
 */
class membre implements UserInterface
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $pseudo;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $inscription;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $role;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $mail;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $ville;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $site;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $anniversaire;

    /**
    * @ORM\Column(type="string", nullable=true)
    *
    * @Assert\NotBlank(message="S'il vous plaît uploadez votre avatar en PNG ou JPEG")
    * @Assert\File(mimeTypes={ "image/png", "image/jpeg" })
    */

   protected $avatar;

   public function getAvatar()
   {
       return $this->avatar;
   }

   public function setAvatar($avatar)
   {
       $this->avatar = $avatar;

       return $this;
   }


    public function eraseCredentials()
    {
        return null;
    }

    public function getRole()
   {
       return $this->role;
   }

   public function setRole($role = null)
   {
       $this->role = $role;
   }

   public function getRoles()
   {
       return [$this->getRole()];
   }

   public function setVille($ville)
   {
       $this->ville = $ville;
   }

   public function getVille()
   {
       return $this->ville;
   }

    public function getId()
    {
        return $this->id;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getInscription(){
      return $this->inscription;
    }
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;
    }

    public function getAnniversaire(){
      return $this->anniversaire;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
    }
    public function setSite($site)
    {
        $this->site = $site;
    }

    public function getSite()
    {
        return $this->site;
    }

    public function getUsername()
    {
        return $this->pseudo;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSalt()
    {
        return null;
    }

    public function __construct()
    {
        $this->inscription = new \DateTime('now');
        $this->droit=0;
    }
}
