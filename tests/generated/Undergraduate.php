<?php
namespace TestNamespace;

/**
 */
class Undergraduate implements \Wabel\Zoho\CRM\ZohoBeanInterface {

	/**
	 * Zoho field ACCOUNTID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $ACCOUNTID;

	/**
	 * Zoho field Account Name
	 * Type: Lookup
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $accountName;

	/**
	 * Zoho field Ad
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $ad;

	/**
	 * Zoho field Ad Campaign Name
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $adCampaignName;

	/**
	 * Zoho field Ad Click Date
	 * Type: Date
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $adClickDate;

	/**
	 * Zoho field AdGroup Name
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $adGroupName;

	/**
	 * Zoho field Ad Network
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $adNetwork;

	/**
	 * Zoho field Average Time Spent (Minutes)
	 * Type: Double
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $averageTimeSpentMinutes;

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
	 * Zoho field City
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $city;

	/**
	 * Zoho field City_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $cityID;

	/**
	 * Zoho field Click Type
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $clickType;

	/**
	 * Zoho field Contact Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $contactOwner;

	/**
	 * Zoho field Conversion Exported On
	 * Type: DateTime
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $conversionExportedOn;

	/**
	 * Zoho field Conversion Export Status
	 * Type: Pick List
	 * Read only: true
	 * Max length: 255
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $conversionExportStatus;

	/**
	 * Zoho field Cost per Click
	 * Type: Currency
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $costPerClick;

	/**
	 * Zoho field Cost per Conversion
	 * Type: Currency
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $costPerConversion;

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
	 * Zoho field Date of Birth
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $dateOfBirth;

	/**
	 * Zoho field Days Visited
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var int
	 */
	protected $daysVisited;

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
	 * Zoho field Device Type
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $deviceType;

	/**
	 * Whether 'ACCOUNTID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyACCOUNTID = false;

	/**
	 * Whether 'accountName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAccountName = false;

	/**
	 * Whether 'ad' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAd = false;

	/**
	 * Whether 'adCampaignName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAdCampaignName = false;

	/**
	 * Whether 'adClickDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAdClickDate = false;

	/**
	 * Whether 'adGroupName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAdGroupName = false;

	/**
	 * Whether 'adNetwork' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAdNetwork = false;

	/**
	 * Whether 'averageTimeSpentMinutes' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAverageTimeSpentMinutes = false;

	/**
	 * Whether 'boxFolderID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyBoxFolderID = false;

	/**
	 * Whether 'city' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCity = false;

	/**
	 * Whether 'cityID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCityID = false;

	/**
	 * Whether 'clickType' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyClickType = false;

	/**
	 * Whether 'contactOwner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyContactOwner = false;

	/**
	 * Whether 'conversionExportedOn' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyConversionExportedOn = false;

	/**
	 * Whether 'conversionExportStatus' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyConversionExportStatus = false;

	/**
	 * Whether 'costPerClick' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCostPerClick = false;

	/**
	 * Whether 'costPerConversion' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCostPerConversion = false;

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
	 * Whether 'dateOfBirth' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDateOfBirth = false;

	/**
	 * Whether 'daysVisited' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDaysVisited = false;

	/**
	 * Whether 'description' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDescription = false;

	/**
	 * Whether 'deviceType' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDeviceType = false;

	/**
	 * Whether 'email' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyEmail = false;

	/**
	 * Whether 'emailOptOut' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyEmailOptOut = false;

	/**
	 * Whether 'firstName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFirstName = false;

	/**
	 * Whether 'firstVisitedTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFirstVisitedTime = false;

	/**
	 * Whether 'firstVisitedURL' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFirstVisitedURL = false;

	/**
	 * Whether 'gCLID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyGCLID = false;

	/**
	 * Whether 'gender' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyGender = false;

	/**
	 * Whether 'homePhone' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyHomePhone = false;

	/**
	 * Whether 'identificationNumber' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyIdentificationNumber = false;

	/**
	 * Whether 'identificationType' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyIdentificationType = false;

	/**
	 * Whether 'keyword' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyKeyword = false;

	/**
	 * Whether 'lastActivityTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLastActivityTime = false;

	/**
	 * Whether 'lastName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLastName = false;

	/**
	 * Whether 'lastVisitedTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLastVisitedTime = false;

	/**
	 * Whether 'layout' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLayout = false;

	/**
	 * Whether 'mailingCountry' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyMailingCountry = false;

	/**
	 * Whether 'mailingState' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyMailingState = false;

	/**
	 * Whether 'mailingStreet' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyMailingStreet = false;

	/**
	 * Whether 'mailingZip' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyMailingZip = false;

	/**
	 * Whether 'middleName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyMiddleName = false;

	/**
	 * Whether 'mobile' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyMobile = false;

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
	 * Whether 'numberOfChats' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyNumberOfChats = false;

	/**
	 * Whether 'otherPhone' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyOtherPhone = false;

	/**
	 * Whether 'phone' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyPhone = false;

	/**
	 * Whether 'reasonForConversionFailure' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyReasonForConversionFailure = false;

	/**
	 * Whether 'referrer' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyReferrer = false;

	/**
	 * Whether 'salutation' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySalutation = false;

	/**
	 * Whether 'searchPartnerNetwork' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySearchPartnerNetwork = false;

	/**
	 * Whether 'secondaryEmail' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySecondaryEmail = false;

	/**
	 * Whether 'secondSurname' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySecondSurname = false;

	/**
	 * Whether 'skypeID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySkypeID = false;

	/**
	 * Whether 'tag' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTag = false;

	/**
	 * Whether 'twitter' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTwitter = false;

	/**
	 * Whether 'visitorScore' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyVisitorScore = false;

	/**
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Email
	 * Type: Email
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * Zoho field Email Opt Out
	 * Type: Boolean
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @var bool
	 */
	protected $emailOptOut;

