<?php
/**
 * DispositivoPersist
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
 * DispositivoPersist Class Doc Comment
 *
 * @category    Class
 * @description Objeto Dispositivo
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DispositivoPersist implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'token' => 'string',
        'id_aplicacao_mobile' => 'int',
        'id_usuario' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'token' => 'token',
        'id_aplicacao_mobile' => 'idAplicacaoMobile',
        'id_usuario' => 'idUsuario'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'token' => 'setToken',
        'id_aplicacao_mobile' => 'setIdAplicacaoMobile',
        'id_usuario' => 'setIdUsuario'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'token' => 'getToken',
        'id_aplicacao_mobile' => 'getIdAplicacaoMobile',
        'id_usuario' => 'getIdUsuario'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $token Apresenta o token do dispositivo.
      * @var string
      */
    protected $token;
    
    /**
      * $id_aplicacao_mobile Apresenta o identificador da aplica\u00C3\u00A7\u00C3\u00A3o.
      * @var int
      */
    protected $id_aplicacao_mobile;
    
    /**
      * $id_usuario Apresenta o identificador do usu\u00C3\u00A1rio.
      * @var int
      */
    protected $id_usuario;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->token = $data["token"];
            $this->id_aplicacao_mobile = $data["id_aplicacao_mobile"];
            $this->id_usuario = $data["id_usuario"];
        }
    }
    
    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
  
    /**
     * Sets token
     * @param string $token Apresenta o token do dispositivo.
     * @return $this
     */
    public function setToken($token)
    {
        
        $this->token = $token;
        return $this;
    }
    
    /**
     * Gets id_aplicacao_mobile
     * @return int
     */
    public function getIdAplicacaoMobile()
    {
        return $this->id_aplicacao_mobile;
    }
  
    /**
     * Sets id_aplicacao_mobile
     * @param int $id_aplicacao_mobile Apresenta o identificador da aplica\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setIdAplicacaoMobile($id_aplicacao_mobile)
    {
        
        $this->id_aplicacao_mobile = $id_aplicacao_mobile;
        return $this;
    }
    
    /**
     * Gets id_usuario
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
  
    /**
     * Sets id_usuario
     * @param int $id_usuario Apresenta o identificador do usu\u00C3\u00A1rio.
     * @return $this
     */
    public function setIdUsuario($id_usuario)
    {
        
        $this->id_usuario = $id_usuario;
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
