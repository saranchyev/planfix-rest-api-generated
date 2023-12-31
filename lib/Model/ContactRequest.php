<?php
/**
 * ContactRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Planfix REST API
 *
 * Documentation for Planfix REST API. <br> Generated <a href=\"https://root/restapidocs/swagger.json\">swagger.json</a>
 *
 * The version of the OpenAPI document: 1.0.3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ContactRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'template_id' => 'int',
        'source_object_id' => 'string',
        'source_data_version' => 'string',
        'name' => 'string',
        'midname' => 'string',
        'lastname' => 'string',
        'gender' => 'string',
        'description' => 'string',
        'address' => 'string',
        'site' => 'string',
        'email' => 'string',
        'skype' => 'string',
        'telegram_id' => 'string',
        'telegram' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'vk' => 'string',
        'position' => 'string',
        'group' => '\OpenAPI\Client\Model\GroupRequest',
        'is_company' => 'bool',
        'is_deleted' => 'bool',
        'birth_date' => '\OpenAPI\Client\Model\ContactRequestBirthDate',
        'supervisors' => '\OpenAPI\Client\Model\PeopleRequest',
        'phones' => '\OpenAPI\Client\Model\PhoneRequest[]',
        'companies' => '\OpenAPI\Client\Model\BaseEntity[]',
        'contacts' => '\OpenAPI\Client\Model\BaseEntity[]',
        'custom_field_data' => '\OpenAPI\Client\Model\CustomFieldValueRequest[]',
        'files' => '\OpenAPI\Client\Model\FileRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'template_id' => 'int64',
        'source_object_id' => 'uuid',
        'source_data_version' => null,
        'name' => null,
        'midname' => null,
        'lastname' => null,
        'gender' => null,
        'description' => null,
        'address' => null,
        'site' => 'uri',
        'email' => 'email',
        'skype' => null,
        'telegram_id' => null,
        'telegram' => null,
        'facebook' => null,
        'instagram' => null,
        'vk' => null,
        'position' => null,
        'group' => null,
        'is_company' => null,
        'is_deleted' => null,
        'birth_date' => null,
        'supervisors' => null,
        'phones' => null,
        'companies' => null,
        'contacts' => null,
        'custom_field_data' => null,
        'files' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'template_id' => false,
		'source_object_id' => false,
		'source_data_version' => false,
		'name' => false,
		'midname' => false,
		'lastname' => false,
		'gender' => false,
		'description' => false,
		'address' => false,
		'site' => false,
		'email' => false,
		'skype' => false,
		'telegram_id' => false,
		'telegram' => false,
		'facebook' => false,
		'instagram' => false,
		'vk' => false,
		'position' => false,
		'group' => false,
		'is_company' => false,
		'is_deleted' => false,
		'birth_date' => true,
		'supervisors' => false,
		'phones' => false,
		'companies' => false,
		'contacts' => false,
		'custom_field_data' => false,
		'files' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'template_id' => 'templateId',
        'source_object_id' => 'sourceObjectId',
        'source_data_version' => 'sourceDataVersion',
        'name' => 'name',
        'midname' => 'midname',
        'lastname' => 'lastname',
        'gender' => 'gender',
        'description' => 'description',
        'address' => 'address',
        'site' => 'site',
        'email' => 'email',
        'skype' => 'skype',
        'telegram_id' => 'telegramId',
        'telegram' => 'telegram',
        'facebook' => 'facebook',
        'instagram' => 'instagram',
        'vk' => 'vk',
        'position' => 'position',
        'group' => 'group',
        'is_company' => 'isCompany',
        'is_deleted' => 'isDeleted',
        'birth_date' => 'birthDate',
        'supervisors' => 'supervisors',
        'phones' => 'phones',
        'companies' => 'companies',
        'contacts' => 'contacts',
        'custom_field_data' => 'customFieldData',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'template_id' => 'setTemplateId',
        'source_object_id' => 'setSourceObjectId',
        'source_data_version' => 'setSourceDataVersion',
        'name' => 'setName',
        'midname' => 'setMidname',
        'lastname' => 'setLastname',
        'gender' => 'setGender',
        'description' => 'setDescription',
        'address' => 'setAddress',
        'site' => 'setSite',
        'email' => 'setEmail',
        'skype' => 'setSkype',
        'telegram_id' => 'setTelegramId',
        'telegram' => 'setTelegram',
        'facebook' => 'setFacebook',
        'instagram' => 'setInstagram',
        'vk' => 'setVk',
        'position' => 'setPosition',
        'group' => 'setGroup',
        'is_company' => 'setIsCompany',
        'is_deleted' => 'setIsDeleted',
        'birth_date' => 'setBirthDate',
        'supervisors' => 'setSupervisors',
        'phones' => 'setPhones',
        'companies' => 'setCompanies',
        'contacts' => 'setContacts',
        'custom_field_data' => 'setCustomFieldData',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'template_id' => 'getTemplateId',
        'source_object_id' => 'getSourceObjectId',
        'source_data_version' => 'getSourceDataVersion',
        'name' => 'getName',
        'midname' => 'getMidname',
        'lastname' => 'getLastname',
        'gender' => 'getGender',
        'description' => 'getDescription',
        'address' => 'getAddress',
        'site' => 'getSite',
        'email' => 'getEmail',
        'skype' => 'getSkype',
        'telegram_id' => 'getTelegramId',
        'telegram' => 'getTelegram',
        'facebook' => 'getFacebook',
        'instagram' => 'getInstagram',
        'vk' => 'getVk',
        'position' => 'getPosition',
        'group' => 'getGroup',
        'is_company' => 'getIsCompany',
        'is_deleted' => 'getIsDeleted',
        'birth_date' => 'getBirthDate',
        'supervisors' => 'getSupervisors',
        'phones' => 'getPhones',
        'companies' => 'getCompanies',
        'contacts' => 'getContacts',
        'custom_field_data' => 'getCustomFieldData',
        'files' => 'getFiles'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const GENDER_NOT_DEFINED = 'NotDefined';
    public const GENDER_FEMALE = 'Female';
    public const GENDER_MALE = 'Male';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_NOT_DEFINED,
            self::GENDER_FEMALE,
            self::GENDER_MALE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('source_object_id', $data ?? [], null);
        $this->setIfExists('source_data_version', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('midname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('site', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('skype', $data ?? [], null);
        $this->setIfExists('telegram_id', $data ?? [], null);
        $this->setIfExists('telegram', $data ?? [], null);
        $this->setIfExists('facebook', $data ?? [], null);
        $this->setIfExists('instagram', $data ?? [], null);
        $this->setIfExists('vk', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('is_company', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('supervisors', $data ?? [], null);
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('companies', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('custom_field_data', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['source_data_version']) && (mb_strlen($this->container['source_data_version']) > 100)) {
            $invalidProperties[] = "invalid value for 'source_data_version', the character length must be smaller than or equal to 100.";
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int|null $template_id template_id
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets source_object_id
     *
     * @return string|null
     */
    public function getSourceObjectId()
    {
        return $this->container['source_object_id'];
    }

    /**
     * Sets source_object_id
     *
     * @param string|null $source_object_id source_object_id
     *
     * @return self
     */
    public function setSourceObjectId($source_object_id)
    {
        if (is_null($source_object_id)) {
            throw new \InvalidArgumentException('non-nullable source_object_id cannot be null');
        }
        $this->container['source_object_id'] = $source_object_id;

        return $this;
    }

    /**
     * Gets source_data_version
     *
     * @return string|null
     */
    public function getSourceDataVersion()
    {
        return $this->container['source_data_version'];
    }

    /**
     * Sets source_data_version
     *
     * @param string|null $source_data_version source_data_version
     *
     * @return self
     */
    public function setSourceDataVersion($source_data_version)
    {
        if (is_null($source_data_version)) {
            throw new \InvalidArgumentException('non-nullable source_data_version cannot be null');
        }
        if ((mb_strlen($source_data_version) > 100)) {
            throw new \InvalidArgumentException('invalid length for $source_data_version when calling ContactRequest., must be smaller than or equal to 100.');
        }

        $this->container['source_data_version'] = $source_data_version;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets midname
     *
     * @return string|null
     */
    public function getMidname()
    {
        return $this->container['midname'];
    }

    /**
     * Sets midname
     *
     * @param string|null $midname midname
     *
     * @return self
     */
    public function setMidname($midname)
    {
        if (is_null($midname)) {
            throw new \InvalidArgumentException('non-nullable midname cannot be null');
        }
        $this->container['midname'] = $midname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets site
     *
     * @return string|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param string|null $site site
     *
     * @return self
     */
    public function setSite($site)
    {
        if (is_null($site)) {
            throw new \InvalidArgumentException('non-nullable site cannot be null');
        }
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets skype
     *
     * @return string|null
     */
    public function getSkype()
    {
        return $this->container['skype'];
    }

    /**
     * Sets skype
     *
     * @param string|null $skype skype
     *
     * @return self
     */
    public function setSkype($skype)
    {
        if (is_null($skype)) {
            throw new \InvalidArgumentException('non-nullable skype cannot be null');
        }
        $this->container['skype'] = $skype;

        return $this;
    }

    /**
     * Gets telegram_id
     *
     * @return string|null
     */
    public function getTelegramId()
    {
        return $this->container['telegram_id'];
    }

    /**
     * Sets telegram_id
     *
     * @param string|null $telegram_id telegram_id
     *
     * @return self
     */
    public function setTelegramId($telegram_id)
    {
        if (is_null($telegram_id)) {
            throw new \InvalidArgumentException('non-nullable telegram_id cannot be null');
        }
        $this->container['telegram_id'] = $telegram_id;

        return $this;
    }

    /**
     * Gets telegram
     *
     * @return string|null
     */
    public function getTelegram()
    {
        return $this->container['telegram'];
    }

    /**
     * Sets telegram
     *
     * @param string|null $telegram telegram
     *
     * @return self
     */
    public function setTelegram($telegram)
    {
        if (is_null($telegram)) {
            throw new \InvalidArgumentException('non-nullable telegram cannot be null');
        }
        $this->container['telegram'] = $telegram;

        return $this;
    }

    /**
     * Gets facebook
     *
     * @return string|null
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param string|null $facebook facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        if (is_null($facebook)) {
            throw new \InvalidArgumentException('non-nullable facebook cannot be null');
        }
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets instagram
     *
     * @return string|null
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     *
     * @param string|null $instagram instagram
     *
     * @return self
     */
    public function setInstagram($instagram)
    {
        if (is_null($instagram)) {
            throw new \InvalidArgumentException('non-nullable instagram cannot be null');
        }
        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets vk
     *
     * @return string|null
     */
    public function getVk()
    {
        return $this->container['vk'];
    }

    /**
     * Sets vk
     *
     * @param string|null $vk vk
     *
     * @return self
     */
    public function setVk($vk)
    {
        if (is_null($vk)) {
            throw new \InvalidArgumentException('non-nullable vk cannot be null');
        }
        $this->container['vk'] = $vk;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \OpenAPI\Client\Model\GroupRequest|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \OpenAPI\Client\Model\GroupRequest|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets is_company
     *
     * @return bool|null
     */
    public function getIsCompany()
    {
        return $this->container['is_company'];
    }

    /**
     * Sets is_company
     *
     * @param bool|null $is_company is_company
     *
     * @return self
     */
    public function setIsCompany($is_company)
    {
        if (is_null($is_company)) {
            throw new \InvalidArgumentException('non-nullable is_company cannot be null');
        }
        $this->container['is_company'] = $is_company;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \OpenAPI\Client\Model\ContactRequestBirthDate|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \OpenAPI\Client\Model\ContactRequestBirthDate|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            array_push($this->openAPINullablesSetToNull, 'birth_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('birth_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets supervisors
     *
     * @return \OpenAPI\Client\Model\PeopleRequest|null
     */
    public function getSupervisors()
    {
        return $this->container['supervisors'];
    }

    /**
     * Sets supervisors
     *
     * @param \OpenAPI\Client\Model\PeopleRequest|null $supervisors supervisors
     *
     * @return self
     */
    public function setSupervisors($supervisors)
    {
        if (is_null($supervisors)) {
            throw new \InvalidArgumentException('non-nullable supervisors cannot be null');
        }
        $this->container['supervisors'] = $supervisors;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \OpenAPI\Client\Model\PhoneRequest[]|null
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \OpenAPI\Client\Model\PhoneRequest[]|null $phones phones
     *
     * @return self
     */
    public function setPhones($phones)
    {
        if (is_null($phones)) {
            throw new \InvalidArgumentException('non-nullable phones cannot be null');
        }
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets companies
     *
     * @return \OpenAPI\Client\Model\BaseEntity[]|null
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param \OpenAPI\Client\Model\BaseEntity[]|null $companies companies
     *
     * @return self
     */
    public function setCompanies($companies)
    {
        if (is_null($companies)) {
            throw new \InvalidArgumentException('non-nullable companies cannot be null');
        }
        $this->container['companies'] = $companies;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \OpenAPI\Client\Model\BaseEntity[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \OpenAPI\Client\Model\BaseEntity[]|null $contacts contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        if (is_null($contacts)) {
            throw new \InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets custom_field_data
     *
     * @return \OpenAPI\Client\Model\CustomFieldValueRequest[]|null
     */
    public function getCustomFieldData()
    {
        return $this->container['custom_field_data'];
    }

    /**
     * Sets custom_field_data
     *
     * @param \OpenAPI\Client\Model\CustomFieldValueRequest[]|null $custom_field_data custom_field_data
     *
     * @return self
     */
    public function setCustomFieldData($custom_field_data)
    {
        if (is_null($custom_field_data)) {
            throw new \InvalidArgumentException('non-nullable custom_field_data cannot be null');
        }
        $this->container['custom_field_data'] = $custom_field_data;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \OpenAPI\Client\Model\FileRequest[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \OpenAPI\Client\Model\FileRequest[]|null $files files
     *
     * @return self
     */
    public function setFiles($files)
    {
        if (is_null($files)) {
            throw new \InvalidArgumentException('non-nullable files cannot be null');
        }
        $this->container['files'] = $files;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


