<?php
/**
 * GlobaltagfaturaApi
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
 * GlobaltagfaturaApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobaltagfaturaApi
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
     * @return GlobaltagfaturaApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarFaturaUsingGET1
     *
     * {{{fatura_resource_consultar_fatura}}}
     *
     * @param string $data_vencimento {{{fatura_resource_consultar_fatura_param_data_vencimento}}} (required)
     * @param int $id_conta {{{fatura_resource_consultar_fatura_param_id_conta}}} (required)
     * @return \br.com.conductor.pier.api.v2.model\FaturaDetalheResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarFaturaUsingGET1($data_vencimento, $id_conta)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarFaturaUsingGET1WithHttpInfo ($data_vencimento, $id_conta);
        return $response; 
    }


    /**
     * consultarFaturaUsingGET1WithHttpInfo
     *
     * {{{fatura_resource_consultar_fatura}}}
     *
     * @param string $data_vencimento {{{fatura_resource_consultar_fatura_param_data_vencimento}}} (required)
     * @param int $id_conta {{{fatura_resource_consultar_fatura_param_id_conta}}} (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\FaturaDetalheResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarFaturaUsingGET1WithHttpInfo($data_vencimento, $id_conta)
    {
        
        // verify the required parameter 'data_vencimento' is set
        if ($data_vencimento === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_vencimento when calling consultarFaturaUsingGET1');
        }
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling consultarFaturaUsingGET1');
        }
  
        // parse inputs
        $resourcePath = "/api/faturas/{dataVencimento}";
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
        }
        
        // path params
        
        if ($data_vencimento !== null) {
            $resourcePath = str_replace(
                "{" . "dataVencimento" . "}",
                $this->apiClient->getSerializer()->toPathValue($data_vencimento),
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\FaturaDetalheResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FaturaDetalheResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FaturaDetalheResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 201:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FaturaDetalheResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarLancamentosFuturosFaturaUsingGET1
     *
     * {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura}}}
     *
     * @param int $id {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura_param_id_conta}}} (required)
     * @param string $data_vencimento_padrao {{{plano_parcelamento_request_data_vencimento_padrao_value}}} (required)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarLancamentosFuturosFaturaUsingGET1($id, $data_vencimento_padrao, $sort = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarLancamentosFuturosFaturaUsingGET1WithHttpInfo ($id, $data_vencimento_padrao, $sort, $page, $limit);
        return $response; 
    }


    /**
     * consultarLancamentosFuturosFaturaUsingGET1WithHttpInfo
     *
     * {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura}}}
     *
     * @param int $id {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura_param_id_conta}}} (required)
     * @param string $data_vencimento_padrao {{{plano_parcelamento_request_data_vencimento_padrao_value}}} (required)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarLancamentosFuturosFaturaUsingGET1WithHttpInfo($id, $data_vencimento_padrao, $sort = null, $page = null, $limit = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarLancamentosFuturosFaturaUsingGET1');
        }
        // verify the required parameter 'data_vencimento_padrao' is set
        if ($data_vencimento_padrao === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_vencimento_padrao when calling consultarLancamentosFuturosFaturaUsingGET1');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/faturas/planos-parcelamento";
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
        
        if ($data_vencimento_padrao !== null) {
            $queryParams['dataVencimentoPadrao'] = $this->apiClient->getSerializer()->toQueryValue($data_vencimento_padrao);
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
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * enviarFaturaEmailUsingPOST
     *
     * {{{fatura_conta_resource_enviar_fatura_email}}}
     *
     * @param int $id {{{fatura_conta_resource_enviar_fatura_email_param_id_conta}}} (required)
     * @param string $data_vencimento {{{fatura_conta_resource_enviar_fatura_email_param_data_vencimento}}} (required)
     * @param string $email {{{fatura_conta_resource_enviar_fatura_email_param_email}}} (optional)
     * @return object
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function enviarFaturaEmailUsingPOST($id, $data_vencimento, $email = null)
    {
        list($response, $statusCode, $httpHeader) = $this->enviarFaturaEmailUsingPOSTWithHttpInfo ($id, $data_vencimento, $email);
        return $response; 
    }


    /**
     * enviarFaturaEmailUsingPOSTWithHttpInfo
     *
     * {{{fatura_conta_resource_enviar_fatura_email}}}
     *
     * @param int $id {{{fatura_conta_resource_enviar_fatura_email_param_id_conta}}} (required)
     * @param string $data_vencimento {{{fatura_conta_resource_enviar_fatura_email_param_data_vencimento}}} (required)
     * @param string $email {{{fatura_conta_resource_enviar_fatura_email_param_email}}} (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function enviarFaturaEmailUsingPOSTWithHttpInfo($id, $data_vencimento, $email = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling enviarFaturaEmailUsingPOST');
        }
        // verify the required parameter 'data_vencimento' is set
        if ($data_vencimento === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_vencimento when calling enviarFaturaEmailUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/faturas/{dataVencimento}/enviar-email";
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
        
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }// path params
        
        if ($data_vencimento !== null) {
            $resourcePath = str_replace(
                "{" . "dataVencimento" . "}",
                $this->apiClient->getSerializer()->toPathValue($data_vencimento),
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
            case 201:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarFaturasUsingGET1
     *
     * {{{fatura_resource_listar_faturas}}}
     *
     * @param int $id_conta {{{fatura_resource_listar_faturas_param_id_conta}}} (required)
     * @param string $situacao_processamento {{{fatura_resource_listar_faturas_param_situacao_processamento}}} (optional, default to TODAS)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageFaturaResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarFaturasUsingGET1($id_conta, $situacao_processamento = null, $sort = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarFaturasUsingGET1WithHttpInfo ($id_conta, $situacao_processamento, $sort, $page, $limit);
        return $response; 
    }


    /**
     * listarFaturasUsingGET1WithHttpInfo
     *
     * {{{fatura_resource_listar_faturas}}}
     *
     * @param int $id_conta {{{fatura_resource_listar_faturas_param_id_conta}}} (required)
     * @param string $situacao_processamento {{{fatura_resource_listar_faturas_param_situacao_processamento}}} (optional, default to TODAS)
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageFaturaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarFaturasUsingGET1WithHttpInfo($id_conta, $situacao_processamento = null, $sort = null, $page = null, $limit = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling listarFaturasUsingGET1');
        }
  
        // parse inputs
        $resourcePath = "/api/faturas";
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
        
        if ($situacao_processamento !== null) {
            $queryParams['situacaoProcessamento'] = $this->apiClient->getSerializer()->toQueryValue($situacao_processamento);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageFaturaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageFaturaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageFaturaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 201:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageFaturaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * visualizarDocumentoUsingGET
     *
     * {{{fatura_conta_resource_visualizar_documento}}}
     *
     * @param int $id {{{fatura_conta_resource_visualizar_documento_param_id_conta}}} (required)
     * @param string $data_vencimento {{{fatura_conta_resource_visualizar_documento_param_data_vencimento}}} (required)
     * @param bool $flag_apenas_demostrativo {{{fatura_conta_resource_enviar_fatura_email_param_flag_apenas_demostrativo}}} (optional)
     * @param bool $flag_registra_boleto {{{fatura_conta_resource_enviar_fatura_email_param_flag_registra_boleto}}} (optional)
     * @return object
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function visualizarDocumentoUsingGET($id, $data_vencimento, $flag_apenas_demostrativo = null, $flag_registra_boleto = null)
    {
        list($response, $statusCode, $httpHeader) = $this->visualizarDocumentoUsingGETWithHttpInfo ($id, $data_vencimento, $flag_apenas_demostrativo, $flag_registra_boleto);
        return $response; 
    }


    /**
     * visualizarDocumentoUsingGETWithHttpInfo
     *
     * {{{fatura_conta_resource_visualizar_documento}}}
     *
     * @param int $id {{{fatura_conta_resource_visualizar_documento_param_id_conta}}} (required)
     * @param string $data_vencimento {{{fatura_conta_resource_visualizar_documento_param_data_vencimento}}} (required)
     * @param bool $flag_apenas_demostrativo {{{fatura_conta_resource_enviar_fatura_email_param_flag_apenas_demostrativo}}} (optional)
     * @param bool $flag_registra_boleto {{{fatura_conta_resource_enviar_fatura_email_param_flag_registra_boleto}}} (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function visualizarDocumentoUsingGETWithHttpInfo($id, $data_vencimento, $flag_apenas_demostrativo = null, $flag_registra_boleto = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling visualizarDocumentoUsingGET');
        }
        // verify the required parameter 'data_vencimento' is set
        if ($data_vencimento === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_vencimento when calling visualizarDocumentoUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/faturas/{dataVencimento}/arquivo.pdf";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/pdf'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($flag_apenas_demostrativo !== null) {
            $queryParams['flagApenasDemostrativo'] = $this->apiClient->getSerializer()->toQueryValue($flag_apenas_demostrativo);
        }// query params
        
        if ($flag_registra_boleto !== null) {
            $queryParams['flagRegistraBoleto'] = $this->apiClient->getSerializer()->toQueryValue($flag_registra_boleto);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }// path params
        
        if ($data_vencimento !== null) {
            $resourcePath = str_replace(
                "{" . "dataVencimento" . "}",
                $this->apiClient->getSerializer()->toPathValue($data_vencimento),
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
            case 201:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
