<?php
/**
 * ContestarCompraRequest
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
 * ContestarCompraRequest Class Doc Comment
 *
 * @category    Class
 * @description {{{contestar_compra_request_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContestarCompraRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'codigo_chargeback_id' => 'int',
        'compras' => 'int[]',
        'enviar_documentos' => 'bool',
        'mensagem' => 'string',
        'mensagem_cs_light' => 'string',
        'mensagem_chargeback' => 'string',
        'status_id' => 'int',
        'tipo_contestacao_id' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'codigo_chargeback_id' => 'codigoChargebackId',
        'compras' => 'compras',
        'enviar_documentos' => 'enviarDocumentos',
        'mensagem' => 'mensagem',
        'mensagem_cs_light' => 'mensagemCSLight',
        'mensagem_chargeback' => 'mensagemChargeback',
        'status_id' => 'statusId',
        'tipo_contestacao_id' => 'tipoContestacaoId'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'codigo_chargeback_id' => 'setCodigoChargebackId',
        'compras' => 'setCompras',
        'enviar_documentos' => 'setEnviarDocumentos',
        'mensagem' => 'setMensagem',
        'mensagem_cs_light' => 'setMensagemCsLight',
        'mensagem_chargeback' => 'setMensagemChargeback',
        'status_id' => 'setStatusId',
        'tipo_contestacao_id' => 'setTipoContestacaoId'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'codigo_chargeback_id' => 'getCodigoChargebackId',
        'compras' => 'getCompras',
        'enviar_documentos' => 'getEnviarDocumentos',
        'mensagem' => 'getMensagem',
        'mensagem_cs_light' => 'getMensagemCsLight',
        'mensagem_chargeback' => 'getMensagemChargeback',
        'status_id' => 'getStatusId',
        'tipo_contestacao_id' => 'getTipoContestacaoId'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $codigo_chargeback_id 
      * @var int
      */
    protected $codigo_chargeback_id;
    
    /**
      * $compras 
      * @var int[]
      */
    protected $compras;
    
    /**
      * $enviar_documentos 
      * @var bool
      */
    protected $enviar_documentos;
    
    /**
      * $mensagem 
      * @var string
      */
    protected $mensagem;
    
    /**
      * $mensagem_cs_light 
      * @var string
      */
    protected $mensagem_cs_light;
    
    /**
      * $mensagem_chargeback 
      * @var string
      */
    protected $mensagem_chargeback;
    
    /**
      * $status_id 
      * @var int
      */
    protected $status_id;
    
    /**
      * $tipo_contestacao_id 
      * @var int
      */
    protected $tipo_contestacao_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->codigo_chargeback_id = $data["codigo_chargeback_id"];
            $this->compras = $data["compras"];
            $this->enviar_documentos = $data["enviar_documentos"];
            $this->mensagem = $data["mensagem"];
            $this->mensagem_cs_light = $data["mensagem_cs_light"];
            $this->mensagem_chargeback = $data["mensagem_chargeback"];
            $this->status_id = $data["status_id"];
            $this->tipo_contestacao_id = $data["tipo_contestacao_id"];
        }
    }
    
    /**
     * Gets codigo_chargeback_id
     * @return int
     */
    public function getCodigoChargebackId()
    {
        return $this->codigo_chargeback_id;
    }
  
    /**
     * Sets codigo_chargeback_id
     * @param int $codigo_chargeback_id 
     * @return $this
     */
    public function setCodigoChargebackId($codigo_chargeback_id)
    {
        
        $this->codigo_chargeback_id = $codigo_chargeback_id;
        return $this;
    }
    
    /**
     * Gets compras
     * @return int[]
     */
    public function getCompras()
    {
        return $this->compras;
    }
  
    /**
     * Sets compras
     * @param int[] $compras 
     * @return $this
     */
    public function setCompras($compras)
    {
        
        $this->compras = $compras;
        return $this;
    }
    
    /**
     * Gets enviar_documentos
     * @return bool
     */
    public function getEnviarDocumentos()
    {
        return $this->enviar_documentos;
    }
  
    /**
     * Sets enviar_documentos
     * @param bool $enviar_documentos 
     * @return $this
     */
    public function setEnviarDocumentos($enviar_documentos)
    {
        
        $this->enviar_documentos = $enviar_documentos;
        return $this;
    }
    
    /**
     * Gets mensagem
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
  
    /**
     * Sets mensagem
     * @param string $mensagem 
     * @return $this
     */
    public function setMensagem($mensagem)
    {
        
        $this->mensagem = $mensagem;
        return $this;
    }
    
    /**
     * Gets mensagem_cs_light
     * @return string
     */
    public function getMensagemCsLight()
    {
        return $this->mensagem_cs_light;
    }
  
    /**
     * Sets mensagem_cs_light
     * @param string $mensagem_cs_light 
     * @return $this
     */
    public function setMensagemCsLight($mensagem_cs_light)
    {
        
        $this->mensagem_cs_light = $mensagem_cs_light;
        return $this;
    }
    
    /**
     * Gets mensagem_chargeback
     * @return string
     */
    public function getMensagemChargeback()
    {
        return $this->mensagem_chargeback;
    }
  
    /**
     * Sets mensagem_chargeback
     * @param string $mensagem_chargeback 
     * @return $this
     */
    public function setMensagemChargeback($mensagem_chargeback)
    {
        
        $this->mensagem_chargeback = $mensagem_chargeback;
        return $this;
    }
    
    /**
     * Gets status_id
     * @return int
     */
    public function getStatusId()
    {
        return $this->status_id;
    }
  
    /**
     * Sets status_id
     * @param int $status_id 
     * @return $this
     */
    public function setStatusId($status_id)
    {
        
        $this->status_id = $status_id;
        return $this;
    }
    
    /**
     * Gets tipo_contestacao_id
     * @return int
     */
    public function getTipoContestacaoId()
    {
        return $this->tipo_contestacao_id;
    }
  
    /**
     * Sets tipo_contestacao_id
     * @param int $tipo_contestacao_id 
     * @return $this
     */
    public function setTipoContestacaoId($tipo_contestacao_id)
    {
        
        $this->tipo_contestacao_id = $tipo_contestacao_id;
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