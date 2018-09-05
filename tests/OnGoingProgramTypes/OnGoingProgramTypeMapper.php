<?php

namespace Wabel\Zoho\CRM\Sync;

use TestNamespace\OnGoingProgramType;
use Wabel\Zoho\CRM\Exception\ZohoCRMException;
use Wabel\Zoho\CRM\ZohoBeanInterface;
use Rees\Sanitizer\Sanitizer;

class OnGoingProgramTypeMapper implements MappingInterface {

    private $onGoingProgramTypes;

    /**
     * @return array
     */
    public function getOnGoingProgramTypes()
    {
        return $this->onGoingProgramTypes;
    }

    /**
     * @param array $Disabilities
     */
    public function setOnGoingProgramTypes($onGoingProgramTypes)
    {
        $this->onGoingProgramTypes = $onGoingProgramTypes;
    }

    /**
     * Returns a Zoho Bean based on the bean passed in argument
     *
     * @param  object            $applicationBean
     * @return ZohoBeanInterface
     */
    public function toZohoBean($applicationBean)
    {
        if (!$applicationBean instanceof OnGoingProgramTypeApplicationBean) {
            throw new ZohoCRMException("Expected OnGoingProgramTypeApplicationBean");
        }
        $sanitizer = new Sanitizer;
        $input = [
            'NAME' => $applicationBean->getName(),
        ];

        $rules = [
            'NAME' => 'trim|strtoupper',
        ];

        $sanitizer->sanitize($rules, $input);


        $zohoBean = new OnGoingProgramType();
        $zohoBean->setCustomModule18Name($applicationBean->getCode());
        $zohoBean->setOnGoingProgramTypeName($input['NAME']);
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
        if (!$zohoBean instanceof OnGoingProgramType) {
            throw new ZohoCRMException("Expected OnGoingProgramType");
        }
        $applicationBean = new OnGoingProgramType();
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
        if (!$applicationBean instanceof OnGoingProgramTypeApplicationBean) {
            throw new ZohoCRMException("Expected OnGoingProgramTypeApplicationBean");
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
        return $this->onGoingProgramTypes;
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