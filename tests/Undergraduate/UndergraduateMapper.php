<?php

namespace Wabel\Zoho\CRM\Sync;

use TestNamespace\Undergraduate;
use TestNamespace\CityZohoDao;
use Wabel\Zoho\CRM\Exception\ZohoCRMException;
use Wabel\Zoho\CRM\ZohoBeanInterface;
use Rees\Sanitizer\Sanitizer;
use Wabel\Zoho\CRM\ZohoClient;

class UndergraduateMapper implements MappingInterface {

    private $undergraduate;

    /**
     * @return array
     */
    public function getUndergraduate()
    {
        return $this->undergraduate;
    }

    /**
     * @param array $undergraduate
     */
    public function setUndergraduate($undergraduate)
    {
        $this->undergraduate = $undergraduate;
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
        if (!$applicationBean instanceof UndergraduateApplicationBean) {
            throw new ZohoCRMException("Expected UndergraduateApplicationBean");
        }

        $sanitizer = new Sanitizer;
        
        $sanitizer->register('checkEmail', function ($field) {
            if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $field)) 
                return $field;
            else
                return "";
        });

        $sanitizer->register('onlyNumbersId', function ($field) {
            if(ctype_digit ($field)) 
                return $field;
            else
                return null;
        });

        $sanitizer->register('idTypesValidation', function ($field) {
            $types = ['CC', 'RC', 'TI', 'CE', 'PB'];
            if(in_array($field, $types)) 
                return $field;
            else
                return null;
        });

        $sanitizer->register('validateCellPhone', function ($field) { 
            $sanitizedPhone = preg_replace('/[^0-9]/', '', $field);          
            if(strlen($sanitizedPhone) == 10) 
                return $sanitizedPhone;
            else
                return null;
        });

        $sanitizer->register('validatePhone', function ($field) {
            $sanitizedPhone = preg_replace('/[^0-9]/', '', $field);            
            if(substr($sanitizedPhone, 0, 2) == '57') {
                return substr($sanitizedPhone, 2);
            } else {
                return $sanitizedPhone;
            }
        });

        $sanitizer->register('remove2Spaces', function ($field) {
            $field = preg_replace('/\s+/', ' ', $field);           
            return $field;
        });

        $input = [
            'PRIMER_NOMBRE'  => htmlentities($applicationBean->getFirstName(), ENT_QUOTES, "UTF-8"),
            'SEGUNDO_NOMBRE'  => htmlentities($applicationBean->getMiddleName(), ENT_QUOTES, "UTF-8"),
            'PRIMER_APELLIDO'  => htmlentities($applicationBean->getLastName(), ENT_QUOTES, "UTF-8"),
            'SEGUNDO_APELLIDO'  => $applicationBean->getSecondSurname() != null? htmlentities($applicationBean->getSecondSurname(), ENT_QUOTES, "UTF-8"): '',
            'EMAIL'  => $applicationBean->getEmail(),
            'NUMEROIDENTIFICACION' => $applicationBean->getIdentificationNumber(),
            'TIPOIDENTIFICACION' => $applicationBean->getIdentificationType(),
            'EMAILSECUNDARIO'  => $applicationBean->getSecondaryEmail(),
            'CELULAR'  => $applicationBean->getCellPhone(),
            'TELEFONO'  => $applicationBean->getPhone(),
            'DIRECCION'  => $applicationBean->getAddress(),
            'CIUDAD'  => $applicationBean->getCity(),
        ];

        $rules = [
            'PRIMER_NOMBRE' => 'trim|strtolower|ucwords',
            'SEGUNDO_NOMBRE' => 'trim|strtolower|ucwords',
            'PRIMER_APELLIDO'  => 'trim|strtolower|ucwords',
            'SEGUNDO_APELLIDO'  => 'trim|strtolower|ucwords',
            'EMAIL' => 'trim|checkEmail',
            'NUMEROIDENTIFICACION' => 'trim|onlyNumbersId',
            'TIPOIDENTIFICACION' => 'trim|idTypesValidation',
            'EMAILSECUNDARIO'  => 'trim|checkEmail',
            'CELULAR'  => 'trim|validateCellPhone',
            'TELEFONO'  => 'trim|validatePhone',
            'DIRECCION'  => 'trim|strtolower|strtoupper|remove2Spaces',
            'CIUDAD' => 'trim|strtolower|ucwords',
        ];
        
        
        $sanitizer->sanitize($rules, $input);

        $cityZohoDao= new CityZohoDao($this->getZohoClient());
        $cities = $cityZohoDao->searchRecords('(City Code:'.$input['CIUDAD'].')');
        $cityZohoId = null;
        if (count($cities) > 0) {
            $getIndex = array_search($input["CIUDAD"], $cities);
            $cityZohoId = $cities[$getIndex]->getZohoId();
        }

        $zohoBean = new Undergraduate();
        $zohoBean->setFirstName($input['PRIMER_NOMBRE']);
        $zohoBean->setMiddleName($input['SEGUNDO_NOMBRE']);
        $zohoBean->setLastName($input['PRIMER_APELLIDO']);
        $zohoBean->setSecondSurname($input['SEGUNDO_APELLIDO']);
        $zohoBean->setEmail($input['EMAIL']);
        $zohoBean->setIdentificationType($input['TIPOIDENTIFICACION']);
        $zohoBean->setIdentificationNumber($input['NUMEROIDENTIFICACION']);        
        $zohoBean->setGender($applicationBean->getGender());
        $zohoBean->setDateOfBirth($applicationBean->getDateOfBirth());
        $zohoBean->setSecondaryEmail($input['EMAILSECUNDARIO']);
        $zohoBean->setMobile($input['CELULAR']);
        $zohoBean->setOtherPhone($input['TELEFONO']);
        $zohoBean->setMailingStreet($input['DIRECCION']);
        $zohoBean->setCityId($cityZohoId);
        $zohoBean->setLayout($applicationBean->getProgramLayout());
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
        if (!$zohoBean instanceof Undergraduate) {
            throw new ZohoCRMException("Expected Program");
        }

        $input = [
            'PRIMER_NOMBRE'  => $zohoBean->getFirstName(),
            'SEGUNDO_NOMBRE'  => $zohoBean->getMiddleName(),
            'PRIMER_APELLIDO'  => $zohoBean->getLastName(),
            'SEGUNDO_APELLIDO'  => $zohoBean->getSecondSurname(),
            'EMAIL'  => $zohoBean->getEmail() != null? $zohoBean->getEmail() : "",
        ];
    
        $rules = [
            'PRIMER_NOMBRE' => 'trim|strtolower|ucwords',
            'SEGUNDO_NOMBRE' => 'trim|strtolower|ucwords',
            'PRIMER_APELLIDO'  => 'trim|strtolower|ucwords',
            'SEGUNDO_APELLIDO'  => 'trim|strtolower|ucwords',
            'EMAIL' => 'trim|preg_replace:/\+\w+/::{{ VALUE }}'            
        ];
        $sanitizer = new Sanitizer;
        $sanitizer->sanitize($rules, $input);


        $applicationBean = new UndergraduateApplicationBean();
        $applicationBean->setFirstName($zohoBean->getFirstName());
        $applicationBean->setMiddleName($zohoBean->getMiddleName());
        $applicationBean->setLastName($zohoBean->getLastName());
        $applicationBean->setSecondSurname($zohoBean->getSecondSurname());
        $applicationBean->setIdentificationType($zohoBean->getIdentificationType());
        $applicationBean->setEmail($input['EMAIL']);
        $applicationBean->setIdentificationNumber($zohoBean->getIdentificationNumber());
        $applicationBean->setGender($zohoBean->getGender());
        $applicationBean->setDateOfBirth($zohoBean->getDateOfBirth());
        $applicationBean->setProgramLayout($zohoBean->getProgramLayout());
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
        if (!$applicationBean instanceof UndergraduateApplicationBean) {
            throw new ZohoCRMException("Expected UndergraduateApplicationBean");
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
        return $this->undergraduate;
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