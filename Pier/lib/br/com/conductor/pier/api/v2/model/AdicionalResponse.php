<?php
/**
 * AdicionalResponse
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
 * AdicionalResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{adicional_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdicionalResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_conta' => 'int',
        'id_pessoa' => 'int',
        'nome' => 'string',
        'nome_impresso' => 'string',
        'numero_receita_federal' => 'string',
        'data_nascimento' => 'string',
        'sexo' => 'string',
        'numero_identidade' => 'string',
        'orgao_expedidor_identidade' => 'string',
        'unidade_federativa_identidade' => 'string',
        'data_emissao_identidade' => 'string',
        'id_parentesco' => 'int',
        'flag_ativo' => 'int',
        'data_cadastro_portador' => 'string',
        'data_cancelamento_portador' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_conta' => 'idConta',
        'id_pessoa' => 'idPessoa',
        'nome' => 'nome',
        'nome_impresso' => 'nomeImpresso',
        'numero_receita_federal' => 'numeroReceitaFederal',
        'data_nascimento' => 'dataNascimento',
        'sexo' => 'sexo',
        'numero_identidade' => 'numeroIdentidade',
        'orgao_expedidor_identidade' => 'orgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'unidadeFederativaIdentidade',
        'data_emissao_identidade' => 'dataEmissaoIdentidade',
        'id_parentesco' => 'idParentesco',
        'flag_ativo' => 'flagAtivo',
        'data_cadastro_portador' => 'dataCadastroPortador',
        'data_cancelamento_portador' => 'dataCancelamentoPortador'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_conta' => 'setIdConta',
        'id_pessoa' => 'setIdPessoa',
        'nome' => 'setNome',
        'nome_impresso' => 'setNomeImpresso',
        'numero_receita_federal' => 'setNumeroReceitaFederal',
        'data_nascimento' => 'setDataNascimento',
        'sexo' => 'setSexo',
        'numero_identidade' => 'setNumeroIdentidade',
        'orgao_expedidor_identidade' => 'setOrgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'setUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'setDataEmissaoIdentidade',
        'id_parentesco' => 'setIdParentesco',
        'flag_ativo' => 'setFlagAtivo',
        'data_cadastro_portador' => 'setDataCadastroPortador',
        'data_cancelamento_portador' => 'setDataCancelamentoPortador'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_conta' => 'getIdConta',
        'id_pessoa' => 'getIdPessoa',
        'nome' => 'getNome',
        'nome_impresso' => 'getNomeImpresso',
        'numero_receita_federal' => 'getNumeroReceitaFederal',
        'data_nascimento' => 'getDataNascimento',
        'sexo' => 'getSexo',
        'numero_identidade' => 'getNumeroIdentidade',
        'orgao_expedidor_identidade' => 'getOrgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'getUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'getDataEmissaoIdentidade',
        'id_parentesco' => 'getIdParentesco',
        'flag_ativo' => 'getFlagAtivo',
        'data_cadastro_portador' => 'getDataCadastroPortador',
        'data_cancelamento_portador' => 'getDataCancelamentoPortador'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_conta {{{adicional_response_id_conta_value}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_pessoa {{{adicional_response_id_pessoa_value}}}
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $nome {{{adicional_response_nome_value}}}
      * @var string
      */
    protected $nome;
    
    /**
      * $nome_impresso {{{adicional_response_nome_impresso_value}}}
      * @var string
      */
    protected $nome_impresso;
    
    /**
      * $numero_receita_federal {{{adicional_response_numero_receita_federal_value}}}
      * @var string
      */
    protected $numero_receita_federal;
    
    /**
      * $data_nascimento {{{adicional_response_data_nascimento_value}}}
      * @var string
      */
    protected $data_nascimento;
    
    /**
      * $sexo {{{adicional_response_sexo_value}}}
      * @var string
      */
    protected $sexo;
    
    /**
      * $numero_identidade {{{adicional_response_numero_identidade_value}}}
      * @var string
      */
    protected $numero_identidade;
    
    /**
      * $orgao_expedidor_identidade {{{adicional_response_orgao_expedidor_identidade_value}}}
      * @var string
      */
    protected $orgao_expedidor_identidade;
    
    /**
      * $unidade_federativa_identidade {{{adicional_response_unidade_federativa_identidade_value}}}
      * @var string
      */
    protected $unidade_federativa_identidade;
    
    /**
      * $data_emissao_identidade {{{adicional_response_data_emissao_identidade_value}}}
      * @var string
      */
    protected $data_emissao_identidade;
    
    /**
      * $id_parentesco {{{adicional_response_id_parentesco_value}}}
      * @var int
      */
    protected $id_parentesco;
    
    /**
      * $flag_ativo {{{adicional_response_flag_ativo_value}}}
      * @var int
      */
    protected $flag_ativo;
    
    /**
      * $data_cadastro_portador {{{adicional_response_data_cadastro_portador_value}}}
      * @var string
      */
    protected $data_cadastro_portador;
    
    /**
      * $data_cancelamento_portador {{{adicional_response_data_cancelamento_portador_value}}}
      * @var string
      */
    protected $data_cancelamento_portador;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_conta = $data["id_conta"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->nome = $data["nome"];
            $this->nome_impresso = $data["nome_impresso"];
            $this->numero_receita_federal = $data["numero_receita_federal"];
            $this->data_nascimento = $data["data_nascimento"];
            $this->sexo = $data["sexo"];
            $this->numero_identidade = $data["numero_identidade"];
            $this->orgao_expedidor_identidade = $data["orgao_expedidor_identidade"];
            $this->unidade_federativa_identidade = $data["unidade_federativa_identidade"];
            $this->data_emissao_identidade = $data["data_emissao_identidade"];
            $this->id_parentesco = $data["id_parentesco"];
            $this->flag_ativo = $data["flag_ativo"];
            $this->data_cadastro_portador = $data["data_cadastro_portador"];
            $this->data_cancelamento_portador = $data["data_cancelamento_portador"];
        }
    }
    
    /**
     * Gets id_conta
     * @return int
     */
    public function getIdConta()
    {
        return $this->id_conta;
    }
  
    /**
     * Sets id_conta
     * @param int $id_conta {{{adicional_response_id_conta_value}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
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
     * @param int $id_pessoa {{{adicional_response_id_pessoa_value}}}
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
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
     * @param string $nome {{{adicional_response_nome_value}}}
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets nome_impresso
     * @return string
     */
    public function getNomeImpresso()
    {
        return $this->nome_impresso;
    }
  
    /**
     * Sets nome_impresso
     * @param string $nome_impresso {{{adicional_response_nome_impresso_value}}}
     * @return $this
     */
    public function setNomeImpresso($nome_impresso)
    {
        
        $this->nome_impresso = $nome_impresso;
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
     * @param string $numero_receita_federal {{{adicional_response_numero_receita_federal_value}}}
     * @return $this
     */
    public function setNumeroReceitaFederal($numero_receita_federal)
    {
        
        $this->numero_receita_federal = $numero_receita_federal;
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
     * @param string $data_nascimento {{{adicional_response_data_nascimento_value}}}
     * @return $this
     */
    public function setDataNascimento($data_nascimento)
    {
        
        $this->data_nascimento = $data_nascimento;
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
     * @param string $sexo {{{adicional_response_sexo_value}}}
     * @return $this
     */
    public function setSexo($sexo)
    {
        
        $this->sexo = $sexo;
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
     * @param string $numero_identidade {{{adicional_response_numero_identidade_value}}}
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
     * @param string $orgao_expedidor_identidade {{{adicional_response_orgao_expedidor_identidade_value}}}
     * @return $this
     */
    public function setOrgaoExpedidorIdentidade($orgao_expedidor_identidade)
    {
        
        $this->orgao_expedidor_identidade = $orgao_expedidor_identidade;
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
     * @param string $unidade_federativa_identidade {{{adicional_response_unidade_federativa_identidade_value}}}
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
     * @param string $data_emissao_identidade {{{adicional_response_data_emissao_identidade_value}}}
     * @return $this
     */
    public function setDataEmissaoIdentidade($data_emissao_identidade)
    {
        
        $this->data_emissao_identidade = $data_emissao_identidade;
        return $this;
    }
    
    /**
     * Gets id_parentesco
     * @return int
     */
    public function getIdParentesco()
    {
        return $this->id_parentesco;
    }
  
    /**
     * Sets id_parentesco
     * @param int $id_parentesco {{{adicional_response_id_parentesco_value}}}
     * @return $this
     */
    public function setIdParentesco($id_parentesco)
    {
        
        $this->id_parentesco = $id_parentesco;
        return $this;
    }
    
    /**
     * Gets flag_ativo
     * @return int
     */
    public function getFlagAtivo()
    {
        return $this->flag_ativo;
    }
  
    /**
     * Sets flag_ativo
     * @param int $flag_ativo {{{adicional_response_flag_ativo_value}}}
     * @return $this
     */
    public function setFlagAtivo($flag_ativo)
    {
        
        $this->flag_ativo = $flag_ativo;
        return $this;
    }
    
    /**
     * Gets data_cadastro_portador
     * @return string
     */
    public function getDataCadastroPortador()
    {
        return $this->data_cadastro_portador;
    }
  
    /**
     * Sets data_cadastro_portador
     * @param string $data_cadastro_portador {{{adicional_response_data_cadastro_portador_value}}}
     * @return $this
     */
    public function setDataCadastroPortador($data_cadastro_portador)
    {
        
        $this->data_cadastro_portador = $data_cadastro_portador;
        return $this;
    }
    
    /**
     * Gets data_cancelamento_portador
     * @return string
     */
    public function getDataCancelamentoPortador()
    {
        return $this->data_cancelamento_portador;
    }
  
    /**
     * Sets data_cancelamento_portador
     * @param string $data_cancelamento_portador {{{adicional_response_data_cancelamento_portador_value}}}
     * @return $this
     */
    public function setDataCancelamentoPortador($data_cancelamento_portador)
    {
        
        $this->data_cancelamento_portador = $data_cancelamento_portador;
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
