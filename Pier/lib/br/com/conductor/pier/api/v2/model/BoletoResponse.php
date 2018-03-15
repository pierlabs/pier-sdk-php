<?php
/**
 * BoletoResponse
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
 * BoletoResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00E7\u00E3o da resposta do boleto de fatura
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BoletoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'numero_do_documento' => 'string',
        'data_processamento' => 'string',
        'data_documento' => 'string',
        'data_vencimento' => 'string',
        'data_fechamento' => 'string',
        'valor_boleto' => 'Number',
        'nome_beneficiario' => 'string',
        'documento_beneficiario' => 'string',
        'agencia' => 'string',
        'codigo_beneficiario' => 'string',
        'numero_convenio' => 'string',
        'digito_codigo_beneficiario' => 'string',
        'carteira' => 'string',
        'nosso_numero' => 'string',
        'digito_nosso_numero' => 'string',
        'banco' => 'string',
        'aceite' => 'bool',
        'especie_do_documento' => 'string',
        'especie' => 'string',
        'instrucoes' => 'string[]',
        'locais_de_pagamento' => 'string[]',
        'nome_pagador' => 'string',
        'documento_pagador' => 'string',
        'logradouro_pagador' => 'string',
        'bairro_pagador' => 'string',
        'cep_pagador' => 'string',
        'cidade_pagador' => 'string',
        'uf_pagador' => 'string',
        'codigo_de_barras' => 'string',
        'linha_digitavel' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'numero_do_documento' => 'numeroDoDocumento',
        'data_processamento' => 'dataProcessamento',
        'data_documento' => 'dataDocumento',
        'data_vencimento' => 'dataVencimento',
        'data_fechamento' => 'dataFechamento',
        'valor_boleto' => 'valorBoleto',
        'nome_beneficiario' => 'nomeBeneficiario',
        'documento_beneficiario' => 'documentoBeneficiario',
        'agencia' => 'agencia',
        'codigo_beneficiario' => 'codigoBeneficiario',
        'numero_convenio' => 'numeroConvenio',
        'digito_codigo_beneficiario' => 'digitoCodigoBeneficiario',
        'carteira' => 'carteira',
        'nosso_numero' => 'nossoNumero',
        'digito_nosso_numero' => 'digitoNossoNumero',
        'banco' => 'banco',
        'aceite' => 'aceite',
        'especie_do_documento' => 'especieDoDocumento',
        'especie' => 'especie',
        'instrucoes' => 'instrucoes',
        'locais_de_pagamento' => 'locaisDePagamento',
        'nome_pagador' => 'nomePagador',
        'documento_pagador' => 'documentoPagador',
        'logradouro_pagador' => 'logradouroPagador',
        'bairro_pagador' => 'bairroPagador',
        'cep_pagador' => 'cepPagador',
        'cidade_pagador' => 'cidadePagador',
        'uf_pagador' => 'ufPagador',
        'codigo_de_barras' => 'codigoDeBarras',
        'linha_digitavel' => 'linhaDigitavel'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'numero_do_documento' => 'setNumeroDoDocumento',
        'data_processamento' => 'setDataProcessamento',
        'data_documento' => 'setDataDocumento',
        'data_vencimento' => 'setDataVencimento',
        'data_fechamento' => 'setDataFechamento',
        'valor_boleto' => 'setValorBoleto',
        'nome_beneficiario' => 'setNomeBeneficiario',
        'documento_beneficiario' => 'setDocumentoBeneficiario',
        'agencia' => 'setAgencia',
        'codigo_beneficiario' => 'setCodigoBeneficiario',
        'numero_convenio' => 'setNumeroConvenio',
        'digito_codigo_beneficiario' => 'setDigitoCodigoBeneficiario',
        'carteira' => 'setCarteira',
        'nosso_numero' => 'setNossoNumero',
        'digito_nosso_numero' => 'setDigitoNossoNumero',
        'banco' => 'setBanco',
        'aceite' => 'setAceite',
        'especie_do_documento' => 'setEspecieDoDocumento',
        'especie' => 'setEspecie',
        'instrucoes' => 'setInstrucoes',
        'locais_de_pagamento' => 'setLocaisDePagamento',
        'nome_pagador' => 'setNomePagador',
        'documento_pagador' => 'setDocumentoPagador',
        'logradouro_pagador' => 'setLogradouroPagador',
        'bairro_pagador' => 'setBairroPagador',
        'cep_pagador' => 'setCepPagador',
        'cidade_pagador' => 'setCidadePagador',
        'uf_pagador' => 'setUfPagador',
        'codigo_de_barras' => 'setCodigoDeBarras',
        'linha_digitavel' => 'setLinhaDigitavel'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'numero_do_documento' => 'getNumeroDoDocumento',
        'data_processamento' => 'getDataProcessamento',
        'data_documento' => 'getDataDocumento',
        'data_vencimento' => 'getDataVencimento',
        'data_fechamento' => 'getDataFechamento',
        'valor_boleto' => 'getValorBoleto',
        'nome_beneficiario' => 'getNomeBeneficiario',
        'documento_beneficiario' => 'getDocumentoBeneficiario',
        'agencia' => 'getAgencia',
        'codigo_beneficiario' => 'getCodigoBeneficiario',
        'numero_convenio' => 'getNumeroConvenio',
        'digito_codigo_beneficiario' => 'getDigitoCodigoBeneficiario',
        'carteira' => 'getCarteira',
        'nosso_numero' => 'getNossoNumero',
        'digito_nosso_numero' => 'getDigitoNossoNumero',
        'banco' => 'getBanco',
        'aceite' => 'getAceite',
        'especie_do_documento' => 'getEspecieDoDocumento',
        'especie' => 'getEspecie',
        'instrucoes' => 'getInstrucoes',
        'locais_de_pagamento' => 'getLocaisDePagamento',
        'nome_pagador' => 'getNomePagador',
        'documento_pagador' => 'getDocumentoPagador',
        'logradouro_pagador' => 'getLogradouroPagador',
        'bairro_pagador' => 'getBairroPagador',
        'cep_pagador' => 'getCepPagador',
        'cidade_pagador' => 'getCidadePagador',
        'uf_pagador' => 'getUfPagador',
        'codigo_de_barras' => 'getCodigoDeBarras',
        'linha_digitavel' => 'getLinhaDigitavel'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $numero_do_documento N\u00FAmero do documento \u00E9 o c\u00F3digo informado pelo banco para identifica\u00E7\u00E3o do cliente
      * @var string
      */
    protected $numero_do_documento;
    
    /**
      * $data_processamento Data do processamento (emiss\u00E3o ou faturamento) do boleto
      * @var string
      */
    protected $data_processamento;
    
    /**
      * $data_documento Data do documento (impress\u00E3o)
      * @var string
      */
    protected $data_documento;
    
    /**
      * $data_vencimento Data do vencimento
      * @var string
      */
    protected $data_vencimento;
    
    /**
      * $data_fechamento Data do fechamento
      * @var string
      */
    protected $data_fechamento;
    
    /**
      * $valor_boleto Valor do Boleto.
      * @var Number
      */
    protected $valor_boleto;
    
    /**
      * $nome_beneficiario Benefici\u00E1rio \u00E9 a pessoa/empresa que gera o boleto
      * @var string
      */
    protected $nome_beneficiario;
    
    /**
      * $documento_beneficiario Documento do Beneficiario.
      * @var string
      */
    protected $documento_beneficiario;
    
    /**
      * $agencia Ag\u00EAncia.
      * @var string
      */
    protected $agencia;
    
    /**
      * $codigo_beneficiario C\u00F3digo do benefici\u00E1rio
      * @var string
      */
    protected $codigo_beneficiario;
    
    /**
      * $numero_convenio N\u00FAmero do conv\u00EAnio fornecido pelo banco \u00E9 o c\u00F3digo que identifica um emissor junto ao seu banco para associar seus boletos.
      * @var string
      */
    protected $numero_convenio;
    
    /**
      * $digito_codigo_beneficiario D\u00EDgito do c\u00F3digo do benefici\u00E1rio
      * @var string
      */
    protected $digito_codigo_beneficiario;
    
    /**
      * $carteira Carteira \u00E9 o c\u00F3digo informado pelo banco pra identifica\u00E7\u00E3o do tipo do boleto
      * @var string
      */
    protected $carteira;
    
    /**
      * $nosso_numero Nosso n\u00FAmero \u00E9 o c\u00F3digo que o benefici\u00E1rio escolhe para manter controle sobre seus boletos. Esse valor serve para o cedente identificar quais boletos foram pagos ou n\u00E3o. Recomenda-se o uso de n\u00FAmeros sequ\u00EAnciais, na gera\u00E7\u00E3o de diversos boletos, para facilitar a identifica\u00E7\u00E3o dos boletos pagos
      * @var string
      */
    protected $nosso_numero;
    
    /**
      * $digito_nosso_numero D\u00EDgito do nosso n\u00FAmero
      * @var string
      */
    protected $digito_nosso_numero;
    
    /**
      * $banco Banco
      * @var string
      */
    protected $banco;
    
    /**
      * $aceite Aceite informa ao banco se deve aceitar o boleto ap\u00F3s a data de vencimento (padr\u00E3o: \"N\")
      * @var bool
      */
    protected $aceite;
    
    /**
      * $especie_do_documento Esp\u00E9cie do documento \u00E9 o identificador do tipo de boleto (padr\u00E3o: \"DV\")
      * @var string
      */
    protected $especie_do_documento;
    
    /**
      * $especie Esp\u00E9cie \u00E9 o identificador da moeda do boleto (padr\u00E3o: \"R$\")
      * @var string
      */
    protected $especie;
    
    /**
      * $instrucoes Instru\u00E7\u00F5es para o benefici\u00E1rio
      * @var string[]
      */
    protected $instrucoes;
    
    /**
      * $locais_de_pagamento Locais de pagamento
      * @var string[]
      */
    protected $locais_de_pagamento;
    
    /**
      * $nome_pagador Pagador \u00E9 a pessoa/empresa que deve pagar o boleto
      * @var string
      */
    protected $nome_pagador;
    
    /**
      * $documento_pagador Documento do pagador (CPF ou CNPJ)
      * @var string
      */
    protected $documento_pagador;
    
    /**
      * $logradouro_pagador Logradouro do pagador
      * @var string
      */
    protected $logradouro_pagador;
    
    /**
      * $bairro_pagador Bairro do pagador
      * @var string
      */
    protected $bairro_pagador;
    
    /**
      * $cep_pagador CEP do pagador
      * @var string
      */
    protected $cep_pagador;
    
    /**
      * $cidade_pagador Cidade do pagador
      * @var string
      */
    protected $cidade_pagador;
    
    /**
      * $uf_pagador Unidade federativa do pagador
      * @var string
      */
    protected $uf_pagador;
    
    /**
      * $codigo_de_barras Valor num\u00E9rico do c\u00F3digo de barras
      * @var string
      */
    protected $codigo_de_barras;
    
    /**
      * $linha_digitavel Linha digit\u00E1vel formatada
      * @var string
      */
    protected $linha_digitavel;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->numero_do_documento = $data["numero_do_documento"];
            $this->data_processamento = $data["data_processamento"];
            $this->data_documento = $data["data_documento"];
            $this->data_vencimento = $data["data_vencimento"];
            $this->data_fechamento = $data["data_fechamento"];
            $this->valor_boleto = $data["valor_boleto"];
            $this->nome_beneficiario = $data["nome_beneficiario"];
            $this->documento_beneficiario = $data["documento_beneficiario"];
            $this->agencia = $data["agencia"];
            $this->codigo_beneficiario = $data["codigo_beneficiario"];
            $this->numero_convenio = $data["numero_convenio"];
            $this->digito_codigo_beneficiario = $data["digito_codigo_beneficiario"];
            $this->carteira = $data["carteira"];
            $this->nosso_numero = $data["nosso_numero"];
            $this->digito_nosso_numero = $data["digito_nosso_numero"];
            $this->banco = $data["banco"];
            $this->aceite = $data["aceite"];
            $this->especie_do_documento = $data["especie_do_documento"];
            $this->especie = $data["especie"];
            $this->instrucoes = $data["instrucoes"];
            $this->locais_de_pagamento = $data["locais_de_pagamento"];
            $this->nome_pagador = $data["nome_pagador"];
            $this->documento_pagador = $data["documento_pagador"];
            $this->logradouro_pagador = $data["logradouro_pagador"];
            $this->bairro_pagador = $data["bairro_pagador"];
            $this->cep_pagador = $data["cep_pagador"];
            $this->cidade_pagador = $data["cidade_pagador"];
            $this->uf_pagador = $data["uf_pagador"];
            $this->codigo_de_barras = $data["codigo_de_barras"];
            $this->linha_digitavel = $data["linha_digitavel"];
        }
    }
    
    /**
     * Gets numero_do_documento
     * @return string
     */
    public function getNumeroDoDocumento()
    {
        return $this->numero_do_documento;
    }
  
    /**
     * Sets numero_do_documento
     * @param string $numero_do_documento N\u00FAmero do documento \u00E9 o c\u00F3digo informado pelo banco para identifica\u00E7\u00E3o do cliente
     * @return $this
     */
    public function setNumeroDoDocumento($numero_do_documento)
    {
        
        $this->numero_do_documento = $numero_do_documento;
        return $this;
    }
    
    /**
     * Gets data_processamento
     * @return string
     */
    public function getDataProcessamento()
    {
        return $this->data_processamento;
    }
  
    /**
     * Sets data_processamento
     * @param string $data_processamento Data do processamento (emiss\u00E3o ou faturamento) do boleto
     * @return $this
     */
    public function setDataProcessamento($data_processamento)
    {
        
        $this->data_processamento = $data_processamento;
        return $this;
    }
    
    /**
     * Gets data_documento
     * @return string
     */
    public function getDataDocumento()
    {
        return $this->data_documento;
    }
  
    /**
     * Sets data_documento
     * @param string $data_documento Data do documento (impress\u00E3o)
     * @return $this
     */
    public function setDataDocumento($data_documento)
    {
        
        $this->data_documento = $data_documento;
        return $this;
    }
    
    /**
     * Gets data_vencimento
     * @return string
     */
    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }
  
    /**
     * Sets data_vencimento
     * @param string $data_vencimento Data do vencimento
     * @return $this
     */
    public function setDataVencimento($data_vencimento)
    {
        
        $this->data_vencimento = $data_vencimento;
        return $this;
    }
    
    /**
     * Gets data_fechamento
     * @return string
     */
    public function getDataFechamento()
    {
        return $this->data_fechamento;
    }
  
    /**
     * Sets data_fechamento
     * @param string $data_fechamento Data do fechamento
     * @return $this
     */
    public function setDataFechamento($data_fechamento)
    {
        
        $this->data_fechamento = $data_fechamento;
        return $this;
    }
    
    /**
     * Gets valor_boleto
     * @return Number
     */
    public function getValorBoleto()
    {
        return $this->valor_boleto;
    }
  
    /**
     * Sets valor_boleto
     * @param Number $valor_boleto Valor do Boleto.
     * @return $this
     */
    public function setValorBoleto($valor_boleto)
    {
        
        $this->valor_boleto = $valor_boleto;
        return $this;
    }
    
    /**
     * Gets nome_beneficiario
     * @return string
     */
    public function getNomeBeneficiario()
    {
        return $this->nome_beneficiario;
    }
  
    /**
     * Sets nome_beneficiario
     * @param string $nome_beneficiario Benefici\u00E1rio \u00E9 a pessoa/empresa que gera o boleto
     * @return $this
     */
    public function setNomeBeneficiario($nome_beneficiario)
    {
        
        $this->nome_beneficiario = $nome_beneficiario;
        return $this;
    }
    
    /**
     * Gets documento_beneficiario
     * @return string
     */
    public function getDocumentoBeneficiario()
    {
        return $this->documento_beneficiario;
    }
  
    /**
     * Sets documento_beneficiario
     * @param string $documento_beneficiario Documento do Beneficiario.
     * @return $this
     */
    public function setDocumentoBeneficiario($documento_beneficiario)
    {
        
        $this->documento_beneficiario = $documento_beneficiario;
        return $this;
    }
    
    /**
     * Gets agencia
     * @return string
     */
    public function getAgencia()
    {
        return $this->agencia;
    }
  
    /**
     * Sets agencia
     * @param string $agencia Ag\u00EAncia.
     * @return $this
     */
    public function setAgencia($agencia)
    {
        
        $this->agencia = $agencia;
        return $this;
    }
    
    /**
     * Gets codigo_beneficiario
     * @return string
     */
    public function getCodigoBeneficiario()
    {
        return $this->codigo_beneficiario;
    }
  
    /**
     * Sets codigo_beneficiario
     * @param string $codigo_beneficiario C\u00F3digo do benefici\u00E1rio
     * @return $this
     */
    public function setCodigoBeneficiario($codigo_beneficiario)
    {
        
        $this->codigo_beneficiario = $codigo_beneficiario;
        return $this;
    }
    
    /**
     * Gets numero_convenio
     * @return string
     */
    public function getNumeroConvenio()
    {
        return $this->numero_convenio;
    }
  
    /**
     * Sets numero_convenio
     * @param string $numero_convenio N\u00FAmero do conv\u00EAnio fornecido pelo banco \u00E9 o c\u00F3digo que identifica um emissor junto ao seu banco para associar seus boletos.
     * @return $this
     */
    public function setNumeroConvenio($numero_convenio)
    {
        
        $this->numero_convenio = $numero_convenio;
        return $this;
    }
    
    /**
     * Gets digito_codigo_beneficiario
     * @return string
     */
    public function getDigitoCodigoBeneficiario()
    {
        return $this->digito_codigo_beneficiario;
    }
  
    /**
     * Sets digito_codigo_beneficiario
     * @param string $digito_codigo_beneficiario D\u00EDgito do c\u00F3digo do benefici\u00E1rio
     * @return $this
     */
    public function setDigitoCodigoBeneficiario($digito_codigo_beneficiario)
    {
        
        $this->digito_codigo_beneficiario = $digito_codigo_beneficiario;
        return $this;
    }
    
    /**
     * Gets carteira
     * @return string
     */
    public function getCarteira()
    {
        return $this->carteira;
    }
  
    /**
     * Sets carteira
     * @param string $carteira Carteira \u00E9 o c\u00F3digo informado pelo banco pra identifica\u00E7\u00E3o do tipo do boleto
     * @return $this
     */
    public function setCarteira($carteira)
    {
        
        $this->carteira = $carteira;
        return $this;
    }
    
    /**
     * Gets nosso_numero
     * @return string
     */
    public function getNossoNumero()
    {
        return $this->nosso_numero;
    }
  
    /**
     * Sets nosso_numero
     * @param string $nosso_numero Nosso n\u00FAmero \u00E9 o c\u00F3digo que o benefici\u00E1rio escolhe para manter controle sobre seus boletos. Esse valor serve para o cedente identificar quais boletos foram pagos ou n\u00E3o. Recomenda-se o uso de n\u00FAmeros sequ\u00EAnciais, na gera\u00E7\u00E3o de diversos boletos, para facilitar a identifica\u00E7\u00E3o dos boletos pagos
     * @return $this
     */
    public function setNossoNumero($nosso_numero)
    {
        
        $this->nosso_numero = $nosso_numero;
        return $this;
    }
    
    /**
     * Gets digito_nosso_numero
     * @return string
     */
    public function getDigitoNossoNumero()
    {
        return $this->digito_nosso_numero;
    }
  
    /**
     * Sets digito_nosso_numero
     * @param string $digito_nosso_numero D\u00EDgito do nosso n\u00FAmero
     * @return $this
     */
    public function setDigitoNossoNumero($digito_nosso_numero)
    {
        
        $this->digito_nosso_numero = $digito_nosso_numero;
        return $this;
    }
    
    /**
     * Gets banco
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }
  
    /**
     * Sets banco
     * @param string $banco Banco
     * @return $this
     */
    public function setBanco($banco)
    {
        
        $this->banco = $banco;
        return $this;
    }
    
    /**
     * Gets aceite
     * @return bool
     */
    public function getAceite()
    {
        return $this->aceite;
    }
  
    /**
     * Sets aceite
     * @param bool $aceite Aceite informa ao banco se deve aceitar o boleto ap\u00F3s a data de vencimento (padr\u00E3o: \"N\")
     * @return $this
     */
    public function setAceite($aceite)
    {
        
        $this->aceite = $aceite;
        return $this;
    }
    
    /**
     * Gets especie_do_documento
     * @return string
     */
    public function getEspecieDoDocumento()
    {
        return $this->especie_do_documento;
    }
  
    /**
     * Sets especie_do_documento
     * @param string $especie_do_documento Esp\u00E9cie do documento \u00E9 o identificador do tipo de boleto (padr\u00E3o: \"DV\")
     * @return $this
     */
    public function setEspecieDoDocumento($especie_do_documento)
    {
        
        $this->especie_do_documento = $especie_do_documento;
        return $this;
    }
    
    /**
     * Gets especie
     * @return string
     */
    public function getEspecie()
    {
        return $this->especie;
    }
  
    /**
     * Sets especie
     * @param string $especie Esp\u00E9cie \u00E9 o identificador da moeda do boleto (padr\u00E3o: \"R$\")
     * @return $this
     */
    public function setEspecie($especie)
    {
        
        $this->especie = $especie;
        return $this;
    }
    
    /**
     * Gets instrucoes
     * @return string[]
     */
    public function getInstrucoes()
    {
        return $this->instrucoes;
    }
  
    /**
     * Sets instrucoes
     * @param string[] $instrucoes Instru\u00E7\u00F5es para o benefici\u00E1rio
     * @return $this
     */
    public function setInstrucoes($instrucoes)
    {
        
        $this->instrucoes = $instrucoes;
        return $this;
    }
    
    /**
     * Gets locais_de_pagamento
     * @return string[]
     */
    public function getLocaisDePagamento()
    {
        return $this->locais_de_pagamento;
    }
  
    /**
     * Sets locais_de_pagamento
     * @param string[] $locais_de_pagamento Locais de pagamento
     * @return $this
     */
    public function setLocaisDePagamento($locais_de_pagamento)
    {
        
        $this->locais_de_pagamento = $locais_de_pagamento;
        return $this;
    }
    
    /**
     * Gets nome_pagador
     * @return string
     */
    public function getNomePagador()
    {
        return $this->nome_pagador;
    }
  
    /**
     * Sets nome_pagador
     * @param string $nome_pagador Pagador \u00E9 a pessoa/empresa que deve pagar o boleto
     * @return $this
     */
    public function setNomePagador($nome_pagador)
    {
        
        $this->nome_pagador = $nome_pagador;
        return $this;
    }
    
    /**
     * Gets documento_pagador
     * @return string
     */
    public function getDocumentoPagador()
    {
        return $this->documento_pagador;
    }
  
    /**
     * Sets documento_pagador
     * @param string $documento_pagador Documento do pagador (CPF ou CNPJ)
     * @return $this
     */
    public function setDocumentoPagador($documento_pagador)
    {
        
        $this->documento_pagador = $documento_pagador;
        return $this;
    }
    
    /**
     * Gets logradouro_pagador
     * @return string
     */
    public function getLogradouroPagador()
    {
        return $this->logradouro_pagador;
    }
  
    /**
     * Sets logradouro_pagador
     * @param string $logradouro_pagador Logradouro do pagador
     * @return $this
     */
    public function setLogradouroPagador($logradouro_pagador)
    {
        
        $this->logradouro_pagador = $logradouro_pagador;
        return $this;
    }
    
    /**
     * Gets bairro_pagador
     * @return string
     */
    public function getBairroPagador()
    {
        return $this->bairro_pagador;
    }
  
    /**
     * Sets bairro_pagador
     * @param string $bairro_pagador Bairro do pagador
     * @return $this
     */
    public function setBairroPagador($bairro_pagador)
    {
        
        $this->bairro_pagador = $bairro_pagador;
        return $this;
    }
    
    /**
     * Gets cep_pagador
     * @return string
     */
    public function getCepPagador()
    {
        return $this->cep_pagador;
    }
  
    /**
     * Sets cep_pagador
     * @param string $cep_pagador CEP do pagador
     * @return $this
     */
    public function setCepPagador($cep_pagador)
    {
        
        $this->cep_pagador = $cep_pagador;
        return $this;
    }
    
    /**
     * Gets cidade_pagador
     * @return string
     */
    public function getCidadePagador()
    {
        return $this->cidade_pagador;
    }
  
    /**
     * Sets cidade_pagador
     * @param string $cidade_pagador Cidade do pagador
     * @return $this
     */
    public function setCidadePagador($cidade_pagador)
    {
        
        $this->cidade_pagador = $cidade_pagador;
        return $this;
    }
    
    /**
     * Gets uf_pagador
     * @return string
     */
    public function getUfPagador()
    {
        return $this->uf_pagador;
    }
  
    /**
     * Sets uf_pagador
     * @param string $uf_pagador Unidade federativa do pagador
     * @return $this
     */
    public function setUfPagador($uf_pagador)
    {
        
        $this->uf_pagador = $uf_pagador;
        return $this;
    }
    
    /**
     * Gets codigo_de_barras
     * @return string
     */
    public function getCodigoDeBarras()
    {
        return $this->codigo_de_barras;
    }
  
    /**
     * Sets codigo_de_barras
     * @param string $codigo_de_barras Valor num\u00E9rico do c\u00F3digo de barras
     * @return $this
     */
    public function setCodigoDeBarras($codigo_de_barras)
    {
        
        $this->codigo_de_barras = $codigo_de_barras;
        return $this;
    }
    
    /**
     * Gets linha_digitavel
     * @return string
     */
    public function getLinhaDigitavel()
    {
        return $this->linha_digitavel;
    }
  
    /**
     * Sets linha_digitavel
     * @param string $linha_digitavel Linha digit\u00E1vel formatada
     * @return $this
     */
    public function setLinhaDigitavel($linha_digitavel)
    {
        
        $this->linha_digitavel = $linha_digitavel;
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
