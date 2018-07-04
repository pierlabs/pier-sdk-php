<?php
/**
 * TipoOperacaoResponse
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
 * TipoOperacaoResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{tipo_operacao_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TipoOperacaoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'tipo_operacao' => 'string',
        'nome' => 'string',
        'descricao' => 'string',
        'excedente_permitido' => 'Number',
        'tipo_excedente_permitido' => 'string',
        'valor_minimo' => 'Number',
        'valor_maximo' => 'Number',
        'valor_tac' => 'Number',
        'flag_tira_tac' => 'int',
        'id_produto' => 'int',
        'id_estabelecimento' => 'int',
        'tarifa' => 'Number',
        'remuneracao_emissor' => 'Number',
        'plano_maximo' => 'int',
        'plano_minimo' => 'int'
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
        'tipo_operacao' => 'tipoOperacao',
        'nome' => 'nome',
        'descricao' => 'descricao',
        'excedente_permitido' => 'excedentePermitido',
        'tipo_excedente_permitido' => 'tipoExcedentePermitido',
        'valor_minimo' => 'valorMinimo',
        'valor_maximo' => 'valorMaximo',
        'valor_tac' => 'valorTAC',
        'flag_tira_tac' => 'flagTiraTac',
        'id_produto' => 'idProduto',
        'id_estabelecimento' => 'idEstabelecimento',
        'tarifa' => 'tarifa',
        'remuneracao_emissor' => 'remuneracaoEmissor',
        'plano_maximo' => 'planoMaximo',
        'plano_minimo' => 'planoMinimo'
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
        'tipo_operacao' => 'setTipoOperacao',
        'nome' => 'setNome',
        'descricao' => 'setDescricao',
        'excedente_permitido' => 'setExcedentePermitido',
        'tipo_excedente_permitido' => 'setTipoExcedentePermitido',
        'valor_minimo' => 'setValorMinimo',
        'valor_maximo' => 'setValorMaximo',
        'valor_tac' => 'setValorTac',
        'flag_tira_tac' => 'setFlagTiraTac',
        'id_produto' => 'setIdProduto',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'tarifa' => 'setTarifa',
        'remuneracao_emissor' => 'setRemuneracaoEmissor',
        'plano_maximo' => 'setPlanoMaximo',
        'plano_minimo' => 'setPlanoMinimo'
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
        'tipo_operacao' => 'getTipoOperacao',
        'nome' => 'getNome',
        'descricao' => 'getDescricao',
        'excedente_permitido' => 'getExcedentePermitido',
        'tipo_excedente_permitido' => 'getTipoExcedentePermitido',
        'valor_minimo' => 'getValorMinimo',
        'valor_maximo' => 'getValorMaximo',
        'valor_tac' => 'getValorTac',
        'flag_tira_tac' => 'getFlagTiraTac',
        'id_produto' => 'getIdProduto',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'tarifa' => 'getTarifa',
        'remuneracao_emissor' => 'getRemuneracaoEmissor',
        'plano_maximo' => 'getPlanoMaximo',
        'plano_minimo' => 'getPlanoMinimo'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id {{{tipo_operacao_response_id_value}}}
      * @var int
      */
    protected $id;
    
    /**
      * $tipo_operacao {{{tipo_operacao_response_tipo_operacao_value}}}
      * @var string
      */
    protected $tipo_operacao;
    
    /**
      * $nome {{{tipo_operacao_response_nome_value}}}
      * @var string
      */
    protected $nome;
    
    /**
      * $descricao {{{tipo_operacao_response_descricao_value}}}
      * @var string
      */
    protected $descricao;
    
    /**
      * $excedente_permitido {{{tipo_operacao_response_excedente_permitido_value}}}
      * @var Number
      */
    protected $excedente_permitido;
    
    /**
      * $tipo_excedente_permitido {{{tipo_operacao_response_tipo_excedente_permitido_value}}}
      * @var string
      */
    protected $tipo_excedente_permitido;
    
    /**
      * $valor_minimo {{{tipo_operacao_response_valor_minimo_value}}}
      * @var Number
      */
    protected $valor_minimo;
    
    /**
      * $valor_maximo {{{tipo_operacao_response_valor_maximo_value}}}
      * @var Number
      */
    protected $valor_maximo;
    
    /**
      * $valor_tac {{{tipo_operacao_response_valor_t_a_c_value}}}
      * @var Number
      */
    protected $valor_tac;
    
    /**
      * $flag_tira_tac {{{tipo_operacao_response_flag_tira_tac_value}}}
      * @var int
      */
    protected $flag_tira_tac;
    
    /**
      * $id_produto {{{tipo_operacao_response_id_produto_value}}}
      * @var int
      */
    protected $id_produto;
    
    /**
      * $id_estabelecimento {{{tipo_operacao_response_id_estabelecimento_value}}}
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $tarifa {{{tipo_operacao_response_tarifa_value}}}
      * @var Number
      */
    protected $tarifa;
    
    /**
      * $remuneracao_emissor {{{tipo_operacao_response_remuneracao_emissor_value}}}
      * @var Number
      */
    protected $remuneracao_emissor;
    
    /**
      * $plano_maximo {{{tipo_operacao_response_plano_maximo_value}}}
      * @var int
      */
    protected $plano_maximo;
    
    /**
      * $plano_minimo {{{tipo_operacao_response_plano_minimo_value}}}
      * @var int
      */
    protected $plano_minimo;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->tipo_operacao = $data["tipo_operacao"];
            $this->nome = $data["nome"];
            $this->descricao = $data["descricao"];
            $this->excedente_permitido = $data["excedente_permitido"];
            $this->tipo_excedente_permitido = $data["tipo_excedente_permitido"];
            $this->valor_minimo = $data["valor_minimo"];
            $this->valor_maximo = $data["valor_maximo"];
            $this->valor_tac = $data["valor_tac"];
            $this->flag_tira_tac = $data["flag_tira_tac"];
            $this->id_produto = $data["id_produto"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->tarifa = $data["tarifa"];
            $this->remuneracao_emissor = $data["remuneracao_emissor"];
            $this->plano_maximo = $data["plano_maximo"];
            $this->plano_minimo = $data["plano_minimo"];
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
     * @param int $id {{{tipo_operacao_response_id_value}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets tipo_operacao
     * @return string
     */
    public function getTipoOperacao()
    {
        return $this->tipo_operacao;
    }
  
    /**
     * Sets tipo_operacao
     * @param string $tipo_operacao {{{tipo_operacao_response_tipo_operacao_value}}}
     * @return $this
     */
    public function setTipoOperacao($tipo_operacao)
    {
        
        $this->tipo_operacao = $tipo_operacao;
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
     * @param string $nome {{{tipo_operacao_response_nome_value}}}
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
     * @param string $descricao {{{tipo_operacao_response_descricao_value}}}
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
        return $this;
    }
    
    /**
     * Gets excedente_permitido
     * @return Number
     */
    public function getExcedentePermitido()
    {
        return $this->excedente_permitido;
    }
  
    /**
     * Sets excedente_permitido
     * @param Number $excedente_permitido {{{tipo_operacao_response_excedente_permitido_value}}}
     * @return $this
     */
    public function setExcedentePermitido($excedente_permitido)
    {
        
        $this->excedente_permitido = $excedente_permitido;
        return $this;
    }
    
    /**
     * Gets tipo_excedente_permitido
     * @return string
     */
    public function getTipoExcedentePermitido()
    {
        return $this->tipo_excedente_permitido;
    }
  
    /**
     * Sets tipo_excedente_permitido
     * @param string $tipo_excedente_permitido {{{tipo_operacao_response_tipo_excedente_permitido_value}}}
     * @return $this
     */
    public function setTipoExcedentePermitido($tipo_excedente_permitido)
    {
        
        $this->tipo_excedente_permitido = $tipo_excedente_permitido;
        return $this;
    }
    
    /**
     * Gets valor_minimo
     * @return Number
     */
    public function getValorMinimo()
    {
        return $this->valor_minimo;
    }
  
    /**
     * Sets valor_minimo
     * @param Number $valor_minimo {{{tipo_operacao_response_valor_minimo_value}}}
     * @return $this
     */
    public function setValorMinimo($valor_minimo)
    {
        
        $this->valor_minimo = $valor_minimo;
        return $this;
    }
    
    /**
     * Gets valor_maximo
     * @return Number
     */
    public function getValorMaximo()
    {
        return $this->valor_maximo;
    }
  
    /**
     * Sets valor_maximo
     * @param Number $valor_maximo {{{tipo_operacao_response_valor_maximo_value}}}
     * @return $this
     */
    public function setValorMaximo($valor_maximo)
    {
        
        $this->valor_maximo = $valor_maximo;
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
     * @param Number $valor_tac {{{tipo_operacao_response_valor_t_a_c_value}}}
     * @return $this
     */
    public function setValorTac($valor_tac)
    {
        
        $this->valor_tac = $valor_tac;
        return $this;
    }
    
    /**
     * Gets flag_tira_tac
     * @return int
     */
    public function getFlagTiraTac()
    {
        return $this->flag_tira_tac;
    }
  
    /**
     * Sets flag_tira_tac
     * @param int $flag_tira_tac {{{tipo_operacao_response_flag_tira_tac_value}}}
     * @return $this
     */
    public function setFlagTiraTac($flag_tira_tac)
    {
        
        $this->flag_tira_tac = $flag_tira_tac;
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
     * @param int $id_produto {{{tipo_operacao_response_id_produto_value}}}
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
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
     * @param int $id_estabelecimento {{{tipo_operacao_response_id_estabelecimento_value}}}
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
        return $this;
    }
    
    /**
     * Gets tarifa
     * @return Number
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }
  
    /**
     * Sets tarifa
     * @param Number $tarifa {{{tipo_operacao_response_tarifa_value}}}
     * @return $this
     */
    public function setTarifa($tarifa)
    {
        
        $this->tarifa = $tarifa;
        return $this;
    }
    
    /**
     * Gets remuneracao_emissor
     * @return Number
     */
    public function getRemuneracaoEmissor()
    {
        return $this->remuneracao_emissor;
    }
  
    /**
     * Sets remuneracao_emissor
     * @param Number $remuneracao_emissor {{{tipo_operacao_response_remuneracao_emissor_value}}}
     * @return $this
     */
    public function setRemuneracaoEmissor($remuneracao_emissor)
    {
        
        $this->remuneracao_emissor = $remuneracao_emissor;
        return $this;
    }
    
    /**
     * Gets plano_maximo
     * @return int
     */
    public function getPlanoMaximo()
    {
        return $this->plano_maximo;
    }
  
    /**
     * Sets plano_maximo
     * @param int $plano_maximo {{{tipo_operacao_response_plano_maximo_value}}}
     * @return $this
     */
    public function setPlanoMaximo($plano_maximo)
    {
        
        $this->plano_maximo = $plano_maximo;
        return $this;
    }
    
    /**
     * Gets plano_minimo
     * @return int
     */
    public function getPlanoMinimo()
    {
        return $this->plano_minimo;
    }
  
    /**
     * Sets plano_minimo
     * @param int $plano_minimo {{{tipo_operacao_response_plano_minimo_value}}}
     * @return $this
     */
    public function setPlanoMinimo($plano_minimo)
    {
        
        $this->plano_minimo = $plano_minimo;
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
