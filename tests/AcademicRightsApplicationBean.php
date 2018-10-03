<?php
namespace Wabel\Zoho\CRM\Sync;

use DateTime;

class AcademicRightsApplicationBean {

    private $id;
    private $Student;
    private $ReceipNumber;    
    private $Description;    
    private $DueDate;    
    private $Recharge;
    private $CurrentAmount;
    private $AcademicPeriod;    
    private $Status;    
    private $zohoId;
    private $zohoLastModificationDate;

    public function __construct($id = null, $Student = null, $ReceipNumber = null, $Description = null, $DueDate = null, $Recharge = null,
                                $CurrentAmount = null, $AcademicPeriod = null, $Status = null,  $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->Student = $Student;
        $this->ReceipNumber = $ReceipNumber;
        $this->Description = $Description;
        $this->DueDate = $DueDate;
        $this->Recharge = $Recharge;
        $this->CurrentAmount = $CurrentAmount;
        $this->AcademicPeriod = $AcademicPeriod;        
        $this->Status = $Status;        
        $this->zohoId = $zohoId;
        $this->zohoLastModificationDate = $zohoLastModificationDate;        
    } 

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getStudent()
    {
        return $this->Student;
    }

    public function getReceipNumber()
    {
        return $this->ReceipNumber;
    }

    public function getDescription()
    {
        return $this->Description;
    }  

    public function getDueDate()
    {
        return new DateTime($this->DueDate);
    }

    public function getRecharge()
    {
        return $this->Recharge;
    }

    public function getCurrentAmount()
    {
        return $this->CurrentAmount;
    }

    public function getAcademicPeriod()
    {
        return $this->AcademicPeriod;
    }

    public function getStatus()
    {
        return $this->Status;
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

    public function setStudent($Student)
    {
        $this->Student = $Student;
    }

    public function setReceipNumber($ReceipNumber)
    {
        $this->ReceipNumber = $ReceipNumber;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }  

    public function setDueDate($DueDate)
    {
        $this->DueDate = new DateTime($this->DueDate);
    }

    public function setRecharge($Recharge)
    {
        $this->Recharge = $Recharge;
    }

    public function setCurrentAmount($CurrentAmount)
    {
        $this->CurrentAmount = $CurrentAmount;
    }

    public function setAcademicPeriod($AcademicPeriod)
    {
        $this->AcademicPeriod = $AcademicPeriod;
    }

    public function setStatus($Status)
    {
        $this->Status = $Status;
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