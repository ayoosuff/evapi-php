<?php
/**
 * ShareAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ShareAttributes Class Doc Comment
 *
 * @category Class
 * @description Attributes of the share including the name, path and share recipients.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShareAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShareAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'has_password' => 'bool',
'public' => 'bool',
'access_mode' => 'string',
'access_description' => 'string',
'embed' => 'bool',
'hash' => 'string',
'owner_hash' => 'string',
'expiration' => 'string',
'expired' => 'bool',
'resent' => '\DateTime',
'type' => 'string',
'require_email' => 'bool',
'file_drop_create_folders' => 'bool',
'paths' => 'string[]',
'recipients' => '\Swagger\Client\Model\ShareRecipient1[]',
'messages' => '\Swagger\Client\Model\ShareMessage[]',
'inherited' => 'bool',
'status' => 'int',
'has_notification' => 'bool',
'created' => '\DateTime',
'modified' => '\DateTime',
'tracking_status' => 'string',
'form_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'has_password' => null,
'public' => null,
'access_mode' => null,
'access_description' => null,
'embed' => null,
'hash' => null,
'owner_hash' => null,
'expiration' => null,
'expired' => null,
'resent' => 'date-time',
'type' => null,
'require_email' => null,
'file_drop_create_folders' => null,
'paths' => null,
'recipients' => null,
'messages' => null,
'inherited' => null,
'status' => 'int32',
'has_notification' => null,
'created' => 'date-time',
'modified' => 'date-time',
'tracking_status' => null,
'form_id' => null    ];

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
        'name' => 'name',
'has_password' => 'hasPassword',
'public' => 'public',
'access_mode' => 'accessMode',
'access_description' => 'accessDescription',
'embed' => 'embed',
'hash' => 'hash',
'owner_hash' => 'ownerHash',
'expiration' => 'expiration',
'expired' => 'expired',
'resent' => 'resent',
'type' => 'type',
'require_email' => 'requireEmail',
'file_drop_create_folders' => 'fileDropCreateFolders',
'paths' => 'paths',
'recipients' => 'recipients',
'messages' => 'messages',
'inherited' => 'inherited',
'status' => 'status',
'has_notification' => 'hasNotification',
'created' => 'created',
'modified' => 'modified',
'tracking_status' => 'trackingStatus',
'form_id' => 'formId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'has_password' => 'setHasPassword',
'public' => 'setPublic',
'access_mode' => 'setAccessMode',
'access_description' => 'setAccessDescription',
'embed' => 'setEmbed',
'hash' => 'setHash',
'owner_hash' => 'setOwnerHash',
'expiration' => 'setExpiration',
'expired' => 'setExpired',
'resent' => 'setResent',
'type' => 'setType',
'require_email' => 'setRequireEmail',
'file_drop_create_folders' => 'setFileDropCreateFolders',
'paths' => 'setPaths',
'recipients' => 'setRecipients',
'messages' => 'setMessages',
'inherited' => 'setInherited',
'status' => 'setStatus',
'has_notification' => 'setHasNotification',
'created' => 'setCreated',
'modified' => 'setModified',
'tracking_status' => 'setTrackingStatus',
'form_id' => 'setFormId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'has_password' => 'getHasPassword',
'public' => 'getPublic',
'access_mode' => 'getAccessMode',
'access_description' => 'getAccessDescription',
'embed' => 'getEmbed',
'hash' => 'getHash',
'owner_hash' => 'getOwnerHash',
'expiration' => 'getExpiration',
'expired' => 'getExpired',
'resent' => 'getResent',
'type' => 'getType',
'require_email' => 'getRequireEmail',
'file_drop_create_folders' => 'getFileDropCreateFolders',
'paths' => 'getPaths',
'recipients' => 'getRecipients',
'messages' => 'getMessages',
'inherited' => 'getInherited',
'status' => 'getStatus',
'has_notification' => 'getHasNotification',
'created' => 'getCreated',
'modified' => 'getModified',
'tracking_status' => 'getTrackingStatus',
'form_id' => 'getFormId'    ];

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

    const ACCESS_MODE_UPLOAD = 'upload';
const ACCESS_MODE_DOWNLOAD = 'download';
const ACCESS_MODE_DOWNLOAD_UPLOAD = 'download_upload';
const ACCESS_MODE_DOWNLOAD_UPLOAD_MODIFY_DELETE = 'download_upload_modify_delete';
const TYPE_SHARED_FOLDER = 'shared_folder';
const TYPE_SEND = 'send';
const TYPE_RECEIVE = 'receive';
const STATUS_0 = 0;
const STATUS_1 = 1;
const TRACKING_STATUS_COMPLETE = 'complete';
const TRACKING_STATUS_INCOMPLETE = 'incomplete';
const TRACKING_STATUS_PENDING = 'pending';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessModeAllowableValues()
    {
        return [
            self::ACCESS_MODE_UPLOAD,
self::ACCESS_MODE_DOWNLOAD,
self::ACCESS_MODE_DOWNLOAD_UPLOAD,
self::ACCESS_MODE_DOWNLOAD_UPLOAD_MODIFY_DELETE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHARED_FOLDER,
self::TYPE_SEND,
self::TYPE_RECEIVE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
self::STATUS_1,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrackingStatusAllowableValues()
    {
        return [
            self::TRACKING_STATUS_COMPLETE,
self::TRACKING_STATUS_INCOMPLETE,
self::TRACKING_STATUS_PENDING,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['has_password'] = isset($data['has_password']) ? $data['has_password'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['access_mode'] = isset($data['access_mode']) ? $data['access_mode'] : null;
        $this->container['access_description'] = isset($data['access_description']) ? $data['access_description'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['owner_hash'] = isset($data['owner_hash']) ? $data['owner_hash'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['resent'] = isset($data['resent']) ? $data['resent'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['require_email'] = isset($data['require_email']) ? $data['require_email'] : null;
        $this->container['file_drop_create_folders'] = isset($data['file_drop_create_folders']) ? $data['file_drop_create_folders'] : null;
        $this->container['paths'] = isset($data['paths']) ? $data['paths'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['inherited'] = isset($data['inherited']) ? $data['inherited'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['has_notification'] = isset($data['has_notification']) ? $data['has_notification'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['tracking_status'] = isset($data['tracking_status']) ? $data['tracking_status'] : null;
        $this->container['form_id'] = isset($data['form_id']) ? $data['form_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessModeAllowableValues();
        if (!is_null($this->container['access_mode']) && !in_array($this->container['access_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrackingStatusAllowableValues();
        if (!is_null($this->container['tracking_status']) && !in_array($this->container['tracking_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tracking_status', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Share name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets has_password
     *
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool $has_password True if the share has password.
     *
     * @return $this
     */
    public function setHasPassword($has_password)
    {
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public True if the share has a public url.
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets access_mode
     *
     * @return string
     */
    public function getAccessMode()
    {
        return $this->container['access_mode'];
    }

    /**
     * Sets access_mode
     *
     * @param string $access_mode Access rights for the share.
     *
     * @return $this
     */
    public function setAccessMode($access_mode)
    {
        $allowedValues = $this->getAccessModeAllowableValues();
        if (!is_null($access_mode) && !in_array($access_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'access_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access_mode'] = $access_mode;

        return $this;
    }

    /**
     * Gets access_description
     *
     * @return string
     */
    public function getAccessDescription()
    {
        return $this->container['access_description'];
    }

    /**
     * Sets access_description
     *
     * @param string $access_description Description of the share access rights.
     *
     * @return $this
     */
    public function setAccessDescription($access_description)
    {
        $this->container['access_description'] = $access_description;

        return $this;
    }

    /**
     * Gets embed
     *
     * @return bool
     */
    public function getEmbed()
    {
        return $this->container['embed'];
    }

    /**
     * Sets embed
     *
     * @param bool $embed True if share can be embedded.
     *
     * @return $this
     */
    public function setEmbed($embed)
    {
        $this->container['embed'] = $embed;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash Share hash.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets owner_hash
     *
     * @return string
     */
    public function getOwnerHash()
    {
        return $this->container['owner_hash'];
    }

    /**
     * Sets owner_hash
     *
     * @param string $owner_hash Share owner's hash.
     *
     * @return $this
     */
    public function setOwnerHash($owner_hash)
    {
        $this->container['owner_hash'] = $owner_hash;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string $expiration Expiration date of the share.
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool $expired True if the share has expired.
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets resent
     *
     * @return \DateTime
     */
    public function getResent()
    {
        return $this->container['resent'];
    }

    /**
     * Sets resent
     *
     * @param \DateTime $resent Invitations resent date. Can be `null` if resent never happened.
     *
     * @return $this
     */
    public function setResent($resent)
    {
        $this->container['resent'] = $resent;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of share.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets require_email
     *
     * @return bool
     */
    public function getRequireEmail()
    {
        return $this->container['require_email'];
    }

    /**
     * Sets require_email
     *
     * @param bool $require_email True if share requires email to access.
     *
     * @return $this
     */
    public function setRequireEmail($require_email)
    {
        $this->container['require_email'] = $require_email;

        return $this;
    }

    /**
     * Gets file_drop_create_folders
     *
     * @return bool
     */
    public function getFileDropCreateFolders()
    {
        return $this->container['file_drop_create_folders'];
    }

    /**
     * Sets file_drop_create_folders
     *
     * @param bool $file_drop_create_folders Flag to show if separate folders should be created for each file upload to receive folder.
     *
     * @return $this
     */
    public function setFileDropCreateFolders($file_drop_create_folders)
    {
        $this->container['file_drop_create_folders'] = $file_drop_create_folders;

        return $this;
    }

    /**
     * Gets paths
     *
     * @return string[]
     */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
     * Sets paths
     *
     * @param string[] $paths Path to the shared resource in your account.
     *
     * @return $this
     */
    public function setPaths($paths)
    {
        $this->container['paths'] = $paths;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \Swagger\Client\Model\ShareRecipient1[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \Swagger\Client\Model\ShareRecipient1[] $recipients Array of recipients.
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Swagger\Client\Model\ShareMessage[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Swagger\Client\Model\ShareMessage[] $messages Array of invitation messages.
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets inherited
     *
     * @return bool
     */
    public function getInherited()
    {
        return $this->container['inherited'];
    }

    /**
     * Sets inherited
     *
     * @param bool $inherited True if share inherited from parent folder.
     *
     * @return $this
     */
    public function setInherited($inherited)
    {
        $this->container['inherited'] = $inherited;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Share activity status. Can be active (1) or deactivated (0).
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets has_notification
     *
     * @return bool
     */
    public function getHasNotification()
    {
        return $this->container['has_notification'];
    }

    /**
     * Sets has_notification
     *
     * @param bool $has_notification True if share has notification.
     *
     * @return $this
     */
    public function setHasNotification($has_notification)
    {
        $this->container['has_notification'] = $has_notification;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created Timestamp of share creation.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified Timestamp of share modification. Can be `null` if it wasn't modified.
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets tracking_status
     *
     * @return string
     */
    public function getTrackingStatus()
    {
        return $this->container['tracking_status'];
    }

    /**
     * Sets tracking_status
     *
     * @param string $tracking_status Checks recipient received status and returns whether it's been recevied (`complete`,) partial recevied (`incomplete`,) or not recevied yet (`pending`.)
     *
     * @return $this
     */
    public function setTrackingStatus($tracking_status)
    {
        $allowedValues = $this->getTrackingStatusAllowableValues();
        if (!is_null($tracking_status) && !in_array($tracking_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tracking_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tracking_status'] = $tracking_status;

        return $this;
    }

    /**
     * Gets form_id
     *
     * @return int
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param int $form_id ID of the form.
     *
     * @return $this
     */
    public function setFormId($form_id)
    {
        $this->container['form_id'] = $form_id;

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