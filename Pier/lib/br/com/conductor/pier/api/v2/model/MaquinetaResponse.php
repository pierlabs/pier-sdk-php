<?php
/**
 * MaquinetaResponse
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
 * MaquinetaResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto de Resposta de Maquineta
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MaquinetaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_estabelecimento' => 'int',
        'id_tipo_maquineta' => 'int',
        'valor' => 'Number',
        'data_hora_implantacao' => 'string',
        'data_hora_cadastramento' => 'string',
        'terminal' => 'string',
        'usuario_apl' => 'string'
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
        'id_estabelecimento' => 'idEstabelecimento',
        'id_tipo_maquineta' => 'idTipoMaquineta',
        'valor' => 'valor',
        'data_hora_implantacao' => 'dataHoraImplantacao',
        'data_hora_cadastramento' => 'dataHoraCadastramento',
        'terminal' => 'terminal',
        'usuario_apl' => 'usuarioApl'
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
        'id_estabelecimento' => 'setIdEstabelecimento',
        'id_tipo_maquineta' => 'setIdTipoMaquineta',
        'valor' => 'setValor',
        'data_hora_implantacao' => 'setDataHoraImplantacao',
        'data_hora_cadastramento' => 'setDataHoraCadastramento',
        'terminal' => 'setTerminal',
        'usuario_apl' => 'setUsuarioApl'
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
        'id_estabelecimento' => 'getIdEstabelecimento',
        'id_tipo_maquineta' => 'getIdTipoMaquineta',
        'valor' => 'getValor',
        'data_hora_implantacao' => 'getDataHoraImplantacao',
        'data_hora_cadastramento' => 'getDataHoraCadastramento',
        'terminal' => 'getTerminal',
        'usuario_apl' => 'getUsuarioApl'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Maquineta.
      * @var int
      */
    protected $id;
    
    /**
      * $id_estabelecimento C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do EStabelecimento.
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $id_tipo_maquineta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo Maquineta.
      * @var int
      */
    protected $id_tipo_maquineta;
    
    /**
      * $valor Valor de manuten\u00C3\u00A7\u00C3\u00A3o da Maquineta.
      * @var Number
      */
    protected $valor;
    
    /**
      * $data_hora_implantacao Data de implanta\u00C3\u00A7\u00C3\u00A3o da Maquineta.
      * @var string
      */
    protected $data_hora_implantacao;
    
    /**
      * $data_hora_cadastramento Data de cadastramento da Maquineta.
      * @var string
      */
    protected $data_hora_cadastramento;
    
    /**
      * $terminal N\u00C3\u00BAmero do terminal vinculado a Maquineta.
      * @var string
      */
    protected $terminal;
    
    /**
      * $usuario_apl Usu\u00C3\u00A1rio da aplica\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $usuario_apl;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->id_tipo_maquineta = $data["id_tipo_maquineta"];
            $this->valor = $data["valor"];
            $this->data_hora_implantacao = $data["data_hora_implantacao"];
            $this->data_hora_cadastramento = $data["data_hora_cadastramento"];
            $this->terminal = $data["terminal"];
            $this->usuario_apl = $data["usuario_apl"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Maquineta.
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_estabelecimento
     * @return int
     */
    public function getIdEstabelecimento()
    {
        return $this->id_estabelecimento;
    }
  
    /**
     * Sets id_estabelecimento
     * @param int $id_estabelecimento C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do EStabelecimento.
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
        return $this;
    }
    
    /**
     * Gets id_tipo_maquineta
     * @return int
     */
    public function getIdTipoMaquineta()
    {
        return $this->id_tipo_maquineta;
    }
  
    /**
     * Sets id_tipo_maquineta
     * @param int $id_tipo_maquineta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo Maquineta.
     * @return $this
     */
    public function setIdTipoMaquineta($id_tipo_maquineta)
    {
        
        $this->id_tipo_maquineta = $id_tipo_maquineta;
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
     * @param Number $valor Valor de manuten\u00C3\u00A7\u00C3\u00A3o da Maquineta.
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets data_hora_implantacao
     * @return string
     */
    public function getDataHoraImplantacao()
    {
        return $this->data_hora_implantacao;
    }
  
    /**
     * Sets data_hora_implantacao
     * @param string $data_hora_implantacao Data de implanta\u00C3\u00A7\u00C3\u00A3o da Maquineta.
     * @return $this
     */
    public function setDataHoraImplantacao($data_hora_implantacao)
    {
        
        $this->data_hora_implantacao = $data_hora_implantacao;
        return $this;
    }
    
    /**
     * Gets data_hora_cadastramento
     * @return string
     */
    public function getDataHoraCadastramento()
    {
        return $this->data_hora_cadastramento;
    }
  
    /**
     * Sets data_hora_cadastramento
     * @param string $data_hora_cadastramento Data de cadastramento da Maquineta.
     * @return $this
     */
    public function setDataHoraCadastramento($data_hora_cadastramento)
    {
        
        $this->data_hora_cadastramento = $data_hora_cadastramento;
        return $this;
    }
    
    /**
     * Gets terminal
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
  
    /**
     * Sets terminal
     * @param string $terminal N\u00C3\u00BAmero do terminal vinculado a Maquineta.
     * @return $this
     */
    public function setTerminal($terminal)
    {
        
        $this->terminal = $terminal;
        return $this;
    }
    
    /**
     * Gets usuario_apl
     * @return string
     */
    public function getUsuarioApl()
    {
        return $this->usuario_apl;
    }
  
    /**
     * Sets usuario_apl
     * @param string $usuario_apl Usu\u00C3\u00A1rio da aplica\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setUsuarioApl($usuario_apl)
    {
        
        $this->usuario_apl = $usuario_apl;
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