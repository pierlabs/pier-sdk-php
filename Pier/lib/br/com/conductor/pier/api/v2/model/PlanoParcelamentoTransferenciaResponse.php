<?php
/**
 * PlanoParcelamentoTransferenciaResponse
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
 * PlanoParcelamentoTransferenciaResponse Class Doc Comment
 *
 * @category    Class
 * @description Parcelamento para Transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito para contas banc\u00C3\u00A1rias
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlanoParcelamentoTransferenciaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'codigo_especial' => 'int',
        'vencimento_primeira_parcela' => 'string',
        'flag_juros' => 'int',
        'numero_meses_carencia' => 'int',
        'parcelas' => '\br.com.conductor.pier.api.v2.model\ParcelamentoTransferenciaResponse[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'codigo_especial' => 'codigoEspecial',
        'vencimento_primeira_parcela' => 'vencimentoPrimeiraParcela',
        'flag_juros' => 'flagJuros',
        'numero_meses_carencia' => 'numeroMesesCarencia',
        'parcelas' => 'parcelas'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'codigo_especial' => 'setCodigoEspecial',
        'vencimento_primeira_parcela' => 'setVencimentoPrimeiraParcela',
        'flag_juros' => 'setFlagJuros',
        'numero_meses_carencia' => 'setNumeroMesesCarencia',
        'parcelas' => 'setParcelas'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'codigo_especial' => 'getCodigoEspecial',
        'vencimento_primeira_parcela' => 'getVencimentoPrimeiraParcela',
        'flag_juros' => 'getFlagJuros',
        'numero_meses_carencia' => 'getNumeroMesesCarencia',
        'parcelas' => 'getParcelas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $codigo_especial C\u00C3\u00B3digo de processamento da transa\u00C3\u00A7\u00C3\u00A3o.
      * @var int
      */
    protected $codigo_especial;
    
    /**
      * $vencimento_primeira_parcela Data de vencimento da primeira parcela.
      * @var string
      */
    protected $vencimento_primeira_parcela;
    
    /**
      * $flag_juros Flag indicativa para juros.
      * @var int
      */
    protected $flag_juros;
    
    /**
      * $numero_meses_carencia N\u00C3\u00BAmero de meses para car\u00C3\u00AAncia.
      * @var int
      */
    protected $numero_meses_carencia;
    
    /**
      * $parcelas Lista com os planos de parcelamento.
      * @var \br.com.conductor.pier.api.v2.model\ParcelamentoTransferenciaResponse[]
      */
    protected $parcelas;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->codigo_especial = $data["codigo_especial"];
            $this->vencimento_primeira_parcela = $data["vencimento_primeira_parcela"];
            $this->flag_juros = $data["flag_juros"];
            $this->numero_meses_carencia = $data["numero_meses_carencia"];
            $this->parcelas = $data["parcelas"];
        }
    }
    
    /**
     * Gets codigo_especial
     * @return int
     */
    public function getCodigoEspecial()
    {
        return $this->codigo_especial;
    }
  
    /**
     * Sets codigo_especial
     * @param int $codigo_especial C\u00C3\u00B3digo de processamento da transa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setCodigoEspecial($codigo_especial)
    {
        
        $this->codigo_especial = $codigo_especial;
        return $this;
    }
    
    /**
     * Gets vencimento_primeira_parcela
     * @return string
     */
    public function getVencimentoPrimeiraParcela()
    {
        return $this->vencimento_primeira_parcela;
    }
  
    /**
     * Sets vencimento_primeira_parcela
     * @param string $vencimento_primeira_parcela Data de vencimento da primeira parcela.
     * @return $this
     */
    public function setVencimentoPrimeiraParcela($vencimento_primeira_parcela)
    {
        
        $this->vencimento_primeira_parcela = $vencimento_primeira_parcela;
        return $this;
    }
    
    /**
     * Gets flag_juros
     * @return int
     */
    public function getFlagJuros()
    {
        return $this->flag_juros;
    }
  
    /**
     * Sets flag_juros
     * @param int $flag_juros Flag indicativa para juros.
     * @return $this
     */
    public function setFlagJuros($flag_juros)
    {
        
        $this->flag_juros = $flag_juros;
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
     * @param int $numero_meses_carencia N\u00C3\u00BAmero de meses para car\u00C3\u00AAncia.
     * @return $this
     */
    public function setNumeroMesesCarencia($numero_meses_carencia)
    {
        
        $this->numero_meses_carencia = $numero_meses_carencia;
        return $this;
    }
    
    /**
     * Gets parcelas
     * @return \br.com.conductor.pier.api.v2.model\ParcelamentoTransferenciaResponse[]
     */
    public function getParcelas()
    {
        return $this->parcelas;
    }
  
    /**
     * Sets parcelas
     * @param \br.com.conductor.pier.api.v2.model\ParcelamentoTransferenciaResponse[] $parcelas Lista com os planos de parcelamento.
     * @return $this
     */
    public function setParcelas($parcelas)
    {
        
        $this->parcelas = $parcelas;
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