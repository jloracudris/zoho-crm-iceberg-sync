<?php
namespace Wabel\Zoho\CRM\Sync;



class PeriodApplicationBean {

    private $id;
    private $name;
    private $code;    
    private $startAt;
    private $endAt;
    private $year;
    private $zohoId;
    private $zohoLastModificationDate;

    public function __construct($id = null, $name = null, $code = null, $startAt = null, $endAt = null, $year = null,  $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->startAt = $startAt;
        $this->endAt = $endAt;
        $this->year = $year;        
        $this->zohoId = $zohoId;
        $this->zohoLastModificationDate = $zohoLastModificationDate;        
    } 

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getStartAt()
    {
        return $this->startAt;
    }

    public function getEndAt()
    {
        return $this->endAt;
    }

    public function getYear()
    {
        return $this->year;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
    
    public function setStartAt($startAt)
    {
        return $this->startAt = $startAt;
    }

    public function setEndAt($endAt)
    {
        $this->endAt = new $endAt;
    }

    public function setYear($year)
    {
        $this->year = $year;
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