<?php
/**
 * GestaoLimitesApi
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
 * GestaoLimitesApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GestaoLimitesApi
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
     * @return GestaoLimitesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * alterarLimiteUsingPUT
     *
     * Realiza a altera\u00C3\u00A7\u00C3\u00A3o dos limites da conta
     *
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). (required)
     * @param Number $limite_global Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui. (required)
     * @param Number $limite_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais. (required)
     * @param Number $limite_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas. (required)
     * @param Number $limite_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade. (required)
     * @param Number $limite_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional. (required)
     * @param Number $limite_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento. (required)
     * @param Number $limite_consignado Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos. (required)
     * @param Number $limite_internacional_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais. (required)
     * @param Number $limite_internacional_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas. (required)
     * @param Number $limite_internacional_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade. (required)
     * @param Number $limite_internacional_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional. (required)
     * @param Number $limite_internacional_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento. (required)
     * @param Number $limite_maximo Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es. (required)
     * @return \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarLimiteUsingPUT($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarLimiteUsingPUTWithHttpInfo ($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo);
        return $response; 
    }


    /**
     * alterarLimiteUsingPUTWithHttpInfo
     *
     * Realiza a altera\u00C3\u00A7\u00C3\u00A3o dos limites da conta
     *
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). (required)
     * @param Number $limite_global Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui. (required)
     * @param Number $limite_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais. (required)
     * @param Number $limite_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas. (required)
     * @param Number $limite_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade. (required)
     * @param Number $limite_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional. (required)
     * @param Number $limite_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento. (required)
     * @param Number $limite_consignado Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos. (required)
     * @param Number $limite_internacional_compra Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais. (required)
     * @param Number $limite_internacional_parcelado Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas. (required)
     * @param Number $limite_internacional_parcelas Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade. (required)
     * @param Number $limite_internacional_saque_global Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional. (required)
     * @param Number $limite_internacional_saque_periodo Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento. (required)
     * @param Number $limite_maximo Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es. (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarLimiteUsingPUTWithHttpInfo($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_global' is set
        if ($limite_global === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_global when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_compra' is set
        if ($limite_compra === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_compra when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_parcelado' is set
        if ($limite_parcelado === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_parcelado when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_parcelas' is set
        if ($limite_parcelas === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_parcelas when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_saque_global' is set
        if ($limite_saque_global === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_saque_global when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_saque_periodo' is set
        if ($limite_saque_periodo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_saque_periodo when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_consignado' is set
        if ($limite_consignado === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_consignado when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_internacional_compra' is set
        if ($limite_internacional_compra === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_internacional_compra when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_internacional_parcelado' is set
        if ($limite_internacional_parcelado === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_internacional_parcelado when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_internacional_parcelas' is set
        if ($limite_internacional_parcelas === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_internacional_parcelas when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_internacional_saque_global' is set
        if ($limite_internacional_saque_global === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_internacional_saque_global when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_internacional_saque_periodo' is set
        if ($limite_internacional_saque_periodo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_internacional_saque_periodo when calling alterarLimiteUsingPUT');
        }
        // verify the required parameter 'limite_maximo' is set
        if ($limite_maximo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limite_maximo when calling alterarLimiteUsingPUT');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/alterar-limites";
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
        
        if ($limite_global !== null) {
            $queryParams['limiteGlobal'] = $this->apiClient->getSerializer()->toQueryValue($limite_global);
        }// query params
        
        if ($limite_compra !== null) {
            $queryParams['limiteCompra'] = $this->apiClient->getSerializer()->toQueryValue($limite_compra);
        }// query params
        
        if ($limite_parcelado !== null) {
            $queryParams['limiteParcelado'] = $this->apiClient->getSerializer()->toQueryValue($limite_parcelado);
        }// query params
        
        if ($limite_parcelas !== null) {
            $queryParams['limiteParcelas'] = $this->apiClient->getSerializer()->toQueryValue($limite_parcelas);
        }// query params
        
        if ($limite_saque_global !== null) {
            $queryParams['limiteSaqueGlobal'] = $this->apiClient->getSerializer()->toQueryValue($limite_saque_global);
        }// query params
        
        if ($limite_saque_periodo !== null) {
            $queryParams['limiteSaquePeriodo'] = $this->apiClient->getSerializer()->toQueryValue($limite_saque_periodo);
        }// query params
        
        if ($limite_consignado !== null) {
            $queryParams['limiteConsignado'] = $this->apiClient->getSerializer()->toQueryValue($limite_consignado);
        }// query params
        
        if ($limite_internacional_compra !== null) {
            $queryParams['limiteInternacionalCompra'] = $this->apiClient->getSerializer()->toQueryValue($limite_internacional_compra);
        }// query params
        
        if ($limite_internacional_parcelado !== null) {
            $queryParams['limiteInternacionalParcelado'] = $this->apiClient->getSerializer()->toQueryValue($limite_internacional_parcelado);
        }// query params
        
        if ($limite_internacional_parcelas !== null) {
            $queryParams['limiteInternacionalParcelas'] = $this->apiClient->getSerializer()->toQueryValue($limite_internacional_parcelas);
        }// query params
        
        if ($limite_internacional_saque_global !== null) {
            $queryParams['limiteInternacionalSaqueGlobal'] = $this->apiClient->getSerializer()->toQueryValue($limite_internacional_saque_global);
        }// query params
        
        if ($limite_internacional_saque_periodo !== null) {
            $queryParams['limiteInternacionalSaquePeriodo'] = $this->apiClient->getSerializer()->toQueryValue($limite_internacional_saque_periodo);
        }// query params
        
        if ($limite_maximo !== null) {
            $queryParams['limiteMaximo'] = $this->apiClient->getSerializer()->toQueryValue($limite_maximo);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarLimiteDisponibilidadeUsingGET1
     *
     * Apresenta os limites da conta
     *
     * @param int $id Id Conta (required)
     * @return \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarLimiteDisponibilidadeUsingGET1($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarLimiteDisponibilidadeUsingGET1WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarLimiteDisponibilidadeUsingGET1WithHttpInfo
     *
     * Apresenta os limites da conta
     *
     * @param int $id Id Conta (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarLimiteDisponibilidadeUsingGET1WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarLimiteDisponibilidadeUsingGET1');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/limites-disponibilidades";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarHistoricoAlteracoesLimitesUsingGET
     *
     * Lista o hist\u00C3\u00B3rico de altera\u00C3\u00A7\u00C3\u00B5es de limites da conta
     *
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). (required)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarHistoricoAlteracoesLimitesUsingGET($id, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarHistoricoAlteracoesLimitesUsingGETWithHttpInfo ($id, $page, $limit);
        return $response; 
    }


    /**
     * listarHistoricoAlteracoesLimitesUsingGETWithHttpInfo
     *
     * Lista o hist\u00C3\u00B3rico de altera\u00C3\u00A7\u00C3\u00B5es de limites da conta
     *
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). (required)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarHistoricoAlteracoesLimitesUsingGETWithHttpInfo($id, $page = null, $limit = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling listarHistoricoAlteracoesLimitesUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/contas/{id}/historicos-alteracoes-limites";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
