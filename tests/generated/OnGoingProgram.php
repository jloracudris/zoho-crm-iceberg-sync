<?php
namespace TestNamespace;

/**
 */
class OnGoingProgram implements \Wabel\Zoho\CRM\ZohoBeanInterface {

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
	 * Zoho field Current Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $currentAcademicPeriod;

	/**
	 * Zoho field Current Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $currentAcademicPeriodID;

	/**
	 * Zoho field CustomModule4 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule4Name;

	/**
	 * Zoho field CustomModule4 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule4Owner;

	/**
	 * Zoho field Degree
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $degree;

	/**
	 * Zoho field Degree_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $degreeID;

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
	 * Whether 'currentAcademicPeriod' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCurrentAcademicPeriod = false;

	/**
	 * Whether 'currentAcademicPeriodID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCurrentAcademicPeriodID = false;

	/**
	 * Whether 'customModule4Name' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule4Name = false;

	/**
	 * Whether 'customModule4Owner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule4Owner = false;

	/**
	 * Whether 'degree' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDegree = false;

	/**
	 * Whether 'degreeID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDegreeID = false;

	/**
	 * Whether 'enabled' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyEnabled = false;

	/**
	 * Whether 'jornada' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyJornada = false;

	/**
	 * Whether 'jornadaID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyJornadaID = false;

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
	 * Whether 'location' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLocation = false;

	/**
	 * Whether 'locationID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLocationID = false;

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
	 * Whether 'student' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyStudent = false;

	/**
	 * Whether 'studentID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyStudentID = false;

	/**
	 * Whether 'tag' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTag = false;

	/**
	 * Whether 'type' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyType = false;

	/**
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Enabled
	 * Type: Boolean
	 * Read only: false
	 * Max length: 3
	 * Custom field: true
	 *
	 * @var bool
	 */
	protected $enabled;

	/**
	 * Zoho field Jornada
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $jornada;

	/**
	 * Zoho field Jornada_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $jornadaID;

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
	 * Zoho field Location
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $location;

	/**
	 * Zoho field Location_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $locationID;

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
	 * Zoho field Student
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $student;

	/**
	 * Zoho field Student_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $studentID;

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
	 * Zoho field Type
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $type;

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
	 * Get zoho field Current Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getCurrentAcademicPeriod() {
		return $this->currentAcademicPeriod;
	}

	/**
	 * Get zoho field Current Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getCurrentAcademicPeriodID() {
		return $this->currentAcademicPeriodID;
	}

	/**
	 * Get zoho field CustomModule4 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule4Name() {
		return $this->customModule4Name;
	}

	/**
	 * Get zoho field CustomModule4 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule4Owner() {
		return $this->customModule4Owner;
	}

	/**
	 * Get zoho field Degree
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getDegree() {
		return $this->degree;
	}

	/**
	 * Get zoho field Degree_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getDegreeID() {
		return $this->degreeID;
	}

	/**
	 * Get zoho field Enabled
	 * Type: Boolean
	 * Read only: false
	 * Max length: 3
	 * Custom field: true
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * Get zoho field Jornada
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getJornada() {
		return $this->jornada;
	}

	/**
	 * Get zoho field Jornada_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getJornadaID() {
		return $this->jornadaID;
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
	 * Get zoho field Location
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Get zoho field Location_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getLocationID() {
		return $this->locationID;
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
	 * Get zoho field Student
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getStudent() {
		return $this->student;
	}

	/**
	 * Get zoho field Student_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getStudentID() {
		return $this->studentID;
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
	 * Get zoho field Type
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getType() {
		return $this->type;
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
	 * Set zoho field Current Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $currentAcademicPeriod
	 */
	public function setCurrentAcademicPeriod($currentAcademicPeriod) {
		$this->currentAcademicPeriod = $currentAcademicPeriod;
		$this->dirtyCurrentAcademicPeriod = true;
		return $this;
	}

	/**
	 * Set zoho field Current Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $currentAcademicPeriodID
	 */
	public function setCurrentAcademicPeriodID($currentAcademicPeriodID) {
		$this->currentAcademicPeriodID = $currentAcademicPeriodID;
		$this->dirtyCurrentAcademicPeriodID = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule4 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule4Name
	 */
	public function setCustomModule4Name($customModule4Name) {
		$this->customModule4Name = $customModule4Name;
		$this->dirtyCustomModule4Name = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule4 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule4Owner
	 */
	public function setCustomModule4Owner($customModule4Owner) {
		$this->customModule4Owner = $customModule4Owner;
		$this->dirtyCustomModule4Owner = true;
		return $this;
	}

	/**
	 * Set zoho field Degree
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $degree
	 */
	public function setDegree($degree) {
		$this->degree = $degree;
		$this->dirtyDegree = true;
		return $this;
	}

	/**
	 * Set zoho field Degree_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $degreeID
	 */
	public function setDegreeID($degreeID) {
		$this->degreeID = $degreeID;
		$this->dirtyDegreeID = true;
		return $this;
	}

	/**
	 * Set zoho field Enabled
	 * Type: Boolean
	 * Read only: false
	 * Max length: 3
	 * Custom field: true
	 *
	 * @param bool $enabled
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		$this->dirtyEnabled = true;
		return $this;
	}

	/**
	 * Set zoho field Jornada
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $jornada
	 */
	public function setJornada($jornada) {
		$this->jornada = $jornada;
		$this->dirtyJornada = true;
		return $this;
	}

	/**
	 * Set zoho field Jornada_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $jornadaID
	 */
	public function setJornadaID($jornadaID) {
		$this->jornadaID = $jornadaID;
		$this->dirtyJornadaID = true;
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
	 * Set zoho field Location
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $location
	 */
	public function setLocation($location) {
		$this->location = $location;
		$this->dirtyLocation = true;
		return $this;
	}

	/**
	 * Set zoho field Location_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $locationID
	 */
	public function setLocationID($locationID) {
		$this->locationID = $locationID;
		$this->dirtyLocationID = true;
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
	 * Set zoho field Student
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $student
	 */
	public function setStudent($student) {
		$this->student = $student;
		$this->dirtyStudent = true;
		return $this;
	}

	/**
	 * Set zoho field Student_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $studentID
	 */
	public function setStudentID($studentID) {
		$this->studentID = $studentID;
		$this->dirtyStudentID = true;
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
	 * Set zoho field Type
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
		$this->dirtyType = true;
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
