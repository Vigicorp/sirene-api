# Swagger\Client\UniteLegaleApi

All URIs are relative to *https://api.insee.fr/api-sirene/3.11*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findByGetUniteLegale**](UniteLegaleApi.md#findbygetunitelegale) | **GET** /siren | Recherche multicritère d&#x27;unités légales
[**findByPostUniteLegale**](UniteLegaleApi.md#findbypostunitelegale) | **POST** /siren | Recherche multicritère d&#x27;unités légales
[**findBySiren**](UniteLegaleApi.md#findbysiren) | **GET** /siren/{siren} | Recherche d&#x27;une unité légale par son numéro Siren

# **findByGetUniteLegale**
> \Swagger\Client\Model\ReponseUnitesLegales findByGetUniteLegale($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur)

Recherche multicritère d'unités légales

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\UniteLegaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = new \Swagger\Client\Model\null(); //  | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$date = new \Swagger\Client\Model\null(); //  | Date à laquelle on veut obtenir les valeurs des données historisées
$champs = new \Swagger\Client\Model\null(); //  | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = new \Swagger\Client\Model\null(); //  | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
$facette_champ = new \Swagger\Client\Model\null(); //  | Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
$tri = new \Swagger\Client\Model\null(); //  | Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
$nombre = new \Swagger\Client\Model\null(); //  | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = new \Swagger\Client\Model\null(); //  | Rang du premier élément demandé dans la réponse, défaut 0
$curseur = new \Swagger\Client\Model\null(); //  | Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions

try {
    $result = $apiInstance->findByGetUniteLegale($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniteLegaleApi->findByGetUniteLegale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [****](../Model/.md)| Contenu de la requête multicritères, voir la documentation pour plus de précisions | [optional]
 **date** | [****](../Model/.md)| Date à laquelle on veut obtenir les valeurs des données historisées | [optional]
 **champs** | [****](../Model/.md)| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | [****](../Model/.md)| Masque (true) ou affiche (false, par défaut) les attributs qui n&#x27;ont pas de valeur | [optional]
 **facette_champ** | [****](../Model/.md)| Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules | [optional]
 **tri** | [****](../Model/.md)| Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut | [optional]
 **nombre** | [****](../Model/.md)| Nombre d&#x27;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | [****](../Model/.md)| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]
 **curseur** | [****](../Model/.md)| Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions | [optional]

### Return type

[**\Swagger\Client\Model\ReponseUnitesLegales**](../Model/ReponseUnitesLegales.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8;qs=1, text/csv;charset=utf-8;qs=0.9, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findByPostUniteLegale**
> \Swagger\Client\Model\ReponseUnitesLegales findByPostUniteLegale($q, $date, $champs, $nombre, $debut, $masquer_valeurs_nulles, $tri, $curseur, $facette_champ)

Recherche multicritère d'unités légales

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\UniteLegaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = new \Swagger\Client\Model\null(); //  | 
$date = new \Swagger\Client\Model\null(); //  | 
$champs = new \Swagger\Client\Model\null(); //  | 
$nombre = new \Swagger\Client\Model\null(); //  | 
$debut = new \Swagger\Client\Model\null(); //  | 
$masquer_valeurs_nulles = new \Swagger\Client\Model\null(); //  | 
$tri = new \Swagger\Client\Model\null(); //  | 
$curseur = new \Swagger\Client\Model\null(); //  | 
$facette_champ = new \Swagger\Client\Model\null(); //  | 

try {
    $result = $apiInstance->findByPostUniteLegale($q, $date, $champs, $nombre, $debut, $masquer_valeurs_nulles, $tri, $curseur, $facette_champ);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniteLegaleApi->findByPostUniteLegale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [****](../Model/.md)|  | [optional]
 **date** | [****](../Model/.md)|  | [optional]
 **champs** | [****](../Model/.md)|  | [optional]
 **nombre** | [****](../Model/.md)|  | [optional]
 **debut** | [****](../Model/.md)|  | [optional]
 **masquer_valeurs_nulles** | [****](../Model/.md)|  | [optional]
 **tri** | [****](../Model/.md)|  | [optional]
 **curseur** | [****](../Model/.md)|  | [optional]
 **facette_champ** | [****](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ReponseUnitesLegales**](../Model/ReponseUnitesLegales.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json;charset=utf-8;qs=1, text/csv;charset=utf-8;qs=0.9, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findBySiren**
> \Swagger\Client\Model\ReponseUniteLegale findBySiren($siren, $date, $champs, $masquer_valeurs_nulles)

Recherche d'une unité légale par son numéro Siren

Recherche d'une unité légale par son numéro Siren (9 chiffres)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\UniteLegaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siren = new \Swagger\Client\Model\null(); //  | Identifiant de l'unité légale (9 chiffres)
$date = new \Swagger\Client\Model\null(); //  | Date à laquelle on veut obtenir les valeurs des données historisées
$champs = new \Swagger\Client\Model\null(); //  | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = new \Swagger\Client\Model\null(); //  | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur

try {
    $result = $apiInstance->findBySiren($siren, $date, $champs, $masquer_valeurs_nulles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniteLegaleApi->findBySiren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siren** | [****](../Model/.md)| Identifiant de l&#x27;unité légale (9 chiffres) |
 **date** | [****](../Model/.md)| Date à laquelle on veut obtenir les valeurs des données historisées | [optional]
 **champs** | [****](../Model/.md)| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | [****](../Model/.md)| Masque (true) ou affiche (false, par défaut) les attributs qui n&#x27;ont pas de valeur | [optional]

### Return type

[**\Swagger\Client\Model\ReponseUniteLegale**](../Model/ReponseUniteLegale.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/json;charset=utf-8;qs=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

