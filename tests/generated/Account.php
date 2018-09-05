<?php
namespace TestNamespace;

/**
 */
class Account implements \Wabel\Zoho\CRM\ZohoBeanInterface {

	/**
	 * Zoho field Account Code
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $accountCode;

	/**
	 * Zoho field Account Name
	 * Type: Text
	 * Read only: false
	 * Max length: 200
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $accountName;

	/**
	 * Zoho field Account Number
	 * Type: BigInt
	 * Read only: false
	 * Max length: 18
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $accountNumber;

	/**
	 * Zoho field Account Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $accountOwner;

	/**
	 * Zoho field Account Site
	 * Type: Text
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $accountSite;

	/**
	 * Zoho field Account Type
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $accountType;

	/**
	 * Zoho field Annual Revenue
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $annualRevenue;

	/**
	 * Zoho field Billing City
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $billingCity;

	/**
	 * Zoho field Billing Code
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $billingCode;

	/**
	 * Zoho field Billing Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $billingCountry;

	/**
	 * Zoho field Billing State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $billingState;

	/**
	 * Zoho field Billing Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $billingStreet;

	/**
	 * Zoho field Box Folder ID
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $boxFolderID;

	/**
	 * Zoho field Created By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $createdBy;

	/**
	 * The time the record was created in Zoho
	 * Type: DateTime
	 *
	 * @var \DateTime
	 */
	protected $createdTime;

	/**
	 * Zoho field Currency
	 * Type: Pick List
	 * Read only: false
	 * Max length: 5
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $currency;

	/**
	 * Zoho field Description
	 * Type: TextArea
	 * Read only: false
	 * Max length: 32000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Whether 'accountCode' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountCode = false;

	/**
	 * Whether 'accountName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountName = false;

	/**
	 * Whether 'accountNumber' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountNumber = false;

	/**
	 * Whether 'accountOwner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountOwner = false;

	/**
	 * Whether 'accountSite' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountSite = false;

	/**
	 * Whether 'accountType' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountType = false;

	/**
	 * Whether 'annualRevenue' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAnnualRevenue = false;

	/**
	 * Whether 'billingCity' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBillingCity = false;

	/**
	 * Whether 'billingCode' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBillingCode = false;

	/**
	 * Whether 'billingCountry' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBillingCountry = false;

	/**
	 * Whether 'billingState' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBillingState = false;

	/**
	 * Whether 'billingStreet' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBillingStreet = false;

	/**
	 * Whether 'boxFolderID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBoxFolderID = false;

	/**
	 * Whether 'createdBy' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCreatedBy = false;

	/**
	 * Whether 'createdTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCreatedTime = false;

	/**
	 * Whether 'currency' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCurrency = false;

	/**
	 * Whether 'description' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDescription = false;

	/**
	 * Whether 'employees' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyEmployees = false;

	/**
	 * Whether 'fax' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFax = false;

	/**
	 * Whether 'industry' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyIndustry = false;

	/**
	 * Whether 'lastActivityTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLastActivityTime = false;

	/**
	 * Whether 'layout' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLayout = false;

	/**
	 * Whether 'modifiedBy' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyModifiedBy = false;

	/**
	 * Whether 'modifiedTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyModifiedTime = false;

	/**
	 * Whether 'ownership' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyOwnership = false;

	/**
	 * Whether 'parentAccount' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyParentAccount = false;

	/**
	 * Whether 'PARENTACCOUNTID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyPARENTACCOUNTID = false;

	/**
	 * Whether 'phone' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyPhone = false;

	/**
	 * Whether 'rating' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyRating = false;

	/**
	 * Whether 'shippingCity' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyShippingCity = false;

	/**
	 * Whether 'shippingCode' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyShippingCode = false;

	/**
	 * Whether 'shippingCountry' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyShippingCountry = false;

	/**
	 * Whether 'shippingState' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyShippingState = false;

	/**
	 * Whether 'shippingStreet' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyShippingStreet = false;

	/**
	 * Whether 'sICCode' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySICCode = false;

	/**
	 * Whether 'SMOWNERID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySMOWNERID = false;

	/**
	 * Whether 'tag' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTag = false;

	/**
	 * Whether 'tickerSymbol' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTickerSymbol = false;

	/**
	 * Whether 'website' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyWebsite = false;

	/**
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Employees
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var int
	 */
	protected $employees;

