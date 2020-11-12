<?php
/**
 * AddShareRequestBody
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
 * AddShareRequestBody Class Doc Comment
 *
 * @category Class
 * @package  ExaVault
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddShareRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddShareRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'name' => 'string',
'resources' => 'string[]',
'access_mode' => 'string[]',
'embed' => 'bool',
'recipients' => '\ExaVault\Model\SharesRecipients[]',
'expiration' => '\DateTime',
'has_notification' => 'bool',
'is_public' => 'bool',
'message' => 'string',
'notification_emails' => 'string[]',
'password' => 'string',
'require_email' => 'bool',
'message_subject' => 'string',
'file_drop_create_folders' => 'bool',
'sending_local_files' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'name' => null,
'resources' => null,
'access_mode' => null,
'embed' => null,
'recipients' => null,
'expiration' => 'date-time',
'has_notification' => null,
'is_public' => null,
'message' => null,
'notification_emails' => 'email',
'password' => null,
'require_email' => null,
'message_subject' => null,
'file_drop_create_folders' => null,
'sending_local_files' => null    ];

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
        'type' => 'type',
'name' => 'name',
'resources' => 'resources',
'access_mode' => 'accessMode',
'embed' => 'embed',
'recipients' => 'recipients',
'expiration' => 'expiration',
'has_notification' => 'hasNotification',
'is_public' => 'isPublic',
'message' => 'message',
'notification_emails' => 'notificationEmails',
'password' => 'password',
'require_email' => 'requireEmail',
'message_subject' => 'messageSubject',
'file_drop_create_folders' => 'fileDropCreateFolders',
'sending_local_files' => 'sendingLocalFiles'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'name' => 'setName',
'resources' => 'setResources',
'access_mode' => 'setAccessMode',
'embed' => 'setEmbed',
'recipients' => 'setRecipients',
'expiration' => 'setExpiration',
'has_notification' => 'setHasNotification',
'is_public' => 'setIsPublic',
'message' => 'setMessage',
'notification_emails' => 'setNotificationEmails',
'password' => 'setPassword',
'require_email' => 'setRequireEmail',
'message_subject' => 'setMessageSubject',
'file_drop_create_folders' => 'setFileDropCreateFolders',
'sending_local_files' => 'setSendingLocalFiles'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'name' => 'getName',
'resources' => 'getResources',
'access_mode' => 'getAccessMode',
'embed' => 'getEmbed',
'recipients' => 'getRecipients',
'expiration' => 'getExpiration',
'has_notification' => 'getHasNotification',
'is_public' => 'getIsPublic',
'message' => 'getMessage',
'notification_emails' => 'getNotificationEmails',
'password' => 'getPassword',
'require_email' => 'getRequireEmail',
'message_subject' => 'getMessageSubject',
'file_drop_create_folders' => 'getFileDropCreateFolders',
'sending_local_files' => 'getSendingLocalFiles'    ];

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

    const TYPE_SHARED_FOLDER = 'shared_folder';
const TYPE_RECEIVE = 'receive';
const TYPE_SEND = 'send';
const ACCESS_MODE_UPLOAD = 'upload';
const ACCESS_MODE_DOWNLOAD = 'download';
const ACCESS_MODE_DELETE = 'delete';
const ACCESS_MODE_MODIFY = 'modify';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHARED_FOLDER,
self::TYPE_RECEIVE,
self::TYPE_SEND,        ];
    }
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
self::ACCESS_MODE_DELETE,
self::ACCESS_MODE_MODIFY,        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['access_mode'] = isset($data['access_mode']) ? $data['access_mode'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['has_notification'] = isset($data['has_notification']) ? $data['has_notification'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['notification_emails'] = isset($data['notification_emails']) ? $data['notification_emails'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['require_email'] = isset($data['require_email']) ? $data['require_email'] : null;
        $this->container['message_subject'] = isset($data['message_subject']) ? $data['message_subject'] : null;
        $this->container['file_drop_create_folders'] = isset($data['file_drop_create_folders']) ? $data['file_drop_create_folders'] : null;
        $this->container['sending_local_files'] = isset($data['sending_local_files']) ? $data['sending_local_files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['access_mode'] === null) {
            $invalidProperties[] = "'access_mode' can't be null";
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
     * @param string $type The type of share to create. See above for a description of each.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
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
     * @param string $name A name for the share. This will be visible on the page that recipients visit.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return string[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[] $resources Array of resources for this share. See details on [how to specify resources](#section/Identifying-Resources) above.  **shared_folder** and **receive** shares must have only one `resource`, which is a directory that does not have a current share attached.  **send** shares may have multiple `resource` parameters. You can also leave this parameter null if you are planning to upload files to the send. If you are planning to upload files to the send that are not yet in your account, you will also need to call the [POST /shares/complete-send/{id}](#operation/completeDirectSend) endpoint to finish the send operation.
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets access_mode
     *
     * @return string[]
     */
    public function getAccessMode()
    {
        return $this->container['access_mode'];
    }

    /**
     * Sets access_mode
     *
     * @param string[] $access_mode Array of permissions that describes what people can do when they visit the share. Valid options are `upload` `download` `modify` and `delete`  Not all permissions work with all shares - **receive** shares must always have the permission to **upload** and never provide a method for visitors to **download**.  If you are creating a share of type **send** and plan to upload files from your own computer before completing the send with [POST /shares/complete-send/{id}](#operation/completeDirectSend), use the access mode **upload**
     *
     * @return $this
     */
    public function setAccessMode($access_mode)
    {
        $allowedValues = $this->getAccessModeAllowableValues();
        if (array_diff($access_mode, $allowedValues)) {
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
     * @param bool $embed Whether this share can be embedded within a web page.
     *
     * @return $this
     */
    public function setEmbed($embed)
    {
        $this->container['embed'] = $embed;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \ExaVault\Model\SharesRecipients[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \ExaVault\Model\SharesRecipients[] $recipients People you want to invite to the share. **Note**: unless you also set the `messageSubject` and `messageBody` for the new share, invitation emails will not be sent to these recipients.
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \DateTime $expiration Expiration date for the share. If someone attempts to use the share after this date, they will receive an error that the share is not available.
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

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
     * @param bool $has_notification Whether delivery receipts should be sent.
     *
     * @return $this
     */
    public function setHasNotification($has_notification)
    {
        $this->container['has_notification'] = $has_notification;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public Whether someone can visit the share without following a personalized recipient link.
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message The message to be included in email invitations for your recipients. Ignored if you have not also provided `recipients` and `subject`
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notification_emails
     *
     * @return string[]
     */
    public function getNotificationEmails()
    {
        return $this->container['notification_emails'];
    }

    /**
     * Sets notification_emails
     *
     * @param string[] $notification_emails Emails that will receive delivery receipts for this share. `hasNotification` must be **true** for delivery receipts will be sent.
     *
     * @return $this
     */
    public function setNotificationEmails($notification_emails)
    {
        $this->container['notification_emails'] = $notification_emails;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Set a password for recipients to access the share. All recipients will use the same password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
     * @param bool $require_email True if recipients must provide their email to view the share.
     *
     * @return $this
     */
    public function setRequireEmail($require_email)
    {
        $this->container['require_email'] = $require_email;

        return $this;
    }

    /**
     * Gets message_subject
     *
     * @return string
     */
    public function getMessageSubject()
    {
        return $this->container['message_subject'];
    }

    /**
     * Sets message_subject
     *
     * @param string $message_subject Subject to use on emails inviting recipients to the share. Ignored if you have not also provided `recipients` and a `message`
     *
     * @return $this
     */
    public function setMessageSubject($message_subject)
    {
        $this->container['message_subject'] = $message_subject;

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
     * @param bool $file_drop_create_folders Only used for **receive** shares. If true, uploads will be automatically placed into sub-folders of the folder, named after the chosen field on your form.
     *
     * @return $this
     */
    public function setFileDropCreateFolders($file_drop_create_folders)
    {
        $this->container['file_drop_create_folders'] = $file_drop_create_folders;

        return $this;
    }

    /**
     * Gets sending_local_files
     *
     * @return bool
     */
    public function getSendingLocalFiles()
    {
        return $this->container['sending_local_files'];
    }

    /**
     * Sets sending_local_files
     *
     * @param bool $sending_local_files Use this only for **send** shares. Flag to indicate that you are going to upload additional files from your computer to the share. If this is **true**, you will also need to use the [POST /shares/complete-send/{id}](#operation/completeDirectSend) call to finish setting up your share after the files are uploaded.
     *
     * @return $this
     */
    public function setSendingLocalFiles($sending_local_files)
    {
        $this->container['sending_local_files'] = $sending_local_files;

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
