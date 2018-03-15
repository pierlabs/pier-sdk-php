<?php
/**
 * TransacoesCorrentesResponse
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
 * TransacoesCorrentesResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto transacoes correntes
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransacoesCorrentesResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_tipo_transacao' => 'int',
        'descricao_abreviada' => 'string',
        'status_transacao' => 'string',
        'id_evento' => 'int',
        'tipo_evento' => 'string',
        'id_conta' => 'int',
        'cartao_mascarado' => 'string',
        'nome_portador' => 'string',
        'data_transacao' => 'string',
        'data_faturamento' => 'string',
        'data_vencimento' => 'string',
        'modo_entrada_transacao' => 'string',
        'valor_taxa_embarque' => 'Number',
        'valor_entrada' => 'Number',
        'valor_brl' => 'Number',
        'valor_usd' => 'Number',
        'cotacao_usd' => 'Number',
        'data_cotacao_usd' => 'string',
        'codigo_moeda_origem' => 'string',
        'codigo_moeda_destino' => 'string',
        'codigo_autorizacao' => 'string',
        'codigo_referencia' => 'string',
        'codigo_terminal' => 'string',
        'codigo_mcc' => 'int',
        'grupo_mcc' => 'int',
        'grupo_descricao_mcc' => 'string',
        'id_estabelecimento' => 'int',
        'nome_estabelecimento' => 'string',
        'nome_fantasia_estabelecimento' => 'string',
        'localidade_estabelecimento' => 'string',
        'plano_parcelamento' => 'int',
        'numero_parcela' => 'int',
        'detalhes_transacao' => 'string',
        'flag_credito' => 'int',
        'flag_faturado' => 'int',
        'flag_estorno' => 'int',
        'id_transacao_estorno' => 'int'
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
        'id_tipo_transacao' => 'idTipoTransacao',
        'descricao_abreviada' => 'descricaoAbreviada',
        'status_transacao' => 'statusTransacao',
        'id_evento' => 'idEvento',
        'tipo_evento' => 'tipoEvento',
        'id_conta' => 'idConta',
        'cartao_mascarado' => 'cartaoMascarado',
        'nome_portador' => 'nomePortador',
        'data_transacao' => 'dataTransacao',
        'data_faturamento' => 'dataFaturamento',
        'data_vencimento' => 'dataVencimento',
        'modo_entrada_transacao' => 'modoEntradaTransacao',
        'valor_taxa_embarque' => 'valorTaxaEmbarque',
        'valor_entrada' => 'valorEntrada',
        'valor_brl' => 'valorBRL',
        'valor_usd' => 'valorUSD',
        'cotacao_usd' => 'cotacaoUSD',
        'data_cotacao_usd' => 'dataCotacaoUSD',
        'codigo_moeda_origem' => 'codigoMoedaOrigem',
        'codigo_moeda_destino' => 'codigoMoedaDestino',
        'codigo_autorizacao' => 'codigoAutorizacao',
        'codigo_referencia' => 'codigoReferencia',
        'codigo_terminal' => 'codigoTerminal',
        'codigo_mcc' => 'codigoMCC',
        'grupo_mcc' => 'grupoMCC',
        'grupo_descricao_mcc' => 'grupoDescricaoMCC',
        'id_estabelecimento' => 'idEstabelecimento',
        'nome_estabelecimento' => 'nomeEstabelecimento',
        'nome_fantasia_estabelecimento' => 'nomeFantasiaEstabelecimento',
        'localidade_estabelecimento' => 'localidadeEstabelecimento',
        'plano_parcelamento' => 'planoParcelamento',
        'numero_parcela' => 'numeroParcela',
        'detalhes_transacao' => 'detalhesTransacao',
        'flag_credito' => 'flagCredito',
        'flag_faturado' => 'flagFaturado',
        'flag_estorno' => 'flagEstorno',
        'id_transacao_estorno' => 'idTransacaoEstorno'
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
        'id_tipo_transacao' => 'setIdTipoTransacao',
        'descricao_abreviada' => 'setDescricaoAbreviada',
        'status_transacao' => 'setStatusTransacao',
        'id_evento' => 'setIdEvento',
        'tipo_evento' => 'setTipoEvento',
        'id_conta' => 'setIdConta',
        'cartao_mascarado' => 'setCartaoMascarado',
        'nome_portador' => 'setNomePortador',
        'data_transacao' => 'setDataTransacao',
        'data_faturamento' => 'setDataFaturamento',
        'data_vencimento' => 'setDataVencimento',
        'modo_entrada_transacao' => 'setModoEntradaTransacao',
        'valor_taxa_embarque' => 'setValorTaxaEmbarque',
        'valor_entrada' => 'setValorEntrada',
        'valor_brl' => 'setValorBrl',
        'valor_usd' => 'setValorUsd',
        'cotacao_usd' => 'setCotacaoUsd',
        'data_cotacao_usd' => 'setDataCotacaoUsd',
        'codigo_moeda_origem' => 'setCodigoMoedaOrigem',
        'codigo_moeda_destino' => 'setCodigoMoedaDestino',
        'codigo_autorizacao' => 'setCodigoAutorizacao',
        'codigo_referencia' => 'setCodigoReferencia',
        'codigo_terminal' => 'setCodigoTerminal',
        'codigo_mcc' => 'setCodigoMcc',
        'grupo_mcc' => 'setGrupoMcc',
        'grupo_descricao_mcc' => 'setGrupoDescricaoMcc',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'nome_estabelecimento' => 'setNomeEstabelecimento',
        'nome_fantasia_estabelecimento' => 'setNomeFantasiaEstabelecimento',
        'localidade_estabelecimento' => 'setLocalidadeEstabelecimento',
        'plano_parcelamento' => 'setPlanoParcelamento',
        'numero_parcela' => 'setNumeroParcela',
        'detalhes_transacao' => 'setDetalhesTransacao',
        'flag_credito' => 'setFlagCredito',
        'flag_faturado' => 'setFlagFaturado',
        'flag_estorno' => 'setFlagEstorno',
        'id_transacao_estorno' => 'setIdTransacaoEstorno'
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
        'id_tipo_transacao' => 'getIdTipoTransacao',
        'descricao_abreviada' => 'getDescricaoAbreviada',
        'status_transacao' => 'getStatusTransacao',
        'id_evento' => 'getIdEvento',
        'tipo_evento' => 'getTipoEvento',
        'id_conta' => 'getIdConta',
        'cartao_mascarado' => 'getCartaoMascarado',
        'nome_portador' => 'getNomePortador',
        'data_transacao' => 'getDataTransacao',
        'data_faturamento' => 'getDataFaturamento',
        'data_vencimento' => 'getDataVencimento',
        'modo_entrada_transacao' => 'getModoEntradaTransacao',
        'valor_taxa_embarque' => 'getValorTaxaEmbarque',
        'valor_entrada' => 'getValorEntrada',
        'valor_brl' => 'getValorBrl',
        'valor_usd' => 'getValorUsd',
        'cotacao_usd' => 'getCotacaoUsd',
        'data_cotacao_usd' => 'getDataCotacaoUsd',
        'codigo_moeda_origem' => 'getCodigoMoedaOrigem',
        'codigo_moeda_destino' => 'getCodigoMoedaDestino',
        'codigo_autorizacao' => 'getCodigoAutorizacao',
        'codigo_referencia' => 'getCodigoReferencia',
        'codigo_terminal' => 'getCodigoTerminal',
        'codigo_mcc' => 'getCodigoMcc',
        'grupo_mcc' => 'getGrupoMcc',
        'grupo_descricao_mcc' => 'getGrupoDescricaoMcc',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'nome_estabelecimento' => 'getNomeEstabelecimento',
        'nome_fantasia_estabelecimento' => 'getNomeFantasiaEstabelecimento',
        'localidade_estabelecimento' => 'getLocalidadeEstabelecimento',
        'plano_parcelamento' => 'getPlanoParcelamento',
        'numero_parcela' => 'getNumeroParcela',
        'detalhes_transacao' => 'getDetalhesTransacao',
        'flag_credito' => 'getFlagCredito',
        'flag_faturado' => 'getFlagFaturado',
        'flag_estorno' => 'getFlagEstorno',
        'id_transacao_estorno' => 'getIdTransacaoEstorno'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00F3digo de identifica\u00E7\u00E3o da transfer\u00EAncia (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_tipo_transacao C\u00F3digo de Identifica\u00E7\u00E3o do Tipo da Transa\u00E7\u00E3o.
      * @var int
      */
    protected $id_tipo_transacao;
    
    /**
      * $descricao_abreviada Descri\u00E7\u00E3o Abreviada da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $descricao_abreviada;
    
    /**
      * $status_transacao Status de Processamento da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $status_transacao;
    
    /**
      * $id_evento C\u00F3digo de Identifica\u00E7\u00E3o do Evento que originou a Transa\u00E7\u00E3o (id).
      * @var int
      */
    protected $id_evento;
    
    /**
      * $tipo_evento Descri\u00E7\u00E3o do Evento que representa a Transa\u00E7\u00E3o.
      * @var string
      */
    protected $tipo_evento;
    
    /**
      * $id_conta C\u00F3digo de Identifica\u00E7\u00E3o da Conta (id).
      * @var int
      */
    protected $id_conta;
    
    /**
      * $cartao_mascarado N\u00FAmero do Cart\u00E3o em Formato 0000XXXXXXXX0000.
      * @var string
      */
    protected $cartao_mascarado;
    
    /**
      * $nome_portador Nome completo do Portador do Cart\u00E3o.
      * @var string
      */
    protected $nome_portador;
    
    /**
      * $data_transacao Data em que a Transa\u00E7\u00E3o foi realizada.
      * @var string
      */
    protected $data_transacao;
    
    /**
      * $data_faturamento Data de Faturamento da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $data_faturamento;
    
    /**
      * $data_vencimento Data de Vencimento da Fatura.
      * @var string
      */
    protected $data_vencimento;
    
    /**
      * $modo_entrada_transacao Descreve o modo utilizado para realizar a leitura dos dados do cart\u00E3o para realizar a Transa\u00E7\u00E3o.
      * @var string
      */
    protected $modo_entrada_transacao;
    
    /**
      * $valor_taxa_embarque Valor da Taxa de Embarque em Real (BRL) quando a transa\u00E7\u00E3o for relacionada a Compra de Passagens A\u00E9reas.
      * @var Number
      */
    protected $valor_taxa_embarque;
    
    /**
      * $valor_entrada Valor da Entrada em Real (BRL) quando a transa\u00E7\u00E3o for do tipo Parcelada com o pagamento de um valor de Entrada.
      * @var Number
      */
    protected $valor_entrada;
    
    /**
      * $valor_brl Valor da Transa\u00E7\u00E3o em Real (BRL).
      * @var Number
      */
    protected $valor_brl;
    
    /**
      * $valor_usd Valor da Transa\u00E7\u00E3o em D\u00F3lar Americano (USD).
      * @var Number
      */
    protected $valor_usd;
    
    /**
      * $cotacao_usd Valor do D\u00F3lar Americano (USD) convertido em Real (BRL).
      * @var Number
      */
    protected $cotacao_usd;
    
    /**
      * $data_cotacao_usd Data de Fechamento da Cota\u00E7\u00E3o do D\u00F3lar Americano (USD).
      * @var string
      */
    protected $data_cotacao_usd;
    
    /**
      * $codigo_moeda_origem C\u00F3digo de Identifica\u00E7\u00E3o da Moeda utilizada na Transa\u00E7\u00E3o, seguindo padr\u00E3o ISO 4217.
      * @var string
      */
    protected $codigo_moeda_origem;
    
    /**
      * $codigo_moeda_destino C\u00F3digo de Identifica\u00E7\u00E3o da Moeda da Transa\u00E7\u00E3o ap\u00F3s a convers\u00E3o, seguindo padr\u00E3o ISO 4217.
      * @var string
      */
    protected $codigo_moeda_destino;
    
    /**
      * $codigo_autorizacao C\u00F3digo de Autoriza\u00E7\u00E3o da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $codigo_autorizacao;
    
    /**
      * $codigo_referencia C\u00F3digo de Refer\u00EAncia da Transa\u00E7\u00E3o quando utilizado Cart\u00E3o Bandeirado.
      * @var string
      */
    protected $codigo_referencia;
    
    /**
      * $codigo_terminal C\u00F3digo de Identifica\u00E7\u00E3o da origem da captura da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $codigo_terminal;
    
    /**
      * $codigo_mcc C\u00F3digo de identifica\u00E7\u00E3o da categoria do Estabelecimento.
      * @var int
      */
    protected $codigo_mcc;
    
    /**
      * $grupo_mcc C\u00F3digo de identifica\u00E7\u00E3o do grupo do Estabelecimento.
      * @var int
      */
    protected $grupo_mcc;
    
    /**
      * $grupo_descricao_mcc Descri\u00E7\u00E3o do grupo do Estabelecimento.
      * @var string
      */
    protected $grupo_descricao_mcc;
    
    /**
      * $id_estabelecimento C\u00F3digo de Identifica\u00E7\u00E3o do Estabelecimento (id).
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $nome_estabelecimento Nome do Estabelecimento.
      * @var string
      */
    protected $nome_estabelecimento;
    
    /**
      * $nome_fantasia_estabelecimento Nome Fantasia do Estabelecimento.
      * @var string
      */
    protected $nome_fantasia_estabelecimento;
    
    /**
      * $localidade_estabelecimento Localidade do Estabelecimento.
      * @var string
      */
    protected $localidade_estabelecimento;
    
    /**
      * $plano_parcelamento Quando a Transa\u00E7\u00E3o for do tipo Parcelada, apresenta o n\u00FAmero total de Parcelas.
      * @var int
      */
    protected $plano_parcelamento;
    
    /**
      * $numero_parcela Quando a Transa\u00E7\u00E3o for do tipo Parcelada, apresenta o n\u00FAmero da Parcela.
      * @var int
      */
    protected $numero_parcela;
    
    /**
      * $detalhes_transacao Detalhes complementares a respeito da Transa\u00E7\u00E3o.
      * @var string
      */
    protected $detalhes_transacao;
    
    /**
      * $flag_credito Quando ativa, indica que a Transa\u00E7\u00E3o \u00E9 do Tipo 'Cr\u00E9dito'.
      * @var int
      */
    protected $flag_credito;
    
    /**
      * $flag_faturado Quando ativa, indica que a Transa\u00E7\u00E3o foi consolidada em uma Fatura.
      * @var int
      */
    protected $flag_faturado;
    
    /**
      * $flag_estorno Quando ativa, indica que a Transa\u00E7\u00E3o foi estornada.
      * @var int
      */
    protected $flag_estorno;
    
    /**
      * $id_transacao_estorno C\u00F3digo de Identifica\u00E7\u00E3o da Transa\u00E7\u00E3o (id) que gerou o estorno.
      * @var int
      */
    protected $id_transacao_estorno;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_tipo_transacao = $data["id_tipo_transacao"];
            $this->descricao_abreviada = $data["descricao_abreviada"];
            $this->status_transacao = $data["status_transacao"];
            $this->id_evento = $data["id_evento"];
            $this->tipo_evento = $data["tipo_evento"];
            $this->id_conta = $data["id_conta"];
            $this->cartao_mascarado = $data["cartao_mascarado"];
            $this->nome_portador = $data["nome_portador"];
            $this->data_transacao = $data["data_transacao"];
            $this->data_faturamento = $data["data_faturamento"];
            $this->data_vencimento = $data["data_vencimento"];
            $this->modo_entrada_transacao = $data["modo_entrada_transacao"];
            $this->valor_taxa_embarque = $data["valor_taxa_embarque"];
            $this->valor_entrada = $data["valor_entrada"];
            $this->valor_brl = $data["valor_brl"];
            $this->valor_usd = $data["valor_usd"];
            $this->cotacao_usd = $data["cotacao_usd"];
            $this->data_cotacao_usd = $data["data_cotacao_usd"];
            $this->codigo_moeda_origem = $data["codigo_moeda_origem"];
            $this->codigo_moeda_destino = $data["codigo_moeda_destino"];
            $this->codigo_autorizacao = $data["codigo_autorizacao"];
            $this->codigo_referencia = $data["codigo_referencia"];
            $this->codigo_terminal = $data["codigo_terminal"];
            $this->codigo_mcc = $data["codigo_mcc"];
            $this->grupo_mcc = $data["grupo_mcc"];
            $this->grupo_descricao_mcc = $data["grupo_descricao_mcc"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->nome_estabelecimento = $data["nome_estabelecimento"];
            $this->nome_fantasia_estabelecimento = $data["nome_fantasia_estabelecimento"];
            $this->localidade_estabelecimento = $data["localidade_estabelecimento"];
            $this->plano_parcelamento = $data["plano_parcelamento"];
            $this->numero_parcela = $data["numero_parcela"];
            $this->detalhes_transacao = $data["detalhes_transacao"];
            $this->flag_credito = $data["flag_credito"];
            $this->flag_faturado = $data["flag_faturado"];
            $this->flag_estorno = $data["flag_estorno"];
            $this->id_transacao_estorno = $data["id_transacao_estorno"];
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
     * @param int $id C\u00F3digo de identifica\u00E7\u00E3o da transfer\u00EAncia (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_tipo_transacao
     * @return int
     */
    public function getIdTipoTransacao()
    {
        return $this->id_tipo_transacao;
    }
  
    /**
     * Sets id_tipo_transacao
     * @param int $id_tipo_transacao C\u00F3digo de Identifica\u00E7\u00E3o do Tipo da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setIdTipoTransacao($id_tipo_transacao)
    {
        
        $this->id_tipo_transacao = $id_tipo_transacao;
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
     * @param string $descricao_abreviada Descri\u00E7\u00E3o Abreviada da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setDescricaoAbreviada($descricao_abreviada)
    {
        
        $this->descricao_abreviada = $descricao_abreviada;
        return $this;
    }
    
    /**
     * Gets status_transacao
     * @return string
     */
    public function getStatusTransacao()
    {
        return $this->status_transacao;
    }
  
    /**
     * Sets status_transacao
     * @param string $status_transacao Status de Processamento da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setStatusTransacao($status_transacao)
    {
        
        $this->status_transacao = $status_transacao;
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
     * @param int $id_evento C\u00F3digo de Identifica\u00E7\u00E3o do Evento que originou a Transa\u00E7\u00E3o (id).
     * @return $this
     */
    public function setIdEvento($id_evento)
    {
        
        $this->id_evento = $id_evento;
        return $this;
    }
    
    /**
     * Gets tipo_evento
     * @return string
     */
    public function getTipoEvento()
    {
        return $this->tipo_evento;
    }
  
    /**
     * Sets tipo_evento
     * @param string $tipo_evento Descri\u00E7\u00E3o do Evento que representa a Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setTipoEvento($tipo_evento)
    {
        
        $this->tipo_evento = $tipo_evento;
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
     * @param int $id_conta C\u00F3digo de Identifica\u00E7\u00E3o da Conta (id).
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
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
     * @param string $cartao_mascarado N\u00FAmero do Cart\u00E3o em Formato 0000XXXXXXXX0000.
     * @return $this
     */
    public function setCartaoMascarado($cartao_mascarado)
    {
        
        $this->cartao_mascarado = $cartao_mascarado;
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
     * @param string $nome_portador Nome completo do Portador do Cart\u00E3o.
     * @return $this
     */
    public function setNomePortador($nome_portador)
    {
        
        $this->nome_portador = $nome_portador;
        return $this;
    }
    
    /**
     * Gets data_transacao
     * @return string
     */
    public function getDataTransacao()
    {
        return $this->data_transacao;
    }
  
    /**
     * Sets data_transacao
     * @param string $data_transacao Data em que a Transa\u00E7\u00E3o foi realizada.
     * @return $this
     */
    public function setDataTransacao($data_transacao)
    {
        
        $this->data_transacao = $data_transacao;
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
     * @param string $data_faturamento Data de Faturamento da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setDataFaturamento($data_faturamento)
    {
        
        $this->data_faturamento = $data_faturamento;
        return $this;
    }
    
    /**
     * Gets data_vencimento
     * @return string
     */
    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }
  
    /**
     * Sets data_vencimento
     * @param string $data_vencimento Data de Vencimento da Fatura.
     * @return $this
     */
    public function setDataVencimento($data_vencimento)
    {
        
        $this->data_vencimento = $data_vencimento;
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
     * @param string $modo_entrada_transacao Descreve o modo utilizado para realizar a leitura dos dados do cart\u00E3o para realizar a Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setModoEntradaTransacao($modo_entrada_transacao)
    {
        
        $this->modo_entrada_transacao = $modo_entrada_transacao;
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
     * @param Number $valor_taxa_embarque Valor da Taxa de Embarque em Real (BRL) quando a transa\u00E7\u00E3o for relacionada a Compra de Passagens A\u00E9reas.
     * @return $this
     */
    public function setValorTaxaEmbarque($valor_taxa_embarque)
    {
        
        $this->valor_taxa_embarque = $valor_taxa_embarque;
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
     * @param Number $valor_entrada Valor da Entrada em Real (BRL) quando a transa\u00E7\u00E3o for do tipo Parcelada com o pagamento de um valor de Entrada.
     * @return $this
     */
    public function setValorEntrada($valor_entrada)
    {
        
        $this->valor_entrada = $valor_entrada;
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
     * @param Number $valor_brl Valor da Transa\u00E7\u00E3o em Real (BRL).
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
     * @param Number $valor_usd Valor da Transa\u00E7\u00E3o em D\u00F3lar Americano (USD).
     * @return $this
     */
    public function setValorUsd($valor_usd)
    {
        
        $this->valor_usd = $valor_usd;
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
     * @param Number $cotacao_usd Valor do D\u00F3lar Americano (USD) convertido em Real (BRL).
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
     * @param string $data_cotacao_usd Data de Fechamento da Cota\u00E7\u00E3o do D\u00F3lar Americano (USD).
     * @return $this
     */
    public function setDataCotacaoUsd($data_cotacao_usd)
    {
        
        $this->data_cotacao_usd = $data_cotacao_usd;
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
     * @param string $codigo_moeda_origem C\u00F3digo de Identifica\u00E7\u00E3o da Moeda utilizada na Transa\u00E7\u00E3o, seguindo padr\u00E3o ISO 4217.
     * @return $this
     */
    public function setCodigoMoedaOrigem($codigo_moeda_origem)
    {
        
        $this->codigo_moeda_origem = $codigo_moeda_origem;
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
     * @param string $codigo_moeda_destino C\u00F3digo de Identifica\u00E7\u00E3o da Moeda da Transa\u00E7\u00E3o ap\u00F3s a convers\u00E3o, seguindo padr\u00E3o ISO 4217.
     * @return $this
     */
    public function setCodigoMoedaDestino($codigo_moeda_destino)
    {
        
        $this->codigo_moeda_destino = $codigo_moeda_destino;
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
     * @param string $codigo_autorizacao C\u00F3digo de Autoriza\u00E7\u00E3o da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setCodigoAutorizacao($codigo_autorizacao)
    {
        
        $this->codigo_autorizacao = $codigo_autorizacao;
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
     * @param string $codigo_referencia C\u00F3digo de Refer\u00EAncia da Transa\u00E7\u00E3o quando utilizado Cart\u00E3o Bandeirado.
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
     * @param string $codigo_terminal C\u00F3digo de Identifica\u00E7\u00E3o da origem da captura da Transa\u00E7\u00E3o.
     * @return $this
     */
    public function setCodigoTerminal($codigo_terminal)
    {
        
        $this->codigo_terminal = $codigo_terminal;
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
     * @param int $codigo_mcc C\u00F3digo de identifica\u00E7\u00E3o da categoria do Estabelecimento.
     * @return $this
     */
    public function setCodigoMcc($codigo_mcc)
    {
        
        $this->codigo_mcc = $codigo_mcc;
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
     * @param int $grupo_mcc C\u00F3digo de identifica\u00E7\u00E3o do grupo do Estabelecimento.
     * @return $this
     */
    public function setGrupoMcc($grupo_mcc)
    {
        
        $this->grupo_mcc = $grupo_mcc;
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
     * @param string $grupo_descricao_mcc Descri\u00E7\u00E3o do grupo do Estabelecimento.
     * @return $this
     */
    public function setGrupoDescricaoMcc($grupo_descricao_mcc)
    {
        
        $this->grupo_descricao_mcc = $grupo_descricao_mcc;
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
     * @param int $id_estabelecimento C\u00F3digo de Identifica\u00E7\u00E3o do Estabelecimento (id).
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
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
     * @param string $nome_estabelecimento Nome do Estabelecimento.
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
     * @param string $nome_fantasia_estabelecimento Nome Fantasia do Estabelecimento.
     * @return $this
     */
    public function setNomeFantasiaEstabelecimento($nome_fantasia_estabelecimento)
    {
        
        $this->nome_fantasia_estabelecimento = $nome_fantasia_estabelecimento;
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
     * @param string $localidade_estabelecimento Localidade do Estabelecimento.
     * @return $this
     */
    public function setLocalidadeEstabelecimento($localidade_estabelecimento)
    {
        
        $this->localidade_estabelecimento = $localidade_estabelecimento;
        return $this;
    }
    
    /**
     * Gets plano_parcelamento
     * @return int
     */
    public function getPlanoParcelamento()
    {
        return $this->plano_parcelamento;
    }
  
    /**
     * Sets plano_parcelamento
     * @param int $plano_parcelamento Quando a Transa\u00E7\u00E3o for do tipo Parcelada, apresenta o n\u00FAmero total de Parcelas.
     * @return $this
     */
    public function setPlanoParcelamento($plano_parcelamento)
    {
        
        $this->plano_parcelamento = $plano_parcelamento;
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
     * @param int $numero_parcela Quando a Transa\u00E7\u00E3o for do tipo Parcelada, apresenta o n\u00FAmero da Parcela.
     * @return $this
     */
    public function setNumeroParcela($numero_parcela)
    {
        
        $this->numero_parcela = $numero_parcela;
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
     * @param string $detalhes_transacao Detalhes complementares a respeito da Transa\u00E7\u00E3o.
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
     * @param int $flag_credito Quando ativa, indica que a Transa\u00E7\u00E3o \u00E9 do Tipo 'Cr\u00E9dito'.
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
     * @param int $flag_faturado Quando ativa, indica que a Transa\u00E7\u00E3o foi consolidada em uma Fatura.
     * @return $this
     */
    public function setFlagFaturado($flag_faturado)
    {
        
        $this->flag_faturado = $flag_faturado;
        return $this;
    }
    
    /**
     * Gets flag_estorno
     * @return int
     */
    public function getFlagEstorno()
    {
        return $this->flag_estorno;
    }
  
    /**
     * Sets flag_estorno
     * @param int $flag_estorno Quando ativa, indica que a Transa\u00E7\u00E3o foi estornada.
     * @return $this
     */
    public function setFlagEstorno($flag_estorno)
    {
        
        $this->flag_estorno = $flag_estorno;
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
     * @param int $id_transacao_estorno C\u00F3digo de Identifica\u00E7\u00E3o da Transa\u00E7\u00E3o (id) que gerou o estorno.
     * @return $this
     */
    public function setIdTransacaoEstorno($id_transacao_estorno)
    {
        
        $this->id_transacao_estorno = $id_transacao_estorno;
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
