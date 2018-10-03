<?php
namespace TestNamespace;

/**
 */
class AcademicRights implements \Wabel\Zoho\CRM\ZohoBeanInterface {

	/**
	 * Zoho field Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $academicPeriod;

	/**
	 * Zoho field Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $academicPeriodID;

	/**
	 * Zoho field Academic Right Status
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $academicRightStatus;

	/**
	 * Zoho field Academic Right Status_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $academicRightStatusID;

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
	 * Zoho field Current Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $currentAmount;

	/**
	 * Zoho field CustomModule23 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule23Name;

	/**
	 * Zoho field CustomModule23 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule23Owner;

	/**
	 * Zoho field Description
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Whether 'academicPeriod' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAcademicPeriod = false;

	/**
	 * Whether 'academicPeriodID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAcademicPeriodID = false;

	/**
	 * Whether 'academicRightStatus' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAcademicRightStatus = false;

	/**
	 * Whether 'academicRightStatusID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAcademicRightStatusID = false;

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
	 * Whether 'currentAmount' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCurrentAmount = false;

	/**
	 * Whether 'customModule23Name' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule23Name = false;

	/**
	 * Whether 'customModule23Owner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule23Owner = false;

	/**
	 * Whether 'description' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDescription = false;

	/**
	 * Whether 'dueDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDueDate = false;

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
	 * Whether 'recharge' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyRecharge = false;

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
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Due Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 *
	 * @var \DateTimeInterface
	 */
	protected $dueDate;

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
	 * Zoho field Recharge
	 * Type: Double
	 * Read only: false
	 * Max length: 5
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $recharge;

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
	 * Get zoho field Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getAcademicPeriod() {
		return $this->academicPeriod;
	}

	/**
	 * Get zoho field Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getAcademicPeriodID() {
		return $this->academicPeriodID;
	}

	/**
	 * Get zoho field Academic Right Status
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getAcademicRightStatus() {
		return $this->academicRightStatus;
	}

	/**
	 * Get zoho field Academic Right Status_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getAcademicRightStatusID() {
		return $this->academicRightStatusID;
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
	 * Get zoho field Current Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 */
	public function getCurrentAmount() {
		return $this->currentAmount;
	}

	/**
	 * Get zoho field CustomModule23 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule23Name() {
		return $this->customModule23Name;
	}

	/**
	 * Get zoho field CustomModule23 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule23Owner() {
		return $this->customModule23Owner;
	}

	/**
	 * Get zoho field Description
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get zoho field Due Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 */
	public function getDueDate() {
		return $this->dueDate;
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
	 * Get zoho field Recharge
	 * Type: Double
	 * Read only: false
	 * Max length: 5
	 * Custom field: true
	 */
	public function getRecharge() {
		return $this->recharge;
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
	 * Set zoho field Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $academicPeriod
	 */
	public function setAcademicPeriod($academicPeriod) {
		$this->academicPeriod = $academicPeriod;
		$this->dirtyAcademicPeriod = true;
		return $this;
	}

	/**
	 * Set zoho field Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $academicPeriodID
	 */
	public function setAcademicPeriodID($academicPeriodID) {
		$this->academicPeriodID = $academicPeriodID;
		$this->dirtyAcademicPeriodID = true;
		return $this;
	}

	/**
	 * Set zoho field Academic Right Status
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $academicRightStatus
	 */
	public function setAcademicRightStatus($academicRightStatus) {
		$this->academicRightStatus = $academicRightStatus;
		$this->dirtyAcademicRightStatus = true;
		return $this;
	}

	/**
	 * Set zoho field Academic Right Status_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $academicRightStatusID
	 */
	public function setAcademicRightStatusID($academicRightStatusID) {
		$this->academicRightStatusID = $academicRightStatusID;
		$this->dirtyAcademicRightStatusID = true;
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
	 * Set zoho field Current Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @param string $currentAmount
	 */
	public function setCurrentAmount($currentAmount) {
		$this->currentAmount = $currentAmount;
		$this->dirtyCurrentAmount = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule23 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule23Name
	 */
	public function setCustomModule23Name($customModule23Name) {
		$this->customModule23Name = $customModule23Name;
		$this->dirtyCustomModule23Name = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule23 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule23Owner
	 */
	public function setCustomModule23Owner($customModule23Owner) {
		$this->customModule23Owner = $customModule23Owner;
		$this->dirtyCustomModule23Owner = true;
		return $this;
	}

	/**
	 * Set zoho field Description
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
		$this->dirtyDescription = true;
		return $this;
	}

	/**
	 * Set zoho field Due Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 *
	 * @param \DateTimeInterface $dueDate
	 */
	public function setDueDate(\DateTimeInterface $dueDate = null) {
		$this->dueDate = $dueDate;
		$this->dirtyDueDate = true;
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
	 * Set zoho field Recharge
	 * Type: Double
	 * Read only: false
	 * Max length: 5
	 * Custom field: true
	 *
	 * @param string $recharge
	 */
	public function setRecharge($recharge) {
		$this->recharge = $recharge;
		$this->dirtyRecharge = true;
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
