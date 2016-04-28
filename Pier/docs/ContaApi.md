# br.com.conductor.pier.api.v1.invoker\ContaApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buscarContaUsingGET**](ContaApi.md#buscarContaUsingGET) | **GET** /api/v1/contas/buscar | /contas/buscar
[**consultarContaUsingGET**](ContaApi.md#consultarContaUsingGET) | **GET** /api/v1/contas/{idConta} | /contas/{idConta}


# **buscarContaUsingGET**
> \br.com.conductor.pier.api.v1.model\ConsultarContaResponse buscarContaUsingGET($nome, $cpf, $numero_cartao, $id_conta)

/contas/buscar

Consulte contas filtrando pelos campos id do emissor, n\u00C3\u00BAmero do cart\u00C3\u00A3o, nome ou CPF/CNPJ 

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\ContaApi();
$nome = "nome_example"; // string | Nome
$cpf = "cpf_example"; // string | CPF (opcional caso nao informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou id da conta)
$numero_cartao = "numero_cartao_example"; // string | N\u00C3\u00BAmero do cart\u00C3\u00A3o (opcional caso n\u00C3\u00A3o informa o cpf ou id da conta)
$id_conta = 789; // int | ID da Conta (opcional caso n\u00C3\u00A3o informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou cpf)

try { 
    $result = $api_instance->buscarContaUsingGET($nome, $cpf, $numero_cartao, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->buscarContaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome** | **string**| Nome | [optional] 
 **cpf** | **string**| CPF (opcional caso nao informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou id da conta) | [optional] 
 **numero_cartao** | **string**| N\u00C3\u00BAmero do cart\u00C3\u00A3o (opcional caso n\u00C3\u00A3o informa o cpf ou id da conta) | [optional] 
 **id_conta** | **int**| ID da Conta (opcional caso n\u00C3\u00A3o informe o n\u00C3\u00BAmero do cart\u00C3\u00A3o ou cpf) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v1.model\ConsultarContaResponse**](ConsultarContaResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarContaUsingGET**
> \br.com.conductor.pier.api.v1.model\ContaResponse consultarContaUsingGET($id_conta)

/contas/{idConta}

Consulte informa\u00C3\u00A7\u00C3\u00B5es de uma determinada conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\ContaApi();
$id_conta = 56; // int | ID da Conta

try { 
    $result = $api_instance->consultarContaUsingGET($id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarContaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 

### Return type

[**\br.com.conductor.pier.api.v1.model\ContaResponse**](ContaResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
