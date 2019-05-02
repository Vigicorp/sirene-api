# Header

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**statut** | **int** | Égal au status de la réponse HTTP | [optional] 
**message** | **string** | En cas d&#39;erreur, message indiquant la cause de l&#39;erreur. OK sinon | [optional] 
**total** | **int** | Nombre total des éléments répondant à la requête | [optional] 
**debut** | **int** | Numéro du premier élément fourni, défaut à 0, commence à 0 | [optional] 
**nombre** | **int** | Nombre d&#39;éléments fournis, défaut à 20 | [optional] 
**curseur** | **string** | Curseur passé en argument dans la requête de l&#39;utilisateur, utilisé pour la pagination profonde | [optional] 
**curseur_suivant** | **string** | Curseur suivant pour accéder à la suite des résultat lorsqu&#39;on utilise la pagination profonde | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


