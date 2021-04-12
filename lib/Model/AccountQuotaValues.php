<?php
/**
 * AccountQuotaValues
 *
 * PHP version 5
 *
 * @category Class
 * @package  ExaVault
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ExaVault API
 *
 * See our API reference documentation at https://www.exavault.com/developer/api-docs/
 *
 * OpenAPI spec version: 2.0
 * Contact: support@exavault.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ExaVault\Model;

use \ArrayAccess;
use \ExaVault\ObjectSerializer;

/**
 * AccountQuotaValues Class Doc Comment
 *
 * @category Class
 * @package  ExaVault
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountQuotaValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountQuotaValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'noticeEnabled' => 'bool',
'noticeThreshold' => 'int',
'transactionsNoticeEnabled' => 'bool',
'transactionsNoticeThreshold' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'noticeEnabled' => null,
'noticeThreshold' => null,
'transactionsNoticeEnabled' => null,
'transactionsNoticeThreshold' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'noticeEnabled' => 'noticeEnabled',
'noticeThreshold' => 'noticeThreshold',
'transactionsNoticeEnabled' => 'transactionsNoticeEnabled',
'transactionsNoticeThreshold' => 'transactionsNoticeThreshold'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'noticeEnabled' => 'setNoticeEnabled',
'noticeThreshold' => 'setNoticeThreshold',
'transactionsNoticeEnabled' => 'setTransactionsNoticeEnabled',
'transactionsNoticeThreshold' => 'setTransactionsNoticeThreshold'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'noticeEnabled' => 'getNoticeEnabled',
'noticeThreshold' => 'getNoticeThreshold',
'transactionsNoticeEnabled' => 'getTransactionsNoticeEnabled',
'transactionsNoticeThreshold' => 'getTransactionsNoticeThreshold'    ];

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
        return self::$swaggerModelName;
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
        $this->container['noticeEnabled'] = isset($data['noticeEnabled']) ? $data['noticeEnabled'] : null;
        $this->container['noticeThreshold'] = isset($data['noticeThreshold']) ? $data['noticeThreshold'] : null;
        $this->container['transactionsNoticeEnabled'] = isset($data['transactionsNoticeEnabled']) ? $data['transactionsNoticeEnabled'] : null;
        $this->container['transactionsNoticeThreshold'] = isset($data['transactionsNoticeThreshold']) ? $data['transactionsNoticeThreshold'] : null;
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
     * Gets noticeEnabled
     *
     * @return bool
     */
    public function getNoticeEnabled()
    {
        return $this->container['noticeEnabled'];
    }

    /**
     * Sets noticeEnabled
     *
     * @param bool $noticeEnabled Whether the system should email the account owner if the account storage exceeds the noticeThreshold value. Storage notice emails are sent no mo once per day.
     *
     * @return $this
     */
    public function setNoticeEnabled($noticeEnabled)
    {
        $this->container['noticeEnabled'] = $noticeEnabled;

        return $this;
    }

    /**
     * Gets noticeThreshold
     *
     * @return int
     */
    public function getNoticeThreshold()
    {
        return $this->container['noticeThreshold'];
    }

    /**
     * Sets noticeThreshold
     *
     * @param int $noticeThreshold Percent of account storage that would trigger a notice email. Must be a whole number between 70 and 100 (inclusive).
     *
     * @return $this
     */
    public function setNoticeThreshold($noticeThreshold)
    {
        $this->container['noticeThreshold'] = $noticeThreshold;

        return $this;
    }

    /**
     * Gets transactionsNoticeEnabled
     *
     * @return bool
     */
    public function getTransactionsNoticeEnabled()
    {
        return $this->container['transactionsNoticeEnabled'];
    }

    /**
     * Sets transactionsNoticeEnabled
     *
     * @param bool $transactionsNoticeEnabled Whether the system should email the account owner if the daily transaction usage exceeds the transactionsNoticeThreshold value. Transaction notice emails are sent no more than once per day.
     *
     * @return $this
     */
    public function setTransactionsNoticeEnabled($transactionsNoticeEnabled)
    {
        $this->container['transactionsNoticeEnabled'] = $transactionsNoticeEnabled;

        return $this;
    }

    /**
     * Gets transactionsNoticeThreshold
     *
     * @return int
     */
    public function getTransactionsNoticeThreshold()
    {
        return $this->container['transactionsNoticeThreshold'];
    }

    /**
     * Sets transactionsNoticeThreshold
     *
     * @param int $transactionsNoticeThreshold Percent of daily transaction usage that would trigger a notice email. Must be a whole number between 70 and 100 (inclusive).
     *
     * @return $this
     */
    public function setTransactionsNoticeThreshold($transactionsNoticeThreshold)
    {
        $this->container['transactionsNoticeThreshold'] = $transactionsNoticeThreshold;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}