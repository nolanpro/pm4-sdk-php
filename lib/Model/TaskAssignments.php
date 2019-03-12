<?php
/**
 * TaskAssignments
 *
 * PHP version 5
 *
 * @category Class
 * @package  ProcessMaker\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ProcessMaker API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@processmaker.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ProcessMaker\Client\Model;

use \ArrayAccess;
use \ProcessMaker\Client\ObjectSerializer;

/**
 * TaskAssignments Class Doc Comment
 *
 * @category Class
 * @package  ProcessMaker\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaskAssignments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'taskAssignments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'process_id' => 'string',
        'process_task_id' => 'string',
        'assignment_id' => 'string',
        'assignment_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'id',
        'process_id' => 'id',
        'process_task_id' => 'id',
        'assignment_id' => 'id',
        'assignment_type' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'process_id' => 'process_id',
        'process_task_id' => 'process_task_id',
        'assignment_id' => 'assignment_id',
        'assignment_type' => 'assignment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'process_id' => 'setProcessId',
        'process_task_id' => 'setProcessTaskId',
        'assignment_id' => 'setAssignmentId',
        'assignment_type' => 'setAssignmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'process_id' => 'getProcessId',
        'process_task_id' => 'getProcessTaskId',
        'assignment_id' => 'getAssignmentId',
        'assignment_type' => 'getAssignmentType'
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

    const ASSIGNMENT_TYPE_USER = 'ProcessMaker\\Models\\User';
    const ASSIGNMENT_TYPE_GROUP = 'ProcessMaker\\Models\\Group';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssignmentTypeAllowableValues()
    {
        return [
            self::ASSIGNMENT_TYPE_USER,
            self::ASSIGNMENT_TYPE_GROUP,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['process_id'] = isset($data['process_id']) ? $data['process_id'] : null;
        $this->container['process_task_id'] = isset($data['process_task_id']) ? $data['process_task_id'] : null;
        $this->container['assignment_id'] = isset($data['assignment_id']) ? $data['assignment_id'] : null;
        $this->container['assignment_type'] = isset($data['assignment_type']) ? $data['assignment_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAssignmentTypeAllowableValues();
        if (!is_null($this->container['assignment_type']) && !in_array($this->container['assignment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'assignment_type', must be one of '%s'",
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Represents a business process task assignment definition.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets process_id
     *
     * @return string|null
     */
    public function getProcessId()
    {
        return $this->container['process_id'];
    }

    /**
     * Sets process_id
     *
     * @param string|null $process_id Represents a business process task assignment definition.
     *
     * @return $this
     */
    public function setProcessId($process_id)
    {
        $this->container['process_id'] = $process_id;

        return $this;
    }

    /**
     * Gets process_task_id
     *
     * @return string|null
     */
    public function getProcessTaskId()
    {
        return $this->container['process_task_id'];
    }

    /**
     * Sets process_task_id
     *
     * @param string|null $process_task_id Represents a business process task assignment definition.
     *
     * @return $this
     */
    public function setProcessTaskId($process_task_id)
    {
        $this->container['process_task_id'] = $process_task_id;

        return $this;
    }

    /**
     * Gets assignment_id
     *
     * @return string|null
     */
    public function getAssignmentId()
    {
        return $this->container['assignment_id'];
    }

    /**
     * Sets assignment_id
     *
     * @param string|null $assignment_id Represents a business process task assignment definition.
     *
     * @return $this
     */
    public function setAssignmentId($assignment_id)
    {
        $this->container['assignment_id'] = $assignment_id;

        return $this;
    }

    /**
     * Gets assignment_type
     *
     * @return string|null
     */
    public function getAssignmentType()
    {
        return $this->container['assignment_type'];
    }

    /**
     * Sets assignment_type
     *
     * @param string|null $assignment_type Represents a business process task assignment definition.
     *
     * @return $this
     */
    public function setAssignmentType($assignment_type)
    {
        $allowedValues = $this->getAssignmentTypeAllowableValues();
        if (!is_null($assignment_type) && !in_array($assignment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'assignment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['assignment_type'] = $assignment_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}

