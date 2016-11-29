<?php
/**
 * StatusCartao
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
 * StatusCartao Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o do recurso Status Cart\u00C3\u00A3o
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StatusCartao implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'flag_cancela_cartao' => 'int',
        'flag_cancela_no_desbloqueio' => 'int',
        'flag_cobra_tarifa' => 'int',
        'id' => 'int',
        'id_status_destino_conta' => 'int',
        'id_status_destino_desbloqueio' => 'int',
        'nome' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'flag_cancela_cartao' => 'flagCancelaCartao',
        'flag_cancela_no_desbloqueio' => 'flagCancelaNoDesbloqueio',
        'flag_cobra_tarifa' => 'flagCobraTarifa',
        'id' => 'id',
        'id_status_destino_conta' => 'idStatusDestinoConta',
        'id_status_destino_desbloqueio' => 'idStatusDestinoDesbloqueio',
        'nome' => 'nome'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'flag_cancela_cartao' => 'setFlagCancelaCartao',
        'flag_cancela_no_desbloqueio' => 'setFlagCancelaNoDesbloqueio',
        'flag_cobra_tarifa' => 'setFlagCobraTarifa',
        'id' => 'setId',
        'id_status_destino_conta' => 'setIdStatusDestinoConta',
        'id_status_destino_desbloqueio' => 'setIdStatusDestinoDesbloqueio',
        'nome' => 'setNome'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'flag_cancela_cartao' => 'getFlagCancelaCartao',
        'flag_cancela_no_desbloqueio' => 'getFlagCancelaNoDesbloqueio',
        'flag_cobra_tarifa' => 'getFlagCobraTarifa',
        'id' => 'getId',
        'id_status_destino_conta' => 'getIdStatusDestinoConta',
        'id_status_destino_desbloqueio' => 'getIdStatusDestinoDesbloqueio',
        'nome' => 'getNome'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $flag_cancela_cartao Quando ativa, indica que ao ser atribu\u00C3\u00ADdo um idStatusCartao com essa caracter\u00C3\u00ADstica, o cart\u00C3\u00A3o ter\u00C3\u00A1 o seu idStatusCartao alterado para o que fora escolhido. Caso contr\u00C3\u00A1rio, o idStatusCartao s\u00C3\u00B3 ser\u00C3\u00A1 alterado ap\u00C3\u00B3s o desbloqueio de um novo cart\u00C3\u00A3o do mesmo Portador e Conta.
      * @var int
      */
    protected $flag_cancela_cartao;
    
    /**
      * $flag_cancela_no_desbloqueio Quando ativa, indica que o cart\u00C3\u00A3o ativo que o portador possuir na mesma conta do cart\u00C3\u00A3o a ser desbloqueado, e que o status dele possua essa caracter\u00C3\u00ADstica, dever\u00C3\u00A1 ser cancelado quando um novo cart\u00C3\u00A3o for desbloqueado.
      * @var int
      */
    protected $flag_cancela_no_desbloqueio;
    
    /**
      * $flag_cobra_tarifa Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, incluir\u00C3\u00A3o a cobran\u00C3\u00A7a de uma tarifa para a conta de acordo com os valores definidos nos par\u00C3\u00A2metros do emissor.
      * @var int
      */
    protected $flag_cobra_tarifa;
    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id) 
      * @var int
      */
    protected $id;
    
    /**
      * $id_status_destino_conta Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo a conta, caso ela seja cancelada devido ao bloqueio de um cart\u00C3\u00A3o quando for utilizado um idStatusCartao no processo de Bloqueio que possua essa caracter\u00C3\u00ADstica.
      * @var int
      */
    protected $id_status_destino_conta;
    
    /**
      * $id_status_destino_desbloqueio Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo aos cart\u00C3\u00B5es que forem cancelados devido ao desbloqueio de um novo cart\u00C3\u00A3o.
      * @var int
      */
    protected $id_status_destino_desbloqueio;
    
    /**
      * $nome Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
      * @var string
      */
    protected $nome;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->flag_cancela_cartao = $data["flag_cancela_cartao"];
            $this->flag_cancela_no_desbloqueio = $data["flag_cancela_no_desbloqueio"];
            $this->flag_cobra_tarifa = $data["flag_cobra_tarifa"];
            $this->id = $data["id"];
            $this->id_status_destino_conta = $data["id_status_destino_conta"];
            $this->id_status_destino_desbloqueio = $data["id_status_destino_desbloqueio"];
            $this->nome = $data["nome"];
        }
    }
    
    /**
     * Gets flag_cancela_cartao
     * @return int
     */
    public function getFlagCancelaCartao()
    {
        return $this->flag_cancela_cartao;
    }
  
    /**
     * Sets flag_cancela_cartao
     * @param int $flag_cancela_cartao Quando ativa, indica que ao ser atribu\u00C3\u00ADdo um idStatusCartao com essa caracter\u00C3\u00ADstica, o cart\u00C3\u00A3o ter\u00C3\u00A1 o seu idStatusCartao alterado para o que fora escolhido. Caso contr\u00C3\u00A1rio, o idStatusCartao s\u00C3\u00B3 ser\u00C3\u00A1 alterado ap\u00C3\u00B3s o desbloqueio de um novo cart\u00C3\u00A3o do mesmo Portador e Conta.
     * @return $this
     */
    public function setFlagCancelaCartao($flag_cancela_cartao)
    {
        
        $this->flag_cancela_cartao = $flag_cancela_cartao;
        return $this;
    }
    
    /**
     * Gets flag_cancela_no_desbloqueio
     * @return int
     */
    public function getFlagCancelaNoDesbloqueio()
    {
        return $this->flag_cancela_no_desbloqueio;
    }
  
    /**
     * Sets flag_cancela_no_desbloqueio
     * @param int $flag_cancela_no_desbloqueio Quando ativa, indica que o cart\u00C3\u00A3o ativo que o portador possuir na mesma conta do cart\u00C3\u00A3o a ser desbloqueado, e que o status dele possua essa caracter\u00C3\u00ADstica, dever\u00C3\u00A1 ser cancelado quando um novo cart\u00C3\u00A3o for desbloqueado.
     * @return $this
     */
    public function setFlagCancelaNoDesbloqueio($flag_cancela_no_desbloqueio)
    {
        
        $this->flag_cancela_no_desbloqueio = $flag_cancela_no_desbloqueio;
        return $this;
    }
    
    /**
     * Gets flag_cobra_tarifa
     * @return int
     */
    public function getFlagCobraTarifa()
    {
        return $this->flag_cobra_tarifa;
    }
  
    /**
     * Sets flag_cobra_tarifa
     * @param int $flag_cobra_tarifa Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, incluir\u00C3\u00A3o a cobran\u00C3\u00A7a de uma tarifa para a conta de acordo com os valores definidos nos par\u00C3\u00A2metros do emissor.
     * @return $this
     */
    public function setFlagCobraTarifa($flag_cobra_tarifa)
    {
        
        $this->flag_cobra_tarifa = $flag_cobra_tarifa;
        return $this;
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id) 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_status_destino_conta
     * @return int
     */
    public function getIdStatusDestinoConta()
    {
        return $this->id_status_destino_conta;
    }
  
    /**
     * Sets id_status_destino_conta
     * @param int $id_status_destino_conta Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo a conta, caso ela seja cancelada devido ao bloqueio de um cart\u00C3\u00A3o quando for utilizado um idStatusCartao no processo de Bloqueio que possua essa caracter\u00C3\u00ADstica.
     * @return $this
     */
    public function setIdStatusDestinoConta($id_status_destino_conta)
    {
        
        $this->id_status_destino_conta = $id_status_destino_conta;
        return $this;
    }
    
    /**
     * Gets id_status_destino_desbloqueio
     * @return int
     */
    public function getIdStatusDestinoDesbloqueio()
    {
        return $this->id_status_destino_desbloqueio;
    }
  
    /**
     * Sets id_status_destino_desbloqueio
     * @param int $id_status_destino_desbloqueio Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo aos cart\u00C3\u00B5es que forem cancelados devido ao desbloqueio de um novo cart\u00C3\u00A3o.
     * @return $this
     */
    public function setIdStatusDestinoDesbloqueio($id_status_destino_desbloqueio)
    {
        
        $this->id_status_destino_desbloqueio = $id_status_destino_desbloqueio;
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
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
