# UniteLegaleEtablissement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
**etat_administratif_unite_legale** | **string** | État de l&#39;entreprise pendant la période (A&#x3D; entreprise active, C&#x3D; entreprise cessée) | [optional] 
**nom_unite_legale** | **string** | Nom de naissance pour les personnes physiques pour la période (null pour les personnes morales) | [optional] 
**denomination_unite_legale** | **string** | Raison sociale (personnes morales) | [optional] 
**denomination_usuelle1_unite_legale** | **string** | Premier nom sous lequel l’entreprise est connue du public | [optional] 
**denomination_usuelle2_unite_legale** | **string** | Deuxième nom sous lequel l’entreprise est connue du public | [optional] 
**denomination_usuelle3_unite_legale** | **string** | Troisième nom sous lequel l’entreprise est connue du public | [optional] 
**activite_principale_unite_legale** | **string** | Activité principale de l&#39;entreprise pendant la période (l&#39;APE est codifiée selon la &lt;a href&#x3D;&#39;https://www.insee.fr/fr/information/2406147&#39;&gt;nomenclature d&#39;Activités Française (NAF)&lt;/a&gt; | [optional] 
**categorie_juridique_unite_legale** | **string** | Catégorie juridique de l’entreprise (&#x3D;1000 pour les personnes physiques) | [optional] 
**nic_siege_unite_legale** | **string** | Identifiant du siège pour la période (le Siret du siège est obtenu en concaténant le numéro Siren et le NIC) | [optional] 
**nomenclature_activite_principale_unite_legale** | **string** | Nomenclature de l&#39;activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipale | [optional] 
**nom_usage_unite_legale** | **string** | Nom d’usage pour les personnes physiques sinon null | [optional] 
**economie_sociale_solidaire_unite_legale** | **string** | Appartenance de l’unité légale au champ de l’économie sociale et solidaire (ESS) | [optional] 
**caractere_employeur_unite_legale** | **string** | Caractère employeur de l&#39;entreprise. Valeur courante&#x3D;O si au moins l&#39;un des établissements actifs de l&#39;unité légale emploie des salariés | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


