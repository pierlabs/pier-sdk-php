<?php
/**
 * UsuarioResponse
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
 * UsuarioResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o do recurso Usuario
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsuarioResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'login' => 'string',
        'id_emissor' => 'int',
        'cpf' => 'string',
        'email' => 'string',
        'status' => 'string',
        'data_criacao' => '\DateTime',
        'data_modificacao' => '\DateTime',
        'tentativas_incorretas' => 'int'
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
        'nome' => 'nome',
        'login' => 'login',
        'id_emissor' => 'idEmissor',
        'cpf' => 'cpf',
        'email' => 'email',
        'status' => 'status',
        'data_criacao' => 'dataCriacao',
        'data_modificacao' => 'dataModificacao',
        'tentativas_incorretas' => 'tentativasIncorretas'
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
        'nome' => 'setNome',
        'login' => 'setLogin',
        'id_emissor' => 'setIdEmissor',
        'cpf' => 'setCpf',
        'email' => 'setEmail',
        'status' => 'setStatus',
        'data_criacao' => 'setDataCriacao',
        'data_modificacao' => 'setDataModificacao',
        'tentativas_incorretas' => 'setTentativasIncorretas'
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
        'nome' => 'getNome',
        'login' => 'getLogin',
        'id_emissor' => 'getIdEmissor',
        'cpf' => 'getCpf',
        'email' => 'getEmail',
        'status' => 'getStatus',
        'data_criacao' => 'getDataCriacao',
        'data_modificacao' => 'getDataModificacao',
        'tentativas_incorretas' => 'getTentativasIncorretas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id Id do Usu\u00C3\u00A1rio
      * @var int
      */
    protected $id;
    
    /**
      * $nome Nome do Usu\u00C3\u00A1rio
      * @var string
      */
    protected $nome;
    
    /**
      * $login Login do Usu\u00C3\u00A1rio
      * @var string
      */
    protected $login;
    
    /**
      * $id_emissor Id do emissor do usu\u00C3\u00A1rio
      * @var int
      */
    protected $id_emissor;
    
    /**
      * $cpf CPF do Usu\u00C3\u00A1rio
      * @var string
      */
    protected $cpf;
    
    /**
      * $email Email do Usu\u00C3\u00A1rio
      * @var string
      */
    protected $email;
    
    /**
      * $status Status do Usu\u00C3\u00A1rio
      * @var string
      */
    protected $status;
    
    /**
      * $data_criacao Data de cria\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio
      * @var \DateTime
      */
    protected $data_criacao;
    
    /**
      * $data_modificacao Data de modifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio
      * @var \DateTime
      */
    protected $data_modificacao;
    
    /**
      * $tentativas_incorretas N\u00C3\u00BAmero de tentativas de valida\u00C3\u00A7\u00C3\u00A3o incorretas
      * @var int
      */
    protected $tentativas_incorretas;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->login = $data["login"];
            $this->id_emissor = $data["id_emissor"];
            $this->cpf = $data["cpf"];
            $this->email = $data["email"];
            $this->status = $data["status"];
            $this->data_criacao = $data["data_criacao"];
            $this->data_modificacao = $data["data_modificacao"];
            $this->tentativas_incorretas = $data["tentativas_incorretas"];
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
     * @param int $id Id do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param string $nome Nome do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
     * @param string $login Login do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setLogin($login)
    {
        
        $this->login = $login;
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
     * @param int $id_emissor Id do emissor do usu\u00C3\u00A1rio
     * @return $this
     */
    public function setIdEmissor($id_emissor)
    {
        
        $this->id_emissor = $id_emissor;
        return $this;
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
     * @param string $cpf CPF do Usu\u00C3\u00A1rio
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
     * @param string $email Email do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
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
     * @param string $status Status do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("ATIVO", "INATIVO");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ATIVO', 'INATIVO'");
        }
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets data_criacao
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }
  
    /**
     * Sets data_criacao
     * @param \DateTime $data_criacao Data de cria\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setDataCriacao($data_criacao)
    {
        
        $this->data_criacao = $data_criacao;
        return $this;
    }
    
    /**
     * Gets data_modificacao
     * @return \DateTime
     */
    public function getDataModificacao()
    {
        return $this->data_modificacao;
    }
  
    /**
     * Sets data_modificacao
     * @param \DateTime $data_modificacao Data de modifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio
     * @return $this
     */
    public function setDataModificacao($data_modificacao)
    {
        
        $this->data_modificacao = $data_modificacao;
        return $this;
    }
    
    /**
     * Gets tentativas_incorretas
     * @return int
     */
    public function getTentativasIncorretas()
    {
        return $this->tentativas_incorretas;
    }
  
    /**
     * Sets tentativas_incorretas
     * @param int $tentativas_incorretas N\u00C3\u00BAmero de tentativas de valida\u00C3\u00A7\u00C3\u00A3o incorretas
     * @return $this
     */
    public function setTentativasIncorretas($tentativas_incorretas)
    {
        
        $this->tentativas_incorretas = $tentativas_incorretas;
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
