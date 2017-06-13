<?php
/**
 * JobsApi
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
 * JobsApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobsApi
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
     * @return JobsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * ativarJobUsingPOST
     *
     * Ativar Job
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\Job
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarJobUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->ativarJobUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * ativarJobUsingPOSTWithHttpInfo
     *
     * Ativar Job
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\Job, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarJobUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ativarJobUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/jobs/{id}/ativar-job";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\Job'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\Job', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\Job', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * atualizarUsingPUT
     *
     * Atualizar Job
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). (required)
     * @param string $descricao descricao. (required)
     * @param string $cron Cron do Job. (required)
     * @param string $groovy groovy (required)
     * @return \br.com.conductor.pier.api.v2.model\Job
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function atualizarUsingPUT($id, $descricao, $cron, $groovy)
    {
        list($response, $statusCode, $httpHeader) = $this->atualizarUsingPUTWithHttpInfo ($id, $descricao, $cron, $groovy);
        return $response; 
    }


    /**
     * atualizarUsingPUTWithHttpInfo
     *
     * Atualizar Job
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). (required)
     * @param string $descricao descricao. (required)
     * @param string $cron Cron do Job. (required)
     * @param string $groovy groovy (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\Job, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function atualizarUsingPUTWithHttpInfo($id, $descricao, $cron, $groovy)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling atualizarUsingPUT');
        }
        // verify the required parameter 'descricao' is set
        if ($descricao === null) {
            throw new \InvalidArgumentException('Missing the required parameter $descricao when calling atualizarUsingPUT');
        }
        // verify the required parameter 'cron' is set
        if ($cron === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cron when calling atualizarUsingPUT');
        }
        // verify the required parameter 'groovy' is set
        if ($groovy === null) {
            throw new \InvalidArgumentException('Missing the required parameter $groovy when calling atualizarUsingPUT');
        }
  
        // parse inputs
        $resourcePath = "/api/jobs/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('text/plain'));
  
        // query params
        
        if ($descricao !== null) {
            $queryParams['descricao'] = $this->apiClient->getSerializer()->toQueryValue($descricao);
        }// query params
        
        if ($cron !== null) {
            $queryParams['cron'] = $this->apiClient->getSerializer()->toQueryValue($cron);
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

        
        // body params
        $_tempBody = null;
        if (isset($groovy)) {
            $_tempBody = $groovy;
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\Job'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\Job', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\Job', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * desativarJobUsingPOST
     *
     * Desativar Job
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\Job
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarJobUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->desativarJobUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * desativarJobUsingPOSTWithHttpInfo
     *
     * Desativar Job
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\Job, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarJobUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling desativarJobUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/jobs/{id}/desativar-job";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\Job'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\Job', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\Job', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET11
     *
     * Listar Jobs
     *
     * @param string $groovy Script Groovy do Job (optional)
     * @param string $descricao Descri\u00C3\u00A7\u00C3\u00A3o do Job (optional)
     * @param string $cron Cron do Job (optional)
     * @param string $status Status do Job (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageJob
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET11($groovy = null, $descricao = null, $cron = null, $status = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET11WithHttpInfo ($groovy, $descricao, $cron, $status, $page, $limit);
        return $response; 
    }


    /**
     * listarUsingGET11WithHttpInfo
     *
     * Listar Jobs
     *
     * @param string $groovy Script Groovy do Job (optional)
     * @param string $descricao Descri\u00C3\u00A7\u00C3\u00A3o do Job (optional)
     * @param string $cron Cron do Job (optional)
     * @param string $status Status do Job (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageJob, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET11WithHttpInfo($groovy = null, $descricao = null, $cron = null, $status = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/jobs";
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
        
        if ($groovy !== null) {
            $queryParams['groovy'] = $this->apiClient->getSerializer()->toQueryValue($groovy);
        }// query params
        
        if ($descricao !== null) {
            $queryParams['descricao'] = $this->apiClient->getSerializer()->toQueryValue($descricao);
        }// query params
        
        if ($cron !== null) {
            $queryParams['cron'] = $this->apiClient->getSerializer()->toQueryValue($cron);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageJob'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageJob', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageJob', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * salvarUsingPOST5
     *
     * Cadastrar Job
     *
     * @param string $descricao descricao. (required)
     * @param string $cron Cron do Job. (required)
     * @param string $groovy groovy (required)
     * @return \br.com.conductor.pier.api.v2.model\Job
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST5($descricao, $cron, $groovy)
    {
        list($response, $statusCode, $httpHeader) = $this->salvarUsingPOST5WithHttpInfo ($descricao, $cron, $groovy);
        return $response; 
    }


    /**
     * salvarUsingPOST5WithHttpInfo
     *
     * Cadastrar Job
     *
     * @param string $descricao descricao. (required)
     * @param string $cron Cron do Job. (required)
     * @param string $groovy groovy (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\Job, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST5WithHttpInfo($descricao, $cron, $groovy)
    {
        
        // verify the required parameter 'descricao' is set
        if ($descricao === null) {
            throw new \InvalidArgumentException('Missing the required parameter $descricao when calling salvarUsingPOST5');
        }
        // verify the required parameter 'cron' is set
        if ($cron === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cron when calling salvarUsingPOST5');
        }
        // verify the required parameter 'groovy' is set
        if ($groovy === null) {
            throw new \InvalidArgumentException('Missing the required parameter $groovy when calling salvarUsingPOST5');
        }
  
        // parse inputs
        $resourcePath = "/api/jobs";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('text/plain'));
  
        // query params
        
        if ($descricao !== null) {
            $queryParams['descricao'] = $this->apiClient->getSerializer()->toQueryValue($descricao);
        }// query params
        
        if ($cron !== null) {
            $queryParams['cron'] = $this->apiClient->getSerializer()->toQueryValue($cron);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($groovy)) {
            $_tempBody = $groovy;
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\Job'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\Job', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\Job', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
