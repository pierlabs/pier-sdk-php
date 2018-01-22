<?php
/**
 * ParametroProdutoResponse
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
 * ParametroProdutoResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto de Resposta Par\u00C3\u00A2metro Produto
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ParametroProdutoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_produto' => 'int',
        'tipo_origem_transacao' => 'string',
        'descricao' => 'string',
        'valor_parametro' => 'Number',
        'data_validade' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_produto' => 'idProduto',
        'tipo_origem_transacao' => 'tipoOrigemTransacao',
        'descricao' => 'descricao',
        'valor_parametro' => 'valorParametro',
        'data_validade' => 'dataValidade'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_produto' => 'setIdProduto',
        'tipo_origem_transacao' => 'setTipoOrigemTransacao',
        'descricao' => 'setDescricao',
        'valor_parametro' => 'setValorParametro',
        'data_validade' => 'setDataValidade'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_produto' => 'getIdProduto',
        'tipo_origem_transacao' => 'getTipoOrigemTransacao',
        'descricao' => 'getDescricao',
        'valor_parametro' => 'getValorParametro',
        'data_validade' => 'getDataValidade'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
      * @var int
      */
    protected $id_produto;
    
    /**
      * $tipo_origem_transacao Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON_US ou OFF_US).
      * @var string
      */
    protected $tipo_origem_transacao;
    
    /**
      * $descricao Descri\u00C3\u00A7\u00C3\u00A3o do Tipo da Transa\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $descricao;
    
    /**
      * $valor_parametro Valor do Par\u00C3\u00A2metro.
      * @var Number
      */
    protected $valor_parametro;
    
    /**
      * $data_validade Data de Validade do Par\u00C3\u00A2metro do Produto.
      * @var string
      */
    protected $data_validade;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_produto = $data["id_produto"];
            $this->tipo_origem_transacao = $data["tipo_origem_transacao"];
            $this->descricao = $data["descricao"];
            $this->valor_parametro = $data["valor_parametro"];
            $this->data_validade = $data["data_validade"];
        }
    }
    
    /**
     * Gets id_produto
     * @return int
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }
  
    /**
     * Sets id_produto
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets tipo_origem_transacao
     * @return string
     */
    public function getTipoOrigemTransacao()
    {
        return $this->tipo_origem_transacao;
    }
  
    /**
     * Sets tipo_origem_transacao
     * @param string $tipo_origem_transacao Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON_US ou OFF_US).
     * @return $this
     */
    public function setTipoOrigemTransacao($tipo_origem_transacao)
    {
        $allowed_values = array("ON_US", "OFF_US");
        if (!in_array($tipo_origem_transacao, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'tipo_origem_transacao', must be one of 'ON_US', 'OFF_US'");
        }
        $this->tipo_origem_transacao = $tipo_origem_transacao;
        return $this;
    }
    
    /**
     * Gets descricao
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
  
    /**
     * Sets descricao
     * @param string $descricao Descri\u00C3\u00A7\u00C3\u00A3o do Tipo da Transa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
        return $this;
    }
    
    /**
     * Gets valor_parametro
     * @return Number
     */
    public function getValorParametro()
    {
        return $this->valor_parametro;
    }
  
    /**
     * Sets valor_parametro
     * @param Number $valor_parametro Valor do Par\u00C3\u00A2metro.
     * @return $this
     */
    public function setValorParametro($valor_parametro)
    {
        
        $this->valor_parametro = $valor_parametro;
        return $this;
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
     * @param string $data_validade Data de Validade do Par\u00C3\u00A2metro do Produto.
     * @return $this
     */
    public function setDataValidade($data_validade)
    {
        
        $this->data_validade = $data_validade;
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
