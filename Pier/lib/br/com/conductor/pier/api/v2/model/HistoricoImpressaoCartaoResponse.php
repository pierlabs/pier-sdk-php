<?php
/**
 * HistoricoImpressaoCartaoResponse
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
 * HistoricoImpressaoCartaoResponse Class Doc Comment
 *
 * @category    Class
 * @description Hist\u00F3rico Impress\u00E3o Cart\u00E3o
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HistoricoImpressaoCartaoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_cartao' => 'int',
        'id_status_impressao_cartao' => 'int',
        'mensagem_historico' => 'string',
        'data_historico' => 'string'
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
        'id_cartao' => 'idCartao',
        'id_status_impressao_cartao' => 'idStatusImpressaoCartao',
        'mensagem_historico' => 'mensagemHistorico',
        'data_historico' => 'dataHistorico'
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
        'id_cartao' => 'setIdCartao',
        'id_status_impressao_cartao' => 'setIdStatusImpressaoCartao',
        'mensagem_historico' => 'setMensagemHistorico',
        'data_historico' => 'setDataHistorico'
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
        'id_cartao' => 'getIdCartao',
        'id_status_impressao_cartao' => 'getIdStatusImpressaoCartao',
        'mensagem_historico' => 'getMensagemHistorico',
        'data_historico' => 'getDataHistorico'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00F3digo de Identifica\u00E7\u00E3o do Hist\u00F3rico de Impress\u00E3o Avulsa de Cart\u00F5es (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_cartao C\u00F3digo de Identifica\u00E7\u00E3o do Cart\u00E3o (id).
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $id_status_impressao_cartao C\u00F3digo de Identifica\u00E7\u00E3o do Status de Impress\u00E3o do Cart\u00E3o (id).
      * @var int
      */
    protected $id_status_impressao_cartao;
    
    /**
      * $mensagem_historico Apresenta uma mensagem que descreve a etapa do processo de impress\u00E3o do cart\u00E3o que fora realizado.
      * @var string
      */
    protected $mensagem_historico;
    
    /**
      * $data_historico Apresenta a data que o registro de Hist\u00F3rico de Impress\u00E3o de um Cart\u00E3o fora inserido.
      * @var string
      */
    protected $data_historico;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_cartao = $data["id_cartao"];
            $this->id_status_impressao_cartao = $data["id_status_impressao_cartao"];
            $this->mensagem_historico = $data["mensagem_historico"];
            $this->data_historico = $data["data_historico"];
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
     * @param int $id C\u00F3digo de Identifica\u00E7\u00E3o do Hist\u00F3rico de Impress\u00E3o Avulsa de Cart\u00F5es (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_cartao
     * @return int
     */
    public function getIdCartao()
    {
        return $this->id_cartao;
    }
  
    /**
     * Sets id_cartao
     * @param int $id_cartao C\u00F3digo de Identifica\u00E7\u00E3o do Cart\u00E3o (id).
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
        return $this;
    }
    
    /**
     * Gets id_status_impressao_cartao
     * @return int
     */
    public function getIdStatusImpressaoCartao()
    {
        return $this->id_status_impressao_cartao;
    }
  
    /**
     * Sets id_status_impressao_cartao
     * @param int $id_status_impressao_cartao C\u00F3digo de Identifica\u00E7\u00E3o do Status de Impress\u00E3o do Cart\u00E3o (id).
     * @return $this
     */
    public function setIdStatusImpressaoCartao($id_status_impressao_cartao)
    {
        
        $this->id_status_impressao_cartao = $id_status_impressao_cartao;
        return $this;
    }
    
    /**
     * Gets mensagem_historico
     * @return string
     */
    public function getMensagemHistorico()
    {
        return $this->mensagem_historico;
    }
  
    /**
     * Sets mensagem_historico
     * @param string $mensagem_historico Apresenta uma mensagem que descreve a etapa do processo de impress\u00E3o do cart\u00E3o que fora realizado.
     * @return $this
     */
    public function setMensagemHistorico($mensagem_historico)
    {
        
        $this->mensagem_historico = $mensagem_historico;
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
     * @param string $data_historico Apresenta a data que o registro de Hist\u00F3rico de Impress\u00E3o de um Cart\u00E3o fora inserido.
     * @return $this
     */
    public function setDataHistorico($data_historico)
    {
        
        $this->data_historico = $data_historico;
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
