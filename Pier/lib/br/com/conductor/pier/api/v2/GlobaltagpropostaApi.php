<?php
/**
 * GlobaltagpropostaApi
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
 * GlobaltagpropostaApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobaltagpropostaApi
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
     * @return GlobaltagpropostaApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * alterarUsingPOST
     *
     * {{{proposta_resource_alterar_status}}}
     *
     * @param int $id {{{proposta_resource_alterar_status_param_id}}} (required)
     * @param \br.com.conductor.pier.api.v2.model\StatusPropostaUpdate $update update (required)
     * @return \br.com.conductor.pier.api.v2.model\PropostaResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPOST($id, $update)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarUsingPOSTWithHttpInfo ($id, $update);
        return $response; 
    }


    /**
     * alterarUsingPOSTWithHttpInfo
     *
     * {{{proposta_resource_alterar_status}}}
     *
     * @param int $id {{{proposta_resource_alterar_status_param_id}}} (required)
     * @param \br.com.conductor.pier.api.v2.model\StatusPropostaUpdate $update update (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\PropostaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPOSTWithHttpInfo($id, $update)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarUsingPOST');
        }
        // verify the required parameter 'update' is set
        if ($update === null) {
            throw new \InvalidArgumentException('Missing the required parameter $update when calling alterarUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/propostas/{id}/alterar-status";
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

        
        // body params
        $_tempBody = null;
        if (isset($update)) {
            $_tempBody = $update;
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PropostaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PropostaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PropostaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET33
     *
     * {{{proposta_resource_consultar}}}
     *
     * @param int $id {{{proposta_resource_consultar_param_id}}} (required)
     * @return \br.com.conductor.pier.api.v2.model\PropostaResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET33($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET33WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET33WithHttpInfo
     *
     * {{{proposta_resource_consultar}}}
     *
     * @param int $id {{{proposta_resource_consultar_param_id}}} (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\PropostaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET33WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET33');
        }
  
        // parse inputs
        $resourcePath = "/api/propostas/{id}";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PropostaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PropostaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PropostaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarStatusPropostaUsingGET
     *
     * {{{proposta_resource_listar_status}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $status {{{status_proposta_request_status_value}}} (optional)
     * @param bool $flag_permite_alteracao {{{status_proposta_request_flag_permite_alteracao_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarStatusPropostaUsingGET($sort = null, $page = null, $limit = null, $status = null, $flag_permite_alteracao = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarStatusPropostaUsingGETWithHttpInfo ($sort, $page, $limit, $status, $flag_permite_alteracao);
        return $response; 
    }


    /**
     * listarStatusPropostaUsingGETWithHttpInfo
     *
     * {{{proposta_resource_listar_status}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $status {{{status_proposta_request_status_value}}} (optional)
     * @param bool $flag_permite_alteracao {{{status_proposta_request_flag_permite_alteracao_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarStatusPropostaUsingGETWithHttpInfo($sort = null, $page = null, $limit = null, $status = null, $flag_permite_alteracao = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/status-propostas";
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
        
        if (is_array($sort)) {
            $sort = $this->apiClient->getSerializer()->serializeCollection($sort, 'multi', true);
        }
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        
        if ($flag_permite_alteracao !== null) {
            $queryParams['flagPermiteAlteracao'] = $this->apiClient->getSerializer()->toQueryValue($flag_permite_alteracao);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET44
     *
     * {{{proposta_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $status {{{proposta_request_status_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PagePropostaResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET44($sort = null, $page = null, $limit = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET44WithHttpInfo ($sort, $page, $limit, $status);
        return $response; 
    }


    /**
     * listarUsingGET44WithHttpInfo
     *
     * {{{proposta_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $status {{{proposta_request_status_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PagePropostaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET44WithHttpInfo($sort = null, $page = null, $limit = null, $status = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/propostas";
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
        
        if (is_array($sort)) {
            $sort = $this->apiClient->getSerializer()->serializeCollection($sort, 'multi', true);
        }
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PagePropostaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PagePropostaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PagePropostaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
