<?php
/**
 * TransferenciaBancariaPersistValue_
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
 * TransferenciaBancariaPersistValue_ Class Doc Comment
 *
 * @category    Class
 * @description {{{transferencia_bancaria_persist_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransferenciaBancariaPersistValue_ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'valor_compra' => 'Number',
        'valor' => 'Number',
        'documento_favorecido' => 'string',
        'banco' => 'int',
        'numero_agencia' => 'string',
        'digito_agencia' => 'string',
        'numero_conta' => 'string',
        'digito_conta' => 'string',
        'flag_conta_poupanca' => 'int',
        'nome_favorecido' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'valor_compra' => 'valorCompra',
        'valor' => 'valor',
        'documento_favorecido' => 'documentoFavorecido',
        'banco' => 'banco',
        'numero_agencia' => 'numeroAgencia',
        'digito_agencia' => 'digitoAgencia',
        'numero_conta' => 'numeroConta',
        'digito_conta' => 'digitoConta',
        'flag_conta_poupanca' => 'flagContaPoupanca',
        'nome_favorecido' => 'nomeFavorecido'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'valor_compra' => 'setValorCompra',
        'valor' => 'setValor',
        'documento_favorecido' => 'setDocumentoFavorecido',
        'banco' => 'setBanco',
        'numero_agencia' => 'setNumeroAgencia',
        'digito_agencia' => 'setDigitoAgencia',
        'numero_conta' => 'setNumeroConta',
        'digito_conta' => 'setDigitoConta',
        'flag_conta_poupanca' => 'setFlagContaPoupanca',
        'nome_favorecido' => 'setNomeFavorecido'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'valor_compra' => 'getValorCompra',
        'valor' => 'getValor',
        'documento_favorecido' => 'getDocumentoFavorecido',
        'banco' => 'getBanco',
        'numero_agencia' => 'getNumeroAgencia',
        'digito_agencia' => 'getDigitoAgencia',
        'numero_conta' => 'getNumeroConta',
        'digito_conta' => 'getDigitoConta',
        'flag_conta_poupanca' => 'getFlagContaPoupanca',
        'nome_favorecido' => 'getNomeFavorecido'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $valor_compra {{{transferencia_bancaria_persist_valor_compra_value}}}
      * @var Number
      */
    protected $valor_compra;
    
    /**
      * $valor {{{transferencia_bancaria_persist_valor_value}}}
      * @var Number
      */
    protected $valor;
    
    /**
      * $documento_favorecido {{{transferencia_bancaria_persist_documento_favorecido_value}}}
      * @var string
      */
    protected $documento_favorecido;
    
    /**
      * $banco {{{transferencia_bancaria_persist_banco_value}}}
      * @var int
      */
    protected $banco;
    
    /**
      * $numero_agencia {{{transferencia_bancaria_persist_numero_agencia_value}}}
      * @var string
      */
    protected $numero_agencia;
    
    /**
      * $digito_agencia {{{transferencia_bancaria_persist_digito_agencia_value}}}
      * @var string
      */
    protected $digito_agencia;
    
    /**
      * $numero_conta {{{transferencia_bancaria_persist_numero_conta_value}}}
      * @var string
      */
    protected $numero_conta;
    
    /**
      * $digito_conta {{{transferencia_bancaria_persist_digito_conta_value}}}
      * @var string
      */
    protected $digito_conta;
    
    /**
      * $flag_conta_poupanca {{{transferencia_bancaria_persist_flag_conta_poupanca_value}}}
      * @var int
      */
    protected $flag_conta_poupanca;
    
    /**
      * $nome_favorecido {{{transferencia_bancaria_persist_nome_favorecido_value}}}
      * @var string
      */
    protected $nome_favorecido;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->valor_compra = $data["valor_compra"];
            $this->valor = $data["valor"];
            $this->documento_favorecido = $data["documento_favorecido"];
            $this->banco = $data["banco"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->digito_agencia = $data["digito_agencia"];
            $this->numero_conta = $data["numero_conta"];
            $this->digito_conta = $data["digito_conta"];
            $this->flag_conta_poupanca = $data["flag_conta_poupanca"];
            $this->nome_favorecido = $data["nome_favorecido"];
        }
    }
    
    /**
     * Gets valor_compra
     * @return Number
     */
    public function getValorCompra()
    {
        return $this->valor_compra;
    }
  
    /**
     * Sets valor_compra
     * @param Number $valor_compra {{{transferencia_bancaria_persist_valor_compra_value}}}
     * @return $this
     */
    public function setValorCompra($valor_compra)
    {
        
        $this->valor_compra = $valor_compra;
        return $this;
    }
    
    /**
     * Gets valor
     * @return Number
     */
    public function getValor()
    {
        return $this->valor;
    }
  
    /**
     * Sets valor
     * @param Number $valor {{{transferencia_bancaria_persist_valor_value}}}
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets documento_favorecido
     * @return string
     */
    public function getDocumentoFavorecido()
    {
        return $this->documento_favorecido;
    }
  
    /**
     * Sets documento_favorecido
     * @param string $documento_favorecido {{{transferencia_bancaria_persist_documento_favorecido_value}}}
     * @return $this
     */
    public function setDocumentoFavorecido($documento_favorecido)
    {
        
        $this->documento_favorecido = $documento_favorecido;
        return $this;
    }
    
    /**
     * Gets banco
     * @return int
     */
    public function getBanco()
    {
        return $this->banco;
    }
  
    /**
     * Sets banco
     * @param int $banco {{{transferencia_bancaria_persist_banco_value}}}
     * @return $this
     */
    public function setBanco($banco)
    {
        
        $this->banco = $banco;
        return $this;
    }
    
    /**
     * Gets numero_agencia
     * @return string
     */
    public function getNumeroAgencia()
    {
        return $this->numero_agencia;
    }
  
    /**
     * Sets numero_agencia
     * @param string $numero_agencia {{{transferencia_bancaria_persist_numero_agencia_value}}}
     * @return $this
     */
    public function setNumeroAgencia($numero_agencia)
    {
        
        $this->numero_agencia = $numero_agencia;
        return $this;
    }
    
    /**
     * Gets digito_agencia
     * @return string
     */
    public function getDigitoAgencia()
    {
        return $this->digito_agencia;
    }
  
    /**
     * Sets digito_agencia
     * @param string $digito_agencia {{{transferencia_bancaria_persist_digito_agencia_value}}}
     * @return $this
     */
    public function setDigitoAgencia($digito_agencia)
    {
        
        $this->digito_agencia = $digito_agencia;
        return $this;
    }
    
    /**
     * Gets numero_conta
     * @return string
     */
    public function getNumeroConta()
    {
        return $this->numero_conta;
    }
  
    /**
     * Sets numero_conta
     * @param string $numero_conta {{{transferencia_bancaria_persist_numero_conta_value}}}
     * @return $this
     */
    public function setNumeroConta($numero_conta)
    {
        
        $this->numero_conta = $numero_conta;
        return $this;
    }
    
    /**
     * Gets digito_conta
     * @return string
     */
    public function getDigitoConta()
    {
        return $this->digito_conta;
    }
  
    /**
     * Sets digito_conta
     * @param string $digito_conta {{{transferencia_bancaria_persist_digito_conta_value}}}
     * @return $this
     */
    public function setDigitoConta($digito_conta)
    {
        
        $this->digito_conta = $digito_conta;
        return $this;
    }
    
    /**
     * Gets flag_conta_poupanca
     * @return int
     */
    public function getFlagContaPoupanca()
    {
        return $this->flag_conta_poupanca;
    }
  
    /**
     * Sets flag_conta_poupanca
     * @param int $flag_conta_poupanca {{{transferencia_bancaria_persist_flag_conta_poupanca_value}}}
     * @return $this
     */
    public function setFlagContaPoupanca($flag_conta_poupanca)
    {
        
        $this->flag_conta_poupanca = $flag_conta_poupanca;
        return $this;
    }
    
    /**
     * Gets nome_favorecido
     * @return string
     */
    public function getNomeFavorecido()
    {
        return $this->nome_favorecido;
    }
  
    /**
     * Sets nome_favorecido
     * @param string $nome_favorecido {{{transferencia_bancaria_persist_nome_favorecido_value}}}
     * @return $this
     */
    public function setNomeFavorecido($nome_favorecido)
    {
        
        $this->nome_favorecido = $nome_favorecido;
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
