# Etablissement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | [****](.md) | Score de l&#x27;élément parmi l&#x27;ensemble des éléments répondant à la requête, plus le score est élevé, plus l&#x27;élément est haut placé. Le score n&#x27;a pas de signification en dehors de la requête et n&#x27;est pas comparable aux score d&#x27;autres requêtes | [optional] 
**siren** | [****](.md) | Numéro Siren de l&#x27;entreprise à laquelle appartient l&#x27;établissement | [optional] 
**nic** | [****](.md) | Numéro interne de classement de l&#x27;établissement | [optional] 
**siret** | [****](.md) | Numéro Siret de l’établissement (toujours renseigné) | [optional] 
**statut_diffusion_etablissement** | [****](.md) | Statut de diffusion de l&#x27;établissement | [optional] 
**date_creation_etablissement** | [****](.md) | Date de création de l&#x27;établissement, format AAAA-MM-JJ | [optional] 
**tranche_effectifs_etablissement** | [****](.md) | Tranche d’effectif salarié de l’établissement, valorisée uniquement si l’année correspondante est supérieure ou égale à l’année d’interrogation -3 (sinon, NN) | [optional] 
**annee_effectifs_etablissement** | [****](.md) | Année de la tranche d’effectif salarié de l’établissement, valorisée uniquement si l&#x27;année est supérieure ou égale à l’année d’interrogation -3 (sinon, null) | [optional] 
**activite_principale_registre_metiers_etablissement** | [****](.md) | Code de l’activité exercée par l’artisan inscrit au registre des métiers. L’APRM est codifiée selon la nomenclature d’Activités Française de l’Artisanat (NAFA) | [optional] 
**date_dernier_traitement_etablissement** | [****](.md) | Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siret concerné (yyyy-MM-ddTHH:mm:ss.SSS) | [optional] 
**etablissement_siege** | [****](.md) | Indicatrice précisant si le Siret est celui de l’établissement siège ou non | [optional] 
**nombre_periodes_etablissement** | [****](.md) | Nombre de périodes dans la vie de l&#x27;établissement | [optional] 
**unite_legale** | [**\Sirene\Client\Model\UniteLegaleEtablissement**](UniteLegaleEtablissement.md) |  | [optional] 
**adresse_etablissement** | [**\Sirene\Client\Model\Adresse**](Adresse.md) |  | [optional] 
**adresse2_etablissement** | [**\Sirene\Client\Model\AdresseComplementaire**](AdresseComplementaire.md) |  | [optional] 
**periodes_etablissement** | [****](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