	/**
	 * Zoho field First Name
	 * Type: Text
	 * Read only: false
	 * Max length: 40
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $firstName;

	/**
	 * Zoho field First Visited Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $firstVisitedTime;

	/**
	 * Zoho field First Visited URL
	 * Type: Website
	 * Read only: false
	 * Max length: 3000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $firstVisitedURL;

	/**
	 * Zoho field GCLID
	 * Type: Text
	 * Read only: true
	 * Max length: 150
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $gCLID;

	/**
	 * Zoho field Gender
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $gender;

	/**
	 * Zoho field Home Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $homePhone;

	/**
	 * Zoho field Identification Number
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $identificationNumber;

	/**
	 * Zoho field Identification Type
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $identificationType;

	/**
	 * Zoho field Keyword
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $keyword;

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
	 * Zoho field Last Name
	 * Type: Text
	 * Read only: false
	 * Max length: 80
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $lastName;

	/**
	 * Zoho field Last Visited Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $lastVisitedTime;

	/**
	 * The Layout of this record in Zoho
	 * Type: string
	 *
	 * @var string
	 */
	protected $layout;

	/**
	 * Zoho field Mailing Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $mailingCountry;

	/**
	 * Zoho field Mailing State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $mailingState;

	/**
	 * Zoho field Mailing Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $mailingStreet;

	/**
	 * Zoho field Mailing Zip
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $mailingZip;

	/**
	 * Zoho field Middle Name
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $middleName;

	/**
	 * Zoho field Mobile
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $mobile;

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
	 * Zoho field Number Of Chats
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var int
	 */
	protected $numberOfChats;

