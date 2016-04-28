<?php
/**
 * TokenApi
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
 * TokenApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokenApi
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
     * @return TokenApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * callbackUsingPOST
     *
     * /tokens/callback
     *
     * @param \br.com.conductor.pier.api.v1.model\BodyAccessToken $body_access_token bodyAccessToken (required)
     * @return \br.com.conductor.pier.api.v1.model\BodyAccessToken
     * @throws \br.com.conductor.pier.api.v1.invoker\ApiException on non-2xx response
     */
    public function callbackUsingPOST($body_access_token)
    {
        list($response, $statusCode, $httpHeader) = $this->callbackUsingPOSTWithHttpInfo ($body_access_token);
        return $response; 
    }


    /**
     * callbackUsingPOSTWithHttpInfo
     *
     * /tokens/callback
     *
     * @param \br.com.conductor.pier.api.v1.model\BodyAccessToken $body_access_token bodyAccessToken (required)
     * @return Array of \br.com.conductor.pier.api.v1.model\BodyAccessToken, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1.invoker\ApiException on non-2xx response
     */
    public function callbackUsingPOSTWithHttpInfo($body_access_token)
    {
        
        // verify the required parameter 'body_access_token' is set
        if ($body_access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body_access_token when calling callbackUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/v1/tokens/callback";
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
        if (isset($body_access_token)) {
            $_tempBody = $body_access_token;
        }
  
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1.model\BodyAccessToken'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1.model\BodyAccessToken', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1.model\BodyAccessToken', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
