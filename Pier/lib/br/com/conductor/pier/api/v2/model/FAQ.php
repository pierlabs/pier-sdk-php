<?php
/**
 * FAQ
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
 * FAQ Class Doc Comment
 *
 * @category    Class
 * @description Objeto FAQ
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FAQ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_faq' => 'int',
        'id_emissor' => 'int',
        'pergunta' => 'string',
        'resposta' => 'string',
        'relevancia' => 'int',
        'plataforma' => 'string',
        'categoria' => 'string',
        'status' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_faq' => 'idFaq',
        'id_emissor' => 'idEmissor',
        'pergunta' => 'pergunta',
        'resposta' => 'resposta',
        'relevancia' => 'relevancia',
        'plataforma' => 'plataforma',
        'categoria' => 'categoria',
        'status' => 'status'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_faq' => 'setIdFaq',
        'id_emissor' => 'setIdEmissor',
        'pergunta' => 'setPergunta',
        'resposta' => 'setResposta',
        'relevancia' => 'setRelevancia',
        'plataforma' => 'setPlataforma',
        'categoria' => 'setCategoria',
        'status' => 'setStatus'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_faq' => 'getIdFaq',
        'id_emissor' => 'getIdEmissor',
        'pergunta' => 'getPergunta',
        'resposta' => 'getResposta',
        'relevancia' => 'getRelevancia',
        'plataforma' => 'getPlataforma',
        'categoria' => 'getCategoria',
        'status' => 'getStatus'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_faq C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da FAQ (id).
      * @var int
      */
    protected $id_faq;
    
    /**
      * $id_emissor C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Emissor de qual a FAQ \u00C3\u00A9 relacionada (id).
      * @var int
      */
    protected $id_emissor;
    
    /**
      * $pergunta Conte\u00C3\u00BAdo da pergunta.
      * @var string
      */
    protected $pergunta;
    
    /**
      * $resposta Conte\u00C3\u00BAdo da resposta.
      * @var string
      */
    protected $resposta;
    
    /**
      * $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta.
      * @var int
      */
    protected $relevancia;
    
    /**
      * $plataforma Plataforma em que a FAQ se encaixa.
      * @var string
      */
    protected $plataforma;
    
    /**
      * $categoria Categoria de assunto do qual a FAQ se trata.
      * @var string
      */
    protected $categoria;
    
    /**
      * $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ.
      * @var string
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_faq = $data["id_faq"];
            $this->id_emissor = $data["id_emissor"];
            $this->pergunta = $data["pergunta"];
            $this->resposta = $data["resposta"];
            $this->relevancia = $data["relevancia"];
            $this->plataforma = $data["plataforma"];
            $this->categoria = $data["categoria"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets id_faq
     * @return int
     */
    public function getIdFaq()
    {
        return $this->id_faq;
    }
  
    /**
     * Sets id_faq
     * @param int $id_faq C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da FAQ (id).
     * @return $this
     */
    public function setIdFaq($id_faq)
    {
        
        $this->id_faq = $id_faq;
        return $this;
    }
    
    /**
     * Gets id_emissor
     * @return int
     */
    public function getIdEmissor()
    {
        return $this->id_emissor;
    }
  
    /**
     * Sets id_emissor
     * @param int $id_emissor C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Emissor de qual a FAQ \u00C3\u00A9 relacionada (id).
     * @return $this
     */
    public function setIdEmissor($id_emissor)
    {
        
        $this->id_emissor = $id_emissor;
        return $this;
    }
    
    /**
     * Gets pergunta
     * @return string
     */
    public function getPergunta()
    {
        return $this->pergunta;
    }
  
    /**
     * Sets pergunta
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta.
     * @return $this
     */
    public function setPergunta($pergunta)
    {
        
        $this->pergunta = $pergunta;
        return $this;
    }
    
    /**
     * Gets resposta
     * @return string
     */
    public function getResposta()
    {
        return $this->resposta;
    }
  
    /**
     * Sets resposta
     * @param string $resposta Conte\u00C3\u00BAdo da resposta.
     * @return $this
     */
    public function setResposta($resposta)
    {
        
        $this->resposta = $resposta;
        return $this;
    }
    
    /**
     * Gets relevancia
     * @return int
     */
    public function getRelevancia()
    {
        return $this->relevancia;
    }
  
    /**
     * Sets relevancia
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta.
     * @return $this
     */
    public function setRelevancia($relevancia)
    {
        
        $this->relevancia = $relevancia;
        return $this;
    }
    
    /**
     * Gets plataforma
     * @return string
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }
  
    /**
     * Sets plataforma
     * @param string $plataforma Plataforma em que a FAQ se encaixa.
     * @return $this
     */
    public function setPlataforma($plataforma)
    {
        
        $this->plataforma = $plataforma;
        return $this;
    }
    
    /**
     * Gets categoria
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
  
    /**
     * Sets categoria
     * @param string $categoria Categoria de assunto do qual a FAQ se trata.
     * @return $this
     */
    public function setCategoria($categoria)
    {
        
        $this->categoria = $categoria;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("ATIVO", "INATIVO");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ATIVO', 'INATIVO'");
        }
        $this->status = $status;
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
