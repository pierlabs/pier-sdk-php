<?php
/**
 * GlobaltagajustefinanceiroApi
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
 * GlobaltagajustefinanceiroApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobaltagajustefinanceiroApi
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
     * @return GlobaltagajustefinanceiroApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * ajustarContaUsingPOST
     *
     * {{{ajuste_financeiro_resource_ajustar_conta}}}
     *
     * @param int $id_tipo_ajuste {{{ajuste_financeiro_persist_id_tipo_ajuste_value}}} (required)
     * @param string $data_ajuste {{{ajuste_financeiro_persist_data_ajuste_value}}} (required)
     * @param Number $valor_ajuste {{{ajuste_financeiro_persist_valor_ajuste_value}}} (required)
     * @param int $id_conta {{{ajuste_financeiro_persist_id_conta_value}}} (required)
     * @param string $identificador_externo {{{ajuste_financeiro_persist_identificador_externo_value}}} (optional)
     * @param int $id_transacao_original {{{ajuste_persist_id_transacao_original}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ajustarContaUsingPOST($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo = null, $id_transacao_original = null)
    {
        list($response, $statusCode, $httpHeader) = $this->ajustarContaUsingPOSTWithHttpInfo ($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo, $id_transacao_original);
        return $response; 
    }


    /**
     * ajustarContaUsingPOSTWithHttpInfo
     *
     * {{{ajuste_financeiro_resource_ajustar_conta}}}
     *
     * @param int $id_tipo_ajuste {{{ajuste_financeiro_persist_id_tipo_ajuste_value}}} (required)
     * @param string $data_ajuste {{{ajuste_financeiro_persist_data_ajuste_value}}} (required)
     * @param Number $valor_ajuste {{{ajuste_financeiro_persist_valor_ajuste_value}}} (required)
     * @param int $id_conta {{{ajuste_financeiro_persist_id_conta_value}}} (required)
     * @param string $identificador_externo {{{ajuste_financeiro_persist_identificador_externo_value}}} (optional)
     * @param int $id_transacao_original {{{ajuste_persist_id_transacao_original}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ajustarContaUsingPOSTWithHttpInfo($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo = null, $id_transacao_original = null)
    {
        
        // verify the required parameter 'id_tipo_ajuste' is set
        if ($id_tipo_ajuste === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_tipo_ajuste when calling ajustarContaUsingPOST');
        }
        // verify the required parameter 'data_ajuste' is set
        if ($data_ajuste === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_ajuste when calling ajustarContaUsingPOST');
        }
        // verify the required parameter 'valor_ajuste' is set
        if ($valor_ajuste === null) {
            throw new \InvalidArgumentException('Missing the required parameter $valor_ajuste when calling ajustarContaUsingPOST');
        }
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling ajustarContaUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/ajustes-financeiros";
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
        
        if ($id_tipo_ajuste !== null) {
            $queryParams['idTipoAjuste'] = $this->apiClient->getSerializer()->toQueryValue($id_tipo_ajuste);
        }// query params
        
        if ($data_ajuste !== null) {
            $queryParams['dataAjuste'] = $this->apiClient->getSerializer()->toQueryValue($data_ajuste);
        }// query params
        
        if ($valor_ajuste !== null) {
            $queryParams['valorAjuste'] = $this->apiClient->getSerializer()->toQueryValue($valor_ajuste);
        }// query params
        
        if ($identificador_externo !== null) {
            $queryParams['identificadorExterno'] = $this->apiClient->getSerializer()->toQueryValue($identificador_externo);
        }// query params
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($id_transacao_original !== null) {
            $queryParams['idTransacaoOriginal'] = $this->apiClient->getSerializer()->toQueryValue($id_transacao_original);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET3
     *
     * {{{ajuste_financeiro_resource_consultar}}}
     *
     * @param int $id {{{ajuste_financeiro_resource_consultar_param_id}}} (required)
     * @return \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET3($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET3WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET3WithHttpInfo
     *
     * {{{ajuste_financeiro_resource_consultar}}}
     *
     * @param int $id {{{ajuste_financeiro_resource_consultar_param_id}}} (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET3WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET3');
        }
  
        // parse inputs
        $resourcePath = "/api/ajustes-financeiros/{id}";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET2
     *
     * {{{ajuste_financeiro_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $id_tipo_ajuste {{{ajuste_request_id_tipo_ajuste_value}}} (optional)
     * @param string $data_ajuste {{{ajuste_request_data_ajuste_value}}} (optional)
     * @param Number $valor_ajuste {{{ajuste_request_valor_ajuste_value}}} (optional)
     * @param string $identificador_externo {{{ajuste_request_identificador_externo_value}}} (optional)
     * @param int $id_conta {{{ajuste_request_id_conta_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageAjusteResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET2($sort = null, $page = null, $limit = null, $id_tipo_ajuste = null, $data_ajuste = null, $valor_ajuste = null, $identificador_externo = null, $id_conta = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET2WithHttpInfo ($sort, $page, $limit, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_conta);
        return $response; 
    }


    /**
     * listarUsingGET2WithHttpInfo
     *
     * {{{ajuste_financeiro_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $id_tipo_ajuste {{{ajuste_request_id_tipo_ajuste_value}}} (optional)
     * @param string $data_ajuste {{{ajuste_request_data_ajuste_value}}} (optional)
     * @param Number $valor_ajuste {{{ajuste_request_valor_ajuste_value}}} (optional)
     * @param string $identificador_externo {{{ajuste_request_identificador_externo_value}}} (optional)
     * @param int $id_conta {{{ajuste_request_id_conta_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageAjusteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET2WithHttpInfo($sort = null, $page = null, $limit = null, $id_tipo_ajuste = null, $data_ajuste = null, $valor_ajuste = null, $identificador_externo = null, $id_conta = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/ajustes-financeiros";
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
        
        if ($id_tipo_ajuste !== null) {
            $queryParams['idTipoAjuste'] = $this->apiClient->getSerializer()->toQueryValue($id_tipo_ajuste);
        }// query params
        
        if ($data_ajuste !== null) {
            $queryParams['dataAjuste'] = $this->apiClient->getSerializer()->toQueryValue($data_ajuste);
        }// query params
        
        if ($valor_ajuste !== null) {
            $queryParams['valorAjuste'] = $this->apiClient->getSerializer()->toQueryValue($valor_ajuste);
        }// query params
        
        if ($identificador_externo !== null) {
            $queryParams['identificadorExterno'] = $this->apiClient->getSerializer()->toQueryValue($identificador_externo);
        }// query params
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageAjusteResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageAjusteResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageAjusteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}