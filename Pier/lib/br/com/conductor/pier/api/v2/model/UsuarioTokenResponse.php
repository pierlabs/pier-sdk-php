<?php
/**
 * UsuarioTokenResponse
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
 * UsuarioTokenResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{usuario_token_resposta_descricao}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsuarioTokenResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'ativo' => 'bool',
        'cpf' => 'string',
        'data_inclusao' => 'string',
        'data_nascimento' => 'string',
        'ddd' => 'string',
        'email' => 'string',
        'telefone' => 'string',
        'token' => 'string',
        'validade' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'ativo' => 'ativo',
        'cpf' => 'cpf',
        'data_inclusao' => 'dataInclusao',
        'data_nascimento' => 'dataNascimento',
        'ddd' => 'ddd',
        'email' => 'email',
        'telefone' => 'telefone',
        'token' => 'token',
        'validade' => 'validade'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'ativo' => 'setAtivo',
        'cpf' => 'setCpf',
        'data_inclusao' => 'setDataInclusao',
        'data_nascimento' => 'setDataNascimento',
        'ddd' => 'setDdd',
        'email' => 'setEmail',
        'telefone' => 'setTelefone',
        'token' => 'setToken',
        'validade' => 'setValidade'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'ativo' => 'getAtivo',
        'cpf' => 'getCpf',
        'data_inclusao' => 'getDataInclusao',
        'data_nascimento' => 'getDataNascimento',
        'ddd' => 'getDdd',
        'email' => 'getEmail',
        'telefone' => 'getTelefone',
        'token' => 'getToken',
        'validade' => 'getValidade'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $ativo {{{usuario_token_resposta_ativo_descricao}}}
      * @var bool
      */
    protected $ativo;
    
    /**
      * $cpf {{{usuario_token_resposta_cpf_descricao}}}
      * @var string
      */
    protected $cpf;
    
    /**
      * $data_inclusao {{{usuario_token_resposta_data_inclusao_descricao}}}
      * @var string
      */
    protected $data_inclusao;
    
    /**
      * $data_nascimento {{{usuario_token_resposta_data_nascimento_descricao}}}
      * @var string
      */
    protected $data_nascimento;
    
    /**
      * $ddd {{{usuario_token_resposta_ddd_descricao}}}
      * @var string
      */
    protected $ddd;
    
    /**
      * $email {{{usuario_token_resposta_email_descricao}}}
      * @var string
      */
    protected $email;
    
    /**
      * $telefone {{{usuario_token_resposta_telefone_descricao}}}
      * @var string
      */
    protected $telefone;
    
    /**
      * $token {{{usuario_token_resposta_token_descricao}}}
      * @var string
      */
    protected $token;
    
    /**
      * $validade {{{usuario_token_resposta_validade_descricao}}}
      * @var string
      */
    protected $validade;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->ativo = $data["ativo"];
            $this->cpf = $data["cpf"];
            $this->data_inclusao = $data["data_inclusao"];
            $this->data_nascimento = $data["data_nascimento"];
            $this->ddd = $data["ddd"];
            $this->email = $data["email"];
            $this->telefone = $data["telefone"];
            $this->token = $data["token"];
            $this->validade = $data["validade"];
        }
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
     * @param bool $ativo {{{usuario_token_resposta_ativo_descricao}}}
     * @return $this
     */
    public function setAtivo($ativo)
    {
        
        $this->ativo = $ativo;
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
     * @param string $cpf {{{usuario_token_resposta_cpf_descricao}}}
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
        return $this;
    }
    
    /**
     * Gets data_inclusao
     * @return string
     */
    public function getDataInclusao()
    {
        return $this->data_inclusao;
    }
  
    /**
     * Sets data_inclusao
     * @param string $data_inclusao {{{usuario_token_resposta_data_inclusao_descricao}}}
     * @return $this
     */
    public function setDataInclusao($data_inclusao)
    {
        
        $this->data_inclusao = $data_inclusao;
        return $this;
    }
    
    /**
     * Gets data_nascimento
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
  
    /**
     * Sets data_nascimento
     * @param string $data_nascimento {{{usuario_token_resposta_data_nascimento_descricao}}}
     * @return $this
     */
    public function setDataNascimento($data_nascimento)
    {
        
        $this->data_nascimento = $data_nascimento;
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
     * @param string $ddd {{{usuario_token_resposta_ddd_descricao}}}
     * @return $this
     */
    public function setDdd($ddd)
    {
        
        $this->ddd = $ddd;
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
     * @param string $email {{{usuario_token_resposta_email_descricao}}}
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
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
     * @param string $telefone {{{usuario_token_resposta_telefone_descricao}}}
     * @return $this
     */
    public function setTelefone($telefone)
    {
        
        $this->telefone = $telefone;
        return $this;
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
     * @param string $token {{{usuario_token_resposta_token_descricao}}}
     * @return $this
     */
    public function setToken($token)
    {
        
        $this->token = $token;
        return $this;
    }
    
    /**
     * Gets validade
     * @return string
     */
    public function getValidade()
    {
        return $this->validade;
    }
  
    /**
     * Sets validade
     * @param string $validade {{{usuario_token_resposta_validade_descricao}}}
     * @return $this
     */
    public function setValidade($validade)
    {
        
        $this->validade = $validade;
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
