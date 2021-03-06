<?php
/**
 * ProcessRequestTokenEditable
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
 * ProcessRequestTokenEditable Class Doc Comment
 *
 * @category Class
 * @package  ProcessMaker\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProcessRequestTokenEditable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'processRequestTokenEditable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'string',
        'status' => 'string',
        'due_at' => '\DateTime',
        'initiated_at' => '\DateTime',
        'riskchanges_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => 'id',
        'status' => null,
        'due_at' => null,
        'initiated_at' => 'date-time',
        'riskchanges_at' => 'date-time'
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
        'user_id' => 'user_id',
        'status' => 'status',
        'due_at' => 'due_at',
        'initiated_at' => 'initiated_at',
        'riskchanges_at' => 'riskchanges_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'status' => 'setStatus',
        'due_at' => 'setDueAt',
        'initiated_at' => 'setInitiatedAt',
        'riskchanges_at' => 'setRiskchangesAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'status' => 'getStatus',
        'due_at' => 'getDueAt',
        'initiated_at' => 'getInitiatedAt',
        'riskchanges_at' => 'getRiskchangesAt'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['due_at'] = isset($data['due_at']) ? $data['due_at'] : null;
        $this->container['initiated_at'] = isset($data['initiated_at']) ? $data['initiated_at'] : null;
        $this->container['riskchanges_at'] = isset($data['riskchanges_at']) ? $data['riskchanges_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id ProcessRequestToken is used to store the state of a token of the Nayra engine
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status ProcessRequestToken is used to store the state of a token of the Nayra engine
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets due_at
     *
     * @return \DateTime|null
     */
    public function getDueAt()
    {
        return $this->container['due_at'];
    }

    /**
     * Sets due_at
     *
     * @param \DateTime|null $due_at ProcessRequestToken is used to store the state of a token of the Nayra engine
     *
     * @return $this
     */
    public function setDueAt($due_at)
    {
        $this->container['due_at'] = $due_at;

        return $this;
    }

    /**
     * Gets initiated_at
     *
     * @return \DateTime|null
     */
    public function getInitiatedAt()
    {
        return $this->container['initiated_at'];
    }

    /**
     * Sets initiated_at
     *
     * @param \DateTime|null $initiated_at ProcessRequestToken is used to store the state of a token of the Nayra engine
     *
     * @return $this
     */
    public function setInitiatedAt($initiated_at)
    {
        $this->container['initiated_at'] = $initiated_at;

        return $this;
    }

    /**
     * Gets riskchanges_at
     *
     * @return \DateTime|null
     */
    public function getRiskchangesAt()
    {
        return $this->container['riskchanges_at'];
    }

    /**
     * Sets riskchanges_at
     *
     * @param \DateTime|null $riskchanges_at ProcessRequestToken is used to store the state of a token of the Nayra engine
     *
     * @return $this
     */
    public function setRiskchangesAt($riskchanges_at)
    {
        $this->container['riskchanges_at'] = $riskchanges_at;

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


