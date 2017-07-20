<?php
/**
 * AutorizacoesApi
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
 * AutorizacoesApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutorizacoesApi
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
     * @return AutorizacoesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * autorizarUsingPOST
     *
     * Autoriza transa\u00C3\u00A7\u00C3\u00A3o financeira
     *
     * @param \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest $autorizacao_on_us_request autorizacaoOnUsRequest (required)
     * @return \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function autorizarUsingPOST($autorizacao_on_us_request)
    {
        list($response, $statusCode, $httpHeader) = $this->autorizarUsingPOSTWithHttpInfo ($autorizacao_on_us_request);
        return $response; 
    }


    /**
     * autorizarUsingPOSTWithHttpInfo
     *
     * Autoriza transa\u00C3\u00A7\u00C3\u00A3o financeira
     *
     * @param \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest $autorizacao_on_us_request autorizacaoOnUsRequest (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function autorizarUsingPOSTWithHttpInfo($autorizacao_on_us_request)
    {
        
        // verify the required parameter 'autorizacao_on_us_request' is set
        if ($autorizacao_on_us_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $autorizacao_on_us_request when calling autorizarUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/autorizar-transacao";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($autorizacao_on_us_request)) {
            $_tempBody = $autorizacao_on_us_request;
        }
  
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * cancelarUsingPOST2
     *
     * Cancela transa\u00C3\u00A7\u00C3\u00A3o financeira
     *
     * @param \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest $cancelamento_request cancelamentoRequest (required)
     * @return \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function cancelarUsingPOST2($cancelamento_request)
    {
        list($response, $statusCode, $httpHeader) = $this->cancelarUsingPOST2WithHttpInfo ($cancelamento_request);
        return $response; 
    }


    /**
     * cancelarUsingPOST2WithHttpInfo
     *
     * Cancela transa\u00C3\u00A7\u00C3\u00A3o financeira
     *
     * @param \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest $cancelamento_request cancelamentoRequest (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function cancelarUsingPOST2WithHttpInfo($cancelamento_request)
    {
        
        // verify the required parameter 'cancelamento_request' is set
        if ($cancelamento_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cancelamento_request when calling cancelarUsingPOST2');
        }
  
        // parse inputs
        $resourcePath = "/api/cancelar-transacao";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($cancelamento_request)) {
            $_tempBody = $cancelamento_request;
        }
  
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarCodigosProcessamentoAutorizacaoUsingGET
     *
     * Retorna c\u00C3\u00B3digos de processamento de autoriza\u00C3\u00A7\u00C3\u00A3o
     *
     * @return object[]
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarCodigosProcessamentoAutorizacaoUsingGET()
    {
        list($response, $statusCode, $httpHeader) = $this->listarCodigosProcessamentoAutorizacaoUsingGETWithHttpInfo ();
        return $response; 
    }


    /**
     * listarCodigosProcessamentoAutorizacaoUsingGETWithHttpInfo
     *
     * Retorna c\u00C3\u00B3digos de processamento de autoriza\u00C3\u00A7\u00C3\u00A3o
     *
     * @return Array of object[], HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarCodigosProcessamentoAutorizacaoUsingGETWithHttpInfo()
    {
        
  
        // parse inputs
        $resourcePath = "/api/consultar-codigos-processamento-autorizacao";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
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
                $headerParams, 'object[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'object[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'object[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * simularUsingPOST
     *
     * Simula planos de transa\u00C3\u00A7\u00C3\u00B5es
     *
     * @param \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest $transacoes_request transacoesRequest (required)
     * @return \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function simularUsingPOST($transacoes_request)
    {
        list($response, $statusCode, $httpHeader) = $this->simularUsingPOSTWithHttpInfo ($transacoes_request);
        return $response; 
    }


    /**
     * simularUsingPOSTWithHttpInfo
     *
     * Simula planos de transa\u00C3\u00A7\u00C3\u00B5es
     *
     * @param \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest $transacoes_request transacoesRequest (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function simularUsingPOSTWithHttpInfo($transacoes_request)
    {
        
        // verify the required parameter 'transacoes_request' is set
        if ($transacoes_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transacoes_request when calling simularUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/simular-transacao";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($transacoes_request)) {
            $_tempBody = $transacoes_request;
        }
  
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