	/**
	 * Zoho field Other Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $otherPhone;

	/**
	 * Zoho field Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $phone;

	/**
	 * Zoho field Reason for Conversion Failure
	 * Type: Pick List
	 * Read only: true
	 * Max length: 255
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $reasonForConversionFailure;

	/**
	 * Zoho field Referrer
	 * Type: Website
	 * Read only: false
	 * Max length: 3000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $referrer;

	/**
	 * Zoho field Salutation
	 * Type: Pick List
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $salutation;

	/**
	 * Zoho field Search Partner Network
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $searchPartnerNetwork;

	/**
	 * Zoho field Secondary Email
	 * Type: Email
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $secondaryEmail;

	/**
	 * Zoho field Second Surname
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $secondSurname;

	/**
	 * Zoho field Skype ID
	 * Type: Text
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $skypeID;

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
	 * Zoho field Twitter
	 * Type: Text
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $twitter;

	/**
	 * Zoho field Visitor Score
	 * Type: BigInt
	 * Read only: false
	 * Max length: 19
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $visitorScore;

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
	 * Get zoho field ACCOUNTID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 100
	 * Custom field: false
	 */
	public function getACCOUNTID() {
		return $this->ACCOUNTID;
	}

	/**
	 * Get zoho field Account Name
	 * Type: Lookup
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 */
	public function getAccountName() {
		return $this->accountName;
	}

	/**
	 * Get zoho field Ad
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getAd() {
		return $this->ad;
	}

	/**
	 * Get zoho field Ad Campaign Name
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getAdCampaignName() {
		return $this->adCampaignName;
	}

	/**
	 * Get zoho field Ad Click Date
	 * Type: Date
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 */
	public function getAdClickDate() {
		return $this->adClickDate;
	}

