<?php
/**
 * TransacaoNaoProcessadaResponse
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
 * TransacaoNaoProcessadaResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{transacao_nao_processada_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransacaoNaoProcessadaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'cartao_mascarado' => 'string',
        'codigo_autorizacao' => 'string',
        'codigo_mcc' => 'int',
        'codigo_moeda_destino' => 'string',
        'codigo_moeda_origem' => 'string',
        'codigo_referencia' => 'string',
        'codigo_terminal' => 'string',
        'cotacao_usd' => 'Number',
        'data_cotacao_usd' => 'string',
        'data_faturamento' => 'string',
        'data_origem' => 'string',
        'data_vencimento_real' => 'string',
        'descricao_abreviada' => 'string',
        'descricao_tipo_transacao_nao_processada' => 'string',
        'detalhes_transacao' => 'string',
        'flag_credito' => 'int',
        'flag_faturado' => 'int',
        'grupo_descricao_mcc' => 'string',
        'grupo_mcc' => 'int',
        'id_conta' => 'int',
        'id_estabelecimento' => 'int',
        'id_tipo_transacao_nao_processada' => 'int',
        'id_transacao_estorno' => 'int',
        'localidade_estabelecimento' => 'string',
        'modo_entrada_transacao' => 'string',
        'nome_estabelecimento' => 'string',
        'nome_fantasia_estabelecimento' => 'string',
        'nome_portador' => 'string',
        'parcela' => 'int',
        'plano' => 'int',
        'status' => 'int',
        'taxa_embarque' => 'Number',
        'valor_brl' => 'Number',
        'valor_entrada' => 'Number',
        'valor_usd' => 'Number'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'cartao_mascarado' => 'cartaoMascarado',
        'codigo_autorizacao' => 'codigoAutorizacao',
        'codigo_mcc' => 'codigoMCC',
        'codigo_moeda_destino' => 'codigoMoedaDestino',
        'codigo_moeda_origem' => 'codigoMoedaOrigem',
        'codigo_referencia' => 'codigoReferencia',
        'codigo_terminal' => 'codigoTerminal',
        'cotacao_usd' => 'cotacaoUSD',
        'data_cotacao_usd' => 'dataCotacaoUSD',
        'data_faturamento' => 'dataFaturamento',
        'data_origem' => 'dataOrigem',
        'data_vencimento_real' => 'dataVencimentoReal',
        'descricao_abreviada' => 'descricaoAbreviada',
        'descricao_tipo_transacao_nao_processada' => 'descricaoTipoTransacaoNaoProcessada',
        'detalhes_transacao' => 'detalhesTransacao',
        'flag_credito' => 'flagCredito',
        'flag_faturado' => 'flagFaturado',
        'grupo_descricao_mcc' => 'grupoDescricaoMCC',
        'grupo_mcc' => 'grupoMCC',
        'id_conta' => 'idConta',
        'id_estabelecimento' => 'idEstabelecimento',
        'id_tipo_transacao_nao_processada' => 'idTipoTransacaoNaoProcessada',
        'id_transacao_estorno' => 'idTransacaoEstorno',
        'localidade_estabelecimento' => 'localidadeEstabelecimento',
        'modo_entrada_transacao' => 'modoEntradaTransacao',
        'nome_estabelecimento' => 'nomeEstabelecimento',
        'nome_fantasia_estabelecimento' => 'nomeFantasiaEstabelecimento',
        'nome_portador' => 'nomePortador',
        'parcela' => 'parcela',
        'plano' => 'plano',
        'status' => 'status',
        'taxa_embarque' => 'taxaEmbarque',
        'valor_brl' => 'valorBRL',
        'valor_entrada' => 'valorEntrada',
        'valor_usd' => 'valorUSD'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'cartao_mascarado' => 'setCartaoMascarado',
        'codigo_autorizacao' => 'setCodigoAutorizacao',
        'codigo_mcc' => 'setCodigoMcc',
        'codigo_moeda_destino' => 'setCodigoMoedaDestino',
        'codigo_moeda_origem' => 'setCodigoMoedaOrigem',
        'codigo_referencia' => 'setCodigoReferencia',
        'codigo_terminal' => 'setCodigoTerminal',
        'cotacao_usd' => 'setCotacaoUsd',
        'data_cotacao_usd' => 'setDataCotacaoUsd',
        'data_faturamento' => 'setDataFaturamento',
        'data_origem' => 'setDataOrigem',
        'data_vencimento_real' => 'setDataVencimentoReal',
        'descricao_abreviada' => 'setDescricaoAbreviada',
        'descricao_tipo_transacao_nao_processada' => 'setDescricaoTipoTransacaoNaoProcessada',
        'detalhes_transacao' => 'setDetalhesTransacao',
        'flag_credito' => 'setFlagCredito',
        'flag_faturado' => 'setFlagFaturado',
        'grupo_descricao_mcc' => 'setGrupoDescricaoMcc',
        'grupo_mcc' => 'setGrupoMcc',
        'id_conta' => 'setIdConta',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'id_tipo_transacao_nao_processada' => 'setIdTipoTransacaoNaoProcessada',
        'id_transacao_estorno' => 'setIdTransacaoEstorno',
        'localidade_estabelecimento' => 'setLocalidadeEstabelecimento',
        'modo_entrada_transacao' => 'setModoEntradaTransacao',
        'nome_estabelecimento' => 'setNomeEstabelecimento',
        'nome_fantasia_estabelecimento' => 'setNomeFantasiaEstabelecimento',
        'nome_portador' => 'setNomePortador',
        'parcela' => 'setParcela',
        'plano' => 'setPlano',
        'status' => 'setStatus',
        'taxa_embarque' => 'setTaxaEmbarque',
        'valor_brl' => 'setValorBrl',
        'valor_entrada' => 'setValorEntrada',
        'valor_usd' => 'setValorUsd'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'cartao_mascarado' => 'getCartaoMascarado',
        'codigo_autorizacao' => 'getCodigoAutorizacao',
        'codigo_mcc' => 'getCodigoMcc',
        'codigo_moeda_destino' => 'getCodigoMoedaDestino',
        'codigo_moeda_origem' => 'getCodigoMoedaOrigem',
        'codigo_referencia' => 'getCodigoReferencia',
        'codigo_terminal' => 'getCodigoTerminal',
        'cotacao_usd' => 'getCotacaoUsd',
        'data_cotacao_usd' => 'getDataCotacaoUsd',
        'data_faturamento' => 'getDataFaturamento',
        'data_origem' => 'getDataOrigem',
        'data_vencimento_real' => 'getDataVencimentoReal',
        'descricao_abreviada' => 'getDescricaoAbreviada',
        'descricao_tipo_transacao_nao_processada' => 'getDescricaoTipoTransacaoNaoProcessada',
        'detalhes_transacao' => 'getDetalhesTransacao',
        'flag_credito' => 'getFlagCredito',
        'flag_faturado' => 'getFlagFaturado',
        'grupo_descricao_mcc' => 'getGrupoDescricaoMcc',
        'grupo_mcc' => 'getGrupoMcc',
        'id_conta' => 'getIdConta',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'id_tipo_transacao_nao_processada' => 'getIdTipoTransacaoNaoProcessada',
        'id_transacao_estorno' => 'getIdTransacaoEstorno',
        'localidade_estabelecimento' => 'getLocalidadeEstabelecimento',
        'modo_entrada_transacao' => 'getModoEntradaTransacao',
        'nome_estabelecimento' => 'getNomeEstabelecimento',
        'nome_fantasia_estabelecimento' => 'getNomeFantasiaEstabelecimento',
        'nome_portador' => 'getNomePortador',
        'parcela' => 'getParcela',
        'plano' => 'getPlano',
        'status' => 'getStatus',
        'taxa_embarque' => 'getTaxaEmbarque',
        'valor_brl' => 'getValorBrl',
        'valor_entrada' => 'getValorEntrada',
        'valor_usd' => 'getValorUsd'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $cartao_mascarado {{{transacao_nao_processada_response_cartao_mascarado_value}}}
      * @var string
      */
    protected $cartao_mascarado;
    
    /**
      * $codigo_autorizacao {{{transacao_nao_processada_response_codigo_autorizacao_value}}}
      * @var string
      */
    protected $codigo_autorizacao;
    
    /**
      * $codigo_mcc {{{transacao_nao_processada_response_codigo_mcc_value}}}
      * @var int
      */
    protected $codigo_mcc;
    
    /**
      * $codigo_moeda_destino {{{transacao_nao_processada_response_codigo_moeda_destino_value}}}
      * @var string
      */
    protected $codigo_moeda_destino;
    
    /**
      * $codigo_moeda_origem {{{transacao_nao_processada_response_codigo_moeda_origem_value}}}
      * @var string
      */
    protected $codigo_moeda_origem;
    
    /**
      * $codigo_referencia {{{transacao_nao_processada_response_codigo_referencia_value}}}
      * @var string
      */
    protected $codigo_referencia;
    
    /**
      * $codigo_terminal {{{transacao_nao_processada_response_codigo_terminal_value}}}
      * @var string
      */
    protected $codigo_terminal;
    
    /**
      * $cotacao_usd {{{transacao_nao_processada_response_cotacao_usd_value}}}
      * @var Number
      */
    protected $cotacao_usd;
    
    /**
      * $data_cotacao_usd {{{transacao_nao_processada_response_data_cotacao_usd_value}}}
      * @var string
      */
    protected $data_cotacao_usd;
    
    /**
      * $data_faturamento {{{transacao_nao_processada_response_data_faturamento_value}}}
      * @var string
      */
    protected $data_faturamento;
    
    /**
      * $data_origem {{{transacao_nao_processada_response_data_origem_value}}}
      * @var string
      */
    protected $data_origem;
    
    /**
      * $data_vencimento_real {{{transacao_nao_processada_response_data_vencimento_value}}}
      * @var string
      */
    protected $data_vencimento_real;
    
    /**
      * $descricao_abreviada {{{transacao_nao_processada_response_descricao_abreviada_value}}}
      * @var string
      */
    protected $descricao_abreviada;
    
    /**
      * $descricao_tipo_transacao_nao_processada {{{transacao_nao_processada_response_descricao_tipo_transacao_nao_processada_value}}}
      * @var string
      */
    protected $descricao_tipo_transacao_nao_processada;
    
    /**
      * $detalhes_transacao {{{transacao_nao_processada_response_detalhes_transacao_value}}}
      * @var string
      */
    protected $detalhes_transacao;
    
    /**
      * $flag_credito {{{transacao_nao_processada_response_flag_credito_value}}}
      * @var int
      */
    protected $flag_credito;
    
    /**
      * $flag_faturado {{{transacao_nao_processada_response_flag_faturado_value}}}
      * @var int
      */
    protected $flag_faturado;
    
    /**
      * $grupo_descricao_mcc {{{transacao_nao_processada_response_grupo_descricao_mcc_value}}}
      * @var string
      */
    protected $grupo_descricao_mcc;
    
    /**
      * $grupo_mcc {{{transacao_nao_processada_response_grupo_mcc_value}}}
      * @var int
      */
    protected $grupo_mcc;
    
    /**
      * $id_conta {{{transacao_nao_processada_response_id_conta_value}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_estabelecimento {{{transacao_nao_processada_response_id_estabelecimento_value}}}
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $id_tipo_transacao_nao_processada {{{transacao_nao_processada_response_id_tipo_transacao_nao_processada_value}}}
      * @var int
      */
    protected $id_tipo_transacao_nao_processada;
    
    /**
      * $id_transacao_estorno {{{transacao_nao_processada_response_id_transacao_estorno_value}}}
      * @var int
      */
    protected $id_transacao_estorno;
    
    /**
      * $localidade_estabelecimento {{{transacao_nao_processada_response_localidade_estabelecimento_value}}}
      * @var string
      */
    protected $localidade_estabelecimento;
    
    /**
      * $modo_entrada_transacao {{{transacao_nao_processada_response_modo_entrada_transacao_value}}}
      * @var string
      */
    protected $modo_entrada_transacao;
    
    /**
      * $nome_estabelecimento {{{transacao_nao_processada_response_nome_estabelecimento_value}}}
      * @var string
      */
    protected $nome_estabelecimento;
    
    /**
      * $nome_fantasia_estabelecimento {{{transacao_nao_processada_response_nome_fantasia_estabelecimento_value}}}
      * @var string
      */
    protected $nome_fantasia_estabelecimento;
    
    /**
      * $nome_portador {{{transacao_nao_processada_response_nome_portador_value}}}
      * @var string
      */
    protected $nome_portador;
    
    /**
      * $parcela {{{transacao_nao_processada_response_numero_parcela_value}}}
      * @var int
      */
    protected $parcela;
    
    /**
      * $plano {{{transacao_nao_processada_response_plano_parcelamento_value}}}
      * @var int
      */
    protected $plano;
    
    /**
      * $status {{{transacao_nao_processada_response_status_value}}}
      * @var int
      */
    protected $status;
    
    /**
      * $taxa_embarque {{{transacao_nao_processada_response_valor_taxa_embarque_value}}}
      * @var Number
      */
    protected $taxa_embarque;
    
    /**
      * $valor_brl {{{transacao_nao_processada_response_valor_brl_value}}}
      * @var Number
      */
    protected $valor_brl;
    
    /**
      * $valor_entrada {{{transacao_nao_processada_response_valor_entrada_value}}}
      * @var Number
      */
    protected $valor_entrada;
    
    /**
      * $valor_usd {{{transacao_nao_processada_response_valor_usd_value}}}
      * @var Number
      */
    protected $valor_usd;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->cartao_mascarado = $data["cartao_mascarado"];
            $this->codigo_autorizacao = $data["codigo_autorizacao"];
            $this->codigo_mcc = $data["codigo_mcc"];
            $this->codigo_moeda_destino = $data["codigo_moeda_destino"];
            $this->codigo_moeda_origem = $data["codigo_moeda_origem"];
            $this->codigo_referencia = $data["codigo_referencia"];
            $this->codigo_terminal = $data["codigo_terminal"];
            $this->cotacao_usd = $data["cotacao_usd"];
            $this->data_cotacao_usd = $data["data_cotacao_usd"];
            $this->data_faturamento = $data["data_faturamento"];
            $this->data_origem = $data["data_origem"];
            $this->data_vencimento_real = $data["data_vencimento_real"];
            $this->descricao_abreviada = $data["descricao_abreviada"];
            $this->descricao_tipo_transacao_nao_processada = $data["descricao_tipo_transacao_nao_processada"];
            $this->detalhes_transacao = $data["detalhes_transacao"];
            $this->flag_credito = $data["flag_credito"];
            $this->flag_faturado = $data["flag_faturado"];
            $this->grupo_descricao_mcc = $data["grupo_descricao_mcc"];
            $this->grupo_mcc = $data["grupo_mcc"];
            $this->id_conta = $data["id_conta"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->id_tipo_transacao_nao_processada = $data["id_tipo_transacao_nao_processada"];
            $this->id_transacao_estorno = $data["id_transacao_estorno"];
            $this->localidade_estabelecimento = $data["localidade_estabelecimento"];
            $this->modo_entrada_transacao = $data["modo_entrada_transacao"];
            $this->nome_estabelecimento = $data["nome_estabelecimento"];
            $this->nome_fantasia_estabelecimento = $data["nome_fantasia_estabelecimento"];
            $this->nome_portador = $data["nome_portador"];
            $this->parcela = $data["parcela"];
            $this->plano = $data["plano"];
            $this->status = $data["status"];
            $this->taxa_embarque = $data["taxa_embarque"];
            $this->valor_brl = $data["valor_brl"];
            $this->valor_entrada = $data["valor_entrada"];
            $this->valor_usd = $data["valor_usd"];
        }
    }
    
    /**
     * Gets cartao_mascarado
     * @return string
     */
    public function getCartaoMascarado()
    {
        return $this->cartao_mascarado;
    }
  
    /**
     * Sets cartao_mascarado
     * @param string $cartao_mascarado {{{transacao_nao_processada_response_cartao_mascarado_value}}}
     * @return $this
     */
    public function setCartaoMascarado($cartao_mascarado)
    {
        
        $this->cartao_mascarado = $cartao_mascarado;
        return $this;
    }
    
    /**
     * Gets codigo_autorizacao
     * @return string
     */
    public function getCodigoAutorizacao()
    {
        return $this->codigo_autorizacao;
    }
  
    /**
     * Sets codigo_autorizacao
     * @param string $codigo_autorizacao {{{transacao_nao_processada_response_codigo_autorizacao_value}}}
     * @return $this
     */
    public function setCodigoAutorizacao($codigo_autorizacao)
    {
        
        $this->codigo_autorizacao = $codigo_autorizacao;
        return $this;
    }
    
    /**
     * Gets codigo_mcc
     * @return int
     */
    public function getCodigoMcc()
    {
        return $this->codigo_mcc;
    }
  
    /**
     * Sets codigo_mcc
     * @param int $codigo_mcc {{{transacao_nao_processada_response_codigo_mcc_value}}}
     * @return $this
     */
    public function setCodigoMcc($codigo_mcc)
    {
        
        $this->codigo_mcc = $codigo_mcc;
        return $this;
    }
    
    /**
     * Gets codigo_moeda_destino
     * @return string
     */
    public function getCodigoMoedaDestino()
    {
        return $this->codigo_moeda_destino;
    }
  
    /**
     * Sets codigo_moeda_destino
     * @param string $codigo_moeda_destino {{{transacao_nao_processada_response_codigo_moeda_destino_value}}}
     * @return $this
     */
    public function setCodigoMoedaDestino($codigo_moeda_destino)
    {
        
        $this->codigo_moeda_destino = $codigo_moeda_destino;
        return $this;
    }
    
    /**
     * Gets codigo_moeda_origem
     * @return string
     */
    public function getCodigoMoedaOrigem()
    {
        return $this->codigo_moeda_origem;
    }
  
    /**
     * Sets codigo_moeda_origem
     * @param string $codigo_moeda_origem {{{transacao_nao_processada_response_codigo_moeda_origem_value}}}
     * @return $this
     */
    public function setCodigoMoedaOrigem($codigo_moeda_origem)
    {
        
        $this->codigo_moeda_origem = $codigo_moeda_origem;
        return $this;
    }
    
    /**
     * Gets codigo_referencia
     * @return string
     */
    public function getCodigoReferencia()
    {
        return $this->codigo_referencia;
    }
  
    /**
     * Sets codigo_referencia
     * @param string $codigo_referencia {{{transacao_nao_processada_response_codigo_referencia_value}}}
     * @return $this
     */
    public function setCodigoReferencia($codigo_referencia)
    {
        
        $this->codigo_referencia = $codigo_referencia;
        return $this;
    }
    
    /**
     * Gets codigo_terminal
     * @return string
     */
    public function getCodigoTerminal()
    {
        return $this->codigo_terminal;
    }
  
    /**
     * Sets codigo_terminal
     * @param string $codigo_terminal {{{transacao_nao_processada_response_codigo_terminal_value}}}
     * @return $this
     */
    public function setCodigoTerminal($codigo_terminal)
    {
        
        $this->codigo_terminal = $codigo_terminal;
        return $this;
    }
    
    /**
     * Gets cotacao_usd
     * @return Number
     */
    public function getCotacaoUsd()
    {
        return $this->cotacao_usd;
    }
  
    /**
     * Sets cotacao_usd
     * @param Number $cotacao_usd {{{transacao_nao_processada_response_cotacao_usd_value}}}
     * @return $this
     */
    public function setCotacaoUsd($cotacao_usd)
    {
        
        $this->cotacao_usd = $cotacao_usd;
        return $this;
    }
    
    /**
     * Gets data_cotacao_usd
     * @return string
     */
    public function getDataCotacaoUsd()
    {
        return $this->data_cotacao_usd;
    }
  
    /**
     * Sets data_cotacao_usd
     * @param string $data_cotacao_usd {{{transacao_nao_processada_response_data_cotacao_usd_value}}}
     * @return $this
     */
    public function setDataCotacaoUsd($data_cotacao_usd)
    {
        
        $this->data_cotacao_usd = $data_cotacao_usd;
        return $this;
    }
    
    /**
     * Gets data_faturamento
     * @return string
     */
    public function getDataFaturamento()
    {
        return $this->data_faturamento;
    }
  
    /**
     * Sets data_faturamento
     * @param string $data_faturamento {{{transacao_nao_processada_response_data_faturamento_value}}}
     * @return $this
     */
    public function setDataFaturamento($data_faturamento)
    {
        
        $this->data_faturamento = $data_faturamento;
        return $this;
    }
    
    /**
     * Gets data_origem
     * @return string
     */
    public function getDataOrigem()
    {
        return $this->data_origem;
    }
  
    /**
     * Sets data_origem
     * @param string $data_origem {{{transacao_nao_processada_response_data_origem_value}}}
     * @return $this
     */
    public function setDataOrigem($data_origem)
    {
        
        $this->data_origem = $data_origem;
        return $this;
    }
    
    /**
     * Gets data_vencimento_real
     * @return string
     */
    public function getDataVencimentoReal()
    {
        return $this->data_vencimento_real;
    }
  
    /**
     * Sets data_vencimento_real
     * @param string $data_vencimento_real {{{transacao_nao_processada_response_data_vencimento_value}}}
     * @return $this
     */
    public function setDataVencimentoReal($data_vencimento_real)
    {
        
        $this->data_vencimento_real = $data_vencimento_real;
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
     * @param string $descricao_abreviada {{{transacao_nao_processada_response_descricao_abreviada_value}}}
     * @return $this
     */
    public function setDescricaoAbreviada($descricao_abreviada)
    {
        
        $this->descricao_abreviada = $descricao_abreviada;
        return $this;
    }
    
    /**
     * Gets descricao_tipo_transacao_nao_processada
     * @return string
     */
    public function getDescricaoTipoTransacaoNaoProcessada()
    {
        return $this->descricao_tipo_transacao_nao_processada;
    }
  
    /**
     * Sets descricao_tipo_transacao_nao_processada
     * @param string $descricao_tipo_transacao_nao_processada {{{transacao_nao_processada_response_descricao_tipo_transacao_nao_processada_value}}}
     * @return $this
     */
    public function setDescricaoTipoTransacaoNaoProcessada($descricao_tipo_transacao_nao_processada)
    {
        
        $this->descricao_tipo_transacao_nao_processada = $descricao_tipo_transacao_nao_processada;
        return $this;
    }
    
    /**
     * Gets detalhes_transacao
     * @return string
     */
    public function getDetalhesTransacao()
    {
        return $this->detalhes_transacao;
    }
  
    /**
     * Sets detalhes_transacao
     * @param string $detalhes_transacao {{{transacao_nao_processada_response_detalhes_transacao_value}}}
     * @return $this
     */
    public function setDetalhesTransacao($detalhes_transacao)
    {
        
        $this->detalhes_transacao = $detalhes_transacao;
        return $this;
    }
    
    /**
     * Gets flag_credito
     * @return int
     */
    public function getFlagCredito()
    {
        return $this->flag_credito;
    }
  
    /**
     * Sets flag_credito
     * @param int $flag_credito {{{transacao_nao_processada_response_flag_credito_value}}}
     * @return $this
     */
    public function setFlagCredito($flag_credito)
    {
        
        $this->flag_credito = $flag_credito;
        return $this;
    }
    
    /**
     * Gets flag_faturado
     * @return int
     */
    public function getFlagFaturado()
    {
        return $this->flag_faturado;
    }
  
    /**
     * Sets flag_faturado
     * @param int $flag_faturado {{{transacao_nao_processada_response_flag_faturado_value}}}
     * @return $this
     */
    public function setFlagFaturado($flag_faturado)
    {
        
        $this->flag_faturado = $flag_faturado;
        return $this;
    }
    
    /**
     * Gets grupo_descricao_mcc
     * @return string
     */
    public function getGrupoDescricaoMcc()
    {
        return $this->grupo_descricao_mcc;
    }
  
    /**
     * Sets grupo_descricao_mcc
     * @param string $grupo_descricao_mcc {{{transacao_nao_processada_response_grupo_descricao_mcc_value}}}
     * @return $this
     */
    public function setGrupoDescricaoMcc($grupo_descricao_mcc)
    {
        
        $this->grupo_descricao_mcc = $grupo_descricao_mcc;
        return $this;
    }
    
    /**
     * Gets grupo_mcc
     * @return int
     */
    public function getGrupoMcc()
    {
        return $this->grupo_mcc;
    }
  
    /**
     * Sets grupo_mcc
     * @param int $grupo_mcc {{{transacao_nao_processada_response_grupo_mcc_value}}}
     * @return $this
     */
    public function setGrupoMcc($grupo_mcc)
    {
        
        $this->grupo_mcc = $grupo_mcc;
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
     * @param int $id_conta {{{transacao_nao_processada_response_id_conta_value}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_estabelecimento
     * @return int
     */
    public function getIdEstabelecimento()
    {
        return $this->id_estabelecimento;
    }
  
    /**
     * Sets id_estabelecimento
     * @param int $id_estabelecimento {{{transacao_nao_processada_response_id_estabelecimento_value}}}
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
        return $this;
    }
    
    /**
     * Gets id_tipo_transacao_nao_processada
     * @return int
     */
    public function getIdTipoTransacaoNaoProcessada()
    {
        return $this->id_tipo_transacao_nao_processada;
    }
  
    /**
     * Sets id_tipo_transacao_nao_processada
     * @param int $id_tipo_transacao_nao_processada {{{transacao_nao_processada_response_id_tipo_transacao_nao_processada_value}}}
     * @return $this
     */
    public function setIdTipoTransacaoNaoProcessada($id_tipo_transacao_nao_processada)
    {
        
        $this->id_tipo_transacao_nao_processada = $id_tipo_transacao_nao_processada;
        return $this;
    }
    
    /**
     * Gets id_transacao_estorno
     * @return int
     */
    public function getIdTransacaoEstorno()
    {
        return $this->id_transacao_estorno;
    }
  
    /**
     * Sets id_transacao_estorno
     * @param int $id_transacao_estorno {{{transacao_nao_processada_response_id_transacao_estorno_value}}}
     * @return $this
     */
    public function setIdTransacaoEstorno($id_transacao_estorno)
    {
        
        $this->id_transacao_estorno = $id_transacao_estorno;
        return $this;
    }
    
    /**
     * Gets localidade_estabelecimento
     * @return string
     */
    public function getLocalidadeEstabelecimento()
    {
        return $this->localidade_estabelecimento;
    }
  
    /**
     * Sets localidade_estabelecimento
     * @param string $localidade_estabelecimento {{{transacao_nao_processada_response_localidade_estabelecimento_value}}}
     * @return $this
     */
    public function setLocalidadeEstabelecimento($localidade_estabelecimento)
    {
        
        $this->localidade_estabelecimento = $localidade_estabelecimento;
        return $this;
    }
    
    /**
     * Gets modo_entrada_transacao
     * @return string
     */
    public function getModoEntradaTransacao()
    {
        return $this->modo_entrada_transacao;
    }
  
    /**
     * Sets modo_entrada_transacao
     * @param string $modo_entrada_transacao {{{transacao_nao_processada_response_modo_entrada_transacao_value}}}
     * @return $this
     */
    public function setModoEntradaTransacao($modo_entrada_transacao)
    {
        
        $this->modo_entrada_transacao = $modo_entrada_transacao;
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
     * @param string $nome_estabelecimento {{{transacao_nao_processada_response_nome_estabelecimento_value}}}
     * @return $this
     */
    public function setNomeEstabelecimento($nome_estabelecimento)
    {
        
        $this->nome_estabelecimento = $nome_estabelecimento;
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
     * @param string $nome_fantasia_estabelecimento {{{transacao_nao_processada_response_nome_fantasia_estabelecimento_value}}}
     * @return $this
     */
    public function setNomeFantasiaEstabelecimento($nome_fantasia_estabelecimento)
    {
        
        $this->nome_fantasia_estabelecimento = $nome_fantasia_estabelecimento;
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
     * @param string $nome_portador {{{transacao_nao_processada_response_nome_portador_value}}}
     * @return $this
     */
    public function setNomePortador($nome_portador)
    {
        
        $this->nome_portador = $nome_portador;
        return $this;
    }
    
    /**
     * Gets parcela
     * @return int
     */
    public function getParcela()
    {
        return $this->parcela;
    }
  
    /**
     * Sets parcela
     * @param int $parcela {{{transacao_nao_processada_response_numero_parcela_value}}}
     * @return $this
     */
    public function setParcela($parcela)
    {
        
        $this->parcela = $parcela;
        return $this;
    }
    
    /**
     * Gets plano
     * @return int
     */
    public function getPlano()
    {
        return $this->plano;
    }
  
    /**
     * Sets plano
     * @param int $plano {{{transacao_nao_processada_response_plano_parcelamento_value}}}
     * @return $this
     */
    public function setPlano($plano)
    {
        
        $this->plano = $plano;
        return $this;
    }
    
    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param int $status {{{transacao_nao_processada_response_status_value}}}
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets taxa_embarque
     * @return Number
     */
    public function getTaxaEmbarque()
    {
        return $this->taxa_embarque;
    }
  
    /**
     * Sets taxa_embarque
     * @param Number $taxa_embarque {{{transacao_nao_processada_response_valor_taxa_embarque_value}}}
     * @return $this
     */
    public function setTaxaEmbarque($taxa_embarque)
    {
        
        $this->taxa_embarque = $taxa_embarque;
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
     * @param Number $valor_brl {{{transacao_nao_processada_response_valor_brl_value}}}
     * @return $this
     */
    public function setValorBrl($valor_brl)
    {
        
        $this->valor_brl = $valor_brl;
        return $this;
    }
    
    /**
     * Gets valor_entrada
     * @return Number
     */
    public function getValorEntrada()
    {
        return $this->valor_entrada;
    }
  
    /**
     * Sets valor_entrada
     * @param Number $valor_entrada {{{transacao_nao_processada_response_valor_entrada_value}}}
     * @return $this
     */
    public function setValorEntrada($valor_entrada)
    {
        
        $this->valor_entrada = $valor_entrada;
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
     * @param Number $valor_usd {{{transacao_nao_processada_response_valor_usd_value}}}
     * @return $this
     */
    public function setValorUsd($valor_usd)
    {
        
        $this->valor_usd = $valor_usd;
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
