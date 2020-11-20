<?php
/**
 * UpdateShareRequestBody
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
 * UpdateShareRequestBody Class Doc Comment
 *
 * @category Class
 * @package  ExaVault
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateShareRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateShareRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'resources' => 'string[]',
'accessMode' => '\ExaVault\Model\AccessMode',
'embed' => 'bool',
'recipients' => '\ExaVault\Model\SharesRecipients[]',
'expiration' => '\DateTime',
'hasNotification' => 'bool',
'isPublic' => 'bool',
'messageBody' => 'string',
'notificationEmails' => 'string[]',
'password' => 'string',
'requireEmail' => 'bool',
'messageSubject' => 'string',
'fileDropCreateFolders' => 'bool',
'status' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'resources' => null,
'accessMode' => null,
'embed' => null,
'recipients' => null,
'expiration' => 'date-time',
'hasNotification' => null,
'isPublic' => null,
'messageBody' => null,
'notificationEmails' => 'email',
'password' => null,
'requireEmail' => null,
'messageSubject' => null,
'fileDropCreateFolders' => null,
'status' => null    ];

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
'resources' => 'resources',
'accessMode' => 'accessMode',
'embed' => 'embed',
'recipients' => 'recipients',
'expiration' => 'expiration',
'hasNotification' => 'hasNotification',
'isPublic' => 'isPublic',
'messageBody' => 'messageBody',
'notificationEmails' => 'notificationEmails',
'password' => 'password',
'requireEmail' => 'requireEmail',
'messageSubject' => 'messageSubject',
'fileDropCreateFolders' => 'fileDropCreateFolders',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'resources' => 'setResources',
'accessMode' => 'setAccessMode',
'embed' => 'setEmbed',
'recipients' => 'setRecipients',
'expiration' => 'setExpiration',
'hasNotification' => 'setHasNotification',
'isPublic' => 'setIsPublic',
'messageBody' => 'setMessageBody',
'notificationEmails' => 'setNotificationEmails',
'password' => 'setPassword',
'requireEmail' => 'setRequireEmail',
'messageSubject' => 'setMessageSubject',
'fileDropCreateFolders' => 'setFileDropCreateFolders',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'resources' => 'getResources',
'accessMode' => 'getAccessMode',
'embed' => 'getEmbed',
'recipients' => 'getRecipients',
'expiration' => 'getExpiration',
'hasNotification' => 'getHasNotification',
'isPublic' => 'getIsPublic',
'messageBody' => 'getMessageBody',
'notificationEmails' => 'getNotificationEmails',
'password' => 'getPassword',
'requireEmail' => 'getRequireEmail',
'messageSubject' => 'getMessageSubject',
'fileDropCreateFolders' => 'getFileDropCreateFolders',
'status' => 'getStatus'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['accessMode'] = isset($data['accessMode']) ? $data['accessMode'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['hasNotification'] = isset($data['hasNotification']) ? $data['hasNotification'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['messageBody'] = isset($data['messageBody']) ? $data['messageBody'] : null;
        $this->container['notificationEmails'] = isset($data['notificationEmails']) ? $data['notificationEmails'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['requireEmail'] = isset($data['requireEmail']) ? $data['requireEmail'] : null;
        $this->container['messageSubject'] = isset($data['messageSubject']) ? $data['messageSubject'] : null;
        $this->container['fileDropCreateFolders'] = isset($data['fileDropCreateFolders']) ? $data['fileDropCreateFolders'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * @param string $name Name of the share.
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
     * @param string[] $resources Array of resources for this share. See details on [how to specify resources](#section/Identifying-Resources) above.  **shared_folder** and **receive** shares must have only one `resource`, which is a directory that does not have a current share attached.  **send** shares may have multiple `resource` parameters.   **NOTE**: Sending this parameter will **REPLACE** the existing resources with the resources included in this request.
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets accessMode
     *
     * @return \ExaVault\Model\AccessMode
     */
    public function getAccessMode()
    {
        return $this->container['accessMode'];
    }

    /**
     * Sets accessMode
     *
     * @param \ExaVault\Model\AccessMode $accessMode accessMode
     *
     * @return $this
     */
    public function setAccessMode($accessMode)
    {
        $this->container['accessMode'] = $accessMode;

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
     * @param bool $embed Whether the share can be embedded in another web page.
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
     * @param \ExaVault\Model\SharesRecipients[] $recipients People you want to invite to the share.   **Note**: unless you also set the `subject` and `message` for the new share, invitation emails will not be sent to these recipients.  **Note**: Recipients in this list will **REPLACE** the recipients already assigned to this share.
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
     * @param \DateTime $expiration New expiration date and time for the share
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets hasNotification
     *
     * @return bool
     */
    public function getHasNotification()
    {
        return $this->container['hasNotification'];
    }

    /**
     * Sets hasNotification
     *
     * @param bool $hasNotification Whether delivery receipts should be sent for this share.
     *
     * @return $this
     */
    public function setHasNotification($hasNotification)
    {
        $this->container['hasNotification'] = $hasNotification;

        return $this;
    }

    /**
     * Gets isPublic
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
     * Sets isPublic
     *
     * @param bool $isPublic Whether people can visit the share without following a link from an invitation email
     *
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;

        return $this;
    }

    /**
     * Gets messageBody
     *
     * @return string
     */
    public function getMessageBody()
    {
        return $this->container['messageBody'];
    }

    /**
     * Sets messageBody
     *
     * @param string $messageBody Message content to use for emails inviting recipients to the share. Ignored if you have not also provided `recipients` and a `subject`
     *
     * @return $this
     */
    public function setMessageBody($messageBody)
    {
        $this->container['messageBody'] = $messageBody;

        return $this;
    }

    /**
     * Gets notificationEmails
     *
     * @return string[]
     */
    public function getNotificationEmails()
    {
        return $this->container['notificationEmails'];
    }

    /**
     * Sets notificationEmails
     *
     * @param string[] $notificationEmails List of email addresses to send delivery receipts to. Ignored if `hasNotification` is false.
     *
     * @return $this
     */
    public function setNotificationEmails($notificationEmails)
    {
        $this->container['notificationEmails'] = $notificationEmails;

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
     * @param string $password New password for the share. To leave the password unchanged, do not send this parameter.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets requireEmail
     *
     * @return bool
     */
    public function getRequireEmail()
    {
        return $this->container['requireEmail'];
    }

    /**
     * Sets requireEmail
     *
     * @param bool $requireEmail Whether visitors to the share will be required to enter their email in order to access the share.
     *
     * @return $this
     */
    public function setRequireEmail($requireEmail)
    {
        $this->container['requireEmail'] = $requireEmail;

        return $this;
    }

    /**
     * Gets messageSubject
     *
     * @return string
     */
    public function getMessageSubject()
    {
        return $this->container['messageSubject'];
    }

    /**
     * Sets messageSubject
     *
     * @param string $messageSubject Subject to use on emails inviting recipients to the share. Ignored if you have not also provided `recipients` and a `message`
     *
     * @return $this
     */
    public function setMessageSubject($messageSubject)
    {
        $this->container['messageSubject'] = $messageSubject;

        return $this;
    }

    /**
     * Gets fileDropCreateFolders
     *
     * @return bool
     */
    public function getFileDropCreateFolders()
    {
        return $this->container['fileDropCreateFolders'];
    }

    /**
     * Sets fileDropCreateFolders
     *
     * @param bool $fileDropCreateFolders Whether uploads to a receive folder should be automatically placed into subfolders. See our [receive folder documentation](/docs/account/05-file-sharing/05-form-builder#advanced-form-settings)
     *
     * @return $this
     */
    public function setFileDropCreateFolders($fileDropCreateFolders)
    {
        $this->container['fileDropCreateFolders'] = $fileDropCreateFolders;

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
     * @param int $status New status for the share. You can set an active share to inactive by setting the status to **0**
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
