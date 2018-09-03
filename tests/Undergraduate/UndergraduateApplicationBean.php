<?php
namespace Wabel\Zoho\CRM\Sync;
use DateTime;

class UndergraduateApplicationBean {

    private $id;
    private $FirstName;
    private $MiddleName;
    private $LastName;
    private $SecondSurname;
    private $IdentificationType;
    private $IdentificationNumber;
    private $Gender;
    private $DateOfBirth;
    private $Email;
    private $SecondaryEmail;
    private $CellPhone;
    private $Phone;
    private $Address;
    private $City;
    private $zohoId;
    private $zohoLastModificationDate;
    private $Layout;

    public function __construct($id = null, $FirstName = null, $MiddleName = null, $LastName = null,  
                                $SecondSurname = null,  $IdentificationType = null,  $IdentificationNumber = null,  
                                $Gender = null,  $DateOfBirth = null, $Email = null, $SecondaryEmail = null, $CellPhone = null, $Phone = null,
                                $Address = null, $City = null, $Layout = null,                                
                                $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->FirstName = $FirstName;
        $this->MiddleName = $MiddleName;
        $this->LastName = $LastName;
        $this->SecondSurname = $SecondSurname;
        $this->IdentificationType = $IdentificationType;
        $this->IdentificationNumber = $IdentificationNumber;
        $this->Gender = $Gender;
        $this->DateOfBirth = $DateOfBirth;
        $this->Email = $Email;
        $this->SecondaryEmail = $SecondaryEmail;
        $this->CellPhone = $CellPhone;
        $this->Phone = $Phone;
        $this->Address = $Address;
        $this->City = $City;
        $this->Layout = $Layout;
        $this->zohoId = $zohoId;
        $this->zohoLastModificationDate = $zohoLastModificationDate;        
    } 

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function getSecondSurname()
    {
        return $this->SecondSurname;
    }

    public function getIdentificationType()
    {
        return $this->IdentificationType;
    }

    public function getIdentificationNumber()
    {
        return $this->IdentificationNumber;
    }

    public function getGender()
    {
        return $this->Gender;
    }

    public function getDateOfBirth()
    {
        return new DateTime($this->DateOfBirth);
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getSecondaryEmail()
    {
        return $this->SecondaryEmail;
    }

    public function getCellPhone()
    {
        return $this->CellPhone;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function getProgramLayout()
    {
        return $this->Layout;
    }

    public function getZohoId()
    {
        return $this->zohoId;
    }

    public function getZohoLastModificationDate()
    {
        return $this->zohoLastModificationDate;
    }

    //Setters

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    public function setMiddleName($MiddleName)
    {
        $this->MiddleName = $MiddleName;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    public function setSecondSurname($SecondSurname)
    {
        $this->SecondSurname = $SecondSurname;
    }

    public function setIdentificationType($IdentificationType)
    {
        $this->IdentificationType = $IdentificationType;
    }

    public function setIdentificationNumber($IdentificationNumber)
    {
        $this->IdentificationNumber = $IdentificationNumber;
    }

    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    public function setDateOfBirth($DateOfBirth)
    {
        $this->DateOfBirth = new DateTime($DateOfBirth);
    }

    public function setEmail($Gender)
    {
        $this->Email = $Email;
    }

    public function setSecondaryEmail($SecondaryEmail)
    {
        $this->SecondaryEmail = $SecondaryEmail;
    }

    public function setCellPhone($CellPhone)
    {
        $this->CellPhone = $CellPhone ;
    }

    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    public function setProgramLayout($Layout)
    {
        $this->Layout = $Layout;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    public function setCity($City)
    {
        $this->City = $City;
    }

    public function setZohoId($zohoId)
    {
        $this->zohoId = $zohoId;
    }

    public function setZohoLastModificationDate($zohoLastModificationDate)
    {
        $this->zohoLastModificationDate = $zohoLastModificationDate;
    }
}
?>