	/**
	 * Get zoho field AdGroup Name
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getAdGroupName() {
		return $this->adGroupName;
	}

	/**
	 * Get zoho field Ad Network
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getAdNetwork() {
		return $this->adNetwork;
	}

	/**
	 * Get zoho field Average Time Spent (Minutes)
	 * Type: Double
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 */
	public function getAverageTimeSpentMinutes() {
		return $this->averageTimeSpentMinutes;
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
	 * Get zoho field City
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Get zoho field City_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getCityID() {
		return $this->cityID;
	}

	/**
	 * Get zoho field Click Type
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getClickType() {
		return $this->clickType;
	}

	/**
	 * Get zoho field Contact Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getContactOwner() {
		return $this->contactOwner;
	}

	/**
	 * Get zoho field Conversion Exported On
	 * Type: DateTime
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 */
	public function getConversionExportedOn() {
		return $this->conversionExportedOn;
	}

	/**
	 * Get zoho field Conversion Export Status
	 * Type: Pick List
	 * Read only: true
	 * Max length: 255
	 * Custom field: false
	 */
	public function getConversionExportStatus() {
		return $this->conversionExportStatus;
	}

	/**
	 * Get zoho field Cost per Click
	 * Type: Currency
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 */
	public function getCostPerClick() {
		return $this->costPerClick;
	}

	/**
	 * Get zoho field Cost per Conversion
	 * Type: Currency
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 */
	public function getCostPerConversion() {
		return $this->costPerConversion;
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
	 * Get zoho field Date of Birth
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: false
	 */
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	/**
	 * Get zoho field Days Visited
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getDaysVisited() {
		return $this->daysVisited;
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
	 * Get zoho field Device Type
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getDeviceType() {
		return $this->deviceType;
	}

	/**
	 * Get zoho field Email
	 * Type: Email
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get zoho field Email Opt Out
	 * Type: Boolean
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 */
	public function getEmailOptOut() {
		return $this->emailOptOut;
	}

	/**
	 * Get zoho field First Name
	 * Type: Text
	 * Read only: false
	 * Max length: 40
	 * Custom field: false
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Get zoho field First Visited Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getFirstVisitedTime() {
		return $this->firstVisitedTime;
	}

	/**
	 * Get zoho field First Visited URL
	 * Type: Website
	 * Read only: false
	 * Max length: 3000
	 * Custom field: false
	 */
	public function getFirstVisitedURL() {
		return $this->firstVisitedURL;
	}

	/**
	 * Get zoho field GCLID
	 * Type: Text
	 * Read only: true
	 * Max length: 150
	 * Custom field: false
	 */
	public function getGCLID() {
		return $this->gCLID;
	}

	/**
	 * Get zoho field Gender
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Get zoho field Home Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getHomePhone() {
		return $this->homePhone;
	}

	/**
	 * Get zoho field Identification Number
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getIdentificationNumber() {
		return $this->identificationNumber;
	}

	/**
	 * Get zoho field Identification Type
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getIdentificationType() {
		return $this->identificationType;
	}

	/**
	 * Get zoho field Keyword
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getKeyword() {
		return $this->keyword;
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
	 * Get zoho field Last Name
	 * Type: Text
	 * Read only: false
	 * Max length: 80
	 * Custom field: false
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Get zoho field Last Visited Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getLastVisitedTime() {
		return $this->lastVisitedTime;
	}

	/**
	 * Get the Layout of this record in Zoho
	 * Type: string
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Get zoho field Mailing Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getMailingCountry() {
		return $this->mailingCountry;
	}

	/**
	 * Get zoho field Mailing State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getMailingState() {
		return $this->mailingState;
	}

	/**
	 * Get zoho field Mailing Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 */
	public function getMailingStreet() {
		return $this->mailingStreet;
	}

	/**
	 * Get zoho field Mailing Zip
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getMailingZip() {
		return $this->mailingZip;
	}

	/**
	 * Get zoho field Middle Name
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getMiddleName() {
		return $this->middleName;
	}

	/**
	 * Get zoho field Mobile
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getMobile() {
		return $this->mobile;
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
	 * Get zoho field Number Of Chats
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getNumberOfChats() {
		return $this->numberOfChats;
	}

	/**
	 * Get zoho field Other Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 */
	public function getOtherPhone() {
		return $this->otherPhone;
	}

	/**
	 * Get zoho field Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Get zoho field Reason for Conversion Failure
	 * Type: Pick List
	 * Read only: true
	 * Max length: 255
	 * Custom field: false
	 */
	public function getReasonForConversionFailure() {
		return $this->reasonForConversionFailure;
	}

	/**
	 * Get zoho field Referrer
	 * Type: Website
	 * Read only: false
	 * Max length: 3000
	 * Custom field: false
	 */
	public function getReferrer() {
		return $this->referrer;
	}

	/**
	 * Get zoho field Salutation
	 * Type: Pick List
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getSalutation() {
		return $this->salutation;
	}

	/**
	 * Get zoho field Search Partner Network
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 */
	public function getSearchPartnerNetwork() {
		return $this->searchPartnerNetwork;
	}

	/**
	 * Get zoho field Secondary Email
	 * Type: Email
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 */
	public function getSecondaryEmail() {
		return $this->secondaryEmail;
	}

	/**
	 * Get zoho field Second Surname
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getSecondSurname() {
		return $this->secondSurname;
	}

	/**
	 * Get zoho field Skype ID
	 * Type: Text
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 */
	public function getSkypeID() {
		return $this->skypeID;
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
	 * Get zoho field Twitter
	 * Type: Text
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * Get zoho field Visitor Score
	 * Type: BigInt
	 * Read only: false
	 * Max length: 19
	 * Custom field: false
	 */
	public function getVisitorScore() {
		return $this->visitorScore;
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
	 * Set zoho field ACCOUNTID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 100
	 * Custom field: false
	 *
	 * @param string $ACCOUNTID
	 */
	public function setACCOUNTID($ACCOUNTID) {
		$this->ACCOUNTID = $ACCOUNTID;
		$this->dirtyACCOUNTID = true;
		return $this;
	}

	/**
	 * Set zoho field Account Name
	 * Type: Lookup
	 * Read only: false
	 * Max length: 100
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
	 * Set zoho field Ad
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $ad
	 */
	public function setAd($ad) {
		$this->ad = $ad;
		$this->dirtyAd = true;
		return $this;
	}

	/**
	 * Set zoho field Ad Campaign Name
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $adCampaignName
	 */
	public function setAdCampaignName($adCampaignName) {
		$this->adCampaignName = $adCampaignName;
		$this->dirtyAdCampaignName = true;
		return $this;
	}

	/**
	 * Set zoho field Ad Click Date
	 * Type: Date
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $adClickDate
	 */
	public function setAdClickDate(\DateTimeInterface $adClickDate = null) {
		$this->adClickDate = $adClickDate;
		$this->dirtyAdClickDate = true;
		return $this;
	}

	/**
	 * Set zoho field AdGroup Name
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $adGroupName
	 */
	public function setAdGroupName($adGroupName) {
		$this->adGroupName = $adGroupName;
		$this->dirtyAdGroupName = true;
		return $this;
	}

	/**
	 * Set zoho field Ad Network
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $adNetwork
	 */
	public function setAdNetwork($adNetwork) {
		$this->adNetwork = $adNetwork;
		$this->dirtyAdNetwork = true;
		return $this;
	}

	/**
	 * Set zoho field Average Time Spent (Minutes)
	 * Type: Double
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @param string $averageTimeSpentMinutes
	 */
	public function setAverageTimeSpentMinutes($averageTimeSpentMinutes) {
		$this->averageTimeSpentMinutes = $averageTimeSpentMinutes;
		$this->dirtyAverageTimeSpentMinutes = true;
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
	 * Set zoho field City
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
		$this->dirtyCity = true;
		return $this;
	}

	/**
	 * Set zoho field City_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $cityID
	 */
	public function setCityID($cityID) {
		$this->cityID = $cityID;
		$this->dirtyCityID = true;
		return $this;
	}

	/**
	 * Set zoho field Click Type
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $clickType
	 */
	public function setClickType($clickType) {
		$this->clickType = $clickType;
		$this->dirtyClickType = true;
		return $this;
	}

	/**
	 * Set zoho field Contact Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $contactOwner
	 */
	public function setContactOwner($contactOwner) {
		$this->contactOwner = $contactOwner;
		$this->dirtyContactOwner = true;
		return $this;
	}

	/**
	 * Set zoho field Conversion Exported On
	 * Type: DateTime
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $conversionExportedOn
	 */
	public function setConversionExportedOn(\DateTimeInterface $conversionExportedOn = null) {
		$this->conversionExportedOn = $conversionExportedOn;
		$this->dirtyConversionExportedOn = true;
		return $this;
	}

	/**
	 * Set zoho field Conversion Export Status
	 * Type: Pick List
	 * Read only: true
	 * Max length: 255
	 * Custom field: false
	 *
	 * @param string $conversionExportStatus
	 */
	public function setConversionExportStatus($conversionExportStatus) {
		$this->conversionExportStatus = $conversionExportStatus;
		$this->dirtyConversionExportStatus = true;
		return $this;
	}

	/**
	 * Set zoho field Cost per Click
	 * Type: Currency
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @param string $costPerClick
	 */
	public function setCostPerClick($costPerClick) {
		$this->costPerClick = $costPerClick;
		$this->dirtyCostPerClick = true;
		return $this;
	}

	/**
	 * Set zoho field Cost per Conversion
	 * Type: Currency
	 * Read only: true
	 * Max length: 0
	 * Custom field: false
	 *
	 * @param string $costPerConversion
	 */
	public function setCostPerConversion($costPerConversion) {
		$this->costPerConversion = $costPerConversion;
		$this->dirtyCostPerConversion = true;
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
	 * Set zoho field Date of Birth
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $dateOfBirth
	 */
	public function setDateOfBirth(\DateTimeInterface $dateOfBirth = null) {
		$this->dateOfBirth = $dateOfBirth;
		$this->dirtyDateOfBirth = true;
		return $this;
	}

	/**
	 * Set zoho field Days Visited
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param int $daysVisited
	 */
	public function setDaysVisited($daysVisited) {
		$this->daysVisited = $daysVisited;
		$this->dirtyDaysVisited = true;
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
	 * Set zoho field Device Type
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $deviceType
	 */
	public function setDeviceType($deviceType) {
		$this->deviceType = $deviceType;
		$this->dirtyDeviceType = true;
		return $this;
	}

	/**
	 * Set zoho field Email
	 * Type: Email
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
		$this->dirtyEmail = true;
		return $this;
	}

	/**
	 * Set zoho field Email Opt Out
	 * Type: Boolean
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @param bool $emailOptOut
	 */
	public function setEmailOptOut($emailOptOut) {
		$this->emailOptOut = $emailOptOut;
		$this->dirtyEmailOptOut = true;
		return $this;
	}

	/**
	 * Set zoho field First Name
	 * Type: Text
	 * Read only: false
	 * Max length: 40
	 * Custom field: false
	 *
	 * @param string $firstName
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
		$this->dirtyFirstName = true;
		return $this;
	}

	/**
	 * Set zoho field First Visited Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $firstVisitedTime
	 */
	public function setFirstVisitedTime(\DateTimeInterface $firstVisitedTime = null) {
		$this->firstVisitedTime = $firstVisitedTime;
		$this->dirtyFirstVisitedTime = true;
		return $this;
	}

	/**
	 * Set zoho field First Visited URL
	 * Type: Website
	 * Read only: false
	 * Max length: 3000
	 * Custom field: false
	 *
	 * @param string $firstVisitedURL
	 */
	public function setFirstVisitedURL($firstVisitedURL) {
		$this->firstVisitedURL = $firstVisitedURL;
		$this->dirtyFirstVisitedURL = true;
		return $this;
	}

	/**
	 * Set zoho field GCLID
	 * Type: Text
	 * Read only: true
	 * Max length: 150
	 * Custom field: false
	 *
	 * @param string $gCLID
	 */
	public function setGCLID($gCLID) {
		$this->gCLID = $gCLID;
		$this->dirtyGCLID = true;
		return $this;
	}

	/**
	 * Set zoho field Gender
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $gender
	 */
	public function setGender($gender) {
		$this->gender = $gender;
		$this->dirtyGender = true;
		return $this;
	}

	/**
	 * Set zoho field Home Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $homePhone
	 */
	public function setHomePhone($homePhone) {
		$this->homePhone = $homePhone;
		$this->dirtyHomePhone = true;
		return $this;
	}

	/**
	 * Set zoho field Identification Number
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $identificationNumber
	 */
	public function setIdentificationNumber($identificationNumber) {
		$this->identificationNumber = $identificationNumber;
		$this->dirtyIdentificationNumber = true;
		return $this;
	}

	/**
	 * Set zoho field Identification Type
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $identificationType
	 */
	public function setIdentificationType($identificationType) {
		$this->identificationType = $identificationType;
		$this->dirtyIdentificationType = true;
		return $this;
	}

	/**
	 * Set zoho field Keyword
	 * Type: Text
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $keyword
	 */
	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->dirtyKeyword = true;
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
	 * Set zoho field Last Name
	 * Type: Text
	 * Read only: false
	 * Max length: 80
	 * Custom field: false
	 *
	 * @param string $lastName
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
		$this->dirtyLastName = true;
		return $this;
	}

	/**
	 * Set zoho field Last Visited Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $lastVisitedTime
	 */
	public function setLastVisitedTime(\DateTimeInterface $lastVisitedTime = null) {
		$this->lastVisitedTime = $lastVisitedTime;
		$this->dirtyLastVisitedTime = true;
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
	 * Set zoho field Mailing Country
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $mailingCountry
	 */
	public function setMailingCountry($mailingCountry) {
		$this->mailingCountry = $mailingCountry;
		$this->dirtyMailingCountry = true;
		return $this;
	}

	/**
	 * Set zoho field Mailing State
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $mailingState
	 */
	public function setMailingState($mailingState) {
		$this->mailingState = $mailingState;
		$this->dirtyMailingState = true;
		return $this;
	}

	/**
	 * Set zoho field Mailing Street
	 * Type: Text
	 * Read only: false
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $mailingStreet
	 */
	public function setMailingStreet($mailingStreet) {
		$this->mailingStreet = $mailingStreet;
		$this->dirtyMailingStreet = true;
		return $this;
	}

	/**
	 * Set zoho field Mailing Zip
	 * Type: Text
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $mailingZip
	 */
	public function setMailingZip($mailingZip) {
		$this->mailingZip = $mailingZip;
		$this->dirtyMailingZip = true;
		return $this;
	}

	/**
	 * Set zoho field Middle Name
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $middleName
	 */
	public function setMiddleName($middleName) {
		$this->middleName = $middleName;
		$this->dirtyMiddleName = true;
		return $this;
	}

	/**
	 * Set zoho field Mobile
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $mobile
	 */
	public function setMobile($mobile) {
		$this->mobile = $mobile;
		$this->dirtyMobile = true;
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
	 * Set zoho field Number Of Chats
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param int $numberOfChats
	 */
	public function setNumberOfChats($numberOfChats) {
		$this->numberOfChats = $numberOfChats;
		$this->dirtyNumberOfChats = true;
		return $this;
	}

	/**
	 * Set zoho field Other Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 30
	 * Custom field: false
	 *
	 * @param string $otherPhone
	 */
	public function setOtherPhone($otherPhone) {
		$this->otherPhone = $otherPhone;
		$this->dirtyOtherPhone = true;
		return $this;
	}

	/**
	 * Set zoho field Phone
	 * Type: Phone
	 * Read only: false
	 * Max length: 50
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
	 * Set zoho field Reason for Conversion Failure
	 * Type: Pick List
	 * Read only: true
	 * Max length: 255
	 * Custom field: false
	 *
	 * @param string $reasonForConversionFailure
	 */
	public function setReasonForConversionFailure($reasonForConversionFailure) {
		$this->reasonForConversionFailure = $reasonForConversionFailure;
		$this->dirtyReasonForConversionFailure = true;
		return $this;
	}

	/**
	 * Set zoho field Referrer
	 * Type: Website
	 * Read only: false
	 * Max length: 3000
	 * Custom field: false
	 *
	 * @param string $referrer
	 */
	public function setReferrer($referrer) {
		$this->referrer = $referrer;
		$this->dirtyReferrer = true;
		return $this;
	}

	/**
	 * Set zoho field Salutation
	 * Type: Pick List
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param string $salutation
	 */
	public function setSalutation($salutation) {
		$this->salutation = $salutation;
		$this->dirtySalutation = true;
		return $this;
	}

	/**
	 * Set zoho field Search Partner Network
	 * Type: Pick List
	 * Read only: true
	 * Max length: 250
	 * Custom field: false
	 *
	 * @param string $searchPartnerNetwork
	 */
	public function setSearchPartnerNetwork($searchPartnerNetwork) {
		$this->searchPartnerNetwork = $searchPartnerNetwork;
		$this->dirtySearchPartnerNetwork = true;
		return $this;
	}

	/**
	 * Set zoho field Secondary Email
	 * Type: Email
	 * Read only: false
	 * Max length: 100
	 * Custom field: false
	 *
	 * @param string $secondaryEmail
	 */
	public function setSecondaryEmail($secondaryEmail) {
		$this->secondaryEmail = $secondaryEmail;
		$this->dirtySecondaryEmail = true;
		return $this;
	}

	/**
	 * Set zoho field Second Surname
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $secondSurname
	 */
	public function setSecondSurname($secondSurname) {
		$this->secondSurname = $secondSurname;
		$this->dirtySecondSurname = true;
		return $this;
	}

	/**
	 * Set zoho field Skype ID
	 * Type: Text
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @param string $skypeID
	 */
	public function setSkypeID($skypeID) {
		$this->skypeID = $skypeID;
		$this->dirtySkypeID = true;
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
	 * Set zoho field Twitter
	 * Type: Text
	 * Read only: false
	 * Max length: 50
	 * Custom field: false
	 *
	 * @param string $twitter
	 */
	public function setTwitter($twitter) {
		$this->twitter = $twitter;
		$this->dirtyTwitter = true;
		return $this;
	}

	/**
	 * Set zoho field Visitor Score
	 * Type: BigInt
	 * Read only: false
	 * Max length: 19
	 * Custom field: false
	 *
	 * @param string $visitorScore
	 */
	public function setVisitorScore($visitorScore) {
		$this->visitorScore = $visitorScore;
		$this->dirtyVisitorScore = true;
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
