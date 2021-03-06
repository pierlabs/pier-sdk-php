<?php
/**
 * PushAPNSPersistValue_
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
 * PushAPNSPersistValue_ Class Doc Comment
 *
 * @category    Class
 * @description {{{push_a_p_n_s_persist_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PushAPNSPersistValue_ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_pessoa' => 'int',
        'id_conta' => 'int',
        'token_dispositivo' => 'string',
        'certificado' => 'string',
        'senha' => 'string',
        'titulo' => 'string',
        'conteudo' => 'string',
        'tipo_evento' => 'string',
        'icone' => 'string',
        'som' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_pessoa' => 'idPessoa',
        'id_conta' => 'idConta',
        'token_dispositivo' => 'tokenDispositivo',
        'certificado' => 'certificado',
        'senha' => 'senha',
        'titulo' => 'titulo',
        'conteudo' => 'conteudo',
        'tipo_evento' => 'tipoEvento',
        'icone' => 'icone',
        'som' => 'som'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_pessoa' => 'setIdPessoa',
        'id_conta' => 'setIdConta',
        'token_dispositivo' => 'setTokenDispositivo',
        'certificado' => 'setCertificado',
        'senha' => 'setSenha',
        'titulo' => 'setTitulo',
        'conteudo' => 'setConteudo',
        'tipo_evento' => 'setTipoEvento',
        'icone' => 'setIcone',
        'som' => 'setSom'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_pessoa' => 'getIdPessoa',
        'id_conta' => 'getIdConta',
        'token_dispositivo' => 'getTokenDispositivo',
        'certificado' => 'getCertificado',
        'senha' => 'getSenha',
        'titulo' => 'getTitulo',
        'conteudo' => 'getConteudo',
        'tipo_evento' => 'getTipoEvento',
        'icone' => 'getIcone',
        'som' => 'getSom'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_pessoa {{{push_a_p_n_s_persist_id_pessoa_value}}}
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_conta {{{push_a_p_n_s_persist_id_conta_value}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $token_dispositivo {{{push_a_p_n_s_persist_token_dispositivo_value}}}
      * @var string
      */
    protected $token_dispositivo;
    
    /**
      * $certificado {{{push_a_p_n_s_persist_certificado_value}}}
      * @var string
      */
    protected $certificado;
    
    /**
      * $senha {{{push_a_p_n_s_persist_senha_value}}}
      * @var string
      */
    protected $senha;
    
    /**
      * $titulo {{{push_a_p_n_s_persist_titulo_value}}}
      * @var string
      */
    protected $titulo;
    
    /**
      * $conteudo {{{push_a_p_n_s_persist_conteudo_value}}}
      * @var string
      */
    protected $conteudo;
    
    /**
      * $tipo_evento {{{push_f_c_m_g_c_m_persist_tipo_evento_value}}}
      * @var string
      */
    protected $tipo_evento;
    
    /**
      * $icone {{{push_f_c_m_g_c_m_persist_icone_value}}}
      * @var string
      */
    protected $icone;
    
    /**
      * $som {{{push_f_c_m_g_c_m_persist_som_value}}}
      * @var string
      */
    protected $som;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_conta = $data["id_conta"];
            $this->token_dispositivo = $data["token_dispositivo"];
            $this->certificado = $data["certificado"];
            $this->senha = $data["senha"];
            $this->titulo = $data["titulo"];
            $this->conteudo = $data["conteudo"];
            $this->tipo_evento = $data["tipo_evento"];
            $this->icone = $data["icone"];
            $this->som = $data["som"];
        }
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
     * @param int $id_pessoa {{{push_a_p_n_s_persist_id_pessoa_value}}}
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
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
     * @param int $id_conta {{{push_a_p_n_s_persist_id_conta_value}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets token_dispositivo
     * @return string
     */
    public function getTokenDispositivo()
    {
        return $this->token_dispositivo;
    }
  
    /**
     * Sets token_dispositivo
     * @param string $token_dispositivo {{{push_a_p_n_s_persist_token_dispositivo_value}}}
     * @return $this
     */
    public function setTokenDispositivo($token_dispositivo)
    {
        
        $this->token_dispositivo = $token_dispositivo;
        return $this;
    }
    
    /**
     * Gets certificado
     * @return string
     */
    public function getCertificado()
    {
        return $this->certificado;
    }
  
    /**
     * Sets certificado
     * @param string $certificado {{{push_a_p_n_s_persist_certificado_value}}}
     * @return $this
     */
    public function setCertificado($certificado)
    {
        
        $this->certificado = $certificado;
        return $this;
    }
    
    /**
     * Gets senha
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }
  
    /**
     * Sets senha
     * @param string $senha {{{push_a_p_n_s_persist_senha_value}}}
     * @return $this
     */
    public function setSenha($senha)
    {
        
        $this->senha = $senha;
        return $this;
    }
    
    /**
     * Gets titulo
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }
  
    /**
     * Sets titulo
     * @param string $titulo {{{push_a_p_n_s_persist_titulo_value}}}
     * @return $this
     */
    public function setTitulo($titulo)
    {
        
        $this->titulo = $titulo;
        return $this;
    }
    
    /**
     * Gets conteudo
     * @return string
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }
  
    /**
     * Sets conteudo
     * @param string $conteudo {{{push_a_p_n_s_persist_conteudo_value}}}
     * @return $this
     */
    public function setConteudo($conteudo)
    {
        
        $this->conteudo = $conteudo;
        return $this;
    }
    
    /**
     * Gets tipo_evento
     * @return string
     */
    public function getTipoEvento()
    {
        return $this->tipo_evento;
    }
  
    /**
     * Sets tipo_evento
     * @param string $tipo_evento {{{push_f_c_m_g_c_m_persist_tipo_evento_value}}}
     * @return $this
     */
    public function setTipoEvento($tipo_evento)
    {
        $allowed_values = array("RISCO_FRAUDE", "CODIGO_SEGURANCA", "OUTROS", "OTP_3D_SECURE");
        if (!in_array($tipo_evento, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'tipo_evento', must be one of 'RISCO_FRAUDE', 'CODIGO_SEGURANCA', 'OUTROS', 'OTP_3D_SECURE'");
        }
        $this->tipo_evento = $tipo_evento;
        return $this;
    }
    
    /**
     * Gets icone
     * @return string
     */
    public function getIcone()
    {
        return $this->icone;
    }
  
    /**
     * Sets icone
     * @param string $icone {{{push_f_c_m_g_c_m_persist_icone_value}}}
     * @return $this
     */
    public function setIcone($icone)
    {
        
        $this->icone = $icone;
        return $this;
    }
    
    /**
     * Gets som
     * @return string
     */
    public function getSom()
    {
        return $this->som;
    }
  
    /**
     * Sets som
     * @param string $som {{{push_f_c_m_g_c_m_persist_som_value}}}
     * @return $this
     */
    public function setSom($som)
    {
        
        $this->som = $som;
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
