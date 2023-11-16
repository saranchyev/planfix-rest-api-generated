<?php
/**
 * ProjectResponse
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
 * ProjectResponse Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'source_object_id' => 'string',
        'source_data_version' => 'string',
        'name' => 'string',
        'description' => 'string',
        'status' => '\OpenAPI\Client\Model\BaseEntity',
        'owner' => '\OpenAPI\Client\Model\PersonResponse',
        'parent' => '\OpenAPI\Client\Model\BaseEntity',
        'template' => '\OpenAPI\Client\Model\BaseEntity',
        'group' => '\OpenAPI\Client\Model\GroupResponse',
        'counterparty' => '\OpenAPI\Client\Model\PersonResponse',
        'start_date' => '\OpenAPI\Client\Model\TimePoint',
        'end_date' => '\OpenAPI\Client\Model\TimePoint',
        'hidden_for_employees' => 'bool',
        'hidden_for_clients' => 'bool',
        'overdue' => 'bool',
        'is_close_to_deadline' => 'bool',
        'has_end_date' => 'bool',
        'assignees' => '\OpenAPI\Client\Model\PeopleResponse',
        'participants' => '\OpenAPI\Client\Model\PeopleResponse',
        'auditors' => '\OpenAPI\Client\Model\PeopleResponse',
        'client_managers' => '\OpenAPI\Client\Model\PeopleResponse',
        'is_deleted' => 'bool',
        'custom_field_data' => '\OpenAPI\Client\Model\CustomFieldValueResponse[]'
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
        'source_object_id' => 'uuid',
        'source_data_version' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'owner' => null,
        'parent' => null,
        'template' => null,
        'group' => null,
        'counterparty' => null,
        'start_date' => null,
        'end_date' => null,
        'hidden_for_employees' => null,
        'hidden_for_clients' => null,
        'overdue' => null,
        'is_close_to_deadline' => null,
        'has_end_date' => null,
        'assignees' => null,
        'participants' => null,
        'auditors' => null,
        'client_managers' => null,
        'is_deleted' => null,
        'custom_field_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'source_object_id' => false,
		'source_data_version' => false,
		'name' => false,
		'description' => false,
		'status' => false,
		'owner' => false,
		'parent' => false,
		'template' => false,
		'group' => false,
		'counterparty' => false,
		'start_date' => false,
		'end_date' => false,
		'hidden_for_employees' => false,
		'hidden_for_clients' => false,
		'overdue' => false,
		'is_close_to_deadline' => false,
		'has_end_date' => false,
		'assignees' => false,
		'participants' => false,
		'auditors' => false,
		'client_managers' => false,
		'is_deleted' => false,
		'custom_field_data' => false
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
        'source_object_id' => 'sourceObjectId',
        'source_data_version' => 'sourceDataVersion',
        'name' => 'name',
        'description' => 'description',
        'status' => 'status',
        'owner' => 'owner',
        'parent' => 'parent',
        'template' => 'template',
        'group' => 'group',
        'counterparty' => 'counterparty',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'hidden_for_employees' => 'hiddenForEmployees',
        'hidden_for_clients' => 'hiddenForClients',
        'overdue' => 'overdue',
        'is_close_to_deadline' => 'isCloseToDeadline',
        'has_end_date' => 'hasEndDate',
        'assignees' => 'assignees',
        'participants' => 'participants',
        'auditors' => 'auditors',
        'client_managers' => 'clientManagers',
        'is_deleted' => 'isDeleted',
        'custom_field_data' => 'customFieldData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source_object_id' => 'setSourceObjectId',
        'source_data_version' => 'setSourceDataVersion',
        'name' => 'setName',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'owner' => 'setOwner',
        'parent' => 'setParent',
        'template' => 'setTemplate',
        'group' => 'setGroup',
        'counterparty' => 'setCounterparty',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'hidden_for_employees' => 'setHiddenForEmployees',
        'hidden_for_clients' => 'setHiddenForClients',
        'overdue' => 'setOverdue',
        'is_close_to_deadline' => 'setIsCloseToDeadline',
        'has_end_date' => 'setHasEndDate',
        'assignees' => 'setAssignees',
        'participants' => 'setParticipants',
        'auditors' => 'setAuditors',
        'client_managers' => 'setClientManagers',
        'is_deleted' => 'setIsDeleted',
        'custom_field_data' => 'setCustomFieldData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source_object_id' => 'getSourceObjectId',
        'source_data_version' => 'getSourceDataVersion',
        'name' => 'getName',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'owner' => 'getOwner',
        'parent' => 'getParent',
        'template' => 'getTemplate',
        'group' => 'getGroup',
        'counterparty' => 'getCounterparty',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'hidden_for_employees' => 'getHiddenForEmployees',
        'hidden_for_clients' => 'getHiddenForClients',
        'overdue' => 'getOverdue',
        'is_close_to_deadline' => 'getIsCloseToDeadline',
        'has_end_date' => 'getHasEndDate',
        'assignees' => 'getAssignees',
        'participants' => 'getParticipants',
        'auditors' => 'getAuditors',
        'client_managers' => 'getClientManagers',
        'is_deleted' => 'getIsDeleted',
        'custom_field_data' => 'getCustomFieldData'
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
        $this->setIfExists('source_object_id', $data ?? [], null);
        $this->setIfExists('source_data_version', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('counterparty', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('hidden_for_employees', $data ?? [], null);
        $this->setIfExists('hidden_for_clients', $data ?? [], null);
        $this->setIfExists('overdue', $data ?? [], null);
        $this->setIfExists('is_close_to_deadline', $data ?? [], null);
        $this->setIfExists('has_end_date', $data ?? [], null);
        $this->setIfExists('assignees', $data ?? [], null);
        $this->setIfExists('participants', $data ?? [], null);
        $this->setIfExists('auditors', $data ?? [], null);
        $this->setIfExists('client_managers', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('custom_field_data', $data ?? [], null);
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
            throw new \InvalidArgumentException('invalid length for $source_data_version when calling ProjectResponse., must be smaller than or equal to 100.');
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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\BaseEntity|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\BaseEntity|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \OpenAPI\Client\Model\PersonResponse|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \OpenAPI\Client\Model\PersonResponse|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \OpenAPI\Client\Model\BaseEntity|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \OpenAPI\Client\Model\BaseEntity|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            throw new \InvalidArgumentException('non-nullable parent cannot be null');
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \OpenAPI\Client\Model\BaseEntity|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \OpenAPI\Client\Model\BaseEntity|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \OpenAPI\Client\Model\GroupResponse|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \OpenAPI\Client\Model\GroupResponse|null $group group
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
     * Gets counterparty
     *
     * @return \OpenAPI\Client\Model\PersonResponse|null
     */
    public function getCounterparty()
    {
        return $this->container['counterparty'];
    }

    /**
     * Sets counterparty
     *
     * @param \OpenAPI\Client\Model\PersonResponse|null $counterparty counterparty
     *
     * @return self
     */
    public function setCounterparty($counterparty)
    {
        if (is_null($counterparty)) {
            throw new \InvalidArgumentException('non-nullable counterparty cannot be null');
        }
        $this->container['counterparty'] = $counterparty;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \OpenAPI\Client\Model\TimePoint|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \OpenAPI\Client\Model\TimePoint|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \OpenAPI\Client\Model\TimePoint|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \OpenAPI\Client\Model\TimePoint|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets hidden_for_employees
     *
     * @return bool|null
     */
    public function getHiddenForEmployees()
    {
        return $this->container['hidden_for_employees'];
    }

    /**
     * Sets hidden_for_employees
     *
     * @param bool|null $hidden_for_employees hidden_for_employees
     *
     * @return self
     */
    public function setHiddenForEmployees($hidden_for_employees)
    {
        if (is_null($hidden_for_employees)) {
            throw new \InvalidArgumentException('non-nullable hidden_for_employees cannot be null');
        }
        $this->container['hidden_for_employees'] = $hidden_for_employees;

        return $this;
    }

    /**
     * Gets hidden_for_clients
     *
     * @return bool|null
     */
    public function getHiddenForClients()
    {
        return $this->container['hidden_for_clients'];
    }

    /**
     * Sets hidden_for_clients
     *
     * @param bool|null $hidden_for_clients hidden_for_clients
     *
     * @return self
     */
    public function setHiddenForClients($hidden_for_clients)
    {
        if (is_null($hidden_for_clients)) {
            throw new \InvalidArgumentException('non-nullable hidden_for_clients cannot be null');
        }
        $this->container['hidden_for_clients'] = $hidden_for_clients;

        return $this;
    }

    /**
     * Gets overdue
     *
     * @return bool|null
     */
    public function getOverdue()
    {
        return $this->container['overdue'];
    }

    /**
     * Sets overdue
     *
     * @param bool|null $overdue overdue
     *
     * @return self
     */
    public function setOverdue($overdue)
    {
        if (is_null($overdue)) {
            throw new \InvalidArgumentException('non-nullable overdue cannot be null');
        }
        $this->container['overdue'] = $overdue;

        return $this;
    }

    /**
     * Gets is_close_to_deadline
     *
     * @return bool|null
     */
    public function getIsCloseToDeadline()
    {
        return $this->container['is_close_to_deadline'];
    }

    /**
     * Sets is_close_to_deadline
     *
     * @param bool|null $is_close_to_deadline is_close_to_deadline
     *
     * @return self
     */
    public function setIsCloseToDeadline($is_close_to_deadline)
    {
        if (is_null($is_close_to_deadline)) {
            throw new \InvalidArgumentException('non-nullable is_close_to_deadline cannot be null');
        }
        $this->container['is_close_to_deadline'] = $is_close_to_deadline;

        return $this;
    }

    /**
     * Gets has_end_date
     *
     * @return bool|null
     */
    public function getHasEndDate()
    {
        return $this->container['has_end_date'];
    }

    /**
     * Sets has_end_date
     *
     * @param bool|null $has_end_date has_end_date
     *
     * @return self
     */
    public function setHasEndDate($has_end_date)
    {
        if (is_null($has_end_date)) {
            throw new \InvalidArgumentException('non-nullable has_end_date cannot be null');
        }
        $this->container['has_end_date'] = $has_end_date;

        return $this;
    }

    /**
     * Gets assignees
     *
     * @return \OpenAPI\Client\Model\PeopleResponse|null
     */
    public function getAssignees()
    {
        return $this->container['assignees'];
    }

    /**
     * Sets assignees
     *
     * @param \OpenAPI\Client\Model\PeopleResponse|null $assignees assignees
     *
     * @return self
     */
    public function setAssignees($assignees)
    {
        if (is_null($assignees)) {
            throw new \InvalidArgumentException('non-nullable assignees cannot be null');
        }
        $this->container['assignees'] = $assignees;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \OpenAPI\Client\Model\PeopleResponse|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \OpenAPI\Client\Model\PeopleResponse|null $participants participants
     *
     * @return self
     */
    public function setParticipants($participants)
    {
        if (is_null($participants)) {
            throw new \InvalidArgumentException('non-nullable participants cannot be null');
        }
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets auditors
     *
     * @return \OpenAPI\Client\Model\PeopleResponse|null
     */
    public function getAuditors()
    {
        return $this->container['auditors'];
    }

    /**
     * Sets auditors
     *
     * @param \OpenAPI\Client\Model\PeopleResponse|null $auditors auditors
     *
     * @return self
     */
    public function setAuditors($auditors)
    {
        if (is_null($auditors)) {
            throw new \InvalidArgumentException('non-nullable auditors cannot be null');
        }
        $this->container['auditors'] = $auditors;

        return $this;
    }

    /**
     * Gets client_managers
     *
     * @return \OpenAPI\Client\Model\PeopleResponse|null
     */
    public function getClientManagers()
    {
        return $this->container['client_managers'];
    }

    /**
     * Sets client_managers
     *
     * @param \OpenAPI\Client\Model\PeopleResponse|null $client_managers client_managers
     *
     * @return self
     */
    public function setClientManagers($client_managers)
    {
        if (is_null($client_managers)) {
            throw new \InvalidArgumentException('non-nullable client_managers cannot be null');
        }
        $this->container['client_managers'] = $client_managers;

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
     * Gets custom_field_data
     *
     * @return \OpenAPI\Client\Model\CustomFieldValueResponse[]|null
     */
    public function getCustomFieldData()
    {
        return $this->container['custom_field_data'];
    }

    /**
     * Sets custom_field_data
     *
     * @param \OpenAPI\Client\Model\CustomFieldValueResponse[]|null $custom_field_data custom_field_data
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


