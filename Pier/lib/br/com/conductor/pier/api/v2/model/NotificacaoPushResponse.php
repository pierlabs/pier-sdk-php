<?php
/**
 * NotificacaoPushResponse
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
 * NotificacaoPushResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificacaoPushResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'data_envio' => '\DateTime',
        'id_emissor' => 'int',
        'tipo_evento' => 'string',
        'status' => 'string',
        'id_pessoa' => 'int',
        'id_conta' => 'int',
        'token_dispositivo' => 'string',
        'titulo' => 'string',
        'conteudo' => 'string',
        'plataforma' => 'string',
        'protocolo' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'data_envio' => 'dataEnvio',
        'id_emissor' => 'idEmissor',
        'tipo_evento' => 'tipoEvento',
        'status' => 'status',
        'id_pessoa' => 'idPessoa',
        'id_conta' => 'idConta',
        'token_dispositivo' => 'tokenDispositivo',
        'titulo' => 'titulo',
        'conteudo' => 'conteudo',
        'plataforma' => 'plataforma',
        'protocolo' => 'protocolo'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'data_envio' => 'setDataEnvio',
        'id_emissor' => 'setIdEmissor',
        'tipo_evento' => 'setTipoEvento',
        'status' => 'setStatus',
        'id_pessoa' => 'setIdPessoa',
        'id_conta' => 'setIdConta',
        'token_dispositivo' => 'setTokenDispositivo',
        'titulo' => 'setTitulo',
        'conteudo' => 'setConteudo',
        'plataforma' => 'setPlataforma',
        'protocolo' => 'setProtocolo'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'data_envio' => 'getDataEnvio',
        'id_emissor' => 'getIdEmissor',
        'tipo_evento' => 'getTipoEvento',
        'status' => 'getStatus',
        'id_pessoa' => 'getIdPessoa',
        'id_conta' => 'getIdConta',
        'token_dispositivo' => 'getTokenDispositivo',
        'titulo' => 'getTitulo',
        'conteudo' => 'getConteudo',
        'plataforma' => 'getPlataforma',
        'protocolo' => 'getProtocolo'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $data_envio Apresenta a data e em que o registro foi enviado para o dispositivo.
      * @var \DateTime
      */
    protected $data_envio;
    
    /**
      * $id_emissor C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do emissor (id).
      * @var int
      */
    protected $id_emissor;
    
    /**
      * $tipo_evento Nome do tipoEvento da notifica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $tipo_evento;
    
    /**
      * $status Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $status;
    
    /**
      * $id_pessoa C\u00C3\u00B3digo identificado da pessoa
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_conta C\u00C3\u00B3digo identificador da conta
      * @var int
      */
    protected $id_conta;
    
    /**
      * $token_dispositivo Token do dispositivo a qual foi destinado a notifica\u00C3\u00A7\u00C3\u00A3o (device_token)
      * @var string
      */
    protected $token_dispositivo;
    
    /**
      * $titulo T\u00C3\u00ADtulo da notifica\u00C3\u00A7\u00C3\u00A3o enviada.
      * @var string
      */
    protected $titulo;
    
    /**
      * $conteudo Conte\u00C3\u00BAdo da notifica\u00C3\u00A7\u00C3\u00A3o enviada.
      * @var string
      */
    protected $conteudo;
    
    /**
      * $plataforma Nome do Sistema Operacional a qual foi enviado o Push.
      * @var string
      */
    protected $plataforma;
    
    /**
      * $protocolo N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es
      * @var string
      */
    protected $protocolo;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->data_envio = $data["data_envio"];
            $this->id_emissor = $data["id_emissor"];
            $this->tipo_evento = $data["tipo_evento"];
            $this->status = $data["status"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_conta = $data["id_conta"];
            $this->token_dispositivo = $data["token_dispositivo"];
            $this->titulo = $data["titulo"];
            $this->conteudo = $data["conteudo"];
            $this->plataforma = $data["plataforma"];
            $this->protocolo = $data["protocolo"];
        }
    }
    
    /**
     * Gets data_envio
     * @return \DateTime
     */
    public function getDataEnvio()
    {
        return $this->data_envio;
    }
  
    /**
     * Sets data_envio
     * @param \DateTime $data_envio Apresenta a data e em que o registro foi enviado para o dispositivo.
     * @return $this
     */
    public function setDataEnvio($data_envio)
    {
        
        $this->data_envio = $data_envio;
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
     * @param int $id_emissor C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do emissor (id).
     * @return $this
     */
    public function setIdEmissor($id_emissor)
    {
        
        $this->id_emissor = $id_emissor;
        return $this;
    }
    
    /**
     * Gets tipo_evento
     * @return string
     */
    public function getTipoEvento()
    {
        return $this->tipo_evento;
    }
  
    /**
     * Sets tipo_evento
     * @param string $tipo_evento Nome do tipoEvento da notifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setTipoEvento($tipo_evento)
    {
        $allowed_values = array("RISCO_FRAUDE", "OUTROS");
        if (!in_array($tipo_evento, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'tipo_evento', must be one of 'RISCO_FRAUDE', 'OUTROS'");
        }
        $this->tipo_evento = $tipo_evento;
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
     * @param string $status Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("PENDENTE", "ENCAMINHADO", "ENVIADO", "RESPONDIDO", "ERRO", "ERRO_RESPOSTA", "SUCESSO_RESPOSTA");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'PENDENTE', 'ENCAMINHADO', 'ENVIADO', 'RESPONDIDO', 'ERRO', 'ERRO_RESPOSTA', 'SUCESSO_RESPOSTA'");
        }
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets id_pessoa
     * @return int
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }
  
    /**
     * Sets id_pessoa
     * @param int $id_pessoa C\u00C3\u00B3digo identificado da pessoa
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
        return $this;
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
     * @param int $id_conta C\u00C3\u00B3digo identificador da conta
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets token_dispositivo
     * @return string
     */
    public function getTokenDispositivo()
    {
        return $this->token_dispositivo;
    }
  
    /**
     * Sets token_dispositivo
     * @param string $token_dispositivo Token do dispositivo a qual foi destinado a notifica\u00C3\u00A7\u00C3\u00A3o (device_token)
     * @return $this
     */
    public function setTokenDispositivo($token_dispositivo)
    {
        
        $this->token_dispositivo = $token_dispositivo;
        return $this;
    }
    
    /**
     * Gets titulo
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }
  
    /**
     * Sets titulo
     * @param string $titulo T\u00C3\u00ADtulo da notifica\u00C3\u00A7\u00C3\u00A3o enviada.
     * @return $this
     */
    public function setTitulo($titulo)
    {
        
        $this->titulo = $titulo;
        return $this;
    }
    
    /**
     * Gets conteudo
     * @return string
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }
  
    /**
     * Sets conteudo
     * @param string $conteudo Conte\u00C3\u00BAdo da notifica\u00C3\u00A7\u00C3\u00A3o enviada.
     * @return $this
     */
    public function setConteudo($conteudo)
    {
        
        $this->conteudo = $conteudo;
        return $this;
    }
    
    /**
     * Gets plataforma
     * @return string
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }
  
    /**
     * Sets plataforma
     * @param string $plataforma Nome do Sistema Operacional a qual foi enviado o Push.
     * @return $this
     */
    public function setPlataforma($plataforma)
    {
        $allowed_values = array("APNS", "FCM", "GCM");
        if (!in_array($plataforma, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'plataforma', must be one of 'APNS', 'FCM', 'GCM'");
        }
        $this->plataforma = $plataforma;
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
     * @param string $protocolo N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es
     * @return $this
     */
    public function setProtocolo($protocolo)
    {
        
        $this->protocolo = $protocolo;
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
