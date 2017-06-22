<?php
/**
 * AntecipacaoSimuladaResponse
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
 * AntecipacaoSimuladaResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o da resposta do recurso Antecipacao Simulada
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AntecipacaoSimuladaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_antecipacao_simulada' => 'int',
        'id_conta' => 'int',
        'id_evento_externo' => 'int',
        'id_tipo_transacao' => 'int',
        'qtde_parcelas_antecipaveis' => 'int',
        'valor_parcela' => 'Number',
        'data_hora_simulacao' => 'string',
        'taxa_antecipacao_ano' => 'Number',
        'detalhes' => '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaDetalhesResponse[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_antecipacao_simulada' => 'idAntecipacaoSimulada',
        'id_conta' => 'idConta',
        'id_evento_externo' => 'idEventoExterno',
        'id_tipo_transacao' => 'idTipoTransacao',
        'qtde_parcelas_antecipaveis' => 'qtdeParcelasAntecipaveis',
        'valor_parcela' => 'valorParcela',
        'data_hora_simulacao' => 'dataHoraSimulacao',
        'taxa_antecipacao_ano' => 'taxaAntecipacaoAno',
        'detalhes' => 'detalhes'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_antecipacao_simulada' => 'setIdAntecipacaoSimulada',
        'id_conta' => 'setIdConta',
        'id_evento_externo' => 'setIdEventoExterno',
        'id_tipo_transacao' => 'setIdTipoTransacao',
        'qtde_parcelas_antecipaveis' => 'setQtdeParcelasAntecipaveis',
        'valor_parcela' => 'setValorParcela',
        'data_hora_simulacao' => 'setDataHoraSimulacao',
        'taxa_antecipacao_ano' => 'setTaxaAntecipacaoAno',
        'detalhes' => 'setDetalhes'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_antecipacao_simulada' => 'getIdAntecipacaoSimulada',
        'id_conta' => 'getIdConta',
        'id_evento_externo' => 'getIdEventoExterno',
        'id_tipo_transacao' => 'getIdTipoTransacao',
        'qtde_parcelas_antecipaveis' => 'getQtdeParcelasAntecipaveis',
        'valor_parcela' => 'getValorParcela',
        'data_hora_simulacao' => 'getDataHoraSimulacao',
        'taxa_antecipacao_ano' => 'getTaxaAntecipacaoAno',
        'detalhes' => 'getDetalhes'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_antecipacao_simulada C\u00C3\u00B3digo identificador da simula\u00C3\u00A7\u00C3\u00A3o de antecipa\u00C3\u00A7\u00C3\u00A3o.
      * @var int
      */
    protected $id_antecipacao_simulada;
    
    /**
      * $id_conta C\u00C3\u00B3digo identificador da conta.
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_evento_externo C\u00C3\u00B3digo identificador do evento.
      * @var int
      */
    protected $id_evento_externo;
    
    /**
      * $id_tipo_transacao C\u00C3\u00B3digo identificador do tipo do evento.
      * @var int
      */
    protected $id_tipo_transacao;
    
    /**
      * $qtde_parcelas_antecipaveis Quantidade de parcelas antecip\u00C3\u00A1veis.
      * @var int
      */
    protected $qtde_parcelas_antecipaveis;
    
    /**
      * $valor_parcela Valor da parcela.
      * @var Number
      */
    protected $valor_parcela;
    
    /**
      * $data_hora_simulacao Data e hora em que a simula\u00C3\u00A7\u00C3\u00A3o foi feita.
      * @var string
      */
    protected $data_hora_simulacao;
    
    /**
      * $taxa_antecipacao_ano Taxa de antecipa\u00C3\u00A7\u00C3\u00A3o aplicada (ao ano).
      * @var Number
      */
    protected $taxa_antecipacao_ano;
    
    /**
      * $detalhes Detalhes da simula\u00C3\u00A7\u00C3\u00A3o.
      * @var \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaDetalhesResponse[]
      */
    protected $detalhes;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_antecipacao_simulada = $data["id_antecipacao_simulada"];
            $this->id_conta = $data["id_conta"];
            $this->id_evento_externo = $data["id_evento_externo"];
            $this->id_tipo_transacao = $data["id_tipo_transacao"];
            $this->qtde_parcelas_antecipaveis = $data["qtde_parcelas_antecipaveis"];
            $this->valor_parcela = $data["valor_parcela"];
            $this->data_hora_simulacao = $data["data_hora_simulacao"];
            $this->taxa_antecipacao_ano = $data["taxa_antecipacao_ano"];
            $this->detalhes = $data["detalhes"];
        }
    }
    
    /**
     * Gets id_antecipacao_simulada
     * @return int
     */
    public function getIdAntecipacaoSimulada()
    {
        return $this->id_antecipacao_simulada;
    }
  
    /**
     * Sets id_antecipacao_simulada
     * @param int $id_antecipacao_simulada C\u00C3\u00B3digo identificador da simula\u00C3\u00A7\u00C3\u00A3o de antecipa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setIdAntecipacaoSimulada($id_antecipacao_simulada)
    {
        
        $this->id_antecipacao_simulada = $id_antecipacao_simulada;
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
     * @param int $id_conta C\u00C3\u00B3digo identificador da conta.
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_evento_externo
     * @return int
     */
    public function getIdEventoExterno()
    {
        return $this->id_evento_externo;
    }
  
    /**
     * Sets id_evento_externo
     * @param int $id_evento_externo C\u00C3\u00B3digo identificador do evento.
     * @return $this
     */
    public function setIdEventoExterno($id_evento_externo)
    {
        
        $this->id_evento_externo = $id_evento_externo;
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
     * @param int $id_tipo_transacao C\u00C3\u00B3digo identificador do tipo do evento.
     * @return $this
     */
    public function setIdTipoTransacao($id_tipo_transacao)
    {
        
        $this->id_tipo_transacao = $id_tipo_transacao;
        return $this;
    }
    
    /**
     * Gets qtde_parcelas_antecipaveis
     * @return int
     */
    public function getQtdeParcelasAntecipaveis()
    {
        return $this->qtde_parcelas_antecipaveis;
    }
  
    /**
     * Sets qtde_parcelas_antecipaveis
     * @param int $qtde_parcelas_antecipaveis Quantidade de parcelas antecip\u00C3\u00A1veis.
     * @return $this
     */
    public function setQtdeParcelasAntecipaveis($qtde_parcelas_antecipaveis)
    {
        
        $this->qtde_parcelas_antecipaveis = $qtde_parcelas_antecipaveis;
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
     * Gets data_hora_simulacao
     * @return string
     */
    public function getDataHoraSimulacao()
    {
        return $this->data_hora_simulacao;
    }
  
    /**
     * Sets data_hora_simulacao
     * @param string $data_hora_simulacao Data e hora em que a simula\u00C3\u00A7\u00C3\u00A3o foi feita.
     * @return $this
     */
    public function setDataHoraSimulacao($data_hora_simulacao)
    {
        
        $this->data_hora_simulacao = $data_hora_simulacao;
        return $this;
    }
    
    /**
     * Gets taxa_antecipacao_ano
     * @return Number
     */
    public function getTaxaAntecipacaoAno()
    {
        return $this->taxa_antecipacao_ano;
    }
  
    /**
     * Sets taxa_antecipacao_ano
     * @param Number $taxa_antecipacao_ano Taxa de antecipa\u00C3\u00A7\u00C3\u00A3o aplicada (ao ano).
     * @return $this
     */
    public function setTaxaAntecipacaoAno($taxa_antecipacao_ano)
    {
        
        $this->taxa_antecipacao_ano = $taxa_antecipacao_ano;
        return $this;
    }
    
    /**
     * Gets detalhes
     * @return \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaDetalhesResponse[]
     */
    public function getDetalhes()
    {
        return $this->detalhes;
    }
  
    /**
     * Sets detalhes
     * @param \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaDetalhesResponse[] $detalhes Detalhes da simula\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setDetalhes($detalhes)
    {
        
        $this->detalhes = $detalhes;
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
