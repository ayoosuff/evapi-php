<?php
/**
 * UsersPermissions
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
 * UsersPermissions Class Doc Comment
 *
 * @category Class
 * @description An object containing name/value pairs for each permission. Any permission that is not passed will be set to &#x60;false&#x60; by default. Note that users will be unable to see any files in the account unless you include &#x60;list&#x60; permission.
 * @package  ExaVault
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersPermissions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'users_permissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'list' => 'bool',
'download' => 'bool',
'upload' => 'bool',
'modify' => 'bool',
'delete' => 'bool',
'changePassword' => 'bool',
'share' => 'bool',
'notification' => 'bool',
'viewFormData' => 'bool',
'deleteFormData' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'list' => null,
'download' => null,
'upload' => null,
'modify' => null,
'delete' => null,
'changePassword' => null,
'share' => null,
'notification' => null,
'viewFormData' => null,
'deleteFormData' => null    ];

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
        'list' => 'list',
'download' => 'download',
'upload' => 'upload',
'modify' => 'modify',
'delete' => 'delete',
'changePassword' => 'changePassword',
'share' => 'share',
'notification' => 'notification',
'viewFormData' => 'viewFormData',
'deleteFormData' => 'deleteFormData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list' => 'setList',
'download' => 'setDownload',
'upload' => 'setUpload',
'modify' => 'setModify',
'delete' => 'setDelete',
'changePassword' => 'setChangePassword',
'share' => 'setShare',
'notification' => 'setNotification',
'viewFormData' => 'setViewFormData',
'deleteFormData' => 'setDeleteFormData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list' => 'getList',
'download' => 'getDownload',
'upload' => 'getUpload',
'modify' => 'getModify',
'delete' => 'getDelete',
'changePassword' => 'getChangePassword',
'share' => 'getShare',
'notification' => 'getNotification',
'viewFormData' => 'getViewFormData',
'deleteFormData' => 'getDeleteFormData'    ];

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
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
        $this->container['upload'] = isset($data['upload']) ? $data['upload'] : null;
        $this->container['modify'] = isset($data['modify']) ? $data['modify'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['changePassword'] = isset($data['changePassword']) ? $data['changePassword'] : null;
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['viewFormData'] = isset($data['viewFormData']) ? $data['viewFormData'] : null;
        $this->container['deleteFormData'] = isset($data['deleteFormData']) ? $data['deleteFormData'] : null;
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
     * Gets list
     *
     * @return bool
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param bool $list list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

        return $this;
    }

    /**
     * Gets download
     *
     * @return bool
     */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
     * Sets download
     *
     * @param bool $download download
     *
     * @return $this
     */
    public function setDownload($download)
    {
        $this->container['download'] = $download;

        return $this;
    }

    /**
     * Gets upload
     *
     * @return bool
     */
    public function getUpload()
    {
        return $this->container['upload'];
    }

    /**
     * Sets upload
     *
     * @param bool $upload upload
     *
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->container['upload'] = $upload;

        return $this;
    }

    /**
     * Gets modify
     *
     * @return bool
     */
    public function getModify()
    {
        return $this->container['modify'];
    }

    /**
     * Sets modify
     *
     * @param bool $modify modify
     *
     * @return $this
     */
    public function setModify($modify)
    {
        $this->container['modify'] = $modify;

        return $this;
    }

    /**
     * Gets delete
     *
     * @return bool
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param bool $delete delete
     *
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets changePassword
     *
     * @return bool
     */
    public function getChangePassword()
    {
        return $this->container['changePassword'];
    }

    /**
     * Sets changePassword
     *
     * @param bool $changePassword changePassword
     *
     * @return $this
     */
    public function setChangePassword($changePassword)
    {
        $this->container['changePassword'] = $changePassword;

        return $this;
    }

    /**
     * Gets share
     *
     * @return bool
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param bool $share share
     *
     * @return $this
     */
    public function setShare($share)
    {
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return bool
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param bool $notification notification
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets viewFormData
     *
     * @return bool
     */
    public function getViewFormData()
    {
        return $this->container['viewFormData'];
    }

    /**
     * Sets viewFormData
     *
     * @param bool $viewFormData viewFormData
     *
     * @return $this
     */
    public function setViewFormData($viewFormData)
    {
        $this->container['viewFormData'] = $viewFormData;

        return $this;
    }

    /**
     * Gets deleteFormData
     *
     * @return bool
     */
    public function getDeleteFormData()
    {
        return $this->container['deleteFormData'];
    }

    /**
     * Sets deleteFormData
     *
     * @param bool $deleteFormData deleteFormData
     *
     * @return $this
     */
    public function setDeleteFormData($deleteFormData)
    {
        $this->container['deleteFormData'] = $deleteFormData;

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
