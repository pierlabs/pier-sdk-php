<?php
/**
 * PessoaDetalheResponse
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
 * PessoaDetalheResponse Class Doc Comment
 *
 * @category    Class
 * @description PessoaDetalheResponse
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PessoaDetalheResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'content' => '\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse[]',
        'first' => 'bool',
        'first_page' => 'bool',
        'has_content' => 'bool',
        'has_next_page' => 'bool',
        'has_previous_page' => 'bool',
        'id_pessoa' => 'int',
        'last' => 'bool',
        'next_page' => 'int',
        'number' => 'int',
        'number_of_elements' => 'int',
        'previous_page' => 'int',
        'size' => 'int',
        'total_elements' => 'int',
        'total_pages' => 'int',
        'nome_mae' => 'string',
        'id_estado_civil' => 'int',
        'profissao' => 'string',
        'id_natureza_ocupacao' => 'int',
        'id_nacionalidade' => 'int',
        'numero_agencia' => 'int',
        'numero_conta_corrente' => 'string',
        'email' => 'string',
        'nome_empresa' => 'string'
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
        'id_pessoa' => 'idPessoa',
        'last' => 'last',
        'next_page' => 'nextPage',
        'number' => 'number',
        'number_of_elements' => 'numberOfElements',
        'previous_page' => 'previousPage',
        'size' => 'size',
        'total_elements' => 'totalElements',
        'total_pages' => 'totalPages',
        'nome_mae' => 'nomeMae',
        'id_estado_civil' => 'idEstadoCivil',
        'profissao' => 'profissao',
        'id_natureza_ocupacao' => 'idNaturezaOcupacao',
        'id_nacionalidade' => 'idNacionalidade',
        'numero_agencia' => 'numeroAgencia',
        'numero_conta_corrente' => 'numeroContaCorrente',
        'email' => 'email',
        'nome_empresa' => 'nomeEmpresa'
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
        'id_pessoa' => 'setIdPessoa',
        'last' => 'setLast',
        'next_page' => 'setNextPage',
        'number' => 'setNumber',
        'number_of_elements' => 'setNumberOfElements',
        'previous_page' => 'setPreviousPage',
        'size' => 'setSize',
        'total_elements' => 'setTotalElements',
        'total_pages' => 'setTotalPages',
        'nome_mae' => 'setNomeMae',
        'id_estado_civil' => 'setIdEstadoCivil',
        'profissao' => 'setProfissao',
        'id_natureza_ocupacao' => 'setIdNaturezaOcupacao',
        'id_nacionalidade' => 'setIdNacionalidade',
        'numero_agencia' => 'setNumeroAgencia',
        'numero_conta_corrente' => 'setNumeroContaCorrente',
        'email' => 'setEmail',
        'nome_empresa' => 'setNomeEmpresa'
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
        'id_pessoa' => 'getIdPessoa',
        'last' => 'getLast',
        'next_page' => 'getNextPage',
        'number' => 'getNumber',
        'number_of_elements' => 'getNumberOfElements',
        'previous_page' => 'getPreviousPage',
        'size' => 'getSize',
        'total_elements' => 'getTotalElements',
        'total_pages' => 'getTotalPages',
        'nome_mae' => 'getNomeMae',
        'id_estado_civil' => 'getIdEstadoCivil',
        'profissao' => 'getProfissao',
        'id_natureza_ocupacao' => 'getIdNaturezaOcupacao',
        'id_nacionalidade' => 'getIdNacionalidade',
        'numero_agencia' => 'getNumeroAgencia',
        'numero_conta_corrente' => 'getNumeroContaCorrente',
        'email' => 'getEmail',
        'nome_empresa' => 'getNomeEmpresa'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $content 
      * @var \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse[]
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
      * $id_pessoa C\u00C3\u00B3digo identificador da pessoa
      * @var int
      */
    protected $id_pessoa;
    
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
      * $nome_mae Apresenta o nome da m\u00C3\u00A3e da pessoa fisica
      * @var string
      */
    protected $nome_mae;
    
    /**
      * $id_estado_civil Id Estado civil da pessoa fisica
      * @var int
      */
    protected $id_estado_civil;
    
    /**
      * $profissao Profiss\u00C3\u00A3o da pessoa fisica
      * @var string
      */
    protected $profissao;
    
    /**
      * $id_natureza_ocupacao Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica
      * @var int
      */
    protected $id_natureza_ocupacao;
    
    /**
      * $id_nacionalidade Id Nacionalidade da pessoa fisica
      * @var int
      */
    protected $id_nacionalidade;
    
    /**
      * $numero_agencia N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
      * @var int
      */
    protected $numero_agencia;
    
    /**
      * $numero_conta_corrente N\u00C3\u00BAmero da conta corrente.
      * @var string
      */
    protected $numero_conta_corrente;
    
    /**
      * $email Email da pessoa fisica
      * @var string
      */
    protected $email;
    
    /**
      * $nome_empresa Nome que deve ser impresso no cart\u00C3\u00A3o
      * @var string
      */
    protected $nome_empresa;
    

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
            $this->id_pessoa = $data["id_pessoa"];
            $this->last = $data["last"];
            $this->next_page = $data["next_page"];
            $this->number = $data["number"];
            $this->number_of_elements = $data["number_of_elements"];
            $this->previous_page = $data["previous_page"];
            $this->size = $data["size"];
            $this->total_elements = $data["total_elements"];
            $this->total_pages = $data["total_pages"];
            $this->nome_mae = $data["nome_mae"];
            $this->id_estado_civil = $data["id_estado_civil"];
            $this->profissao = $data["profissao"];
            $this->id_natureza_ocupacao = $data["id_natureza_ocupacao"];
            $this->id_nacionalidade = $data["id_nacionalidade"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->numero_conta_corrente = $data["numero_conta_corrente"];
            $this->email = $data["email"];
            $this->nome_empresa = $data["nome_empresa"];
        }
    }
    
    /**
     * Gets content
     * @return \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse[]
     */
    public function getContent()
    {
        return $this->content;
    }
  
    /**
     * Sets content
     * @param \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse[] $content 
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
     * Gets id_pessoa
     * @return int
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }
  
    /**
     * Sets id_pessoa
     * @param int $id_pessoa C\u00C3\u00B3digo identificador da pessoa
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
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
     * Gets nome_mae
     * @return string
     */
    public function getNomeMae()
    {
        return $this->nome_mae;
    }
  
    /**
     * Sets nome_mae
     * @param string $nome_mae Apresenta o nome da m\u00C3\u00A3e da pessoa fisica
     * @return $this
     */
    public function setNomeMae($nome_mae)
    {
        
        $this->nome_mae = $nome_mae;
        return $this;
    }
    
    /**
     * Gets id_estado_civil
     * @return int
     */
    public function getIdEstadoCivil()
    {
        return $this->id_estado_civil;
    }
  
    /**
     * Sets id_estado_civil
     * @param int $id_estado_civil Id Estado civil da pessoa fisica
     * @return $this
     */
    public function setIdEstadoCivil($id_estado_civil)
    {
        
        $this->id_estado_civil = $id_estado_civil;
        return $this;
    }
    
    /**
     * Gets profissao
     * @return string
     */
    public function getProfissao()
    {
        return $this->profissao;
    }
  
    /**
     * Sets profissao
     * @param string $profissao Profiss\u00C3\u00A3o da pessoa fisica
     * @return $this
     */
    public function setProfissao($profissao)
    {
        
        $this->profissao = $profissao;
        return $this;
    }
    
    /**
     * Gets id_natureza_ocupacao
     * @return int
     */
    public function getIdNaturezaOcupacao()
    {
        return $this->id_natureza_ocupacao;
    }
  
    /**
     * Sets id_natureza_ocupacao
     * @param int $id_natureza_ocupacao Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica
     * @return $this
     */
    public function setIdNaturezaOcupacao($id_natureza_ocupacao)
    {
        
        $this->id_natureza_ocupacao = $id_natureza_ocupacao;
        return $this;
    }
    
    /**
     * Gets id_nacionalidade
     * @return int
     */
    public function getIdNacionalidade()
    {
        return $this->id_nacionalidade;
    }
  
    /**
     * Sets id_nacionalidade
     * @param int $id_nacionalidade Id Nacionalidade da pessoa fisica
     * @return $this
     */
    public function setIdNacionalidade($id_nacionalidade)
    {
        
        $this->id_nacionalidade = $id_nacionalidade;
        return $this;
    }
    
    /**
     * Gets numero_agencia
     * @return int
     */
    public function getNumeroAgencia()
    {
        return $this->numero_agencia;
    }
  
    /**
     * Sets numero_agencia
     * @param int $numero_agencia N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
     * @return $this
     */
    public function setNumeroAgencia($numero_agencia)
    {
        
        $this->numero_agencia = $numero_agencia;
        return $this;
    }
    
    /**
     * Gets numero_conta_corrente
     * @return string
     */
    public function getNumeroContaCorrente()
    {
        return $this->numero_conta_corrente;
    }
  
    /**
     * Sets numero_conta_corrente
     * @param string $numero_conta_corrente N\u00C3\u00BAmero da conta corrente.
     * @return $this
     */
    public function setNumeroContaCorrente($numero_conta_corrente)
    {
        
        $this->numero_conta_corrente = $numero_conta_corrente;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email Email da pessoa fisica
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets nome_empresa
     * @return string
     */
    public function getNomeEmpresa()
    {
        return $this->nome_empresa;
    }
  
    /**
     * Sets nome_empresa
     * @param string $nome_empresa Nome que deve ser impresso no cart\u00C3\u00A3o
     * @return $this
     */
    public function setNomeEmpresa($nome_empresa)
    {
        
        $this->nome_empresa = $nome_empresa;
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
