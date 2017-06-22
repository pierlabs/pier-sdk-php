<?php
/**
 * DispositivosApi
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
 * DispositivosApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DispositivosApi
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
     * @return DispositivosApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * ativarUsingPOST
     *
     * Ativa Dispositivo
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\DispositivoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->ativarUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * ativarUsingPOSTWithHttpInfo
     *
     * Ativa Dispositivo
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\DispositivoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ativarUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/dispositivos/{id}/ativar-dispositivo";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\DispositivoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\DispositivoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\DispositivoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * desativarUsingPOST
     *
     * Desativa Dispositivo
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\DispositivoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->desativarUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * desativarUsingPOSTWithHttpInfo
     *
     * Desativa Dispositivo
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\DispositivoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling desativarUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/dispositivos/{id}/desativar-dispositivo";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\DispositivoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\DispositivoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\DispositivoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET8
     *
     * Lista os dispositivos cadastrados
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param string $token Token do Dispositivo (optional)
     * @param int $id_usuario Identificador do Usu\u00C3\u00A1rio (optional)
     * @param int $id_aplicacao_mobile Identificador da aplica\u00C3\u00A7\u00C3\u00A3o (optional)
     * @param string $data_criacao Apresenta a data e em que o registro foi criado. (optional)
     * @param string $data_desativacao Apresenta a data e em que o registro foi desativado. (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageDispositivoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET8($page = null, $limit = null, $token = null, $id_usuario = null, $id_aplicacao_mobile = null, $data_criacao = null, $data_desativacao = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET8WithHttpInfo ($page, $limit, $token, $id_usuario, $id_aplicacao_mobile, $data_criacao, $data_desativacao);
        return $response; 
    }


    /**
     * listarUsingGET8WithHttpInfo
     *
     * Lista os dispositivos cadastrados
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param string $token Token do Dispositivo (optional)
     * @param int $id_usuario Identificador do Usu\u00C3\u00A1rio (optional)
     * @param int $id_aplicacao_mobile Identificador da aplica\u00C3\u00A7\u00C3\u00A3o (optional)
     * @param string $data_criacao Apresenta a data e em que o registro foi criado. (optional)
     * @param string $data_desativacao Apresenta a data e em que o registro foi desativado. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageDispositivoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET8WithHttpInfo($page = null, $limit = null, $token = null, $id_usuario = null, $id_aplicacao_mobile = null, $data_criacao = null, $data_desativacao = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/dispositivos";
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
        
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }// query params
        
        if ($id_usuario !== null) {
            $queryParams['idUsuario'] = $this->apiClient->getSerializer()->toQueryValue($id_usuario);
        }// query params
        
        if ($id_aplicacao_mobile !== null) {
            $queryParams['idAplicacaoMobile'] = $this->apiClient->getSerializer()->toQueryValue($id_aplicacao_mobile);
        }// query params
        
        if ($data_criacao !== null) {
            $queryParams['dataCriacao'] = $this->apiClient->getSerializer()->toQueryValue($data_criacao);
        }// query params
        
        if ($data_desativacao !== null) {
            $queryParams['dataDesativacao'] = $this->apiClient->getSerializer()->toQueryValue($data_desativacao);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageDispositivoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageDispositivoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageDispositivoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * salvarUsingPOST3
     *
     * Cadastra Dispositivo
     *
     * @param \br.com.conductor.pier.api.v2.model\DispositivoPersist $persist persist (required)
     * @return \br.com.conductor.pier.api.v2.model\DispositivoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST3($persist)
    {
        list($response, $statusCode, $httpHeader) = $this->salvarUsingPOST3WithHttpInfo ($persist);
        return $response; 
    }


    /**
     * salvarUsingPOST3WithHttpInfo
     *
     * Cadastra Dispositivo
     *
     * @param \br.com.conductor.pier.api.v2.model\DispositivoPersist $persist persist (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\DispositivoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST3WithHttpInfo($persist)
    {
        
        // verify the required parameter 'persist' is set
        if ($persist === null) {
            throw new \InvalidArgumentException('Missing the required parameter $persist when calling salvarUsingPOST3');
        }
  
        // parse inputs
        $resourcePath = "/api/dispositivos";
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
        if (isset($persist)) {
            $_tempBody = $persist;
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\DispositivoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\DispositivoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\DispositivoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
