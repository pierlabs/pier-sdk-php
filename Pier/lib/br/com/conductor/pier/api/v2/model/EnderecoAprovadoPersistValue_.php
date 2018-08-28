<?php
/**
 * EnderecoAprovadoPersistValue_
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
 * EnderecoAprovadoPersistValue_ Class Doc Comment
 *
 * @category    Class
 * @description {{{endereco_aprovado_persist_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnderecoAprovadoPersistValue_ implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_tipo_endereco' => 'int',
        'cep' => 'string',
        'logradouro' => 'string',
        'numero' => 'int',
        'complemento' => 'string',
        'ponto_referencia' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'pais' => 'string',
        'endereco_correspondencia' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_tipo_endereco' => 'idTipoEndereco',
        'cep' => 'cep',
        'logradouro' => 'logradouro',
        'numero' => 'numero',
        'complemento' => 'complemento',
        'ponto_referencia' => 'pontoReferencia',
        'bairro' => 'bairro',
        'cidade' => 'cidade',
        'uf' => 'uf',
        'pais' => 'pais',
        'endereco_correspondencia' => 'enderecoCorrespondencia'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_tipo_endereco' => 'setIdTipoEndereco',
        'cep' => 'setCep',
        'logradouro' => 'setLogradouro',
        'numero' => 'setNumero',
        'complemento' => 'setComplemento',
        'ponto_referencia' => 'setPontoReferencia',
        'bairro' => 'setBairro',
        'cidade' => 'setCidade',
        'uf' => 'setUf',
        'pais' => 'setPais',
        'endereco_correspondencia' => 'setEnderecoCorrespondencia'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_tipo_endereco' => 'getIdTipoEndereco',
        'cep' => 'getCep',
        'logradouro' => 'getLogradouro',
        'numero' => 'getNumero',
        'complemento' => 'getComplemento',
        'ponto_referencia' => 'getPontoReferencia',
        'bairro' => 'getBairro',
        'cidade' => 'getCidade',
        'uf' => 'getUf',
        'pais' => 'getPais',
        'endereco_correspondencia' => 'getEnderecoCorrespondencia'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_tipo_endereco {{{endereco_aprovado_persist_id_tipo_endereco_value}}}
      * @var int
      */
    protected $id_tipo_endereco;
    
    /**
      * $cep {{{endereco_aprovado_persist_cep_value}}}
      * @var string
      */
    protected $cep;
    
    /**
      * $logradouro {{{endereco_aprovado_persist_logradouro_value}}}
      * @var string
      */
    protected $logradouro;
    
    /**
      * $numero {{{endereco_aprovado_persist_numero_value}}}
      * @var int
      */
    protected $numero;
    
    /**
      * $complemento {{{endereco_aprovado_persist_complemento_value}}}
      * @var string
      */
    protected $complemento;
    
    /**
      * $ponto_referencia {{{endereco_aprovado_persist_ponto_referencia_value}}}
      * @var string
      */
    protected $ponto_referencia;
    
    /**
      * $bairro {{{endereco_aprovado_persist_bairro_value}}}
      * @var string
      */
    protected $bairro;
    
    /**
      * $cidade {{{endereco_aprovado_persist_cidade_value}}}
      * @var string
      */
    protected $cidade;
    
    /**
      * $uf {{{endereco_aprovado_persist_uf_value}}}
      * @var string
      */
    protected $uf;
    
    /**
      * $pais {{{endereco_aprovado_persist_pais_value}}}
      * @var string
      */
    protected $pais;
    
    /**
      * $endereco_correspondencia {{{endereco_aprovado_persist_endereco_correspondencia_value}}}
      * @var bool
      */
    protected $endereco_correspondencia;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_tipo_endereco = $data["id_tipo_endereco"];
            $this->cep = $data["cep"];
            $this->logradouro = $data["logradouro"];
            $this->numero = $data["numero"];
            $this->complemento = $data["complemento"];
            $this->ponto_referencia = $data["ponto_referencia"];
            $this->bairro = $data["bairro"];
            $this->cidade = $data["cidade"];
            $this->uf = $data["uf"];
            $this->pais = $data["pais"];
            $this->endereco_correspondencia = $data["endereco_correspondencia"];
        }
    }
    
    /**
     * Gets id_tipo_endereco
     * @return int
     */
    public function getIdTipoEndereco()
    {
        return $this->id_tipo_endereco;
    }
  
    /**
     * Sets id_tipo_endereco
     * @param int $id_tipo_endereco {{{endereco_aprovado_persist_id_tipo_endereco_value}}}
     * @return $this
     */
    public function setIdTipoEndereco($id_tipo_endereco)
    {
        
        $this->id_tipo_endereco = $id_tipo_endereco;
        return $this;
    }
    
    /**
     * Gets cep
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }
  
    /**
     * Sets cep
     * @param string $cep {{{endereco_aprovado_persist_cep_value}}}
     * @return $this
     */
    public function setCep($cep)
    {
        
        $this->cep = $cep;
        return $this;
    }
    
    /**
     * Gets logradouro
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }
  
    /**
     * Sets logradouro
     * @param string $logradouro {{{endereco_aprovado_persist_logradouro_value}}}
     * @return $this
     */
    public function setLogradouro($logradouro)
    {
        
        $this->logradouro = $logradouro;
        return $this;
    }
    
    /**
     * Gets numero
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }
  
    /**
     * Sets numero
     * @param int $numero {{{endereco_aprovado_persist_numero_value}}}
     * @return $this
     */
    public function setNumero($numero)
    {
        
        $this->numero = $numero;
        return $this;
    }
    
    /**
     * Gets complemento
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }
  
    /**
     * Sets complemento
     * @param string $complemento {{{endereco_aprovado_persist_complemento_value}}}
     * @return $this
     */
    public function setComplemento($complemento)
    {
        
        $this->complemento = $complemento;
        return $this;
    }
    
    /**
     * Gets ponto_referencia
     * @return string
     */
    public function getPontoReferencia()
    {
        return $this->ponto_referencia;
    }
  
    /**
     * Sets ponto_referencia
     * @param string $ponto_referencia {{{endereco_aprovado_persist_ponto_referencia_value}}}
     * @return $this
     */
    public function setPontoReferencia($ponto_referencia)
    {
        
        $this->ponto_referencia = $ponto_referencia;
        return $this;
    }
    
    /**
     * Gets bairro
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }
  
    /**
     * Sets bairro
     * @param string $bairro {{{endereco_aprovado_persist_bairro_value}}}
     * @return $this
     */
    public function setBairro($bairro)
    {
        
        $this->bairro = $bairro;
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
     * @param string $cidade {{{endereco_aprovado_persist_cidade_value}}}
     * @return $this
     */
    public function setCidade($cidade)
    {
        
        $this->cidade = $cidade;
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
     * @param string $uf {{{endereco_aprovado_persist_uf_value}}}
     * @return $this
     */
    public function setUf($uf)
    {
        
        $this->uf = $uf;
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
     * @param string $pais {{{endereco_aprovado_persist_pais_value}}}
     * @return $this
     */
    public function setPais($pais)
    {
        
        $this->pais = $pais;
        return $this;
    }
    
    /**
     * Gets endereco_correspondencia
     * @return bool
     */
    public function getEnderecoCorrespondencia()
    {
        return $this->endereco_correspondencia;
    }
  
    /**
     * Sets endereco_correspondencia
     * @param bool $endereco_correspondencia {{{endereco_aprovado_persist_endereco_correspondencia_value}}}
     * @return $this
     */
    public function setEnderecoCorrespondencia($endereco_correspondencia)
    {
        
        $this->endereco_correspondencia = $endereco_correspondencia;
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