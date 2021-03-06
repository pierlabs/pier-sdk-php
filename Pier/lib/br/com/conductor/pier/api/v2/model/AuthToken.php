<?php
/**
 * AuthToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace br.com.conductor.pier.api.v2.model;

use \ArrayAccess;
/**
 * AuthToken Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AuthToken implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'code' => 'string',
        'extra_info' => '\br.com.conductor.pier.api.v2.model\ExtraInfo',
        'id' => 'int',
        'owner' => 'string',
        'status' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'code' => 'code',
        'extra_info' => 'extraInfo',
        'id' => 'id',
        'owner' => 'owner',
        'status' => 'status'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'code' => 'setCode',
        'extra_info' => 'setExtraInfo',
        'id' => 'setId',
        'owner' => 'setOwner',
        'status' => 'setStatus'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'code' => 'getCode',
        'extra_info' => 'getExtraInfo',
        'id' => 'getId',
        'owner' => 'getOwner',
        'status' => 'getStatus'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $code 
      * @var string
      */
    protected $code;
    
    /**
      * $extra_info 
      * @var \br.com.conductor.pier.api.v2.model\ExtraInfo
      */
    protected $extra_info;
    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $owner 
      * @var string
      */
    protected $owner;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->code = $data["code"];
            $this->extra_info = $data["extra_info"];
            $this->id = $data["id"];
            $this->owner = $data["owner"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param string $code 
     * @return $this
     */
    public function setCode($code)
    {
        
        $this->code = $code;
        return $this;
    }
    
    /**
     * Gets extra_info
     * @return \br.com.conductor.pier.api.v2.model\ExtraInfo
     */
    public function getExtraInfo()
    {
        return $this->extra_info;
    }
  
    /**
     * Sets extra_info
     * @param \br.com.conductor.pier.api.v2.model\ExtraInfo $extra_info 
     * @return $this
     */
    public function setExtraInfo($extra_info)
    {
        
        $this->extra_info = $extra_info;
        return $this;
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
  
    /**
     * Sets owner
     * @param string $owner 
     * @return $this
     */
    public function setOwner($owner)
    {
        
        $this->owner = $owner;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("ACTIVE", "REVOKED", "DELETED");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ACTIVE', 'REVOKED', 'DELETED'");
        }
        $this->status = $status;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
