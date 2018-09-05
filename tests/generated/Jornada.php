<?php
namespace TestNamespace;

/**
 */
class Jornada implements \Wabel\Zoho\CRM\ZohoBeanInterface {

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
	 * Zoho field CustomModule19 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule19Name;

	/**
	 * Zoho field CustomModule19 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule19Owner;

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
	 * Whether 'customModule19Name' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule19Name = false;

	/**
	 * Whether 'customModule19Owner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule19Owner = false;

	/**
	 * Whether 'jornadaName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyJornadaName = false;

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
	 * Whether 'tag' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTag = false;

	/**
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Jornada Name
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $jornadaName;

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
	 * Get zoho field CustomModule19 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule19Name() {
		return $this->customModule19Name;
	}

	/**
	 * Get zoho field CustomModule19 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule19Owner() {
		return $this->customModule19Owner;
	}

	/**
	 * Get zoho field Jornada Name
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getJornadaName() {
		return $this->jornadaName;
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
	 * Set zoho field CustomModule19 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule19Name
	 */
	public function setCustomModule19Name($customModule19Name) {
		$this->customModule19Name = $customModule19Name;
		$this->dirtyCustomModule19Name = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule19 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule19Owner
	 */
	public function setCustomModule19Owner($customModule19Owner) {
		$this->customModule19Owner = $customModule19Owner;
		$this->dirtyCustomModule19Owner = true;
		return $this;
	}

	/**
	 * Set zoho field Jornada Name
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $jornadaName
	 */
	public function setJornadaName($jornadaName) {
		$this->jornadaName = $jornadaName;
		$this->dirtyJornadaName = true;
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
