<?php
/**
 * ContaDetalheResponse
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
 * ContaDetalheResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto conta
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContaDetalheResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_pessoa' => 'int',
        'nome' => 'string',
        'id_produto' => 'int',
        'id_origem_comercial' => 'int',
        'nome_origem_comercial' => 'string',
        'id_fantasia_basica' => 'int',
        'nome_fantasia_basica' => 'string',
        'id_status_conta' => 'int',
        'status_conta' => 'string',
        'dia_vencimento' => 'int',
        'melhor_dia_compra' => 'int',
        'data_status_conta' => 'string',
        'valor_renda' => 'Number',
        'data_cadastro' => 'string',
        'data_ultima_alteracao_vencimento' => 'string',
        'data_hora_ultima_compra' => 'string',
        'numero_agencia' => 'int',
        'numero_conta_corrente' => 'string',
        'forma_envio_fatura' => 'string',
        'titular' => 'bool',
        'limite_global' => 'Number',
        'limite_saque_global' => 'Number',
        'saldo_disponivel_global' => 'Number',
        'saldo_disponivel_saque' => 'Number',
        'dias_atraso' => 'int'
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
        'id_pessoa' => 'idPessoa',
        'nome' => 'nome',
        'id_produto' => 'idProduto',
        'id_origem_comercial' => 'idOrigemComercial',
        'nome_origem_comercial' => 'nomeOrigemComercial',
        'id_fantasia_basica' => 'idFantasiaBasica',
        'nome_fantasia_basica' => 'nomeFantasiaBasica',
        'id_status_conta' => 'idStatusConta',
        'status_conta' => 'statusConta',
        'dia_vencimento' => 'diaVencimento',
        'melhor_dia_compra' => 'melhorDiaCompra',
        'data_status_conta' => 'dataStatusConta',
        'valor_renda' => 'valorRenda',
        'data_cadastro' => 'dataCadastro',
        'data_ultima_alteracao_vencimento' => 'dataUltimaAlteracaoVencimento',
        'data_hora_ultima_compra' => 'dataHoraUltimaCompra',
        'numero_agencia' => 'numeroAgencia',
        'numero_conta_corrente' => 'numeroContaCorrente',
        'forma_envio_fatura' => 'formaEnvioFatura',
        'titular' => 'titular',
        'limite_global' => 'limiteGlobal',
        'limite_saque_global' => 'limiteSaqueGlobal',
        'saldo_disponivel_global' => 'saldoDisponivelGlobal',
        'saldo_disponivel_saque' => 'saldoDisponivelSaque',
        'dias_atraso' => 'diasAtraso'
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
        'id_pessoa' => 'setIdPessoa',
        'nome' => 'setNome',
        'id_produto' => 'setIdProduto',
        'id_origem_comercial' => 'setIdOrigemComercial',
        'nome_origem_comercial' => 'setNomeOrigemComercial',
        'id_fantasia_basica' => 'setIdFantasiaBasica',
        'nome_fantasia_basica' => 'setNomeFantasiaBasica',
        'id_status_conta' => 'setIdStatusConta',
        'status_conta' => 'setStatusConta',
        'dia_vencimento' => 'setDiaVencimento',
        'melhor_dia_compra' => 'setMelhorDiaCompra',
        'data_status_conta' => 'setDataStatusConta',
        'valor_renda' => 'setValorRenda',
        'data_cadastro' => 'setDataCadastro',
        'data_ultima_alteracao_vencimento' => 'setDataUltimaAlteracaoVencimento',
        'data_hora_ultima_compra' => 'setDataHoraUltimaCompra',
        'numero_agencia' => 'setNumeroAgencia',
        'numero_conta_corrente' => 'setNumeroContaCorrente',
        'forma_envio_fatura' => 'setFormaEnvioFatura',
        'titular' => 'setTitular',
        'limite_global' => 'setLimiteGlobal',
        'limite_saque_global' => 'setLimiteSaqueGlobal',
        'saldo_disponivel_global' => 'setSaldoDisponivelGlobal',
        'saldo_disponivel_saque' => 'setSaldoDisponivelSaque',
        'dias_atraso' => 'setDiasAtraso'
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
        'id_pessoa' => 'getIdPessoa',
        'nome' => 'getNome',
        'id_produto' => 'getIdProduto',
        'id_origem_comercial' => 'getIdOrigemComercial',
        'nome_origem_comercial' => 'getNomeOrigemComercial',
        'id_fantasia_basica' => 'getIdFantasiaBasica',
        'nome_fantasia_basica' => 'getNomeFantasiaBasica',
        'id_status_conta' => 'getIdStatusConta',
        'status_conta' => 'getStatusConta',
        'dia_vencimento' => 'getDiaVencimento',
        'melhor_dia_compra' => 'getMelhorDiaCompra',
        'data_status_conta' => 'getDataStatusConta',
        'valor_renda' => 'getValorRenda',
        'data_cadastro' => 'getDataCadastro',
        'data_ultima_alteracao_vencimento' => 'getDataUltimaAlteracaoVencimento',
        'data_hora_ultima_compra' => 'getDataHoraUltimaCompra',
        'numero_agencia' => 'getNumeroAgencia',
        'numero_conta_corrente' => 'getNumeroContaCorrente',
        'forma_envio_fatura' => 'getFormaEnvioFatura',
        'titular' => 'getTitular',
        'limite_global' => 'getLimiteGlobal',
        'limite_saque_global' => 'getLimiteSaqueGlobal',
        'saldo_disponivel_global' => 'getSaldoDisponivelGlobal',
        'saldo_disponivel_saque' => 'getSaldoDisponivelSaque',
        'dias_atraso' => 'getDiasAtraso'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id).
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $nome Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
      * @var string
      */
    protected $nome;
    
    /**
      * $id_produto C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id).
      * @var int
      */
    protected $id_produto;
    
    /**
      * $id_origem_comercial C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta.
      * @var int
      */
    protected $id_origem_comercial;
    
    /**
      * $nome_origem_comercial Nome da origem comercial
      * @var string
      */
    protected $nome_origem_comercial;
    
    /**
      * $id_fantasia_basica C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia Basica (id).
      * @var int
      */
    protected $id_fantasia_basica;
    
    /**
      * $nome_fantasia_basica Nome da Fantasia Basica
      * @var string
      */
    protected $nome_fantasia_basica;
    
    /**
      * $id_status_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do status atribuido a conta.
      * @var int
      */
    protected $id_status_conta;
    
    /**
      * $status_conta Descri\u00C3\u00A7\u00C3\u00A3o do status da conta
      * @var string
      */
    protected $status_conta;
    
    /**
      * $dia_vencimento Apresenta o dia de vencimento.
      * @var int
      */
    protected $dia_vencimento;
    
    /**
      * $melhor_dia_compra Apresenta o melhor dia de compra.
      * @var int
      */
    protected $melhor_dia_compra;
    
    /**
      * $data_status_conta Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela.
      * @var string
      */
    protected $data_status_conta;
    
    /**
      * $valor_renda Valor da renda comprovada.
      * @var Number
      */
    protected $valor_renda;
    
    /**
      * $data_cadastro Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
      * @var string
      */
    protected $data_cadastro;
    
    /**
      * $data_ultima_alteracao_vencimento Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
      * @var string
      */
    protected $data_ultima_alteracao_vencimento;
    
    /**
      * $data_hora_ultima_compra Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
      * @var string
      */
    protected $data_hora_ultima_compra;
    
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
      * $forma_envio_fatura Forma de envio da fatura.
      * @var string
      */
    protected $forma_envio_fatura;
    
    /**
      * $titular Apresenta se a pessoa \u00C3\u00A9 titular da conta.
      * @var bool
      */
    protected $titular;
    
    /**
      * $limite_global Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui.
      * @var Number
      */
    protected $limite_global;
    
    /**
      * $limite_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
      * @var Number
      */
    protected $limite_saque_global;
    
    /**
      * $saldo_disponivel_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais.
      * @var Number
      */
    protected $saldo_disponivel_global;
    
    /**
      * $saldo_disponivel_saque Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento.
      * @var Number
      */
    protected $saldo_disponivel_saque;
    
    /**
      * $dias_atraso Apresenta a quantidade de dias que a conta esta em atraso
      * @var int
      */
    protected $dias_atraso;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->nome = $data["nome"];
            $this->id_produto = $data["id_produto"];
            $this->id_origem_comercial = $data["id_origem_comercial"];
            $this->nome_origem_comercial = $data["nome_origem_comercial"];
            $this->id_fantasia_basica = $data["id_fantasia_basica"];
            $this->nome_fantasia_basica = $data["nome_fantasia_basica"];
            $this->id_status_conta = $data["id_status_conta"];
            $this->status_conta = $data["status_conta"];
            $this->dia_vencimento = $data["dia_vencimento"];
            $this->melhor_dia_compra = $data["melhor_dia_compra"];
            $this->data_status_conta = $data["data_status_conta"];
            $this->valor_renda = $data["valor_renda"];
            $this->data_cadastro = $data["data_cadastro"];
            $this->data_ultima_alteracao_vencimento = $data["data_ultima_alteracao_vencimento"];
            $this->data_hora_ultima_compra = $data["data_hora_ultima_compra"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->numero_conta_corrente = $data["numero_conta_corrente"];
            $this->forma_envio_fatura = $data["forma_envio_fatura"];
            $this->titular = $data["titular"];
            $this->limite_global = $data["limite_global"];
            $this->limite_saque_global = $data["limite_saque_global"];
            $this->saldo_disponivel_global = $data["saldo_disponivel_global"];
            $this->saldo_disponivel_saque = $data["saldo_disponivel_saque"];
            $this->dias_atraso = $data["dias_atraso"];
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
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param int $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id).
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
     * @param string $nome Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
     * @param int $id_produto C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id).
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
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
     * @param int $id_origem_comercial C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta.
     * @return $this
     */
    public function setIdOrigemComercial($id_origem_comercial)
    {
        
        $this->id_origem_comercial = $id_origem_comercial;
        return $this;
    }
    
    /**
     * Gets nome_origem_comercial
     * @return string
     */
    public function getNomeOrigemComercial()
    {
        return $this->nome_origem_comercial;
    }
  
    /**
     * Sets nome_origem_comercial
     * @param string $nome_origem_comercial Nome da origem comercial
     * @return $this
     */
    public function setNomeOrigemComercial($nome_origem_comercial)
    {
        
        $this->nome_origem_comercial = $nome_origem_comercial;
        return $this;
    }
    
    /**
     * Gets id_fantasia_basica
     * @return int
     */
    public function getIdFantasiaBasica()
    {
        return $this->id_fantasia_basica;
    }
  
    /**
     * Sets id_fantasia_basica
     * @param int $id_fantasia_basica C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia Basica (id).
     * @return $this
     */
    public function setIdFantasiaBasica($id_fantasia_basica)
    {
        
        $this->id_fantasia_basica = $id_fantasia_basica;
        return $this;
    }
    
    /**
     * Gets nome_fantasia_basica
     * @return string
     */
    public function getNomeFantasiaBasica()
    {
        return $this->nome_fantasia_basica;
    }
  
    /**
     * Sets nome_fantasia_basica
     * @param string $nome_fantasia_basica Nome da Fantasia Basica
     * @return $this
     */
    public function setNomeFantasiaBasica($nome_fantasia_basica)
    {
        
        $this->nome_fantasia_basica = $nome_fantasia_basica;
        return $this;
    }
    
    /**
     * Gets id_status_conta
     * @return int
     */
    public function getIdStatusConta()
    {
        return $this->id_status_conta;
    }
  
    /**
     * Sets id_status_conta
     * @param int $id_status_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do status atribuido a conta.
     * @return $this
     */
    public function setIdStatusConta($id_status_conta)
    {
        
        $this->id_status_conta = $id_status_conta;
        return $this;
    }
    
    /**
     * Gets status_conta
     * @return string
     */
    public function getStatusConta()
    {
        return $this->status_conta;
    }
  
    /**
     * Sets status_conta
     * @param string $status_conta Descri\u00C3\u00A7\u00C3\u00A3o do status da conta
     * @return $this
     */
    public function setStatusConta($status_conta)
    {
        
        $this->status_conta = $status_conta;
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
     * @param int $dia_vencimento Apresenta o dia de vencimento.
     * @return $this
     */
    public function setDiaVencimento($dia_vencimento)
    {
        
        $this->dia_vencimento = $dia_vencimento;
        return $this;
    }
    
    /**
     * Gets melhor_dia_compra
     * @return int
     */
    public function getMelhorDiaCompra()
    {
        return $this->melhor_dia_compra;
    }
  
    /**
     * Sets melhor_dia_compra
     * @param int $melhor_dia_compra Apresenta o melhor dia de compra.
     * @return $this
     */
    public function setMelhorDiaCompra($melhor_dia_compra)
    {
        
        $this->melhor_dia_compra = $melhor_dia_compra;
        return $this;
    }
    
    /**
     * Gets data_status_conta
     * @return string
     */
    public function getDataStatusConta()
    {
        return $this->data_status_conta;
    }
  
    /**
     * Sets data_status_conta
     * @param string $data_status_conta Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela.
     * @return $this
     */
    public function setDataStatusConta($data_status_conta)
    {
        
        $this->data_status_conta = $data_status_conta;
        return $this;
    }
    
    /**
     * Gets valor_renda
     * @return Number
     */
    public function getValorRenda()
    {
        return $this->valor_renda;
    }
  
    /**
     * Sets valor_renda
     * @param Number $valor_renda Valor da renda comprovada.
     * @return $this
     */
    public function setValorRenda($valor_renda)
    {
        
        $this->valor_renda = $valor_renda;
        return $this;
    }
    
    /**
     * Gets data_cadastro
     * @return string
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
  
    /**
     * Sets data_cadastro
     * @param string $data_cadastro Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
     * @return $this
     */
    public function setDataCadastro($data_cadastro)
    {
        
        $this->data_cadastro = $data_cadastro;
        return $this;
    }
    
    /**
     * Gets data_ultima_alteracao_vencimento
     * @return string
     */
    public function getDataUltimaAlteracaoVencimento()
    {
        return $this->data_ultima_alteracao_vencimento;
    }
  
    /**
     * Sets data_ultima_alteracao_vencimento
     * @param string $data_ultima_alteracao_vencimento Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
     * @return $this
     */
    public function setDataUltimaAlteracaoVencimento($data_ultima_alteracao_vencimento)
    {
        
        $this->data_ultima_alteracao_vencimento = $data_ultima_alteracao_vencimento;
        return $this;
    }
    
    /**
     * Gets data_hora_ultima_compra
     * @return string
     */
    public function getDataHoraUltimaCompra()
    {
        return $this->data_hora_ultima_compra;
    }
  
    /**
     * Sets data_hora_ultima_compra
     * @param string $data_hora_ultima_compra Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
     * @return $this
     */
    public function setDataHoraUltimaCompra($data_hora_ultima_compra)
    {
        
        $this->data_hora_ultima_compra = $data_hora_ultima_compra;
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
     * Gets forma_envio_fatura
     * @return string
     */
    public function getFormaEnvioFatura()
    {
        return $this->forma_envio_fatura;
    }
  
    /**
     * Sets forma_envio_fatura
     * @param string $forma_envio_fatura Forma de envio da fatura.
     * @return $this
     */
    public function setFormaEnvioFatura($forma_envio_fatura)
    {
        
        $this->forma_envio_fatura = $forma_envio_fatura;
        return $this;
    }
    
    /**
     * Gets titular
     * @return bool
     */
    public function getTitular()
    {
        return $this->titular;
    }
  
    /**
     * Sets titular
     * @param bool $titular Apresenta se a pessoa \u00C3\u00A9 titular da conta.
     * @return $this
     */
    public function setTitular($titular)
    {
        
        $this->titular = $titular;
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
     * @param Number $limite_global Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui.
     * @return $this
     */
    public function setLimiteGlobal($limite_global)
    {
        
        $this->limite_global = $limite_global;
        return $this;
    }
    
    /**
     * Gets limite_saque_global
     * @return Number
     */
    public function getLimiteSaqueGlobal()
    {
        return $this->limite_saque_global;
    }
  
    /**
     * Sets limite_saque_global
     * @param Number $limite_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
     * @return $this
     */
    public function setLimiteSaqueGlobal($limite_saque_global)
    {
        
        $this->limite_saque_global = $limite_saque_global;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_global
     * @return Number
     */
    public function getSaldoDisponivelGlobal()
    {
        return $this->saldo_disponivel_global;
    }
  
    /**
     * Sets saldo_disponivel_global
     * @param Number $saldo_disponivel_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais.
     * @return $this
     */
    public function setSaldoDisponivelGlobal($saldo_disponivel_global)
    {
        
        $this->saldo_disponivel_global = $saldo_disponivel_global;
        return $this;
    }
    
    /**
     * Gets saldo_disponivel_saque
     * @return Number
     */
    public function getSaldoDisponivelSaque()
    {
        return $this->saldo_disponivel_saque;
    }
  
    /**
     * Sets saldo_disponivel_saque
     * @param Number $saldo_disponivel_saque Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento.
     * @return $this
     */
    public function setSaldoDisponivelSaque($saldo_disponivel_saque)
    {
        
        $this->saldo_disponivel_saque = $saldo_disponivel_saque;
        return $this;
    }
    
    /**
     * Gets dias_atraso
     * @return int
     */
    public function getDiasAtraso()
    {
        return $this->dias_atraso;
    }
  
    /**
     * Sets dias_atraso
     * @param int $dias_atraso Apresenta a quantidade de dias que a conta esta em atraso
     * @return $this
     */
    public function setDiasAtraso($dias_atraso)
    {
        
        $this->dias_atraso = $dias_atraso;
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
