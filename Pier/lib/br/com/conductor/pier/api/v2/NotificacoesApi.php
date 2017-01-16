<?php
/**
 * NotificacoesApi
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
 * NotificacoesApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificacoesApi
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
            $apiClient->getConfig()->setHost('https://localhost/');
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
     * @return NotificacoesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * atualizarSMSUsingPUT
     *
     * Atualizar SMS
     *
     * @param string $seu_num Seu n\u00C3\u00BAmero (required)
     * @param string $status Status (required)
     * @param string $data Data (required)
     * @param string $texto_status TextoStatus (required)
     * @param string $operadora Operadora (required)
     * @return \br.com.conductor.pier.api.v2.model\SMS
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function atualizarSMSUsingPUT($seu_num, $status, $data, $texto_status, $operadora)
    {
        list($response, $statusCode, $httpHeader) = $this->atualizarSMSUsingPUTWithHttpInfo ($seu_num, $status, $data, $texto_status, $operadora);
        return $response; 
    }


    /**
     * atualizarSMSUsingPUTWithHttpInfo
     *
     * Atualizar SMS
     *
     * @param string $seu_num Seu n\u00C3\u00BAmero (required)
     * @param string $status Status (required)
     * @param string $data Data (required)
     * @param string $texto_status TextoStatus (required)
     * @param string $operadora Operadora (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\SMS, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function atualizarSMSUsingPUTWithHttpInfo($seu_num, $status, $data, $texto_status, $operadora)
    {
        
        // verify the required parameter 'seu_num' is set
        if ($seu_num === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seu_num when calling atualizarSMSUsingPUT');
        }
        // verify the required parameter 'status' is set
        if ($status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status when calling atualizarSMSUsingPUT');
        }
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling atualizarSMSUsingPUT');
        }
        // verify the required parameter 'texto_status' is set
        if ($texto_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $texto_status when calling atualizarSMSUsingPUT');
        }
        // verify the required parameter 'operadora' is set
        if ($operadora === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operadora when calling atualizarSMSUsingPUT');
        }
  
        // parse inputs
        $resourcePath = "/api/notificacoes/sms/atualizar-status";
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
        
        if ($seu_num !== null) {
            $queryParams['SeuNum'] = $this->apiClient->getSerializer()->toQueryValue($seu_num);
        }// query params
        
        if ($status !== null) {
            $queryParams['Status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        
        if ($data !== null) {
            $queryParams['Data'] = $this->apiClient->getSerializer()->toQueryValue($data);
        }// query params
        
        if ($texto_status !== null) {
            $queryParams['TextoStatus'] = $this->apiClient->getSerializer()->toQueryValue($texto_status);
        }// query params
        
        if ($operadora !== null) {
            $queryParams['Operadora'] = $this->apiClient->getSerializer()->toQueryValue($operadora);
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\SMS'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\SMS', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\SMS', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * responderSMSUsingPUT
     *
     * Responder SMS
     *
     * @param string $seunum Seu n\u00C3\u00BAmero (required)
     * @param string $data Data (required)
     * @param string $texto_sms_mo TextoStatus (required)
     * @return \br.com.conductor.pier.api.v2.model\SMS
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function responderSMSUsingPUT($seunum, $data, $texto_sms_mo)
    {
        list($response, $statusCode, $httpHeader) = $this->responderSMSUsingPUTWithHttpInfo ($seunum, $data, $texto_sms_mo);
        return $response; 
    }


    /**
     * responderSMSUsingPUTWithHttpInfo
     *
     * Responder SMS
     *
     * @param string $seunum Seu n\u00C3\u00BAmero (required)
     * @param string $data Data (required)
     * @param string $texto_sms_mo TextoStatus (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\SMS, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function responderSMSUsingPUTWithHttpInfo($seunum, $data, $texto_sms_mo)
    {
        
        // verify the required parameter 'seunum' is set
        if ($seunum === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seunum when calling responderSMSUsingPUT');
        }
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling responderSMSUsingPUT');
        }
        // verify the required parameter 'texto_sms_mo' is set
        if ($texto_sms_mo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $texto_sms_mo when calling responderSMSUsingPUT');
        }
  
        // parse inputs
        $resourcePath = "/api/notificacoes/sms/responder";
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
        
        if ($seunum !== null) {
            $queryParams['Seunum'] = $this->apiClient->getSerializer()->toQueryValue($seunum);
        }// query params
        
        if ($data !== null) {
            $queryParams['Data'] = $this->apiClient->getSerializer()->toQueryValue($data);
        }// query params
        
        if ($texto_sms_mo !== null) {
            $queryParams['TextoSmsMo'] = $this->apiClient->getSerializer()->toQueryValue($texto_sms_mo);
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\SMS'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\SMS', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\SMS', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}