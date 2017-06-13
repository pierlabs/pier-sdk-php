<?php
/**
 * PessoaFisicaAprovadaResponse
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
 * PessoaFisicaAprovadaResponse Class Doc Comment
 *
 * @category    Class
 * @description PessoaFisicaAprovadaResponse
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PessoaFisicaAprovadaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'nome_mae' => 'string',
        'data_nascimento' => 'string',
        'sexo' => 'string',
        'cpf' => 'string',
        'numero_identidade' => 'string',
        'orgao_expedidor_identidade' => 'string',
        'unidade_federativa_identidade' => 'string',
        'data_emissao_identidade' => 'string',
        'id_estado_civil' => 'int',
        'profissao' => 'string',
        'id_natureza_ocupacao' => 'int',
        'id_nacionalidade' => 'int',
        'id_origem_comercial' => 'int',
        'id_produto' => 'int',
        'numero_agencia' => 'int',
        'numero_conta_corrente' => 'string',
        'email' => 'string',
        'dia_vencimento' => 'int',
        'nome_impresso' => 'string',
        'nome_empresa' => 'string',
        'telefones' => '\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]',
        'enderecos' => '\br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]'
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
        'nome_mae' => 'nomeMae',
        'data_nascimento' => 'dataNascimento',
        'sexo' => 'sexo',
        'cpf' => 'cpf',
        'numero_identidade' => 'numeroIdentidade',
        'orgao_expedidor_identidade' => 'orgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'unidadeFederativaIdentidade',
        'data_emissao_identidade' => 'dataEmissaoIdentidade',
        'id_estado_civil' => 'idEstadoCivil',
        'profissao' => 'profissao',
        'id_natureza_ocupacao' => 'idNaturezaOcupacao',
        'id_nacionalidade' => 'idNacionalidade',
        'id_origem_comercial' => 'idOrigemComercial',
        'id_produto' => 'idProduto',
        'numero_agencia' => 'numeroAgencia',
        'numero_conta_corrente' => 'numeroContaCorrente',
        'email' => 'email',
        'dia_vencimento' => 'diaVencimento',
        'nome_impresso' => 'nomeImpresso',
        'nome_empresa' => 'nomeEmpresa',
        'telefones' => 'telefones',
        'enderecos' => 'enderecos'
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
        'nome_mae' => 'setNomeMae',
        'data_nascimento' => 'setDataNascimento',
        'sexo' => 'setSexo',
        'cpf' => 'setCpf',
        'numero_identidade' => 'setNumeroIdentidade',
        'orgao_expedidor_identidade' => 'setOrgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'setUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'setDataEmissaoIdentidade',
        'id_estado_civil' => 'setIdEstadoCivil',
        'profissao' => 'setProfissao',
        'id_natureza_ocupacao' => 'setIdNaturezaOcupacao',
        'id_nacionalidade' => 'setIdNacionalidade',
        'id_origem_comercial' => 'setIdOrigemComercial',
        'id_produto' => 'setIdProduto',
        'numero_agencia' => 'setNumeroAgencia',
        'numero_conta_corrente' => 'setNumeroContaCorrente',
        'email' => 'setEmail',
        'dia_vencimento' => 'setDiaVencimento',
        'nome_impresso' => 'setNomeImpresso',
        'nome_empresa' => 'setNomeEmpresa',
        'telefones' => 'setTelefones',
        'enderecos' => 'setEnderecos'
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
        'nome_mae' => 'getNomeMae',
        'data_nascimento' => 'getDataNascimento',
        'sexo' => 'getSexo',
        'cpf' => 'getCpf',
        'numero_identidade' => 'getNumeroIdentidade',
        'orgao_expedidor_identidade' => 'getOrgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'getUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'getDataEmissaoIdentidade',
        'id_estado_civil' => 'getIdEstadoCivil',
        'profissao' => 'getProfissao',
        'id_natureza_ocupacao' => 'getIdNaturezaOcupacao',
        'id_nacionalidade' => 'getIdNacionalidade',
        'id_origem_comercial' => 'getIdOrigemComercial',
        'id_produto' => 'getIdProduto',
        'numero_agencia' => 'getNumeroAgencia',
        'numero_conta_corrente' => 'getNumeroContaCorrente',
        'email' => 'getEmail',
        'dia_vencimento' => 'getDiaVencimento',
        'nome_impresso' => 'getNomeImpresso',
        'nome_empresa' => 'getNomeEmpresa',
        'telefones' => 'getTelefones',
        'enderecos' => 'getEnderecos'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id)
      * @var int
      */
    protected $id;
    
    /**
      * $nome Apresenta o nome completo da pessoa fisica.
      * @var string
      */
    protected $nome;
    
    /**
      * $nome_mae Apresenta o nome da m\u00C3\u00A3e da pessoa fisica
      * @var string
      */
    protected $nome_mae;
    
    /**
      * $data_nascimento Data de Nascimento da Pessoa. Essa data deve ser informada no formato aaaa-MM-dd.
      * @var string
      */
    protected $data_nascimento;
    
    /**
      * $sexo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino).
      * @var string
      */
    protected $sexo;
    
    /**
      * $cpf N\u00C3\u00BAmero do Cadastro de Pessoa Fisica (CPF)
      * @var string
      */
    protected $cpf;
    
    /**
      * $numero_identidade N\u00C3\u00BAmero da identidade.
      * @var string
      */
    protected $numero_identidade;
    
    /**
      * $orgao_expedidor_identidade Org\u00C3\u00A3o expedidor da Identidade.
      * @var string
      */
    protected $orgao_expedidor_identidade;
    
    /**
      * $unidade_federativa_identidade Sigla da Unidade Federativa de onde foi expedido a Identidade
      * @var string
      */
    protected $unidade_federativa_identidade;
    
    /**
      * $data_emissao_identidade Data emiss\u00C3\u00A3o da Identidade no formato aaaa-MM-dd
      * @var string
      */
    protected $data_emissao_identidade;
    
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
      * $id_origem_comercial Id da origem comercial
      * @var int
      */
    protected $id_origem_comercial;
    
    /**
      * $id_produto Id do produto
      * @var int
      */
    protected $id_produto;
    
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
      * $dia_vencimento Dia vencimento
      * @var int
      */
    protected $dia_vencimento;
    
    /**
      * $nome_impresso Nome que deve ser impresso no cart\u00C3\u00A3o
      * @var string
      */
    protected $nome_impresso;
    
    /**
      * $nome_empresa Nome que deve ser impresso no cart\u00C3\u00A3o
      * @var string
      */
    protected $nome_empresa;
    
    /**
      * $telefones Apresenta os telefones da empresa
      * @var \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]
      */
    protected $telefones;
    
    /**
      * $enderecos Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros
      * @var \br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]
      */
    protected $enderecos;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->nome_mae = $data["nome_mae"];
            $this->data_nascimento = $data["data_nascimento"];
            $this->sexo = $data["sexo"];
            $this->cpf = $data["cpf"];
            $this->numero_identidade = $data["numero_identidade"];
            $this->orgao_expedidor_identidade = $data["orgao_expedidor_identidade"];
            $this->unidade_federativa_identidade = $data["unidade_federativa_identidade"];
            $this->data_emissao_identidade = $data["data_emissao_identidade"];
            $this->id_estado_civil = $data["id_estado_civil"];
            $this->profissao = $data["profissao"];
            $this->id_natureza_ocupacao = $data["id_natureza_ocupacao"];
            $this->id_nacionalidade = $data["id_nacionalidade"];
            $this->id_origem_comercial = $data["id_origem_comercial"];
            $this->id_produto = $data["id_produto"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->numero_conta_corrente = $data["numero_conta_corrente"];
            $this->email = $data["email"];
            $this->dia_vencimento = $data["dia_vencimento"];
            $this->nome_impresso = $data["nome_impresso"];
            $this->nome_empresa = $data["nome_empresa"];
            $this->telefones = $data["telefones"];
            $this->enderecos = $data["enderecos"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id)
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
     * @param string $nome Apresenta o nome completo da pessoa fisica.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
     * Gets data_nascimento
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
  
    /**
     * Sets data_nascimento
     * @param string $data_nascimento Data de Nascimento da Pessoa. Essa data deve ser informada no formato aaaa-MM-dd.
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
     * @param string $sexo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino).
     * @return $this
     */
    public function setSexo($sexo)
    {
        
        $this->sexo = $sexo;
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
     * @param string $cpf N\u00C3\u00BAmero do Cadastro de Pessoa Fisica (CPF)
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
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
     * @param string $numero_identidade N\u00C3\u00BAmero da identidade.
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
     * @param string $orgao_expedidor_identidade Org\u00C3\u00A3o expedidor da Identidade.
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
     * @param string $data_emissao_identidade Data emiss\u00C3\u00A3o da Identidade no formato aaaa-MM-dd
     * @return $this
     */
    public function setDataEmissaoIdentidade($data_emissao_identidade)
    {
        
        $this->data_emissao_identidade = $data_emissao_identidade;
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
     * Gets id_origem_comercial
     * @return int
     */
    public function getIdOrigemComercial()
    {
        return $this->id_origem_comercial;
    }
  
    /**
     * Sets id_origem_comercial
     * @param int $id_origem_comercial Id da origem comercial
     * @return $this
     */
    public function setIdOrigemComercial($id_origem_comercial)
    {
        
        $this->id_origem_comercial = $id_origem_comercial;
        return $this;
    }
    
    /**
     * Gets id_produto
     * @return int
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }
  
    /**
     * Sets id_produto
     * @param int $id_produto Id do produto
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
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
     * Gets dia_vencimento
     * @return int
     */
    public function getDiaVencimento()
    {
        return $this->dia_vencimento;
    }
  
    /**
     * Sets dia_vencimento
     * @param int $dia_vencimento Dia vencimento
     * @return $this
     */
    public function setDiaVencimento($dia_vencimento)
    {
        
        $this->dia_vencimento = $dia_vencimento;
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
     * @param string $nome_impresso Nome que deve ser impresso no cart\u00C3\u00A3o
     * @return $this
     */
    public function setNomeImpresso($nome_impresso)
    {
        
        $this->nome_impresso = $nome_impresso;
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
     * Gets telefones
     * @return \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]
     */
    public function getTelefones()
    {
        return $this->telefones;
    }
  
    /**
     * Sets telefones
     * @param \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[] $telefones Apresenta os telefones da empresa
     * @return $this
     */
    public function setTelefones($telefones)
    {
        
        $this->telefones = $telefones;
        return $this;
    }
    
    /**
     * Gets enderecos
     * @return \br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }
  
    /**
     * Sets enderecos
     * @param \br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[] $enderecos Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros
     * @return $this
     */
    public function setEnderecos($enderecos)
    {
        
        $this->enderecos = $enderecos;
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
