<?php
/**
 * ContaApi
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1.invoker
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

namespace br.com.conductor.pier.api.v1;

use \br.com.conductor.pier.api.v1.invoker\Configuration;
use \br.com.conductor.pier.api.v1.invoker\ApiClient;
use \br.com.conductor.pier.api.v1.invoker\ApiException;
use \br.com.conductor.pier.api.v1.invoker\ObjectSerializer;

/**
 * ContaApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContaApi
{

    /**
     * API Client
     * @var \br.com.conductor.pier.api.v1.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \br.com.conductor.pier.api.v1.invoker\ApiClient|null $apiClient The api client to use
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
     * @return \br.com.conductor.pier.api.v1.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \br.com.conductor.pier.api.v1.invoker\ApiClient $apiClient set the API client
     * @return ContaApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * buscarContaUsingGET
     *
     * /contas/buscar
     *
     * @param string $nome Nome (optional)
     * @param string $cpf CPF (opcional caso nao informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou id da conta) (optional)
     * @param string $numero_cartao N\u00C3\u00BAmero do cart\u00C3\u00A3o (opcional caso n\u00C3\u00A3o informa o cpf ou id da conta) (optional)
     * @param int $id_conta ID da Conta (opcional caso n\u00C3\u00A3o informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou cpf) (optional)
     * @return \br.com.conductor.pier.api.v1.model\ConsultarContaResponse
     * @throws \br.com.conductor.pier.api.v1.invoker\ApiException on non-2xx response
     */
    public function buscarContaUsingGET($nome = null, $cpf = null, $numero_cartao = null, $id_conta = null)
    {
        list($response, $statusCode, $httpHeader) = $this->buscarContaUsingGETWithHttpInfo ($nome, $cpf, $numero_cartao, $id_conta);
        return $response; 
    }


    /**
     * buscarContaUsingGETWithHttpInfo
     *
     * /contas/buscar
     *
     * @param string $nome Nome (optional)
     * @param string $cpf CPF (opcional caso nao informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou id da conta) (optional)
     * @param string $numero_cartao N\u00C3\u00BAmero do cart\u00C3\u00A3o (opcional caso n\u00C3\u00A3o informa o cpf ou id da conta) (optional)
     * @param int $id_conta ID da Conta (opcional caso n\u00C3\u00A3o informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou cpf) (optional)
     * @return Array of \br.com.conductor.pier.api.v1.model\ConsultarContaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1.invoker\ApiException on non-2xx response
     */
    public function buscarContaUsingGETWithHttpInfo($nome = null, $cpf = null, $numero_cartao = null, $id_conta = null)
    {
        
  
        // parse inputs
        $resourcePath = "/v1/contas/buscar";
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
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($cpf !== null) {
            $queryParams['cpf'] = $this->apiClient->getSerializer()->toQueryValue($cpf);
        }// query params
        
        if ($numero_cartao !== null) {
            $queryParams['numeroCartao'] = $this->apiClient->getSerializer()->toQueryValue($numero_cartao);
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1.model\ConsultarContaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1.model\ConsultarContaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1.model\ConsultarContaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarContaUsingGET
     *
     * /contas/{idConta}
     *
     * @param int $id_conta ID da Conta (required)
     * @return \br.com.conductor.pier.api.v1.model\ContaResponse
     * @throws \br.com.conductor.pier.api.v1.invoker\ApiException on non-2xx response
     */
    public function consultarContaUsingGET($id_conta)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarContaUsingGETWithHttpInfo ($id_conta);
        return $response; 
    }


    /**
     * consultarContaUsingGETWithHttpInfo
     *
     * /contas/{idConta}
     *
     * @param int $id_conta ID da Conta (required)
     * @return Array of \br.com.conductor.pier.api.v1.model\ContaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1.invoker\ApiException on non-2xx response
     */
    public function consultarContaUsingGETWithHttpInfo($id_conta)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling consultarContaUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/v1/contas/{idConta}";
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
        
        if ($id_conta !== null) {
            $resourcePath = str_replace(
                "{" . "idConta" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_conta),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1.model\ContaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1.model\ContaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1.model\ContaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
