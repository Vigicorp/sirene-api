# Swagger\Client\UniteLegaleApi

All URIs are relative to *https://api.insee.fr/entreprises/sirene/V3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findBySiren**](UniteLegaleApi.md#findBySiren) | **GET** /siren/{siren} | Recherche d&#39;une unité légale par son numéro Siren (9 chiffres)
[**findSirenByQ**](UniteLegaleApi.md#findSirenByQ) | **GET** /siren | Recherche multicritère d&#39;unités légales
[**findSirenByQPost**](UniteLegaleApi.md#findSirenByQPost) | **POST** /siren | Recherche multicritère d&#39;unités légales


# **findBySiren**
> \Sirene\Client\Model\ReponseUniteLegale findBySiren($siren, $date, $champs, $masquer_valeurs_nulles)

Recherche d'une unité légale par son numéro Siren (9 chiffres)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UniteLegaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$siren = "siren_example"; // string | Identifiant de l'unité légale (9 chiffres)
$date = "date_example"; // string | Date à laquelle on veut obtenir les valeurs des données historisées
$champs = "champs_example"; // string | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = true; // bool | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur

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
 **siren** | **string**| Identifiant de l&#39;unité légale (9 chiffres) |
 **date** | **string**| Date à laquelle on veut obtenir les valeurs des données historisées | [optional]
 **champs** | **string**| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | **bool**| Masque (true) ou affiche (false, par défaut) les attributs qui n&#39;ont pas de valeur | [optional]

### Return type

[**\Sirene\Client\Model\ReponseUniteLegale**](../Model/ReponseUniteLegale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSirenByQ**
> \Sirene\Client\Model\ReponseUnitesLegales findSirenByQ($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur)

Recherche multicritère d'unités légales



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UniteLegaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$date = "date_example"; // string | Date à laquelle s'appliqueront les critères de recherche sur les champs historisés, format AAAA-MM-JJ
$champs = "champs_example"; // string | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = true; // bool | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
$facette_champ = "facette_champ_example"; // string | Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
$tri = true; // bool | Active ou non le tri des résultats par identifiants
$nombre = 56; // int | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = 56; // int | Rang du premier élément demandé dans la réponse, défaut 0
$curseur = "curseur_example"; // string | Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions

try {
    $result = $apiInstance->findSirenByQ($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniteLegaleApi->findSirenByQ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Contenu de la requête multicritères, voir la documentation pour plus de précisions | [optional]
 **date** | **string**| Date à laquelle s&#39;appliqueront les critères de recherche sur les champs historisés, format AAAA-MM-JJ | [optional]
 **champs** | **string**| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | **bool**| Masque (true) ou affiche (false, par défaut) les attributs qui n&#39;ont pas de valeur | [optional]
 **facette_champ** | **string**| Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules | [optional]
 **tri** | **bool**| Active ou non le tri des résultats par identifiants | [optional]
 **nombre** | **int**| Nombre d&#39;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | **int**| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]
 **curseur** | **string**| Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions | [optional]

### Return type

[**\Sirene\Client\Model\ReponseUnitesLegales**](../Model/ReponseUnitesLegales.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSirenByQPost**
> \Sirene\Client\Model\ReponseUnitesLegales findSirenByQPost($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur)

Recherche multicritère d'unités légales



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UniteLegaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$date = "date_example"; // string | Date à laquelle s'appliqueront les critères de recherche sur les champs historisés, format AAAA-MM-JJ
$champs = "champs_example"; // string | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = true; // bool | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
$facette_champ = "facette_champ_example"; // string | Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
$tri = true; // bool | Active ou non le tri des résultats par identifiants
$nombre = 56; // int | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = 56; // int | Rang du premier élément demandé dans la réponse, défaut 0
$curseur = "curseur_example"; // string | Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions

try {
    $result = $apiInstance->findSirenByQPost($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniteLegaleApi->findSirenByQPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Contenu de la requête multicritères, voir la documentation pour plus de précisions | [optional]
 **date** | **string**| Date à laquelle s&#39;appliqueront les critères de recherche sur les champs historisés, format AAAA-MM-JJ | [optional]
 **champs** | **string**| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | **bool**| Masque (true) ou affiche (false, par défaut) les attributs qui n&#39;ont pas de valeur | [optional]
 **facette_champ** | **string**| Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules | [optional]
 **tri** | **bool**| Active ou non le tri des résultats par identifiants | [optional]
 **nombre** | **int**| Nombre d&#39;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | **int**| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]
 **curseur** | **string**| Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions | [optional]

### Return type

[**\Sirene\Client\Model\ReponseUnitesLegales**](../Model/ReponseUnitesLegales.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

