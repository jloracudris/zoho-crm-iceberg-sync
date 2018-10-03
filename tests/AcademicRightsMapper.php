<?php

namespace Wabel\Zoho\CRM\Sync;

use TestNamespace\AcademicRights;
use Wabel\Zoho\CRM\Exception\ZohoCRMException;
use Wabel\Zoho\CRM\ZohoBeanInterface;
use Rees\Sanitizer\Sanitizer;
use \ForceUTF8\Encoding;

class AcademicRightsMapper implements MappingInterface {

    private $academicRights;
    private $undergraduates;
    private $period;
    private $academicRightsStatus;

    /**
     * @return array
     */
    public function getAcademicRights()
    {
        return $this->academicRights;
    }

    /**
     * @param array $loans
     */
    public function setAcademicRights($academicRights)
    {
        $this->academicRights = $academicRights;
    }

     /**
     * @return array
     */
    public function getAcademicRightsStatus()
    {
        return $this->academicRightsStatus;
    }

    /**
     * @param array $loans
     */
    public function setAcademicRightsStatus($academicRightsStatus)
    {
        $this->academicRightsStatus = $academicRightsStatus;
    }

    /**
     * @return array
     */
    public function getUndergraduates()
    {
        return $this->undergraduates;
    }

    /**
     * @param array $programs
     */
    public function setUndergraduates($undergraduates)
    {
        $this->undergraduates = $undergraduates;
    }

    /**
     * @return array
     */
    public function getPeriods()
    {
        return $this->period;
    }

    /**
     * @param array $programs
     */
    public function setPeriods($period)
    {
        $this->period = $period;
    }

    /**
     * Returns a Zoho Bean based on the bean passed in argument
     *
     * @param  object            $applicationBean
     * @return ZohoBeanInterface
     */
    public function toZohoBean($applicationBean)
    {
        if (!$applicationBean instanceof AcademicRightsApplicationBean) {
            throw new ZohoCRMException("Expected AcademicRightsApplicationBean");
        }
        $sanitizer = new Sanitizer;        

        $sanitizer->register('onlyNumbersId', function ($field) {
            if(ctype_digit ($field)) 
                return $field;
            else
                return null;
        });

        $input = [
            'NUMEROIDENTIFICACION' => $applicationBean->getStudent(),            
            'PERIODO' => $applicationBean->getAcademicPeriod(),            
        ];

        $rules = [
            'NUMEROIDENTIFICACION' => 'trim|onlyNumbersId',            
            'PERIODO' => 'trim',            
        ];

        $sanitizer->sanitize($rules, $input);

        $students = $this->getUndergraduates();
        $studentZohoId = null;
        if (count($students) > 0) {
            $query = from($students)
                    ->where(function($contact) use ($input)
                        { 
                            return $contact->getIdentificationNumber() == $input["NUMEROIDENTIFICACION"];
                        });          
            $resToArray = $query->toArray();            
            if (count($resToArray) > 0) {
                $res = array_values($resToArray)[0];
                $studentZohoId = $res->getZohoId();
            }
        }

        $periodZohoId = null;
        $fetchPeriods = $this->getPeriods(); 
        if (count($fetchPeriods) > 0) {
            $query = from($fetchPeriods)
                    ->where(function($period) use ($input)
                        { 
                            return $period->getCustomModule16Name() == $input["PERIODO"];
                        });          
            $resToArray = $query->toArray();            
            if (count($resToArray) > 0) {
                $res = array_values($resToArray)[0];
                $periodZohoId = $res->getZohoId();
            }            
        }

        $academicRightsStatusZohoId = null;
        $fetchacAdemicRightsStatus = $this->getAcademicRightsStatus(); 
        if (count($fetchacAdemicRightsStatus) > 0) {
            $query = from($fetchacAdemicRightsStatus)
                    ->where(function($fetchacAdemicRightStatus) use ($applicationBean)
                        { 
                            return $fetchacAdemicRightStatus->getCustomModule26Name() == $applicationBean->getStatus();
                        });          
            $resToArray = $query->toArray();            
            if (count($resToArray) > 0) {
                $res = array_values($resToArray)[0];
                $academicRightsStatusZohoId = $res->getZohoId();
            }            
        }


        $zohoBean = new AcademicRights();
        $zohoBean->setStudentID($studentZohoId);
        $zohoBean->setAcademicPeriodID($periodZohoId);
        $zohoBean->setCustomModule23Name($applicationBean->getReceipNumber());
        $zohoBean->setAcademicRightStatusID($academicRightsStatusZohoId);
        $zohoBean->setCurrentAmount($applicationBean->getCurrentAmount());
        $zohoBean->setDescription($applicationBean->getDescription());
        $zohoBean->setRecharge($applicationBean->getRecharge());        
        $zohoBean->setDueDate($applicationBean->getDueDate());
        $zohoBean->setZohoId($applicationBean->getZohoId());
        if ($applicationBean->getZohoLastModificationDate()) {
            $zohoBean->setModifiedTime($applicationBean->getZohoLastModificationDate());
        }

        return $zohoBean;
    }

