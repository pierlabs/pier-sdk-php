<?php
/**
 * GlobaltagfaqApi
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
 * GlobaltagfaqApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobaltagfaqApi
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
     * @return GlobaltagfaqApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * adicionarUsingPOST
     *
     * {{{faq_resource_adicionar}}}
     *
     * @param string $pergunta {{{faq_persist_pergunta_value}}} (required)
     * @param string $resposta {{{faq_persist_resposta_value}}} (required)
     * @param int $relevancia {{{faq_persist_relevancia_value}}} (optional)
     * @param string $plataforma {{{faq_persist_plataforma_value}}} (optional)
     * @param string $categoria {{{faq_persist_categoria_value}}} (optional)
     * @param string $status {{{faq_persist_status_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\FaqResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function adicionarUsingPOST($pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->adicionarUsingPOSTWithHttpInfo ($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
        return $response; 
    }


    /**
     * adicionarUsingPOSTWithHttpInfo
     *
     * {{{faq_resource_adicionar}}}
     *
     * @param string $pergunta {{{faq_persist_pergunta_value}}} (required)
     * @param string $resposta {{{faq_persist_resposta_value}}} (required)
     * @param int $relevancia {{{faq_persist_relevancia_value}}} (optional)
     * @param string $plataforma {{{faq_persist_plataforma_value}}} (optional)
     * @param string $categoria {{{faq_persist_categoria_value}}} (optional)
     * @param string $status {{{faq_persist_status_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\FaqResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function adicionarUsingPOSTWithHttpInfo($pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        
        // verify the required parameter 'pergunta' is set
        if ($pergunta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pergunta when calling adicionarUsingPOST');
        }
        // verify the required parameter 'resposta' is set
        if ($resposta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resposta when calling adicionarUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/faqs";
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
        
        if ($pergunta !== null) {
            $queryParams['pergunta'] = $this->apiClient->getSerializer()->toQueryValue($pergunta);
        }// query params
        
        if ($resposta !== null) {
            $queryParams['resposta'] = $this->apiClient->getSerializer()->toQueryValue($resposta);
        }// query params
        
        if ($relevancia !== null) {
            $queryParams['relevancia'] = $this->apiClient->getSerializer()->toQueryValue($relevancia);
        }// query params
        
        if ($plataforma !== null) {
            $queryParams['plataforma'] = $this->apiClient->getSerializer()->toQueryValue($plataforma);
        }// query params
        
        if ($categoria !== null) {
            $queryParams['categoria'] = $this->apiClient->getSerializer()->toQueryValue($categoria);
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\FaqResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FaqResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FaqResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * alterarUsingPUT7
     *
     * {{{faq_resource_alterar}}}
     *
     * @param int $id {{{faq_resource_alterar_param_id_faq}}} (required)
     * @param string $pergunta {{{faq_persist_pergunta_value}}} (required)
     * @param string $resposta {{{faq_persist_resposta_value}}} (required)
     * @param int $relevancia {{{faq_persist_relevancia_value}}} (optional)
     * @param string $plataforma {{{faq_persist_plataforma_value}}} (optional)
     * @param string $categoria {{{faq_persist_categoria_value}}} (optional)
     * @param string $status {{{faq_persist_status_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\FaqResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT7($id, $pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarUsingPUT7WithHttpInfo ($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
        return $response; 
    }


    /**
     * alterarUsingPUT7WithHttpInfo
     *
     * {{{faq_resource_alterar}}}
     *
     * @param int $id {{{faq_resource_alterar_param_id_faq}}} (required)
     * @param string $pergunta {{{faq_persist_pergunta_value}}} (required)
     * @param string $resposta {{{faq_persist_resposta_value}}} (required)
     * @param int $relevancia {{{faq_persist_relevancia_value}}} (optional)
     * @param string $plataforma {{{faq_persist_plataforma_value}}} (optional)
     * @param string $categoria {{{faq_persist_categoria_value}}} (optional)
     * @param string $status {{{faq_persist_status_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\FaqResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT7WithHttpInfo($id, $pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarUsingPUT7');
        }
        // verify the required parameter 'pergunta' is set
        if ($pergunta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pergunta when calling alterarUsingPUT7');
        }
        // verify the required parameter 'resposta' is set
        if ($resposta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resposta when calling alterarUsingPUT7');
        }
  
        // parse inputs
        $resourcePath = "/api/faqs/{id}";
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
        
        if ($pergunta !== null) {
            $queryParams['pergunta'] = $this->apiClient->getSerializer()->toQueryValue($pergunta);
        }// query params
        
        if ($resposta !== null) {
            $queryParams['resposta'] = $this->apiClient->getSerializer()->toQueryValue($resposta);
        }// query params
        
        if ($relevancia !== null) {
            $queryParams['relevancia'] = $this->apiClient->getSerializer()->toQueryValue($relevancia);
        }// query params
        
        if ($plataforma !== null) {
            $queryParams['plataforma'] = $this->apiClient->getSerializer()->toQueryValue($plataforma);
        }// query params
        
        if ($categoria !== null) {
            $queryParams['categoria'] = $this->apiClient->getSerializer()->toQueryValue($categoria);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\FaqResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FaqResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FaqResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET23
     *
     * {{{faq_resource_consultar}}}
     *
     * @param int $id {{{faq_resource_consultar_param_id_faq}}} (required)
     * @return \br.com.conductor.pier.api.v2.model\FaqResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET23($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET23WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET23WithHttpInfo
     *
     * {{{faq_resource_consultar}}}
     *
     * @param int $id {{{faq_resource_consultar_param_id_faq}}} (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\FaqResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET23WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET23');
        }
  
        // parse inputs
        $resourcePath = "/api/faqs/{id}";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\FaqResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FaqResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FaqResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET27
     *
     * {{{faq_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $id_faq {{{faq_request_id_faq_value}}} (optional)
     * @param string $pergunta {{{faq_request_pergunta_value}}} (optional)
     * @param string $resposta {{{faq_request_resposta_value}}} (optional)
     * @param int $relevancia {{{faq_request_relevancia_value}}} (optional)
     * @param string $plataforma {{{faq_request_plataforma_value}}} (optional)
     * @param string $categoria {{{faq_request_categoria_value}}} (optional)
     * @param string $status {{{faq_request_status_value}}} (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageFaqResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET27($sort = null, $page = null, $limit = null, $id_faq = null, $pergunta = null, $resposta = null, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET27WithHttpInfo ($sort, $page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
        return $response; 
    }


    /**
     * listarUsingGET27WithHttpInfo
     *
     * {{{faq_resource_listar}}}
     *
     * @param string[] $sort {{{global_menssagem_sort_sort}}} (optional)
     * @param int $page {{{global_menssagem_sort_page_value}}} (optional)
     * @param int $limit {{{global_menssagem_sort_limit}}} (optional)
     * @param int $id_faq {{{faq_request_id_faq_value}}} (optional)
     * @param string $pergunta {{{faq_request_pergunta_value}}} (optional)
     * @param string $resposta {{{faq_request_resposta_value}}} (optional)
     * @param int $relevancia {{{faq_request_relevancia_value}}} (optional)
     * @param string $plataforma {{{faq_request_plataforma_value}}} (optional)
     * @param string $categoria {{{faq_request_categoria_value}}} (optional)
     * @param string $status {{{faq_request_status_value}}} (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageFaqResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET27WithHttpInfo($sort = null, $page = null, $limit = null, $id_faq = null, $pergunta = null, $resposta = null, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/faqs";
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
        
        if ($id_faq !== null) {
            $queryParams['idFaq'] = $this->apiClient->getSerializer()->toQueryValue($id_faq);
        }// query params
        
        if ($pergunta !== null) {
            $queryParams['pergunta'] = $this->apiClient->getSerializer()->toQueryValue($pergunta);
        }// query params
        
        if ($resposta !== null) {
            $queryParams['resposta'] = $this->apiClient->getSerializer()->toQueryValue($resposta);
        }// query params
        
        if ($relevancia !== null) {
            $queryParams['relevancia'] = $this->apiClient->getSerializer()->toQueryValue($relevancia);
        }// query params
        
        if ($plataforma !== null) {
            $queryParams['plataforma'] = $this->apiClient->getSerializer()->toQueryValue($plataforma);
        }// query params
        
        if ($categoria !== null) {
            $queryParams['categoria'] = $this->apiClient->getSerializer()->toQueryValue($categoria);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageFaqResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageFaqResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageFaqResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
