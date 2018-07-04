<?php
/**
 * TransacaoCorrenteResponse
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
 * TransacaoCorrenteResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{transacao_corrente_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransacaoCorrenteResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'ultima_parcela_lancada' => 'int',
        'id_conta' => 'int',
        'id_tipo_registro' => 'int',
        'ordem' => 'int',
        'id_transacao' => 'int',
        'descricao' => 'string',
        'status' => 'int',
        'descricao_status' => 'string',
        'valor' => 'Number',
        'valor_dolar' => 'Number',
        'quantidade_parcelas' => 'int',
        'valor_parcela' => 'Number',
        'data_evento' => 'string',
        'estabelecimento' => 'string',
        'flag_credito' => 'int',
        'tipo_estabelecimento' => 'string',
        'id_grupo_mcc' => 'int',
        'flag_solicitou_contestacao' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'ultima_parcela_lancada' => 'ultimaParcelaLancada',
        'id_conta' => 'idConta',
        'id_tipo_registro' => 'idTipoRegistro',
        'ordem' => 'ordem',
        'id_transacao' => 'idTransacao',
        'descricao' => 'descricao',
        'status' => 'status',
        'descricao_status' => 'descricaoStatus',
        'valor' => 'valor',
        'valor_dolar' => 'valorDolar',
        'quantidade_parcelas' => 'quantidadeParcelas',
        'valor_parcela' => 'valorParcela',
        'data_evento' => 'dataEvento',
        'estabelecimento' => 'estabelecimento',
        'flag_credito' => 'flagCredito',
        'tipo_estabelecimento' => 'tipoEstabelecimento',
        'id_grupo_mcc' => 'idGrupoMCC',
        'flag_solicitou_contestacao' => 'flagSolicitouContestacao'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'ultima_parcela_lancada' => 'setUltimaParcelaLancada',
        'id_conta' => 'setIdConta',
        'id_tipo_registro' => 'setIdTipoRegistro',
        'ordem' => 'setOrdem',
        'id_transacao' => 'setIdTransacao',
        'descricao' => 'setDescricao',
        'status' => 'setStatus',
        'descricao_status' => 'setDescricaoStatus',
        'valor' => 'setValor',
        'valor_dolar' => 'setValorDolar',
        'quantidade_parcelas' => 'setQuantidadeParcelas',
        'valor_parcela' => 'setValorParcela',
        'data_evento' => 'setDataEvento',
        'estabelecimento' => 'setEstabelecimento',
        'flag_credito' => 'setFlagCredito',
        'tipo_estabelecimento' => 'setTipoEstabelecimento',
        'id_grupo_mcc' => 'setIdGrupoMcc',
        'flag_solicitou_contestacao' => 'setFlagSolicitouContestacao'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'ultima_parcela_lancada' => 'getUltimaParcelaLancada',
        'id_conta' => 'getIdConta',
        'id_tipo_registro' => 'getIdTipoRegistro',
        'ordem' => 'getOrdem',
        'id_transacao' => 'getIdTransacao',
        'descricao' => 'getDescricao',
        'status' => 'getStatus',
        'descricao_status' => 'getDescricaoStatus',
        'valor' => 'getValor',
        'valor_dolar' => 'getValorDolar',
        'quantidade_parcelas' => 'getQuantidadeParcelas',
        'valor_parcela' => 'getValorParcela',
        'data_evento' => 'getDataEvento',
        'estabelecimento' => 'getEstabelecimento',
        'flag_credito' => 'getFlagCredito',
        'tipo_estabelecimento' => 'getTipoEstabelecimento',
        'id_grupo_mcc' => 'getIdGrupoMcc',
        'flag_solicitou_contestacao' => 'getFlagSolicitouContestacao'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $ultima_parcela_lancada 
      * @var int
      */
    protected $ultima_parcela_lancada;
    
    /**
      * $id_conta {{{transacao_corrente_response_id_conta_value}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_tipo_registro {{{transacao_corrente_response_id_tipo_registro_value}}}
      * @var int
      */
    protected $id_tipo_registro;
    
    /**
      * $ordem {{{transacao_corrente_response_ordem_value}}}
      * @var int
      */
    protected $ordem;
    
    /**
      * $id_transacao {{{transacao_corrente_response_id_transacao_value}}}
      * @var int
      */
    protected $id_transacao;
    
    /**
      * $descricao {{{transacao_corrente_response_descricao_value}}}
      * @var string
      */
    protected $descricao;
    
    /**
      * $status {{{transacao_corrente_response_status_value}}}
      * @var int
      */
    protected $status;
    
    /**
      * $descricao_status {{{transacao_corrente_response_descricao_status_value}}}
      * @var string
      */
    protected $descricao_status;
    
    /**
      * $valor {{{transacao_corrente_response_valor_value}}}
      * @var Number
      */
    protected $valor;
    
    /**
      * $valor_dolar {{{transacao_corrente_response_valor_dolar_value}}}
      * @var Number
      */
    protected $valor_dolar;
    
    /**
      * $quantidade_parcelas {{{transacao_corrente_response_quantidade_parcelas_value}}}
      * @var int
      */
    protected $quantidade_parcelas;
    
    /**
      * $valor_parcela {{{transacao_corrente_response_valor_parcela_value}}}
      * @var Number
      */
    protected $valor_parcela;
    
    /**
      * $data_evento {{{transacao_corrente_response_data_evento_value}}}
      * @var string
      */
    protected $data_evento;
    
    /**
      * $estabelecimento {{{transacao_corrente_response_estabelecimento_value}}}
      * @var string
      */
    protected $estabelecimento;
    
    /**
      * $flag_credito {{{transacao_corrente_response_flag_credito_value}}}
      * @var int
      */
    protected $flag_credito;
    
    /**
      * $tipo_estabelecimento {{{transacao_corrente_response_tipo_estabelecimento_value}}}
      * @var string
      */
    protected $tipo_estabelecimento;
    
    /**
      * $id_grupo_mcc {{{transacao_corrente_response_id_grupo_m_c_c_value}}}
      * @var int
      */
    protected $id_grupo_mcc;
    
    /**
      * $flag_solicitou_contestacao {{{transacao_corrente_response_flag_solicitou_contestacao_value}}}
      * @var int
      */
    protected $flag_solicitou_contestacao;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->ultima_parcela_lancada = $data["ultima_parcela_lancada"];
            $this->id_conta = $data["id_conta"];
            $this->id_tipo_registro = $data["id_tipo_registro"];
            $this->ordem = $data["ordem"];
            $this->id_transacao = $data["id_transacao"];
            $this->descricao = $data["descricao"];
            $this->status = $data["status"];
            $this->descricao_status = $data["descricao_status"];
            $this->valor = $data["valor"];
            $this->valor_dolar = $data["valor_dolar"];
            $this->quantidade_parcelas = $data["quantidade_parcelas"];
            $this->valor_parcela = $data["valor_parcela"];
            $this->data_evento = $data["data_evento"];
            $this->estabelecimento = $data["estabelecimento"];
            $this->flag_credito = $data["flag_credito"];
            $this->tipo_estabelecimento = $data["tipo_estabelecimento"];
            $this->id_grupo_mcc = $data["id_grupo_mcc"];
            $this->flag_solicitou_contestacao = $data["flag_solicitou_contestacao"];
        }
    }
    
    /**
     * Gets ultima_parcela_lancada
     * @return int
     */
    public function getUltimaParcelaLancada()
    {
        return $this->ultima_parcela_lancada;
    }
  
    /**
     * Sets ultima_parcela_lancada
     * @param int $ultima_parcela_lancada 
     * @return $this
     */
    public function setUltimaParcelaLancada($ultima_parcela_lancada)
    {
        
        $this->ultima_parcela_lancada = $ultima_parcela_lancada;
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
     * @param int $id_conta {{{transacao_corrente_response_id_conta_value}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_tipo_registro
     * @return int
     */
    public function getIdTipoRegistro()
    {
        return $this->id_tipo_registro;
    }
  
    /**
     * Sets id_tipo_registro
     * @param int $id_tipo_registro {{{transacao_corrente_response_id_tipo_registro_value}}}
     * @return $this
     */
    public function setIdTipoRegistro($id_tipo_registro)
    {
        
        $this->id_tipo_registro = $id_tipo_registro;
        return $this;
    }
    
    /**
     * Gets ordem
     * @return int
     */
    public function getOrdem()
    {
        return $this->ordem;
    }
  
    /**
     * Sets ordem
     * @param int $ordem {{{transacao_corrente_response_ordem_value}}}
     * @return $this
     */
    public function setOrdem($ordem)
    {
        
        $this->ordem = $ordem;
        return $this;
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
     * @param int $id_transacao {{{transacao_corrente_response_id_transacao_value}}}
     * @return $this
     */
    public function setIdTransacao($id_transacao)
    {
        
        $this->id_transacao = $id_transacao;
        return $this;
    }
    
    /**
     * Gets descricao
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
  
    /**
     * Sets descricao
     * @param string $descricao {{{transacao_corrente_response_descricao_value}}}
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
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
     * @param int $status {{{transacao_corrente_response_status_value}}}
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets descricao_status
     * @return string
     */
    public function getDescricaoStatus()
    {
        return $this->descricao_status;
    }
  
    /**
     * Sets descricao_status
     * @param string $descricao_status {{{transacao_corrente_response_descricao_status_value}}}
     * @return $this
     */
    public function setDescricaoStatus($descricao_status)
    {
        
        $this->descricao_status = $descricao_status;
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
     * @param Number $valor {{{transacao_corrente_response_valor_value}}}
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets valor_dolar
     * @return Number
     */
    public function getValorDolar()
    {
        return $this->valor_dolar;
    }
  
    /**
     * Sets valor_dolar
     * @param Number $valor_dolar {{{transacao_corrente_response_valor_dolar_value}}}
     * @return $this
     */
    public function setValorDolar($valor_dolar)
    {
        
        $this->valor_dolar = $valor_dolar;
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
     * @param int $quantidade_parcelas {{{transacao_corrente_response_quantidade_parcelas_value}}}
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
     * @param Number $valor_parcela {{{transacao_corrente_response_valor_parcela_value}}}
     * @return $this
     */
    public function setValorParcela($valor_parcela)
    {
        
        $this->valor_parcela = $valor_parcela;
        return $this;
    }
    
    /**
     * Gets data_evento
     * @return string
     */
    public function getDataEvento()
    {
        return $this->data_evento;
    }
  
    /**
     * Sets data_evento
     * @param string $data_evento {{{transacao_corrente_response_data_evento_value}}}
     * @return $this
     */
    public function setDataEvento($data_evento)
    {
        
        $this->data_evento = $data_evento;
        return $this;
    }
    
    /**
     * Gets estabelecimento
     * @return string
     */
    public function getEstabelecimento()
    {
        return $this->estabelecimento;
    }
  
    /**
     * Sets estabelecimento
     * @param string $estabelecimento {{{transacao_corrente_response_estabelecimento_value}}}
     * @return $this
     */
    public function setEstabelecimento($estabelecimento)
    {
        
        $this->estabelecimento = $estabelecimento;
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
     * @param int $flag_credito {{{transacao_corrente_response_flag_credito_value}}}
     * @return $this
     */
    public function setFlagCredito($flag_credito)
    {
        
        $this->flag_credito = $flag_credito;
        return $this;
    }
    
    /**
     * Gets tipo_estabelecimento
     * @return string
     */
    public function getTipoEstabelecimento()
    {
        return $this->tipo_estabelecimento;
    }
  
    /**
     * Sets tipo_estabelecimento
     * @param string $tipo_estabelecimento {{{transacao_corrente_response_tipo_estabelecimento_value}}}
     * @return $this
     */
    public function setTipoEstabelecimento($tipo_estabelecimento)
    {
        
        $this->tipo_estabelecimento = $tipo_estabelecimento;
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
     * @param int $id_grupo_mcc {{{transacao_corrente_response_id_grupo_m_c_c_value}}}
     * @return $this
     */
    public function setIdGrupoMcc($id_grupo_mcc)
    {
        
        $this->id_grupo_mcc = $id_grupo_mcc;
        return $this;
    }
    
    /**
     * Gets flag_solicitou_contestacao
     * @return int
     */
    public function getFlagSolicitouContestacao()
    {
        return $this->flag_solicitou_contestacao;
    }
  
    /**
     * Sets flag_solicitou_contestacao
     * @param int $flag_solicitou_contestacao {{{transacao_corrente_response_flag_solicitou_contestacao_value}}}
     * @return $this
     */
    public function setFlagSolicitouContestacao($flag_solicitou_contestacao)
    {
        
        $this->flag_solicitou_contestacao = $flag_solicitou_contestacao;
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
