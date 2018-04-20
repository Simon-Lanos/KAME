<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userMail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userPassword;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userToken;

    /**
     * @ORM\Column(type="datetime")
     */
    private $userTokenTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userLastName;

    /**
     * @ORM\Column(type="integer")
     */
    private $userGender;

    /**
     * @ORM\Column(type="date")
     */
    private $userBirthday;

    /**
     * @ORM\Column(type="boolean")
     */
    private $userHasAcceptedTerms;

    /**
     * @ORM\Column(type="boolean")
     */
    private $userHasConfirmedEmail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $userCreationDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userAdress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userAvatar;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userCity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userSpeciality;

    public function getId()
    {
        return $this->id;
    }

    public function getUserMail(): ?string
    {
        return $this->userMail;
    }

    public function setUserMail(string $userMail): self
    {
        $this->userMail = $userMail;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): self
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserToken(): ?string
    {
        return $this->userToken;
    }

    public function setUserToken(string $userToken): self
    {
        $this->userToken = $userToken;

        return $this;
    }

    public function getUserTokenTime(): ?\DateTimeInterface
    {
        return $this->userTokenTime;
    }

    public function setUserTokenTime(\DateTimeInterface $userTokenTime): self
    {
        $this->userTokenTime = $userTokenTime;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->userFirstName;
    }

    public function setUserFirstName(string $userFirstName): self
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    public function getUserLastName(): ?string
    {
        return $this->userLastName;
    }

    public function setUserLastName(string $userLastName): self
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    public function getUserGender(): ?int
    {
        return $this->userGender;
    }

    public function setUserGender(int $userGender): self
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getUserBirthday(): ?\DateTimeInterface
    {
        return $this->userBirthday;
    }

    public function setUserBirthday(\DateTimeInterface $userBirthday): self
    {
        $this->userBirthday = $userBirthday;

        return $this;
    }

    public function getUserHasAcceptedTerms(): ?bool
    {
        return $this->userHasAcceptedTerms;
    }

    public function setUserHasAcceptedTerms(bool $userHasAcceptedTerms): self
    {
        $this->userHasAcceptedTerms = $userHasAcceptedTerms;

        return $this;
    }

    public function getUserHasConfirmedEmail(): ?bool
    {
        return $this->userHasConfirmedEmail;
    }

    public function setUserHasConfirmedEmail(bool $userHasConfirmedEmail): self
    {
        $this->userHasConfirmedEmail = $userHasConfirmedEmail;

        return $this;
    }

    public function getUserCreationDate(): ?\DateTimeInterface
    {
        return $this->userCreationDate;
    }

    public function setUserCreationDate(\DateTimeInterface $userCreationDate): self
    {
        $this->userCreationDate = $userCreationDate;

        return $this;
    }

    public function getUserAdress(): ?string
    {
        return $this->userAdress;
    }

    public function setUserAdress(string $userAdress): self
    {
        $this->userAdress = $userAdress;

        return $this;
    }

    public function getUserAvatar(): ?string
    {
        return $this->userAvatar;
    }

    public function setUserAvatar(?string $userAvatar): self
    {
        $this->userAvatar = $userAvatar;

        return $this;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getUserCity(): ?string
    {
        return $this->userCity;
    }

    public function setUserCity(string $userCity): self
    {
        $this->userCity = $userCity;

        return $this;
    }

    public function getUserSpeciality(): ?string
    {
        return $this->userSpeciality;
    }

    public function setUserSpeciality(string $userSpeciality): self
    {
        $this->userSpeciality = $userSpeciality;

        return $this;
    }
}
