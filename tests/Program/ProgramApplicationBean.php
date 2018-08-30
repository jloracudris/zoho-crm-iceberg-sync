<?php
namespace Wabel\Zoho\CRM\Sync;

class ProgramApplicationBean {

    private $id;
    private $programCode;
    private $programName;
    private $programFaculty;
    private $zohoId;
    private $zohoLastModificationDate;
    private $Layout;

    public function __construct($id = null, $programCode = null, $programName = null, $programFaculty = null, $Layout = null, $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->programCode = $programCode;
        $this->programName = $programName;
        $this->programFaculty = $programFaculty;
        $this->Layout = $Layout;
        $this->zohoId = $zohoId;
        $this->zohoLastModificationDate = $zohoLastModificationDate;        
    } 

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getProgramCode()
    {
        return $this->programCode;
    }

    public function getProgramName()
    {
        return $this->programName;
    }

    public function getProgramFaculty()
    {
        return $this->programFaculty;
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

    public function setProgramCode($programCode)
    {
        $this->programCode = $programCode;
    }

    public function setProgramName($programName)
    {
        $this->programName = $programName;
    }

    public function setProgramFaculty($programFaculty)
    {
        $this->programFaculty = $programFaculty;
    }

    public function setProgramLayout($Layout)
    {
        $this->Layout = $Layout;
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