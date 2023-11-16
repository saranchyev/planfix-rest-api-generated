<?php
/**
 * GetContactCommentsRequest
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
 * GetContactCommentsRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetContactCommentsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_contact_comments_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offset' => 'int',
        'page_size' => 'int',
        'fields' => 'string',
        'type_list' => 'string',
        'result_order' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'page_size' => 'int64',
        'fields' => null,
        'type_list' => null,
        'result_order' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offset' => false,
		'page_size' => false,
		'fields' => false,
		'type_list' => false,
		'result_order' => false
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
        'offset' => 'offset',
        'page_size' => 'pageSize',
        'fields' => 'fields',
        'type_list' => 'typeList',
        'result_order' => 'resultOrder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offset' => 'setOffset',
        'page_size' => 'setPageSize',
        'fields' => 'setFields',
        'type_list' => 'setTypeList',
        'result_order' => 'setResultOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offset' => 'getOffset',
        'page_size' => 'getPageSize',
        'fields' => 'getFields',
        'type_list' => 'getTypeList',
        'result_order' => 'getResultOrder'
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

    public const TYPE_LIST_COMMENTS = 'Comments';
    public const TYPE_LIST_ALL = 'All';
    public const TYPE_LIST__NEW = 'New';
    public const TYPE_LIST_DELETED = 'Deleted';
    public const RESULT_ORDER_ASC = 'Asc';
    public const RESULT_ORDER_DESC = 'Desc';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeListAllowableValues()
    {
        return [
            self::TYPE_LIST_COMMENTS,
            self::TYPE_LIST_ALL,
            self::TYPE_LIST__NEW,
            self::TYPE_LIST_DELETED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultOrderAllowableValues()
    {
        return [
            self::RESULT_ORDER_ASC,
            self::RESULT_ORDER_DESC,
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
        $this->setIfExists('offset', $data ?? [], 0);
        $this->setIfExists('page_size', $data ?? [], 100);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('type_list', $data ?? [], null);
        $this->setIfExists('result_order', $data ?? [], null);
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

        if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
            $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 100)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_size', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getTypeListAllowableValues();
        if (!is_null($this->container['type_list']) && !in_array($this->container['type_list'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type_list', must be one of '%s'",
                $this->container['type_list'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResultOrderAllowableValues();
        if (!is_null($this->container['result_order']) && !in_array($this->container['result_order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result_order', must be one of '%s'",
                $this->container['result_order'],
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
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset Offset from beginning of list
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }

        if (($offset < 0)) {
            throw new \InvalidArgumentException('invalid value for $offset when calling GetContactCommentsRequest., must be bigger than or equal to 0.');
        }

        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size Size of requested list
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }

        if (($page_size > 100)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling GetContactCommentsRequest., must be smaller than or equal to 100.');
        }
        if (($page_size < 1)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling GetContactCommentsRequest., must be bigger than or equal to 1.');
        }

        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string|null $fields Fields returned - names, comma-delimited
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets type_list
     *
     * @return string|null
     */
    public function getTypeList()
    {
        return $this->container['type_list'];
    }

    /**
     * Sets type_list
     *
     * @param string|null $type_list type_list
     *
     * @return self
     */
    public function setTypeList($type_list)
    {
        if (is_null($type_list)) {
            throw new \InvalidArgumentException('non-nullable type_list cannot be null');
        }
        $allowedValues = $this->getTypeListAllowableValues();
        if (!in_array($type_list, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type_list', must be one of '%s'",
                    $type_list,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_list'] = $type_list;

        return $this;
    }

    /**
     * Gets result_order
     *
     * @return string|null
     */
    public function getResultOrder()
    {
        return $this->container['result_order'];
    }

    /**
     * Sets result_order
     *
     * @param string|null $result_order result_order
     *
     * @return self
     */
    public function setResultOrder($result_order)
    {
        if (is_null($result_order)) {
            throw new \InvalidArgumentException('non-nullable result_order cannot be null');
        }
        $allowedValues = $this->getResultOrderAllowableValues();
        if (!in_array($result_order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result_order', must be one of '%s'",
                    $result_order,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result_order'] = $result_order;

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

