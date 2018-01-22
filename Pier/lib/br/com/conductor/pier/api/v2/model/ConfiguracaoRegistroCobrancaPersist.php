<?php
/**
 * ConfiguracaoRegistroCobrancaPersist
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
 * ConfiguracaoRegistroCobrancaPersist Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o da requisi\u00C3\u00A7\u00C3\u00A3o do recurso Configura\u00C3\u00A7\u00C3\u00A3o Registro de Cobran\u00C3\u00A7a Online
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfiguracaoRegistroCobrancaPersist implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'codigo_banco' => 'int',
        'uri' => 'string',
        'key_store_name' => 'string',
        'key_store_password' => 'string',
        'keystore_alias' => 'string',
        'key_store_private_key_password' => 'string',
        'type_keystore' => 'string',
        'trust_store_name' => 'string',
        'trust_store_password' => 'string',
        'truststore_alias' => 'string',
        'type_truststore' => 'string',
        'uri_adicional' => 'string',
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
        'codigo_banco' => 'codigoBanco',
        'uri' => 'uri',
        'key_store_name' => 'keyStoreName',
        'key_store_password' => 'keyStorePassword',
        'keystore_alias' => 'keystoreAlias',
        'key_store_private_key_password' => 'keyStorePrivateKeyPassword',
        'type_keystore' => 'typeKeystore',
        'trust_store_name' => 'trustStoreName',
        'trust_store_password' => 'trustStorePassword',
        'truststore_alias' => 'truststoreAlias',
        'type_truststore' => 'typeTruststore',
        'uri_adicional' => 'uriAdicional',
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
        'codigo_banco' => 'setCodigoBanco',
        'uri' => 'setUri',
        'key_store_name' => 'setKeyStoreName',
        'key_store_password' => 'setKeyStorePassword',
        'keystore_alias' => 'setKeystoreAlias',
        'key_store_private_key_password' => 'setKeyStorePrivateKeyPassword',
        'type_keystore' => 'setTypeKeystore',
        'trust_store_name' => 'setTrustStoreName',
        'trust_store_password' => 'setTrustStorePassword',
        'truststore_alias' => 'setTruststoreAlias',
        'type_truststore' => 'setTypeTruststore',
        'uri_adicional' => 'setUriAdicional',
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
        'codigo_banco' => 'getCodigoBanco',
        'uri' => 'getUri',
        'key_store_name' => 'getKeyStoreName',
        'key_store_password' => 'getKeyStorePassword',
        'keystore_alias' => 'getKeystoreAlias',
        'key_store_private_key_password' => 'getKeyStorePrivateKeyPassword',
        'type_keystore' => 'getTypeKeystore',
        'trust_store_name' => 'getTrustStoreName',
        'trust_store_password' => 'getTrustStorePassword',
        'truststore_alias' => 'getTruststoreAlias',
        'type_truststore' => 'getTypeTruststore',
        'uri_adicional' => 'getUriAdicional',
        'status' => 'getStatus'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $codigo_banco C\u00C3\u00B3digo do Banco.
      * @var int
      */
    protected $codigo_banco;
    
    /**
      * $uri URL de acesso ao banco.
      * @var string
      */
    protected $uri;
    
    /**
      * $key_store_name Caminho do certificado digital do emissor.
      * @var string
      */
    protected $key_store_name;
    
    /**
      * $key_store_password Senha do certificado digital do emissor.
      * @var string
      */
    protected $key_store_password;
    
    /**
      * $keystore_alias Alias do certificado digital do emissor.
      * @var string
      */
    protected $keystore_alias;
    
    /**
      * $key_store_private_key_password Senha da chave privada do certificado digital do emissor.
      * @var string
      */
    protected $key_store_private_key_password;
    
    /**
      * $type_keystore Tipo do certificado digital do emissor.
      * @var string
      */
    protected $type_keystore;
    
    /**
      * $trust_store_name Caminho do certificado digital do banco.
      * @var string
      */
    protected $trust_store_name;
    
    /**
      * $trust_store_password Senha do certificado digital do banco.
      * @var string
      */
    protected $trust_store_password;
    
    /**
      * $truststore_alias Alias do certificado digital do banco.
      * @var string
      */
    protected $truststore_alias;
    
    /**
      * $type_truststore Tipo do certificado digital do banco.
      * @var string
      */
    protected $type_truststore;
    
    /**
      * $uri_adicional URL adicional de acesso ao banco.
      * @var string
      */
    protected $uri_adicional;
    
    /**
      * $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da configura\u00C3\u00A7\u00C3\u00A3o.
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
            $this->codigo_banco = $data["codigo_banco"];
            $this->uri = $data["uri"];
            $this->key_store_name = $data["key_store_name"];
            $this->key_store_password = $data["key_store_password"];
            $this->keystore_alias = $data["keystore_alias"];
            $this->key_store_private_key_password = $data["key_store_private_key_password"];
            $this->type_keystore = $data["type_keystore"];
            $this->trust_store_name = $data["trust_store_name"];
            $this->trust_store_password = $data["trust_store_password"];
            $this->truststore_alias = $data["truststore_alias"];
            $this->type_truststore = $data["type_truststore"];
            $this->uri_adicional = $data["uri_adicional"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets codigo_banco
     * @return int
     */
    public function getCodigoBanco()
    {
        return $this->codigo_banco;
    }
  
    /**
     * Sets codigo_banco
     * @param int $codigo_banco C\u00C3\u00B3digo do Banco.
     * @return $this
     */
    public function setCodigoBanco($codigo_banco)
    {
        
        $this->codigo_banco = $codigo_banco;
        return $this;
    }
    
    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
  
    /**
     * Sets uri
     * @param string $uri URL de acesso ao banco.
     * @return $this
     */
    public function setUri($uri)
    {
        
        $this->uri = $uri;
        return $this;
    }
    
    /**
     * Gets key_store_name
     * @return string
     */
    public function getKeyStoreName()
    {
        return $this->key_store_name;
    }
  
    /**
     * Sets key_store_name
     * @param string $key_store_name Caminho do certificado digital do emissor.
     * @return $this
     */
    public function setKeyStoreName($key_store_name)
    {
        
        $this->key_store_name = $key_store_name;
        return $this;
    }
    
    /**
     * Gets key_store_password
     * @return string
     */
    public function getKeyStorePassword()
    {
        return $this->key_store_password;
    }
  
    /**
     * Sets key_store_password
     * @param string $key_store_password Senha do certificado digital do emissor.
     * @return $this
     */
    public function setKeyStorePassword($key_store_password)
    {
        
        $this->key_store_password = $key_store_password;
        return $this;
    }
    
    /**
     * Gets keystore_alias
     * @return string
     */
    public function getKeystoreAlias()
    {
        return $this->keystore_alias;
    }
  
    /**
     * Sets keystore_alias
     * @param string $keystore_alias Alias do certificado digital do emissor.
     * @return $this
     */
    public function setKeystoreAlias($keystore_alias)
    {
        
        $this->keystore_alias = $keystore_alias;
        return $this;
    }
    
    /**
     * Gets key_store_private_key_password
     * @return string
     */
    public function getKeyStorePrivateKeyPassword()
    {
        return $this->key_store_private_key_password;
    }
  
    /**
     * Sets key_store_private_key_password
     * @param string $key_store_private_key_password Senha da chave privada do certificado digital do emissor.
     * @return $this
     */
    public function setKeyStorePrivateKeyPassword($key_store_private_key_password)
    {
        
        $this->key_store_private_key_password = $key_store_private_key_password;
        return $this;
    }
    
    /**
     * Gets type_keystore
     * @return string
     */
    public function getTypeKeystore()
    {
        return $this->type_keystore;
    }
  
    /**
     * Sets type_keystore
     * @param string $type_keystore Tipo do certificado digital do emissor.
     * @return $this
     */
    public function setTypeKeystore($type_keystore)
    {
        
        $this->type_keystore = $type_keystore;
        return $this;
    }
    
    /**
     * Gets trust_store_name
     * @return string
     */
    public function getTrustStoreName()
    {
        return $this->trust_store_name;
    }
  
    /**
     * Sets trust_store_name
     * @param string $trust_store_name Caminho do certificado digital do banco.
     * @return $this
     */
    public function setTrustStoreName($trust_store_name)
    {
        
        $this->trust_store_name = $trust_store_name;
        return $this;
    }
    
    /**
     * Gets trust_store_password
     * @return string
     */
    public function getTrustStorePassword()
    {
        return $this->trust_store_password;
    }
  
    /**
     * Sets trust_store_password
     * @param string $trust_store_password Senha do certificado digital do banco.
     * @return $this
     */
    public function setTrustStorePassword($trust_store_password)
    {
        
        $this->trust_store_password = $trust_store_password;
        return $this;
    }
    
    /**
     * Gets truststore_alias
     * @return string
     */
    public function getTruststoreAlias()
    {
        return $this->truststore_alias;
    }
  
    /**
     * Sets truststore_alias
     * @param string $truststore_alias Alias do certificado digital do banco.
     * @return $this
     */
    public function setTruststoreAlias($truststore_alias)
    {
        
        $this->truststore_alias = $truststore_alias;
        return $this;
    }
    
    /**
     * Gets type_truststore
     * @return string
     */
    public function getTypeTruststore()
    {
        return $this->type_truststore;
    }
  
    /**
     * Sets type_truststore
     * @param string $type_truststore Tipo do certificado digital do banco.
     * @return $this
     */
    public function setTypeTruststore($type_truststore)
    {
        
        $this->type_truststore = $type_truststore;
        return $this;
    }
    
    /**
     * Gets uri_adicional
     * @return string
     */
    public function getUriAdicional()
    {
        return $this->uri_adicional;
    }
  
    /**
     * Sets uri_adicional
     * @param string $uri_adicional URL adicional de acesso ao banco.
     * @return $this
     */
    public function setUriAdicional($uri_adicional)
    {
        
        $this->uri_adicional = $uri_adicional;
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
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da configura\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("INATIVO", "ATIVO");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'INATIVO', 'ATIVO'");
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
