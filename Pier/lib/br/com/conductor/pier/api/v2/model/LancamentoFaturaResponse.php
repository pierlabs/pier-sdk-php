<?php
/**
 * LancamentoFaturaResponse
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
 * LancamentoFaturaResponse Class Doc Comment
 *
 * @category    Class
 * @description Fatura futura
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LancamentoFaturaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_transacao' => 'int',
        'descricao_tipo_transacao' => 'string',
        'id_tipo_evento' => 'int',
        'descricao_tipo_evento' => 'string',
        'id_evento' => 'int',
        'id_conta' => 'int',
        'complemento' => 'string',
        'valor_brl' => 'Number',
        'valor_usd' => 'Number',
        'numero_parcela' => 'int',
        'quantidade_parcelas' => 'int',
        'data_hora_transacao' => 'string',
        'nome_estabelecimento' => 'string',
        'descricao_estabelecimento' => 'string',
        'nome_fantasia_estabelecimento' => 'string',
        'flag_credito' => 'bool',
        'id_mcc' => 'int',
        'id_grupo_mcc' => 'int',
        'descricao_grupo_mcc' => 'string',
        'titular' => 'bool',
        'nome_portador' => 'string',
        'numero_cartao_mascarado' => 'string',
        'flag_solicitou_contestacao' => 'bool',
        'valor_taxa_embarque' => 'Number',
        'descricao_abreviada' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_transacao' => 'idTransacao',
        'descricao_tipo_transacao' => 'descricaoTipoTransacao',
        'id_tipo_evento' => 'idTipoEvento',
        'descricao_tipo_evento' => 'descricaoTipoEvento',
        'id_evento' => 'idEvento',
        'id_conta' => 'idConta',
        'complemento' => 'complemento',
        'valor_brl' => 'valorBRL',
        'valor_usd' => 'valorUSD',
        'numero_parcela' => 'numeroParcela',
        'quantidade_parcelas' => 'quantidadeParcelas',
        'data_hora_transacao' => 'dataHoraTransacao',
        'nome_estabelecimento' => 'nomeEstabelecimento',
        'descricao_estabelecimento' => 'descricaoEstabelecimento',
        'nome_fantasia_estabelecimento' => 'nomeFantasiaEstabelecimento',
        'flag_credito' => 'flagCredito',
        'id_mcc' => 'idMCC',
        'id_grupo_mcc' => 'idGrupoMCC',
        'descricao_grupo_mcc' => 'descricaoGrupoMCC',
        'titular' => 'titular',
        'nome_portador' => 'nomePortador',
        'numero_cartao_mascarado' => 'numeroCartaoMascarado',
        'flag_solicitou_contestacao' => 'flagSolicitouContestacao',
        'valor_taxa_embarque' => 'valorTaxaEmbarque',
        'descricao_abreviada' => 'descricaoAbreviada'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_transacao' => 'setIdTransacao',
        'descricao_tipo_transacao' => 'setDescricaoTipoTransacao',
        'id_tipo_evento' => 'setIdTipoEvento',
        'descricao_tipo_evento' => 'setDescricaoTipoEvento',
        'id_evento' => 'setIdEvento',
        'id_conta' => 'setIdConta',
        'complemento' => 'setComplemento',
        'valor_brl' => 'setValorBrl',
        'valor_usd' => 'setValorUsd',
        'numero_parcela' => 'setNumeroParcela',
        'quantidade_parcelas' => 'setQuantidadeParcelas',
        'data_hora_transacao' => 'setDataHoraTransacao',
        'nome_estabelecimento' => 'setNomeEstabelecimento',
        'descricao_estabelecimento' => 'setDescricaoEstabelecimento',
        'nome_fantasia_estabelecimento' => 'setNomeFantasiaEstabelecimento',
        'flag_credito' => 'setFlagCredito',
        'id_mcc' => 'setIdMcc',
        'id_grupo_mcc' => 'setIdGrupoMcc',
        'descricao_grupo_mcc' => 'setDescricaoGrupoMcc',
        'titular' => 'setTitular',
        'nome_portador' => 'setNomePortador',
        'numero_cartao_mascarado' => 'setNumeroCartaoMascarado',
        'flag_solicitou_contestacao' => 'setFlagSolicitouContestacao',
        'valor_taxa_embarque' => 'setValorTaxaEmbarque',
        'descricao_abreviada' => 'setDescricaoAbreviada'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_transacao' => 'getIdTransacao',
        'descricao_tipo_transacao' => 'getDescricaoTipoTransacao',
        'id_tipo_evento' => 'getIdTipoEvento',
        'descricao_tipo_evento' => 'getDescricaoTipoEvento',
        'id_evento' => 'getIdEvento',
        'id_conta' => 'getIdConta',
        'complemento' => 'getComplemento',
        'valor_brl' => 'getValorBrl',
        'valor_usd' => 'getValorUsd',
        'numero_parcela' => 'getNumeroParcela',
        'quantidade_parcelas' => 'getQuantidadeParcelas',
        'data_hora_transacao' => 'getDataHoraTransacao',
        'nome_estabelecimento' => 'getNomeEstabelecimento',
        'descricao_estabelecimento' => 'getDescricaoEstabelecimento',
        'nome_fantasia_estabelecimento' => 'getNomeFantasiaEstabelecimento',
        'flag_credito' => 'getFlagCredito',
        'id_mcc' => 'getIdMcc',
        'id_grupo_mcc' => 'getIdGrupoMcc',
        'descricao_grupo_mcc' => 'getDescricaoGrupoMcc',
        'titular' => 'getTitular',
        'nome_portador' => 'getNomePortador',
        'numero_cartao_mascarado' => 'getNumeroCartaoMascarado',
        'flag_solicitou_contestacao' => 'getFlagSolicitouContestacao',
        'valor_taxa_embarque' => 'getValorTaxaEmbarque',
        'descricao_abreviada' => 'getDescricaoAbreviada'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_transacao C\u00F3digo de identifica\u00E7\u00E3o da transa\u00E7\u00E3o
      * @var int
      */
    protected $id_transacao;
    
    /**
      * $descricao_tipo_transacao Descri\u00E7\u00E3o do tipo da transa\u00E7\u00E3o
      * @var string
      */
    protected $descricao_tipo_transacao;
    
    /**
      * $id_tipo_evento C\u00F3digo identificador do tipo do evento
      * @var int
      */
    protected $id_tipo_evento;
    
    /**
      * $descricao_tipo_evento Descri\u00E7\u00E3o do tipo do evento
      * @var string
      */
    protected $descricao_tipo_evento;
    
    /**
      * $id_evento C\u00F3digo identificador do evento
      * @var int
      */
    protected $id_evento;
    
    /**
      * $id_conta C\u00F3digo de identifica\u00E7\u00E3o da conta.
      * @var int
      */
    protected $id_conta;
    
    /**
      * $complemento Descri\u00E7\u00E3o complementar do evento
      * @var string
      */
    protected $complemento;
    
    /**
      * $valor_brl Valor em reais
      * @var Number
      */
    protected $valor_brl;
    
    /**
      * $valor_usd Valor em dolar
      * @var Number
      */
    protected $valor_usd;
    
    /**
      * $numero_parcela N\u00FAmero da parcela
      * @var int
      */
    protected $numero_parcela;
    
    /**
      * $quantidade_parcelas Quantidade de parcelas
      * @var int
      */
    protected $quantidade_parcelas;
    
    /**
      * $data_hora_transacao Data da transa\u00E7\u00E3o
      * @var string
      */
    protected $data_hora_transacao;
    
    /**
      * $nome_estabelecimento Nome do estabelecimento
      * @var string
      */
    protected $nome_estabelecimento;
    
    /**
      * $descricao_estabelecimento Descri\u00E7\u00E3o do estabelecimento
      * @var string
      */
    protected $descricao_estabelecimento;
    
    /**
      * $nome_fantasia_estabelecimento Nome fantasia do estabelecimento
      * @var string
      */
    protected $nome_fantasia_estabelecimento;
    
    /**
      * $flag_credito Flag que indica se o lan\u00E7amento \u00E9 de cr\u00E9dito
      * @var bool
      */
    protected $flag_credito;
    
    /**
      * $id_mcc C\u00F3digo identificador do MCC (Merchant Category Codes)
      * @var int
      */
    protected $id_mcc;
    
    /**
      * $id_grupo_mcc C\u00F3digo identificador do grupo MCC
      * @var int
      */
    protected $id_grupo_mcc;
    
    /**
      * $descricao_grupo_mcc Descri\u00E7\u00E3o do grupo MCC
      * @var string
      */
    protected $descricao_grupo_mcc;
    
    /**
      * $titular Indica se o portador do cart\u00E3o \u00E9 o titular da conta
      * @var bool
      */
    protected $titular;
    
    /**
      * $nome_portador Nome impresso no cart\u00E3o
      * @var string
      */
    protected $nome_portador;
    
    /**
      * $numero_cartao_mascarado N\u00FAmero do cart\u00E3o mascarado
      * @var string
      */
    protected $numero_cartao_mascarado;
    
    /**
      * $flag_solicitou_contestacao Flag que indica se o cliente solicitou contesta\u00E7\u00E3o da transa\u00E7\u00E3o
      * @var bool
      */
    protected $flag_solicitou_contestacao;
    
    /**
      * $valor_taxa_embarque Valor da taxa de embarque
      * @var Number
      */
    protected $valor_taxa_embarque;
    
    /**
      * $descricao_abreviada Descri\u00E7\u00E3o abreviada da transa\u00E7\u00E3o
      * @var string
      */
    protected $descricao_abreviada;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_transacao = $data["id_transacao"];
            $this->descricao_tipo_transacao = $data["descricao_tipo_transacao"];
            $this->id_tipo_evento = $data["id_tipo_evento"];
            $this->descricao_tipo_evento = $data["descricao_tipo_evento"];
            $this->id_evento = $data["id_evento"];
            $this->id_conta = $data["id_conta"];
            $this->complemento = $data["complemento"];
            $this->valor_brl = $data["valor_brl"];
            $this->valor_usd = $data["valor_usd"];
            $this->numero_parcela = $data["numero_parcela"];
            $this->quantidade_parcelas = $data["quantidade_parcelas"];
            $this->data_hora_transacao = $data["data_hora_transacao"];
            $this->nome_estabelecimento = $data["nome_estabelecimento"];
            $this->descricao_estabelecimento = $data["descricao_estabelecimento"];
            $this->nome_fantasia_estabelecimento = $data["nome_fantasia_estabelecimento"];
            $this->flag_credito = $data["flag_credito"];
            $this->id_mcc = $data["id_mcc"];
            $this->id_grupo_mcc = $data["id_grupo_mcc"];
            $this->descricao_grupo_mcc = $data["descricao_grupo_mcc"];
            $this->titular = $data["titular"];
            $this->nome_portador = $data["nome_portador"];
            $this->numero_cartao_mascarado = $data["numero_cartao_mascarado"];
            $this->flag_solicitou_contestacao = $data["flag_solicitou_contestacao"];
            $this->valor_taxa_embarque = $data["valor_taxa_embarque"];
            $this->descricao_abreviada = $data["descricao_abreviada"];
        }
    }
    
    /**
     * Gets id_transacao
     * @return int
     */
    public function getIdTransacao()
    {
        return $this->id_transacao;
    }
  
    /**
     * Sets id_transacao
     * @param int $id_transacao C\u00F3digo de identifica\u00E7\u00E3o da transa\u00E7\u00E3o
     * @return $this
     */
    public function setIdTransacao($id_transacao)
    {
        
        $this->id_transacao = $id_transacao;
        return $this;
    }
    
    /**
     * Gets descricao_tipo_transacao
     * @return string
     */
    public function getDescricaoTipoTransacao()
    {
        return $this->descricao_tipo_transacao;
    }
  
    /**
     * Sets descricao_tipo_transacao
     * @param string $descricao_tipo_transacao Descri\u00E7\u00E3o do tipo da transa\u00E7\u00E3o
     * @return $this
     */
    public function setDescricaoTipoTransacao($descricao_tipo_transacao)
    {
        
        $this->descricao_tipo_transacao = $descricao_tipo_transacao;
        return $this;
    }
    
    /**
     * Gets id_tipo_evento
     * @return int
     */
    public function getIdTipoEvento()
    {
        return $this->id_tipo_evento;
    }
  
    /**
     * Sets id_tipo_evento
     * @param int $id_tipo_evento C\u00F3digo identificador do tipo do evento
     * @return $this
     */
    public function setIdTipoEvento($id_tipo_evento)
    {
        
        $this->id_tipo_evento = $id_tipo_evento;
        return $this;
    }
    
    /**
     * Gets descricao_tipo_evento
     * @return string
     */
    public function getDescricaoTipoEvento()
    {
        return $this->descricao_tipo_evento;
    }
  
    /**
     * Sets descricao_tipo_evento
     * @param string $descricao_tipo_evento Descri\u00E7\u00E3o do tipo do evento
     * @return $this
     */
    public function setDescricaoTipoEvento($descricao_tipo_evento)
    {
        
        $this->descricao_tipo_evento = $descricao_tipo_evento;
        return $this;
    }
    
    /**
     * Gets id_evento
     * @return int
     */
    public function getIdEvento()
    {
        return $this->id_evento;
    }
  
    /**
     * Sets id_evento
     * @param int $id_evento C\u00F3digo identificador do evento
     * @return $this
     */
    public function setIdEvento($id_evento)
    {
        
        $this->id_evento = $id_evento;
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
     * @param int $id_conta C\u00F3digo de identifica\u00E7\u00E3o da conta.
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets complemento
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }
  
    /**
     * Sets complemento
     * @param string $complemento Descri\u00E7\u00E3o complementar do evento
     * @return $this
     */
    public function setComplemento($complemento)
    {
        
        $this->complemento = $complemento;
        return $this;
    }
    
    /**
     * Gets valor_brl
     * @return Number
     */
    public function getValorBrl()
    {
        return $this->valor_brl;
    }
  
    /**
     * Sets valor_brl
     * @param Number $valor_brl Valor em reais
     * @return $this
     */
    public function setValorBrl($valor_brl)
    {
        
        $this->valor_brl = $valor_brl;
        return $this;
    }
    
    /**
     * Gets valor_usd
     * @return Number
     */
    public function getValorUsd()
    {
        return $this->valor_usd;
    }
  
    /**
     * Sets valor_usd
     * @param Number $valor_usd Valor em dolar
     * @return $this
     */
    public function setValorUsd($valor_usd)
    {
        
        $this->valor_usd = $valor_usd;
        return $this;
    }
    
    /**
     * Gets numero_parcela
     * @return int
     */
    public function getNumeroParcela()
    {
        return $this->numero_parcela;
    }
  
    /**
     * Sets numero_parcela
     * @param int $numero_parcela N\u00FAmero da parcela
     * @return $this
     */
    public function setNumeroParcela($numero_parcela)
    {
        
        $this->numero_parcela = $numero_parcela;
        return $this;
    }
    
    /**
     * Gets quantidade_parcelas
     * @return int
     */
    public function getQuantidadeParcelas()
    {
        return $this->quantidade_parcelas;
    }
  
    /**
     * Sets quantidade_parcelas
     * @param int $quantidade_parcelas Quantidade de parcelas
     * @return $this
     */
    public function setQuantidadeParcelas($quantidade_parcelas)
    {
        
        $this->quantidade_parcelas = $quantidade_parcelas;
        return $this;
    }
    
    /**
     * Gets data_hora_transacao
     * @return string
     */
    public function getDataHoraTransacao()
    {
        return $this->data_hora_transacao;
    }
  
    /**
     * Sets data_hora_transacao
     * @param string $data_hora_transacao Data da transa\u00E7\u00E3o
     * @return $this
     */
    public function setDataHoraTransacao($data_hora_transacao)
    {
        
        $this->data_hora_transacao = $data_hora_transacao;
        return $this;
    }
    
    /**
     * Gets nome_estabelecimento
     * @return string
     */
    public function getNomeEstabelecimento()
    {
        return $this->nome_estabelecimento;
    }
  
    /**
     * Sets nome_estabelecimento
     * @param string $nome_estabelecimento Nome do estabelecimento
     * @return $this
     */
    public function setNomeEstabelecimento($nome_estabelecimento)
    {
        
        $this->nome_estabelecimento = $nome_estabelecimento;
        return $this;
    }
    
    /**
     * Gets descricao_estabelecimento
     * @return string
     */
    public function getDescricaoEstabelecimento()
    {
        return $this->descricao_estabelecimento;
    }
  
    /**
     * Sets descricao_estabelecimento
     * @param string $descricao_estabelecimento Descri\u00E7\u00E3o do estabelecimento
     * @return $this
     */
    public function setDescricaoEstabelecimento($descricao_estabelecimento)
    {
        
        $this->descricao_estabelecimento = $descricao_estabelecimento;
        return $this;
    }
    
    /**
     * Gets nome_fantasia_estabelecimento
     * @return string
     */
    public function getNomeFantasiaEstabelecimento()
    {
        return $this->nome_fantasia_estabelecimento;
    }
  
    /**
     * Sets nome_fantasia_estabelecimento
     * @param string $nome_fantasia_estabelecimento Nome fantasia do estabelecimento
     * @return $this
     */
    public function setNomeFantasiaEstabelecimento($nome_fantasia_estabelecimento)
    {
        
        $this->nome_fantasia_estabelecimento = $nome_fantasia_estabelecimento;
        return $this;
    }
    
    /**
     * Gets flag_credito
     * @return bool
     */
    public function getFlagCredito()
    {
        return $this->flag_credito;
    }
  
    /**
     * Sets flag_credito
     * @param bool $flag_credito Flag que indica se o lan\u00E7amento \u00E9 de cr\u00E9dito
     * @return $this
     */
    public function setFlagCredito($flag_credito)
    {
        
        $this->flag_credito = $flag_credito;
        return $this;
    }
    
    /**
     * Gets id_mcc
     * @return int
     */
    public function getIdMcc()
    {
        return $this->id_mcc;
    }
  
    /**
     * Sets id_mcc
     * @param int $id_mcc C\u00F3digo identificador do MCC (Merchant Category Codes)
     * @return $this
     */
    public function setIdMcc($id_mcc)
    {
        
        $this->id_mcc = $id_mcc;
        return $this;
    }
    
    /**
     * Gets id_grupo_mcc
     * @return int
     */
    public function getIdGrupoMcc()
    {
        return $this->id_grupo_mcc;
    }
  
    /**
     * Sets id_grupo_mcc
     * @param int $id_grupo_mcc C\u00F3digo identificador do grupo MCC
     * @return $this
     */
    public function setIdGrupoMcc($id_grupo_mcc)
    {
        
        $this->id_grupo_mcc = $id_grupo_mcc;
        return $this;
    }
    
    /**
     * Gets descricao_grupo_mcc
     * @return string
     */
    public function getDescricaoGrupoMcc()
    {
        return $this->descricao_grupo_mcc;
    }
  
    /**
     * Sets descricao_grupo_mcc
     * @param string $descricao_grupo_mcc Descri\u00E7\u00E3o do grupo MCC
     * @return $this
     */
    public function setDescricaoGrupoMcc($descricao_grupo_mcc)
    {
        
        $this->descricao_grupo_mcc = $descricao_grupo_mcc;
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
     * @param bool $titular Indica se o portador do cart\u00E3o \u00E9 o titular da conta
     * @return $this
     */
    public function setTitular($titular)
    {
        
        $this->titular = $titular;
        return $this;
    }
    
    /**
     * Gets nome_portador
     * @return string
     */
    public function getNomePortador()
    {
        return $this->nome_portador;
    }
  
    /**
     * Sets nome_portador
     * @param string $nome_portador Nome impresso no cart\u00E3o
     * @return $this
     */
    public function setNomePortador($nome_portador)
    {
        
        $this->nome_portador = $nome_portador;
        return $this;
    }
    
    /**
     * Gets numero_cartao_mascarado
     * @return string
     */
    public function getNumeroCartaoMascarado()
    {
        return $this->numero_cartao_mascarado;
    }
  
    /**
     * Sets numero_cartao_mascarado
     * @param string $numero_cartao_mascarado N\u00FAmero do cart\u00E3o mascarado
     * @return $this
     */
    public function setNumeroCartaoMascarado($numero_cartao_mascarado)
    {
        
        $this->numero_cartao_mascarado = $numero_cartao_mascarado;
        return $this;
    }
    
    /**
     * Gets flag_solicitou_contestacao
     * @return bool
     */
    public function getFlagSolicitouContestacao()
    {
        return $this->flag_solicitou_contestacao;
    }
  
    /**
     * Sets flag_solicitou_contestacao
     * @param bool $flag_solicitou_contestacao Flag que indica se o cliente solicitou contesta\u00E7\u00E3o da transa\u00E7\u00E3o
     * @return $this
     */
    public function setFlagSolicitouContestacao($flag_solicitou_contestacao)
    {
        
        $this->flag_solicitou_contestacao = $flag_solicitou_contestacao;
        return $this;
    }
    
    /**
     * Gets valor_taxa_embarque
     * @return Number
     */
    public function getValorTaxaEmbarque()
    {
        return $this->valor_taxa_embarque;
    }
  
    /**
     * Sets valor_taxa_embarque
     * @param Number $valor_taxa_embarque Valor da taxa de embarque
     * @return $this
     */
    public function setValorTaxaEmbarque($valor_taxa_embarque)
    {
        
        $this->valor_taxa_embarque = $valor_taxa_embarque;
        return $this;
    }
    
    /**
     * Gets descricao_abreviada
     * @return string
     */
    public function getDescricaoAbreviada()
    {
        return $this->descricao_abreviada;
    }
  
    /**
     * Sets descricao_abreviada
     * @param string $descricao_abreviada Descri\u00E7\u00E3o abreviada da transa\u00E7\u00E3o
     * @return $this
     */
    public function setDescricaoAbreviada($descricao_abreviada)
    {
        
        $this->descricao_abreviada = $descricao_abreviada;
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