    /**
     * Returns a Zoho Bean based on the bean passed in argument
     *
     * @param  ZohoBeanInterface $zohoBean
     * @return object
     */
    public function toApplicationBean(ZohoBeanInterface $zohoBean)
    {
        if (!$zohoBean instanceof AcademicRights) {
            throw new ZohoCRMException("Expected AcademicRights");
        }
        $applicationBean = new AcademicRights();
        $applicationBean->setName($zohoBean->getOnGoingProgramTypeName());
        $applicationBean->setCode($zohoBean->getCustomModule18Name());
        $applicationBean->setZohoId($zohoBean->getZohoId());        
        $applicationBean->setZohoLastModificationDate($zohoBean->getModifiedTime());

        return $applicationBean;
    }

    /**
     * Stores the ZohoID in the bean passed in parameter.
     *
     * @param object $applicationBean
     * @param string $zohoId
     */
    public function onSyncToZohoComplete($applicationBean, $zohoId, \DateTime $date = null)
    {
        if (!$applicationBean instanceof AcademicRightsApplicationBean) {
            throw new ZohoCRMException("Expected AcademicRightsApplicationBean");
        }
        $applicationBean->setZohoId($zohoId);
        $applicationBean->setZohoLastModificationDate($date);
    }

    /**
     * Returns an array of application beans that have been modified since the last synchronisation with Zoho.
     *
     * @return \object[]
     */
    public function getBeansToSynchronize()
    {
        return $this->academicRights;
    }

    /**
     * This function should return the last Zoho modification date of a record saved in YOUR database.
     * The date must be returned as a \DateTime object.
     * Note: when a Zoho bean is inserted, the last modification date is passed to the `onSyncToZohoComplete`.
     * You should store that date in the database.
     *
     * @return \DateTime
     */
    public function getLastZohoModificationDate() {
        $now = new \DateTime();
        return $now->sub(new \DateInterval("P1D"));
    }

    /**
     * Function called when an application bean was deleted in Zoho.
     *
     * @param string $zohoId
     */
    public function onDeletedInZoho($zohoId)
    {
        // Does nothing
    }

    /**
     * Function called when an error was thrown by Zoho while trying to update a record.
     *
     * @param object $applicationBean
     * @param string $zohoId
     * @param ZohoCRMException $exception The exception representing the error regarding this record.
     */
    public function onSyncToZohoError($applicationBean, $zohoId, ZohoCRMException $exception)
    {
        // Does nothing
    }

    /**
     * Function called when the record in Zoho was merged with another record. Unfortunately, there is no way to
     * return the new ZohoId.
     *
     * @param object $applicationBean
     * @param string $zohoId
     */
    public function onMerged($applicationBean, $zohoId)
    {
        // Does nothing
    }
}

?>