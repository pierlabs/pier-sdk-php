<?php
/**
 * ArquivoAUDResponse
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
 * ArquivoAUDResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto Response da auditoria do arquivo.
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ArquivoAUDResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'rev' => 'int',
        'rev_type' => 'int',
        'id' => 'int',
        'nome' => 'string',
        'id_resposta_acesso_digital' => 'string',
        'data_hora_resposta_acesso_digital' => 'string',
        'id_resposta_neurotech' => 'string',
        'data_hora_resposta_neurotech' => 'string',
        'uri' => 'string',
        'data_hora_inclusao' => 'string',
        'data_hora_alteracao' => 'string',
        'extensao' => 'string',
        'parametros' => '\br.com.conductor.pier.api.v2.model\ArquivoParametroAUDResponse[]'
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
        'id' => 'id',
        'nome' => 'nome',
        'id_resposta_acesso_digital' => 'idRespostaAcessoDigital',
        'data_hora_resposta_acesso_digital' => 'dataHoraRespostaAcessoDigital',
        'id_resposta_neurotech' => 'idRespostaNeurotech',
        'data_hora_resposta_neurotech' => 'dataHoraRespostaNeurotech',
        'uri' => 'uri',
        'data_hora_inclusao' => 'dataHoraInclusao',
        'data_hora_alteracao' => 'dataHoraAlteracao',
        'extensao' => 'extensao',
        'parametros' => 'parametros'
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
        'id' => 'setId',
        'nome' => 'setNome',
        'id_resposta_acesso_digital' => 'setIdRespostaAcessoDigital',
        'data_hora_resposta_acesso_digital' => 'setDataHoraRespostaAcessoDigital',
        'id_resposta_neurotech' => 'setIdRespostaNeurotech',
        'data_hora_resposta_neurotech' => 'setDataHoraRespostaNeurotech',
        'uri' => 'setUri',
        'data_hora_inclusao' => 'setDataHoraInclusao',
        'data_hora_alteracao' => 'setDataHoraAlteracao',
        'extensao' => 'setExtensao',
        'parametros' => 'setParametros'
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
        'id' => 'getId',
        'nome' => 'getNome',
        'id_resposta_acesso_digital' => 'getIdRespostaAcessoDigital',
        'data_hora_resposta_acesso_digital' => 'getDataHoraRespostaAcessoDigital',
        'id_resposta_neurotech' => 'getIdRespostaNeurotech',
        'data_hora_resposta_neurotech' => 'getDataHoraRespostaNeurotech',
        'uri' => 'getUri',
        'data_hora_inclusao' => 'getDataHoraInclusao',
        'data_hora_alteracao' => 'getDataHoraAlteracao',
        'extensao' => 'getExtensao',
        'parametros' => 'getParametros'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $rev Identificador da auditoria arquivo
      * @var int
      */
    protected $rev;
    
    /**
      * $rev_type Identificador do tipo de auditoria (0 - Criado, 1 - Alterado, 2 - Exclu\u00C3\u00ADdo)
      * @var int
      */
    protected $rev_type;
    
    /**
      * $id Identificador do arquivo auditado
      * @var int
      */
    protected $id;
    
    /**
      * $nome Nome do arquivo auditado
      * @var string
      */
    protected $nome;
    
    /**
      * $id_resposta_acesso_digital Identificador da resposta da Acesso Digital
      * @var string
      */
    protected $id_resposta_acesso_digital;
    
    /**
      * $data_hora_resposta_acesso_digital Data de resposta da Acesso Digital
      * @var string
      */
    protected $data_hora_resposta_acesso_digital;
    
    /**
      * $id_resposta_neurotech Identificador da resposta da Neurotech
      * @var string
      */
    protected $id_resposta_neurotech;
    
    /**
      * $data_hora_resposta_neurotech Data de resposta da Neurotech
      * @var string
      */
    protected $data_hora_resposta_neurotech;
    
    /**
      * $uri Uri de acesso
      * @var string
      */
    protected $uri;
    
    /**
      * $data_hora_inclusao Data de inclus\u00C3\u00A3o do arquivo auditado
      * @var string
      */
    protected $data_hora_inclusao;
    
    /**
      * $data_hora_alteracao Data de altera\u00C3\u00A7\u00C3\u00A3o do arquivo auditado
      * @var string
      */
    protected $data_hora_alteracao;
    
    /**
      * $extensao Extens\u00C3\u00A3o do arquivo auditado
      * @var string
      */
    protected $extensao;
    
    /**
      * $parametros Lista  de par\u00C3\u00A2metros do arquivo auditado
      * @var \br.com.conductor.pier.api.v2.model\ArquivoParametroAUDResponse[]
      */
    protected $parametros;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->rev = $data["rev"];
            $this->rev_type = $data["rev_type"];
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->id_resposta_acesso_digital = $data["id_resposta_acesso_digital"];
            $this->data_hora_resposta_acesso_digital = $data["data_hora_resposta_acesso_digital"];
            $this->id_resposta_neurotech = $data["id_resposta_neurotech"];
            $this->data_hora_resposta_neurotech = $data["data_hora_resposta_neurotech"];
            $this->uri = $data["uri"];
            $this->data_hora_inclusao = $data["data_hora_inclusao"];
            $this->data_hora_alteracao = $data["data_hora_alteracao"];
            $this->extensao = $data["extensao"];
            $this->parametros = $data["parametros"];
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
     * @param int $rev Identificador da auditoria arquivo
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
     * @param int $rev_type Identificador do tipo de auditoria (0 - Criado, 1 - Alterado, 2 - Exclu\u00C3\u00ADdo)
     * @return $this
     */
    public function setRevType($rev_type)
    {
        
        $this->rev_type = $rev_type;
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
     * @param int $id Identificador do arquivo auditado
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param string $nome Nome do arquivo auditado
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets id_resposta_acesso_digital
     * @return string
     */
    public function getIdRespostaAcessoDigital()
    {
        return $this->id_resposta_acesso_digital;
    }
  
    /**
     * Sets id_resposta_acesso_digital
     * @param string $id_resposta_acesso_digital Identificador da resposta da Acesso Digital
     * @return $this
     */
    public function setIdRespostaAcessoDigital($id_resposta_acesso_digital)
    {
        
        $this->id_resposta_acesso_digital = $id_resposta_acesso_digital;
        return $this;
    }
    
    /**
     * Gets data_hora_resposta_acesso_digital
     * @return string
     */
    public function getDataHoraRespostaAcessoDigital()
    {
        return $this->data_hora_resposta_acesso_digital;
    }
  
    /**
     * Sets data_hora_resposta_acesso_digital
     * @param string $data_hora_resposta_acesso_digital Data de resposta da Acesso Digital
     * @return $this
     */
    public function setDataHoraRespostaAcessoDigital($data_hora_resposta_acesso_digital)
    {
        
        $this->data_hora_resposta_acesso_digital = $data_hora_resposta_acesso_digital;
        return $this;
    }
    
    /**
     * Gets id_resposta_neurotech
     * @return string
     */
    public function getIdRespostaNeurotech()
    {
        return $this->id_resposta_neurotech;
    }
  
    /**
     * Sets id_resposta_neurotech
     * @param string $id_resposta_neurotech Identificador da resposta da Neurotech
     * @return $this
     */
    public function setIdRespostaNeurotech($id_resposta_neurotech)
    {
        
        $this->id_resposta_neurotech = $id_resposta_neurotech;
        return $this;
    }
    
    /**
     * Gets data_hora_resposta_neurotech
     * @return string
     */
    public function getDataHoraRespostaNeurotech()
    {
        return $this->data_hora_resposta_neurotech;
    }
  
    /**
     * Sets data_hora_resposta_neurotech
     * @param string $data_hora_resposta_neurotech Data de resposta da Neurotech
     * @return $this
     */
    public function setDataHoraRespostaNeurotech($data_hora_resposta_neurotech)
    {
        
        $this->data_hora_resposta_neurotech = $data_hora_resposta_neurotech;
        return $this;
    }
    
    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
  
    /**
     * Sets uri
     * @param string $uri Uri de acesso
     * @return $this
     */
    public function setUri($uri)
    {
        
        $this->uri = $uri;
        return $this;
    }
    
    /**
     * Gets data_hora_inclusao
     * @return string
     */
    public function getDataHoraInclusao()
    {
        return $this->data_hora_inclusao;
    }
  
    /**
     * Sets data_hora_inclusao
     * @param string $data_hora_inclusao Data de inclus\u00C3\u00A3o do arquivo auditado
     * @return $this
     */
    public function setDataHoraInclusao($data_hora_inclusao)
    {
        
        $this->data_hora_inclusao = $data_hora_inclusao;
        return $this;
    }
    
    /**
     * Gets data_hora_alteracao
     * @return string
     */
    public function getDataHoraAlteracao()
    {
        return $this->data_hora_alteracao;
    }
  
    /**
     * Sets data_hora_alteracao
     * @param string $data_hora_alteracao Data de altera\u00C3\u00A7\u00C3\u00A3o do arquivo auditado
     * @return $this
     */
    public function setDataHoraAlteracao($data_hora_alteracao)
    {
        
        $this->data_hora_alteracao = $data_hora_alteracao;
        return $this;
    }
    
    /**
     * Gets extensao
     * @return string
     */
    public function getExtensao()
    {
        return $this->extensao;
    }
  
    /**
     * Sets extensao
     * @param string $extensao Extens\u00C3\u00A3o do arquivo auditado
     * @return $this
     */
    public function setExtensao($extensao)
    {
        
        $this->extensao = $extensao;
        return $this;
    }
    
    /**
     * Gets parametros
     * @return \br.com.conductor.pier.api.v2.model\ArquivoParametroAUDResponse[]
     */
    public function getParametros()
    {
        return $this->parametros;
    }
  
    /**
     * Sets parametros
     * @param \br.com.conductor.pier.api.v2.model\ArquivoParametroAUDResponse[] $parametros Lista  de par\u00C3\u00A2metros do arquivo auditado
     * @return $this
     */
    public function setParametros($parametros)
    {
        
        $this->parametros = $parametros;
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