<?php
/**
 * StatusOportunidadeAUDResponse
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
 * StatusOportunidadeAUDResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00E7\u00E3o da resposta do recurso StatusTipoOportunidadeAUD
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StatusOportunidadeAUDResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'rev' => 'int',
        'rev_type' => 'int',
        'rev_date' => 'string',
        'id' => 'int',
        'id_tipo_oportunidade' => 'int',
        'nome' => 'string',
        'descricao' => 'string',
        'flag_ativo' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'rev' => 'rev',
        'rev_type' => 'revType',
        'rev_date' => 'revDate',
        'id' => 'id',
        'id_tipo_oportunidade' => 'idTipoOportunidade',
        'nome' => 'nome',
        'descricao' => 'descricao',
        'flag_ativo' => 'flagAtivo'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'rev' => 'setRev',
        'rev_type' => 'setRevType',
        'rev_date' => 'setRevDate',
        'id' => 'setId',
        'id_tipo_oportunidade' => 'setIdTipoOportunidade',
        'nome' => 'setNome',
        'descricao' => 'setDescricao',
        'flag_ativo' => 'setFlagAtivo'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'rev' => 'getRev',
        'rev_type' => 'getRevType',
        'rev_date' => 'getRevDate',
        'id' => 'getId',
        'id_tipo_oportunidade' => 'getIdTipoOportunidade',
        'nome' => 'getNome',
        'descricao' => 'getDescricao',
        'flag_ativo' => 'getFlagAtivo'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $rev C\u00F3digo identificador da auditoria dos tipos oportunidades
      * @var int
      */
    protected $rev;
    
    /**
      * $rev_type C\u00F3digo que representa o tipo de a\u00E7\u00E3o realizada no recurso de tipos oportunidades
      * @var int
      */
    protected $rev_type;
    
    /**
      * $rev_date Data da a\u00E7\u00E3o realizada no recurso de tipos oportunidades
      * @var string
      */
    protected $rev_date;
    
    /**
      * $id C\u00F3digo identificador do StatusOportunidade
      * @var int
      */
    protected $id;
    
    /**
      * $id_tipo_oportunidade C\u00F3digo identificador do TipoOportunidade
      * @var int
      */
    protected $id_tipo_oportunidade;
    
    /**
      * $nome Nome do status oportunidade
      * @var string
      */
    protected $nome;
    
    /**
      * $descricao Descricao do StatusOportunidade
      * @var string
      */
    protected $descricao;
    
    /**
      * $flag_ativo Flag que representa se o tipo oportunidade est\u00E1 ativo
      * @var bool
      */
    protected $flag_ativo;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->rev = $data["rev"];
            $this->rev_type = $data["rev_type"];
            $this->rev_date = $data["rev_date"];
            $this->id = $data["id"];
            $this->id_tipo_oportunidade = $data["id_tipo_oportunidade"];
            $this->nome = $data["nome"];
            $this->descricao = $data["descricao"];
            $this->flag_ativo = $data["flag_ativo"];
        }
    }
    
    /**
     * Gets rev
     * @return int
     */
    public function getRev()
    {
        return $this->rev;
    }
  
    /**
     * Sets rev
     * @param int $rev C\u00F3digo identificador da auditoria dos tipos oportunidades
     * @return $this
     */
    public function setRev($rev)
    {
        
        $this->rev = $rev;
        return $this;
    }
    
    /**
     * Gets rev_type
     * @return int
     */
    public function getRevType()
    {
        return $this->rev_type;
    }
  
    /**
     * Sets rev_type
     * @param int $rev_type C\u00F3digo que representa o tipo de a\u00E7\u00E3o realizada no recurso de tipos oportunidades
     * @return $this
     */
    public function setRevType($rev_type)
    {
        
        $this->rev_type = $rev_type;
        return $this;
    }
    
    /**
     * Gets rev_date
     * @return string
     */
    public function getRevDate()
    {
        return $this->rev_date;
    }
  
    /**
     * Sets rev_date
     * @param string $rev_date Data da a\u00E7\u00E3o realizada no recurso de tipos oportunidades
     * @return $this
     */
    public function setRevDate($rev_date)
    {
        
        $this->rev_date = $rev_date;
        return $this;
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
     * @param int $id C\u00F3digo identificador do StatusOportunidade
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_tipo_oportunidade
     * @return int
     */
    public function getIdTipoOportunidade()
    {
        return $this->id_tipo_oportunidade;
    }
  
    /**
     * Sets id_tipo_oportunidade
     * @param int $id_tipo_oportunidade C\u00F3digo identificador do TipoOportunidade
     * @return $this
     */
    public function setIdTipoOportunidade($id_tipo_oportunidade)
    {
        
        $this->id_tipo_oportunidade = $id_tipo_oportunidade;
        return $this;
    }
    
    /**
     * Gets nome
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
  
    /**
     * Sets nome
     * @param string $nome Nome do status oportunidade
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
     * @param string $descricao Descricao do StatusOportunidade
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
        return $this;
    }
    
    /**
     * Gets flag_ativo
     * @return bool
     */
    public function getFlagAtivo()
    {
        return $this->flag_ativo;
    }
  
    /**
     * Sets flag_ativo
     * @param bool $flag_ativo Flag que representa se o tipo oportunidade est\u00E1 ativo
     * @return $this
     */
    public function setFlagAtivo($flag_ativo)
    {
        
        $this->flag_ativo = $flag_ativo;
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
