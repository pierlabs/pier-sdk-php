<?php
/**
 * Pessoa
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
 * Pessoa Class Doc Comment
 *
 * @category    Class
 * @description Pessoa
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Pessoa implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'tipo' => 'string',
        'cpf' => 'string',
        'cnpj' => 'string',
        'data_nascimento' => 'string',
        'numero_identidade' => 'string',
        'orgao_expedidor_identidade' => 'string',
        'sexo' => 'string',
        'unidade_federativa_identidade' => 'string',
        'data_emissao_identidade' => 'string'
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
        'nome' => 'nome',
        'tipo' => 'tipo',
        'cpf' => 'cpf',
        'cnpj' => 'cnpj',
        'data_nascimento' => 'dataNascimento',
        'numero_identidade' => 'numeroIdentidade',
        'orgao_expedidor_identidade' => 'orgaoExpedidorIdentidade',
        'sexo' => 'sexo',
        'unidade_federativa_identidade' => 'unidadeFederativaIdentidade',
        'data_emissao_identidade' => 'dataEmissaoIdentidade'
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
        'nome' => 'setNome',
        'tipo' => 'setTipo',
        'cpf' => 'setCpf',
        'cnpj' => 'setCnpj',
        'data_nascimento' => 'setDataNascimento',
        'numero_identidade' => 'setNumeroIdentidade',
        'orgao_expedidor_identidade' => 'setOrgaoExpedidorIdentidade',
        'sexo' => 'setSexo',
        'unidade_federativa_identidade' => 'setUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'setDataEmissaoIdentidade'
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
        'nome' => 'getNome',
        'tipo' => 'getTipo',
        'cpf' => 'getCpf',
        'cnpj' => 'getCnpj',
        'data_nascimento' => 'getDataNascimento',
        'numero_identidade' => 'getNumeroIdentidade',
        'orgao_expedidor_identidade' => 'getOrgaoExpedidorIdentidade',
        'sexo' => 'getSexo',
        'unidade_federativa_identidade' => 'getUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'getDataEmissaoIdentidade'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id).
      * @var int
      */
    protected $id;
    
    /**
      * $nome Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
      * @var string
      */
    protected $nome;
    
    /**
      * $tipo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00C3\u00ADsica), (\"PJ\": Pessoa Jur\u00C3\u00ADdica).
      * @var string
      */
    protected $tipo;
    
    /**
      * $cpf N\u00C3\u00BAmero do CPF, quando PF.
      * @var string
      */
    protected $cpf;
    
    /**
      * $cnpj N\u00C3\u00BAmero do CNPJ, quando PJ.
      * @var string
      */
    protected $cnpj;
    
    /**
      * $data_nascimento Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ.
      * @var string
      */
    protected $data_nascimento;
    
    /**
      * $numero_identidade N\u00C3\u00BAmero da Identidade
      * @var string
      */
    protected $numero_identidade;
    
    /**
      * $orgao_expedidor_identidade Org\u00C3\u00A3o expedidor do RG.
      * @var string
      */
    protected $orgao_expedidor_identidade;
    
    /**
      * $sexo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
      * @var string
      */
    protected $sexo;
    
    /**
      * $unidade_federativa_identidade Sigla da Unidade Federativa de onde foi expedido a Identidade
      * @var string
      */
    protected $unidade_federativa_identidade;
    
    /**
      * $data_emissao_identidade Data emiss\u00C3\u00A3o da identidade no formato aaaa-MM-dd
      * @var string
      */
    protected $data_emissao_identidade;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->tipo = $data["tipo"];
            $this->cpf = $data["cpf"];
            $this->cnpj = $data["cnpj"];
            $this->data_nascimento = $data["data_nascimento"];
            $this->numero_identidade = $data["numero_identidade"];
            $this->orgao_expedidor_identidade = $data["orgao_expedidor_identidade"];
            $this->sexo = $data["sexo"];
            $this->unidade_federativa_identidade = $data["unidade_federativa_identidade"];
            $this->data_emissao_identidade = $data["data_emissao_identidade"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id).
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
     * @param string $nome Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets tipo
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
  
    /**
     * Sets tipo
     * @param string $tipo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00C3\u00ADsica), (\"PJ\": Pessoa Jur\u00C3\u00ADdica).
     * @return $this
     */
    public function setTipo($tipo)
    {
        
        $this->tipo = $tipo;
        return $this;
    }
    
    /**
     * Gets cpf
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }
  
    /**
     * Sets cpf
     * @param string $cpf N\u00C3\u00BAmero do CPF, quando PF.
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
        return $this;
    }
    
    /**
     * Gets cnpj
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
  
    /**
     * Sets cnpj
     * @param string $cnpj N\u00C3\u00BAmero do CNPJ, quando PJ.
     * @return $this
     */
    public function setCnpj($cnpj)
    {
        
        $this->cnpj = $cnpj;
        return $this;
    }
    
    /**
     * Gets data_nascimento
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
  
    /**
     * Sets data_nascimento
     * @param string $data_nascimento Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ.
     * @return $this
     */
    public function setDataNascimento($data_nascimento)
    {
        
        $this->data_nascimento = $data_nascimento;
        return $this;
    }
    
    /**
     * Gets numero_identidade
     * @return string
     */
    public function getNumeroIdentidade()
    {
        return $this->numero_identidade;
    }
  
    /**
     * Sets numero_identidade
     * @param string $numero_identidade N\u00C3\u00BAmero da Identidade
     * @return $this
     */
    public function setNumeroIdentidade($numero_identidade)
    {
        
        $this->numero_identidade = $numero_identidade;
        return $this;
    }
    
    /**
     * Gets orgao_expedidor_identidade
     * @return string
     */
    public function getOrgaoExpedidorIdentidade()
    {
        return $this->orgao_expedidor_identidade;
    }
  
    /**
     * Sets orgao_expedidor_identidade
     * @param string $orgao_expedidor_identidade Org\u00C3\u00A3o expedidor do RG.
     * @return $this
     */
    public function setOrgaoExpedidorIdentidade($orgao_expedidor_identidade)
    {
        
        $this->orgao_expedidor_identidade = $orgao_expedidor_identidade;
        return $this;
    }
    
    /**
     * Gets sexo
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }
  
    /**
     * Sets sexo
     * @param string $sexo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
     * @return $this
     */
    public function setSexo($sexo)
    {
        
        $this->sexo = $sexo;
        return $this;
    }
    
    /**
     * Gets unidade_federativa_identidade
     * @return string
     */
    public function getUnidadeFederativaIdentidade()
    {
        return $this->unidade_federativa_identidade;
    }
  
    /**
     * Sets unidade_federativa_identidade
     * @param string $unidade_federativa_identidade Sigla da Unidade Federativa de onde foi expedido a Identidade
     * @return $this
     */
    public function setUnidadeFederativaIdentidade($unidade_federativa_identidade)
    {
        
        $this->unidade_federativa_identidade = $unidade_federativa_identidade;
        return $this;
    }
    
    /**
     * Gets data_emissao_identidade
     * @return string
     */
    public function getDataEmissaoIdentidade()
    {
        return $this->data_emissao_identidade;
    }
  
    /**
     * Sets data_emissao_identidade
     * @param string $data_emissao_identidade Data emiss\u00C3\u00A3o da identidade no formato aaaa-MM-dd
     * @return $this
     */
    public function setDataEmissaoIdentidade($data_emissao_identidade)
    {
        
        $this->data_emissao_identidade = $data_emissao_identidade;
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
