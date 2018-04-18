<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userMail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userToken;

    /**
     * @ORM\Column(type="datetime", length=255)
     */
    private $userTokenTime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userFirstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userLastName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userGender;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $userBirthdate;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $userHasAcceptedTerms;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $userHasConfirmedEmail;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $userCreationDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userAdress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userAvatar;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userCity;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $userSpeciality;

    /**
     * @ORM\Column(type="integer")
     */
    private $roleId;

    public function getId()
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
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

    public function setUserToken(?string $userToken): self
    {
        $this->userToken = $userToken;

        return $this;
    }

    public function getUserTokenTime(): ?string
    {
        return $this->userTokenTime;
    }

    public function setUserTokenTime(string $userTokenTime): self
    {
        $this->userTokenTime = $userTokenTime;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->userFirstName;
    }

    public function setUserFirstName(?string $userFirstName): self
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    public function getUserLastName(): ?string
    {
        return $this->userLastName;
    }

    public function setUserLastName(?string $userLastName): self
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    public function getUserGender(): ?int
    {
        return $this->userGender;
    }

    public function setUserGender(?int $userGender): self
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getUserBirthdate(): ?\DateTimeInterface
    {
        return $this->userBirthdate;
    }

    public function setUserBirthdate(?\DateTimeInterface $userBirthdate): self
    {
        $this->userBirthdate = $userBirthdate;

        return $this;
    }

    public function getUserHasAcceptedTerms(): ?int
    {
        return $this->userHasAcceptedTerms;
    }

    public function setUserHasAcceptedTerms(?int $userHasAcceptedTerms): self
    {
        $this->userHasAcceptedTerms = $userHasAcceptedTerms;

        return $this;
    }

    public function getUserHasConfirmedEmail(): ?int
    {
        return $this->userHasConfirmedEmail;
    }

    public function setUserHasConfirmedEmail(?int $userHasConfirmedEmail): self
    {
        $this->userHasConfirmedEmail = $userHasConfirmedEmail;

        return $this;
    }

    public function getUserCreationDate(): ?\DateTimeInterface
    {
        return $this->userCreationDate;
    }

    public function setUserCreationDate(?\DateTimeInterface $userCreationDate): self
    {
        $this->userCreationDate = $userCreationDate;

        return $this;
    }

    public function getUserAdress(): ?string
    {
        return $this->userAdress;
    }

    public function setUserAdress(?string $userAdress): self
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

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(?int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getUserCity(): ?string
    {
        return $this->userCity;
    }

    public function setUserCity(?string $userCity): self
    {
        $this->userCity = $userCity;

        return $this;
    }

    public function getUserSpeciality(): ?int
    {
        return $this->userSpeciality;
    }

    public function setUserSpeciality(?int $userSpeciality): self
    {
        $this->userSpeciality = $userSpeciality;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function setRoleId(int $roleId): self
    {
        $this->roleId = $roleId;

        return $this;
    }
}
