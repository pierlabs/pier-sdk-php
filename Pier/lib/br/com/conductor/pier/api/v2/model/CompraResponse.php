<?php
/**
 * CompraResponse
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
 * CompraResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto de Compra
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompraResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'mcc' => 'int',
        'uf' => 'string',
        'id_compra' => 'int',
        'status' => 'string',
        'data_compra' => 'string',
        'valor_total_compra' => 'Number',
        'valor_parcela' => 'Number',
        'primeira_parcela' => 'Number',
        'numero_parcelas' => 'int',
        'numero_parcelas_antecipaveis' => 'int',
        'nome_estabelecimento' => 'string',
        'tipo_transacao' => 'string',
        'cidade' => 'string',
        'pais' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'id_grupo_mcc' => 'int',
        'descricao_grupo_mcc' => 'string',
        'id_conta' => 'int',
        'id_produto' => 'int',
        'descricao_produto' => 'string',
        'cartao' => 'string',
        'nome_portador_cartao' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'mcc' => 'mcc',
        'uf' => 'uf',
        'id_compra' => 'idCompra',
        'status' => 'status',
        'data_compra' => 'dataCompra',
        'valor_total_compra' => 'valorTotalCompra',
        'valor_parcela' => 'valorParcela',
        'primeira_parcela' => 'primeiraParcela',
        'numero_parcelas' => 'numeroParcelas',
        'numero_parcelas_antecipaveis' => 'numeroParcelasAntecipaveis',
        'nome_estabelecimento' => 'nomeEstabelecimento',
        'tipo_transacao' => 'tipoTransacao',
        'cidade' => 'cidade',
        'pais' => 'pais',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'id_grupo_mcc' => 'idGrupoMCC',
        'descricao_grupo_mcc' => 'descricaoGrupoMCC',
        'id_conta' => 'idConta',
        'id_produto' => 'idProduto',
        'descricao_produto' => 'descricaoProduto',
        'cartao' => 'cartao',
        'nome_portador_cartao' => 'nomePortadorCartao'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'mcc' => 'setMcc',
        'uf' => 'setUf',
        'id_compra' => 'setIdCompra',
        'status' => 'setStatus',
        'data_compra' => 'setDataCompra',
        'valor_total_compra' => 'setValorTotalCompra',
        'valor_parcela' => 'setValorParcela',
        'primeira_parcela' => 'setPrimeiraParcela',
        'numero_parcelas' => 'setNumeroParcelas',
        'numero_parcelas_antecipaveis' => 'setNumeroParcelasAntecipaveis',
        'nome_estabelecimento' => 'setNomeEstabelecimento',
        'tipo_transacao' => 'setTipoTransacao',
        'cidade' => 'setCidade',
        'pais' => 'setPais',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'id_grupo_mcc' => 'setIdGrupoMcc',
        'descricao_grupo_mcc' => 'setDescricaoGrupoMcc',
        'id_conta' => 'setIdConta',
        'id_produto' => 'setIdProduto',
        'descricao_produto' => 'setDescricaoProduto',
        'cartao' => 'setCartao',
        'nome_portador_cartao' => 'setNomePortadorCartao'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'mcc' => 'getMcc',
        'uf' => 'getUf',
        'id_compra' => 'getIdCompra',
        'status' => 'getStatus',
        'data_compra' => 'getDataCompra',
        'valor_total_compra' => 'getValorTotalCompra',
        'valor_parcela' => 'getValorParcela',
        'primeira_parcela' => 'getPrimeiraParcela',
        'numero_parcelas' => 'getNumeroParcelas',
        'numero_parcelas_antecipaveis' => 'getNumeroParcelasAntecipaveis',
        'nome_estabelecimento' => 'getNomeEstabelecimento',
        'tipo_transacao' => 'getTipoTransacao',
        'cidade' => 'getCidade',
        'pais' => 'getPais',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'id_grupo_mcc' => 'getIdGrupoMcc',
        'descricao_grupo_mcc' => 'getDescricaoGrupoMcc',
        'id_conta' => 'getIdConta',
        'id_produto' => 'getIdProduto',
        'descricao_produto' => 'getDescricaoProduto',
        'cartao' => 'getCartao',
        'nome_portador_cartao' => 'getNomePortadorCartao'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $mcc 
      * @var int
      */
    protected $mcc;
    
    /**
      * $uf 
      * @var string
      */
    protected $uf;
    
    /**
      * $id_compra C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da compra.
      * @var int
      */
    protected $id_compra;
    
    /**
      * $status Descri\u00C3\u00A7\u00C3\u00A3o do status da autoriza\u00C3\u00A7\u00C3\u00A3o da compra.
      * @var string
      */
    protected $status;
    
    /**
      * $data_compra Data da compra.
      * @var string
      */
    protected $data_compra;
    
    /**
      * $valor_total_compra Valor total da compra.
      * @var Number
      */
    protected $valor_total_compra;
    
    /**
      * $valor_parcela Valor da parcela da compra.
      * @var Number
      */
    protected $valor_parcela;
    
    /**
      * $primeira_parcela Valor da primeira parcela da compra.
      * @var Number
      */
    protected $primeira_parcela;
    
    /**
      * $numero_parcelas N\u00C3\u00BAmero de parcelas da compra.
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $numero_parcelas_antecipaveis N\u00C3\u00BAmero de parcelas antecip\u00C3\u00A1veis da compra.
      * @var int
      */
    protected $numero_parcelas_antecipaveis;
    
    /**
      * $nome_estabelecimento Nome do estabelecimento da compra.
      * @var string
      */
    protected $nome_estabelecimento;
    
    /**
      * $tipo_transacao Tipo de transa\u00C3\u00A7\u00C3\u00A3o da compra.
      * @var string
      */
    protected $tipo_transacao;
    
    /**
      * $cidade Cidade onde a compra foi realizada.
      * @var string
      */
    protected $cidade;
    
    /**
      * $pais Pa\u00C3\u00ADs onde a compra foi realizada.
      * @var string
      */
    protected $pais;
    
    /**
      * $latitude Coordenada latitudinal da localiza\u00C3\u00A7\u00C3\u00A3o da compra.
      * @var string
      */
    protected $latitude;
    
    /**
      * $longitude Coordenada longitudinal da localiza\u00C3\u00A7\u00C3\u00A3o da compra.
      * @var string
      */
    protected $longitude;
    
    /**
      * $id_grupo_mcc C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Grupo MCC da compra.
      * @var int
      */
    protected $id_grupo_mcc;
    
    /**
      * $descricao_grupo_mcc Descri\u00C3\u00A7\u00C3\u00A3o do Grupo MCC da compra.
      * @var string
      */
    protected $descricao_grupo_mcc;
    
    /**
      * $id_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta da compra.
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do produto da compra.
      * @var int
      */
    protected $id_produto;
    
    /**
      * $descricao_produto Descri\u00C3\u00A7\u00C3\u00A3o do produto da compra.
      * @var string
      */
    protected $descricao_produto;
    
    /**
      * $cartao N\u00C3\u00BAmero do cart\u00C3\u00A3o da compra.
      * @var string
      */
    protected $cartao;
    
    /**
      * $nome_portador_cartao Nome do portador do cart\u00C3\u00A3o da compra.
      * @var string
      */
    protected $nome_portador_cartao;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->mcc = $data["mcc"];
            $this->uf = $data["uf"];
            $this->id_compra = $data["id_compra"];
            $this->status = $data["status"];
            $this->data_compra = $data["data_compra"];
            $this->valor_total_compra = $data["valor_total_compra"];
            $this->valor_parcela = $data["valor_parcela"];
            $this->primeira_parcela = $data["primeira_parcela"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->numero_parcelas_antecipaveis = $data["numero_parcelas_antecipaveis"];
            $this->nome_estabelecimento = $data["nome_estabelecimento"];
            $this->tipo_transacao = $data["tipo_transacao"];
            $this->cidade = $data["cidade"];
            $this->pais = $data["pais"];
            $this->latitude = $data["latitude"];
            $this->longitude = $data["longitude"];
            $this->id_grupo_mcc = $data["id_grupo_mcc"];
            $this->descricao_grupo_mcc = $data["descricao_grupo_mcc"];
            $this->id_conta = $data["id_conta"];
            $this->id_produto = $data["id_produto"];
            $this->descricao_produto = $data["descricao_produto"];
            $this->cartao = $data["cartao"];
            $this->nome_portador_cartao = $data["nome_portador_cartao"];
        }
    }
    
    /**
     * Gets mcc
     * @return int
     */
    public function getMcc()
    {
        return $this->mcc;
    }
  
    /**
     * Sets mcc
     * @param int $mcc 
     * @return $this
     */
    public function setMcc($mcc)
    {
        
        $this->mcc = $mcc;
        return $this;
    }
    
    /**
     * Gets uf
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }
  
    /**
     * Sets uf
     * @param string $uf 
     * @return $this
     */
    public function setUf($uf)
    {
        
        $this->uf = $uf;
        return $this;
    }
    
    /**
     * Gets id_compra
     * @return int
     */
    public function getIdCompra()
    {
        return $this->id_compra;
    }
  
    /**
     * Sets id_compra
     * @param int $id_compra C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setIdCompra($id_compra)
    {
        
        $this->id_compra = $id_compra;
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
     * @param string $status Descri\u00C3\u00A7\u00C3\u00A3o do status da autoriza\u00C3\u00A7\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
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
     * @param string $data_compra Data da compra.
     * @return $this
     */
    public function setDataCompra($data_compra)
    {
        
        $this->data_compra = $data_compra;
        return $this;
    }
    
    /**
     * Gets valor_total_compra
     * @return Number
     */
    public function getValorTotalCompra()
    {
        return $this->valor_total_compra;
    }
  
    /**
     * Sets valor_total_compra
     * @param Number $valor_total_compra Valor total da compra.
     * @return $this
     */
    public function setValorTotalCompra($valor_total_compra)
    {
        
        $this->valor_total_compra = $valor_total_compra;
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
     * @param Number $valor_parcela Valor da parcela da compra.
     * @return $this
     */
    public function setValorParcela($valor_parcela)
    {
        
        $this->valor_parcela = $valor_parcela;
        return $this;
    }
    
    /**
     * Gets primeira_parcela
     * @return Number
     */
    public function getPrimeiraParcela()
    {
        return $this->primeira_parcela;
    }
  
    /**
     * Sets primeira_parcela
     * @param Number $primeira_parcela Valor da primeira parcela da compra.
     * @return $this
     */
    public function setPrimeiraParcela($primeira_parcela)
    {
        
        $this->primeira_parcela = $primeira_parcela;
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
     * @param int $numero_parcelas N\u00C3\u00BAmero de parcelas da compra.
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }
    
    /**
     * Gets numero_parcelas_antecipaveis
     * @return int
     */
    public function getNumeroParcelasAntecipaveis()
    {
        return $this->numero_parcelas_antecipaveis;
    }
  
    /**
     * Sets numero_parcelas_antecipaveis
     * @param int $numero_parcelas_antecipaveis N\u00C3\u00BAmero de parcelas antecip\u00C3\u00A1veis da compra.
     * @return $this
     */
    public function setNumeroParcelasAntecipaveis($numero_parcelas_antecipaveis)
    {
        
        $this->numero_parcelas_antecipaveis = $numero_parcelas_antecipaveis;
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
     * @param string $nome_estabelecimento Nome do estabelecimento da compra.
     * @return $this
     */
    public function setNomeEstabelecimento($nome_estabelecimento)
    {
        
        $this->nome_estabelecimento = $nome_estabelecimento;
        return $this;
    }
    
    /**
     * Gets tipo_transacao
     * @return string
     */
    public function getTipoTransacao()
    {
        return $this->tipo_transacao;
    }
  
    /**
     * Sets tipo_transacao
     * @param string $tipo_transacao Tipo de transa\u00C3\u00A7\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setTipoTransacao($tipo_transacao)
    {
        
        $this->tipo_transacao = $tipo_transacao;
        return $this;
    }
    
    /**
     * Gets cidade
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }
  
    /**
     * Sets cidade
     * @param string $cidade Cidade onde a compra foi realizada.
     * @return $this
     */
    public function setCidade($cidade)
    {
        
        $this->cidade = $cidade;
        return $this;
    }
    
    /**
     * Gets pais
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }
  
    /**
     * Sets pais
     * @param string $pais Pa\u00C3\u00ADs onde a compra foi realizada.
     * @return $this
     */
    public function setPais($pais)
    {
        
        $this->pais = $pais;
        return $this;
    }
    
    /**
     * Gets latitude
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
  
    /**
     * Sets latitude
     * @param string $latitude Coordenada latitudinal da localiza\u00C3\u00A7\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setLatitude($latitude)
    {
        
        $this->latitude = $latitude;
        return $this;
    }
    
    /**
     * Gets longitude
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
  
    /**
     * Sets longitude
     * @param string $longitude Coordenada longitudinal da localiza\u00C3\u00A7\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setLongitude($longitude)
    {
        
        $this->longitude = $longitude;
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
     * @param int $id_grupo_mcc C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Grupo MCC da compra.
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
     * @param string $descricao_grupo_mcc Descri\u00C3\u00A7\u00C3\u00A3o do Grupo MCC da compra.
     * @return $this
     */
    public function setDescricaoGrupoMcc($descricao_grupo_mcc)
    {
        
        $this->descricao_grupo_mcc = $descricao_grupo_mcc;
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
     * @param int $id_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta da compra.
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
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
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do produto da compra.
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets descricao_produto
     * @return string
     */
    public function getDescricaoProduto()
    {
        return $this->descricao_produto;
    }
  
    /**
     * Sets descricao_produto
     * @param string $descricao_produto Descri\u00C3\u00A7\u00C3\u00A3o do produto da compra.
     * @return $this
     */
    public function setDescricaoProduto($descricao_produto)
    {
        
        $this->descricao_produto = $descricao_produto;
        return $this;
    }
    
    /**
     * Gets cartao
     * @return string
     */
    public function getCartao()
    {
        return $this->cartao;
    }
  
    /**
     * Sets cartao
     * @param string $cartao N\u00C3\u00BAmero do cart\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setCartao($cartao)
    {
        
        $this->cartao = $cartao;
        return $this;
    }
    
    /**
     * Gets nome_portador_cartao
     * @return string
     */
    public function getNomePortadorCartao()
    {
        return $this->nome_portador_cartao;
    }
  
    /**
     * Sets nome_portador_cartao
     * @param string $nome_portador_cartao Nome do portador do cart\u00C3\u00A3o da compra.
     * @return $this
     */
    public function setNomePortadorCartao($nome_portador_cartao)
    {
        
        $this->nome_portador_cartao = $nome_portador_cartao;
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
