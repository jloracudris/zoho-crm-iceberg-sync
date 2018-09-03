<?php
namespace Wabel\Zoho\CRM\Sync;

class OnGoingProgramApplicationBean {

    private $id;
    private $studentId;
    private $currenAcademicPeriod;
    private $enabled;
    private $jornada;
    private $product;
    private $location;
    private $type;
    private $idNumber;
    private $bannerStudentId;
    private $zohoId;
    private $zohoLastModificationDate;

    public function __construct($id = null, $studentId = null, $currenAcademicPeriod = null, $enabled = null, $jornada = null, $product = null, $location = null,
                                $type = null, $idNumber = null, $bannerStudentId = null,
                                $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->studentId = $studentId;
        $this->currenAcademicPeriod = $currenAcademicPeriod;
        $this->enabled = $enabled;
        $this->jornada = $jornada;
        $this->product = $product;
        $this->location = $location;
        $this->type = $type;
        $this->idNumber = $idNumber;
        $this->bannerStudentId = $bannerStudentId;
        $this->zohoId = $zohoId;
        $this->zohoLastModificationDate = $zohoLastModificationDate;        
    } 

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getStudentId()
    {
        return $this->studentId;
    }

    public function getCurrentAcademicPeriod()
    {
        return $this->currenAcademicPeriod;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function getJornada()
    {
        return $this->jornada;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getIdNumber()
    {
        return $this->idNumber;
    }

    public function getBannerStudentId()
    {
        return $this->bannerStudentId;
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

    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    public function setCurrenAcademicPeriod($currenAcademicPeriod)
    {
        $this->currenAcademicPeriod = $currenAcademicPeriod;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    public function setJornada($jornada)
    {
        $this->jornada = jornada;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
    }

    public function setBannerStudentId($bannerStudentId)
    {
        $this->bannerStudentId = $bannerStudentId;
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