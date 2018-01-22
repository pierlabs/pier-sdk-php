<?php
/**
 * IntegrarDocumentoRequest
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
 * IntegrarDocumentoRequest Class Doc Comment
 *
 * @category    Class
 * @description Objeto de requisi\u00C3\u00A7\u00C3\u00A3o.
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IntegrarDocumentoRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_template' => 'int',
        'arquivo' => 'string',
        'nome' => 'string',
        'propriedades' => '\br.com.conductor.pier.api.v2.model\PropriedadeDocumentoRequest[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_template' => 'idTemplate',
        'arquivo' => 'arquivo',
        'nome' => 'nome',
        'propriedades' => 'propriedades'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_template' => 'setIdTemplate',
        'arquivo' => 'setArquivo',
        'nome' => 'setNome',
        'propriedades' => 'setPropriedades'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_template' => 'getIdTemplate',
        'arquivo' => 'getArquivo',
        'nome' => 'getNome',
        'propriedades' => 'getPropriedades'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_template Identificador do template de documento
      * @var int
      */
    protected $id_template;
    
    /**
      * $arquivo Conte\u00C3\u00BAdo do arquivo convertido em Base 64
      * @var string
      */
    protected $arquivo;
    
    /**
      * $nome Nome do arquivo.
      * @var string
      */
    protected $nome;
    
    /**
      * $propriedades Lista de par\u00C3\u00A2metros para montagem do documento.
      * @var \br.com.conductor.pier.api.v2.model\PropriedadeDocumentoRequest[]
      */
    protected $propriedades;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_template = $data["id_template"];
            $this->arquivo = $data["arquivo"];
            $this->nome = $data["nome"];
            $this->propriedades = $data["propriedades"];
        }
    }
    
    /**
     * Gets id_template
     * @return int
     */
    public function getIdTemplate()
    {
        return $this->id_template;
    }
  
    /**
     * Sets id_template
     * @param int $id_template Identificador do template de documento
     * @return $this
     */
    public function setIdTemplate($id_template)
    {
        
        $this->id_template = $id_template;
        return $this;
    }
    
    /**
     * Gets arquivo
     * @return string
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }
  
    /**
     * Sets arquivo
     * @param string $arquivo Conte\u00C3\u00BAdo do arquivo convertido em Base 64
     * @return $this
     */
    public function setArquivo($arquivo)
    {
        
        $this->arquivo = $arquivo;
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
     * @param string $nome Nome do arquivo.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets propriedades
     * @return \br.com.conductor.pier.api.v2.model\PropriedadeDocumentoRequest[]
     */
    public function getPropriedades()
    {
        return $this->propriedades;
    }
  
    /**
     * Sets propriedades
     * @param \br.com.conductor.pier.api.v2.model\PropriedadeDocumentoRequest[] $propriedades Lista de par\u00C3\u00A2metros para montagem do documento.
     * @return $this
     */
    public function setPropriedades($propriedades)
    {
        
        $this->propriedades = $propriedades;
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