	/**
	 * Zoho field Fax
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $fax;

	/**
	 * Zoho field Industry
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $industry;

	/**
	 * Zoho field Last Activity Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $lastActivityTime;

	/**
	 * The Layout of this record in Zoho
	 * Type: string
	 *
	 * @var string
	 */
	protected $layout;

	/**
	 * Zoho field Modified By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $modifiedBy;

	/**
	 * The last time the record was modified in Zoho
	 * Type: DateTime
	 *
	 * @var \DateTime
	 */
	protected $modifiedTime;

	/**
	 * Zoho field Ownership
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $ownership;

	/**
	 * Zoho field Parent Account
	 * Type: Lookup
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $parentAccount;

	/**
	 * Zoho field PARENTACCOUNTID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $PARENTACCOUNTID;

	/**
	 * Zoho field Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $phone;

	/**
	 * Zoho field Rating
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $rating;

	/**
	 * Zoho field Shipping City
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $shippingCity;

	/**
	 * Zoho field Shipping Code
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $shippingCode;

	/**
	 * Zoho field Shipping Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $shippingCountry;

	/**
	 * Zoho field Shipping State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $shippingState;

	/**
	 * Zoho field Shipping Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $shippingStreet;

	/**
	 * Zoho field SIC Code
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var int
	 */
	protected $sICCode;

	/**
	 * Zoho field SMOWNERID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $SMOWNERID;

	/**
	 * Zoho field Tag
	 * Type: Text
	 * Read only: false
	 * Max length: 2000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $tag;

	/**
	 * Zoho field Ticker Symbol
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $tickerSymbol;

	/**
	 * Zoho field Website
	 * Type: Website
	 * Read only: false
	 * Max length: 255
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $website;

	/**
	 * The ID of this record in Zoho
	 * Type: string
	 *
	 * @var string
	 */
	protected $zohoId;

	/**
	 */
	public function __construct() {
	}

	/**
	 * Get zoho field Account Code
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getAccountCode() {
		return $this->accountCode;
	}

	/**
	 * Get zoho field Account Name
	 * Type: Text
	 * Read only: false
	 * Max length: 200
	 * Custom field: false
	 */
	public function getAccountName() {
		return $this->accountName;
	}

	/**
	 * Get zoho field Account Number
	 * Type: BigInt
	 * Read only: false
	 * Max length: 18
	 * Custom field: false
	 */
	public function getAccountNumber() {
		return $this->accountNumber;
	}

	/**
	 * Get zoho field Account Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getAccountOwner() {
		return $this->accountOwner;
	}

	/**
	 * Get zoho field Account Site
	 * Type: Text
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 */
	public function getAccountSite() {
		return $this->accountSite;
	}

	/**
	 * Get zoho field Account Type
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getAccountType() {
		return $this->accountType;
	}

	/**
	 * Get zoho field Annual Revenue
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 */
	public function getAnnualRevenue() {
		return $this->annualRevenue;
	}

	/**
	 * Get zoho field Billing City
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getBillingCity() {
		return $this->billingCity;
	}

	/**
	 * Get zoho field Billing Code
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getBillingCode() {
		return $this->billingCode;
	}

	/**
	 * Get zoho field Billing Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getBillingCountry() {
		return $this->billingCountry;
	}

	/**
	 * Get zoho field Billing State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getBillingState() {
		return $this->billingState;
	}

	/**
	 * Get zoho field Billing Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 */
	public function getBillingStreet() {
		return $this->billingStreet;
	}

	/**
	 * Get zoho field Box Folder ID
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getBoxFolderID() {
		return $this->boxFolderID;
	}

	/**
	 * Get zoho field Created By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Get the time the record was created in Zoho
	 * Type: DateTime
	 */
	public function getCreatedTime() {
		return $this->createdTime;
	}

