<?php
/**
 * Conta
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
 * Conta Class Doc Comment
 *
 * @category    Class
 * @description Objeto conta
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Conta implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_produto' => 'int',
        'id_origem_comercial' => 'int',
        'id_pessoa' => 'int',
        'id_status_conta' => 'int',
        'dia_vencimento' => 'int',
        'melhor_dia_compra' => 'int',
        'data_status_conta' => '\DateTime',
        'data_cadastro' => '\DateTime',
        'data_ultima_alteracao_vencimento' => '\DateTime',
        'numero_agencia' => 'int',
        'valor_renda' => 'Number',
        'numero_conta_corrente' => 'string',
        'forma_envio_fatura' => 'string'
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
        'id_produto' => 'idProduto',
        'id_origem_comercial' => 'idOrigemComercial',
        'id_pessoa' => 'idPessoa',
        'id_status_conta' => 'idStatusConta',
        'dia_vencimento' => 'diaVencimento',
        'melhor_dia_compra' => 'melhorDiaCompra',
        'data_status_conta' => 'dataStatusConta',
        'data_cadastro' => 'dataCadastro',
        'data_ultima_alteracao_vencimento' => 'dataUltimaAlteracaoVencimento',
        'numero_agencia' => 'numeroAgencia',
        'valor_renda' => 'valorRenda',
        'numero_conta_corrente' => 'numeroContaCorrente',
        'forma_envio_fatura' => 'formaEnvioFatura'
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
        'id_produto' => 'setIdProduto',
        'id_origem_comercial' => 'setIdOrigemComercial',
        'id_pessoa' => 'setIdPessoa',
        'id_status_conta' => 'setIdStatusConta',
        'dia_vencimento' => 'setDiaVencimento',
        'melhor_dia_compra' => 'setMelhorDiaCompra',
        'data_status_conta' => 'setDataStatusConta',
        'data_cadastro' => 'setDataCadastro',
        'data_ultima_alteracao_vencimento' => 'setDataUltimaAlteracaoVencimento',
        'numero_agencia' => 'setNumeroAgencia',
        'valor_renda' => 'setValorRenda',
        'numero_conta_corrente' => 'setNumeroContaCorrente',
        'forma_envio_fatura' => 'setFormaEnvioFatura'
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
        'id_produto' => 'getIdProduto',
        'id_origem_comercial' => 'getIdOrigemComercial',
        'id_pessoa' => 'getIdPessoa',
        'id_status_conta' => 'getIdStatusConta',
        'dia_vencimento' => 'getDiaVencimento',
        'melhor_dia_compra' => 'getMelhorDiaCompra',
        'data_status_conta' => 'getDataStatusConta',
        'data_cadastro' => 'getDataCadastro',
        'data_ultima_alteracao_vencimento' => 'getDataUltimaAlteracaoVencimento',
        'numero_agencia' => 'getNumeroAgencia',
        'valor_renda' => 'getValorRenda',
        'numero_conta_corrente' => 'getNumeroContaCorrente',
        'forma_envio_fatura' => 'getFormaEnvioFatura'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_produto C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id).
      * @var int
      */
    protected $id_produto;
    
    /**
      * $id_origem_comercial C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta.
      * @var int
      */
    protected $id_origem_comercial;
    
    /**
      * $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id).
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_status_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id).
      * @var int
      */
    protected $id_status_conta;
    
    /**
      * $dia_vencimento Apresenta o dia de vencimento.
      * @var int
      */
    protected $dia_vencimento;
    
    /**
      * $melhor_dia_compra Apresenta o melhor dia de compra.
      * @var int
      */
    protected $melhor_dia_compra;
    
    /**
      * $data_status_conta Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela.
      * @var \DateTime
      */
    protected $data_status_conta;
    
    /**
      * $data_cadastro Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
      * @var \DateTime
      */
    protected $data_cadastro;
    
    /**
      * $data_ultima_alteracao_vencimento Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
      * @var \DateTime
      */
    protected $data_ultima_alteracao_vencimento;
    
    /**
      * $numero_agencia N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
      * @var int
      */
    protected $numero_agencia;
    
    /**
      * $valor_renda Apresenta o valor da renda comprovada
      * @var Number
      */
    protected $valor_renda;
    
    /**
      * $numero_conta_corrente N\u00C3\u00BAmero da conta corrente.
      * @var string
      */
    protected $numero_conta_corrente;
    
    /**
      * $forma_envio_fatura Forma de envio da fatura.
      * @var string
      */
    protected $forma_envio_fatura;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_produto = $data["id_produto"];
            $this->id_origem_comercial = $data["id_origem_comercial"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_status_conta = $data["id_status_conta"];
            $this->dia_vencimento = $data["dia_vencimento"];
            $this->melhor_dia_compra = $data["melhor_dia_compra"];
            $this->data_status_conta = $data["data_status_conta"];
            $this->data_cadastro = $data["data_cadastro"];
            $this->data_ultima_alteracao_vencimento = $data["data_ultima_alteracao_vencimento"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->valor_renda = $data["valor_renda"];
            $this->numero_conta_corrente = $data["numero_conta_corrente"];
            $this->forma_envio_fatura = $data["forma_envio_fatura"];
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
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param int $id_produto C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id).
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets id_origem_comercial
     * @return int
     */
    public function getIdOrigemComercial()
    {
        return $this->id_origem_comercial;
    }
  
    /**
     * Sets id_origem_comercial
     * @param int $id_origem_comercial C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta.
     * @return $this
     */
    public function setIdOrigemComercial($id_origem_comercial)
    {
        
        $this->id_origem_comercial = $id_origem_comercial;
        return $this;
    }
    
    /**
     * Gets id_pessoa
     * @return int
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }
  
    /**
     * Sets id_pessoa
     * @param int $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id).
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
        return $this;
    }
    
    /**
     * Gets id_status_conta
     * @return int
     */
    public function getIdStatusConta()
    {
        return $this->id_status_conta;
    }
  
    /**
     * Sets id_status_conta
     * @param int $id_status_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id).
     * @return $this
     */
    public function setIdStatusConta($id_status_conta)
    {
        
        $this->id_status_conta = $id_status_conta;
        return $this;
    }
    
    /**
     * Gets dia_vencimento
     * @return int
     */
    public function getDiaVencimento()
    {
        return $this->dia_vencimento;
    }
  
    /**
     * Sets dia_vencimento
     * @param int $dia_vencimento Apresenta o dia de vencimento.
     * @return $this
     */
    public function setDiaVencimento($dia_vencimento)
    {
        
        $this->dia_vencimento = $dia_vencimento;
        return $this;
    }
    
    /**
     * Gets melhor_dia_compra
     * @return int
     */
    public function getMelhorDiaCompra()
    {
        return $this->melhor_dia_compra;
    }
  
    /**
     * Sets melhor_dia_compra
     * @param int $melhor_dia_compra Apresenta o melhor dia de compra.
     * @return $this
     */
    public function setMelhorDiaCompra($melhor_dia_compra)
    {
        
        $this->melhor_dia_compra = $melhor_dia_compra;
        return $this;
    }
    
    /**
     * Gets data_status_conta
     * @return \DateTime
     */
    public function getDataStatusConta()
    {
        return $this->data_status_conta;
    }
  
    /**
     * Sets data_status_conta
     * @param \DateTime $data_status_conta Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela.
     * @return $this
     */
    public function setDataStatusConta($data_status_conta)
    {
        
        $this->data_status_conta = $data_status_conta;
        return $this;
    }
    
    /**
     * Gets data_cadastro
     * @return \DateTime
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
  
    /**
     * Sets data_cadastro
     * @param \DateTime $data_cadastro Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
     * @return $this
     */
    public function setDataCadastro($data_cadastro)
    {
        
        $this->data_cadastro = $data_cadastro;
        return $this;
    }
    
    /**
     * Gets data_ultima_alteracao_vencimento
     * @return \DateTime
     */
    public function getDataUltimaAlteracaoVencimento()
    {
        return $this->data_ultima_alteracao_vencimento;
    }
  
    /**
     * Sets data_ultima_alteracao_vencimento
     * @param \DateTime $data_ultima_alteracao_vencimento Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
     * @return $this
     */
    public function setDataUltimaAlteracaoVencimento($data_ultima_alteracao_vencimento)
    {
        
        $this->data_ultima_alteracao_vencimento = $data_ultima_alteracao_vencimento;
        return $this;
    }
    
    /**
     * Gets numero_agencia
     * @return int
     */
    public function getNumeroAgencia()
    {
        return $this->numero_agencia;
    }
  
    /**
     * Sets numero_agencia
     * @param int $numero_agencia N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
     * @return $this
     */
    public function setNumeroAgencia($numero_agencia)
    {
        
        $this->numero_agencia = $numero_agencia;
        return $this;
    }
    
    /**
     * Gets valor_renda
     * @return Number
     */
    public function getValorRenda()
    {
        return $this->valor_renda;
    }
  
    /**
     * Sets valor_renda
     * @param Number $valor_renda Apresenta o valor da renda comprovada
     * @return $this
     */
    public function setValorRenda($valor_renda)
    {
        
        $this->valor_renda = $valor_renda;
        return $this;
    }
    
    /**
     * Gets numero_conta_corrente
     * @return string
     */
    public function getNumeroContaCorrente()
    {
        return $this->numero_conta_corrente;
    }
  
    /**
     * Sets numero_conta_corrente
     * @param string $numero_conta_corrente N\u00C3\u00BAmero da conta corrente.
     * @return $this
     */
    public function setNumeroContaCorrente($numero_conta_corrente)
    {
        
        $this->numero_conta_corrente = $numero_conta_corrente;
        return $this;
    }
    
    /**
     * Gets forma_envio_fatura
     * @return string
     */
    public function getFormaEnvioFatura()
    {
        return $this->forma_envio_fatura;
    }
  
    /**
     * Sets forma_envio_fatura
     * @param string $forma_envio_fatura Forma de envio da fatura.
     * @return $this
     */
    public function setFormaEnvioFatura($forma_envio_fatura)
    {
        
        $this->forma_envio_fatura = $forma_envio_fatura;
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
