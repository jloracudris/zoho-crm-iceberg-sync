<?php

namespace Wabel\Zoho\CRM\Sync;

use TestNamespace\Account;
use Wabel\Zoho\CRM\Exception\ZohoCRMException;
use Wabel\Zoho\CRM\ZohoBeanInterface;
use Rees\Sanitizer\Sanitizer;

class AccountMapper implements MappingInterface {

    private $accounts;

    /**
     * @return array
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param array $Accounts
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * Returns a Zoho Bean based on the bean passed in argument
     *
     * @param  object            $applicationBean
     * @return ZohoBeanInterface
     */
    public function toZohoBean($applicationBean)
    {
        if (!$applicationBean instanceof AccountApplicationBean) {
            throw new ZohoCRMException("Expected AccountApplicationBean");
        }
        $sanitizer = new Sanitizer;
        $input = [
            'NAME' => $applicationBean->getName(),
        ];

        $rules = [
            'NAME' => 'trim|strtoupper',
        ];

        $sanitizer->sanitize($rules, $input);


        $zohoBean = new Account();
        $zohoBean->setAccountCode($applicationBean->getCode());
        $zohoBean->setAccountName($input['NAME']);
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
        if (!$zohoBean instanceof Account) {
            throw new ZohoCRMException("Expected Account");
        }
        $applicationBean = new Account();
        $applicationBean->setName($zohoBean->getAccountName());
        $applicationBean->setCode($zohoBean->getAccountCode());
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
        if (!$applicationBean instanceof AccountApplicationBean) {
            throw new ZohoCRMException("Expected AccountApplicationBean");
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
        return $this->accounts;
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