	/**
	 * Get zoho field Currency
	 * Type: Pick List
	 * Read only: false
	 * Max length: 5
	 * Custom field: false
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Get zoho field Description
	 * Type: TextArea
	 * Read only: false
	 * Max length: 32000
	 * Custom field: false
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get zoho field Employees
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getEmployees() {
		return $this->employees;
	}

	/**
	 * Get zoho field Fax
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Get zoho field Industry
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getIndustry() {
		return $this->industry;
	}

	/**
	 * Get zoho field Last Activity Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getLastActivityTime() {
		return $this->lastActivityTime;
	}

	/**
	 * Get the Layout of this record in Zoho
	 * Type: string
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Get zoho field Modified By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getModifiedBy() {
		return $this->modifiedBy;
	}

	/**
	 * Get the last time the record was modified in Zoho
	 * Type: DateTime
	 */
	public function getModifiedTime() {
		return $this->modifiedTime;
	}

	/**
	 * Get zoho field Ownership
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getOwnership() {
		return $this->ownership;
	}

	/**
	 * Get zoho field Parent Account
	 * Type: Lookup
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 */
	public function getParentAccount() {
		return $this->parentAccount;
	}

	/**
	 * Get zoho field PARENTACCOUNTID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 100
	 * Custom field: false
	 */
	public function getPARENTACCOUNTID() {
		return $this->PARENTACCOUNTID;
	}

	/**
	 * Get zoho field Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Get zoho field Rating
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Get zoho field Shipping City
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getShippingCity() {
		return $this->shippingCity;
	}

	/**
	 * Get zoho field Shipping Code
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getShippingCode() {
		return $this->shippingCode;
	}

	/**
	 * Get zoho field Shipping Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getShippingCountry() {
		return $this->shippingCountry;
	}

	/**
	 * Get zoho field Shipping State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getShippingState() {
		return $this->shippingState;
	}

	/**
	 * Get zoho field Shipping Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 */
	public function getShippingStreet() {
		return $this->shippingStreet;
	}

	/**
	 * Get zoho field SIC Code
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getSICCode() {
		return $this->sICCode;
	}

	/**
	 * Get zoho field SMOWNERID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: false
	 */
	public function getSMOWNERID() {
		return $this->SMOWNERID;
	}

	/**
	 * Get zoho field Tag
	 * Type: Text
	 * Read only: false
	 * Max length: 2000
	 * Custom field: false
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * Get zoho field Ticker Symbol
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getTickerSymbol() {
		return $this->tickerSymbol;
	}

	/**
	 * Get zoho field Website
	 * Type: Website
	 * Read only: false
	 * Max length: 255
	 * Custom field: false
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * Get the ID of this record in Zoho
	 * Type: string
	 */
	public function getZohoId() {
		return $this->zohoId;
	}

	/**
	 * Returns whether a property is changed or not.
	 *
	 * @param $name
	 * @return bool
	 */
	public function isDirty($name) {
		$propertyName = 'dirty'.ucfirst($name);
		return $this->$propertyName;
	}

	/**
	 * Set zoho field Account Code
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $accountCode
	 */
	public function setAccountCode($accountCode) {
		$this->accountCode = $accountCode;
		$this->dirtyAccountCode = true;
		return $this;
	}

	/**
	 * Set zoho field Account Name
	 * Type: Text
	 * Read only: false
	 * Max length: 200
	 * Custom field: false
	 *
	 * @param string $accountName
	 */
	public function setAccountName($accountName) {
		$this->accountName = $accountName;
		$this->dirtyAccountName = true;
		return $this;
	}

	/**
	 * Set zoho field Account Number
	 * Type: BigInt
	 * Read only: false
	 * Max length: 18
	 * Custom field: false
	 *
	 * @param string $accountNumber
	 */
	public function setAccountNumber($accountNumber) {
		$this->accountNumber = $accountNumber;
		$this->dirtyAccountNumber = true;
		return $this;
	}

	/**
	 * Set zoho field Account Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $accountOwner
	 */
	public function setAccountOwner($accountOwner) {
		$this->accountOwner = $accountOwner;
		$this->dirtyAccountOwner = true;
		return $this;
	}

	/**
	 * Set zoho field Account Site
	 * Type: Text
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @param string $accountSite
	 */
	public function setAccountSite($accountSite) {
		$this->accountSite = $accountSite;
		$this->dirtyAccountSite = true;
		return $this;
	}

