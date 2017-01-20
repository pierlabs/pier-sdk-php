<?php
/**
 * LoteCartoesPrePagos
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
 * LoteCartoesPrePagos Class Doc Comment
 *
 * @category    Class
 * @description Lote Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pagos
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoteCartoesPrePagos implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_origem_comercial' => 'int',
        'id_produto' => 'int',
        'id_tipo_cartao' => 'int',
        'id_imagem' => 'int',
        'id_endereco' => 'int',
        'quantidade_cartoes' => 'int',
        'data_cadastro' => '\DateTime',
        'usuario_cadastro' => 'string',
        'status_processamento' => 'int'
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
        'id_origem_comercial' => 'idOrigemComercial',
        'id_produto' => 'idProduto',
        'id_tipo_cartao' => 'idTipoCartao',
        'id_imagem' => 'idImagem',
        'id_endereco' => 'idEndereco',
        'quantidade_cartoes' => 'quantidadeCartoes',
        'data_cadastro' => 'dataCadastro',
        'usuario_cadastro' => 'usuarioCadastro',
        'status_processamento' => 'statusProcessamento'
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
        'id_origem_comercial' => 'setIdOrigemComercial',
        'id_produto' => 'setIdProduto',
        'id_tipo_cartao' => 'setIdTipoCartao',
        'id_imagem' => 'setIdImagem',
        'id_endereco' => 'setIdEndereco',
        'quantidade_cartoes' => 'setQuantidadeCartoes',
        'data_cadastro' => 'setDataCadastro',
        'usuario_cadastro' => 'setUsuarioCadastro',
        'status_processamento' => 'setStatusProcessamento'
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
        'id_origem_comercial' => 'getIdOrigemComercial',
        'id_produto' => 'getIdProduto',
        'id_tipo_cartao' => 'getIdTipoCartao',
        'id_imagem' => 'getIdImagem',
        'id_endereco' => 'getIdEndereco',
        'quantidade_cartoes' => 'getQuantidadeCartoes',
        'data_cadastro' => 'getDataCadastro',
        'usuario_cadastro' => 'getUsuarioCadastro',
        'status_processamento' => 'getStatusProcessamento'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do lote de cart\u00C3\u00B5es pr\u00C3\u00A9-pagos (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_origem_comercial C\u00C3\u00B3digo identificador da origem comercial.
      * @var int
      */
    protected $id_origem_comercial;
    
    /**
      * $id_produto C\u00C3\u00B3digo identificador do Produto.
      * @var int
      */
    protected $id_produto;
    
    /**
      * $id_tipo_cartao C\u00C3\u00B3digo identificador do tipo do cart\u00C3\u00A3o.
      * @var int
      */
    protected $id_tipo_cartao;
    
    /**
      * $id_imagem C\u00C3\u00B3digo identificador da Imagem do cart\u00C3\u00A3o.
      * @var int
      */
    protected $id_imagem;
    
    /**
      * $id_endereco C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o.
      * @var int
      */
    protected $id_endereco;
    
    /**
      * $quantidade_cartoes N\u00C3\u00BAmero de cart\u00C3\u00B5es existentes no Lote.
      * @var int
      */
    protected $quantidade_cartoes;
    
    /**
      * $data_cadastro Data de cadastro do lote de cart\u00C3\u00B5es pr\u00C3\u00A9-pagos.
      * @var \DateTime
      */
    protected $data_cadastro;
    
    /**
      * $usuario_cadastro Nome do usu\u00C3\u00A1rio que criou o lote.
      * @var string
      */
    protected $usuario_cadastro;
    
    /**
      * $status_processamento Indica o status de processamento do lote.
      * @var int
      */
    protected $status_processamento;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_origem_comercial = $data["id_origem_comercial"];
            $this->id_produto = $data["id_produto"];
            $this->id_tipo_cartao = $data["id_tipo_cartao"];
            $this->id_imagem = $data["id_imagem"];
            $this->id_endereco = $data["id_endereco"];
            $this->quantidade_cartoes = $data["quantidade_cartoes"];
            $this->data_cadastro = $data["data_cadastro"];
            $this->usuario_cadastro = $data["usuario_cadastro"];
            $this->status_processamento = $data["status_processamento"];
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
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do lote de cart\u00C3\u00B5es pr\u00C3\u00A9-pagos (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param int $id_origem_comercial C\u00C3\u00B3digo identificador da origem comercial.
     * @return $this
     */
    public function setIdOrigemComercial($id_origem_comercial)
    {
        
        $this->id_origem_comercial = $id_origem_comercial;
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
     * @param int $id_produto C\u00C3\u00B3digo identificador do Produto.
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets id_tipo_cartao
     * @return int
     */
    public function getIdTipoCartao()
    {
        return $this->id_tipo_cartao;
    }
  
    /**
     * Sets id_tipo_cartao
     * @param int $id_tipo_cartao C\u00C3\u00B3digo identificador do tipo do cart\u00C3\u00A3o.
     * @return $this
     */
    public function setIdTipoCartao($id_tipo_cartao)
    {
        
        $this->id_tipo_cartao = $id_tipo_cartao;
        return $this;
    }
    
    /**
     * Gets id_imagem
     * @return int
     */
    public function getIdImagem()
    {
        return $this->id_imagem;
    }
  
    /**
     * Sets id_imagem
     * @param int $id_imagem C\u00C3\u00B3digo identificador da Imagem do cart\u00C3\u00A3o.
     * @return $this
     */
    public function setIdImagem($id_imagem)
    {
        
        $this->id_imagem = $id_imagem;
        return $this;
    }
    
    /**
     * Gets id_endereco
     * @return int
     */
    public function getIdEndereco()
    {
        return $this->id_endereco;
    }
  
    /**
     * Sets id_endereco
     * @param int $id_endereco C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o.
     * @return $this
     */
    public function setIdEndereco($id_endereco)
    {
        
        $this->id_endereco = $id_endereco;
        return $this;
    }
    
    /**
     * Gets quantidade_cartoes
     * @return int
     */
    public function getQuantidadeCartoes()
    {
        return $this->quantidade_cartoes;
    }
  
    /**
     * Sets quantidade_cartoes
     * @param int $quantidade_cartoes N\u00C3\u00BAmero de cart\u00C3\u00B5es existentes no Lote.
     * @return $this
     */
    public function setQuantidadeCartoes($quantidade_cartoes)
    {
        
        $this->quantidade_cartoes = $quantidade_cartoes;
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
     * @param \DateTime $data_cadastro Data de cadastro do lote de cart\u00C3\u00B5es pr\u00C3\u00A9-pagos.
     * @return $this
     */
    public function setDataCadastro($data_cadastro)
    {
        
        $this->data_cadastro = $data_cadastro;
        return $this;
    }
    
    /**
     * Gets usuario_cadastro
     * @return string
     */
    public function getUsuarioCadastro()
    {
        return $this->usuario_cadastro;
    }
  
    /**
     * Sets usuario_cadastro
     * @param string $usuario_cadastro Nome do usu\u00C3\u00A1rio que criou o lote.
     * @return $this
     */
    public function setUsuarioCadastro($usuario_cadastro)
    {
        
        $this->usuario_cadastro = $usuario_cadastro;
        return $this;
    }
    
    /**
     * Gets status_processamento
     * @return int
     */
    public function getStatusProcessamento()
    {
        return $this->status_processamento;
    }
  
    /**
     * Sets status_processamento
     * @param int $status_processamento Indica o status de processamento do lote.
     * @return $this
     */
    public function setStatusProcessamento($status_processamento)
    {
        
        $this->status_processamento = $status_processamento;
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