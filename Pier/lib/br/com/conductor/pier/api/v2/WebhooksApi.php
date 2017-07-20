<?php
/**
 * WebhooksApi
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
 * WebhooksApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhooksApi
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
     * @return WebhooksApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * alterarUsingPUT10
     *
     * Alterar Webhook
     *
     * @param int $id C\u00C3\u00B3digo identificador do Webhook (required)
     * @param string $tipo_evento TipoEvento a ser chamado pelo WebHook (required)
     * @param string $url URL que a ser consumida pelo WebHook (required)
     * @return \br.com.conductor.pier.api.v2.model\WebHookResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT10($id, $tipo_evento, $url)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarUsingPUT10WithHttpInfo ($id, $tipo_evento, $url);
        return $response; 
    }


    /**
     * alterarUsingPUT10WithHttpInfo
     *
     * Alterar Webhook
     *
     * @param int $id C\u00C3\u00B3digo identificador do Webhook (required)
     * @param string $tipo_evento TipoEvento a ser chamado pelo WebHook (required)
     * @param string $url URL que a ser consumida pelo WebHook (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\WebHookResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT10WithHttpInfo($id, $tipo_evento, $url)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarUsingPUT10');
        }
        // verify the required parameter 'tipo_evento' is set
        if ($tipo_evento === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tipo_evento when calling alterarUsingPUT10');
        }
        // verify the required parameter 'url' is set
        if ($url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $url when calling alterarUsingPUT10');
        }
  
        // parse inputs
        $resourcePath = "/api/webhooks/{id}";
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
        
        if ($tipo_evento !== null) {
            $queryParams['tipoEvento'] = $this->apiClient->getSerializer()->toQueryValue($tipo_evento);
        }// query params
        
        if ($url !== null) {
            $queryParams['url'] = $this->apiClient->getSerializer()->toQueryValue($url);
        }
        
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\WebHookResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\WebHookResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\WebHookResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET27
     *
     * Consultar Webhook
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\WebHookResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET27($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET27WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET27WithHttpInfo
     *
     * Consultar Webhook
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\WebHookResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET27WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET27');
        }
  
        // parse inputs
        $resourcePath = "/api/webhooks/{id}";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\WebHookResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\WebHookResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\WebHookResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET31
     *
     * Lista os Webhooks
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id Id do WebHook (optional)
     * @param string $tipo_evento TipoEvento a ser chamado pelo WebHook (optional)
     * @param string $metodo M\u00C3\u00A9todo que a ser chamado pelo WebHook (optional)
     * @param string $url URL que a ser consumida pelo WebHook (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageWebHookResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET31($page = null, $limit = null, $id = null, $tipo_evento = null, $metodo = null, $url = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET31WithHttpInfo ($page, $limit, $id, $tipo_evento, $metodo, $url);
        return $response; 
    }


    /**
     * listarUsingGET31WithHttpInfo
     *
     * Lista os Webhooks
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id Id do WebHook (optional)
     * @param string $tipo_evento TipoEvento a ser chamado pelo WebHook (optional)
     * @param string $metodo M\u00C3\u00A9todo que a ser chamado pelo WebHook (optional)
     * @param string $url URL que a ser consumida pelo WebHook (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageWebHookResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET31WithHttpInfo($page = null, $limit = null, $id = null, $tipo_evento = null, $metodo = null, $url = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/webhooks";
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
        
        if ($tipo_evento !== null) {
            $queryParams['tipoEvento'] = $this->apiClient->getSerializer()->toQueryValue($tipo_evento);
        }// query params
        
        if ($metodo !== null) {
            $queryParams['metodo'] = $this->apiClient->getSerializer()->toQueryValue($metodo);
        }// query params
        
        if ($url !== null) {
            $queryParams['url'] = $this->apiClient->getSerializer()->toQueryValue($url);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageWebHookResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageWebHookResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageWebHookResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * salvarUsingPOST16
     *
     * Salvar Webhook
     *
     * @param string $tipo_evento TipoEvento a ser chamado pelo WebHook (required)
     * @param string $url URL que a ser consumida pelo WebHook (required)
     * @return \br.com.conductor.pier.api.v2.model\WebHookResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST16($tipo_evento, $url)
    {
        list($response, $statusCode, $httpHeader) = $this->salvarUsingPOST16WithHttpInfo ($tipo_evento, $url);
        return $response; 
    }


    /**
     * salvarUsingPOST16WithHttpInfo
     *
     * Salvar Webhook
     *
     * @param string $tipo_evento TipoEvento a ser chamado pelo WebHook (required)
     * @param string $url URL que a ser consumida pelo WebHook (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\WebHookResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST16WithHttpInfo($tipo_evento, $url)
    {
        
        // verify the required parameter 'tipo_evento' is set
        if ($tipo_evento === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tipo_evento when calling salvarUsingPOST16');
        }
        // verify the required parameter 'url' is set
        if ($url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $url when calling salvarUsingPOST16');
        }
  
        // parse inputs
        $resourcePath = "/api/webhooks";
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
        
        if ($tipo_evento !== null) {
            $queryParams['tipoEvento'] = $this->apiClient->getSerializer()->toQueryValue($tipo_evento);
        }// query params
        
        if ($url !== null) {
            $queryParams['url'] = $this->apiClient->getSerializer()->toQueryValue($url);
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\WebHookResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\WebHookResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\WebHookResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
