<?php
/**
 * StatusContaApi
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
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

namespace br.com.conductor.pier.api.v1_1;

use \br.com.conductor.pier.api.v1_1.invoker\Configuration;
use \br.com.conductor.pier.api.v1_1.invoker\ApiClient;
use \br.com.conductor.pier.api.v1_1.invoker\ApiException;
use \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer;

/**
 * StatusContaApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatusContaApi
{

    /**
     * API Client
     * @var \br.com.conductor.pier.api.v1_1.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \br.com.conductor.pier.api.v1_1.invoker\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \br.com.conductor.pier.api.v1_1.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \br.com.conductor.pier.api.v1_1.invoker\ApiClient $apiClient set the API client
     * @return StatusContaApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarUsingGET2
     *
     * Apresenta os dados de um determinado Status Conta
     *
     * @param int $id_status_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id). (required)
     * @return \br.com.conductor.pier.api.v1_1.model\StatusConta
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET2($id_status_conta)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET2WithHttpInfo ($id_status_conta);
        return $response; 
    }


    /**
     * consultarUsingGET2WithHttpInfo
     *
     * Apresenta os dados de um determinado Status Conta
     *
     * @param int $id_status_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id). (required)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\StatusConta, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET2WithHttpInfo($id_status_conta)
    {
        
        // verify the required parameter 'id_status_conta' is set
        if ($id_status_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_status_conta when calling consultarUsingGET2');
        }
  
        // parse inputs
        $resourcePath = "/api/status-contas/{id_status_conta}";
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
        
        if ($id_status_conta !== null) {
            $resourcePath = str_replace(
                "{" . "id_status_conta" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_status_conta),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\StatusConta'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\StatusConta', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\StatusConta', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET2
     *
     * Lista os Status Contas cadastrados para o Emissor 
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id). (optional)
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status da Conta. (optional)
     * @param int $flag_altera_limite Par\u00C3\u00A2metro que define se o Status da Conta permite realizar a Altera\u00C3\u00A7\u00C3\u00A3o de Limites do Portador, sendo: 0: Inativo e 1: Ativo. (optional)
     * @param string $mensagem_consulta_negada Apresenta o texto com o motivo que ser\u00C3\u00A1 apresentado na resposta as opera\u00C3\u00A7\u00C3\u00B5es de Listar e Consultar LimitesDisponibilidades. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return \br.com.conductor.pier.api.v1_1.model\PageStatusContas
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET2($id = null, $nome = null, $flag_altera_limite = null, $mensagem_consulta_negada = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET2WithHttpInfo ($id, $nome, $flag_altera_limite, $mensagem_consulta_negada, $page, $limit);
        return $response; 
    }


    /**
     * listarUsingGET2WithHttpInfo
     *
     * Lista os Status Contas cadastrados para o Emissor 
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id). (optional)
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status da Conta. (optional)
     * @param int $flag_altera_limite Par\u00C3\u00A2metro que define se o Status da Conta permite realizar a Altera\u00C3\u00A7\u00C3\u00A3o de Limites do Portador, sendo: 0: Inativo e 1: Ativo. (optional)
     * @param string $mensagem_consulta_negada Apresenta o texto com o motivo que ser\u00C3\u00A1 apresentado na resposta as opera\u00C3\u00A7\u00C3\u00B5es de Listar e Consultar LimitesDisponibilidades. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\PageStatusContas, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET2WithHttpInfo($id = null, $nome = null, $flag_altera_limite = null, $mensagem_consulta_negada = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/status-contas";
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
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($flag_altera_limite !== null) {
            $queryParams['flagAlteraLimite'] = $this->apiClient->getSerializer()->toQueryValue($flag_altera_limite);
        }// query params
        
        if ($mensagem_consulta_negada !== null) {
            $queryParams['mensagemConsultaNegada'] = $this->apiClient->getSerializer()->toQueryValue($mensagem_consulta_negada);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\PageStatusContas'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\PageStatusContas', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\PageStatusContas', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
