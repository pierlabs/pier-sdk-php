<?php
/**
 * LimiteDisponibilidadeResponse
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
 * LimiteDisponibilidadeResponse Class Doc Comment
 *
 * @category    Class
 * @description Limite Disponibilidade
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LimiteDisponibilidadeResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'limite_global' => 'Number',
        'limite_compra' => 'Number',
        'limite_parcelado' => 'Number',
        'limite_parcelas' => 'Number',
        'limite_saque_global' => 'Number',
        'limite_saque_periodo' => 'Number',
        'limite_consignado' => 'Number',
        'limite_internacional_compra' => 'Number',
        'limite_internacional_parcelado' => 'Number',
        'limite_internacional_parcelas' => 'Number',
        'limite_internacional_saque_global' => 'Number',
        'limite_internacional_saque_periodo' => 'Number',
        'saldo_disponivel_global' => 'Number',
        'saldo_disponivel_compra' => 'Number',
        'saldo_disponivel_parcelado' => 'Number',
        'saldo_disponivel_parcelas' => 'Number',
        'saldo_disponivel_saque' => 'Number',
        'saldo_pontos_fidelidade' => 'Number',
        'saldo_disponivel_compra_internacional' => 'Number',
        'saldo_disponivel_saque_internacional' => 'Number'
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
        'limite_global' => 'limiteGlobal',
        'limite_compra' => 'limiteCompra',
        'limite_parcelado' => 'limiteParcelado',
        'limite_parcelas' => 'limiteParcelas',
        'limite_saque_global' => 'limiteSaqueGlobal',
        'limite_saque_periodo' => 'limiteSaquePeriodo',
        'limite_consignado' => 'limiteConsignado',
        'limite_internacional_compra' => 'limiteInternacionalCompra',
        'limite_internacional_parcelado' => 'limiteInternacionalParcelado',
        'limite_internacional_parcelas' => 'limiteInternacionalParcelas',
        'limite_internacional_saque_global' => 'limiteInternacionalSaqueGlobal',
        'limite_internacional_saque_periodo' => 'limiteInternacionalSaquePeriodo',
        'saldo_disponivel_global' => 'saldoDisponivelGlobal',
        'saldo_disponivel_compra' => 'saldoDisponivelCompra',
        'saldo_disponivel_parcelado' => 'saldoDisponivelParcelado',
        'saldo_disponivel_parcelas' => 'saldoDisponivelParcelas',
        'saldo_disponivel_saque' => 'saldoDisponivelSaque',
        'saldo_pontos_fidelidade' => 'saldoPontosFidelidade',
        'saldo_disponivel_compra_internacional' => 'saldoDisponivelCompraInternacional',
        'saldo_disponivel_saque_internacional' => 'saldoDisponivelSaqueInternacional'
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
        'limite_global' => 'setLimiteGlobal',
        'limite_compra' => 'setLimiteCompra',
        'limite_parcelado' => 'setLimiteParcelado',
        'limite_parcelas' => 'setLimiteParcelas',
        'limite_saque_global' => 'setLimiteSaqueGlobal',
        'limite_saque_periodo' => 'setLimiteSaquePeriodo',
        'limite_consignado' => 'setLimiteConsignado',
        'limite_internacional_compra' => 'setLimiteInternacionalCompra',
        'limite_internacional_parcelado' => 'setLimiteInternacionalParcelado',
        'limite_internacional_parcelas' => 'setLimiteInternacionalParcelas',
        'limite_internacional_saque_global' => 'setLimiteInternacionalSaqueGlobal',
        'limite_internacional_saque_periodo' => 'setLimiteInternacionalSaquePeriodo',
        'saldo_disponivel_global' => 'setSaldoDisponivelGlobal',
        'saldo_disponivel_compra' => 'setSaldoDisponivelCompra',
        'saldo_disponivel_parcelado' => 'setSaldoDisponivelParcelado',
        'saldo_disponivel_parcelas' => 'setSaldoDisponivelParcelas',
        'saldo_disponivel_saque' => 'setSaldoDisponivelSaque',
        'saldo_pontos_fidelidade' => 'setSaldoPontosFidelidade',
        'saldo_disponivel_compra_internacional' => 'setSaldoDisponivelCompraInternacional',
        'saldo_disponivel_saque_internacional' => 'setSaldoDisponivelSaqueInternacional'
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
        'limite_global' => 'getLimiteGlobal',
        'limite_compra' => 'getLimiteCompra',
        'limite_parcelado' => 'getLimiteParcelado',
        'limite_parcelas' => 'getLimiteParcelas',
        'limite_saque_global' => 'getLimiteSaqueGlobal',
        'limite_saque_periodo' => 'getLimiteSaquePeriodo',
        'limite_consignado' => 'getLimiteConsignado',
        'limite_internacional_compra' => 'getLimiteInternacionalCompra',
        'limite_internacional_parcelado' => 'getLimiteInternacionalParcelado',
        'limite_internacional_parcelas' => 'getLimiteInternacionalParcelas',
        'limite_internacional_saque_global' => 'getLimiteInternacionalSaqueGlobal',
        'limite_internacional_saque_periodo' => 'getLimiteInternacionalSaquePeriodo',
        'saldo_disponivel_global' => 'getSaldoDisponivelGlobal',
        'saldo_disponivel_compra' => 'getSaldoDisponivelCompra',
        'saldo_disponivel_parcelado' => 'getSaldoDisponivelParcelado',
        'saldo_disponivel_parcelas' => 'getSaldoDisponivelParcelas',
        'saldo_disponivel_saque' => 'getSaldoDisponivelSaque',
        'saldo_pontos_fidelidade' => 'getSaldoPontosFidelidade',
        'saldo_disponivel_compra_internacional' => 'getSaldoDisponivelCompraInternacional',
        'saldo_disponivel_saque_internacional' => 'getSaldoDisponivelSaqueInternacional'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o de Limite e Disponibilidade (id).
      * @var int
      */
    protected $id;
    
    /**
      * $limite_global Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui.
      * @var Number
      */
    protected $limite_global;
    
    /**
      * $limite_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais.
      * @var Number
      */
    protected $limite_compra;
    
    /**
      * $limite_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas.
      * @var Number
      */
    protected $limite_parcelado;
    
    /**
      * $limite_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade.
      * @var Number
      */
    protected $limite_parcelas;
    
    /**
      * $limite_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
      * @var Number
      */
    protected $limite_saque_global;
    
    /**
      * $limite_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento.
      * @var Number
      */
    protected $limite_saque_periodo;
    
    /**
      * $limite_consignado Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos.
      * @var Number
      */
    protected $limite_consignado;
    
    /**
      * $limite_internacional_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais.
      * @var Number
      */
    protected $limite_internacional_compra;
    
    /**
      * $limite_internacional_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas.
      * @var Number
      */
    protected $limite_internacional_parcelado;
    
    /**
      * $limite_internacional_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade.
      * @var Number
      */
    protected $limite_internacional_parcelas;
    
    /**
      * $limite_internacional_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional.
      * @var Number
      */
    protected $limite_internacional_saque_global;
    
    /**
      * $limite_internacional_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento.
      * @var Number
      */
    protected $limite_internacional_saque_periodo;
    
    /**
      * $saldo_disponivel_global Apresenta o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es.
      * @var Number
      */
    protected $saldo_disponivel_global;
    
    /**
      * $saldo_disponivel_compra Quando utilizado pelo emissor a modalidade limiteCompra, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de compra Nacional.
      * @var Number
      */
    protected $saldo_disponivel_compra;
    
    /**
      * $saldo_disponivel_parcelado Quando utilizado pelo emissor a modalidade limiteParcelado, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de compra Nacional.
      * @var Number
      */
    protected $saldo_disponivel_parcelado;
    
    /**
      * $saldo_disponivel_parcelas Quando utilizado pelo emissor a modalidade limiteParcelas, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para utilizar como valor de parcelas Nacionais em um determinado ciclo de faturamento.
      * @var Number
      */
    protected $saldo_disponivel_parcelas;
    
    /**
      * $saldo_disponivel_saque Quando utilizado pelo emissor a modalidade limiteSaque, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
      * @var Number
      */
    protected $saldo_disponivel_saque;
    
    /**
      * $saldo_pontos_fidelidade Quando utilizado um programa de fidelidade pelo emissor, este campo apresentar\u00C3\u00A1 o saldo atual de pontos que o portador possui.
      * @var Number
      */
    protected $saldo_pontos_fidelidade;
    
    /**
      * $saldo_disponivel_compra_internacional Quando utilizado pelo emissor a modalidade limiteCompraInternacional, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de Compra Internacional.
      * @var Number
      */
    protected $saldo_disponivel_compra_internacional;
    
    /**
      * $saldo_disponivel_saque_internacional Quando utilizado pelo emissor a modalidade limiteSaqueInternacional, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional.
      * @var Number
      */
    protected $saldo_disponivel_saque_internacional;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->limite_global = $data["limite_global"];
            $this->limite_compra = $data["limite_compra"];
            $this->limite_parcelado = $data["limite_parcelado"];
            $this->limite_parcelas = $data["limite_parcelas"];
            $this->limite_saque_global = $data["limite_saque_global"];
            $this->limite_saque_periodo = $data["limite_saque_periodo"];
            $this->limite_consignado = $data["limite_consignado"];
            $this->limite_internacional_compra = $data["limite_internacional_compra"];
            $this->limite_internacional_parcelado = $data["limite_internacional_parcelado"];
            $this->limite_internacional_parcelas = $data["limite_internacional_parcelas"];
            $this->limite_internacional_saque_global = $data["limite_internacional_saque_global"];
            $this->limite_internacional_saque_periodo = $data["limite_internacional_saque_periodo"];
            $this->saldo_disponivel_global = $data["saldo_disponivel_global"];
            $this->saldo_disponivel_compra = $data["saldo_disponivel_compra"];
            $this->saldo_disponivel_parcelado = $data["saldo_disponivel_parcelado"];
            $this->saldo_disponivel_parcelas = $data["saldo_disponivel_parcelas"];
            $this->saldo_disponivel_saque = $data["saldo_disponivel_saque"];
            $this->saldo_pontos_fidelidade = $data["saldo_pontos_fidelidade"];
            $this->saldo_disponivel_compra_internacional = $data["saldo_disponivel_compra_internacional"];
            $this->saldo_disponivel_saque_internacional = $data["saldo_disponivel_saque_internacional"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o de Limite e Disponibilidade (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets limite_global
     * @return Number
     */
    public function getLimiteGlobal()
    {
        return $this->limite_global;
    }
  
    /**
     * Sets limite_global
     * @param Number $limite_global Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui.
     * @return $this
     */
    public function setLimiteGlobal($limite_global)
    {
        
        $this->limite_global = $limite_global;
        return $this;
    }
    
    /**
     * Gets limite_compra
     * @return Number
     */
    public function getLimiteCompra()
    {
        return $this->limite_compra;
    }
  
    /**
     * Sets limite_compra
     * @param Number $limite_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais.
     * @return $this
     */
    public function setLimiteCompra($limite_compra)
    {
        
        $this->limite_compra = $limite_compra;
        return $this;
    }
    
    /**
     * Gets limite_parcelado
     * @return Number
     */
    public function getLimiteParcelado()
    {
        return $this->limite_parcelado;
    }
  
    /**
     * Sets limite_parcelado
     * @param Number $limite_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas.
     * @return $this
     */
    public function setLimiteParcelado($limite_parcelado)
    {
        
        $this->limite_parcelado = $limite_parcelado;
        return $this;
    }
    
    /**
     * Gets limite_parcelas
     * @return Number
     */
    public function getLimiteParcelas()
    {
        return $this->limite_parcelas;
    }
  
    /**
     * Sets limite_parcelas
     * @param Number $limite_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade.
     * @return $this
     */
    public function setLimiteParcelas($limite_parcelas)
    {
        
        $this->limite_parcelas = $limite_parcelas;
        return $this;
    }
    
    /**
     * Gets limite_saque_global
     * @return Number
     */
    public function getLimiteSaqueGlobal()
    {
        return $this->limite_saque_global;
    }
  
    /**
     * Sets limite_saque_global
     * @param Number $limite_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
     * @return $this
     */
    public function setLimiteSaqueGlobal($limite_saque_global)
    {
        
        $this->limite_saque_global = $limite_saque_global;
        return $this;
    }
    
    /**
     * Gets limite_saque_periodo
     * @return Number
     */
    public function getLimiteSaquePeriodo()
    {
        return $this->limite_saque_periodo;
    }
  
    /**
     * Sets limite_saque_periodo
     * @param Number $limite_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento.
     * @return $this
     */
    public function setLimiteSaquePeriodo($limite_saque_periodo)
    {
        
        $this->limite_saque_periodo = $limite_saque_periodo;
        return $this;
    }
    
    /**
     * Gets limite_consignado
     * @return Number
     */
    public function getLimiteConsignado()
    {
        return $this->limite_consignado;
    }
  
    /**
     * Sets limite_consignado
     * @param Number $limite_consignado Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos.
     * @return $this
     */
    public function setLimiteConsignado($limite_consignado)
    {
        
        $this->limite_consignado = $limite_consignado;
        return $this;
    }
    
    /**
     * Gets limite_internacional_compra
     * @return Number
     */
    public function getLimiteInternacionalCompra()
    {
        return $this->limite_internacional_compra;
    }
  
    /**
     * Sets limite_internacional_compra
     * @param Number $limite_internacional_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais.
     * @return $this
     */
    public function setLimiteInternacionalCompra($limite_internacional_compra)
    {
        
        $this->limite_internacional_compra = $limite_internacional_compra;
        return $this;
    }
    
    /**
     * Gets limite_internacional_parcelado
     * @return Number
     */
    public function getLimiteInternacionalParcelado()
    {
        return $this->limite_internacional_parcelado;
    }
  
    /**
     * Sets limite_internacional_parcelado
     * @param Number $limite_internacional_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas.
     * @return $this
     */
    public function setLimiteInternacionalParcelado($limite_internacional_parcelado)
    {
        
        $this->limite_internacional_parcelado = $limite_internacional_parcelado;
        return $this;
    }
    
    /**
     * Gets limite_internacional_parcelas
     * @return Number
     */
    public function getLimiteInternacionalParcelas()
    {
        return $this->limite_internacional_parcelas;
    }
  
    /**
     * Sets limite_internacional_parcelas
     * @param Number $limite_internacional_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade.
     * @return $this
     */
    public function setLimiteInternacionalParcelas($limite_internacional_parcelas)
    {
        
        $this->limite_internacional_parcelas = $limite_internacional_parcelas;
        return $this;
    }
    
    /**
     * Gets limite_internacional_saque_global
     * @return Number
     */
    public function getLimiteInternacionalSaqueGlobal()
    {
        return $this->limite_internacional_saque_global;
    }
  
    /**
     * Sets limite_internacional_saque_global
     * @param Number $limite_internacional_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional.
     * @return $this
     */
    public function setLimiteInternacionalSaqueGlobal($limite_internacional_saque_global)
    {
        
        $this->limite_internacional_saque_global = $limite_internacional_saque_global;
        return $this;
    }
    
    /**
     * Gets limite_internacional_saque_periodo
     * @return Number
     */
    public function getLimiteInternacionalSaquePeriodo()
    {
        return $this->limite_internacional_saque_periodo;
    }
  
    /**
     * Sets limite_internacional_saque_periodo
     * @param Number $limite_internacional_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento.
     * @return $this
     */
    public function setLimiteInternacionalSaquePeriodo($limite_internacional_saque_periodo)
    {
        
        $this->limite_internacional_saque_periodo = $limite_internacional_saque_periodo;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_global
     * @return Number
     */
    public function getSaldoDisponivelGlobal()
    {
        return $this->saldo_disponivel_global;
    }
  
    /**
     * Sets saldo_disponivel_global
     * @param Number $saldo_disponivel_global Apresenta o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es.
     * @return $this
     */
    public function setSaldoDisponivelGlobal($saldo_disponivel_global)
    {
        
        $this->saldo_disponivel_global = $saldo_disponivel_global;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_compra
     * @return Number
     */
    public function getSaldoDisponivelCompra()
    {
        return $this->saldo_disponivel_compra;
    }
  
    /**
     * Sets saldo_disponivel_compra
     * @param Number $saldo_disponivel_compra Quando utilizado pelo emissor a modalidade limiteCompra, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de compra Nacional.
     * @return $this
     */
    public function setSaldoDisponivelCompra($saldo_disponivel_compra)
    {
        
        $this->saldo_disponivel_compra = $saldo_disponivel_compra;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_parcelado
     * @return Number
     */
    public function getSaldoDisponivelParcelado()
    {
        return $this->saldo_disponivel_parcelado;
    }
  
    /**
     * Sets saldo_disponivel_parcelado
     * @param Number $saldo_disponivel_parcelado Quando utilizado pelo emissor a modalidade limiteParcelado, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de compra Nacional.
     * @return $this
     */
    public function setSaldoDisponivelParcelado($saldo_disponivel_parcelado)
    {
        
        $this->saldo_disponivel_parcelado = $saldo_disponivel_parcelado;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_parcelas
     * @return Number
     */
    public function getSaldoDisponivelParcelas()
    {
        return $this->saldo_disponivel_parcelas;
    }
  
    /**
     * Sets saldo_disponivel_parcelas
     * @param Number $saldo_disponivel_parcelas Quando utilizado pelo emissor a modalidade limiteParcelas, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para utilizar como valor de parcelas Nacionais em um determinado ciclo de faturamento.
     * @return $this
     */
    public function setSaldoDisponivelParcelas($saldo_disponivel_parcelas)
    {
        
        $this->saldo_disponivel_parcelas = $saldo_disponivel_parcelas;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_saque
     * @return Number
     */
    public function getSaldoDisponivelSaque()
    {
        return $this->saldo_disponivel_saque;
    }
  
    /**
     * Sets saldo_disponivel_saque
     * @param Number $saldo_disponivel_saque Quando utilizado pelo emissor a modalidade limiteSaque, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
     * @return $this
     */
    public function setSaldoDisponivelSaque($saldo_disponivel_saque)
    {
        
        $this->saldo_disponivel_saque = $saldo_disponivel_saque;
        return $this;
    }
    
    /**
     * Gets saldo_pontos_fidelidade
     * @return Number
     */
    public function getSaldoPontosFidelidade()
    {
        return $this->saldo_pontos_fidelidade;
    }
  
    /**
     * Sets saldo_pontos_fidelidade
     * @param Number $saldo_pontos_fidelidade Quando utilizado um programa de fidelidade pelo emissor, este campo apresentar\u00C3\u00A1 o saldo atual de pontos que o portador possui.
     * @return $this
     */
    public function setSaldoPontosFidelidade($saldo_pontos_fidelidade)
    {
        
        $this->saldo_pontos_fidelidade = $saldo_pontos_fidelidade;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_compra_internacional
     * @return Number
     */
    public function getSaldoDisponivelCompraInternacional()
    {
        return $this->saldo_disponivel_compra_internacional;
    }
  
    /**
     * Sets saldo_disponivel_compra_internacional
     * @param Number $saldo_disponivel_compra_internacional Quando utilizado pelo emissor a modalidade limiteCompraInternacional, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de Compra Internacional.
     * @return $this
     */
    public function setSaldoDisponivelCompraInternacional($saldo_disponivel_compra_internacional)
    {
        
        $this->saldo_disponivel_compra_internacional = $saldo_disponivel_compra_internacional;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_saque_internacional
     * @return Number
     */
    public function getSaldoDisponivelSaqueInternacional()
    {
        return $this->saldo_disponivel_saque_internacional;
    }
  
    /**
     * Sets saldo_disponivel_saque_internacional
     * @param Number $saldo_disponivel_saque_internacional Quando utilizado pelo emissor a modalidade limiteSaqueInternacional, este campo apresentar\u00C3\u00A1 o valor de cr\u00C3\u00A9dito que o portador possui dispon\u00C3\u00ADvel para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional.
     * @return $this
     */
    public function setSaldoDisponivelSaqueInternacional($saldo_disponivel_saque_internacional)
    {
        
        $this->saldo_disponivel_saque_internacional = $saldo_disponivel_saque_internacional;
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