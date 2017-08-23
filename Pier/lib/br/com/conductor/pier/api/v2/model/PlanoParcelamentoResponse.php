<?php
/**
 * PlanoParcelamentoResponse
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
 * PlanoParcelamentoResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o da resposta do recurso de planos de parcelamento
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlanoParcelamentoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'data_fechamento_fatura' => 'string',
        'data_vencimento_padrao' => 'string',
        'valor_total_fatura' => 'Number',
        'quantidade_parcelas' => 'int',
        'valor_parcela' => 'Number',
        'valor_entrada' => 'Number',
        'taxa_refinanciamento' => 'Number',
        'custo_efetivo_total' => 'Number',
        'valor_total_refinanciamento' => 'Number',
        'valor_iof' => 'Number',
        'valor_tac' => 'Number',
        'status_adesao' => 'int',
        'data_inclusao' => 'string',
        'data_processamento_adesao' => 'string',
        'id_conta' => 'int',
        'descricao_servico_tipo' => 'string',
        'com_entrada' => 'bool',
        'nome_campanha' => 'string'
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
        'data_fechamento_fatura' => 'dataFechamentoFatura',
        'data_vencimento_padrao' => 'dataVencimentoPadrao',
        'valor_total_fatura' => 'valorTotalFatura',
        'quantidade_parcelas' => 'quantidadeParcelas',
        'valor_parcela' => 'valorParcela',
        'valor_entrada' => 'valorEntrada',
        'taxa_refinanciamento' => 'taxaRefinanciamento',
        'custo_efetivo_total' => 'custoEfetivoTotal',
        'valor_total_refinanciamento' => 'valorTotalRefinanciamento',
        'valor_iof' => 'valorIOF',
        'valor_tac' => 'valorTAC',
        'status_adesao' => 'statusAdesao',
        'data_inclusao' => 'dataInclusao',
        'data_processamento_adesao' => 'dataProcessamentoAdesao',
        'id_conta' => 'idConta',
        'descricao_servico_tipo' => 'descricaoServicoTipo',
        'com_entrada' => 'comEntrada',
        'nome_campanha' => 'nomeCampanha'
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
        'data_fechamento_fatura' => 'setDataFechamentoFatura',
        'data_vencimento_padrao' => 'setDataVencimentoPadrao',
        'valor_total_fatura' => 'setValorTotalFatura',
        'quantidade_parcelas' => 'setQuantidadeParcelas',
        'valor_parcela' => 'setValorParcela',
        'valor_entrada' => 'setValorEntrada',
        'taxa_refinanciamento' => 'setTaxaRefinanciamento',
        'custo_efetivo_total' => 'setCustoEfetivoTotal',
        'valor_total_refinanciamento' => 'setValorTotalRefinanciamento',
        'valor_iof' => 'setValorIof',
        'valor_tac' => 'setValorTac',
        'status_adesao' => 'setStatusAdesao',
        'data_inclusao' => 'setDataInclusao',
        'data_processamento_adesao' => 'setDataProcessamentoAdesao',
        'id_conta' => 'setIdConta',
        'descricao_servico_tipo' => 'setDescricaoServicoTipo',
        'com_entrada' => 'setComEntrada',
        'nome_campanha' => 'setNomeCampanha'
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
        'data_fechamento_fatura' => 'getDataFechamentoFatura',
        'data_vencimento_padrao' => 'getDataVencimentoPadrao',
        'valor_total_fatura' => 'getValorTotalFatura',
        'quantidade_parcelas' => 'getQuantidadeParcelas',
        'valor_parcela' => 'getValorParcela',
        'valor_entrada' => 'getValorEntrada',
        'taxa_refinanciamento' => 'getTaxaRefinanciamento',
        'custo_efetivo_total' => 'getCustoEfetivoTotal',
        'valor_total_refinanciamento' => 'getValorTotalRefinanciamento',
        'valor_iof' => 'getValorIof',
        'valor_tac' => 'getValorTac',
        'status_adesao' => 'getStatusAdesao',
        'data_inclusao' => 'getDataInclusao',
        'data_processamento_adesao' => 'getDataProcessamentoAdesao',
        'id_conta' => 'getIdConta',
        'descricao_servico_tipo' => 'getDescricaoServicoTipo',
        'com_entrada' => 'getComEntrada',
        'nome_campanha' => 'getNomeCampanha'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id Identificador do parcelamento
      * @var int
      */
    protected $id;
    
    /**
      * $data_fechamento_fatura Data de fechamento da fatura
      * @var string
      */
    protected $data_fechamento_fatura;
    
    /**
      * $data_vencimento_padrao Data de vencimento padr\u00C3\u00A3o
      * @var string
      */
    protected $data_vencimento_padrao;
    
    /**
      * $valor_total_fatura Valor total da fatura
      * @var Number
      */
    protected $valor_total_fatura;
    
    /**
      * $quantidade_parcelas Quantidade de parcelas
      * @var int
      */
    protected $quantidade_parcelas;
    
    /**
      * $valor_parcela Valor da parcela
      * @var Number
      */
    protected $valor_parcela;
    
    /**
      * $valor_entrada Valor de entrada
      * @var Number
      */
    protected $valor_entrada;
    
    /**
      * $taxa_refinanciamento Taxa de refinanciamento
      * @var Number
      */
    protected $taxa_refinanciamento;
    
    /**
      * $custo_efetivo_total Custo efetivo total
      * @var Number
      */
    protected $custo_efetivo_total;
    
    /**
      * $valor_total_refinanciamento Valor total de refinanciamento
      * @var Number
      */
    protected $valor_total_refinanciamento;
    
    /**
      * $valor_iof Valor do IOF
      * @var Number
      */
    protected $valor_iof;
    
    /**
      * $valor_tac Valor do TAC
      * @var Number
      */
    protected $valor_tac;
    
    /**
      * $status_adesao Status da ades\u00C3\u00A3o
      * @var int
      */
    protected $status_adesao;
    
    /**
      * $data_inclusao Data de inclus\u00C3\u00A3o
      * @var string
      */
    protected $data_inclusao;
    
    /**
      * $data_processamento_adesao Data de processamento da ades\u00C3\u00A3o
      * @var string
      */
    protected $data_processamento_adesao;
    
    /**
      * $id_conta Identificador da conta
      * @var int
      */
    protected $id_conta;
    
    /**
      * $descricao_servico_tipo Descri\u00C3\u00A7\u00C3\u00A3o do tipo de servi\u00C3\u00A7o
      * @var string
      */
    protected $descricao_servico_tipo;
    
    /**
      * $com_entrada Indica se a fatura foi com entrada
      * @var bool
      */
    protected $com_entrada;
    
    /**
      * $nome_campanha Nome da campanha
      * @var string
      */
    protected $nome_campanha;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->data_fechamento_fatura = $data["data_fechamento_fatura"];
            $this->data_vencimento_padrao = $data["data_vencimento_padrao"];
            $this->valor_total_fatura = $data["valor_total_fatura"];
            $this->quantidade_parcelas = $data["quantidade_parcelas"];
            $this->valor_parcela = $data["valor_parcela"];
            $this->valor_entrada = $data["valor_entrada"];
            $this->taxa_refinanciamento = $data["taxa_refinanciamento"];
            $this->custo_efetivo_total = $data["custo_efetivo_total"];
            $this->valor_total_refinanciamento = $data["valor_total_refinanciamento"];
            $this->valor_iof = $data["valor_iof"];
            $this->valor_tac = $data["valor_tac"];
            $this->status_adesao = $data["status_adesao"];
            $this->data_inclusao = $data["data_inclusao"];
            $this->data_processamento_adesao = $data["data_processamento_adesao"];
            $this->id_conta = $data["id_conta"];
            $this->descricao_servico_tipo = $data["descricao_servico_tipo"];
            $this->com_entrada = $data["com_entrada"];
            $this->nome_campanha = $data["nome_campanha"];
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
     * @param int $id Identificador do parcelamento
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets data_fechamento_fatura
     * @return string
     */
    public function getDataFechamentoFatura()
    {
        return $this->data_fechamento_fatura;
    }
  
    /**
     * Sets data_fechamento_fatura
     * @param string $data_fechamento_fatura Data de fechamento da fatura
     * @return $this
     */
    public function setDataFechamentoFatura($data_fechamento_fatura)
    {
        
        $this->data_fechamento_fatura = $data_fechamento_fatura;
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
     * @param string $data_vencimento_padrao Data de vencimento padr\u00C3\u00A3o
     * @return $this
     */
    public function setDataVencimentoPadrao($data_vencimento_padrao)
    {
        
        $this->data_vencimento_padrao = $data_vencimento_padrao;
        return $this;
    }
    
    /**
     * Gets valor_total_fatura
     * @return Number
     */
    public function getValorTotalFatura()
    {
        return $this->valor_total_fatura;
    }
  
    /**
     * Sets valor_total_fatura
     * @param Number $valor_total_fatura Valor total da fatura
     * @return $this
     */
    public function setValorTotalFatura($valor_total_fatura)
    {
        
        $this->valor_total_fatura = $valor_total_fatura;
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
     * Gets valor_entrada
     * @return Number
     */
    public function getValorEntrada()
    {
        return $this->valor_entrada;
    }
  
    /**
     * Sets valor_entrada
     * @param Number $valor_entrada Valor de entrada
     * @return $this
     */
    public function setValorEntrada($valor_entrada)
    {
        
        $this->valor_entrada = $valor_entrada;
        return $this;
    }
    
    /**
     * Gets taxa_refinanciamento
     * @return Number
     */
    public function getTaxaRefinanciamento()
    {
        return $this->taxa_refinanciamento;
    }
  
    /**
     * Sets taxa_refinanciamento
     * @param Number $taxa_refinanciamento Taxa de refinanciamento
     * @return $this
     */
    public function setTaxaRefinanciamento($taxa_refinanciamento)
    {
        
        $this->taxa_refinanciamento = $taxa_refinanciamento;
        return $this;
    }
    
    /**
     * Gets custo_efetivo_total
     * @return Number
     */
    public function getCustoEfetivoTotal()
    {
        return $this->custo_efetivo_total;
    }
  
    /**
     * Sets custo_efetivo_total
     * @param Number $custo_efetivo_total Custo efetivo total
     * @return $this
     */
    public function setCustoEfetivoTotal($custo_efetivo_total)
    {
        
        $this->custo_efetivo_total = $custo_efetivo_total;
        return $this;
    }
    
    /**
     * Gets valor_total_refinanciamento
     * @return Number
     */
    public function getValorTotalRefinanciamento()
    {
        return $this->valor_total_refinanciamento;
    }
  
    /**
     * Sets valor_total_refinanciamento
     * @param Number $valor_total_refinanciamento Valor total de refinanciamento
     * @return $this
     */
    public function setValorTotalRefinanciamento($valor_total_refinanciamento)
    {
        
        $this->valor_total_refinanciamento = $valor_total_refinanciamento;
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
     * @param Number $valor_tac Valor do TAC
     * @return $this
     */
    public function setValorTac($valor_tac)
    {
        
        $this->valor_tac = $valor_tac;
        return $this;
    }
    
    /**
     * Gets status_adesao
     * @return int
     */
    public function getStatusAdesao()
    {
        return $this->status_adesao;
    }
  
    /**
     * Sets status_adesao
     * @param int $status_adesao Status da ades\u00C3\u00A3o
     * @return $this
     */
    public function setStatusAdesao($status_adesao)
    {
        
        $this->status_adesao = $status_adesao;
        return $this;
    }
    
    /**
     * Gets data_inclusao
     * @return string
     */
    public function getDataInclusao()
    {
        return $this->data_inclusao;
    }
  
    /**
     * Sets data_inclusao
     * @param string $data_inclusao Data de inclus\u00C3\u00A3o
     * @return $this
     */
    public function setDataInclusao($data_inclusao)
    {
        
        $this->data_inclusao = $data_inclusao;
        return $this;
    }
    
    /**
     * Gets data_processamento_adesao
     * @return string
     */
    public function getDataProcessamentoAdesao()
    {
        return $this->data_processamento_adesao;
    }
  
    /**
     * Sets data_processamento_adesao
     * @param string $data_processamento_adesao Data de processamento da ades\u00C3\u00A3o
     * @return $this
     */
    public function setDataProcessamentoAdesao($data_processamento_adesao)
    {
        
        $this->data_processamento_adesao = $data_processamento_adesao;
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
     * @param int $id_conta Identificador da conta
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets descricao_servico_tipo
     * @return string
     */
    public function getDescricaoServicoTipo()
    {
        return $this->descricao_servico_tipo;
    }
  
    /**
     * Sets descricao_servico_tipo
     * @param string $descricao_servico_tipo Descri\u00C3\u00A7\u00C3\u00A3o do tipo de servi\u00C3\u00A7o
     * @return $this
     */
    public function setDescricaoServicoTipo($descricao_servico_tipo)
    {
        
        $this->descricao_servico_tipo = $descricao_servico_tipo;
        return $this;
    }
    
    /**
     * Gets com_entrada
     * @return bool
     */
    public function getComEntrada()
    {
        return $this->com_entrada;
    }
  
    /**
     * Sets com_entrada
     * @param bool $com_entrada Indica se a fatura foi com entrada
     * @return $this
     */
    public function setComEntrada($com_entrada)
    {
        
        $this->com_entrada = $com_entrada;
        return $this;
    }
    
    /**
     * Gets nome_campanha
     * @return string
     */
    public function getNomeCampanha()
    {
        return $this->nome_campanha;
    }
  
    /**
     * Sets nome_campanha
     * @param string $nome_campanha Nome da campanha
     * @return $this
     */
    public function setNomeCampanha($nome_campanha)
    {
        
        $this->nome_campanha = $nome_campanha;
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