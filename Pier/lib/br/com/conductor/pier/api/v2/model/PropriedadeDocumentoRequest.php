<?php
/**
 * PropriedadeDocumentoRequest
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
 * PropriedadeDocumentoRequest Class Doc Comment
 *
 * @category    Class
 * @description Objeto que encapsula as propriedades do detalhamento do documento.
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PropriedadeDocumentoRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'chave' => 'string',
        'valor' => 'string',
        'detalhes_tipo' => 'string',
        'flag_indice' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'chave' => 'chave',
        'valor' => 'valor',
        'detalhes_tipo' => 'detalhesTipo',
        'flag_indice' => 'flagIndice'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'chave' => 'setChave',
        'valor' => 'setValor',
        'detalhes_tipo' => 'setDetalhesTipo',
        'flag_indice' => 'setFlagIndice'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'chave' => 'getChave',
        'valor' => 'getValor',
        'detalhes_tipo' => 'getDetalhesTipo',
        'flag_indice' => 'getFlagIndice'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $chave Valor da propriedade do Documento.
      * @var string
      */
    protected $chave;
    
    /**
      * $valor Valor da propriedade do Documento.
      * @var string
      */
    protected $valor;
    
    /**
      * $detalhes_tipo Tipo da propriedade do Documento.
      * @var string
      */
    protected $detalhes_tipo;
    
    /**
      * $flag_indice Atributo que indica se o par\u00E2metro \u00E9 um \u00EDndice (default = false)
      * @var bool
      */
    protected $flag_indice;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->chave = $data["chave"];
            $this->valor = $data["valor"];
            $this->detalhes_tipo = $data["detalhes_tipo"];
            $this->flag_indice = $data["flag_indice"];
        }
    }
    
    /**
     * Gets chave
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }
  
    /**
     * Sets chave
     * @param string $chave Valor da propriedade do Documento.
     * @return $this
     */
    public function setChave($chave)
    {
        
        $this->chave = $chave;
        return $this;
    }
    
    /**
     * Gets valor
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }
  
    /**
     * Sets valor
     * @param string $valor Valor da propriedade do Documento.
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets detalhes_tipo
     * @return string
     */
    public function getDetalhesTipo()
    {
        return $this->detalhes_tipo;
    }
  
    /**
     * Sets detalhes_tipo
     * @param string $detalhes_tipo Tipo da propriedade do Documento.
     * @return $this
     */
    public function setDetalhesTipo($detalhes_tipo)
    {
        $allowed_values = array("IMAGEM", "TEXTO", "NUMERO");
        if (!in_array($detalhes_tipo, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'detalhes_tipo', must be one of 'IMAGEM', 'TEXTO', 'NUMERO'");
        }
        $this->detalhes_tipo = $detalhes_tipo;
        return $this;
    }
    
    /**
     * Gets flag_indice
     * @return bool
     */
    public function getFlagIndice()
    {
        return $this->flag_indice;
    }
  
    /**
     * Sets flag_indice
     * @param bool $flag_indice Atributo que indica se o par\u00E2metro \u00E9 um \u00EDndice (default = false)
     * @return $this
     */
    public function setFlagIndice($flag_indice)
    {
        
        $this->flag_indice = $flag_indice;
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
