<?php
/**
 * ConfiguracaoEmailResponse
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
 * ConfiguracaoEmailResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{configuracao_email_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfiguracaoEmailResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'host' => 'string',
        'port' => 'string',
        'port_tlsstarttls' => 'string',
        'port_ssl' => 'string',
        'protocolo' => 'string',
        'requer_autenticacao' => 'bool',
        'requer_ssl' => 'bool',
        'requer_tls' => 'bool',
        'usuario' => 'string',
        'senha' => 'string',
        'data_inclusao' => 'string',
        'data_alteracao' => 'string'
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
        'host' => 'host',
        'port' => 'port',
        'port_tlsstarttls' => 'portTLSSTARTTLS',
        'port_ssl' => 'portSSL',
        'protocolo' => 'protocolo',
        'requer_autenticacao' => 'requerAutenticacao',
        'requer_ssl' => 'requerSSL',
        'requer_tls' => 'requerTLS',
        'usuario' => 'usuario',
        'senha' => 'senha',
        'data_inclusao' => 'dataInclusao',
        'data_alteracao' => 'dataAlteracao'
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
        'host' => 'setHost',
        'port' => 'setPort',
        'port_tlsstarttls' => 'setPortTlsstarttls',
        'port_ssl' => 'setPortSsl',
        'protocolo' => 'setProtocolo',
        'requer_autenticacao' => 'setRequerAutenticacao',
        'requer_ssl' => 'setRequerSsl',
        'requer_tls' => 'setRequerTls',
        'usuario' => 'setUsuario',
        'senha' => 'setSenha',
        'data_inclusao' => 'setDataInclusao',
        'data_alteracao' => 'setDataAlteracao'
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
        'host' => 'getHost',
        'port' => 'getPort',
        'port_tlsstarttls' => 'getPortTlsstarttls',
        'port_ssl' => 'getPortSsl',
        'protocolo' => 'getProtocolo',
        'requer_autenticacao' => 'getRequerAutenticacao',
        'requer_ssl' => 'getRequerSsl',
        'requer_tls' => 'getRequerTls',
        'usuario' => 'getUsuario',
        'senha' => 'getSenha',
        'data_inclusao' => 'getDataInclusao',
        'data_alteracao' => 'getDataAlteracao'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id {{{configuracao_email_response_id_value}}}
      * @var int
      */
    protected $id;
    
    /**
      * $host {{{configuracao_email_response_host_value}}}
      * @var string
      */
    protected $host;
    
    /**
      * $port {{{configuracao_email_response_port_value}}}
      * @var string
      */
    protected $port;
    
    /**
      * $port_tlsstarttls {{{configuracao_email_response_port_t_l_s_s_t_a_r_t_t_l_s_value}}}
      * @var string
      */
    protected $port_tlsstarttls;
    
    /**
      * $port_ssl {{{configuracao_email_response_port_s_s_l_value}}}
      * @var string
      */
    protected $port_ssl;
    
    /**
      * $protocolo {{{configuracao_email_response_protocolo_value}}}
      * @var string
      */
    protected $protocolo;
    
    /**
      * $requer_autenticacao {{{configuracao_email_response_requer_autenticacao_value}}}
      * @var bool
      */
    protected $requer_autenticacao;
    
    /**
      * $requer_ssl {{{configuracao_email_response_requer_s_s_l_value}}}
      * @var bool
      */
    protected $requer_ssl;
    
    /**
      * $requer_tls {{{configuracao_email_response_requer_t_l_s_value}}}
      * @var bool
      */
    protected $requer_tls;
    
    /**
      * $usuario {{{configuracao_email_response_usuario_value}}}
      * @var string
      */
    protected $usuario;
    
    /**
      * $senha {{{configuracao_email_response_senha_value}}}
      * @var string
      */
    protected $senha;
    
    /**
      * $data_inclusao {{{configuracao_email_response_data_inclusao_value}}}
      * @var string
      */
    protected $data_inclusao;
    
    /**
      * $data_alteracao {{{configuracao_email_response_data_alteracao_value}}}
      * @var string
      */
    protected $data_alteracao;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->host = $data["host"];
            $this->port = $data["port"];
            $this->port_tlsstarttls = $data["port_tlsstarttls"];
            $this->port_ssl = $data["port_ssl"];
            $this->protocolo = $data["protocolo"];
            $this->requer_autenticacao = $data["requer_autenticacao"];
            $this->requer_ssl = $data["requer_ssl"];
            $this->requer_tls = $data["requer_tls"];
            $this->usuario = $data["usuario"];
            $this->senha = $data["senha"];
            $this->data_inclusao = $data["data_inclusao"];
            $this->data_alteracao = $data["data_alteracao"];
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
     * @param int $id {{{configuracao_email_response_id_value}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets host
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
  
    /**
     * Sets host
     * @param string $host {{{configuracao_email_response_host_value}}}
     * @return $this
     */
    public function setHost($host)
    {
        
        $this->host = $host;
        return $this;
    }
    
    /**
     * Gets port
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }
  
    /**
     * Sets port
     * @param string $port {{{configuracao_email_response_port_value}}}
     * @return $this
     */
    public function setPort($port)
    {
        
        $this->port = $port;
        return $this;
    }
    
    /**
     * Gets port_tlsstarttls
     * @return string
     */
    public function getPortTlsstarttls()
    {
        return $this->port_tlsstarttls;
    }
  
    /**
     * Sets port_tlsstarttls
     * @param string $port_tlsstarttls {{{configuracao_email_response_port_t_l_s_s_t_a_r_t_t_l_s_value}}}
     * @return $this
     */
    public function setPortTlsstarttls($port_tlsstarttls)
    {
        
        $this->port_tlsstarttls = $port_tlsstarttls;
        return $this;
    }
    
    /**
     * Gets port_ssl
     * @return string
     */
    public function getPortSsl()
    {
        return $this->port_ssl;
    }
  
    /**
     * Sets port_ssl
     * @param string $port_ssl {{{configuracao_email_response_port_s_s_l_value}}}
     * @return $this
     */
    public function setPortSsl($port_ssl)
    {
        
        $this->port_ssl = $port_ssl;
        return $this;
    }
    
    /**
     * Gets protocolo
     * @return string
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
  
    /**
     * Sets protocolo
     * @param string $protocolo {{{configuracao_email_response_protocolo_value}}}
     * @return $this
     */
    public function setProtocolo($protocolo)
    {
        
        $this->protocolo = $protocolo;
        return $this;
    }
    
    /**
     * Gets requer_autenticacao
     * @return bool
     */
    public function getRequerAutenticacao()
    {
        return $this->requer_autenticacao;
    }
  
    /**
     * Sets requer_autenticacao
     * @param bool $requer_autenticacao {{{configuracao_email_response_requer_autenticacao_value}}}
     * @return $this
     */
    public function setRequerAutenticacao($requer_autenticacao)
    {
        
        $this->requer_autenticacao = $requer_autenticacao;
        return $this;
    }
    
    /**
     * Gets requer_ssl
     * @return bool
     */
    public function getRequerSsl()
    {
        return $this->requer_ssl;
    }
  
    /**
     * Sets requer_ssl
     * @param bool $requer_ssl {{{configuracao_email_response_requer_s_s_l_value}}}
     * @return $this
     */
    public function setRequerSsl($requer_ssl)
    {
        
        $this->requer_ssl = $requer_ssl;
        return $this;
    }
    
    /**
     * Gets requer_tls
     * @return bool
     */
    public function getRequerTls()
    {
        return $this->requer_tls;
    }
  
    /**
     * Sets requer_tls
     * @param bool $requer_tls {{{configuracao_email_response_requer_t_l_s_value}}}
     * @return $this
     */
    public function setRequerTls($requer_tls)
    {
        
        $this->requer_tls = $requer_tls;
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
     * @param string $usuario {{{configuracao_email_response_usuario_value}}}
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
     * @param string $senha {{{configuracao_email_response_senha_value}}}
     * @return $this
     */
    public function setSenha($senha)
    {
        
        $this->senha = $senha;
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
     * @param string $data_inclusao {{{configuracao_email_response_data_inclusao_value}}}
     * @return $this
     */
    public function setDataInclusao($data_inclusao)
    {
        
        $this->data_inclusao = $data_inclusao;
        return $this;
    }
    
    /**
     * Gets data_alteracao
     * @return string
     */
    public function getDataAlteracao()
    {
        return $this->data_alteracao;
    }
  
    /**
     * Sets data_alteracao
     * @param string $data_alteracao {{{configuracao_email_response_data_alteracao_value}}}
     * @return $this
     */
    public function setDataAlteracao($data_alteracao)
    {
        
        $this->data_alteracao = $data_alteracao;
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
