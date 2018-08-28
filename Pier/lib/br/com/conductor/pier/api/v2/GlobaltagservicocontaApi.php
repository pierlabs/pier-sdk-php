<?php
/**
 * GlobaltagservicocontaApi
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
 * GlobaltagservicocontaApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobaltagservicocontaApi
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
     * @return GlobaltagservicocontaApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * ativarAnuidadeUsingPOST
     *
     * {{{conta_resource_ativar_anuidade}}}
     *
     * @param int $id {{{conta_resource_ativar_anuidade_param_id}}} (required)
     * @param int $id_anuidade {{{anuidade_request_id_anuidade_value}}} (required)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param string $ddd {{{anuidade_request_d_d_d_value}}} (optional)
     * @param string $celular {{{anuidade_request_celular_value}}} (optional)
     * @param int $id_operadora {{{anuidade_request_id_operadora_value}}} (optional)
     * @param int $id_origem_comercial {{{anuidade_request_id_origem_comercial_value}}} (optional)
     * @return object
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarAnuidadeUsingPOST($id, $id_anuidade, $sort = null, $page = null, $limit = null, $ddd = null, $celular = null, $id_operadora = null, $id_origem_comercial = null)
    {
        list($response, $statusCode, $httpHeader) = $this->ativarAnuidadeUsingPOSTWithHttpInfo ($id, $id_anuidade, $sort, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial);
        return $response; 
    }


    /**
     * ativarAnuidadeUsingPOSTWithHttpInfo
     *
     * {{{conta_resource_ativar_anuidade}}}
     *
     * @param int $id {{{conta_resource_ativar_anuidade_param_id}}} (required)
     * @param int $id_anuidade {{{anuidade_request_id_anuidade_value}}} (required)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param string $ddd {{{anuidade_request_d_d_d_value}}} (optional)
     * @param string $celular {{{anuidade_request_celular_value}}} (optional)
     * @param int $id_operadora {{{anuidade_request_id_operadora_value}}} (optional)
     * @param int $id_origem_comercial {{{anuidade_request_id_origem_comercial_value}}} (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarAnuidadeUsingPOSTWithHttpInfo($id, $id_anuidade, $sort = null, $page = null, $limit = null, $ddd = null, $celular = null, $id_operadora = null, $id_origem_comercial = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ativarAnuidadeUsingPOST');
        }
        // verify the required parameter 'id_anuidade' is set
        if ($id_anuidade === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_anuidade when calling ativarAnuidadeUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/atribuir-anuidade";
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
        
        if ($id_anuidade !== null) {
            $queryParams['idAnuidade'] = $this->apiClient->getSerializer()->toQueryValue($id_anuidade);
        }// query params
        
        if ($ddd !== null) {
            $queryParams['DDD'] = $this->apiClient->getSerializer()->toQueryValue($ddd);
        }// query params
        
        if ($celular !== null) {
            $queryParams['celular'] = $this->apiClient->getSerializer()->toQueryValue($celular);
        }// query params
        
        if ($id_operadora !== null) {
            $queryParams['idOperadora'] = $this->apiClient->getSerializer()->toQueryValue($id_operadora);
        }// query params
        
        if ($id_origem_comercial !== null) {
            $queryParams['idOrigemComercial'] = $this->apiClient->getSerializer()->toQueryValue($id_origem_comercial);
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, 'object'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * ativarEnvioFaturaEmailUsingPOST
     *
     * {{{conta_resource_ativar_envio_fatura_email}}}
     *
     * @param int $id {{{conta_resource_ativar_envio_fatura_email_param_id}}} (required)
     * @return object
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarEnvioFaturaEmailUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->ativarEnvioFaturaEmailUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * ativarEnvioFaturaEmailUsingPOSTWithHttpInfo
     *
     * {{{conta_resource_ativar_envio_fatura_email}}}
     *
     * @param int $id {{{conta_resource_ativar_envio_fatura_email_param_id}}} (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarEnvioFaturaEmailUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ativarEnvioFaturaEmailUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/ativar-fatura-email";
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, 'object'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * desativarEnvioFaturaEmailUsingPOST
     *
     * {{{conta_resource_desativar_envio_fatura_email}}}
     *
     * @param int $id {{{conta_resource_desativar_envio_fatura_email_param_id}}} (required)
     * @return object
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarEnvioFaturaEmailUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->desativarEnvioFaturaEmailUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * desativarEnvioFaturaEmailUsingPOSTWithHttpInfo
     *
     * {{{conta_resource_desativar_envio_fatura_email}}}
     *
     * @param int $id {{{conta_resource_desativar_envio_fatura_email_param_id}}} (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarEnvioFaturaEmailUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling desativarEnvioFaturaEmailUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/desativar-fatura-email";
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, 'object'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarAnuidadesUsingGET
     *
     * {{{anuidade_resource_listar_anuidades}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageAnuidadeResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarAnuidadesUsingGET($sort = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarAnuidadesUsingGETWithHttpInfo ($sort, $page, $limit);
        return $response; 
    }


    /**
     * listarAnuidadesUsingGETWithHttpInfo
     *
     * {{{anuidade_resource_listar_anuidades}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageAnuidadeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarAnuidadesUsingGETWithHttpInfo($sort = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/anuidades";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageAnuidadeResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageAnuidadeResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageAnuidadeResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarOperadorasTelefonicasUsingGET
     *
     * {{{operadora_resource_listar_operadoras_telefonicas}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageOperadoraResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarOperadorasTelefonicasUsingGET($sort = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarOperadorasTelefonicasUsingGETWithHttpInfo ($sort, $page, $limit);
        return $response; 
    }


    /**
     * listarOperadorasTelefonicasUsingGETWithHttpInfo
     *
     * {{{operadora_resource_listar_operadoras_telefonicas}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageOperadoraResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarOperadorasTelefonicasUsingGETWithHttpInfo($sort = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/operadoras-telefonicas";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageOperadoraResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageOperadoraResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageOperadoraResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
