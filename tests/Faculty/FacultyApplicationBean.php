<?php
namespace Wabel\Zoho\CRM\Sync;

class FacultyApplicationBean {

    private $id;
    private $facultyName;
    private $code;
    private $description;
    private $zohoId;
    private $zohoLastModificationDate;

    public function __construct($id = null, $facultyName = null, $code = null, $description = null, $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->facultyName = $facultyName;
        $this->code = $code;
        $this->description = $description;
        $this->zohoId = $zohoId;
        $this->zohoLastModificationDate = $zohoLastModificationDate;        
    } 

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getFacultyName()
    {
        return $this->facultyName;
    }

    public function getFacultyCode()
    {
        return $this->code;
    }

    public function getFacultyDescription()
    {
        return $this->description;
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

    public function setFacultyName($facultyName)
    {
        $this->facultyName = $facultyName;
    }

    public function setFacultyCode($code)
    {
        $this->code = $code;
    }

    public function setFacultyDescription($description)
    {
        $this->description = $description;
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