<?php
/**
 * TokenPartialUpdateValue_
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
 * TokenPartialUpdateValue_ Class Doc Comment
 *
 * @category    Class
 * @description {{{token_partial_update_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TokenPartialUpdateValue_ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'base' => 'int',
        'owner' => 'string',
        'criado_por' => 'string',
        'alterado_por' => 'string',
        'id_aplicacao' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'base' => 'base',
        'owner' => 'owner',
        'criado_por' => 'criadoPor',
        'alterado_por' => 'alteradoPor',
        'id_aplicacao' => 'idAplicacao'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'base' => 'setBase',
        'owner' => 'setOwner',
        'criado_por' => 'setCriadoPor',
        'alterado_por' => 'setAlteradoPor',
        'id_aplicacao' => 'setIdAplicacao'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'base' => 'getBase',
        'owner' => 'getOwner',
        'criado_por' => 'getCriadoPor',
        'alterado_por' => 'getAlteradoPor',
        'id_aplicacao' => 'getIdAplicacao'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $base {{{token_dto_base_value}}}
      * @var int
      */
    protected $base;
    
    /**
      * $owner {{{token_dto_owner_value}}}
      * @var string
      */
    protected $owner;
    
    /**
      * $criado_por {{{token_dto_criado_por_value}}}
      * @var string
      */
    protected $criado_por;
    
    /**
      * $alterado_por {{{token_dto_alterado_por_value}}}
      * @var string
      */
    protected $alterado_por;
    
    /**
      * $id_aplicacao {{{token_dto_id_application_value}}}
      * @var int
      */
    protected $id_aplicacao;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->base = $data["base"];
            $this->owner = $data["owner"];
            $this->criado_por = $data["criado_por"];
            $this->alterado_por = $data["alterado_por"];
            $this->id_aplicacao = $data["id_aplicacao"];
        }
    }
    
    /**
     * Gets base
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }
  
    /**
     * Sets base
     * @param int $base {{{token_dto_base_value}}}
     * @return $this
     */
    public function setBase($base)
    {
        
        $this->base = $base;
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
     * @param string $owner {{{token_dto_owner_value}}}
     * @return $this
     */
    public function setOwner($owner)
    {
        
        $this->owner = $owner;
        return $this;
    }
    
    /**
     * Gets criado_por
     * @return string
     */
    public function getCriadoPor()
    {
        return $this->criado_por;
    }
  
    /**
     * Sets criado_por
     * @param string $criado_por {{{token_dto_criado_por_value}}}
     * @return $this
     */
    public function setCriadoPor($criado_por)
    {
        
        $this->criado_por = $criado_por;
        return $this;
    }
    
    /**
     * Gets alterado_por
     * @return string
     */
    public function getAlteradoPor()
    {
        return $this->alterado_por;
    }
  
    /**
     * Sets alterado_por
     * @param string $alterado_por {{{token_dto_alterado_por_value}}}
     * @return $this
     */
    public function setAlteradoPor($alterado_por)
    {
        
        $this->alterado_por = $alterado_por;
        return $this;
    }
    
    /**
     * Gets id_aplicacao
     * @return int
     */
    public function getIdAplicacao()
    {
        return $this->id_aplicacao;
    }
  
    /**
     * Sets id_aplicacao
     * @param int $id_aplicacao {{{token_dto_id_application_value}}}
     * @return $this
     */
    public function setIdAplicacao($id_aplicacao)
    {
        
        $this->id_aplicacao = $id_aplicacao;
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
