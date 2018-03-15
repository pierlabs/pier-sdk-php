<?php
/**
 * OperacaoResponse
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
 * OperacaoResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00E7\u00E3o da resposta do recurso Operacao
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OperacaoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_operacao' => 'int',
        'codigo_processamento' => 'string',
        'codigo_processamento_cancelamento' => 'string',
        'nome_operacao' => 'string',
        'flag_cobra_juros' => 'bool',
        'flag_cobra_tarifa' => 'bool',
        'carencia' => 'int',
        'flag_permitir_parcelamento' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_operacao' => 'idOperacao',
        'codigo_processamento' => 'codigoProcessamento',
        'codigo_processamento_cancelamento' => 'codigoProcessamentoCancelamento',
        'nome_operacao' => 'nomeOperacao',
        'flag_cobra_juros' => 'flagCobraJuros',
        'flag_cobra_tarifa' => 'flagCobraTarifa',
        'carencia' => 'carencia',
        'flag_permitir_parcelamento' => 'flagPermitirParcelamento'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_operacao' => 'setIdOperacao',
        'codigo_processamento' => 'setCodigoProcessamento',
        'codigo_processamento_cancelamento' => 'setCodigoProcessamentoCancelamento',
        'nome_operacao' => 'setNomeOperacao',
        'flag_cobra_juros' => 'setFlagCobraJuros',
        'flag_cobra_tarifa' => 'setFlagCobraTarifa',
        'carencia' => 'setCarencia',
        'flag_permitir_parcelamento' => 'setFlagPermitirParcelamento'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_operacao' => 'getIdOperacao',
        'codigo_processamento' => 'getCodigoProcessamento',
        'codigo_processamento_cancelamento' => 'getCodigoProcessamentoCancelamento',
        'nome_operacao' => 'getNomeOperacao',
        'flag_cobra_juros' => 'getFlagCobraJuros',
        'flag_cobra_tarifa' => 'getFlagCobraTarifa',
        'carencia' => 'getCarencia',
        'flag_permitir_parcelamento' => 'getFlagPermitirParcelamento'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_operacao C\u00F3digo que identifica a opera\u00E7\u00E3o
      * @var int
      */
    protected $id_operacao;
    
    /**
      * $codigo_processamento C\u00F3digo de processamento usado em transa\u00E7\u00F5es com o autorizador
      * @var string
      */
    protected $codigo_processamento;
    
    /**
      * $codigo_processamento_cancelamento C\u00F3digo de processamento usado para cancelar transa\u00E7\u00F5es no autorizador
      * @var string
      */
    protected $codigo_processamento_cancelamento;
    
    /**
      * $nome_operacao Nome da opera\u00E7\u00E3o
      * @var string
      */
    protected $nome_operacao;
    
    /**
      * $flag_cobra_juros Flag indicativa para crobran\u00E7a de juros
      * @var bool
      */
    protected $flag_cobra_juros;
    
    /**
      * $flag_cobra_tarifa Flag indicativa para crobran\u00E7a de tarifas
      * @var bool
      */
    protected $flag_cobra_tarifa;
    
    /**
      * $carencia Quantidade de meses para car\u00EAncia
      * @var int
      */
    protected $carencia;
    
    /**
      * $flag_permitir_parcelamento Permitir transa\u00E7\u00F5es parceladas
      * @var bool
      */
    protected $flag_permitir_parcelamento;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_operacao = $data["id_operacao"];
            $this->codigo_processamento = $data["codigo_processamento"];
            $this->codigo_processamento_cancelamento = $data["codigo_processamento_cancelamento"];
            $this->nome_operacao = $data["nome_operacao"];
            $this->flag_cobra_juros = $data["flag_cobra_juros"];
            $this->flag_cobra_tarifa = $data["flag_cobra_tarifa"];
            $this->carencia = $data["carencia"];
            $this->flag_permitir_parcelamento = $data["flag_permitir_parcelamento"];
        }
    }
    
    /**
     * Gets id_operacao
     * @return int
     */
    public function getIdOperacao()
    {
        return $this->id_operacao;
    }
  
    /**
     * Sets id_operacao
     * @param int $id_operacao C\u00F3digo que identifica a opera\u00E7\u00E3o
     * @return $this
     */
    public function setIdOperacao($id_operacao)
    {
        
        $this->id_operacao = $id_operacao;
        return $this;
    }
    
    /**
     * Gets codigo_processamento
     * @return string
     */
    public function getCodigoProcessamento()
    {
        return $this->codigo_processamento;
    }
  
    /**
     * Sets codigo_processamento
     * @param string $codigo_processamento C\u00F3digo de processamento usado em transa\u00E7\u00F5es com o autorizador
     * @return $this
     */
    public function setCodigoProcessamento($codigo_processamento)
    {
        
        $this->codigo_processamento = $codigo_processamento;
        return $this;
    }
    
    /**
     * Gets codigo_processamento_cancelamento
     * @return string
     */
    public function getCodigoProcessamentoCancelamento()
    {
        return $this->codigo_processamento_cancelamento;
    }
  
    /**
     * Sets codigo_processamento_cancelamento
     * @param string $codigo_processamento_cancelamento C\u00F3digo de processamento usado para cancelar transa\u00E7\u00F5es no autorizador
     * @return $this
     */
    public function setCodigoProcessamentoCancelamento($codigo_processamento_cancelamento)
    {
        
        $this->codigo_processamento_cancelamento = $codigo_processamento_cancelamento;
        return $this;
    }
    
    /**
     * Gets nome_operacao
     * @return string
     */
    public function getNomeOperacao()
    {
        return $this->nome_operacao;
    }
  
    /**
     * Sets nome_operacao
     * @param string $nome_operacao Nome da opera\u00E7\u00E3o
     * @return $this
     */
    public function setNomeOperacao($nome_operacao)
    {
        
        $this->nome_operacao = $nome_operacao;
        return $this;
    }
    
    /**
     * Gets flag_cobra_juros
     * @return bool
     */
    public function getFlagCobraJuros()
    {
        return $this->flag_cobra_juros;
    }
  
    /**
     * Sets flag_cobra_juros
     * @param bool $flag_cobra_juros Flag indicativa para crobran\u00E7a de juros
     * @return $this
     */
    public function setFlagCobraJuros($flag_cobra_juros)
    {
        
        $this->flag_cobra_juros = $flag_cobra_juros;
        return $this;
    }
    
    /**
     * Gets flag_cobra_tarifa
     * @return bool
     */
    public function getFlagCobraTarifa()
    {
        return $this->flag_cobra_tarifa;
    }
  
    /**
     * Sets flag_cobra_tarifa
     * @param bool $flag_cobra_tarifa Flag indicativa para crobran\u00E7a de tarifas
     * @return $this
     */
    public function setFlagCobraTarifa($flag_cobra_tarifa)
    {
        
        $this->flag_cobra_tarifa = $flag_cobra_tarifa;
        return $this;
    }
    
    /**
     * Gets carencia
     * @return int
     */
    public function getCarencia()
    {
        return $this->carencia;
    }
  
    /**
     * Sets carencia
     * @param int $carencia Quantidade de meses para car\u00EAncia
     * @return $this
     */
    public function setCarencia($carencia)
    {
        
        $this->carencia = $carencia;
        return $this;
    }
    
    /**
     * Gets flag_permitir_parcelamento
     * @return bool
     */
    public function getFlagPermitirParcelamento()
    {
        return $this->flag_permitir_parcelamento;
    }
  
    /**
     * Sets flag_permitir_parcelamento
     * @param bool $flag_permitir_parcelamento Permitir transa\u00E7\u00F5es parceladas
     * @return $this
     */
    public function setFlagPermitirParcelamento($flag_permitir_parcelamento)
    {
        
        $this->flag_permitir_parcelamento = $flag_permitir_parcelamento;
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
