<?php
/**
 * PageArquivoResponse
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
 * PageArquivoResponse Class Doc Comment
 *
 * @category    Class
 * @description Lista arquivos armazenados na contig\u00C3\u00AAncia
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PageArquivoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'content' => '\br.com.conductor.pier.api.v2.model\ArquivoResponse[]',
        'first' => 'bool',
        'first_page' => 'bool',
        'has_content' => 'bool',
        'has_next_page' => 'bool',
        'has_previous_page' => 'bool',
        'last' => 'bool',
        'next_page' => 'int',
        'number' => 'int',
        'number_of_elements' => 'int',
        'previous_page' => 'int',
        'size' => 'int',
        'total_elements' => 'int',
        'total_pages' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'content' => 'content',
        'first' => 'first',
        'first_page' => 'firstPage',
        'has_content' => 'hasContent',
        'has_next_page' => 'hasNextPage',
        'has_previous_page' => 'hasPreviousPage',
        'last' => 'last',
        'next_page' => 'nextPage',
        'number' => 'number',
        'number_of_elements' => 'numberOfElements',
        'previous_page' => 'previousPage',
        'size' => 'size',
        'total_elements' => 'totalElements',
        'total_pages' => 'totalPages'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'content' => 'setContent',
        'first' => 'setFirst',
        'first_page' => 'setFirstPage',
        'has_content' => 'setHasContent',
        'has_next_page' => 'setHasNextPage',
        'has_previous_page' => 'setHasPreviousPage',
        'last' => 'setLast',
        'next_page' => 'setNextPage',
        'number' => 'setNumber',
        'number_of_elements' => 'setNumberOfElements',
        'previous_page' => 'setPreviousPage',
        'size' => 'setSize',
        'total_elements' => 'setTotalElements',
        'total_pages' => 'setTotalPages'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'content' => 'getContent',
        'first' => 'getFirst',
        'first_page' => 'getFirstPage',
        'has_content' => 'getHasContent',
        'has_next_page' => 'getHasNextPage',
        'has_previous_page' => 'getHasPreviousPage',
        'last' => 'getLast',
        'next_page' => 'getNextPage',
        'number' => 'getNumber',
        'number_of_elements' => 'getNumberOfElements',
        'previous_page' => 'getPreviousPage',
        'size' => 'getSize',
        'total_elements' => 'getTotalElements',
        'total_pages' => 'getTotalPages'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $content 
      * @var \br.com.conductor.pier.api.v2.model\ArquivoResponse[]
      */
    protected $content;
    
    /**
      * $first 
      * @var bool
      */
    protected $first;
    
    /**
      * $first_page 
      * @var bool
      */
    protected $first_page;
    
    /**
      * $has_content 
      * @var bool
      */
    protected $has_content;
    
    /**
      * $has_next_page 
      * @var bool
      */
    protected $has_next_page;
    
    /**
      * $has_previous_page 
      * @var bool
      */
    protected $has_previous_page;
    
    /**
      * $last 
      * @var bool
      */
    protected $last;
    
    /**
      * $next_page 
      * @var int
      */
    protected $next_page;
    
    /**
      * $number 
      * @var int
      */
    protected $number;
    
    /**
      * $number_of_elements 
      * @var int
      */
    protected $number_of_elements;
    
    /**
      * $previous_page 
      * @var int
      */
    protected $previous_page;
    
    /**
      * $size 
      * @var int
      */
    protected $size;
    
    /**
      * $total_elements 
      * @var int
      */
    protected $total_elements;
    
    /**
      * $total_pages 
      * @var int
      */
    protected $total_pages;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->content = $data["content"];
            $this->first = $data["first"];
            $this->first_page = $data["first_page"];
            $this->has_content = $data["has_content"];
            $this->has_next_page = $data["has_next_page"];
            $this->has_previous_page = $data["has_previous_page"];
            $this->last = $data["last"];
            $this->next_page = $data["next_page"];
            $this->number = $data["number"];
            $this->number_of_elements = $data["number_of_elements"];
            $this->previous_page = $data["previous_page"];
            $this->size = $data["size"];
            $this->total_elements = $data["total_elements"];
            $this->total_pages = $data["total_pages"];
        }
    }
    
    /**
     * Gets content
     * @return \br.com.conductor.pier.api.v2.model\ArquivoResponse[]
     */
    public function getContent()
    {
        return $this->content;
    }
  
    /**
     * Sets content
     * @param \br.com.conductor.pier.api.v2.model\ArquivoResponse[] $content 
     * @return $this
     */
    public function setContent($content)
    {
        
        $this->content = $content;
        return $this;
    }
    
    /**
     * Gets first
     * @return bool
     */
    public function getFirst()
    {
        return $this->first;
    }
  
    /**
     * Sets first
     * @param bool $first 
     * @return $this
     */
    public function setFirst($first)
    {
        
        $this->first = $first;
        return $this;
    }
    
    /**
     * Gets first_page
     * @return bool
     */
    public function getFirstPage()
    {
        return $this->first_page;
    }
  
    /**
     * Sets first_page
     * @param bool $first_page 
     * @return $this
     */
    public function setFirstPage($first_page)
    {
        
        $this->first_page = $first_page;
        return $this;
    }
    
    /**
     * Gets has_content
     * @return bool
     */
    public function getHasContent()
    {
        return $this->has_content;
    }
  
    /**
     * Sets has_content
     * @param bool $has_content 
     * @return $this
     */
    public function setHasContent($has_content)
    {
        
        $this->has_content = $has_content;
        return $this;
    }
    
    /**
     * Gets has_next_page
     * @return bool
     */
    public function getHasNextPage()
    {
        return $this->has_next_page;
    }
  
    /**
     * Sets has_next_page
     * @param bool $has_next_page 
     * @return $this
     */
    public function setHasNextPage($has_next_page)
    {
        
        $this->has_next_page = $has_next_page;
        return $this;
    }
    
    /**
     * Gets has_previous_page
     * @return bool
     */
    public function getHasPreviousPage()
    {
        return $this->has_previous_page;
    }
  
    /**
     * Sets has_previous_page
     * @param bool $has_previous_page 
     * @return $this
     */
    public function setHasPreviousPage($has_previous_page)
    {
        
        $this->has_previous_page = $has_previous_page;
        return $this;
    }
    
    /**
     * Gets last
     * @return bool
     */
    public function getLast()
    {
        return $this->last;
    }
  
    /**
     * Sets last
     * @param bool $last 
     * @return $this
     */
    public function setLast($last)
    {
        
        $this->last = $last;
        return $this;
    }
    
    /**
     * Gets next_page
     * @return int
     */
    public function getNextPage()
    {
        return $this->next_page;
    }
  
    /**
     * Sets next_page
     * @param int $next_page 
     * @return $this
     */
    public function setNextPage($next_page)
    {
        
        $this->next_page = $next_page;
        return $this;
    }
    
    /**
     * Gets number
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
  
    /**
     * Sets number
     * @param int $number 
     * @return $this
     */
    public function setNumber($number)
    {
        
        $this->number = $number;
        return $this;
    }
    
    /**
     * Gets number_of_elements
     * @return int
     */
    public function getNumberOfElements()
    {
        return $this->number_of_elements;
    }
  
    /**
     * Sets number_of_elements
     * @param int $number_of_elements 
     * @return $this
     */
    public function setNumberOfElements($number_of_elements)
    {
        
        $this->number_of_elements = $number_of_elements;
        return $this;
    }
    
    /**
     * Gets previous_page
     * @return int
     */
    public function getPreviousPage()
    {
        return $this->previous_page;
    }
  
    /**
     * Sets previous_page
     * @param int $previous_page 
     * @return $this
     */
    public function setPreviousPage($previous_page)
    {
        
        $this->previous_page = $previous_page;
        return $this;
    }
    
    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param int $size 
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    
    /**
     * Gets total_elements
     * @return int
     */
    public function getTotalElements()
    {
        return $this->total_elements;
    }
  
    /**
     * Sets total_elements
     * @param int $total_elements 
     * @return $this
     */
    public function setTotalElements($total_elements)
    {
        
        $this->total_elements = $total_elements;
        return $this;
    }
    
    /**
     * Gets total_pages
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }
  
    /**
     * Sets total_pages
     * @param int $total_pages 
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        
        $this->total_pages = $total_pages;
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
