<?php
/**
 * LinkTransferenciaBancariaResponse_
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
 * LinkTransferenciaBancariaResponse_ Class Doc Comment
 *
 * @category    Class
 * @description Transfer\u00C3\u00AAncia banc\u00C3\u00A1ria
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LinkTransferenciaBancariaResponse_ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'nsuorigem' => 'int',
        'id_autorizacao' => 'int',
        'id_transferencia' => 'int',
        'codigo_autorizacao' => 'string',
        'data_autorizacao' => 'string',
        'origem' => 'string',
        'valor' => 'Number',
        'id_operacao' => 'int',
        'terminal' => 'string',
        'id_cartao' => 'int',
        'data_compra' => 'string',
        'valor_compra' => 'Number',
        'numero_parcelas' => 'int',
        'valor_parcela' => 'Number',
        'id_estabelecimento' => 'int',
        'data_movimento' => 'string',
        'valor_contrato' => 'Number',
        'taxa_juros' => 'Number',
        'valor_iof' => 'Number',
        'valor_tac' => 'Number',
        'id_conta' => 'int',
        'valor_entrada' => 'Number',
        'data_vencimento_real' => 'string',
        'data_vencimento_padrao' => 'string',
        'id_conta_portador' => 'int',
        'numero_estabelecimento' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'nsuorigem' => 'nsuorigem',
        'id_autorizacao' => 'idAutorizacao',
        'id_transferencia' => 'idTransferencia',
        'codigo_autorizacao' => 'codigoAutorizacao',
        'data_autorizacao' => 'dataAutorizacao',
        'origem' => 'origem',
        'valor' => 'valor',
        'id_operacao' => 'idOperacao',
        'terminal' => 'terminal',
        'id_cartao' => 'idCartao',
        'data_compra' => 'dataCompra',
        'valor_compra' => 'valorCompra',
        'numero_parcelas' => 'numeroParcelas',
        'valor_parcela' => 'valorParcela',
        'id_estabelecimento' => 'idEstabelecimento',
        'data_movimento' => 'dataMovimento',
        'valor_contrato' => 'valorContrato',
        'taxa_juros' => 'taxaJuros',
        'valor_iof' => 'valorIOF',
        'valor_tac' => 'valorTAC',
        'id_conta' => 'idConta',
        'valor_entrada' => 'valorEntrada',
        'data_vencimento_real' => 'dataVencimentoReal',
        'data_vencimento_padrao' => 'dataVencimentoPadrao',
        'id_conta_portador' => 'idContaPortador',
        'numero_estabelecimento' => 'numeroEstabelecimento'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'nsuorigem' => 'setNsuorigem',
        'id_autorizacao' => 'setIdAutorizacao',
        'id_transferencia' => 'setIdTransferencia',
        'codigo_autorizacao' => 'setCodigoAutorizacao',
        'data_autorizacao' => 'setDataAutorizacao',
        'origem' => 'setOrigem',
        'valor' => 'setValor',
        'id_operacao' => 'setIdOperacao',
        'terminal' => 'setTerminal',
        'id_cartao' => 'setIdCartao',
        'data_compra' => 'setDataCompra',
        'valor_compra' => 'setValorCompra',
        'numero_parcelas' => 'setNumeroParcelas',
        'valor_parcela' => 'setValorParcela',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'data_movimento' => 'setDataMovimento',
        'valor_contrato' => 'setValorContrato',
        'taxa_juros' => 'setTaxaJuros',
        'valor_iof' => 'setValorIof',
        'valor_tac' => 'setValorTac',
        'id_conta' => 'setIdConta',
        'valor_entrada' => 'setValorEntrada',
        'data_vencimento_real' => 'setDataVencimentoReal',
        'data_vencimento_padrao' => 'setDataVencimentoPadrao',
        'id_conta_portador' => 'setIdContaPortador',
        'numero_estabelecimento' => 'setNumeroEstabelecimento'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'nsuorigem' => 'getNsuorigem',
        'id_autorizacao' => 'getIdAutorizacao',
        'id_transferencia' => 'getIdTransferencia',
        'codigo_autorizacao' => 'getCodigoAutorizacao',
        'data_autorizacao' => 'getDataAutorizacao',
        'origem' => 'getOrigem',
        'valor' => 'getValor',
        'id_operacao' => 'getIdOperacao',
        'terminal' => 'getTerminal',
        'id_cartao' => 'getIdCartao',
        'data_compra' => 'getDataCompra',
        'valor_compra' => 'getValorCompra',
        'numero_parcelas' => 'getNumeroParcelas',
        'valor_parcela' => 'getValorParcela',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'data_movimento' => 'getDataMovimento',
        'valor_contrato' => 'getValorContrato',
        'taxa_juros' => 'getTaxaJuros',
        'valor_iof' => 'getValorIof',
        'valor_tac' => 'getValorTac',
        'id_conta' => 'getIdConta',
        'valor_entrada' => 'getValorEntrada',
        'data_vencimento_real' => 'getDataVencimentoReal',
        'data_vencimento_padrao' => 'getDataVencimentoPadrao',
        'id_conta_portador' => 'getIdContaPortador',
        'numero_estabelecimento' => 'getNumeroEstabelecimento'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $nsuorigem 
      * @var int
      */
    protected $nsuorigem;
    
    /**
      * $id_autorizacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da autoriza\u00C3\u00A7\u00C3\u00A3o (id)
      * @var int
      */
    protected $id_autorizacao;
    
    /**
      * $id_transferencia C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transferencia (id)
      * @var int
      */
    protected $id_transferencia;
    
    /**
      * $codigo_autorizacao C\u00C3\u00B3digo da autoriza\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $codigo_autorizacao;
    
    /**
      * $data_autorizacao Data da autoriza\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $data_autorizacao;
    
    /**
      * $origem Origem
      * @var string
      */
    protected $origem;
    
    /**
      * $valor Valor
      * @var Number
      */
    protected $valor;
    
    /**
      * $id_operacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de opera\u00C3\u00A7\u00C3\u00A3o (id)
      * @var int
      */
    protected $id_operacao;
    
    /**
      * $terminal Terminal
      * @var string
      */
    protected $terminal;
    
    /**
      * $id_cartao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id)
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $data_compra Data da transfer\u00C3\u00AAncia
      * @var string
      */
    protected $data_compra;
    
    /**
      * $valor_compra Valor da transfer\u00C3\u00AAncia
      * @var Number
      */
    protected $valor_compra;
    
    /**
      * $numero_parcelas N\u00C3\u00BAmero de parcelas
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $valor_parcela Valor da parcela
      * @var Number
      */
    protected $valor_parcela;
    
    /**
      * $id_estabelecimento C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id)
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $data_movimento Data do movimento
      * @var string
      */
    protected $data_movimento;
    
    /**
      * $valor_contrato Valor da transfer\u00C3\u00AAncia acrescido do valor da tarifa de saque se houver tarifa de saque
      * @var Number
      */
    protected $valor_contrato;
    
    /**
      * $taxa_juros Percentual de juros
      * @var Number
      */
    protected $taxa_juros;
    
    /**
      * $valor_iof Valor do IOF
      * @var Number
      */
    protected $valor_iof;
    
    /**
      * $valor_tac Valor da TAC
      * @var Number
      */
    protected $valor_tac;
    
    /**
      * $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id)
      * @var int
      */
    protected $id_conta;
    
    /**
      * $valor_entrada Valor da entrada (primeira parcela)
      * @var Number
      */
    protected $valor_entrada;
    
    /**
      * $data_vencimento_real Data do vencimento real da fatura
      * @var string
      */
    protected $data_vencimento_real;
    
    /**
      * $data_vencimento_padrao Dia do vencimento padr\u00C3\u00A3o da fatura
      * @var string
      */
    protected $data_vencimento_padrao;
    
    /**
      * $id_conta_portador C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id)
      * @var int
      */
    protected $id_conta_portador;
    
    /**
      * $numero_estabelecimento Atributo que representa o numero do estabelecimento.
      * @var int
      */
    protected $numero_estabelecimento;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->nsuorigem = $data["nsuorigem"];
            $this->id_autorizacao = $data["id_autorizacao"];
            $this->id_transferencia = $data["id_transferencia"];
            $this->codigo_autorizacao = $data["codigo_autorizacao"];
            $this->data_autorizacao = $data["data_autorizacao"];
            $this->origem = $data["origem"];
            $this->valor = $data["valor"];
            $this->id_operacao = $data["id_operacao"];
            $this->terminal = $data["terminal"];
            $this->id_cartao = $data["id_cartao"];
            $this->data_compra = $data["data_compra"];
            $this->valor_compra = $data["valor_compra"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->valor_parcela = $data["valor_parcela"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->data_movimento = $data["data_movimento"];
            $this->valor_contrato = $data["valor_contrato"];
            $this->taxa_juros = $data["taxa_juros"];
            $this->valor_iof = $data["valor_iof"];
            $this->valor_tac = $data["valor_tac"];
            $this->id_conta = $data["id_conta"];
            $this->valor_entrada = $data["valor_entrada"];
            $this->data_vencimento_real = $data["data_vencimento_real"];
            $this->data_vencimento_padrao = $data["data_vencimento_padrao"];
            $this->id_conta_portador = $data["id_conta_portador"];
            $this->numero_estabelecimento = $data["numero_estabelecimento"];
        }
    }
    
    /**
     * Gets nsuorigem
     * @return int
     */
    public function getNsuorigem()
    {
        return $this->nsuorigem;
    }
  
    /**
     * Sets nsuorigem
     * @param int $nsuorigem 
     * @return $this
     */
    public function setNsuorigem($nsuorigem)
    {
        
        $this->nsuorigem = $nsuorigem;
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
     * @param int $id_autorizacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da autoriza\u00C3\u00A7\u00C3\u00A3o (id)
     * @return $this
     */
    public function setIdAutorizacao($id_autorizacao)
    {
        
        $this->id_autorizacao = $id_autorizacao;
        return $this;
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
     * @param int $id_transferencia C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transferencia (id)
     * @return $this
     */
    public function setIdTransferencia($id_transferencia)
    {
        
        $this->id_transferencia = $id_transferencia;
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
     * @param string $codigo_autorizacao C\u00C3\u00B3digo da autoriza\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setCodigoAutorizacao($codigo_autorizacao)
    {
        
        $this->codigo_autorizacao = $codigo_autorizacao;
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
     * @param string $data_autorizacao Data da autoriza\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setDataAutorizacao($data_autorizacao)
    {
        
        $this->data_autorizacao = $data_autorizacao;
        return $this;
    }
    
    /**
     * Gets origem
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }
  
    /**
     * Sets origem
     * @param string $origem Origem
     * @return $this
     */
    public function setOrigem($origem)
    {
        
        $this->origem = $origem;
        return $this;
    }
    
    /**
     * Gets valor
     * @return Number
     */
    public function getValor()
    {
        return $this->valor;
    }
  
    /**
     * Sets valor
     * @param Number $valor Valor
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
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
     * @param int $id_operacao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de opera\u00C3\u00A7\u00C3\u00A3o (id)
     * @return $this
     */
    public function setIdOperacao($id_operacao)
    {
        
        $this->id_operacao = $id_operacao;
        return $this;
    }
    
    /**
     * Gets terminal
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
  
    /**
     * Sets terminal
     * @param string $terminal Terminal
     * @return $this
     */
    public function setTerminal($terminal)
    {
        
        $this->terminal = $terminal;
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
     * @param int $id_cartao C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id)
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
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
     * @param string $data_compra Data da transfer\u00C3\u00AAncia
     * @return $this
     */
    public function setDataCompra($data_compra)
    {
        
        $this->data_compra = $data_compra;
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
     * @param Number $valor_compra Valor da transfer\u00C3\u00AAncia
     * @return $this
     */
    public function setValorCompra($valor_compra)
    {
        
        $this->valor_compra = $valor_compra;
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
     * @param int $numero_parcelas N\u00C3\u00BAmero de parcelas
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
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
     * @param Number $valor_parcela Valor da parcela
     * @return $this
     */
    public function setValorParcela($valor_parcela)
    {
        
        $this->valor_parcela = $valor_parcela;
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
     * @param int $id_estabelecimento C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id)
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
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
     * @param string $data_movimento Data do movimento
     * @return $this
     */
    public function setDataMovimento($data_movimento)
    {
        
        $this->data_movimento = $data_movimento;
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
     * @param Number $valor_contrato Valor da transfer\u00C3\u00AAncia acrescido do valor da tarifa de saque se houver tarifa de saque
     * @return $this
     */
    public function setValorContrato($valor_contrato)
    {
        
        $this->valor_contrato = $valor_contrato;
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
     * @param Number $taxa_juros Percentual de juros
     * @return $this
     */
    public function setTaxaJuros($taxa_juros)
    {
        
        $this->taxa_juros = $taxa_juros;
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
     * @param Number $valor_iof Valor do IOF
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
     * @param Number $valor_tac Valor da TAC
     * @return $this
     */
    public function setValorTac($valor_tac)
    {
        
        $this->valor_tac = $valor_tac;
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
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id)
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
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
     * @param Number $valor_entrada Valor da entrada (primeira parcela)
     * @return $this
     */
    public function setValorEntrada($valor_entrada)
    {
        
        $this->valor_entrada = $valor_entrada;
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
     * @param string $data_vencimento_real Data do vencimento real da fatura
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
     * @param string $data_vencimento_padrao Dia do vencimento padr\u00C3\u00A3o da fatura
     * @return $this
     */
    public function setDataVencimentoPadrao($data_vencimento_padrao)
    {
        
        $this->data_vencimento_padrao = $data_vencimento_padrao;
        return $this;
    }
    
    /**
     * Gets id_conta_portador
     * @return int
     */
    public function getIdContaPortador()
    {
        return $this->id_conta_portador;
    }
  
    /**
     * Sets id_conta_portador
     * @param int $id_conta_portador C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id)
     * @return $this
     */
    public function setIdContaPortador($id_conta_portador)
    {
        
        $this->id_conta_portador = $id_conta_portador;
        return $this;
    }
    
    /**
     * Gets numero_estabelecimento
     * @return int
     */
    public function getNumeroEstabelecimento()
    {
        return $this->numero_estabelecimento;
    }
  
    /**
     * Sets numero_estabelecimento
     * @param int $numero_estabelecimento Atributo que representa o numero do estabelecimento.
     * @return $this
     */
    public function setNumeroEstabelecimento($numero_estabelecimento)
    {
        
        $this->numero_estabelecimento = $numero_estabelecimento;
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
