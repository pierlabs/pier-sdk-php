<?php
/**
 * CodigoSegurancaResponse
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
 * CodigoSegurancaResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{codigo_seguranca_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CodigoSegurancaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_emissor' => 'int',
        'modo_envio' => 'string',
        'contato' => 'string',
        'ativo' => 'bool',
        'data_validade' => 'string'
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
        'id_emissor' => 'idEmissor',
        'modo_envio' => 'modoEnvio',
        'contato' => 'contato',
        'ativo' => 'ativo',
        'data_validade' => 'dataValidade'
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
        'id_emissor' => 'setIdEmissor',
        'modo_envio' => 'setModoEnvio',
        'contato' => 'setContato',
        'ativo' => 'setAtivo',
        'data_validade' => 'setDataValidade'
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
        'id_emissor' => 'getIdEmissor',
        'modo_envio' => 'getModoEnvio',
        'contato' => 'getContato',
        'ativo' => 'getAtivo',
        'data_validade' => 'getDataValidade'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id {{{codigo_seguranca_response_id_value}}}
      * @var int
      */
    protected $id;
    
    /**
      * $id_emissor {{{codigo_seguranca_response_id_emissor_value}}}
      * @var int
      */
    protected $id_emissor;
    
    /**
      * $modo_envio {{{codigo_seguranca_response_modo_envio_value}}}
      * @var string
      */
    protected $modo_envio;
    
    /**
      * $contato {{{codigo_seguranca_response_contato_value}}}
      * @var string
      */
    protected $contato;
    
    /**
      * $ativo {{{codigo_seguranca_response_ativo_value}}}
      * @var bool
      */
    protected $ativo;
    
    /**
      * $data_validade {{{codigo_seguranca_response_data_validade_value}}}
      * @var string
      */
    protected $data_validade;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_emissor = $data["id_emissor"];
            $this->modo_envio = $data["modo_envio"];
            $this->contato = $data["contato"];
            $this->ativo = $data["ativo"];
            $this->data_validade = $data["data_validade"];
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
     * @param int $id {{{codigo_seguranca_response_id_value}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_emissor
     * @return int
     */
    public function getIdEmissor()
    {
        return $this->id_emissor;
    }
  
    /**
     * Sets id_emissor
     * @param int $id_emissor {{{codigo_seguranca_response_id_emissor_value}}}
     * @return $this
     */
    public function setIdEmissor($id_emissor)
    {
        
        $this->id_emissor = $id_emissor;
        return $this;
    }
    
    /**
     * Gets modo_envio
     * @return string
     */
    public function getModoEnvio()
    {
        return $this->modo_envio;
    }
  
    /**
     * Sets modo_envio
     * @param string $modo_envio {{{codigo_seguranca_response_modo_envio_value}}}
     * @return $this
     */
    public function setModoEnvio($modo_envio)
    {
        
        $this->modo_envio = $modo_envio;
        return $this;
    }
    
    /**
     * Gets contato
     * @return string
     */
    public function getContato()
    {
        return $this->contato;
    }
  
    /**
     * Sets contato
     * @param string $contato {{{codigo_seguranca_response_contato_value}}}
     * @return $this
     */
    public function setContato($contato)
    {
        
        $this->contato = $contato;
        return $this;
    }
    
    /**
     * Gets ativo
     * @return bool
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
  
    /**
     * Sets ativo
     * @param bool $ativo {{{codigo_seguranca_response_ativo_value}}}
     * @return $this
     */
    public function setAtivo($ativo)
    {
        
        $this->ativo = $ativo;
        return $this;
    }
    
    /**
     * Gets data_validade
     * @return string
     */
    public function getDataValidade()
    {
        return $this->data_validade;
    }
  
    /**
     * Sets data_validade
     * @param string $data_validade {{{codigo_seguranca_response_data_validade_value}}}
     * @return $this
     */
    public function setDataValidade($data_validade)
    {
        
        $this->data_validade = $data_validade;
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
