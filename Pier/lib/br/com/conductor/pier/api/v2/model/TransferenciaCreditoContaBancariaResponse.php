<?php
/**
 * TransferenciaCreditoContaBancariaResponse
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
 * TransferenciaCreditoContaBancariaResponse Class Doc Comment
 *
 * @category    Class
 * @description Transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito para contas banc\u00C3\u00A1rias
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransferenciaCreditoContaBancariaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_transferencia' => 'int',
        'valor_cet' => 'Number',
        'id_autorizacao' => 'int',
        'codigo_autorizacao' => 'string',
        'nsu_origem' => 'int',
        'id_conta' => 'int',
        'id_cartao' => 'int',
        'id_operacao' => 'int',
        'valor_compra' => 'Number',
        'valor_parcela' => 'Number',
        'valor_contrato' => 'Number',
        'numero_parcelas' => 'int',
        'valor_iof' => 'Number',
        'valor_tac' => 'Number',
        'valor_taxa_saque' => 'Number',
        'taxa_juros' => 'Number',
        'data_compra' => 'string',
        'data_movimento' => 'string',
        'data_vencimento_real' => 'string',
        'data_vencimento_padrao' => 'string',
        'data_autorizacao' => 'string',
        'banco' => 'int',
        'numero_agencia' => 'string',
        'digito_agencia' => 'string',
        'numero_conta' => 'string',
        'digito_conta' => 'string',
        'flag_conta_poupanca' => 'bool',
        'documento_favorecido' => 'string',
        'nome_favorecido' => 'string',
        'status' => 'string',
        'status_processamento' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_transferencia' => 'idTransferencia',
        'valor_cet' => 'valorCET',
        'id_autorizacao' => 'idAutorizacao',
        'codigo_autorizacao' => 'codigoAutorizacao',
        'nsu_origem' => 'nsuOrigem',
        'id_conta' => 'idConta',
        'id_cartao' => 'idCartao',
        'id_operacao' => 'idOperacao',
        'valor_compra' => 'valorCompra',
        'valor_parcela' => 'valorParcela',
        'valor_contrato' => 'valorContrato',
        'numero_parcelas' => 'numeroParcelas',
        'valor_iof' => 'valorIOF',
        'valor_tac' => 'valorTAC',
        'valor_taxa_saque' => 'valorTaxaSaque',
        'taxa_juros' => 'taxaJuros',
        'data_compra' => 'dataCompra',
        'data_movimento' => 'dataMovimento',
        'data_vencimento_real' => 'dataVencimentoReal',
        'data_vencimento_padrao' => 'dataVencimentoPadrao',
        'data_autorizacao' => 'dataAutorizacao',
        'banco' => 'banco',
        'numero_agencia' => 'numeroAgencia',
        'digito_agencia' => 'digitoAgencia',
        'numero_conta' => 'numeroConta',
        'digito_conta' => 'digitoConta',
        'flag_conta_poupanca' => 'flagContaPoupanca',
        'documento_favorecido' => 'documentoFavorecido',
        'nome_favorecido' => 'nomeFavorecido',
        'status' => 'status',
        'status_processamento' => 'statusProcessamento'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_transferencia' => 'setIdTransferencia',
        'valor_cet' => 'setValorCet',
        'id_autorizacao' => 'setIdAutorizacao',
        'codigo_autorizacao' => 'setCodigoAutorizacao',
        'nsu_origem' => 'setNsuOrigem',
        'id_conta' => 'setIdConta',
        'id_cartao' => 'setIdCartao',
        'id_operacao' => 'setIdOperacao',
        'valor_compra' => 'setValorCompra',
        'valor_parcela' => 'setValorParcela',
        'valor_contrato' => 'setValorContrato',
        'numero_parcelas' => 'setNumeroParcelas',
        'valor_iof' => 'setValorIof',
        'valor_tac' => 'setValorTac',
        'valor_taxa_saque' => 'setValorTaxaSaque',
        'taxa_juros' => 'setTaxaJuros',
        'data_compra' => 'setDataCompra',
        'data_movimento' => 'setDataMovimento',
        'data_vencimento_real' => 'setDataVencimentoReal',
        'data_vencimento_padrao' => 'setDataVencimentoPadrao',
        'data_autorizacao' => 'setDataAutorizacao',
        'banco' => 'setBanco',
        'numero_agencia' => 'setNumeroAgencia',
        'digito_agencia' => 'setDigitoAgencia',
        'numero_conta' => 'setNumeroConta',
        'digito_conta' => 'setDigitoConta',
        'flag_conta_poupanca' => 'setFlagContaPoupanca',
        'documento_favorecido' => 'setDocumentoFavorecido',
        'nome_favorecido' => 'setNomeFavorecido',
        'status' => 'setStatus',
        'status_processamento' => 'setStatusProcessamento'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_transferencia' => 'getIdTransferencia',
        'valor_cet' => 'getValorCet',
        'id_autorizacao' => 'getIdAutorizacao',
        'codigo_autorizacao' => 'getCodigoAutorizacao',
        'nsu_origem' => 'getNsuOrigem',
        'id_conta' => 'getIdConta',
        'id_cartao' => 'getIdCartao',
        'id_operacao' => 'getIdOperacao',
        'valor_compra' => 'getValorCompra',
        'valor_parcela' => 'getValorParcela',
        'valor_contrato' => 'getValorContrato',
        'numero_parcelas' => 'getNumeroParcelas',
        'valor_iof' => 'getValorIof',
        'valor_tac' => 'getValorTac',
        'valor_taxa_saque' => 'getValorTaxaSaque',
        'taxa_juros' => 'getTaxaJuros',
        'data_compra' => 'getDataCompra',
        'data_movimento' => 'getDataMovimento',
        'data_vencimento_real' => 'getDataVencimentoReal',
        'data_vencimento_padrao' => 'getDataVencimentoPadrao',
        'data_autorizacao' => 'getDataAutorizacao',
        'banco' => 'getBanco',
        'numero_agencia' => 'getNumeroAgencia',
        'digito_agencia' => 'getDigitoAgencia',
        'numero_conta' => 'getNumeroConta',
        'digito_conta' => 'getDigitoConta',
        'flag_conta_poupanca' => 'getFlagContaPoupanca',
        'documento_favorecido' => 'getDocumentoFavorecido',
        'nome_favorecido' => 'getNomeFavorecido',
        'status' => 'getStatus',
        'status_processamento' => 'getStatusProcessamento'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_transferencia C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transferencia.
      * @var int
      */
    protected $id_transferencia;
    
    /**
      * $valor_cet Taxa de custo efetivo total.
      * @var Number
      */
    protected $valor_cet;
    
    /**
      * $id_autorizacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da autoriza\u00C3\u00A7\u00C3\u00A3o.
      * @var int
      */
    protected $id_autorizacao;
    
    /**
      * $codigo_autorizacao C\u00C3\u00B3digo da autoriza\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $codigo_autorizacao;
    
    /**
      * $nsu_origem NSU de origem.
      * @var int
      */
    protected $nsu_origem;
    
    /**
      * $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta.
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_cartao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o.
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $id_operacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de opera\u00C3\u00A7\u00C3\u00A3o.
      * @var int
      */
    protected $id_operacao;
    
    /**
      * $valor_compra Valor da transfer\u00C3\u00AAncia.
      * @var Number
      */
    protected $valor_compra;
    
    /**
      * $valor_parcela Valor da parcela.
      * @var Number
      */
    protected $valor_parcela;
    
    /**
      * $valor_contrato Valor da transfer\u00C3\u00AAncia acrescido do valor da tarifa de saque se houver tarifa de saque.
      * @var Number
      */
    protected $valor_contrato;
    
    /**
      * $numero_parcelas N\u00C3\u00BAmero de parcelas.
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $valor_iof Valor do IOF.
      * @var Number
      */
    protected $valor_iof;
    
    /**
      * $valor_tac Valor da TAC.
      * @var Number
      */
    protected $valor_tac;
    
    /**
      * $valor_taxa_saque Valor da taxa saque.
      * @var Number
      */
    protected $valor_taxa_saque;
    
    /**
      * $taxa_juros Percentual de juros.
      * @var Number
      */
    protected $taxa_juros;
    
    /**
      * $data_compra Data da transfer\u00C3\u00AAncia.
      * @var string
      */
    protected $data_compra;
    
    /**
      * $data_movimento Data do movimento.
      * @var string
      */
    protected $data_movimento;
    
    /**
      * $data_vencimento_real Data do vencimento real da fatura.
      * @var string
      */
    protected $data_vencimento_real;
    
    /**
      * $data_vencimento_padrao Dia do vencimento padr\u00C3\u00A3o da fatura.
      * @var string
      */
    protected $data_vencimento_padrao;
    
    /**
      * $data_autorizacao Data da autoriza\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $data_autorizacao;
    
    /**
      * $banco C\u00C3\u00B3digo do Banco.
      * @var int
      */
    protected $banco;
    
    /**
      * $numero_agencia N\u00C3\u00BAmero da Ag\u00C3\u00AAncia.
      * @var string
      */
    protected $numero_agencia;
    
    /**
      * $digito_agencia D\u00C3\u00ADgito da Ag\u00C3\u00AAncia.
      * @var string
      */
    protected $digito_agencia;
    
    /**
      * $numero_conta N\u00C3\u00BAmero da Conta.
      * @var string
      */
    protected $numero_conta;
    
    /**
      * $digito_conta D\u00C3\u00ADgito da Conta.
      * @var string
      */
    protected $digito_conta;
    
    /**
      * $flag_conta_poupanca Tipo da Conta.
      * @var bool
      */
    protected $flag_conta_poupanca;
    
    /**
      * $documento_favorecido Documento do Favorecido.
      * @var string
      */
    protected $documento_favorecido;
    
    /**
      * $nome_favorecido Nome do Favorecido.
      * @var string
      */
    protected $nome_favorecido;
    
    /**
      * $status C\u00C3\u00B3digo do Status
      * @var string
      */
    protected $status;
    
    /**
      * $status_processamento Status Processamento.
      * @var string
      */
    protected $status_processamento;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_transferencia = $data["id_transferencia"];
            $this->valor_cet = $data["valor_cet"];
            $this->id_autorizacao = $data["id_autorizacao"];
            $this->codigo_autorizacao = $data["codigo_autorizacao"];
            $this->nsu_origem = $data["nsu_origem"];
            $this->id_conta = $data["id_conta"];
            $this->id_cartao = $data["id_cartao"];
            $this->id_operacao = $data["id_operacao"];
            $this->valor_compra = $data["valor_compra"];
            $this->valor_parcela = $data["valor_parcela"];
            $this->valor_contrato = $data["valor_contrato"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->valor_iof = $data["valor_iof"];
            $this->valor_tac = $data["valor_tac"];
            $this->valor_taxa_saque = $data["valor_taxa_saque"];
            $this->taxa_juros = $data["taxa_juros"];
            $this->data_compra = $data["data_compra"];
            $this->data_movimento = $data["data_movimento"];
            $this->data_vencimento_real = $data["data_vencimento_real"];
            $this->data_vencimento_padrao = $data["data_vencimento_padrao"];
            $this->data_autorizacao = $data["data_autorizacao"];
            $this->banco = $data["banco"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->digito_agencia = $data["digito_agencia"];
            $this->numero_conta = $data["numero_conta"];
            $this->digito_conta = $data["digito_conta"];
            $this->flag_conta_poupanca = $data["flag_conta_poupanca"];
            $this->documento_favorecido = $data["documento_favorecido"];
            $this->nome_favorecido = $data["nome_favorecido"];
            $this->status = $data["status"];
            $this->status_processamento = $data["status_processamento"];
        }
    }
    
    /**
     * Gets id_transferencia
     * @return int
     */
    public function getIdTransferencia()
    {
        return $this->id_transferencia;
    }
  
    /**
     * Sets id_transferencia
     * @param int $id_transferencia C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transferencia.
     * @return $this
     */
    public function setIdTransferencia($id_transferencia)
    {
        
        $this->id_transferencia = $id_transferencia;
        return $this;
    }
    
    /**
     * Gets valor_cet
     * @return Number
     */
    public function getValorCet()
    {
        return $this->valor_cet;
    }
  
    /**
     * Sets valor_cet
     * @param Number $valor_cet Taxa de custo efetivo total.
     * @return $this
     */
    public function setValorCet($valor_cet)
    {
        
        $this->valor_cet = $valor_cet;
        return $this;
    }
    
    /**
     * Gets id_autorizacao
     * @return int
     */
    public function getIdAutorizacao()
    {
        return $this->id_autorizacao;
    }
  
    /**
     * Sets id_autorizacao
     * @param int $id_autorizacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da autoriza\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setIdAutorizacao($id_autorizacao)
    {
        
        $this->id_autorizacao = $id_autorizacao;
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
     * @param string $codigo_autorizacao C\u00C3\u00B3digo da autoriza\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setCodigoAutorizacao($codigo_autorizacao)
    {
        
        $this->codigo_autorizacao = $codigo_autorizacao;
        return $this;
    }
    
    /**
     * Gets nsu_origem
     * @return int
     */
    public function getNsuOrigem()
    {
        return $this->nsu_origem;
    }
  
    /**
     * Sets nsu_origem
     * @param int $nsu_origem NSU de origem.
     * @return $this
     */
    public function setNsuOrigem($nsu_origem)
    {
        
        $this->nsu_origem = $nsu_origem;
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
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta.
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_cartao
     * @return int
     */
    public function getIdCartao()
    {
        return $this->id_cartao;
    }
  
    /**
     * Sets id_cartao
     * @param int $id_cartao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o.
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
        return $this;
    }
    
    /**
     * Gets id_operacao
     * @return int
     */
    public function getIdOperacao()
    {
        return $this->id_operacao;
    }
  
    /**
     * Sets id_operacao
     * @param int $id_operacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de opera\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setIdOperacao($id_operacao)
    {
        
        $this->id_operacao = $id_operacao;
        return $this;
    }
    
    /**
     * Gets valor_compra
     * @return Number
     */
    public function getValorCompra()
    {
        return $this->valor_compra;
    }
  
    /**
     * Sets valor_compra
     * @param Number $valor_compra Valor da transfer\u00C3\u00AAncia.
     * @return $this
     */
    public function setValorCompra($valor_compra)
    {
        
        $this->valor_compra = $valor_compra;
        return $this;
    }
    
    /**
     * Gets valor_parcela
     * @return Number
     */
    public function getValorParcela()
    {
        return $this->valor_parcela;
    }
  
    /**
     * Sets valor_parcela
     * @param Number $valor_parcela Valor da parcela.
     * @return $this
     */
    public function setValorParcela($valor_parcela)
    {
        
        $this->valor_parcela = $valor_parcela;
        return $this;
    }
    
    /**
     * Gets valor_contrato
     * @return Number
     */
    public function getValorContrato()
    {
        return $this->valor_contrato;
    }
  
    /**
     * Sets valor_contrato
     * @param Number $valor_contrato Valor da transfer\u00C3\u00AAncia acrescido do valor da tarifa de saque se houver tarifa de saque.
     * @return $this
     */
    public function setValorContrato($valor_contrato)
    {
        
        $this->valor_contrato = $valor_contrato;
        return $this;
    }
    
    /**
     * Gets numero_parcelas
     * @return int
     */
    public function getNumeroParcelas()
    {
        return $this->numero_parcelas;
    }
  
    /**
     * Sets numero_parcelas
     * @param int $numero_parcelas N\u00C3\u00BAmero de parcelas.
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }
    
    /**
     * Gets valor_iof
     * @return Number
     */
    public function getValorIof()
    {
        return $this->valor_iof;
    }
  
    /**
     * Sets valor_iof
     * @param Number $valor_iof Valor do IOF.
     * @return $this
     */
    public function setValorIof($valor_iof)
    {
        
        $this->valor_iof = $valor_iof;
        return $this;
    }
    
    /**
     * Gets valor_tac
     * @return Number
     */
    public function getValorTac()
    {
        return $this->valor_tac;
    }
  
    /**
     * Sets valor_tac
     * @param Number $valor_tac Valor da TAC.
     * @return $this
     */
    public function setValorTac($valor_tac)
    {
        
        $this->valor_tac = $valor_tac;
        return $this;
    }
    
    /**
     * Gets valor_taxa_saque
     * @return Number
     */
    public function getValorTaxaSaque()
    {
        return $this->valor_taxa_saque;
    }
  
    /**
     * Sets valor_taxa_saque
     * @param Number $valor_taxa_saque Valor da taxa saque.
     * @return $this
     */
    public function setValorTaxaSaque($valor_taxa_saque)
    {
        
        $this->valor_taxa_saque = $valor_taxa_saque;
        return $this;
    }
    
    /**
     * Gets taxa_juros
     * @return Number
     */
    public function getTaxaJuros()
    {
        return $this->taxa_juros;
    }
  
    /**
     * Sets taxa_juros
     * @param Number $taxa_juros Percentual de juros.
     * @return $this
     */
    public function setTaxaJuros($taxa_juros)
    {
        
        $this->taxa_juros = $taxa_juros;
        return $this;
    }
    
    /**
     * Gets data_compra
     * @return string
     */
    public function getDataCompra()
    {
        return $this->data_compra;
    }
  
    /**
     * Sets data_compra
     * @param string $data_compra Data da transfer\u00C3\u00AAncia.
     * @return $this
     */
    public function setDataCompra($data_compra)
    {
        
        $this->data_compra = $data_compra;
        return $this;
    }
    
    /**
     * Gets data_movimento
     * @return string
     */
    public function getDataMovimento()
    {
        return $this->data_movimento;
    }
  
    /**
     * Sets data_movimento
     * @param string $data_movimento Data do movimento.
     * @return $this
     */
    public function setDataMovimento($data_movimento)
    {
        
        $this->data_movimento = $data_movimento;
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
     * @param string $data_vencimento_real Data do vencimento real da fatura.
     * @return $this
     */
    public function setDataVencimentoReal($data_vencimento_real)
    {
        
        $this->data_vencimento_real = $data_vencimento_real;
        return $this;
    }
    
    /**
     * Gets data_vencimento_padrao
     * @return string
     */
    public function getDataVencimentoPadrao()
    {
        return $this->data_vencimento_padrao;
    }
  
    /**
     * Sets data_vencimento_padrao
     * @param string $data_vencimento_padrao Dia do vencimento padr\u00C3\u00A3o da fatura.
     * @return $this
     */
    public function setDataVencimentoPadrao($data_vencimento_padrao)
    {
        
        $this->data_vencimento_padrao = $data_vencimento_padrao;
        return $this;
    }
    
    /**
     * Gets data_autorizacao
     * @return string
     */
    public function getDataAutorizacao()
    {
        return $this->data_autorizacao;
    }
  
    /**
     * Sets data_autorizacao
     * @param string $data_autorizacao Data da autoriza\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setDataAutorizacao($data_autorizacao)
    {
        
        $this->data_autorizacao = $data_autorizacao;
        return $this;
    }
    
    /**
     * Gets banco
     * @return int
     */
    public function getBanco()
    {
        return $this->banco;
    }
  
    /**
     * Sets banco
     * @param int $banco C\u00C3\u00B3digo do Banco.
     * @return $this
     */
    public function setBanco($banco)
    {
        
        $this->banco = $banco;
        return $this;
    }
    
    /**
     * Gets numero_agencia
     * @return string
     */
    public function getNumeroAgencia()
    {
        return $this->numero_agencia;
    }
  
    /**
     * Sets numero_agencia
     * @param string $numero_agencia N\u00C3\u00BAmero da Ag\u00C3\u00AAncia.
     * @return $this
     */
    public function setNumeroAgencia($numero_agencia)
    {
        
        $this->numero_agencia = $numero_agencia;
        return $this;
    }
    
    /**
     * Gets digito_agencia
     * @return string
     */
    public function getDigitoAgencia()
    {
        return $this->digito_agencia;
    }
  
    /**
     * Sets digito_agencia
     * @param string $digito_agencia D\u00C3\u00ADgito da Ag\u00C3\u00AAncia.
     * @return $this
     */
    public function setDigitoAgencia($digito_agencia)
    {
        
        $this->digito_agencia = $digito_agencia;
        return $this;
    }
    
    /**
     * Gets numero_conta
     * @return string
     */
    public function getNumeroConta()
    {
        return $this->numero_conta;
    }
  
    /**
     * Sets numero_conta
     * @param string $numero_conta N\u00C3\u00BAmero da Conta.
     * @return $this
     */
    public function setNumeroConta($numero_conta)
    {
        
        $this->numero_conta = $numero_conta;
        return $this;
    }
    
    /**
     * Gets digito_conta
     * @return string
     */
    public function getDigitoConta()
    {
        return $this->digito_conta;
    }
  
    /**
     * Sets digito_conta
     * @param string $digito_conta D\u00C3\u00ADgito da Conta.
     * @return $this
     */
    public function setDigitoConta($digito_conta)
    {
        
        $this->digito_conta = $digito_conta;
        return $this;
    }
    
    /**
     * Gets flag_conta_poupanca
     * @return bool
     */
    public function getFlagContaPoupanca()
    {
        return $this->flag_conta_poupanca;
    }
  
    /**
     * Sets flag_conta_poupanca
     * @param bool $flag_conta_poupanca Tipo da Conta.
     * @return $this
     */
    public function setFlagContaPoupanca($flag_conta_poupanca)
    {
        
        $this->flag_conta_poupanca = $flag_conta_poupanca;
        return $this;
    }
    
    /**
     * Gets documento_favorecido
     * @return string
     */
    public function getDocumentoFavorecido()
    {
        return $this->documento_favorecido;
    }
  
    /**
     * Sets documento_favorecido
     * @param string $documento_favorecido Documento do Favorecido.
     * @return $this
     */
    public function setDocumentoFavorecido($documento_favorecido)
    {
        
        $this->documento_favorecido = $documento_favorecido;
        return $this;
    }
    
    /**
     * Gets nome_favorecido
     * @return string
     */
    public function getNomeFavorecido()
    {
        return $this->nome_favorecido;
    }
  
    /**
     * Sets nome_favorecido
     * @param string $nome_favorecido Nome do Favorecido.
     * @return $this
     */
    public function setNomeFavorecido($nome_favorecido)
    {
        
        $this->nome_favorecido = $nome_favorecido;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status C\u00C3\u00B3digo do Status
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets status_processamento
     * @return string
     */
    public function getStatusProcessamento()
    {
        return $this->status_processamento;
    }
  
    /**
     * Sets status_processamento
     * @param string $status_processamento Status Processamento.
     * @return $this
     */
    public function setStatusProcessamento($status_processamento)
    {
        
        $this->status_processamento = $status_processamento;
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