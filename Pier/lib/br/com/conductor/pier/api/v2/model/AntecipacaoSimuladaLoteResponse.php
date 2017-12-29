<?php
/**
 * AntecipacaoSimuladaLoteResponse
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
 * AntecipacaoSimuladaLoteResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o da resposta do recurso Antecipacao Simulada
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AntecipacaoSimuladaLoteResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'valor_total_antecipado' => 'Number',
        'valor_total_desconto' => 'Number',
        'valor_total_com_desconto' => 'Number',
        'antecipacoes_simuladas' => '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'valor_total_antecipado' => 'valorTotalAntecipado',
        'valor_total_desconto' => 'valorTotalDesconto',
        'valor_total_com_desconto' => 'valorTotalComDesconto',
        'antecipacoes_simuladas' => 'antecipacoesSimuladas'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'valor_total_antecipado' => 'setValorTotalAntecipado',
        'valor_total_desconto' => 'setValorTotalDesconto',
        'valor_total_com_desconto' => 'setValorTotalComDesconto',
        'antecipacoes_simuladas' => 'setAntecipacoesSimuladas'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'valor_total_antecipado' => 'getValorTotalAntecipado',
        'valor_total_desconto' => 'getValorTotalDesconto',
        'valor_total_com_desconto' => 'getValorTotalComDesconto',
        'antecipacoes_simuladas' => 'getAntecipacoesSimuladas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $valor_total_antecipado Valor total antecipado.
      * @var Number
      */
    protected $valor_total_antecipado;
    
    /**
      * $valor_total_desconto Valor total do desconto.
      * @var Number
      */
    protected $valor_total_desconto;
    
    /**
      * $valor_total_com_desconto Valor total antecipado com o desconto.
      * @var Number
      */
    protected $valor_total_com_desconto;
    
    /**
      * $antecipacoes_simuladas Antecipa\u00C3\u00A7\u00C3\u00B5es Simuladas.
      * @var \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse[]
      */
    protected $antecipacoes_simuladas;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->valor_total_antecipado = $data["valor_total_antecipado"];
            $this->valor_total_desconto = $data["valor_total_desconto"];
            $this->valor_total_com_desconto = $data["valor_total_com_desconto"];
            $this->antecipacoes_simuladas = $data["antecipacoes_simuladas"];
        }
    }
    
    /**
     * Gets valor_total_antecipado
     * @return Number
     */
    public function getValorTotalAntecipado()
    {
        return $this->valor_total_antecipado;
    }
  
    /**
     * Sets valor_total_antecipado
     * @param Number $valor_total_antecipado Valor total antecipado.
     * @return $this
     */
    public function setValorTotalAntecipado($valor_total_antecipado)
    {
        
        $this->valor_total_antecipado = $valor_total_antecipado;
        return $this;
    }
    
    /**
     * Gets valor_total_desconto
     * @return Number
     */
    public function getValorTotalDesconto()
    {
        return $this->valor_total_desconto;
    }
  
    /**
     * Sets valor_total_desconto
     * @param Number $valor_total_desconto Valor total do desconto.
     * @return $this
     */
    public function setValorTotalDesconto($valor_total_desconto)
    {
        
        $this->valor_total_desconto = $valor_total_desconto;
        return $this;
    }
    
    /**
     * Gets valor_total_com_desconto
     * @return Number
     */
    public function getValorTotalComDesconto()
    {
        return $this->valor_total_com_desconto;
    }
  
    /**
     * Sets valor_total_com_desconto
     * @param Number $valor_total_com_desconto Valor total antecipado com o desconto.
     * @return $this
     */
    public function setValorTotalComDesconto($valor_total_com_desconto)
    {
        
        $this->valor_total_com_desconto = $valor_total_com_desconto;
        return $this;
    }
    
    /**
     * Gets antecipacoes_simuladas
     * @return \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse[]
     */
    public function getAntecipacoesSimuladas()
    {
        return $this->antecipacoes_simuladas;
    }
  
    /**
     * Sets antecipacoes_simuladas
     * @param \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse[] $antecipacoes_simuladas Antecipa\u00C3\u00A7\u00C3\u00B5es Simuladas.
     * @return $this
     */
    public function setAntecipacoesSimuladas($antecipacoes_simuladas)
    {
        
        $this->antecipacoes_simuladas = $antecipacoes_simuladas;
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