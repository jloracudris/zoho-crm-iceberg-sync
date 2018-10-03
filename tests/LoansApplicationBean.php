<?php
namespace Wabel\Zoho\CRM\Sync;

use DateTime;

class LoansApplicationBean {

    private $id;
    private $Student;
    private $LoanName;    
    private $Document;    
    private $AcademicPeriod;    
    private $ApplicationDate;
    private $ApprovalDate;
    private $Status;
    private $Amount;
    private $LoanAmount;
    private $DownPayment;
    private $Term;
    private $AmountofFees;
    private $FeeAmount;
    private $PaidAmount;
    private $zohoId;
    private $zohoLastModificationDate;

    public function __construct($id = null, $Student = null, $LoanName = null, $Document = null, $AcademicPeriod = null, $ApplicationDate = null,
                                $ApprovalDate = null, $Status = null, $Amount = null, $LoanAmount = null, $DownPayment = null, $Term = null,
                                $AmountofFees = null, $FeeAmount = null, $PaidAmount = null, $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->Student = $Student;
        $this->LoanName = $LoanName;
        $this->Document = $Document;
        $this->AcademicPeriod = $AcademicPeriod;
        $this->ApplicationDate = $ApplicationDate;
        $this->ApprovalDate = $ApprovalDate;
        $this->Status = $Status;
        $this->Amount = $Amount;
        $this->LoanAmount = $LoanAmount;
        $this->DownPayment = $DownPayment;
        $this->Term = $Term;
        $this->AmountofFees = $AmountofFees;
        $this->FeeAmount = $FeeAmount;
        $this->PaidAmount = $PaidAmount;        
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

    public function getLoanName()
    {
        return $this->LoanName;
    }

    public function getDocument()
    {
        return $this->Document;
    }

    public function getAcademicPeriod()
    {
        return $this->AcademicPeriod;
    }

    public function getApplicationDate()
    {
        return new DateTime($this->ApplicationDate);
    }

    public function getApprovalDate()
    {
        return new DateTime($this->ApprovalDate);
    }

    public function getStatus()
    {
        return $this->Status;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function getLoanAmount()
    {
        return $this->LoanAmount;
    }

    public function getDownPayment()
    {
        return $this->DownPayment;
    }

    public function getTerm()
    {
        return $this->Term;
    }

    public function getAmountofFees()
    {
        return $this->AmountofFees;
    }

    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }

    public function getPaidAmount()
    {
        return $this->PaidAmount;
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

    public function setLoanName($LoanName)
    {
        $this->LoanName = $LoanName;
    }

    public function setDocument($Document)
    {
        $this->Document = $Document;
    }

    public function setAcademicPeriod($AcademicPeriod)
    {
        $this->AcademicPeriod = $AcademicPeriod;
    }

    public function setApplicationDate($ApplicationDate)
    {
        $this->ApplicationDate = new DateTime($ApplicationDate);
    }

    public function setApprovalDate($ApprovalDate)
    {
        $this->ApprovalDate = new DateTime($ApprovalDate);
    }

    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    public function setLoanAmount($LoanAmount)
    {
        $this->LoanAmount = $LoanAmount;
    }

    public function setDownPayment($DownPayment)
    {
        $this->DownPayment = $DownPayment;
    }

    public function setTerm($Term)
    {
        $this->Term = $Term;
    }

    public function setAmountofFees($AmountofFees)
    {
        $this->AmountofFees = $AmountofFees;
    }

    public function setFeeAmount($FeeAmount)
    {
        $this->FeeAmount = $FeeAmount;
    }

    public function setPaidAmount($PaidAmount)
    {
        $this->PaidAmount = $PaidAmount;
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