# Facette

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nom** | **string** | Nom de la facette | [optional] 
**manquants** | **int** | Nombre d&#39;éléments pour lesquels la facette vaut null | [optional] 
**total** | **int** | Nombre total d&#39;éléments ayant une valeur non nulle pour la facette | [optional] 
**modalites** | **int** | Nombre de valeurs distinctes pour la facette | [optional] 
**avant** | **int** | Nombre d&#39;éléments dont la valeur est inférieure au premier intervalle, uniquement pour les facettes de type intervalle | [optional] 
**apres** | **int** | Nombre d&#39;éléments dont la valeur est supérieure au dernier intervalle, uniquement pour les facettes de type intervalle | [optional] 
**entre** | **int** | Nombre d&#39;élements compris entre la borne inférieure du premier intervalle et la borne supérieure du dernier intervalle, uniquement pour les facettes de type intervalle | [optional] 
**comptages** | [**\Sirene\Client\Model\Comptage[]**](Comptage.md) |  | [optional] 
**facettes** | [**\Sirene\Client\Model\Facette[]**](Facette.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


