# UniteLegaleEtablissement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**statut_diffusion_unite_legale** | [****](.md) | Statut de diffusion de l’unité légale | [optional] 
**unite_purgee_unite_legale** | [****](.md) | True si l&#x27;unité est une unité purgée | [optional] 
**date_creation_unite_legale** | [****](.md) | Date de création de l&#x27;unité légale | [optional] 
**date_naissance_unite_legale** | [****](.md) | L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Date de naissance pour la personne physique sinon null | [optional] 
**code_commune_naissance_unite_legale** | [****](.md) | L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code commune de naissance pour les personnes physiques, null pour les personnes morales et les personnes physiques nées à l’étranger | [optional] 
**code_pays_naissance_unite_legale** | [****](.md) | L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code pays de naissance pour les personnes physiques nées à l’étranger, null sinon | [optional] 
**libelle_nationalite_unite_legale** | [****](.md) | L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Nationalité pour les personnes physiques | [optional] 
**identifiant_association_unite_legale** | [****](.md) | Numéro au Répertoire National des Associations | [optional] 
**tranche_effectifs_unite_legale** | [****](.md) | Tranche d&#x27;effectif salarié de l&#x27;unité légale, valorisé uniquement si l&#x27;année correspondante est supérieure ou égale à l&#x27;année d&#x27;interrogation-3 (sinon, NN) | [optional] 
**annee_effectifs_unite_legale** | [****](.md) | Année de validité de la tranche d&#x27;effectif salarié de l&#x27;unité légale, valorisée uniquement si l&#x27;année est supérieure ou égale à l&#x27;année d&#x27;interrogation-3 (sinon, null) | [optional] 
**date_dernier_traitement_unite_legale** | [****](.md) | Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siren concerné | [optional] 
**categorie_entreprise** | [****](.md) | Catégorie à laquelle appartient l&#x27;entreprise : Petite ou moyenne entreprise, Entreprise de taille intermédiaire, Grande entreprise | [optional] 
**annee_categorie_entreprise** | [****](.md) | Année de validité de la catégorie d&#x27;entreprise | [optional] 
**sigle_unite_legale** | [****](.md) | Sigle de l&#x27;unité légale | [optional] 
**sexe_unite_legale** | [****](.md) | Sexe pour les personnes physiques sinon null | [optional] 
**prenom1_unite_legale** | [****](.md) | Premier prénom déclaré pour une personne physique, peut être null dans le cas d&#x27;une unité purgée | [optional] 
**prenom2_unite_legale** | [****](.md) | Deuxième prénom déclaré pour une personne physique | [optional] 
**prenom3_unite_legale** | [****](.md) | Troisième prénom déclaré pour une personne physique | [optional] 
**prenom4_unite_legale** | [****](.md) | Quatrième prénom déclaré pour une personne physique | [optional] 
**prenom_usuel_unite_legale** | [****](.md) | Prénom usuel pour les personne physiques, correspond généralement au Prenom1 | [optional] 
**pseudonyme_unite_legale** | [****](.md) | Pseudonyme pour les personnes physiques | [optional] 
**etat_administratif_unite_legale** | [****](.md) | État de l&#x27;entreprise pendant la période (A&#x3D; entreprise active, C&#x3D; entreprise cessée) | [optional] 
**nom_unite_legale** | [****](.md) | Nom de naissance pour les personnes physiques pour la période (null pour les personnes morales) | [optional] 
**denomination_unite_legale** | [****](.md) | Raison sociale (personnes morales) | [optional] 
**denomination_usuelle1_unite_legale** | [****](.md) | Premier nom sous lequel l’entreprise est connue du public | [optional] 
**denomination_usuelle2_unite_legale** | [****](.md) | Deuxième nom sous lequel l’entreprise est connue du public | [optional] 
**denomination_usuelle3_unite_legale** | [****](.md) | Troisième nom sous lequel l’entreprise est connue du public | [optional] 
**activite_principale_unite_legale** | [****](.md) | Activité principale de l&#x27;entreprise pendant la période (l&#x27;APE est codifiée selon la &lt;a href&#x3D;&#x27;https://www.insee.fr/fr/information/2406147&#x27;&gt;nomenclature d&#x27;Activités Française (NAF)&lt;/a&gt; | [optional] 
**categorie_juridique_unite_legale** | [****](.md) | Catégorie juridique de l’entreprise (&#x3D;1000 pour les personnes physiques) | [optional] 
**nic_siege_unite_legale** | [****](.md) | Identifiant du siège pour la période (le Siret du siège est obtenu en concaténant le numéro Siren et le NIC) | [optional] 
**nomenclature_activite_principale_unite_legale** | [****](.md) | Nomenclature de l&#x27;activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipale | [optional] 
**nom_usage_unite_legale** | [****](.md) | Nom d’usage pour les personnes physiques sinon null | [optional] 
**economie_sociale_solidaire_unite_legale** | [****](.md) | Appartenance de l’unité légale au champ de l’économie sociale et solidaire (ESS) | [optional] 
**societe_mission_unite_legale** | [****](.md) | Appartenance de l’unité légale au champ societé à mission | [optional] 
**caractere_employeur_unite_legale** | [****](.md) | Caractère employeur de l&#x27;entreprise. Valeur courante&#x3D;O si au moins l&#x27;un des établissements actifs de l&#x27;unité légale emploie des salariés | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

