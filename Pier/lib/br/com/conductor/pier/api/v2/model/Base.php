<?php
/**
 * Base
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
 * Base Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o do recurso Base
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Base implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'servidor' => 'string',
        'usuario' => 'string',
        'senha' => 'string',
        'nome_base' => 'string',
        'senha_criptografada' => 'bool',
        'domain' => 'string',
        'nome_base_controle_acesso' => 'string',
        'id_emissor' => 'int',
        'servidor_controle_acesso' => 'string'
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
        'servidor' => 'servidor',
        'usuario' => 'usuario',
        'senha' => 'senha',
        'nome_base' => 'nomeBase',
        'senha_criptografada' => 'senhaCriptografada',
        'domain' => 'domain',
        'nome_base_controle_acesso' => 'nomeBaseControleAcesso',
        'id_emissor' => 'idEmissor',
        'servidor_controle_acesso' => 'servidorControleAcesso'
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
        'servidor' => 'setServidor',
        'usuario' => 'setUsuario',
        'senha' => 'setSenha',
        'nome_base' => 'setNomeBase',
        'senha_criptografada' => 'setSenhaCriptografada',
        'domain' => 'setDomain',
        'nome_base_controle_acesso' => 'setNomeBaseControleAcesso',
        'id_emissor' => 'setIdEmissor',
        'servidor_controle_acesso' => 'setServidorControleAcesso'
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
        'servidor' => 'getServidor',
        'usuario' => 'getUsuario',
        'senha' => 'getSenha',
        'nome_base' => 'getNomeBase',
        'senha_criptografada' => 'getSenhaCriptografada',
        'domain' => 'getDomain',
        'nome_base_controle_acesso' => 'getNomeBaseControleAcesso',
        'id_emissor' => 'getIdEmissor',
        'servidor_controle_acesso' => 'getServidorControleAcesso'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo identificador da base
      * @var int
      */
    protected $id;
    
    /**
      * $servidor IP do servidor
      * @var string
      */
    protected $servidor;
    
    /**
      * $usuario Nome do usu\u00C3\u00A1rio
      * @var string
      */
    protected $usuario;
    
    /**
      * $senha Senha
      * @var string
      */
    protected $senha;
    
    /**
      * $nome_base Nome da base
      * @var string
      */
    protected $nome_base;
    
    /**
      * $senha_criptografada senha Criptografada
      * @var bool
      */
    protected $senha_criptografada;
    
    /**
      * $domain Dom\u00C3\u00ADnio da base
      * @var string
      */
    protected $domain;
    
    /**
      * $nome_base_controle_acesso Nome da base de controle acesso
      * @var string
      */
    protected $nome_base_controle_acesso;
    
    /**
      * $id_emissor C\u00C3\u00B3digo do identificador do emissor
      * @var int
      */
    protected $id_emissor;
    
    /**
      * $servidor_controle_acesso Servidor do controle de acesso
      * @var string
      */
    protected $servidor_controle_acesso;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->servidor = $data["servidor"];
            $this->usuario = $data["usuario"];
            $this->senha = $data["senha"];
            $this->nome_base = $data["nome_base"];
            $this->senha_criptografada = $data["senha_criptografada"];
            $this->domain = $data["domain"];
            $this->nome_base_controle_acesso = $data["nome_base_controle_acesso"];
            $this->id_emissor = $data["id_emissor"];
            $this->servidor_controle_acesso = $data["servidor_controle_acesso"];
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
     * @param int $id C\u00C3\u00B3digo identificador da base
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets servidor
     * @return string
     */
    public function getServidor()
    {
        return $this->servidor;
    }
  
    /**
     * Sets servidor
     * @param string $servidor IP do servidor
     * @return $this
     */
    public function setServidor($servidor)
    {
        
        $this->servidor = $servidor;
        return $this;
    }
    
    /**
     * Gets usuario
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
  
    /**
     * Sets usuario
     * @param string $usuario Nome do usu\u00C3\u00A1rio
     * @return $this
     */
    public function setUsuario($usuario)
    {
        
        $this->usuario = $usuario;
        return $this;
    }
    
    /**
     * Gets senha
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }
  
    /**
     * Sets senha
     * @param string $senha Senha
     * @return $this
     */
    public function setSenha($senha)
    {
        
        $this->senha = $senha;
        return $this;
    }
    
    /**
     * Gets nome_base
     * @return string
     */
    public function getNomeBase()
    {
        return $this->nome_base;
    }
  
    /**
     * Sets nome_base
     * @param string $nome_base Nome da base
     * @return $this
     */
    public function setNomeBase($nome_base)
    {
        
        $this->nome_base = $nome_base;
        return $this;
    }
    
    /**
     * Gets senha_criptografada
     * @return bool
     */
    public function getSenhaCriptografada()
    {
        return $this->senha_criptografada;
    }
  
    /**
     * Sets senha_criptografada
     * @param bool $senha_criptografada senha Criptografada
     * @return $this
     */
    public function setSenhaCriptografada($senha_criptografada)
    {
        
        $this->senha_criptografada = $senha_criptografada;
        return $this;
    }
    
    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
  
    /**
     * Sets domain
     * @param string $domain Dom\u00C3\u00ADnio da base
     * @return $this
     */
    public function setDomain($domain)
    {
        
        $this->domain = $domain;
        return $this;
    }
    
    /**
     * Gets nome_base_controle_acesso
     * @return string
     */
    public function getNomeBaseControleAcesso()
    {
        return $this->nome_base_controle_acesso;
    }
  
    /**
     * Sets nome_base_controle_acesso
     * @param string $nome_base_controle_acesso Nome da base de controle acesso
     * @return $this
     */
    public function setNomeBaseControleAcesso($nome_base_controle_acesso)
    {
        
        $this->nome_base_controle_acesso = $nome_base_controle_acesso;
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
     * @param int $id_emissor C\u00C3\u00B3digo do identificador do emissor
     * @return $this
     */
    public function setIdEmissor($id_emissor)
    {
        
        $this->id_emissor = $id_emissor;
        return $this;
    }
    
    /**
     * Gets servidor_controle_acesso
     * @return string
     */
    public function getServidorControleAcesso()
    {
        return $this->servidor_controle_acesso;
    }
  
    /**
     * Sets servidor_controle_acesso
     * @param string $servidor_controle_acesso Servidor do controle de acesso
     * @return $this
     */
    public function setServidorControleAcesso($servidor_controle_acesso)
    {
        
        $this->servidor_controle_acesso = $servidor_controle_acesso;
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