<?php
/**
 * StatusContaResponse
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
 * StatusContaResponse Class Doc Comment
 *
 * @category    Class
 * @description Status Conta
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StatusContaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'permite_alterar_vencimento' => 'int',
        'permite_alterar_limite' => 'int',
        'permite_emitir_nova_via_cartao' => 'int',
        'permite_fazer_transferencia' => 'int',
        'permite_receber_transferencia' => 'int',
        'permite_criar_acordo_cobranca' => 'int',
        'permite_atribuir_como_bloqueio' => 'int',
        'permite_desbloquear' => 'int',
        'permite_atribuir_como_cancelamento' => 'int'
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
        'nome' => 'nome',
        'permite_alterar_vencimento' => 'permiteAlterarVencimento',
        'permite_alterar_limite' => 'permiteAlterarLimite',
        'permite_emitir_nova_via_cartao' => 'permiteEmitirNovaViaCartao',
        'permite_fazer_transferencia' => 'permiteFazerTransferencia',
        'permite_receber_transferencia' => 'permiteReceberTransferencia',
        'permite_criar_acordo_cobranca' => 'permiteCriarAcordoCobranca',
        'permite_atribuir_como_bloqueio' => 'permiteAtribuirComoBloqueio',
        'permite_desbloquear' => 'permiteDesbloquear',
        'permite_atribuir_como_cancelamento' => 'permiteAtribuirComoCancelamento'
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
        'nome' => 'setNome',
        'permite_alterar_vencimento' => 'setPermiteAlterarVencimento',
        'permite_alterar_limite' => 'setPermiteAlterarLimite',
        'permite_emitir_nova_via_cartao' => 'setPermiteEmitirNovaViaCartao',
        'permite_fazer_transferencia' => 'setPermiteFazerTransferencia',
        'permite_receber_transferencia' => 'setPermiteReceberTransferencia',
        'permite_criar_acordo_cobranca' => 'setPermiteCriarAcordoCobranca',
        'permite_atribuir_como_bloqueio' => 'setPermiteAtribuirComoBloqueio',
        'permite_desbloquear' => 'setPermiteDesbloquear',
        'permite_atribuir_como_cancelamento' => 'setPermiteAtribuirComoCancelamento'
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
        'nome' => 'getNome',
        'permite_alterar_vencimento' => 'getPermiteAlterarVencimento',
        'permite_alterar_limite' => 'getPermiteAlterarLimite',
        'permite_emitir_nova_via_cartao' => 'getPermiteEmitirNovaViaCartao',
        'permite_fazer_transferencia' => 'getPermiteFazerTransferencia',
        'permite_receber_transferencia' => 'getPermiteReceberTransferencia',
        'permite_criar_acordo_cobranca' => 'getPermiteCriarAcordoCobranca',
        'permite_atribuir_como_bloqueio' => 'getPermiteAtribuirComoBloqueio',
        'permite_desbloquear' => 'getPermiteDesbloquear',
        'permite_atribuir_como_cancelamento' => 'getPermiteAtribuirComoCancelamento'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id).
      * @var int
      */
    protected $id;
    
    /**
      * $nome Nome atribu\u00C3\u00ADdo ao Status da Conta.
      * @var string
      */
    protected $nome;
    
    /**
      * $permite_alterar_vencimento Par\u00C3\u00A2metro que define se o Status da conta permite a solicita\u00C3\u00A7\u00C3\u00A3o da altera\u00C3\u00A7\u00C3\u00A3o do Dia para Vencimento das Faturas, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_alterar_vencimento;
    
    /**
      * $permite_alterar_limite Par\u00C3\u00A2metro que define se o Status da conta permite altera\u00C3\u00A7\u00C3\u00A3o de Limites, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_alterar_limite;
    
    /**
      * $permite_emitir_nova_via_cartao Par\u00C3\u00A2metro que define se o Status da conta permite solicitar uma nova via de Cart\u00C3\u00A3o, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_emitir_nova_via_cartao;
    
    /**
      * $permite_fazer_transferencia Par\u00C3\u00A2metro que define se o Status da conta permite originar Transfer\u00C3\u00AAncias de Cr\u00C3\u00A9dito para outras Contas do mesmo Emissor ou para uma Conta Banc\u00C3\u00A1ria, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_fazer_transferencia;
    
    /**
      * $permite_receber_transferencia Par\u00C3\u00A2metro que define se o Status da conta permite  receber Transfer\u00C3\u00AAncias de Cr\u00C3\u00A9dito originadas de outras Contas do mesmo emissor, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_receber_transferencia;
    
    /**
      * $permite_criar_acordo_cobranca Par\u00C3\u00A2metro que define se o Status da conta permite ter um Acordo de Cobran\u00C3\u00A7a de D\u00C3\u00ADvida criado para ela, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_criar_acordo_cobranca;
    
    /**
      * $permite_atribuir_como_bloqueio Par\u00C3\u00A2metro que define se o Status da conta permite ser atribu\u00C3\u00ADdo para Bloquear temporariamente uma Conta, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_atribuir_como_bloqueio;
    
    /**
      * $permite_desbloquear Par\u00C3\u00A2metro que define se o Status da conta permite ser desbloqueada, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_desbloquear;
    
    /**
      * $permite_atribuir_como_cancelamento Par\u00C3\u00A2metro que define se o Status da conta permite ser atribu\u00C3\u00ADdo para realizar o cancelamento definitivo de uma conta, sendo: 0: Inativo e 1: Ativo.
      * @var int
      */
    protected $permite_atribuir_como_cancelamento;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->permite_alterar_vencimento = $data["permite_alterar_vencimento"];
            $this->permite_alterar_limite = $data["permite_alterar_limite"];
            $this->permite_emitir_nova_via_cartao = $data["permite_emitir_nova_via_cartao"];
            $this->permite_fazer_transferencia = $data["permite_fazer_transferencia"];
            $this->permite_receber_transferencia = $data["permite_receber_transferencia"];
            $this->permite_criar_acordo_cobranca = $data["permite_criar_acordo_cobranca"];
            $this->permite_atribuir_como_bloqueio = $data["permite_atribuir_como_bloqueio"];
            $this->permite_desbloquear = $data["permite_desbloquear"];
            $this->permite_atribuir_como_cancelamento = $data["permite_atribuir_como_cancelamento"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status da Conta.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets permite_alterar_vencimento
     * @return int
     */
    public function getPermiteAlterarVencimento()
    {
        return $this->permite_alterar_vencimento;
    }
  
    /**
     * Sets permite_alterar_vencimento
     * @param int $permite_alterar_vencimento Par\u00C3\u00A2metro que define se o Status da conta permite a solicita\u00C3\u00A7\u00C3\u00A3o da altera\u00C3\u00A7\u00C3\u00A3o do Dia para Vencimento das Faturas, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteAlterarVencimento($permite_alterar_vencimento)
    {
        
        $this->permite_alterar_vencimento = $permite_alterar_vencimento;
        return $this;
    }
    
    /**
     * Gets permite_alterar_limite
     * @return int
     */
    public function getPermiteAlterarLimite()
    {
        return $this->permite_alterar_limite;
    }
  
    /**
     * Sets permite_alterar_limite
     * @param int $permite_alterar_limite Par\u00C3\u00A2metro que define se o Status da conta permite altera\u00C3\u00A7\u00C3\u00A3o de Limites, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteAlterarLimite($permite_alterar_limite)
    {
        
        $this->permite_alterar_limite = $permite_alterar_limite;
        return $this;
    }
    
    /**
     * Gets permite_emitir_nova_via_cartao
     * @return int
     */
    public function getPermiteEmitirNovaViaCartao()
    {
        return $this->permite_emitir_nova_via_cartao;
    }
  
    /**
     * Sets permite_emitir_nova_via_cartao
     * @param int $permite_emitir_nova_via_cartao Par\u00C3\u00A2metro que define se o Status da conta permite solicitar uma nova via de Cart\u00C3\u00A3o, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteEmitirNovaViaCartao($permite_emitir_nova_via_cartao)
    {
        
        $this->permite_emitir_nova_via_cartao = $permite_emitir_nova_via_cartao;
        return $this;
    }
    
    /**
     * Gets permite_fazer_transferencia
     * @return int
     */
    public function getPermiteFazerTransferencia()
    {
        return $this->permite_fazer_transferencia;
    }
  
    /**
     * Sets permite_fazer_transferencia
     * @param int $permite_fazer_transferencia Par\u00C3\u00A2metro que define se o Status da conta permite originar Transfer\u00C3\u00AAncias de Cr\u00C3\u00A9dito para outras Contas do mesmo Emissor ou para uma Conta Banc\u00C3\u00A1ria, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteFazerTransferencia($permite_fazer_transferencia)
    {
        
        $this->permite_fazer_transferencia = $permite_fazer_transferencia;
        return $this;
    }
    
    /**
     * Gets permite_receber_transferencia
     * @return int
     */
    public function getPermiteReceberTransferencia()
    {
        return $this->permite_receber_transferencia;
    }
  
    /**
     * Sets permite_receber_transferencia
     * @param int $permite_receber_transferencia Par\u00C3\u00A2metro que define se o Status da conta permite  receber Transfer\u00C3\u00AAncias de Cr\u00C3\u00A9dito originadas de outras Contas do mesmo emissor, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteReceberTransferencia($permite_receber_transferencia)
    {
        
        $this->permite_receber_transferencia = $permite_receber_transferencia;
        return $this;
    }
    
    /**
     * Gets permite_criar_acordo_cobranca
     * @return int
     */
    public function getPermiteCriarAcordoCobranca()
    {
        return $this->permite_criar_acordo_cobranca;
    }
  
    /**
     * Sets permite_criar_acordo_cobranca
     * @param int $permite_criar_acordo_cobranca Par\u00C3\u00A2metro que define se o Status da conta permite ter um Acordo de Cobran\u00C3\u00A7a de D\u00C3\u00ADvida criado para ela, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteCriarAcordoCobranca($permite_criar_acordo_cobranca)
    {
        
        $this->permite_criar_acordo_cobranca = $permite_criar_acordo_cobranca;
        return $this;
    }
    
    /**
     * Gets permite_atribuir_como_bloqueio
     * @return int
     */
    public function getPermiteAtribuirComoBloqueio()
    {
        return $this->permite_atribuir_como_bloqueio;
    }
  
    /**
     * Sets permite_atribuir_como_bloqueio
     * @param int $permite_atribuir_como_bloqueio Par\u00C3\u00A2metro que define se o Status da conta permite ser atribu\u00C3\u00ADdo para Bloquear temporariamente uma Conta, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteAtribuirComoBloqueio($permite_atribuir_como_bloqueio)
    {
        
        $this->permite_atribuir_como_bloqueio = $permite_atribuir_como_bloqueio;
        return $this;
    }
    
    /**
     * Gets permite_desbloquear
     * @return int
     */
    public function getPermiteDesbloquear()
    {
        return $this->permite_desbloquear;
    }
  
    /**
     * Sets permite_desbloquear
     * @param int $permite_desbloquear Par\u00C3\u00A2metro que define se o Status da conta permite ser desbloqueada, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteDesbloquear($permite_desbloquear)
    {
        
        $this->permite_desbloquear = $permite_desbloquear;
        return $this;
    }
    
    /**
     * Gets permite_atribuir_como_cancelamento
     * @return int
     */
    public function getPermiteAtribuirComoCancelamento()
    {
        return $this->permite_atribuir_como_cancelamento;
    }
  
    /**
     * Sets permite_atribuir_como_cancelamento
     * @param int $permite_atribuir_como_cancelamento Par\u00C3\u00A2metro que define se o Status da conta permite ser atribu\u00C3\u00ADdo para realizar o cancelamento definitivo de uma conta, sendo: 0: Inativo e 1: Ativo.
     * @return $this
     */
    public function setPermiteAtribuirComoCancelamento($permite_atribuir_como_cancelamento)
    {
        
        $this->permite_atribuir_como_cancelamento = $permite_atribuir_como_cancelamento;
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
