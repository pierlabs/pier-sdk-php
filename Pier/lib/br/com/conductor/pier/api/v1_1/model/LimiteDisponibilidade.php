<?php
/**
 * LimiteDisponibilidade
 *
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
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

namespace br.com.conductor.pier.api.v1_1.model;

use \ArrayAccess;
/**
 * LimiteDisponibilidade Class Doc Comment
 *
 * @category    Class
 * @description LimiteDisponibilidade
 * @package     br.com.conductor.pier.api.v1_1.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LimiteDisponibilidade implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'limite_compra' => 'double',
        'limite_consignado' => 'double',
        'limite_externo' => 'double',
        'limite_extra' => 'double',
        'limite_global' => 'double',
        'limite_internacional_compra' => 'double',
        'limite_internacional_parcelado' => 'double',
        'limite_internacional_parcelas' => 'double',
        'limite_internacional_saque_global' => 'double',
        'limite_internacional_saque_periodo' => 'double',
        'limite_mensal' => 'double',
        'limite_parcelado' => 'double',
        'limite_parcelas' => 'double',
        'limite_saque_global' => 'double',
        'limite_saque_periodo' => 'double'
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
        'limite_compra' => 'limiteCompra',
        'limite_consignado' => 'limiteConsignado',
        'limite_externo' => 'limiteExterno',
        'limite_extra' => 'limiteExtra',
        'limite_global' => 'limiteGlobal',
        'limite_internacional_compra' => 'limiteInternacionalCompra',
        'limite_internacional_parcelado' => 'limiteInternacionalParcelado',
        'limite_internacional_parcelas' => 'limiteInternacionalParcelas',
        'limite_internacional_saque_global' => 'limiteInternacionalSaqueGlobal',
        'limite_internacional_saque_periodo' => 'limiteInternacionalSaquePeriodo',
        'limite_mensal' => 'limiteMensal',
        'limite_parcelado' => 'limiteParcelado',
        'limite_parcelas' => 'limiteParcelas',
        'limite_saque_global' => 'limiteSaqueGlobal',
        'limite_saque_periodo' => 'limiteSaquePeriodo'
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
        'limite_compra' => 'setLimiteCompra',
        'limite_consignado' => 'setLimiteConsignado',
        'limite_externo' => 'setLimiteExterno',
        'limite_extra' => 'setLimiteExtra',
        'limite_global' => 'setLimiteGlobal',
        'limite_internacional_compra' => 'setLimiteInternacionalCompra',
        'limite_internacional_parcelado' => 'setLimiteInternacionalParcelado',
        'limite_internacional_parcelas' => 'setLimiteInternacionalParcelas',
        'limite_internacional_saque_global' => 'setLimiteInternacionalSaqueGlobal',
        'limite_internacional_saque_periodo' => 'setLimiteInternacionalSaquePeriodo',
        'limite_mensal' => 'setLimiteMensal',
        'limite_parcelado' => 'setLimiteParcelado',
        'limite_parcelas' => 'setLimiteParcelas',
        'limite_saque_global' => 'setLimiteSaqueGlobal',
        'limite_saque_periodo' => 'setLimiteSaquePeriodo'
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
        'limite_compra' => 'getLimiteCompra',
        'limite_consignado' => 'getLimiteConsignado',
        'limite_externo' => 'getLimiteExterno',
        'limite_extra' => 'getLimiteExtra',
        'limite_global' => 'getLimiteGlobal',
        'limite_internacional_compra' => 'getLimiteInternacionalCompra',
        'limite_internacional_parcelado' => 'getLimiteInternacionalParcelado',
        'limite_internacional_parcelas' => 'getLimiteInternacionalParcelas',
        'limite_internacional_saque_global' => 'getLimiteInternacionalSaqueGlobal',
        'limite_internacional_saque_periodo' => 'getLimiteInternacionalSaquePeriodo',
        'limite_mensal' => 'getLimiteMensal',
        'limite_parcelado' => 'getLimiteParcelado',
        'limite_parcelas' => 'getLimiteParcelas',
        'limite_saque_global' => 'getLimiteSaqueGlobal',
        'limite_saque_periodo' => 'getLimiteSaquePeriodo'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Limite Disponibilidade (id).
      * @var int
      */
    protected $id;
    
    /**
      * $limite_compra 
      * @var double
      */
    protected $limite_compra;
    
    /**
      * $limite_consignado 
      * @var double
      */
    protected $limite_consignado;
    
    /**
      * $limite_externo 
      * @var double
      */
    protected $limite_externo;
    
    /**
      * $limite_extra 
      * @var double
      */
    protected $limite_extra;
    
    /**
      * $limite_global Campo que 
      * @var double
      */
    protected $limite_global;
    
    /**
      * $limite_internacional_compra 
      * @var double
      */
    protected $limite_internacional_compra;
    
    /**
      * $limite_internacional_parcelado 
      * @var double
      */
    protected $limite_internacional_parcelado;
    
    /**
      * $limite_internacional_parcelas 
      * @var double
      */
    protected $limite_internacional_parcelas;
    
    /**
      * $limite_internacional_saque_global 
      * @var double
      */
    protected $limite_internacional_saque_global;
    
    /**
      * $limite_internacional_saque_periodo 
      * @var double
      */
    protected $limite_internacional_saque_periodo;
    
    /**
      * $limite_mensal 
      * @var double
      */
    protected $limite_mensal;
    
    /**
      * $limite_parcelado 
      * @var double
      */
    protected $limite_parcelado;
    
    /**
      * $limite_parcelas 
      * @var double
      */
    protected $limite_parcelas;
    
    /**
      * $limite_saque_global 
      * @var double
      */
    protected $limite_saque_global;
    
    /**
      * $limite_saque_periodo 
      * @var double
      */
    protected $limite_saque_periodo;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->limite_compra = $data["limite_compra"];
            $this->limite_consignado = $data["limite_consignado"];
            $this->limite_externo = $data["limite_externo"];
            $this->limite_extra = $data["limite_extra"];
            $this->limite_global = $data["limite_global"];
            $this->limite_internacional_compra = $data["limite_internacional_compra"];
            $this->limite_internacional_parcelado = $data["limite_internacional_parcelado"];
            $this->limite_internacional_parcelas = $data["limite_internacional_parcelas"];
            $this->limite_internacional_saque_global = $data["limite_internacional_saque_global"];
            $this->limite_internacional_saque_periodo = $data["limite_internacional_saque_periodo"];
            $this->limite_mensal = $data["limite_mensal"];
            $this->limite_parcelado = $data["limite_parcelado"];
            $this->limite_parcelas = $data["limite_parcelas"];
            $this->limite_saque_global = $data["limite_saque_global"];
            $this->limite_saque_periodo = $data["limite_saque_periodo"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Limite Disponibilidade (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets limite_compra
     * @return double
     */
    public function getLimiteCompra()
    {
        return $this->limite_compra;
    }
  
    /**
     * Sets limite_compra
     * @param double $limite_compra 
     * @return $this
     */
    public function setLimiteCompra($limite_compra)
    {
        
        $this->limite_compra = $limite_compra;
        return $this;
    }
    
    /**
     * Gets limite_consignado
     * @return double
     */
    public function getLimiteConsignado()
    {
        return $this->limite_consignado;
    }
  
    /**
     * Sets limite_consignado
     * @param double $limite_consignado 
     * @return $this
     */
    public function setLimiteConsignado($limite_consignado)
    {
        
        $this->limite_consignado = $limite_consignado;
        return $this;
    }
    
    /**
     * Gets limite_externo
     * @return double
     */
    public function getLimiteExterno()
    {
        return $this->limite_externo;
    }
  
    /**
     * Sets limite_externo
     * @param double $limite_externo 
     * @return $this
     */
    public function setLimiteExterno($limite_externo)
    {
        
        $this->limite_externo = $limite_externo;
        return $this;
    }
    
    /**
     * Gets limite_extra
     * @return double
     */
    public function getLimiteExtra()
    {
        return $this->limite_extra;
    }
  
    /**
     * Sets limite_extra
     * @param double $limite_extra 
     * @return $this
     */
    public function setLimiteExtra($limite_extra)
    {
        
        $this->limite_extra = $limite_extra;
        return $this;
    }
    
    /**
     * Gets limite_global
     * @return double
     */
    public function getLimiteGlobal()
    {
        return $this->limite_global;
    }
  
    /**
     * Sets limite_global
     * @param double $limite_global Campo que 
     * @return $this
     */
    public function setLimiteGlobal($limite_global)
    {
        
        $this->limite_global = $limite_global;
        return $this;
    }
    
    /**
     * Gets limite_internacional_compra
     * @return double
     */
    public function getLimiteInternacionalCompra()
    {
        return $this->limite_internacional_compra;
    }
  
    /**
     * Sets limite_internacional_compra
     * @param double $limite_internacional_compra 
     * @return $this
     */
    public function setLimiteInternacionalCompra($limite_internacional_compra)
    {
        
        $this->limite_internacional_compra = $limite_internacional_compra;
        return $this;
    }
    
    /**
     * Gets limite_internacional_parcelado
     * @return double
     */
    public function getLimiteInternacionalParcelado()
    {
        return $this->limite_internacional_parcelado;
    }
  
    /**
     * Sets limite_internacional_parcelado
     * @param double $limite_internacional_parcelado 
     * @return $this
     */
    public function setLimiteInternacionalParcelado($limite_internacional_parcelado)
    {
        
        $this->limite_internacional_parcelado = $limite_internacional_parcelado;
        return $this;
    }
    
    /**
     * Gets limite_internacional_parcelas
     * @return double
     */
    public function getLimiteInternacionalParcelas()
    {
        return $this->limite_internacional_parcelas;
    }
  
    /**
     * Sets limite_internacional_parcelas
     * @param double $limite_internacional_parcelas 
     * @return $this
     */
    public function setLimiteInternacionalParcelas($limite_internacional_parcelas)
    {
        
        $this->limite_internacional_parcelas = $limite_internacional_parcelas;
        return $this;
    }
    
    /**
     * Gets limite_internacional_saque_global
     * @return double
     */
    public function getLimiteInternacionalSaqueGlobal()
    {
        return $this->limite_internacional_saque_global;
    }
  
    /**
     * Sets limite_internacional_saque_global
     * @param double $limite_internacional_saque_global 
     * @return $this
     */
    public function setLimiteInternacionalSaqueGlobal($limite_internacional_saque_global)
    {
        
        $this->limite_internacional_saque_global = $limite_internacional_saque_global;
        return $this;
    }
    
    /**
     * Gets limite_internacional_saque_periodo
     * @return double
     */
    public function getLimiteInternacionalSaquePeriodo()
    {
        return $this->limite_internacional_saque_periodo;
    }
  
    /**
     * Sets limite_internacional_saque_periodo
     * @param double $limite_internacional_saque_periodo 
     * @return $this
     */
    public function setLimiteInternacionalSaquePeriodo($limite_internacional_saque_periodo)
    {
        
        $this->limite_internacional_saque_periodo = $limite_internacional_saque_periodo;
        return $this;
    }
    
    /**
     * Gets limite_mensal
     * @return double
     */
    public function getLimiteMensal()
    {
        return $this->limite_mensal;
    }
  
    /**
     * Sets limite_mensal
     * @param double $limite_mensal 
     * @return $this
     */
    public function setLimiteMensal($limite_mensal)
    {
        
        $this->limite_mensal = $limite_mensal;
        return $this;
    }
    
    /**
     * Gets limite_parcelado
     * @return double
     */
    public function getLimiteParcelado()
    {
        return $this->limite_parcelado;
    }
  
    /**
     * Sets limite_parcelado
     * @param double $limite_parcelado 
     * @return $this
     */
    public function setLimiteParcelado($limite_parcelado)
    {
        
        $this->limite_parcelado = $limite_parcelado;
        return $this;
    }
    
    /**
     * Gets limite_parcelas
     * @return double
     */
    public function getLimiteParcelas()
    {
        return $this->limite_parcelas;
    }
  
    /**
     * Sets limite_parcelas
     * @param double $limite_parcelas 
     * @return $this
     */
    public function setLimiteParcelas($limite_parcelas)
    {
        
        $this->limite_parcelas = $limite_parcelas;
        return $this;
    }
    
    /**
     * Gets limite_saque_global
     * @return double
     */
    public function getLimiteSaqueGlobal()
    {
        return $this->limite_saque_global;
    }
  
    /**
     * Sets limite_saque_global
     * @param double $limite_saque_global 
     * @return $this
     */
    public function setLimiteSaqueGlobal($limite_saque_global)
    {
        
        $this->limite_saque_global = $limite_saque_global;
        return $this;
    }
    
    /**
     * Gets limite_saque_periodo
     * @return double
     */
    public function getLimiteSaquePeriodo()
    {
        return $this->limite_saque_periodo;
    }
  
    /**
     * Sets limite_saque_periodo
     * @param double $limite_saque_periodo 
     * @return $this
     */
    public function setLimiteSaquePeriodo($limite_saque_periodo)
    {
        
        $this->limite_saque_periodo = $limite_saque_periodo;
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
            return json_encode(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
