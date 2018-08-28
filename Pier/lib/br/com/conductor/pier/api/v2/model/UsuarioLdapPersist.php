<?php
/**
 * UsuarioLdapPersist
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
 * UsuarioLdapPersist Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsuarioLdapPersist implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'cpf' => 'string',
        'email' => 'string',
        'id_emissor' => 'int',
        'login' => 'string',
        'nome' => 'string',
        'perfis' => '\br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'cpf' => 'cpf',
        'email' => 'email',
        'id_emissor' => 'idEmissor',
        'login' => 'login',
        'nome' => 'nome',
        'perfis' => 'perfis'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'cpf' => 'setCpf',
        'email' => 'setEmail',
        'id_emissor' => 'setIdEmissor',
        'login' => 'setLogin',
        'nome' => 'setNome',
        'perfis' => 'setPerfis'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'cpf' => 'getCpf',
        'email' => 'getEmail',
        'id_emissor' => 'getIdEmissor',
        'login' => 'getLogin',
        'nome' => 'getNome',
        'perfis' => 'getPerfis'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $cpf 
      * @var string
      */
    protected $cpf;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    
    /**
      * $id_emissor 
      * @var int
      */
    protected $id_emissor;
    
    /**
      * $login 
      * @var string
      */
    protected $login;
    
    /**
      * $nome 
      * @var string
      */
    protected $nome;
    
    /**
      * $perfis 
      * @var \br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[]
      */
    protected $perfis;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->cpf = $data["cpf"];
            $this->email = $data["email"];
            $this->id_emissor = $data["id_emissor"];
            $this->login = $data["login"];
            $this->nome = $data["nome"];
            $this->perfis = $data["perfis"];
        }
    }
    
    /**
     * Gets cpf
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }
  
    /**
     * Sets cpf
     * @param string $cpf 
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
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
     * @param int $id_emissor 
     * @return $this
     */
    public function setIdEmissor($id_emissor)
    {
        
        $this->id_emissor = $id_emissor;
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
     * @param string $login 
     * @return $this
     */
    public function setLogin($login)
    {
        
        $this->login = $login;
        return $this;
    }
    
    /**
     * Gets nome
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
  
    /**
     * Sets nome
     * @param string $nome 
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets perfis
     * @return \br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[]
     */
    public function getPerfis()
    {
        return $this->perfis;
    }
  
    /**
     * Sets perfis
     * @param \br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[] $perfis 
     * @return $this
     */
    public function setPerfis($perfis)
    {
        
        $this->perfis = $perfis;
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
