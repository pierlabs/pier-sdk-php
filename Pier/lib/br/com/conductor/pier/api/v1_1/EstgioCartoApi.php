<?php
/**
 * EstgioCartoApi
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
 * EstgioCartoApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstgioCartoApi
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
     * @return EstgioCartoApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarEstagioCartaoUsingGET
     *
     * Apresenta os dados de um determinado Estagio Cart\u00C3\u00A3o 
     *
     * @param int $id_estagio_cartao C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). (required)
     * @return \br.com.conductor.pier.api.v1_1.model\EstGioCartO
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarEstagioCartaoUsingGET($id_estagio_cartao)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarEstagioCartaoUsingGETWithHttpInfo ($id_estagio_cartao);
        return $response; 
    }


    /**
     * consultarEstagioCartaoUsingGETWithHttpInfo
     *
     * Apresenta os dados de um determinado Estagio Cart\u00C3\u00A3o 
     *
     * @param int $id_estagio_cartao C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). (required)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\EstGioCartO, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarEstagioCartaoUsingGETWithHttpInfo($id_estagio_cartao)
    {
        
        // verify the required parameter 'id_estagio_cartao' is set
        if ($id_estagio_cartao === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_estagio_cartao when calling consultarEstagioCartaoUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/estagios-cartoes/{id_estagio_cartao}";
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
        
        if ($id_estagio_cartao !== null) {
            $resourcePath = str_replace(
                "{" . "id_estagio_cartao" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_estagio_cartao),
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
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\EstGioCartO'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\EstGioCartO', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\EstGioCartO', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarEstagiosCartoesUsingGET
     *
     * Lista as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gios do Cart\u00C3\u00A3o 
     *
     * @param int $id Id do est\u00C3\u00A1gio cart\u00C3\u00A3o (required)
     * @param string $nome Nome do est\u00C3\u00A1gio cart\u00C3\u00A3o (required)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return \br.com.conductor.pier.api.v1_1.model\ListaDeEstGiosCartEs
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarEstagiosCartoesUsingGET($id, $nome, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarEstagiosCartoesUsingGETWithHttpInfo ($id, $nome, $page, $limit);
        return $response; 
    }


    /**
     * listarEstagiosCartoesUsingGETWithHttpInfo
     *
     * Lista as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gios do Cart\u00C3\u00A3o 
     *
     * @param int $id Id do est\u00C3\u00A1gio cart\u00C3\u00A3o (required)
     * @param string $nome Nome do est\u00C3\u00A1gio cart\u00C3\u00A3o (required)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\ListaDeEstGiosCartEs, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarEstagiosCartoesUsingGETWithHttpInfo($id, $nome, $page = null, $limit = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling listarEstagiosCartoesUsingGET');
        }
        // verify the required parameter 'nome' is set
        if ($nome === null) {
            throw new \InvalidArgumentException('Missing the required parameter $nome when calling listarEstagiosCartoesUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/estagios-cartoes";
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
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\ListaDeEstGiosCartEs'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\ListaDeEstGiosCartEs', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\ListaDeEstGiosCartEs', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
