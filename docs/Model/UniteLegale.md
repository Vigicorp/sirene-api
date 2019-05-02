# UniteLegale

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **float** | Score de l&#39;élément parmi l&#39;ensemble des éléments répondant à la requête, plus le score est élevé, plus l&#39;élément est haut placé. Le score n&#39;a pas de signification en dehors de la requête et n&#39;est pas comparable aux score d&#39;autres requêtes | [optional] 
**siren** | **string** | Numéro Siren de l&#39;entreprise, toujours renseigné | [optional] 
**statut_diffusion_unite_legale** | **string** | Statut de diffusion de l’unité légale | [optional] 
**unite_purgee_unite_legale** | **bool** | True si l&#39;unité est une unité purgée | [optional] 
**date_creation_unite_legale** | **string** | Date de création de l&#39;unité légale, au format AAAA-MM-JJ | [optional] 
**sigle_unite_legale** | **string** | Sigle de l&#39;unité légale | [optional] 
**sexe_unite_legale** | **string** | Sexe pour les personnes physiques sinon null | [optional] 
**prenom1_unite_legale** | **string** | Premier prénom déclaré pour une personne physique, peut être null dans le cas d&#39;une unité purgée | [optional] 
**prenom2_unite_legale** | **string** | Deuxième prénom déclaré pour une personne physique | [optional] 
**prenom3_unite_legale** | **string** | Troisième prénom déclaré pour une personne physique | [optional] 
**prenom4_unite_legale** | **string** | Quatrième prénom déclaré pour une personne physique | [optional] 
**prenom_usuel_unite_legale** | **string** | Prénom usuel pour les personne physiques, correspond généralement au Prenom1 | [optional] 
**pseudonyme_unite_legale** | **string** | Pseudonyme pour les personnes physiques | [optional] 
**identifiant_association_unite_legale** | **string** | Numéro au Répertoire National des Associations | [optional] 
**tranche_effectifs_unite_legale** | **string** | Tranche d&#39;effectif salarié de l&#39;unité légale, valorisé uniquement si l&#39;année correspondante est supérieure ou égale à l&#39;année d&#39;interrogation-3 (sinon, NN) | [optional] 
**annee_effectifs_unite_legale** | **string** | Année de validité de la tranche d&#39;effectif salarié de l&#39;unité légale, valorisée uniquement si l&#39;année est supérieure ou égale à l&#39;année d&#39;interrogation-3 (sinon, null) | [optional] 
**date_dernier_traitement_unite_legale** | **string** | Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siren concerné, format AAAA-MM-JJTHH:MM:SS | [optional] 
**nombre_periodes_unite_legale** | **int** | Nombre de périodes dans la vie de l&#39;unité légale | [optional] 
**categorie_entreprise** | **string** | Catégorie à laquelle appartient l&#39;entreprise : Petite ou moyenne entreprise, Entreprise de taille intermédiaire, Grande entreprise | [optional] 
**annee_categorie_entreprise** | **string** | Année de validité de la catégorie d&#39;entreprise | [optional] 
**periodes_unite_legale** | [**\Sirene\Client\Model\PeriodeUniteLegale[]**](PeriodeUniteLegale.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


