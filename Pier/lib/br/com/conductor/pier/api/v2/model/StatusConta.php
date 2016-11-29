<?php
/**
 * StatusConta
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
 * StatusConta Class Doc Comment
 *
 * @category    Class
 * @description Status Conta
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StatusConta implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'flag_altera_limite' => 'int',
        'id' => 'int',
        'mensagem_consulta_negada' => 'string',
        'nome' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'flag_altera_limite' => 'flagAlteraLimite',
        'id' => 'id',
        'mensagem_consulta_negada' => 'mensagemConsultaNegada',
        'nome' => 'nome'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'flag_altera_limite' => 'setFlagAlteraLimite',
        'id' => 'setId',
        'mensagem_consulta_negada' => 'setMensagemConsultaNegada',
        'nome' => 'setNome'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'flag_altera_limite' => 'getFlagAlteraLimite',
        'id' => 'getId',
        'mensagem_consulta_negada' => 'getMensagemConsultaNegada',
        'nome' => 'getNome'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $flag_altera_limite Par\u00C3\u00A2metro que define se o Status da Conta permite realizar a Altera\u00C3\u00A7\u00C3\u00A3o de Limites do Portador, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $flag_altera_limite;
    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id).
      * @var int
      */
    protected $id;
    
    /**
      * $mensagem_consulta_negada Apresenta o texto com o motivo que ser\u00C3\u00A1 apresentado na resposta as opera\u00C3\u00A7\u00C3\u00B5es de Listar e Consultar LimitesDisponibilidades.
      * @var string
      */
    protected $mensagem_consulta_negada;
    
    /**
      * $nome Nome atribu\u00C3\u00ADdo ao Status da Conta.
      * @var string
      */
    protected $nome;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->flag_altera_limite = $data["flag_altera_limite"];
            $this->id = $data["id"];
            $this->mensagem_consulta_negada = $data["mensagem_consulta_negada"];
            $this->nome = $data["nome"];
        }
    }
    
    /**
     * Gets flag_altera_limite
     * @return int
     */
    public function getFlagAlteraLimite()
    {
        return $this->flag_altera_limite;
    }
  
    /**
     * Sets flag_altera_limite
     * @param int $flag_altera_limite Par\u00C3\u00A2metro que define se o Status da Conta permite realizar a Altera\u00C3\u00A7\u00C3\u00A3o de Limites do Portador, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setFlagAlteraLimite($flag_altera_limite)
    {
        
        $this->flag_altera_limite = $flag_altera_limite;
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets mensagem_consulta_negada
     * @return string
     */
    public function getMensagemConsultaNegada()
    {
        return $this->mensagem_consulta_negada;
    }
  
    /**
     * Sets mensagem_consulta_negada
     * @param string $mensagem_consulta_negada Apresenta o texto com o motivo que ser\u00C3\u00A1 apresentado na resposta as opera\u00C3\u00A7\u00C3\u00B5es de Listar e Consultar LimitesDisponibilidades.
     * @return $this
     */
    public function setMensagemConsultaNegada($mensagem_consulta_negada)
    {
        
        $this->mensagem_consulta_negada = $mensagem_consulta_negada;
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
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status da Conta.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
