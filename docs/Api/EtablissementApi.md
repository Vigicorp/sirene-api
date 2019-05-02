# Sirene\Client\EtablissementApi

All URIs are relative to *https://api.insee.fr/entreprises/sirene/V3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findBySiret**](EtablissementApi.md#findBySiret) | **GET** /siret/{siret} | Recherche d&#39;un établissement par son numéro Siret
[**findLiensSuccessionByQ**](EtablissementApi.md#findLiensSuccessionByQ) | **GET** /siret/liensSuccession | Recherche multicritère sur les liens de succession
[**findSiretByQ**](EtablissementApi.md#findSiretByQ) | **GET** /siret | Recherche multicritère d&#39;établissements
[**findSiretByQPost**](EtablissementApi.md#findSiretByQPost) | **POST** /siret | Recherche multicritère d&#39;établissements


# **findBySiret**
> \Sirene\Client\Model\ReponseEtablissement findBySiret($siret, $date, $champs, $masquer_valeurs_nulles)

Recherche d'un établissement par son numéro Siret



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sirene\Client\Api\EtablissementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$siret = "siret_example"; // string | Identifiant de l'établissement (14 chiffres)
$date = "date_example"; // string | Date à laquelle on veut obtenir les valeurs des données historisées
$champs = "champs_example"; // string | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = true; // bool | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur

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
 **siret** | **string**| Identifiant de l&#39;établissement (14 chiffres) |
 **date** | **string**| Date à laquelle on veut obtenir les valeurs des données historisées | [optional]
 **champs** | **string**| Liste des champs demandés, séparés par des virgules | [optional]
 **masquer_valeurs_nulles** | **bool**| Masque (true) ou affiche (false, par défaut) les attributs qui n&#39;ont pas de valeur | [optional]

### Return type

[**\Sirene\Client\Model\ReponseEtablissement**](../Model/ReponseEtablissement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLiensSuccessionByQ**
> \Sirene\Client\Model\ReponseLienSuccession findLiensSuccessionByQ($q, $tri, $nombre, $debut)

Recherche multicritère sur les liens de succession



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sirene\Client\Api\EtablissementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$tri = "tri_example"; // string | Permet de trier sur la variable siretEtablissementSuccesseur au lieu de siretEtablissementPredecesseur
$nombre = 56; // int | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = 56; // int | Rang du premier élément demandé dans la réponse, défaut 0

try {
    $result = $apiInstance->findLiensSuccessionByQ($q, $tri, $nombre, $debut);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findLiensSuccessionByQ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Contenu de la requête multicritères, voir la documentation pour plus de précisions | [optional]
 **tri** | **string**| Permet de trier sur la variable siretEtablissementSuccesseur au lieu de siretEtablissementPredecesseur | [optional]
 **nombre** | **int**| Nombre d&#39;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | **int**| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]

### Return type

[**\Sirene\Client\Model\ReponseLienSuccession**](../Model/ReponseLienSuccession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSiretByQ**
> \Sirene\Client\Model\ReponseEtablissements findSiretByQ($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur)

Recherche multicritère d'établissements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sirene\Client\Api\EtablissementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$date = "date_example"; // string | Date à laquelle s'appliqueront les critères de recherche sur les champs historisés, format AAAA-MM-JJ
$champs = "champs_example"; // string | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = true; // bool | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
$facette_champ = "facette_champ_example"; // string | Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
$tri = true; // bool | Active ou non le tri des résultats par identifiants, par défaut false
$nombre = 56; // int | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = 56; // int | Rang du premier élément demandé dans la réponse, défaut 0
$curseur = "curseur_example"; // string | Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions

try {
    $result = $apiInstance->findSiretByQ($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findSiretByQ: ', $e->getMessage(), PHP_EOL;
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
 **tri** | **bool**| Active ou non le tri des résultats par identifiants, par défaut false | [optional]
 **nombre** | **int**| Nombre d&#39;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | **int**| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]
 **curseur** | **string**| Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions | [optional]

### Return type

[**\Sirene\Client\Model\ReponseEtablissements**](../Model/ReponseEtablissements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSiretByQPost**
> \Sirene\Client\Model\ReponseEtablissements findSiretByQPost($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur)

Recherche multicritère d'établissements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sirene\Client\Api\EtablissementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | Contenu de la requête multicritères, voir la documentation pour plus de précisions
$date = "date_example"; // string | Date à laquelle s'appliqueront les critères de recherche sur les champs historisés, format AAAA-MM-JJ
$champs = "champs_example"; // string | Liste des champs demandés, séparés par des virgules
$masquer_valeurs_nulles = true; // bool | Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
$facette_champ = "facette_champ_example"; // string | Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
$tri = true; // bool | Active ou non le tri des résultats par identifiants, par défaut false
$nombre = 56; // int | Nombre d'éléments demandés dans la réponse, défaut 20
$debut = 56; // int | Rang du premier élément demandé dans la réponse, défaut 0
$curseur = "curseur_example"; // string | Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions

try {
    $result = $apiInstance->findSiretByQPost($q, $date, $champs, $masquer_valeurs_nulles, $facette_champ, $tri, $nombre, $debut, $curseur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EtablissementApi->findSiretByQPost: ', $e->getMessage(), PHP_EOL;
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
 **tri** | **bool**| Active ou non le tri des résultats par identifiants, par défaut false | [optional]
 **nombre** | **int**| Nombre d&#39;éléments demandés dans la réponse, défaut 20 | [optional]
 **debut** | **int**| Rang du premier élément demandé dans la réponse, défaut 0 | [optional]
 **curseur** | **string**| Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions | [optional]

### Return type

[**\Sirene\Client\Model\ReponseEtablissements**](../Model/ReponseEtablissements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

