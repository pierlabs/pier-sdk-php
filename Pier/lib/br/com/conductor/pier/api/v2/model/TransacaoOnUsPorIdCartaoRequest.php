<?php
/**
 * TransacaoOnUsPorIdCartaoRequest
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
 * TransacaoOnUsPorIdCartaoRequest Class Doc Comment
 *
 * @category    Class
 * @description Objeto de Requisi\u00E7\u00E3o de Transa\u00E7\u00E3o On Us por idCartao
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransacaoOnUsPorIdCartaoRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'nsu_origem' => 'string',
        'codigo_processamento' => 'string',
        'valor_transacao' => 'Number',
        'numero_estabelecimento' => 'int',
        'data_hora_terminal' => 'string',
        'terminal_requisitante' => 'string',
        'numero_parcelas' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'nsu_origem' => 'nsuOrigem',
        'codigo_processamento' => 'codigoProcessamento',
        'valor_transacao' => 'valorTransacao',
        'numero_estabelecimento' => 'numeroEstabelecimento',
        'data_hora_terminal' => 'dataHoraTerminal',
        'terminal_requisitante' => 'terminalRequisitante',
        'numero_parcelas' => 'numeroParcelas'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'nsu_origem' => 'setNsuOrigem',
        'codigo_processamento' => 'setCodigoProcessamento',
        'valor_transacao' => 'setValorTransacao',
        'numero_estabelecimento' => 'setNumeroEstabelecimento',
        'data_hora_terminal' => 'setDataHoraTerminal',
        'terminal_requisitante' => 'setTerminalRequisitante',
        'numero_parcelas' => 'setNumeroParcelas'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'nsu_origem' => 'getNsuOrigem',
        'codigo_processamento' => 'getCodigoProcessamento',
        'valor_transacao' => 'getValorTransacao',
        'numero_estabelecimento' => 'getNumeroEstabelecimento',
        'data_hora_terminal' => 'getDataHoraTerminal',
        'terminal_requisitante' => 'getTerminalRequisitante',
        'numero_parcelas' => 'getNumeroParcelas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $nsu_origem N\u00FAmero Sequencial \u00DAnico que identifica a transa\u00E7\u00E3o no sistema que a originou.
      * @var string
      */
    protected $nsu_origem;
    
    /**
      * $codigo_processamento C\u00F3digo de Processamento que identifica o Tipo da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $codigo_processamento;
    
    /**
      * $valor_transacao Valor da transa\u00E7\u00E3o com duas casas decimais para os centavos.
      * @var Number
      */
    protected $valor_transacao;
    
    /**
      * $numero_estabelecimento N\u00FAmero do Estabelecimento (N\u00FAmero+DV).
      * @var int
      */
    protected $numero_estabelecimento;
    
    /**
      * $data_hora_terminal Apresenta a data e hora local da consulta yyyy-MM-dd'T'HH:mm:ss.SSSZ. Ex: 2000-10-31T01:30:00.000-05:00
      * @var string
      */
    protected $data_hora_terminal;
    
    /**
      * $terminal_requisitante Apresenta a identifica\u00E7\u00E3o do terminal requisitante
      * @var string
      */
    protected $terminal_requisitante;
    
    /**
      * $numero_parcelas N\u00FAmero de Parcelas.
      * @var int
      */
    protected $numero_parcelas;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->nsu_origem = $data["nsu_origem"];
            $this->codigo_processamento = $data["codigo_processamento"];
            $this->valor_transacao = $data["valor_transacao"];
            $this->numero_estabelecimento = $data["numero_estabelecimento"];
            $this->data_hora_terminal = $data["data_hora_terminal"];
            $this->terminal_requisitante = $data["terminal_requisitante"];
            $this->numero_parcelas = $data["numero_parcelas"];
        }
    }
    
    /**
     * Gets nsu_origem
     * @return string
     */
    public function getNsuOrigem()
    {
        return $this->nsu_origem;
    }
  
    /**
     * Sets nsu_origem
     * @param string $nsu_origem N\u00FAmero Sequencial \u00DAnico que identifica a transa\u00E7\u00E3o no sistema que a originou.
     * @return $this
     */
    public function setNsuOrigem($nsu_origem)
    {
        
        $this->nsu_origem = $nsu_origem;
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
     * @param string $codigo_processamento C\u00F3digo de Processamento que identifica o Tipo da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setCodigoProcessamento($codigo_processamento)
    {
        
        $this->codigo_processamento = $codigo_processamento;
        return $this;
    }
    
    /**
     * Gets valor_transacao
     * @return Number
     */
    public function getValorTransacao()
    {
        return $this->valor_transacao;
    }
  
    /**
     * Sets valor_transacao
     * @param Number $valor_transacao Valor da transa\u00E7\u00E3o com duas casas decimais para os centavos.
     * @return $this
     */
    public function setValorTransacao($valor_transacao)
    {
        
        $this->valor_transacao = $valor_transacao;
        return $this;
    }
    
    /**
     * Gets numero_estabelecimento
     * @return int
     */
    public function getNumeroEstabelecimento()
    {
        return $this->numero_estabelecimento;
    }
  
    /**
     * Sets numero_estabelecimento
     * @param int $numero_estabelecimento N\u00FAmero do Estabelecimento (N\u00FAmero+DV).
     * @return $this
     */
    public function setNumeroEstabelecimento($numero_estabelecimento)
    {
        
        $this->numero_estabelecimento = $numero_estabelecimento;
        return $this;
    }
    
    /**
     * Gets data_hora_terminal
     * @return string
     */
    public function getDataHoraTerminal()
    {
        return $this->data_hora_terminal;
    }
  
    /**
     * Sets data_hora_terminal
     * @param string $data_hora_terminal Apresenta a data e hora local da consulta yyyy-MM-dd'T'HH:mm:ss.SSSZ. Ex: 2000-10-31T01:30:00.000-05:00
     * @return $this
     */
    public function setDataHoraTerminal($data_hora_terminal)
    {
        
        $this->data_hora_terminal = $data_hora_terminal;
        return $this;
    }
    
    /**
     * Gets terminal_requisitante
     * @return string
     */
    public function getTerminalRequisitante()
    {
        return $this->terminal_requisitante;
    }
  
    /**
     * Sets terminal_requisitante
     * @param string $terminal_requisitante Apresenta a identifica\u00E7\u00E3o do terminal requisitante
     * @return $this
     */
    public function setTerminalRequisitante($terminal_requisitante)
    {
        
        $this->terminal_requisitante = $terminal_requisitante;
        return $this;
    }
    
    /**
     * Gets numero_parcelas
     * @return int
     */
    public function getNumeroParcelas()
    {
        return $this->numero_parcelas;
    }
  
    /**
     * Sets numero_parcelas
     * @param int $numero_parcelas N\u00FAmero de Parcelas.
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
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
