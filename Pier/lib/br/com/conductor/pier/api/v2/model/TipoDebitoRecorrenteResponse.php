<?php
/**
 * TipoDebitoRecorrenteResponse
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
 * TipoDebitoRecorrenteResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{tipo_debito_recorrente_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TipoDebitoRecorrenteResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'flag_anuidade_bonificada' => 'bool',
        'id' => 'int',
        'nome' => 'string',
        'valor' => 'Number',
        'flag_ativo' => 'bool',
        'valor_bonus' => 'Number',
        'numero_parcelas' => 'int',
        'flag_adere_automatico' => 'bool',
        'flag_gera_numero_sorte' => 'bool',
        'faixa_etaria' => 'string',
        'flag_seguro' => 'bool',
        'sorteios_mensais' => 'string',
        'flag_adesao_automatica' => 'bool',
        'flag_dependente' => 'bool',
        'quantidade_dependente' => 'int',
        'id_termo_seguro_servico' => 'int',
        'idade_minima' => 'int',
        'idade_maxima' => 'int',
        'flag_debito_incondicional' => 'bool',
        'flag_extrato_incondicional' => 'bool',
        'flag_estorno_automatico' => 'bool',
        'valor_repassado_seguradora' => 'Number',
        'flag_lanca_transacao' => 'bool',
        'flag_transferencia_automatica' => 'bool',
        'id_produto' => 'int',
        'id_grupo_debito_recorrente' => 'int',
        'quantidade_tentativas_cobranca' => 'int',
        'id_ajuste' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'flag_anuidade_bonificada' => 'flagAnuidadeBonificada',
        'id' => 'id',
        'nome' => 'nome',
        'valor' => 'valor',
        'flag_ativo' => 'flagAtivo',
        'valor_bonus' => 'valorBonus',
        'numero_parcelas' => 'numeroParcelas',
        'flag_adere_automatico' => 'flagAdereAutomatico',
        'flag_gera_numero_sorte' => 'flagGeraNumeroSorte',
        'faixa_etaria' => 'faixaEtaria',
        'flag_seguro' => 'flagSeguro',
        'sorteios_mensais' => 'sorteiosMensais',
        'flag_adesao_automatica' => 'flagAdesaoAutomatica',
        'flag_dependente' => 'flagDependente',
        'quantidade_dependente' => 'quantidadeDependente',
        'id_termo_seguro_servico' => 'idTermoSeguroServico',
        'idade_minima' => 'idadeMinima',
        'idade_maxima' => 'idadeMaxima',
        'flag_debito_incondicional' => 'flagDebitoIncondicional',
        'flag_extrato_incondicional' => 'flagExtratoIncondicional',
        'flag_estorno_automatico' => 'flagEstornoAutomatico',
        'valor_repassado_seguradora' => 'valorRepassadoSeguradora',
        'flag_lanca_transacao' => 'flagLancaTransacao',
        'flag_transferencia_automatica' => 'flagTransferenciaAutomatica',
        'id_produto' => 'idProduto',
        'id_grupo_debito_recorrente' => 'idGrupoDebitoRecorrente',
        'quantidade_tentativas_cobranca' => 'quantidadeTentativasCobranca',
        'id_ajuste' => 'idAjuste'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'flag_anuidade_bonificada' => 'setFlagAnuidadeBonificada',
        'id' => 'setId',
        'nome' => 'setNome',
        'valor' => 'setValor',
        'flag_ativo' => 'setFlagAtivo',
        'valor_bonus' => 'setValorBonus',
        'numero_parcelas' => 'setNumeroParcelas',
        'flag_adere_automatico' => 'setFlagAdereAutomatico',
        'flag_gera_numero_sorte' => 'setFlagGeraNumeroSorte',
        'faixa_etaria' => 'setFaixaEtaria',
        'flag_seguro' => 'setFlagSeguro',
        'sorteios_mensais' => 'setSorteiosMensais',
        'flag_adesao_automatica' => 'setFlagAdesaoAutomatica',
        'flag_dependente' => 'setFlagDependente',
        'quantidade_dependente' => 'setQuantidadeDependente',
        'id_termo_seguro_servico' => 'setIdTermoSeguroServico',
        'idade_minima' => 'setIdadeMinima',
        'idade_maxima' => 'setIdadeMaxima',
        'flag_debito_incondicional' => 'setFlagDebitoIncondicional',
        'flag_extrato_incondicional' => 'setFlagExtratoIncondicional',
        'flag_estorno_automatico' => 'setFlagEstornoAutomatico',
        'valor_repassado_seguradora' => 'setValorRepassadoSeguradora',
        'flag_lanca_transacao' => 'setFlagLancaTransacao',
        'flag_transferencia_automatica' => 'setFlagTransferenciaAutomatica',
        'id_produto' => 'setIdProduto',
        'id_grupo_debito_recorrente' => 'setIdGrupoDebitoRecorrente',
        'quantidade_tentativas_cobranca' => 'setQuantidadeTentativasCobranca',
        'id_ajuste' => 'setIdAjuste'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'flag_anuidade_bonificada' => 'getFlagAnuidadeBonificada',
        'id' => 'getId',
        'nome' => 'getNome',
        'valor' => 'getValor',
        'flag_ativo' => 'getFlagAtivo',
        'valor_bonus' => 'getValorBonus',
        'numero_parcelas' => 'getNumeroParcelas',
        'flag_adere_automatico' => 'getFlagAdereAutomatico',
        'flag_gera_numero_sorte' => 'getFlagGeraNumeroSorte',
        'faixa_etaria' => 'getFaixaEtaria',
        'flag_seguro' => 'getFlagSeguro',
        'sorteios_mensais' => 'getSorteiosMensais',
        'flag_adesao_automatica' => 'getFlagAdesaoAutomatica',
        'flag_dependente' => 'getFlagDependente',
        'quantidade_dependente' => 'getQuantidadeDependente',
        'id_termo_seguro_servico' => 'getIdTermoSeguroServico',
        'idade_minima' => 'getIdadeMinima',
        'idade_maxima' => 'getIdadeMaxima',
        'flag_debito_incondicional' => 'getFlagDebitoIncondicional',
        'flag_extrato_incondicional' => 'getFlagExtratoIncondicional',
        'flag_estorno_automatico' => 'getFlagEstornoAutomatico',
        'valor_repassado_seguradora' => 'getValorRepassadoSeguradora',
        'flag_lanca_transacao' => 'getFlagLancaTransacao',
        'flag_transferencia_automatica' => 'getFlagTransferenciaAutomatica',
        'id_produto' => 'getIdProduto',
        'id_grupo_debito_recorrente' => 'getIdGrupoDebitoRecorrente',
        'quantidade_tentativas_cobranca' => 'getQuantidadeTentativasCobranca',
        'id_ajuste' => 'getIdAjuste'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $flag_anuidade_bonificada 
      * @var bool
      */
    protected $flag_anuidade_bonificada;
    
    /**
      * $id {{{tipo_debito_recorrente_response_id_value}}}
      * @var int
      */
    protected $id;
    
    /**
      * $nome {{{tipo_debito_recorrente_response_descricao_value}}}
      * @var string
      */
    protected $nome;
    
    /**
      * $valor {{{tipo_debito_recorrente_response_valor_value}}}
      * @var Number
      */
    protected $valor;
    
    /**
      * $flag_ativo {{{tipo_debito_recorrente_response_flag_ativo_value}}}
      * @var bool
      */
    protected $flag_ativo;
    
    /**
      * $valor_bonus {{{tipo_debito_recorrente_response_valor_bonus_value}}}
      * @var Number
      */
    protected $valor_bonus;
    
    /**
      * $numero_parcelas {{{tipo_debito_recorrente_response_numero_parcelas_value}}}
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $flag_adere_automatico {{{tipo_debito_recorrente_response_flag_adere_automatico_value}}}
      * @var bool
      */
    protected $flag_adere_automatico;
    
    /**
      * $flag_gera_numero_sorte {{{tipo_debito_recorrente_response_flag_gera_numero_sorte_value}}}
      * @var bool
      */
    protected $flag_gera_numero_sorte;
    
    /**
      * $faixa_etaria {{{tipo_debito_recorrente_response_faixa_etaria_value}}}
      * @var string
      */
    protected $faixa_etaria;
    
    /**
      * $flag_seguro {{{tipo_debito_recorrente_response_flag_seguro_value}}}
      * @var bool
      */
    protected $flag_seguro;
    
    /**
      * $sorteios_mensais {{{tipo_debito_recorrente_response_sorteios_mensais_value}}}
      * @var string
      */
    protected $sorteios_mensais;
    
    /**
      * $flag_adesao_automatica {{{tipo_debito_recorrente_response_flag_adesao_automatica_value}}}
      * @var bool
      */
    protected $flag_adesao_automatica;
    
    /**
      * $flag_dependente {{{tipo_debito_recorrente_response_flag_dependente_value}}}
      * @var bool
      */
    protected $flag_dependente;
    
    /**
      * $quantidade_dependente {{{tipo_debito_recorrente_response_quantidade_dependente_value}}}
      * @var int
      */
    protected $quantidade_dependente;
    
    /**
      * $id_termo_seguro_servico {{{tipo_debito_recorrente_response_id_termo_seguro_servico_value}}}
      * @var int
      */
    protected $id_termo_seguro_servico;
    
    /**
      * $idade_minima {{{tipo_debito_recorrente_response_idade_minima_value}}}
      * @var int
      */
    protected $idade_minima;
    
    /**
      * $idade_maxima {{{tipo_debito_recorrente_response_idade_maxima_value}}}
      * @var int
      */
    protected $idade_maxima;
    
    /**
      * $flag_debito_incondicional {{{tipo_debito_recorrente_response_flag_debito_incondicional_value}}}
      * @var bool
      */
    protected $flag_debito_incondicional;
    
    /**
      * $flag_extrato_incondicional {{{tipo_debito_recorrente_response_flag_extrato_incondicional_value}}}
      * @var bool
      */
    protected $flag_extrato_incondicional;
    
    /**
      * $flag_estorno_automatico {{{tipo_debito_recorrente_response_flag_estorno_automatico_value}}}
      * @var bool
      */
    protected $flag_estorno_automatico;
    
    /**
      * $valor_repassado_seguradora {{{tipo_debito_recorrente_response_valor_repassado_seguradora_value}}}
      * @var Number
      */
    protected $valor_repassado_seguradora;
    
    /**
      * $flag_lanca_transacao {{{tipo_debito_recorrente_response_flag_lanca_transacao_value}}}
      * @var bool
      */
    protected $flag_lanca_transacao;
    
    /**
      * $flag_transferencia_automatica {{{tipo_debito_recorrente_response_flag_transferencia_automatica_value}}}
      * @var bool
      */
    protected $flag_transferencia_automatica;
    
    /**
      * $id_produto {{{tipo_debito_recorrente_response_id_produto_value}}}
      * @var int
      */
    protected $id_produto;
    
    /**
      * $id_grupo_debito_recorrente {{{tipo_debito_recorrente_response_id_grupo_debito_recorrente_value}}}
      * @var int
      */
    protected $id_grupo_debito_recorrente;
    
    /**
      * $quantidade_tentativas_cobranca {{{tipo_debito_recorrente_response_quantidade_tentativas_cobranca_value}}}
      * @var int
      */
    protected $quantidade_tentativas_cobranca;
    
    /**
      * $id_ajuste {{{tipo_debito_recorrente_response_id_ajuste_value}}}
      * @var int
      */
    protected $id_ajuste;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->flag_anuidade_bonificada = $data["flag_anuidade_bonificada"];
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->valor = $data["valor"];
            $this->flag_ativo = $data["flag_ativo"];
            $this->valor_bonus = $data["valor_bonus"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->flag_adere_automatico = $data["flag_adere_automatico"];
            $this->flag_gera_numero_sorte = $data["flag_gera_numero_sorte"];
            $this->faixa_etaria = $data["faixa_etaria"];
            $this->flag_seguro = $data["flag_seguro"];
            $this->sorteios_mensais = $data["sorteios_mensais"];
            $this->flag_adesao_automatica = $data["flag_adesao_automatica"];
            $this->flag_dependente = $data["flag_dependente"];
            $this->quantidade_dependente = $data["quantidade_dependente"];
            $this->id_termo_seguro_servico = $data["id_termo_seguro_servico"];
            $this->idade_minima = $data["idade_minima"];
            $this->idade_maxima = $data["idade_maxima"];
            $this->flag_debito_incondicional = $data["flag_debito_incondicional"];
            $this->flag_extrato_incondicional = $data["flag_extrato_incondicional"];
            $this->flag_estorno_automatico = $data["flag_estorno_automatico"];
            $this->valor_repassado_seguradora = $data["valor_repassado_seguradora"];
            $this->flag_lanca_transacao = $data["flag_lanca_transacao"];
            $this->flag_transferencia_automatica = $data["flag_transferencia_automatica"];
            $this->id_produto = $data["id_produto"];
            $this->id_grupo_debito_recorrente = $data["id_grupo_debito_recorrente"];
            $this->quantidade_tentativas_cobranca = $data["quantidade_tentativas_cobranca"];
            $this->id_ajuste = $data["id_ajuste"];
        }
    }
    
    /**
     * Gets flag_anuidade_bonificada
     * @return bool
     */
    public function getFlagAnuidadeBonificada()
    {
        return $this->flag_anuidade_bonificada;
    }
  
    /**
     * Sets flag_anuidade_bonificada
     * @param bool $flag_anuidade_bonificada 
     * @return $this
     */
    public function setFlagAnuidadeBonificada($flag_anuidade_bonificada)
    {
        
        $this->flag_anuidade_bonificada = $flag_anuidade_bonificada;
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
     * @param int $id {{{tipo_debito_recorrente_response_id_value}}}
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
     * @param string $nome {{{tipo_debito_recorrente_response_descricao_value}}}
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
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
     * @param Number $valor {{{tipo_debito_recorrente_response_valor_value}}}
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets flag_ativo
     * @return bool
     */
    public function getFlagAtivo()
    {
        return $this->flag_ativo;
    }
  
    /**
     * Sets flag_ativo
     * @param bool $flag_ativo {{{tipo_debito_recorrente_response_flag_ativo_value}}}
     * @return $this
     */
    public function setFlagAtivo($flag_ativo)
    {
        
        $this->flag_ativo = $flag_ativo;
        return $this;
    }
    
    /**
     * Gets valor_bonus
     * @return Number
     */
    public function getValorBonus()
    {
        return $this->valor_bonus;
    }
  
    /**
     * Sets valor_bonus
     * @param Number $valor_bonus {{{tipo_debito_recorrente_response_valor_bonus_value}}}
     * @return $this
     */
    public function setValorBonus($valor_bonus)
    {
        
        $this->valor_bonus = $valor_bonus;
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
     * @param int $numero_parcelas {{{tipo_debito_recorrente_response_numero_parcelas_value}}}
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }
    
    /**
     * Gets flag_adere_automatico
     * @return bool
     */
    public function getFlagAdereAutomatico()
    {
        return $this->flag_adere_automatico;
    }
  
    /**
     * Sets flag_adere_automatico
     * @param bool $flag_adere_automatico {{{tipo_debito_recorrente_response_flag_adere_automatico_value}}}
     * @return $this
     */
    public function setFlagAdereAutomatico($flag_adere_automatico)
    {
        
        $this->flag_adere_automatico = $flag_adere_automatico;
        return $this;
    }
    
    /**
     * Gets flag_gera_numero_sorte
     * @return bool
     */
    public function getFlagGeraNumeroSorte()
    {
        return $this->flag_gera_numero_sorte;
    }
  
    /**
     * Sets flag_gera_numero_sorte
     * @param bool $flag_gera_numero_sorte {{{tipo_debito_recorrente_response_flag_gera_numero_sorte_value}}}
     * @return $this
     */
    public function setFlagGeraNumeroSorte($flag_gera_numero_sorte)
    {
        
        $this->flag_gera_numero_sorte = $flag_gera_numero_sorte;
        return $this;
    }
    
    /**
     * Gets faixa_etaria
     * @return string
     */
    public function getFaixaEtaria()
    {
        return $this->faixa_etaria;
    }
  
    /**
     * Sets faixa_etaria
     * @param string $faixa_etaria {{{tipo_debito_recorrente_response_faixa_etaria_value}}}
     * @return $this
     */
    public function setFaixaEtaria($faixa_etaria)
    {
        
        $this->faixa_etaria = $faixa_etaria;
        return $this;
    }
    
    /**
     * Gets flag_seguro
     * @return bool
     */
    public function getFlagSeguro()
    {
        return $this->flag_seguro;
    }
  
    /**
     * Sets flag_seguro
     * @param bool $flag_seguro {{{tipo_debito_recorrente_response_flag_seguro_value}}}
     * @return $this
     */
    public function setFlagSeguro($flag_seguro)
    {
        
        $this->flag_seguro = $flag_seguro;
        return $this;
    }
    
    /**
     * Gets sorteios_mensais
     * @return string
     */
    public function getSorteiosMensais()
    {
        return $this->sorteios_mensais;
    }
  
    /**
     * Sets sorteios_mensais
     * @param string $sorteios_mensais {{{tipo_debito_recorrente_response_sorteios_mensais_value}}}
     * @return $this
     */
    public function setSorteiosMensais($sorteios_mensais)
    {
        
        $this->sorteios_mensais = $sorteios_mensais;
        return $this;
    }
    
    /**
     * Gets flag_adesao_automatica
     * @return bool
     */
    public function getFlagAdesaoAutomatica()
    {
        return $this->flag_adesao_automatica;
    }
  
    /**
     * Sets flag_adesao_automatica
     * @param bool $flag_adesao_automatica {{{tipo_debito_recorrente_response_flag_adesao_automatica_value}}}
     * @return $this
     */
    public function setFlagAdesaoAutomatica($flag_adesao_automatica)
    {
        
        $this->flag_adesao_automatica = $flag_adesao_automatica;
        return $this;
    }
    
    /**
     * Gets flag_dependente
     * @return bool
     */
    public function getFlagDependente()
    {
        return $this->flag_dependente;
    }
  
    /**
     * Sets flag_dependente
     * @param bool $flag_dependente {{{tipo_debito_recorrente_response_flag_dependente_value}}}
     * @return $this
     */
    public function setFlagDependente($flag_dependente)
    {
        
        $this->flag_dependente = $flag_dependente;
        return $this;
    }
    
    /**
     * Gets quantidade_dependente
     * @return int
     */
    public function getQuantidadeDependente()
    {
        return $this->quantidade_dependente;
    }
  
    /**
     * Sets quantidade_dependente
     * @param int $quantidade_dependente {{{tipo_debito_recorrente_response_quantidade_dependente_value}}}
     * @return $this
     */
    public function setQuantidadeDependente($quantidade_dependente)
    {
        
        $this->quantidade_dependente = $quantidade_dependente;
        return $this;
    }
    
    /**
     * Gets id_termo_seguro_servico
     * @return int
     */
    public function getIdTermoSeguroServico()
    {
        return $this->id_termo_seguro_servico;
    }
  
    /**
     * Sets id_termo_seguro_servico
     * @param int $id_termo_seguro_servico {{{tipo_debito_recorrente_response_id_termo_seguro_servico_value}}}
     * @return $this
     */
    public function setIdTermoSeguroServico($id_termo_seguro_servico)
    {
        
        $this->id_termo_seguro_servico = $id_termo_seguro_servico;
        return $this;
    }
    
    /**
     * Gets idade_minima
     * @return int
     */
    public function getIdadeMinima()
    {
        return $this->idade_minima;
    }
  
    /**
     * Sets idade_minima
     * @param int $idade_minima {{{tipo_debito_recorrente_response_idade_minima_value}}}
     * @return $this
     */
    public function setIdadeMinima($idade_minima)
    {
        
        $this->idade_minima = $idade_minima;
        return $this;
    }
    
    /**
     * Gets idade_maxima
     * @return int
     */
    public function getIdadeMaxima()
    {
        return $this->idade_maxima;
    }
  
    /**
     * Sets idade_maxima
     * @param int $idade_maxima {{{tipo_debito_recorrente_response_idade_maxima_value}}}
     * @return $this
     */
    public function setIdadeMaxima($idade_maxima)
    {
        
        $this->idade_maxima = $idade_maxima;
        return $this;
    }
    
    /**
     * Gets flag_debito_incondicional
     * @return bool
     */
    public function getFlagDebitoIncondicional()
    {
        return $this->flag_debito_incondicional;
    }
  
    /**
     * Sets flag_debito_incondicional
     * @param bool $flag_debito_incondicional {{{tipo_debito_recorrente_response_flag_debito_incondicional_value}}}
     * @return $this
     */
    public function setFlagDebitoIncondicional($flag_debito_incondicional)
    {
        
        $this->flag_debito_incondicional = $flag_debito_incondicional;
        return $this;
    }
    
    /**
     * Gets flag_extrato_incondicional
     * @return bool
     */
    public function getFlagExtratoIncondicional()
    {
        return $this->flag_extrato_incondicional;
    }
  
    /**
     * Sets flag_extrato_incondicional
     * @param bool $flag_extrato_incondicional {{{tipo_debito_recorrente_response_flag_extrato_incondicional_value}}}
     * @return $this
     */
    public function setFlagExtratoIncondicional($flag_extrato_incondicional)
    {
        
        $this->flag_extrato_incondicional = $flag_extrato_incondicional;
        return $this;
    }
    
    /**
     * Gets flag_estorno_automatico
     * @return bool
     */
    public function getFlagEstornoAutomatico()
    {
        return $this->flag_estorno_automatico;
    }
  
    /**
     * Sets flag_estorno_automatico
     * @param bool $flag_estorno_automatico {{{tipo_debito_recorrente_response_flag_estorno_automatico_value}}}
     * @return $this
     */
    public function setFlagEstornoAutomatico($flag_estorno_automatico)
    {
        
        $this->flag_estorno_automatico = $flag_estorno_automatico;
        return $this;
    }
    
    /**
     * Gets valor_repassado_seguradora
     * @return Number
     */
    public function getValorRepassadoSeguradora()
    {
        return $this->valor_repassado_seguradora;
    }
  
    /**
     * Sets valor_repassado_seguradora
     * @param Number $valor_repassado_seguradora {{{tipo_debito_recorrente_response_valor_repassado_seguradora_value}}}
     * @return $this
     */
    public function setValorRepassadoSeguradora($valor_repassado_seguradora)
    {
        
        $this->valor_repassado_seguradora = $valor_repassado_seguradora;
        return $this;
    }
    
    /**
     * Gets flag_lanca_transacao
     * @return bool
     */
    public function getFlagLancaTransacao()
    {
        return $this->flag_lanca_transacao;
    }
  
    /**
     * Sets flag_lanca_transacao
     * @param bool $flag_lanca_transacao {{{tipo_debito_recorrente_response_flag_lanca_transacao_value}}}
     * @return $this
     */
    public function setFlagLancaTransacao($flag_lanca_transacao)
    {
        
        $this->flag_lanca_transacao = $flag_lanca_transacao;
        return $this;
    }
    
    /**
     * Gets flag_transferencia_automatica
     * @return bool
     */
    public function getFlagTransferenciaAutomatica()
    {
        return $this->flag_transferencia_automatica;
    }
  
    /**
     * Sets flag_transferencia_automatica
     * @param bool $flag_transferencia_automatica {{{tipo_debito_recorrente_response_flag_transferencia_automatica_value}}}
     * @return $this
     */
    public function setFlagTransferenciaAutomatica($flag_transferencia_automatica)
    {
        
        $this->flag_transferencia_automatica = $flag_transferencia_automatica;
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
     * @param int $id_produto {{{tipo_debito_recorrente_response_id_produto_value}}}
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets id_grupo_debito_recorrente
     * @return int
     */
    public function getIdGrupoDebitoRecorrente()
    {
        return $this->id_grupo_debito_recorrente;
    }
  
    /**
     * Sets id_grupo_debito_recorrente
     * @param int $id_grupo_debito_recorrente {{{tipo_debito_recorrente_response_id_grupo_debito_recorrente_value}}}
     * @return $this
     */
    public function setIdGrupoDebitoRecorrente($id_grupo_debito_recorrente)
    {
        
        $this->id_grupo_debito_recorrente = $id_grupo_debito_recorrente;
        return $this;
    }
    
    /**
     * Gets quantidade_tentativas_cobranca
     * @return int
     */
    public function getQuantidadeTentativasCobranca()
    {
        return $this->quantidade_tentativas_cobranca;
    }
  
    /**
     * Sets quantidade_tentativas_cobranca
     * @param int $quantidade_tentativas_cobranca {{{tipo_debito_recorrente_response_quantidade_tentativas_cobranca_value}}}
     * @return $this
     */
    public function setQuantidadeTentativasCobranca($quantidade_tentativas_cobranca)
    {
        
        $this->quantidade_tentativas_cobranca = $quantidade_tentativas_cobranca;
        return $this;
    }
    
    /**
     * Gets id_ajuste
     * @return int
     */
    public function getIdAjuste()
    {
        return $this->id_ajuste;
    }
  
    /**
     * Sets id_ajuste
     * @param int $id_ajuste {{{tipo_debito_recorrente_response_id_ajuste_value}}}
     * @return $this
     */
    public function setIdAjuste($id_ajuste)
    {
        
        $this->id_ajuste = $id_ajuste;
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
