<?php
/**
 * TelefonePessoaAprovadaResponse
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
 * TelefonePessoaAprovadaResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto Telefone Pessoa Aprovada
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TelefonePessoaAprovadaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_tipo_telefone' => 'int',
        'ddd' => 'string',
        'telefone' => 'string',
        'ramal' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'id_tipo_telefone' => 'idTipoTelefone',
        'ddd' => 'ddd',
        'telefone' => 'telefone',
        'ramal' => 'ramal'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'id_tipo_telefone' => 'setIdTipoTelefone',
        'ddd' => 'setDdd',
        'telefone' => 'setTelefone',
        'ramal' => 'setRamal'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'id_tipo_telefone' => 'getIdTipoTelefone',
        'ddd' => 'getDdd',
        'telefone' => 'getTelefone',
        'ramal' => 'getRamal'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00F3digo de Identifica\u00E7\u00E3o do Endere\u00E7o (id)
      * @var int
      */
    protected $id;
    
    /**
      * $id_tipo_telefone C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id).
      * @var int
      */
    protected $id_tipo_telefone;
    
    /**
      * $ddd C\u00F3digo DDD do telefone (id).
      * @var string
      */
    protected $ddd;
    
    /**
      * $telefone N\u00FAmero do telefone.
      * @var string
      */
    protected $telefone;
    
    /**
      * $ramal N\u00FAmero do ramal.
      * @var string
      */
    protected $ramal;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_tipo_telefone = $data["id_tipo_telefone"];
            $this->ddd = $data["ddd"];
            $this->telefone = $data["telefone"];
            $this->ramal = $data["ramal"];
        }
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
     * @param int $id C\u00F3digo de Identifica\u00E7\u00E3o do Endere\u00E7o (id)
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_tipo_telefone
     * @return int
     */
    public function getIdTipoTelefone()
    {
        return $this->id_tipo_telefone;
    }
  
    /**
     * Sets id_tipo_telefone
     * @param int $id_tipo_telefone C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id).
     * @return $this
     */
    public function setIdTipoTelefone($id_tipo_telefone)
    {
        
        $this->id_tipo_telefone = $id_tipo_telefone;
        return $this;
    }
    
    /**
     * Gets ddd
     * @return string
     */
    public function getDdd()
    {
        return $this->ddd;
    }
  
    /**
     * Sets ddd
     * @param string $ddd C\u00F3digo DDD do telefone (id).
     * @return $this
     */
    public function setDdd($ddd)
    {
        
        $this->ddd = $ddd;
        return $this;
    }
    
    /**
     * Gets telefone
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
  
    /**
     * Sets telefone
     * @param string $telefone N\u00FAmero do telefone.
     * @return $this
     */
    public function setTelefone($telefone)
    {
        
        $this->telefone = $telefone;
        return $this;
    }
    
    /**
     * Gets ramal
     * @return string
     */
    public function getRamal()
    {
        return $this->ramal;
    }
  
    /**
     * Sets ramal
     * @param string $ramal N\u00FAmero do ramal.
     * @return $this
     */
    public function setRamal($ramal)
    {
        
        $this->ramal = $ramal;
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
