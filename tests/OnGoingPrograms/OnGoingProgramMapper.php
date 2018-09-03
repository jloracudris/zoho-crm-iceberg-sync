<?php

namespace Wabel\Zoho\CRM\Sync;

use TestNamespace\OnGoingProgram;
use TestNamespace\ProgramZohoDao;
use TestNamespace\UndergraduateZohoDao;
use Wabel\Zoho\CRM\Exception\ZohoCRMException;
use Wabel\Zoho\CRM\ZohoBeanInterface;
use Wabel\Zoho\CRM\ZohoClient;
use Rees\Sanitizer\Sanitizer;

class OnGoingProgramMapper implements MappingInterface {

    private $onGoingProgram;

    /**
     * @return array
     */
    public function getOnGoingProgram()
    {
        return $this->onGoingProgram;
    }

    /**
     * @param array $programs
     */
    public function setOnGoingProgram($onGoingProgram)
    {
        $this->onGoingProgram = $onGoingProgram;
    }

    public function getZohoClient()
    {
        return new ZohoClient($GLOBALS['auth_token']);
    }

    /**
     * Returns a Zoho Bean based on the bean passed in argument
     *
     * @param  object            $applicationBean
     * @return ZohoBeanInterface
     */
    public function toZohoBean($applicationBean)
    {
        if (!$applicationBean instanceof OnGoingProgramApplicationBean) {
            throw new ZohoCRMException("Expected OnGoingProgramApplicationBean");
        }

        $sanitizer = new Sanitizer;
        
        $sanitizer->register('onlyNumbersId', function ($field) {
            if(ctype_digit ($field)) 
                return $field;
            else
                return null;
        });

        $sanitizer->register('prepareStatus', function ($field) {
            if($field == 'Activo') 
                return 'true';
            else
                return 'false';
        });

        $input = [
            'NUMEROIDENTIFICACION' => $applicationBean->getIdNumber(),
            'PRODUCT' => $applicationBean->getProduct(),
            'ESTADO' => $applicationBean->getEnabled(),
        ];

        $rules = [
            'NUMEROIDENTIFICACION' => 'trim|onlyNumbersId',
            'PRODUCT' => 'trim',
            'ESTADO' => 'trim|prepareStatus',
        ];
        
        
        $sanitizer->sanitize($rules, $input);

        $programZohoDao = new ProgramZohoDao($this->getZohoClient());
        $programs = $programZohoDao->searchRecords('(Product Code:'.$input["PRODUCT"].')');
        $programZohoId = null;
        if (count($programs) > 0) {
            $getIndex = array_search($input["PRODUCT"], $programs);
            $programZohoId = $programs[$getIndex]->getZohoId();
        }
        
        $zohoBean = new OnGoingProgram();
        $undergraduatedZohoDao = new UndergraduateZohoDao($this->getZohoClient());
        $students = $undergraduatedZohoDao->searchRecords('(Identification Number:'.$input["NUMEROIDENTIFICACION"].')');
        $studentZohoId = null;
        if (count($students) > 0) {
            $getIndex = array_search($input["NUMEROIDENTIFICACION"], $students);
            $studentZohoId = $students[$getIndex]->getZohoId();
        }

        $zohoBean->setStudentId($studentZohoId);
        $zohoBean->setCurrentAcademicPeriod($applicationBean->getCurrentAcademicPeriod());
        /* $zohoBean->setEnabled($input["ESTADO"]); */
        $zohoBean->setJornada($applicationBean->getJornada());
        
        $zohoBean->setLocation($applicationBean->getLocation());
        $zohoBean->setType($applicationBean->getType());        
        $zohoBean->setCustomModule4Name($applicationBean->getBannerStudentId());
        $zohoBean->setZohoId($applicationBean->getZohoId());
        if ($applicationBean->getZohoLastModificationDate()) {
            $zohoBean->setModifiedTime($applicationBean->getZohoLastModificationDate());
        }
        
        if($programZohoId != null) {
            $zohoBean->setDegreeId($programZohoId);
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
        if (!$zohoBean instanceof OnGoingProgram) {
            throw new ZohoCRMException("Expected OnGoingProgram");
        }
        $applicationBean = new OnGoingProgramApplicationBean();
        $applicationBean->setStudentId($zohoBean->getStudentId());
        $applicationBean->setCurrentAcademicPeriod($zohoBean->getCurrentAcademicPeriod());
        $applicationBean->setEnabled($zohoBean->getEnabled());
        $applicationBean->setJornada($zohoBean->getJornada());
        $applicationBean->setProduct($zohoBean->getDegree());
        $applicationBean->setLocation($zohoBean->getLocation());
        $applicationBean->setType($zohoBean->getType());
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
        if (!$applicationBean instanceof OnGoingProgramApplicationBean) {
            throw new ZohoCRMException("Expected OnGoingProgramApplicationBean");
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
        return $this->onGoingProgram;
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