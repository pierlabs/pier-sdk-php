<?php
/**
 * ContaDebitoRecorrentePersistValue_
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
 * ContaDebitoRecorrentePersistValue_ Class Doc Comment
 *
 * @category    Class
 * @description {{{conta_debito_recorrente_persist_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContaDebitoRecorrentePersistValue_ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_conta' => 'int',
        'id_tipo_debito_recorrente' => 'int',
        'id_usuario' => 'int',
        'login' => 'string',
        'numero_parcelas' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_conta' => 'idConta',
        'id_tipo_debito_recorrente' => 'idTipoDebitoRecorrente',
        'id_usuario' => 'idUsuario',
        'login' => 'login',
        'numero_parcelas' => 'numeroParcelas'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_conta' => 'setIdConta',
        'id_tipo_debito_recorrente' => 'setIdTipoDebitoRecorrente',
        'id_usuario' => 'setIdUsuario',
        'login' => 'setLogin',
        'numero_parcelas' => 'setNumeroParcelas'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_conta' => 'getIdConta',
        'id_tipo_debito_recorrente' => 'getIdTipoDebitoRecorrente',
        'id_usuario' => 'getIdUsuario',
        'login' => 'getLogin',
        'numero_parcelas' => 'getNumeroParcelas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_conta {{{conta_debito_recorrente_persist_id_conta_value}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_tipo_debito_recorrente {{{conta_debito_recorrente_persist_id_tipo_debito_recorrente_value}}}
      * @var int
      */
    protected $id_tipo_debito_recorrente;
    
    /**
      * $id_usuario {{{conta_debito_recorrente_persist_id_usuario_value}}}
      * @var int
      */
    protected $id_usuario;
    
    /**
      * $login {{{conta_debito_recorrente_persist_login_value}}}
      * @var string
      */
    protected $login;
    
    /**
      * $numero_parcelas {{{conta_debito_recorrente_persist_num_parcelas_value}}}
      * @var int
      */
    protected $numero_parcelas;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_conta = $data["id_conta"];
            $this->id_tipo_debito_recorrente = $data["id_tipo_debito_recorrente"];
            $this->id_usuario = $data["id_usuario"];
            $this->login = $data["login"];
            $this->numero_parcelas = $data["numero_parcelas"];
        }
    }
    
    /**
     * Gets id_conta
     * @return int
     */
    public function getIdConta()
    {
        return $this->id_conta;
    }
  
    /**
     * Sets id_conta
     * @param int $id_conta {{{conta_debito_recorrente_persist_id_conta_value}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_tipo_debito_recorrente
     * @return int
     */
    public function getIdTipoDebitoRecorrente()
    {
        return $this->id_tipo_debito_recorrente;
    }
  
    /**
     * Sets id_tipo_debito_recorrente
     * @param int $id_tipo_debito_recorrente {{{conta_debito_recorrente_persist_id_tipo_debito_recorrente_value}}}
     * @return $this
     */
    public function setIdTipoDebitoRecorrente($id_tipo_debito_recorrente)
    {
        
        $this->id_tipo_debito_recorrente = $id_tipo_debito_recorrente;
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
     * @param int $id_usuario {{{conta_debito_recorrente_persist_id_usuario_value}}}
     * @return $this
     */
    public function setIdUsuario($id_usuario)
    {
        
        $this->id_usuario = $id_usuario;
        return $this;
    }
    
    /**
     * Gets login
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
  
    /**
     * Sets login
     * @param string $login {{{conta_debito_recorrente_persist_login_value}}}
     * @return $this
     */
    public function setLogin($login)
    {
        
        $this->login = $login;
        return $this;
    }
    
    /**
     * Gets numero_parcelas
     * @return int
     */
    public function getNumeroParcelas()
    {
        return $this->numero_parcelas;
    }
  
    /**
     * Sets numero_parcelas
     * @param int $numero_parcelas {{{conta_debito_recorrente_persist_num_parcelas_value}}}
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
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
