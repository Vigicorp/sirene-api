# Etablissement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **float** | Score de l&#39;élément parmi l&#39;ensemble des éléments répondant à la requête, plus le score est élevé, plus l&#39;élément est haut placé. Le score n&#39;a pas de signification en dehors de la requête et n&#39;est pas comparable aux score d&#39;autres requêtes | [optional] 
**siren** | **string** | Numéro Siren de l&#39;entreprise à laquelle appartient l&#39;établissement | [optional] 
**nic** | **string** | Numéro interne de classement de l&#39;établissement | [optional] 
**siret** | **string** | Numéro Siret de l’établissement (toujours renseigné) | [optional] 
**statut_diffusion_etablissement** | **string** | Statut de diffusion de l&#39;établissement | [optional] 
**date_creation_etablissement** | **string** | Date de création de l&#39;établissement, format AAAA-MM-JJ | [optional] 
**tranche_effectifs_etablissement** | **string** | Tranche d’effectif salarié de l’établissement, valorisée uniquement si l’année correspondante est supérieure ou égale à l’année d’interrogation -3 (sinon, NN) | [optional] 
**annee_effectifs_etablissement** | **string** | Année de la tranche d’effectif salarié de l’établissement, valorisée uniquement si l&#39;année est supérieure ou égale à l’année d’interrogation -3 (sinon, null) | [optional] 
**activite_principale_registre_metiers_etablissement** | **string** | Code de l’activité exercée par l’artisan inscrit au registre des métiers. L’APRM est codifiée selon la nomenclature d’Activités Française de l’Artisanat (NAFA) | [optional] 
**date_dernier_traitement_etablissement** | **string** | Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siret concerné (AAAA-MM-JJTHH:MM:SS) | [optional] 
**etablissement_siege** | **bool** | Indicatrice précisant si le Siret est celui de l’établissement siège ou non | [optional] 
**nombre_periodes_etablissement** | **int** | Nombre de périodes dans la vie de l&#39;établissement | [optional] 
**unite_legale** | [**\Sirene\Client\Model\UniteLegaleEtablissement**](UniteLegaleEtablissement.md) |  | [optional] 
**adresse_etablissement** | [**\Sirene\Client\Model\Adresse**](Adresse.md) |  | [optional] 
**adresse2_etablissement** | [**\Sirene\Client\Model\AdresseComplementaire**](AdresseComplementaire.md) |  | [optional] 
**periodes_etablissement** | [**\Sirene\Client\Model\PeriodeEtablissement[]**](PeriodeEtablissement.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


