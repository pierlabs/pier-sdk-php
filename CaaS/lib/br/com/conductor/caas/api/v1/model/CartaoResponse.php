<?php
/**
 * CartaoResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.caas.api.v1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
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

namespace br.com.conductor.caas.api.v1.model;

use \ArrayAccess;
/**
 * CartaoResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     br.com.conductor.caas.api.v1.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartaoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'data_validade' => 'string',
        'descricao_estagio' => 'string',
        'descricao_status' => 'string',
        'estagio' => 'int',
        'flag_cancelamento' => 'bool',
        'id_cartao' => 'int',
        'numero_cartao' => 'string',
        'portador' => 'string',
        'portador_id' => 'int',
        'status' => 'int',
        'status_data' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'data_validade' => 'dataValidade',
        'descricao_estagio' => 'descricaoEstagio',
        'descricao_status' => 'descricaoStatus',
        'estagio' => 'estagio',
        'flag_cancelamento' => 'flagCancelamento',
        'id_cartao' => 'idCartao',
        'numero_cartao' => 'numeroCartao',
        'portador' => 'portador',
        'portador_id' => 'portadorId',
        'status' => 'status',
        'status_data' => 'statusData'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'data_validade' => 'setDataValidade',
        'descricao_estagio' => 'setDescricaoEstagio',
        'descricao_status' => 'setDescricaoStatus',
        'estagio' => 'setEstagio',
        'flag_cancelamento' => 'setFlagCancelamento',
        'id_cartao' => 'setIdCartao',
        'numero_cartao' => 'setNumeroCartao',
        'portador' => 'setPortador',
        'portador_id' => 'setPortadorId',
        'status' => 'setStatus',
        'status_data' => 'setStatusData'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'data_validade' => 'getDataValidade',
        'descricao_estagio' => 'getDescricaoEstagio',
        'descricao_status' => 'getDescricaoStatus',
        'estagio' => 'getEstagio',
        'flag_cancelamento' => 'getFlagCancelamento',
        'id_cartao' => 'getIdCartao',
        'numero_cartao' => 'getNumeroCartao',
        'portador' => 'getPortador',
        'portador_id' => 'getPortadorId',
        'status' => 'getStatus',
        'status_data' => 'getStatusData'
    );
  
    
    /**
      * $data_validade 
      * @var string
      */
    protected $data_validade;
    
    /**
      * $descricao_estagio 
      * @var string
      */
    protected $descricao_estagio;
    
    /**
      * $descricao_status 
      * @var string
      */
    protected $descricao_status;
    
    /**
      * $estagio 
      * @var int
      */
    protected $estagio;
    
    /**
      * $flag_cancelamento 
      * @var bool
      */
    protected $flag_cancelamento;
    
    /**
      * $id_cartao 
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $numero_cartao 
      * @var string
      */
    protected $numero_cartao;
    
    /**
      * $portador 
      * @var string
      */
    protected $portador;
    
    /**
      * $portador_id 
      * @var int
      */
    protected $portador_id;
    
    /**
      * $status 
      * @var int
      */
    protected $status;
    
    /**
      * $status_data 
      * @var \DateTime
      */
    protected $status_data;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->data_validade = $data["data_validade"];
            $this->descricao_estagio = $data["descricao_estagio"];
            $this->descricao_status = $data["descricao_status"];
            $this->estagio = $data["estagio"];
            $this->flag_cancelamento = $data["flag_cancelamento"];
            $this->id_cartao = $data["id_cartao"];
            $this->numero_cartao = $data["numero_cartao"];
            $this->portador = $data["portador"];
            $this->portador_id = $data["portador_id"];
            $this->status = $data["status"];
            $this->status_data = $data["status_data"];
        }
    }
    
    /**
     * Gets data_validade
     * @return string
     */
    public function getDataValidade()
    {
        return $this->data_validade;
    }
  
    /**
     * Sets data_validade
     * @param string $data_validade 
     * @return $this
     */
    public function setDataValidade($data_validade)
    {
        
        $this->data_validade = $data_validade;
        return $this;
    }
    
    /**
     * Gets descricao_estagio
     * @return string
     */
    public function getDescricaoEstagio()
    {
        return $this->descricao_estagio;
    }
  
    /**
     * Sets descricao_estagio
     * @param string $descricao_estagio 
     * @return $this
     */
    public function setDescricaoEstagio($descricao_estagio)
    {
        
        $this->descricao_estagio = $descricao_estagio;
        return $this;
    }
    
    /**
     * Gets descricao_status
     * @return string
     */
    public function getDescricaoStatus()
    {
        return $this->descricao_status;
    }
  
    /**
     * Sets descricao_status
     * @param string $descricao_status 
     * @return $this
     */
    public function setDescricaoStatus($descricao_status)
    {
        
        $this->descricao_status = $descricao_status;
        return $this;
    }
    
    /**
     * Gets estagio
     * @return int
     */
    public function getEstagio()
    {
        return $this->estagio;
    }
  
    /**
     * Sets estagio
     * @param int $estagio 
     * @return $this
     */
    public function setEstagio($estagio)
    {
        
        $this->estagio = $estagio;
        return $this;
    }
    
    /**
     * Gets flag_cancelamento
     * @return bool
     */
    public function getFlagCancelamento()
    {
        return $this->flag_cancelamento;
    }
  
    /**
     * Sets flag_cancelamento
     * @param bool $flag_cancelamento 
     * @return $this
     */
    public function setFlagCancelamento($flag_cancelamento)
    {
        
        $this->flag_cancelamento = $flag_cancelamento;
        return $this;
    }
    
    /**
     * Gets id_cartao
     * @return int
     */
    public function getIdCartao()
    {
        return $this->id_cartao;
    }
  
    /**
     * Sets id_cartao
     * @param int $id_cartao 
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
        return $this;
    }
    
    /**
     * Gets numero_cartao
     * @return string
     */
    public function getNumeroCartao()
    {
        return $this->numero_cartao;
    }
  
    /**
     * Sets numero_cartao
     * @param string $numero_cartao 
     * @return $this
     */
    public function setNumeroCartao($numero_cartao)
    {
        
        $this->numero_cartao = $numero_cartao;
        return $this;
    }
    
    /**
     * Gets portador
     * @return string
     */
    public function getPortador()
    {
        return $this->portador;
    }
  
    /**
     * Sets portador
     * @param string $portador 
     * @return $this
     */
    public function setPortador($portador)
    {
        
        $this->portador = $portador;
        return $this;
    }
    
    /**
     * Gets portador_id
     * @return int
     */
    public function getPortadorId()
    {
        return $this->portador_id;
    }
  
    /**
     * Sets portador_id
     * @param int $portador_id 
     * @return $this
     */
    public function setPortadorId($portador_id)
    {
        
        $this->portador_id = $portador_id;
        return $this;
    }
    
    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param int $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets status_data
     * @return \DateTime
     */
    public function getStatusData()
    {
        return $this->status_data;
    }
  
    /**
     * Sets status_data
     * @param \DateTime $status_data 
     * @return $this
     */
    public function setStatusData($status_data)
    {
        
        $this->status_data = $status_data;
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
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
