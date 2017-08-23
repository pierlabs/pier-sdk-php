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
        'id_profissao' => 'int',
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
        'id_conta' => 'int',
        'id_proposta' => 'int',
        'canal_entrada' => 'string',
        'valor_pontuacao' => 'int',
        'telefones' => '\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]',
        'enderecos' => '\br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]',
        'limite_global' => 'Number',
        'limite_maximo' => 'Number',
        'limite_parcelas' => 'Number'
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
        'id_profissao' => 'idProfissao',
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
        'id_conta' => 'idConta',
        'id_proposta' => 'idProposta',
        'canal_entrada' => 'canalEntrada',
        'valor_pontuacao' => 'valorPontuacao',
        'telefones' => 'telefones',
        'enderecos' => 'enderecos',
        'limite_global' => 'limiteGlobal',
        'limite_maximo' => 'limiteMaximo',
        'limite_parcelas' => 'limiteParcelas'
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
        'id_profissao' => 'setIdProfissao',
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
        'id_conta' => 'setIdConta',
        'id_proposta' => 'setIdProposta',
        'canal_entrada' => 'setCanalEntrada',
        'valor_pontuacao' => 'setValorPontuacao',
        'telefones' => 'setTelefones',
        'enderecos' => 'setEnderecos',
        'limite_global' => 'setLimiteGlobal',
        'limite_maximo' => 'setLimiteMaximo',
        'limite_parcelas' => 'setLimiteParcelas'
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
        'id_profissao' => 'getIdProfissao',
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
        'id_conta' => 'getIdConta',
        'id_proposta' => 'getIdProposta',
        'canal_entrada' => 'getCanalEntrada',
        'valor_pontuacao' => 'getValorPontuacao',
        'telefones' => 'getTelefones',
        'enderecos' => 'getEnderecos',
        'limite_global' => 'getLimiteGlobal',
        'limite_maximo' => 'getLimiteMaximo',
        'limite_parcelas' => 'getLimiteParcelas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa fisica (id)
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
      * $id_profissao Profiss\u00C3\u00A3o da pessoa fisica
      * @var int
      */
    protected $id_profissao;
    
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
      * $nome_empresa Nome da empresa
      * @var string
      */
    protected $nome_empresa;
    
    /**
      * $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta cadastrada
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_proposta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da proposta
      * @var int
      */
    protected $id_proposta;
    
    /**
      * $canal_entrada Indica o canal pelo qual o cadastro do cliente foi realizado
      * @var string
      */
    protected $canal_entrada;
    
    /**
      * $valor_pontuacao Indica o valor da pontua\u00C3\u00A7\u00C3\u00A3o atribuido ao cliente (caso n\u00C3\u00A3o informado ser\u00C3\u00A1 atribuido o valor = 0)
      * @var int
      */
    protected $valor_pontuacao;
    
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
      * $limite_global Valor do Limite Global
      * @var Number
      */
    protected $limite_global;
    
    /**
      * $limite_maximo Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es
      * @var Number
      */
    protected $limite_maximo;
    
    /**
      * $limite_parcelas Valor do limite de cr\u00C3\u00A9dito acumulado da soma das parcelas das compras
      * @var Number
      */
    protected $limite_parcelas;
    

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
            $this->id_profissao = $data["id_profissao"];
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
            $this->id_conta = $data["id_conta"];
            $this->id_proposta = $data["id_proposta"];
            $this->canal_entrada = $data["canal_entrada"];
            $this->valor_pontuacao = $data["valor_pontuacao"];
            $this->telefones = $data["telefones"];
            $this->enderecos = $data["enderecos"];
            $this->limite_global = $data["limite_global"];
            $this->limite_maximo = $data["limite_maximo"];
            $this->limite_parcelas = $data["limite_parcelas"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa fisica (id)
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
     * Gets id_profissao
     * @return int
     */
    public function getIdProfissao()
    {
        return $this->id_profissao;
    }
  
    /**
     * Sets id_profissao
     * @param int $id_profissao Profiss\u00C3\u00A3o da pessoa fisica
     * @return $this
     */
    public function setIdProfissao($id_profissao)
    {
        
        $this->id_profissao = $id_profissao;
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
     * @param string $nome_empresa Nome da empresa
     * @return $this
     */
    public function setNomeEmpresa($nome_empresa)
    {
        
        $this->nome_empresa = $nome_empresa;
        return $this;
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
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta cadastrada
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_proposta
     * @return int
     */
    public function getIdProposta()
    {
        return $this->id_proposta;
    }
  
    /**
     * Sets id_proposta
     * @param int $id_proposta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da proposta
     * @return $this
     */
    public function setIdProposta($id_proposta)
    {
        
        $this->id_proposta = $id_proposta;
        return $this;
    }
    
    /**
     * Gets canal_entrada
     * @return string
     */
    public function getCanalEntrada()
    {
        return $this->canal_entrada;
    }
  
    /**
     * Sets canal_entrada
     * @param string $canal_entrada Indica o canal pelo qual o cadastro do cliente foi realizado
     * @return $this
     */
    public function setCanalEntrada($canal_entrada)
    {
        
        $this->canal_entrada = $canal_entrada;
        return $this;
    }
    
    /**
     * Gets valor_pontuacao
     * @return int
     */
    public function getValorPontuacao()
    {
        return $this->valor_pontuacao;
    }
  
    /**
     * Sets valor_pontuacao
     * @param int $valor_pontuacao Indica o valor da pontua\u00C3\u00A7\u00C3\u00A3o atribuido ao cliente (caso n\u00C3\u00A3o informado ser\u00C3\u00A1 atribuido o valor = 0)
     * @return $this
     */
    public function setValorPontuacao($valor_pontuacao)
    {
        
        $this->valor_pontuacao = $valor_pontuacao;
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
     * Gets limite_global
     * @return Number
     */
    public function getLimiteGlobal()
    {
        return $this->limite_global;
    }
  
    /**
     * Sets limite_global
     * @param Number $limite_global Valor do Limite Global
     * @return $this
     */
    public function setLimiteGlobal($limite_global)
    {
        
        $this->limite_global = $limite_global;
        return $this;
    }
    
    /**
     * Gets limite_maximo
     * @return Number
     */
    public function getLimiteMaximo()
    {
        return $this->limite_maximo;
    }
  
    /**
     * Sets limite_maximo
     * @param Number $limite_maximo Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es
     * @return $this
     */
    public function setLimiteMaximo($limite_maximo)
    {
        
        $this->limite_maximo = $limite_maximo;
        return $this;
    }
    
    /**
     * Gets limite_parcelas
     * @return Number
     */
    public function getLimiteParcelas()
    {
        return $this->limite_parcelas;
    }
  
    /**
     * Sets limite_parcelas
     * @param Number $limite_parcelas Valor do limite de cr\u00C3\u00A9dito acumulado da soma das parcelas das compras
     * @return $this
     */
    public function setLimiteParcelas($limite_parcelas)
    {
        
        $this->limite_parcelas = $limite_parcelas;
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
