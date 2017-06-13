<?php
/**
 * HistoricoEventos
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
 * HistoricoEventos Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o do objeto que abstrai o hist\u00C3\u00B3rico de eventos
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HistoricoEventos implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_historico' => 'int',
        'data_historico' => 'string',
        'tipo_historico' => 'string',
        'valor_anterior' => 'string',
        'valor_atribuido' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_historico' => 'idHistorico',
        'data_historico' => 'dataHistorico',
        'tipo_historico' => 'tipoHistorico',
        'valor_anterior' => 'valorAnterior',
        'valor_atribuido' => 'valorAtribuido'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_historico' => 'setIdHistorico',
        'data_historico' => 'setDataHistorico',
        'tipo_historico' => 'setTipoHistorico',
        'valor_anterior' => 'setValorAnterior',
        'valor_atribuido' => 'setValorAtribuido'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_historico' => 'getIdHistorico',
        'data_historico' => 'getDataHistorico',
        'tipo_historico' => 'getTipoHistorico',
        'valor_anterior' => 'getValorAnterior',
        'valor_atribuido' => 'getValorAtribuido'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_historico C\u00C3\u00B3digo identificador do evento
      * @var int
      */
    protected $id_historico;
    
    /**
      * $data_historico Data do evento
      * @var string
      */
    protected $data_historico;
    
    /**
      * $tipo_historico Nome do campo alterado
      * @var string
      */
    protected $tipo_historico;
    
    /**
      * $valor_anterior Valor anterior a modifica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $valor_anterior;
    
    /**
      * $valor_atribuido Valor atribu\u00C3\u00ADdo na modifica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $valor_atribuido;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_historico = $data["id_historico"];
            $this->data_historico = $data["data_historico"];
            $this->tipo_historico = $data["tipo_historico"];
            $this->valor_anterior = $data["valor_anterior"];
            $this->valor_atribuido = $data["valor_atribuido"];
        }
    }
    
    /**
     * Gets id_historico
     * @return int
     */
    public function getIdHistorico()
    {
        return $this->id_historico;
    }
  
    /**
     * Sets id_historico
     * @param int $id_historico C\u00C3\u00B3digo identificador do evento
     * @return $this
     */
    public function setIdHistorico($id_historico)
    {
        
        $this->id_historico = $id_historico;
        return $this;
    }
    
    /**
     * Gets data_historico
     * @return string
     */
    public function getDataHistorico()
    {
        return $this->data_historico;
    }
  
    /**
     * Sets data_historico
     * @param string $data_historico Data do evento
     * @return $this
     */
    public function setDataHistorico($data_historico)
    {
        
        $this->data_historico = $data_historico;
        return $this;
    }
    
    /**
     * Gets tipo_historico
     * @return string
     */
    public function getTipoHistorico()
    {
        return $this->tipo_historico;
    }
  
    /**
     * Sets tipo_historico
     * @param string $tipo_historico Nome do campo alterado
     * @return $this
     */
    public function setTipoHistorico($tipo_historico)
    {
        
        $this->tipo_historico = $tipo_historico;
        return $this;
    }
    
    /**
     * Gets valor_anterior
     * @return string
     */
    public function getValorAnterior()
    {
        return $this->valor_anterior;
    }
  
    /**
     * Sets valor_anterior
     * @param string $valor_anterior Valor anterior a modifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setValorAnterior($valor_anterior)
    {
        
        $this->valor_anterior = $valor_anterior;
        return $this;
    }
    
    /**
     * Gets valor_atribuido
     * @return string
     */
    public function getValorAtribuido()
    {
        return $this->valor_atribuido;
    }
  
    /**
     * Sets valor_atribuido
     * @param string $valor_atribuido Valor atribu\u00C3\u00ADdo na modifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setValorAtribuido($valor_atribuido)
    {
        
        $this->valor_atribuido = $valor_atribuido;
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
