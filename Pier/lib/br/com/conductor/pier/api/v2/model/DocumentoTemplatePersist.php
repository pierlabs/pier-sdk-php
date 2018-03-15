<?php
/**
 * DocumentoTemplatePersist
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
 * DocumentoTemplatePersist Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00E7\u00E3o do template do documento.
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentoTemplatePersist implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_tipo_template' => 'int',
        'template' => 'string',
        'integracoes' => '\br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_tipo_template' => 'idTipoTemplate',
        'template' => 'template',
        'integracoes' => 'integracoes'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_tipo_template' => 'setIdTipoTemplate',
        'template' => 'setTemplate',
        'integracoes' => 'setIntegracoes'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_tipo_template' => 'getIdTipoTemplate',
        'template' => 'getTemplate',
        'integracoes' => 'getIntegracoes'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_tipo_template ID para o Tipo de Template vinculado ao template.
      * @var int
      */
    protected $id_tipo_template;
    
    /**
      * $template Template para o conte\u00FAdo do documento.
      * @var string
      */
    protected $template;
    
    /**
      * $integracoes Lista de configura\u00E7\u00F5es de integra\u00E7\u00E3o
      * @var \br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[]
      */
    protected $integracoes;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_tipo_template = $data["id_tipo_template"];
            $this->template = $data["template"];
            $this->integracoes = $data["integracoes"];
        }
    }
    
    /**
     * Gets id_tipo_template
     * @return int
     */
    public function getIdTipoTemplate()
    {
        return $this->id_tipo_template;
    }
  
    /**
     * Sets id_tipo_template
     * @param int $id_tipo_template ID para o Tipo de Template vinculado ao template.
     * @return $this
     */
    public function setIdTipoTemplate($id_tipo_template)
    {
        
        $this->id_tipo_template = $id_tipo_template;
        return $this;
    }
    
    /**
     * Gets template
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
  
    /**
     * Sets template
     * @param string $template Template para o conte\u00FAdo do documento.
     * @return $this
     */
    public function setTemplate($template)
    {
        
        $this->template = $template;
        return $this;
    }
    
    /**
     * Gets integracoes
     * @return \br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[]
     */
    public function getIntegracoes()
    {
        return $this->integracoes;
    }
  
    /**
     * Sets integracoes
     * @param \br.com.conductor.pier.api.v2.model\ReferenciaIdPersist[] $integracoes Lista de configura\u00E7\u00F5es de integra\u00E7\u00E3o
     * @return $this
     */
    public function setIntegracoes($integracoes)
    {
        
        $this->integracoes = $integracoes;
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