	/**
	 * Set zoho field Account Type
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $accountType
	 */
	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		$this->dirtyAccountType = true;
		return $this;
	}

	/**
	 * Set zoho field Annual Revenue
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @param string $annualRevenue
	 */
	public function setAnnualRevenue($annualRevenue) {
		$this->annualRevenue = $annualRevenue;
		$this->dirtyAnnualRevenue = true;
		return $this;
	}

	/**
	 * Set zoho field Billing City
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $billingCity
	 */
	public function setBillingCity($billingCity) {
		$this->billingCity = $billingCity;
		$this->dirtyBillingCity = true;
		return $this;
	}

	/**
	 * Set zoho field Billing Code
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $billingCode
	 */
	public function setBillingCode($billingCode) {
		$this->billingCode = $billingCode;
		$this->dirtyBillingCode = true;
		return $this;
	}

	/**
	 * Set zoho field Billing Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $billingCountry
	 */
	public function setBillingCountry($billingCountry) {
		$this->billingCountry = $billingCountry;
		$this->dirtyBillingCountry = true;
		return $this;
	}

	/**
	 * Set zoho field Billing State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $billingState
	 */
	public function setBillingState($billingState) {
		$this->billingState = $billingState;
		$this->dirtyBillingState = true;
		return $this;
	}

	/**
	 * Set zoho field Billing Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $billingStreet
	 */
	public function setBillingStreet($billingStreet) {
		$this->billingStreet = $billingStreet;
		$this->dirtyBillingStreet = true;
		return $this;
	}

	/**
	 * Set zoho field Box Folder ID
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $boxFolderID
	 */
	public function setBoxFolderID($boxFolderID) {
		$this->boxFolderID = $boxFolderID;
		$this->dirtyBoxFolderID = true;
		return $this;
	}

	/**
	 * Set zoho field Created By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param string $createdBy
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		$this->dirtyCreatedBy = true;
		return $this;
	}

	/**
	 * Set the time the record was created in Zoho
	 * Type: DateTime
	 *
	 * @param \DateTime $createdTime
	 */
	public function setCreatedTime(\DateTime $createdTime) {
		$this->createdTime = $createdTime;
		$this->dirtyCreatedTime = true;
		return $this;
	}

	/**
	 * Set zoho field Currency
	 * Type: Pick List
	 * Read only: false
	 * Max length: 5
	 * Custom field: false
	 *
	 * @param string $currency
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;
		$this->dirtyCurrency = true;
		return $this;
	}

	/**
	 * Set zoho field Description
	 * Type: TextArea
	 * Read only: false
	 * Max length: 32000
	 * Custom field: false
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
		$this->dirtyDescription = true;
		return $this;
	}

	/**
	 * Set zoho field Employees
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param int $employees
	 */
	public function setEmployees($employees) {
		$this->employees = $employees;
		$this->dirtyEmployees = true;
		return $this;
	}

	/**
	 * Set zoho field Fax
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $fax
	 */
	public function setFax($fax) {
		$this->fax = $fax;
		$this->dirtyFax = true;
		return $this;
	}

	/**
	 * Set zoho field Industry
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $industry
	 */
	public function setIndustry($industry) {
		$this->industry = $industry;
		$this->dirtyIndustry = true;
		return $this;
	}

	/**
	 * Set zoho field Last Activity Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $lastActivityTime
	 */
	public function setLastActivityTime(\DateTimeInterface $lastActivityTime = null) {
		$this->lastActivityTime = $lastActivityTime;
		$this->dirtyLastActivityTime = true;
		return $this;
	}

	/**
	 * Set the Layout of this record in Zoho
	 * Type: string
	 *
	 * @param string $layout
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
		$this->dirtyLayout = true;
		return $this;
	}

	/**
	 * Set zoho field Modified By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param string $modifiedBy
	 */
	public function setModifiedBy($modifiedBy) {
		$this->modifiedBy = $modifiedBy;
		$this->dirtyModifiedBy = true;
		return $this;
	}

	/**
	 * Set the last time the record was modified in Zoho
	 * Type: DateTime
	 *
	 * @param \DateTime $modifiedTime
	 */
	public function setModifiedTime(\DateTime $modifiedTime) {
		$this->modifiedTime = $modifiedTime;
		$this->dirtyModifiedTime = true;
		return $this;
	}

	/**
	 * Set zoho field Ownership
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $ownership
	 */
	public function setOwnership($ownership) {
		$this->ownership = $ownership;
		$this->dirtyOwnership = true;
		return $this;
	}

	/**
	 * Set zoho field Parent Account
	 * Type: Lookup
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @param string $parentAccount
	 */
	public function setParentAccount($parentAccount) {
		$this->parentAccount = $parentAccount;
		$this->dirtyParentAccount = true;
		return $this;
	}

	/**
	 * Set zoho field PARENTACCOUNTID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 100
	 * Custom field: false
	 *
	 * @param string $PARENTACCOUNTID
	 */
	public function setPARENTACCOUNTID($PARENTACCOUNTID) {
		$this->PARENTACCOUNTID = $PARENTACCOUNTID;
		$this->dirtyPARENTACCOUNTID = true;
		return $this;
	}

	/**
	 * Set zoho field Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $phone
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
		$this->dirtyPhone = true;
		return $this;
	}

	/**
	 * Set zoho field Rating
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $rating
	 */
	public function setRating($rating) {
		$this->rating = $rating;
		$this->dirtyRating = true;
		return $this;
	}

	/**
	 * Set zoho field Shipping City
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $shippingCity
	 */
	public function setShippingCity($shippingCity) {
		$this->shippingCity = $shippingCity;
		$this->dirtyShippingCity = true;
		return $this;
	}

	/**
	 * Set zoho field Shipping Code
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $shippingCode
	 */
	public function setShippingCode($shippingCode) {
		$this->shippingCode = $shippingCode;
		$this->dirtyShippingCode = true;
		return $this;
	}

	/**
	 * Set zoho field Shipping Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $shippingCountry
	 */
	public function setShippingCountry($shippingCountry) {
		$this->shippingCountry = $shippingCountry;
		$this->dirtyShippingCountry = true;
		return $this;
	}

	/**
	 * Set zoho field Shipping State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $shippingState
	 */
	public function setShippingState($shippingState) {
		$this->shippingState = $shippingState;
		$this->dirtyShippingState = true;
		return $this;
	}

	/**
	 * Set zoho field Shipping Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $shippingStreet
	 */
	public function setShippingStreet($shippingStreet) {
		$this->shippingStreet = $shippingStreet;
		$this->dirtyShippingStreet = true;
		return $this;
	}

	/**
	 * Set zoho field SIC Code
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param int $sICCode
	 */
	public function setSICCode($sICCode) {
		$this->sICCode = $sICCode;
		$this->dirtySICCode = true;
		return $this;
	}

	/**
	 * Set zoho field SMOWNERID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $SMOWNERID
	 */
	public function setSMOWNERID($SMOWNERID) {
		$this->SMOWNERID = $SMOWNERID;
		$this->dirtySMOWNERID = true;
		return $this;
	}

	/**
	 * Set zoho field Tag
	 * Type: Text
	 * Read only: false
	 * Max length: 2000
	 * Custom field: false
	 *
	 * @param string $tag
	 */
	public function setTag($tag) {
		$this->tag = $tag;
		$this->dirtyTag = true;
		return $this;
	}

	/**
	 * Set zoho field Ticker Symbol
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $tickerSymbol
	 */
	public function setTickerSymbol($tickerSymbol) {
		$this->tickerSymbol = $tickerSymbol;
		$this->dirtyTickerSymbol = true;
		return $this;
	}

	/**
	 * Set zoho field Website
	 * Type: Website
	 * Read only: false
	 * Max length: 255
	 * Custom field: false
	 *
	 * @param string $website
	 */
	public function setWebsite($website) {
		$this->website = $website;
		$this->dirtyWebsite = true;
		return $this;
	}

	/**
	 * Set the ID of this record in Zoho
	 * Type: string
	 *
	 * @param string $zohoId
	 */
	public function setZohoId($zohoId) {
		$this->zohoId = $zohoId;
		$this->dirtyZohoId = true;
		return $this;
	}
}
