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
'change_password' => 'bool',
'share' => 'bool',
'notification' => 'bool',
'view_form_data' => 'bool',
'delete_form_data' => 'bool'    ];

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
'change_password' => null,
'share' => null,
'notification' => null,
'view_form_data' => null,
'delete_form_data' => null    ];

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
'change_password' => 'changePassword',
'share' => 'share',
'notification' => 'notification',
'view_form_data' => 'viewFormData',
'delete_form_data' => 'deleteFormData'    ];

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
'change_password' => 'setChangePassword',
'share' => 'setShare',
'notification' => 'setNotification',
'view_form_data' => 'setViewFormData',
'delete_form_data' => 'setDeleteFormData'    ];

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
'change_password' => 'getChangePassword',
'share' => 'getShare',
'notification' => 'getNotification',
'view_form_data' => 'getViewFormData',
'delete_form_data' => 'getDeleteFormData'    ];

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
        $this->container['change_password'] = isset($data['change_password']) ? $data['change_password'] : null;
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['view_form_data'] = isset($data['view_form_data']) ? $data['view_form_data'] : null;
        $this->container['delete_form_data'] = isset($data['delete_form_data']) ? $data['delete_form_data'] : null;
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
     * Gets change_password
     *
     * @return bool
     */
    public function getChangePassword()
    {
        return $this->container['change_password'];
    }

    /**
     * Sets change_password
     *
     * @param bool $change_password change_password
     *
     * @return $this
     */
    public function setChangePassword($change_password)
    {
        $this->container['change_password'] = $change_password;

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
     * Gets view_form_data
     *
     * @return bool
     */
    public function getViewFormData()
    {
        return $this->container['view_form_data'];
    }

    /**
     * Sets view_form_data
     *
     * @param bool $view_form_data view_form_data
     *
     * @return $this
     */
    public function setViewFormData($view_form_data)
    {
        $this->container['view_form_data'] = $view_form_data;

        return $this;
    }

    /**
     * Gets delete_form_data
     *
     * @return bool
     */
    public function getDeleteFormData()
    {
        return $this->container['delete_form_data'];
    }

    /**
     * Sets delete_form_data
     *
     * @param bool $delete_form_data delete_form_data
     *
     * @return $this
     */
    public function setDeleteFormData($delete_form_data)
    {
        $this->container['delete_form_data'] = $delete_form_data;

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
