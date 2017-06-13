<?php
/**
 * UsuariosApi
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
 * UsuariosApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsuariosApi
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
     * @return UsuariosApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * alterarSenhaUsingPUT
     *
     * Alterar senha do usu\u00C3\u00A1rio
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @param string $senha_atual Senha Atual (required)
     * @param string $senha_nova Senha Nova (required)
     * @return string
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarSenhaUsingPUT($id, $senha_atual, $senha_nova)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarSenhaUsingPUTWithHttpInfo ($id, $senha_atual, $senha_nova);
        return $response; 
    }


    /**
     * alterarSenhaUsingPUTWithHttpInfo
     *
     * Alterar senha do usu\u00C3\u00A1rio
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @param string $senha_atual Senha Atual (required)
     * @param string $senha_nova Senha Nova (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarSenhaUsingPUTWithHttpInfo($id, $senha_atual, $senha_nova)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarSenhaUsingPUT');
        }
        // verify the required parameter 'senha_atual' is set
        if ($senha_atual === null) {
            throw new \InvalidArgumentException('Missing the required parameter $senha_atual when calling alterarSenhaUsingPUT');
        }
        // verify the required parameter 'senha_nova' is set
        if ($senha_nova === null) {
            throw new \InvalidArgumentException('Missing the required parameter $senha_nova when calling alterarSenhaUsingPUT');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}/alterar-senha";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        // header params
        
        if ($senha_atual !== null) {
            $headerParams['senha_atual'] = $this->apiClient->getSerializer()->toHeaderValue($senha_atual);
        }// header params
        
        if ($senha_nova !== null) {
            $headerParams['senha_nova'] = $this->apiClient->getSerializer()->toHeaderValue($senha_nova);
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
                $headerParams, 'string'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * alterarUsingPUT9
     *
     * Altera os usu\u00C3\u00A1rios cadastrados
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @param \br.com.conductor.pier.api.v2.model\UsuarioUpdate $update update (required)
     * @return \br.com.conductor.pier.api.v2.model\UsuarioResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT9($id, $update)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarUsingPUT9WithHttpInfo ($id, $update);
        return $response; 
    }


    /**
     * alterarUsingPUT9WithHttpInfo
     *
     * Altera os usu\u00C3\u00A1rios cadastrados
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @param \br.com.conductor.pier.api.v2.model\UsuarioUpdate $update update (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\UsuarioResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT9WithHttpInfo($id, $update)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarUsingPUT9');
        }
        // verify the required parameter 'update' is set
        if ($update === null) {
            throw new \InvalidArgumentException('Missing the required parameter $update when calling alterarUsingPUT9');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}";
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\UsuarioResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * ativarUsuarioUsingPOST
     *
     * Ativa os usu\u00C3\u00A1rios cadastrados
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\UsuarioResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarUsuarioUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->ativarUsuarioUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * ativarUsuarioUsingPOSTWithHttpInfo
     *
     * Ativa os usu\u00C3\u00A1rios cadastrados
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\UsuarioResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function ativarUsuarioUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ativarUsuarioUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}/ativar-usuario";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\UsuarioResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET25
     *
     * Apresenta os dados de um determinado Usu\u00C3\u00A1rio
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\UsuarioResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET25($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET25WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET25WithHttpInfo
     *
     * Apresenta os dados de um determinado Usu\u00C3\u00A1rio
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\UsuarioResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET25WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET25');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\UsuarioResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * desativarUsuarioUsingPOST
     *
     * Desativa os usu\u00C3\u00A1rios cadastrados
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return \br.com.conductor.pier.api.v2.model\UsuarioResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarUsuarioUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->desativarUsuarioUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * desativarUsuarioUsingPOSTWithHttpInfo
     *
     * Desativa os usu\u00C3\u00A1rios cadastrados
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\UsuarioResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function desativarUsuarioUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling desativarUsuarioUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}/desativar-usuario";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\UsuarioResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET29
     *
     * Lista os Usu\u00C3\u00A1rios cadastrados
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param string $nome Nome do Usuario (optional)
     * @param string $cpf CPF do Usuario (optional)
     * @param string $email Email do Usuario (optional)
     * @param string $status Status do Usuario (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageUsuarios
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET29($page = null, $limit = null, $nome = null, $cpf = null, $email = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET29WithHttpInfo ($page, $limit, $nome, $cpf, $email, $status);
        return $response; 
    }


    /**
     * listarUsingGET29WithHttpInfo
     *
     * Lista os Usu\u00C3\u00A1rios cadastrados
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param string $nome Nome do Usuario (optional)
     * @param string $cpf CPF do Usuario (optional)
     * @param string $email Email do Usuario (optional)
     * @param string $status Status do Usuario (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageUsuarios, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET29WithHttpInfo($page = null, $limit = null, $nome = null, $cpf = null, $email = null, $status = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/usuarios";
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
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($cpf !== null) {
            $queryParams['cpf'] = $this->apiClient->getSerializer()->toQueryValue($cpf);
        }// query params
        
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageUsuarios'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageUsuarios', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageUsuarios', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * recuperarSenhaUsingPOST
     *
     * Recuperar senha do usu\u00C3\u00A1rio
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return string
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function recuperarSenhaUsingPOST($id)
    {
        list($response, $statusCode, $httpHeader) = $this->recuperarSenhaUsingPOSTWithHttpInfo ($id);
        return $response; 
    }


    /**
     * recuperarSenhaUsingPOSTWithHttpInfo
     *
     * Recuperar senha do usu\u00C3\u00A1rio
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function recuperarSenhaUsingPOSTWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling recuperarSenhaUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}/recuperar-senha";
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
                $headerParams, 'string'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * salvarUsingPOST13
     *
     * Cadastra Usu\u00C3\u00A1rio
     *
     * @param \br.com.conductor.pier.api.v2.model\UsuarioPersist $persist persist (required)
     * @return \br.com.conductor.pier.api.v2.model\UsuarioResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST13($persist)
    {
        list($response, $statusCode, $httpHeader) = $this->salvarUsingPOST13WithHttpInfo ($persist);
        return $response; 
    }


    /**
     * salvarUsingPOST13WithHttpInfo
     *
     * Cadastra Usu\u00C3\u00A1rio
     *
     * @param \br.com.conductor.pier.api.v2.model\UsuarioPersist $persist persist (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\UsuarioResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function salvarUsingPOST13WithHttpInfo($persist)
    {
        
        // verify the required parameter 'persist' is set
        if ($persist === null) {
            throw new \InvalidArgumentException('Missing the required parameter $persist when calling salvarUsingPOST13');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\UsuarioResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\UsuarioResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * validarSenhaUsingGET1
     *
     * Validar a senha do usu\u00C3\u00A1rio
     *
     * @param string $senha Senha do usu\u00C3\u00A1rio (required)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return string
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function validarSenhaUsingGET1($senha, $id)
    {
        list($response, $statusCode, $httpHeader) = $this->validarSenhaUsingGET1WithHttpInfo ($senha, $id);
        return $response; 
    }


    /**
     * validarSenhaUsingGET1WithHttpInfo
     *
     * Validar a senha do usu\u00C3\u00A1rio
     *
     * @param string $senha Senha do usu\u00C3\u00A1rio (required)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function validarSenhaUsingGET1WithHttpInfo($senha, $id)
    {
        
        // verify the required parameter 'senha' is set
        if ($senha === null) {
            throw new \InvalidArgumentException('Missing the required parameter $senha when calling validarSenhaUsingGET1');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling validarSenhaUsingGET1');
        }
  
        // parse inputs
        $resourcePath = "/api/usuarios/{id}/validar-senha";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        // header params
        
        if ($senha !== null) {
            $headerParams['senha'] = $this->apiClient->getSerializer()->toHeaderValue($senha);
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
                $headerParams, 'string'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
