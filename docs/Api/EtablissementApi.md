# Swagger\Client\EtablissementApi

All URIs are relative to *https://api.insee.fr/api-sirene/3.11*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findByGetEtablissement**](EtablissementApi.md#findbygetetablissement) | **GET** /siret | Recherche multicritère d&#x27;établissements
[**findByPostEtablissement**](EtablissementApi.md#findbypostetablissement) | **POST** /siret | Recherche multicritère d&#x27;établissements
[**findBySiret**](EtablissementApi.md#findbysiret) | **GET** /siret/{siret} | Recherche d&#x27;un établissement par son numéro Siret
[**findLienSuccession**](EtablissementApi.md#findliensuccession) | **GET** /siret/liensSuccession | Recherche multicritère sur les liens de succession

# **findByGetEtablissement**
> \Swagger\Client\Model\ReponseEtablissements findByGetEtablissement($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur)

Recherche multicritère d'établissements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\EtablissementApi(
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
    $result = $apiInstance->findByGetEtablissement($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findByGetEtablissement: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ReponseEtablissements**](../Model/ReponseEtablissements.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8;qs=1, text/csv;charset=utf-8;qs=0.9, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findByPostEtablissement**
> \Swagger\Client\Model\ReponseEtablissements findByPostEtablissement($q, $date, $champs, $nombre, $debut, $masquer_valeurs_nulles, $tri, $curseur, $facette_champ)

Recherche multicritère d'établissements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\EtablissementApi(
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
    $result = $apiInstance->findByPostEtablissement($q, $date, $champs, $nombre, $debut, $masquer_valeurs_nulles, $tri, $curseur, $facette_champ);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findByPostEtablissement: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ReponseEtablissements**](../Model/ReponseEtablissements.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json;charset=utf-8;qs=1, text/csv;charset=utf-8;qs=0.9, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findBySiret**
> \Swagger\Client\Model\ReponseEtablissement findBySiret($siret, $date, $champs, $masquer_valeurs_nulles)

Recherche d'un établissement par son numéro Siret

Recherche d'un établissement par son numéro Siret (14 chiffres)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\EtablissementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siret = new \Swagger\Client\Model\null(); //  | Identifiant de l'établissement (14 chiffres)
$date = new \Swagger\Client\Model\null(); //  | Date à laquelle on veut obtenir les valeurs des données historisées
$champs = new \Swagger\Client\Model\null(); //  | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = new \Swagger\Client\Model\null(); //  | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur

try {
    $result = $apiInstance->findBySiret($siret, $date, $champs, $masquer_valeurs_nulles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findBySiret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siret** | [****](../Model/.md)| Identifiant de l&#x27;établissement (14 chiffres) |
 **date** | [****](../Model/.md)| Date à laquelle on veut obtenir les valeurs des données historisées | [optional]
 **champs** | [****](../Model/.md)| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | [****](../Model/.md)| Masque (true) ou affiche (false, par défaut) les attributs qui n&#x27;ont pas de valeur | [optional]

### Return type

[**\Swagger\Client\Model\ReponseEtablissement**](../Model/ReponseEtablissement.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLienSuccession**
> \Swagger\Client\Model\ReponseLienSuccession findLienSuccession($q, $tri, $nombre, $debut, $curseur)

Recherche multicritère sur les liens de succession

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-INSEE-Api-Key-Integration', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-INSEE-Api-Key-Integration', 'Bearer');

$apiInstance = new Swagger\Client\Api\EtablissementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = new \Swagger\Client\Model\null(); //  | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$tri = new \Swagger\Client\Model\null(); //  | Permet de trier sur la variable siretEtablissementSuccesseur au lieu de siretEtablissementPredecesseur
$nombre = new \Swagger\Client\Model\null(); //  | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = new \Swagger\Client\Model\null(); //  | Rang du premier élément demandé dans la réponse, défaut 0
$curseur = new \Swagger\Client\Model\null(); //  | Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions

try {
    $result = $apiInstance->findLienSuccession($q, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findLienSuccession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [****](../Model/.md)| Contenu de la requête multicritères, voir la documentation pour plus de précisions | [optional]
 **tri** | [****](../Model/.md)| Permet de trier sur la variable siretEtablissementSuccesseur au lieu de siretEtablissementPredecesseur | [optional]
 **nombre** | [****](../Model/.md)| Nombre d&#x27;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | [****](../Model/.md)| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]
 **curseur** | [****](../Model/.md)| Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions | [optional]

### Return type

[**\Swagger\Client\Model\ReponseLienSuccession**](../Model/ReponseLienSuccession.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8;qs=1, text/csv;charset=utf-8;qs=0.9, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

