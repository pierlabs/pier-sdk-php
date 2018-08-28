<?php
/**
 * GlobaltagdebitorecorrenteApi
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
 * GlobaltagdebitorecorrenteApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobaltagdebitorecorrenteApi
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
     * @return GlobaltagdebitorecorrenteApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * aderirDebitoRecorrenteUsingPOST
     *
     * {{{conta_debito_recorrente_resource_aderir}}}
     *
     * @param \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_ $conta_debito_recorrente_persist contaDebitoRecorrentePersist (required)
     * @return \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function aderirDebitoRecorrenteUsingPOST($conta_debito_recorrente_persist)
    {
        list($response, $statusCode, $httpHeader) = $this->aderirDebitoRecorrenteUsingPOSTWithHttpInfo ($conta_debito_recorrente_persist);
        return $response; 
    }


    /**
     * aderirDebitoRecorrenteUsingPOSTWithHttpInfo
     *
     * {{{conta_debito_recorrente_resource_aderir}}}
     *
     * @param \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_ $conta_debito_recorrente_persist contaDebitoRecorrentePersist (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function aderirDebitoRecorrenteUsingPOSTWithHttpInfo($conta_debito_recorrente_persist)
    {
        
        // verify the required parameter 'conta_debito_recorrente_persist' is set
        if ($conta_debito_recorrente_persist === null) {
            throw new \InvalidArgumentException('Missing the required parameter $conta_debito_recorrente_persist when calling aderirDebitoRecorrenteUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/debitos-recorrentes";
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
        if (isset($conta_debito_recorrente_persist)) {
            $_tempBody = $conta_debito_recorrente_persist;
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * cancelarDebitoRecorrenteUsingPOST
     *
     * {{{conta_debito_recorrente_resource_cancelar}}}
     *
     * @param int $id {{{conta_debito_recorrente_resource_cancelar_param_id_debito_recorrente}}} (required)
     * @param \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_ $conta_debito_recorrente_persist contaDebitoRecorrentePersist (required)
     * @return \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function cancelarDebitoRecorrenteUsingPOST($id, $conta_debito_recorrente_persist)
    {
        list($response, $statusCode, $httpHeader) = $this->cancelarDebitoRecorrenteUsingPOSTWithHttpInfo ($id, $conta_debito_recorrente_persist);
        return $response; 
    }


    /**
     * cancelarDebitoRecorrenteUsingPOSTWithHttpInfo
     *
     * {{{conta_debito_recorrente_resource_cancelar}}}
     *
     * @param int $id {{{conta_debito_recorrente_resource_cancelar_param_id_debito_recorrente}}} (required)
     * @param \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_ $conta_debito_recorrente_persist contaDebitoRecorrentePersist (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function cancelarDebitoRecorrenteUsingPOSTWithHttpInfo($id, $conta_debito_recorrente_persist)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling cancelarDebitoRecorrenteUsingPOST');
        }
        // verify the required parameter 'conta_debito_recorrente_persist' is set
        if ($conta_debito_recorrente_persist === null) {
            throw new \InvalidArgumentException('Missing the required parameter $conta_debito_recorrente_persist when calling cancelarDebitoRecorrenteUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/debitos-recorrentes/{id}/cancelar";
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
        if (isset($conta_debito_recorrente_persist)) {
            $_tempBody = $conta_debito_recorrente_persist;
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET18
     *
     * {{{conta_debito_recorrente_resource_listar}}}
     *
     * @param int $id_conta {{{conta_debito_recorrente_resource_listar_param_id_conta}}} (required)
     * @param int $id_tipo_debito_recorrente {{{conta_debito_recorrente_resource_listar_param_id_tipo_debito_recorrente}}} (optional)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param string $data_hora_inicio {{{conta_debito_recorrente_request_data_hora_inicio_value}}} (optional)
     * @param string $data_hora_fim {{{conta_debito_recorrente_request_data_hora_fim_value}}} (optional)
     * @param bool $ativo {{{conta_debito_recorrente_request_ativo_value}}} (optional)
     * @param string $data_hora_ultimo_pagamento {{{conta_debito_recorrente_request_data_hora_ultimo_pagamento_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET18($id_conta, $id_tipo_debito_recorrente = null, $sort = null, $page = null, $limit = null, $data_hora_inicio = null, $data_hora_fim = null, $ativo = null, $data_hora_ultimo_pagamento = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET18WithHttpInfo ($id_conta, $id_tipo_debito_recorrente, $sort, $page, $limit, $data_hora_inicio, $data_hora_fim, $ativo, $data_hora_ultimo_pagamento);
        return $response; 
    }


    /**
     * listarUsingGET18WithHttpInfo
     *
     * {{{conta_debito_recorrente_resource_listar}}}
     *
     * @param int $id_conta {{{conta_debito_recorrente_resource_listar_param_id_conta}}} (required)
     * @param int $id_tipo_debito_recorrente {{{conta_debito_recorrente_resource_listar_param_id_tipo_debito_recorrente}}} (optional)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param string $data_hora_inicio {{{conta_debito_recorrente_request_data_hora_inicio_value}}} (optional)
     * @param string $data_hora_fim {{{conta_debito_recorrente_request_data_hora_fim_value}}} (optional)
     * @param bool $ativo {{{conta_debito_recorrente_request_ativo_value}}} (optional)
     * @param string $data_hora_ultimo_pagamento {{{conta_debito_recorrente_request_data_hora_ultimo_pagamento_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET18WithHttpInfo($id_conta, $id_tipo_debito_recorrente = null, $sort = null, $page = null, $limit = null, $data_hora_inicio = null, $data_hora_fim = null, $ativo = null, $data_hora_ultimo_pagamento = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling listarUsingGET18');
        }
  
        // parse inputs
        $resourcePath = "/api/debitos-recorrentes";
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
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($id_tipo_debito_recorrente !== null) {
            $queryParams['idTipoDebitoRecorrente'] = $this->apiClient->getSerializer()->toQueryValue($id_tipo_debito_recorrente);
        }// query params
        
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
        
        if ($data_hora_inicio !== null) {
            $queryParams['dataHoraInicio'] = $this->apiClient->getSerializer()->toQueryValue($data_hora_inicio);
        }// query params
        
        if ($data_hora_fim !== null) {
            $queryParams['dataHoraFim'] = $this->apiClient->getSerializer()->toQueryValue($data_hora_fim);
        }// query params
        
        if ($ativo !== null) {
            $queryParams['ativo'] = $this->apiClient->getSerializer()->toQueryValue($ativo);
        }// query params
        
        if ($data_hora_ultimo_pagamento !== null) {
            $queryParams['dataHoraUltimoPagamento'] = $this->apiClient->getSerializer()->toQueryValue($data_hora_ultimo_pagamento);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET56
     *
     * {{{tipo_debito_recorrente_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $id {{{tipo_debito_recorrente_request_id_value}}} (optional)
     * @param string $descricao {{{tipo_debito_recorrente_request_descricao_value}}} (optional)
     * @param Number $valor {{{tipo_debito_recorrente_request_valor_value}}} (optional)
     * @param bool $flag_ativo {{{tipo_debito_recorrente_request_flag_ativo_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET56($sort = null, $page = null, $limit = null, $id = null, $descricao = null, $valor = null, $flag_ativo = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET56WithHttpInfo ($sort, $page, $limit, $id, $descricao, $valor, $flag_ativo);
        return $response; 
    }


    /**
     * listarUsingGET56WithHttpInfo
     *
     * {{{tipo_debito_recorrente_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $id {{{tipo_debito_recorrente_request_id_value}}} (optional)
     * @param string $descricao {{{tipo_debito_recorrente_request_descricao_value}}} (optional)
     * @param Number $valor {{{tipo_debito_recorrente_request_valor_value}}} (optional)
     * @param bool $flag_ativo {{{tipo_debito_recorrente_request_flag_ativo_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET56WithHttpInfo($sort = null, $page = null, $limit = null, $id = null, $descricao = null, $valor = null, $flag_ativo = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/tipos-debitos-recorrentes";
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
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if ($descricao !== null) {
            $queryParams['descricao'] = $this->apiClient->getSerializer()->toQueryValue($descricao);
        }// query params
        
        if ($valor !== null) {
            $queryParams['valor'] = $this->apiClient->getSerializer()->toQueryValue($valor);
        }// query params
        
        if ($flag_ativo !== null) {
            $queryParams['flagAtivo'] = $this->apiClient->getSerializer()->toQueryValue($flag_ativo);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}