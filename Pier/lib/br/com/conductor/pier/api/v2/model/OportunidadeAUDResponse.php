<?php
/**
 * OportunidadeAUDResponse
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
 * OportunidadeAUDResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00E7\u00E3o da resposta do recurso Oportunidades
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OportunidadeAUDResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_tipo_oportunidade' => 'int',
        'id_status_oportunidade' => 'int',
        'data_cadastro' => 'string',
        'data_atualizacao' => 'string',
        'numero_receita_federal' => 'string',
        'data_inicio_vigencia' => 'string',
        'data_fim_vigencia' => 'string',
        'flag_ativo' => 'bool',
        'detalhes' => '\br.com.conductor.pier.api.v2.model\CdtDetalheOportunidadeAUD[]',
        'rev_date' => 'string',
        'rev_type' => 'int',
        'rev' => 'int'
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
        'id_tipo_oportunidade' => 'idTipoOportunidade',
        'id_status_oportunidade' => 'idStatusOportunidade',
        'data_cadastro' => 'dataCadastro',
        'data_atualizacao' => 'dataAtualizacao',
        'numero_receita_federal' => 'numeroReceitaFederal',
        'data_inicio_vigencia' => 'dataInicioVigencia',
        'data_fim_vigencia' => 'dataFimVigencia',
        'flag_ativo' => 'flagAtivo',
        'detalhes' => 'detalhes',
        'rev_date' => 'revDate',
        'rev_type' => 'revType',
        'rev' => 'rev'
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
        'id_tipo_oportunidade' => 'setIdTipoOportunidade',
        'id_status_oportunidade' => 'setIdStatusOportunidade',
        'data_cadastro' => 'setDataCadastro',
        'data_atualizacao' => 'setDataAtualizacao',
        'numero_receita_federal' => 'setNumeroReceitaFederal',
        'data_inicio_vigencia' => 'setDataInicioVigencia',
        'data_fim_vigencia' => 'setDataFimVigencia',
        'flag_ativo' => 'setFlagAtivo',
        'detalhes' => 'setDetalhes',
        'rev_date' => 'setRevDate',
        'rev_type' => 'setRevType',
        'rev' => 'setRev'
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
        'id_tipo_oportunidade' => 'getIdTipoOportunidade',
        'id_status_oportunidade' => 'getIdStatusOportunidade',
        'data_cadastro' => 'getDataCadastro',
        'data_atualizacao' => 'getDataAtualizacao',
        'numero_receita_federal' => 'getNumeroReceitaFederal',
        'data_inicio_vigencia' => 'getDataInicioVigencia',
        'data_fim_vigencia' => 'getDataFimVigencia',
        'flag_ativo' => 'getFlagAtivo',
        'detalhes' => 'getDetalhes',
        'rev_date' => 'getRevDate',
        'rev_type' => 'getRevType',
        'rev' => 'getRev'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00F3digo identificador da oportunidade
      * @var int
      */
    protected $id;
    
    /**
      * $id_tipo_oportunidade C\u00F3digo identificador do tipo oportunidade
      * @var int
      */
    protected $id_tipo_oportunidade;
    
    /**
      * $id_status_oportunidade C\u00F3digo identificador do status oportunidade
      * @var int
      */
    protected $id_status_oportunidade;
    
    /**
      * $data_cadastro Data cadastro da oportunidade.
      * @var string
      */
    protected $data_cadastro;
    
    /**
      * $data_atualizacao Data atualiza\u00E7\u00E3o da oportunidade.
      * @var string
      */
    protected $data_atualizacao;
    
    /**
      * $numero_receita_federal N\u00FAmero receita federal do cliente ao qual ser\u00E1 ofertada a oportunidade
      * @var string
      */
    protected $numero_receita_federal;
    
    /**
      * $data_inicio_vigencia In\u00EDcio da vig\u00EAncia da oportunidade
      * @var string
      */
    protected $data_inicio_vigencia;
    
    /**
      * $data_fim_vigencia fim da vig\u00EAncia da oportunidade
      * @var string
      */
    protected $data_fim_vigencia;
    
    /**
      * $flag_ativo Flag de verifica\u00E7\u00E3o se a oportunidade est\u00E1 ativa
      * @var bool
      */
    protected $flag_ativo;
    
    /**
      * $detalhes Lista de detalhes da oportunidade
      * @var \br.com.conductor.pier.api.v2.model\CdtDetalheOportunidadeAUD[]
      */
    protected $detalhes;
    
    /**
      * $rev_date Data da auditoria
      * @var string
      */
    protected $rev_date;
    
    /**
      * $rev_type Tipo da auditoria
      * @var int
      */
    protected $rev_type;
    
    /**
      * $rev Identificador da auditoria
      * @var int
      */
    protected $rev;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_tipo_oportunidade = $data["id_tipo_oportunidade"];
            $this->id_status_oportunidade = $data["id_status_oportunidade"];
            $this->data_cadastro = $data["data_cadastro"];
            $this->data_atualizacao = $data["data_atualizacao"];
            $this->numero_receita_federal = $data["numero_receita_federal"];
            $this->data_inicio_vigencia = $data["data_inicio_vigencia"];
            $this->data_fim_vigencia = $data["data_fim_vigencia"];
            $this->flag_ativo = $data["flag_ativo"];
            $this->detalhes = $data["detalhes"];
            $this->rev_date = $data["rev_date"];
            $this->rev_type = $data["rev_type"];
            $this->rev = $data["rev"];
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
     * @param int $id C\u00F3digo identificador da oportunidade
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
     * @param int $id_tipo_oportunidade C\u00F3digo identificador do tipo oportunidade
     * @return $this
     */
    public function setIdTipoOportunidade($id_tipo_oportunidade)
    {
        
        $this->id_tipo_oportunidade = $id_tipo_oportunidade;
        return $this;
    }
    
    /**
     * Gets id_status_oportunidade
     * @return int
     */
    public function getIdStatusOportunidade()
    {
        return $this->id_status_oportunidade;
    }
  
    /**
     * Sets id_status_oportunidade
     * @param int $id_status_oportunidade C\u00F3digo identificador do status oportunidade
     * @return $this
     */
    public function setIdStatusOportunidade($id_status_oportunidade)
    {
        
        $this->id_status_oportunidade = $id_status_oportunidade;
        return $this;
    }
    
    /**
     * Gets data_cadastro
     * @return string
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
  
    /**
     * Sets data_cadastro
     * @param string $data_cadastro Data cadastro da oportunidade.
     * @return $this
     */
    public function setDataCadastro($data_cadastro)
    {
        
        $this->data_cadastro = $data_cadastro;
        return $this;
    }
    
    /**
     * Gets data_atualizacao
     * @return string
     */
    public function getDataAtualizacao()
    {
        return $this->data_atualizacao;
    }
  
    /**
     * Sets data_atualizacao
     * @param string $data_atualizacao Data atualiza\u00E7\u00E3o da oportunidade.
     * @return $this
     */
    public function setDataAtualizacao($data_atualizacao)
    {
        
        $this->data_atualizacao = $data_atualizacao;
        return $this;
    }
    
    /**
     * Gets numero_receita_federal
     * @return string
     */
    public function getNumeroReceitaFederal()
    {
        return $this->numero_receita_federal;
    }
  
    /**
     * Sets numero_receita_federal
     * @param string $numero_receita_federal N\u00FAmero receita federal do cliente ao qual ser\u00E1 ofertada a oportunidade
     * @return $this
     */
    public function setNumeroReceitaFederal($numero_receita_federal)
    {
        
        $this->numero_receita_federal = $numero_receita_federal;
        return $this;
    }
    
    /**
     * Gets data_inicio_vigencia
     * @return string
     */
    public function getDataInicioVigencia()
    {
        return $this->data_inicio_vigencia;
    }
  
    /**
     * Sets data_inicio_vigencia
     * @param string $data_inicio_vigencia In\u00EDcio da vig\u00EAncia da oportunidade
     * @return $this
     */
    public function setDataInicioVigencia($data_inicio_vigencia)
    {
        
        $this->data_inicio_vigencia = $data_inicio_vigencia;
        return $this;
    }
    
    /**
     * Gets data_fim_vigencia
     * @return string
     */
    public function getDataFimVigencia()
    {
        return $this->data_fim_vigencia;
    }
  
    /**
     * Sets data_fim_vigencia
     * @param string $data_fim_vigencia fim da vig\u00EAncia da oportunidade
     * @return $this
     */
    public function setDataFimVigencia($data_fim_vigencia)
    {
        
        $this->data_fim_vigencia = $data_fim_vigencia;
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
     * @param bool $flag_ativo Flag de verifica\u00E7\u00E3o se a oportunidade est\u00E1 ativa
     * @return $this
     */
    public function setFlagAtivo($flag_ativo)
    {
        
        $this->flag_ativo = $flag_ativo;
        return $this;
    }
    
    /**
     * Gets detalhes
     * @return \br.com.conductor.pier.api.v2.model\CdtDetalheOportunidadeAUD[]
     */
    public function getDetalhes()
    {
        return $this->detalhes;
    }
  
    /**
     * Sets detalhes
     * @param \br.com.conductor.pier.api.v2.model\CdtDetalheOportunidadeAUD[] $detalhes Lista de detalhes da oportunidade
     * @return $this
     */
    public function setDetalhes($detalhes)
    {
        
        $this->detalhes = $detalhes;
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
     * @param string $rev_date Data da auditoria
     * @return $this
     */
    public function setRevDate($rev_date)
    {
        
        $this->rev_date = $rev_date;
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
     * @param int $rev_type Tipo da auditoria
     * @return $this
     */
    public function setRevType($rev_type)
    {
        
        $this->rev_type = $rev_type;
        return $this;
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
     * @param int $rev Identificador da auditoria
     * @return $this
     */
    public function setRev($rev)
    {
        
        $this->rev = $rev;
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
