<?php
namespace Wabel\Zoho\CRM\Sync;

class NodeApplicationBean {

    private $id;
    private $name;
    private $code;    
    private $zohoId;
    private $zohoLastModificationDate;

    public function __construct($id = null, $name = null, $code = null, $zohoId = null, $zohoLastModificationDate = null) {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;        
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