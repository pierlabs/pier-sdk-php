<?php
/**
 * ParametroEmissorResponse
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
 * ParametroEmissorResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{parametro_emissor_resposta_descricao}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ParametroEmissorResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'codigo' => 'string',
        'data_validade' => 'string',
        'descricao' => 'string',
        'tipo' => 'string',
        'valor_parametro' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'codigo' => 'codigo',
        'data_validade' => 'dataValidade',
        'descricao' => 'descricao',
        'tipo' => 'tipo',
        'valor_parametro' => 'valorParametro'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'codigo' => 'setCodigo',
        'data_validade' => 'setDataValidade',
        'descricao' => 'setDescricao',
        'tipo' => 'setTipo',
        'valor_parametro' => 'setValorParametro'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'codigo' => 'getCodigo',
        'data_validade' => 'getDataValidade',
        'descricao' => 'getDescricao',
        'tipo' => 'getTipo',
        'valor_parametro' => 'getValorParametro'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $codigo {{{parametro_emissor_resposta_codigo_descricao}}}
      * @var string
      */
    protected $codigo;
    
    /**
      * $data_validade {{{parametro_emissor_resposta_data_validade_descricao}}}
      * @var string
      */
    protected $data_validade;
    
    /**
      * $descricao {{{parametro_emissor_resposta_descricao_descricao}}}
      * @var string
      */
    protected $descricao;
    
    /**
      * $tipo {{{parametro_emissor_resposta_tipo_descricao}}}
      * @var string
      */
    protected $tipo;
    
    /**
      * $valor_parametro {{{parametro_emissor_resposta_valor_parametro_descricao}}}
      * @var string
      */
    protected $valor_parametro;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->codigo = $data["codigo"];
            $this->data_validade = $data["data_validade"];
            $this->descricao = $data["descricao"];
            $this->tipo = $data["tipo"];
            $this->valor_parametro = $data["valor_parametro"];
        }
    }
    
    /**
     * Gets codigo
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
  
    /**
     * Sets codigo
     * @param string $codigo {{{parametro_emissor_resposta_codigo_descricao}}}
     * @return $this
     */
    public function setCodigo($codigo)
    {
        
        $this->codigo = $codigo;
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
     * @param string $data_validade {{{parametro_emissor_resposta_data_validade_descricao}}}
     * @return $this
     */
    public function setDataValidade($data_validade)
    {
        
        $this->data_validade = $data_validade;
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
     * @param string $descricao {{{parametro_emissor_resposta_descricao_descricao}}}
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
        return $this;
    }
    
    /**
     * Gets tipo
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
  
    /**
     * Sets tipo
     * @param string $tipo {{{parametro_emissor_resposta_tipo_descricao}}}
     * @return $this
     */
    public function setTipo($tipo)
    {
        
        $this->tipo = $tipo;
        return $this;
    }
    
    /**
     * Gets valor_parametro
     * @return string
     */
    public function getValorParametro()
    {
        return $this->valor_parametro;
    }
  
    /**
     * Sets valor_parametro
     * @param string $valor_parametro {{{parametro_emissor_resposta_valor_parametro_descricao}}}
     * @return $this
     */
    public function setValorParametro($valor_parametro)
    {
        
        $this->valor_parametro = $valor_parametro;
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