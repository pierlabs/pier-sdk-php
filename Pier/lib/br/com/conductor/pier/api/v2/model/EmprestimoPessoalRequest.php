<?php
/**
 * EmprestimoPessoalRequest
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
 * EmprestimoPessoalRequest Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00E7\u00E3o da requisi\u00E7\u00E3o do  recurso Dispositivo
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmprestimoPessoalRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'valor_solicitado' => 'Number',
        'numero_parcelas' => 'int',
        'taxa_juros' => 'Number',
        'periodo_taxa' => 'string',
        'sistema_amortizacao' => 'string',
        'numero_meses_carencia' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'valor_solicitado' => 'valorSolicitado',
        'numero_parcelas' => 'numeroParcelas',
        'taxa_juros' => 'taxaJuros',
        'periodo_taxa' => 'periodoTaxa',
        'sistema_amortizacao' => 'sistemaAmortizacao',
        'numero_meses_carencia' => 'numeroMesesCarencia'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'valor_solicitado' => 'setValorSolicitado',
        'numero_parcelas' => 'setNumeroParcelas',
        'taxa_juros' => 'setTaxaJuros',
        'periodo_taxa' => 'setPeriodoTaxa',
        'sistema_amortizacao' => 'setSistemaAmortizacao',
        'numero_meses_carencia' => 'setNumeroMesesCarencia'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'valor_solicitado' => 'getValorSolicitado',
        'numero_parcelas' => 'getNumeroParcelas',
        'taxa_juros' => 'getTaxaJuros',
        'periodo_taxa' => 'getPeriodoTaxa',
        'sistema_amortizacao' => 'getSistemaAmortizacao',
        'numero_meses_carencia' => 'getNumeroMesesCarencia'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $valor_solicitado Valor do empr\u00E9stimo/financiamento
      * @var Number
      */
    protected $valor_solicitado;
    
    /**
      * $numero_parcelas N\u00FAmero total de parcelas do empr\u00E9stimo/financiamento
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $taxa_juros Valor percentual da taxa de juros a ser aplicada
      * @var Number
      */
    protected $taxa_juros;
    
    /**
      * $periodo_taxa Per\u00EDodo de aplica da taxa de juros
      * @var string
      */
    protected $periodo_taxa;
    
    /**
      * $sistema_amortizacao Sistema para amortiza\u00E7\u00E3o do valor das parcelas
      * @var string
      */
    protected $sistema_amortizacao;
    
    /**
      * $numero_meses_carencia N\u00FAmero de meses para cobran\u00E7a da primeira parcela
      * @var int
      */
    protected $numero_meses_carencia;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->valor_solicitado = $data["valor_solicitado"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->taxa_juros = $data["taxa_juros"];
            $this->periodo_taxa = $data["periodo_taxa"];
            $this->sistema_amortizacao = $data["sistema_amortizacao"];
            $this->numero_meses_carencia = $data["numero_meses_carencia"];
        }
    }
    
    /**
     * Gets valor_solicitado
     * @return Number
     */
    public function getValorSolicitado()
    {
        return $this->valor_solicitado;
    }
  
    /**
     * Sets valor_solicitado
     * @param Number $valor_solicitado Valor do empr\u00E9stimo/financiamento
     * @return $this
     */
    public function setValorSolicitado($valor_solicitado)
    {
        
        $this->valor_solicitado = $valor_solicitado;
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
     * @param int $numero_parcelas N\u00FAmero total de parcelas do empr\u00E9stimo/financiamento
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }
    
    /**
     * Gets taxa_juros
     * @return Number
     */
    public function getTaxaJuros()
    {
        return $this->taxa_juros;
    }
  
    /**
     * Sets taxa_juros
     * @param Number $taxa_juros Valor percentual da taxa de juros a ser aplicada
     * @return $this
     */
    public function setTaxaJuros($taxa_juros)
    {
        
        $this->taxa_juros = $taxa_juros;
        return $this;
    }
    
    /**
     * Gets periodo_taxa
     * @return string
     */
    public function getPeriodoTaxa()
    {
        return $this->periodo_taxa;
    }
  
    /**
     * Sets periodo_taxa
     * @param string $periodo_taxa Per\u00EDodo de aplica da taxa de juros
     * @return $this
     */
    public function setPeriodoTaxa($periodo_taxa)
    {
        
        $this->periodo_taxa = $periodo_taxa;
        return $this;
    }
    
    /**
     * Gets sistema_amortizacao
     * @return string
     */
    public function getSistemaAmortizacao()
    {
        return $this->sistema_amortizacao;
    }
  
    /**
     * Sets sistema_amortizacao
     * @param string $sistema_amortizacao Sistema para amortiza\u00E7\u00E3o do valor das parcelas
     * @return $this
     */
    public function setSistemaAmortizacao($sistema_amortizacao)
    {
        
        $this->sistema_amortizacao = $sistema_amortizacao;
        return $this;
    }
    
    /**
     * Gets numero_meses_carencia
     * @return int
     */
    public function getNumeroMesesCarencia()
    {
        return $this->numero_meses_carencia;
    }
  
    /**
     * Sets numero_meses_carencia
     * @param int $numero_meses_carencia N\u00FAmero de meses para cobran\u00E7a da primeira parcela
     * @return $this
     */
    public function setNumeroMesesCarencia($numero_meses_carencia)
    {
        
        $this->numero_meses_carencia = $numero_meses_carencia;
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
