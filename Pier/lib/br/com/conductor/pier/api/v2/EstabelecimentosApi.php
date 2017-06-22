<?php
/**
 * EstabelecimentosApi
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

namespace br.com.conductor.pier.api.v2;

use \br.com.conductor.pier.api.v2.invoker\Configuration;
use \br.com.conductor.pier.api.v2.invoker\ApiClient;
use \br.com.conductor.pier.api.v2.invoker\ApiException;
use \br.com.conductor.pier.api.v2.invoker\ObjectSerializer;

/**
 * EstabelecimentosApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstabelecimentosApi
{

    /**
     * API Client
     * @var \br.com.conductor.pier.api.v2.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \br.com.conductor.pier.api.v2.invoker\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \br.com.conductor.pier.api.v2.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \br.com.conductor.pier.api.v2.invoker\ApiClient $apiClient set the API client
     * @return EstabelecimentosApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarUsingGET16
     *
     * Apresenta os dados de um determinado Terminal
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\TerminalResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET16($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET16WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET16WithHttpInfo
     *
     * Apresenta os dados de um determinado Terminal
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\TerminalResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET16WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET16');
        }
  
        // parse inputs
        $resourcePath = "/api/terminais/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\TerminalResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\TerminalResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\TerminalResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET6
     *
     * Consultar estabelecimento por id
     *
     * @param int $id Id (required)
     * @return \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET6($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET6WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET6WithHttpInfo
     *
     * Consultar estabelecimento por id
     *
     * @param int $id Id (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET6WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET6');
        }
  
        // parse inputs
        $resourcePath = "/api/estabelecimentos/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET10
     *
     * Lista Estabelecimentos
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). (optional)
     * @param int $numero_receita_federal Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Receita Federal. (optional)
     * @param string $nome Nome do Estabelecimento. (optional)
     * @param string $descricao Raz\u00C3\u00A3o Social do Estabelecimento. (optional)
     * @param string $nome_fantasia T\u00C3\u00ADtulo Comercial do Estabelecimento. (optional)
     * @param string $cep C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP). (optional)
     * @param string $nome_logradouro Nome do Logradouro. (optional)
     * @param int $numero_endereco N\u00C3\u00BAmero do endere\u00C3\u00A7o. (optional)
     * @param string $complemento Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o. (optional)
     * @param string $bairro Nome do bairro do endere\u00C3\u00A7o. (optional)
     * @param string $cidade Nome da cidade do endere\u00C3\u00A7o. (optional)
     * @param string $uf Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o. (optional)
     * @param string $pais Nome do pa\u00C3\u00ADs. (optional)
     * @param string $data_cadastramento Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd. (optional)
     * @param string $contato Nome da pessoa para contato com o Estabelecimento. (optional)
     * @param string $email E-mail da pessoa para contato com o Estabelecimento. (optional)
     * @param int $flag_arquivo_secr_fazenda Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual. (optional)
     * @param int $flag_cartao_digitado Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o. (optional)
     * @param int $inativo Indica se o estabelecimento est\u00C3\u00A1 inativo. (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET10($page = null, $limit = null, $id = null, $numero_receita_federal = null, $nome = null, $descricao = null, $nome_fantasia = null, $cep = null, $nome_logradouro = null, $numero_endereco = null, $complemento = null, $bairro = null, $cidade = null, $uf = null, $pais = null, $data_cadastramento = null, $contato = null, $email = null, $flag_arquivo_secr_fazenda = null, $flag_cartao_digitado = null, $inativo = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET10WithHttpInfo ($page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo);
        return $response; 
    }


    /**
     * listarUsingGET10WithHttpInfo
     *
     * Lista Estabelecimentos
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). (optional)
     * @param int $numero_receita_federal Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Receita Federal. (optional)
     * @param string $nome Nome do Estabelecimento. (optional)
     * @param string $descricao Raz\u00C3\u00A3o Social do Estabelecimento. (optional)
     * @param string $nome_fantasia T\u00C3\u00ADtulo Comercial do Estabelecimento. (optional)
     * @param string $cep C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP). (optional)
     * @param string $nome_logradouro Nome do Logradouro. (optional)
     * @param int $numero_endereco N\u00C3\u00BAmero do endere\u00C3\u00A7o. (optional)
     * @param string $complemento Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o. (optional)
     * @param string $bairro Nome do bairro do endere\u00C3\u00A7o. (optional)
     * @param string $cidade Nome da cidade do endere\u00C3\u00A7o. (optional)
     * @param string $uf Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o. (optional)
     * @param string $pais Nome do pa\u00C3\u00ADs. (optional)
     * @param string $data_cadastramento Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd. (optional)
     * @param string $contato Nome da pessoa para contato com o Estabelecimento. (optional)
     * @param string $email E-mail da pessoa para contato com o Estabelecimento. (optional)
     * @param int $flag_arquivo_secr_fazenda Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual. (optional)
     * @param int $flag_cartao_digitado Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o. (optional)
     * @param int $inativo Indica se o estabelecimento est\u00C3\u00A1 inativo. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET10WithHttpInfo($page = null, $limit = null, $id = null, $numero_receita_federal = null, $nome = null, $descricao = null, $nome_fantasia = null, $cep = null, $nome_logradouro = null, $numero_endereco = null, $complemento = null, $bairro = null, $cidade = null, $uf = null, $pais = null, $data_cadastramento = null, $contato = null, $email = null, $flag_arquivo_secr_fazenda = null, $flag_cartao_digitado = null, $inativo = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/estabelecimentos";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if ($numero_receita_federal !== null) {
            $queryParams['numeroReceitaFederal'] = $this->apiClient->getSerializer()->toQueryValue($numero_receita_federal);
        }// query params
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($descricao !== null) {
            $queryParams['descricao'] = $this->apiClient->getSerializer()->toQueryValue($descricao);
        }// query params
        
        if ($nome_fantasia !== null) {
            $queryParams['nomeFantasia'] = $this->apiClient->getSerializer()->toQueryValue($nome_fantasia);
        }// query params
        
        if ($cep !== null) {
            $queryParams['cep'] = $this->apiClient->getSerializer()->toQueryValue($cep);
        }// query params
        
        if ($nome_logradouro !== null) {
            $queryParams['nomeLogradouro'] = $this->apiClient->getSerializer()->toQueryValue($nome_logradouro);
        }// query params
        
        if ($numero_endereco !== null) {
            $queryParams['numeroEndereco'] = $this->apiClient->getSerializer()->toQueryValue($numero_endereco);
        }// query params
        
        if ($complemento !== null) {
            $queryParams['complemento'] = $this->apiClient->getSerializer()->toQueryValue($complemento);
        }// query params
        
        if ($bairro !== null) {
            $queryParams['bairro'] = $this->apiClient->getSerializer()->toQueryValue($bairro);
        }// query params
        
        if ($cidade !== null) {
            $queryParams['cidade'] = $this->apiClient->getSerializer()->toQueryValue($cidade);
        }// query params
        
        if ($uf !== null) {
            $queryParams['uf'] = $this->apiClient->getSerializer()->toQueryValue($uf);
        }// query params
        
        if ($pais !== null) {
            $queryParams['pais'] = $this->apiClient->getSerializer()->toQueryValue($pais);
        }// query params
        
        if ($data_cadastramento !== null) {
            $queryParams['dataCadastramento'] = $this->apiClient->getSerializer()->toQueryValue($data_cadastramento);
        }// query params
        
        if ($contato !== null) {
            $queryParams['contato'] = $this->apiClient->getSerializer()->toQueryValue($contato);
        }// query params
        
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }// query params
        
        if ($flag_arquivo_secr_fazenda !== null) {
            $queryParams['flagArquivoSecrFazenda'] = $this->apiClient->getSerializer()->toQueryValue($flag_arquivo_secr_fazenda);
        }// query params
        
        if ($flag_cartao_digitado !== null) {
            $queryParams['flagCartaoDigitado'] = $this->apiClient->getSerializer()->toQueryValue($flag_cartao_digitado);
        }// query params
        
        if ($inativo !== null) {
            $queryParams['inativo'] = $this->apiClient->getSerializer()->toQueryValue($inativo);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET23
     *
     * Lista os Terminais cadastrados no Emissor
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). (optional)
     * @param string $terminal C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal. (optional)
     * @param int $numero_estabelecimento N\u00C3\u00BAmero do estabelecimento a qual o terminal pertence. (optional)
     * @param int $id_estabelecimento N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento a qual o terminal pertence. (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageTerminalResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET23($page = null, $limit = null, $id = null, $terminal = null, $numero_estabelecimento = null, $id_estabelecimento = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET23WithHttpInfo ($page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
        return $response; 
    }


    /**
     * listarUsingGET23WithHttpInfo
     *
     * Lista os Terminais cadastrados no Emissor
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). (optional)
     * @param string $terminal C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal. (optional)
     * @param int $numero_estabelecimento N\u00C3\u00BAmero do estabelecimento a qual o terminal pertence. (optional)
     * @param int $id_estabelecimento N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento a qual o terminal pertence. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageTerminalResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET23WithHttpInfo($page = null, $limit = null, $id = null, $terminal = null, $numero_estabelecimento = null, $id_estabelecimento = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/terminais";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if ($terminal !== null) {
            $queryParams['terminal'] = $this->apiClient->getSerializer()->toQueryValue($terminal);
        }// query params
        
        if ($numero_estabelecimento !== null) {
            $queryParams['numeroEstabelecimento'] = $this->apiClient->getSerializer()->toQueryValue($numero_estabelecimento);
        }// query params
        
        if ($id_estabelecimento !== null) {
            $queryParams['idEstabelecimento'] = $this->apiClient->getSerializer()->toQueryValue($id_estabelecimento);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageTerminalResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageTerminalResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageTerminalResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
