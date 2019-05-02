# PeriodeUniteLegale

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_fin** | [**\DateTime**](\DateTime.md) | Date de fin de la période, null pour la dernière période, format AAAA-MM-DD | [optional] 
**date_debut** | [**\DateTime**](\DateTime.md) | Date de début de la période, format AAAA-MM-DD | [optional] 
**etat_administratif_unite_legale** | **string** | État de l&#39;entreprise pendant la période (A&#x3D; entreprise active, C&#x3D; entreprise cessée) | [optional] 
**changement_etat_administratif_unite_legale** | **bool** | Indicatrice de changement d&#39;état par rapport à la période précédente | [optional] 
**nom_unite_legale** | **string** | Nom de naissance pour les personnes physiques pour la période (null pour les personnes morales) | [optional] 
**changement_nom_unite_legale** | **bool** | Indicatrice de changement du nom par rapport à la période précédente | [optional] 
**nom_usage_unite_legale** | **string** | Nom d’usage pour les personnes physiques si celui-ci existe, null pour les personnes morales | [optional] 
**changement_nom_usage_unite_legale** | **bool** | Indicatrice de changement du nom d&#39;usage par rapport à la période précédente | [optional] 
**denomination_unite_legale** | **string** | Raison sociale (personnes morales) | [optional] 
**changement_denomination_unite_legale** | **bool** | Indicatrice de changement de la dénomination par rapport à la période précédente | [optional] 
**denomination_usuelle1_unite_legale** | **string** | Premier nom sous lequel l’entreprise est connue du public | [optional] 
**denomination_usuelle2_unite_legale** | **string** | Deuxième nom sous lequel l’entreprise est connue du public | [optional] 
**denomination_usuelle3_unite_legale** | **string** | Troisième nom sous lequel l’entreprise est connue du public | [optional] 
**changement_denomination_usuelle_unite_legale** | **bool** | Indicatrice de changement de la dénomination usuelle de l&#39;unité légale par rapport à la période précédente (un seul indicateur pour les trois variables denominationUsuelle1UniteLegale, denominationUsuelle2UniteLegale et denominationUsuelle3UniteLegale) | [optional] 
**categorie_juridique_unite_legale** | **string** | Catégorie juridique de l&#39;entreprise (variable Null pour les personnes physiques. (&lt;a href&#x3D;&#39;https://www.insee.fr/fr/information/2028129&#39;&gt;la nomenclature sur insee.fr&lt;/a&gt;)) | [optional] 
**changement_categorie_juridique_unite_legale** | **bool** | Indicatrice de changement de la catégorie juridique par rapport à la période précédente | [optional] 
**activite_principale_unite_legale** | **string** | Activité principale de l&#39;entreprise pendant la période (l&#39;APE est codifiée selon la &lt;a href&#x3D;&#39;https://www.insee.fr/fr/information/2406147&#39;&gt;nomenclature d&#39;Activités Française (NAF)&lt;/a&gt; | [optional] 
**nomenclature_activite_principale_unite_legale** | **string** | Nomenclature de l&#39;activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipale | [optional] 
**changement_activite_principale_unite_legale** | **bool** | Indicatrice de changement de l&#39;activité principale par rapport à la période précédente | [optional] 
**nic_siege_unite_legale** | **string** | Identifiant du siège pour la période (le Siret du siège est obtenu en concaténant le numéro Siren et le Nic) | [optional] 
**changement_nic_siege_unite_legale** | **bool** | Indicatrice de changement du NIC du siège par rapport à la période précédente | [optional] 
**economie_sociale_solidaire_unite_legale** | **string** | Appartenance de l’unité légale au champ de l’économie sociale et solidaire (ESS) | [optional] 
**changement_economie_sociale_solidaire_unite_legale** | **bool** | Indicatrice de changement de l&#39;ESS par rapport à la période précédente | [optional] 
**caractere_employeur_unite_legale** | **string** | Caractère employeur de l&#39;entreprise. Valeur courante&#x3D;O si au moins l&#39;un des établissements actifs de l&#39;unité légale emploie des salariés | [optional] 
**changement_caractere_employeur_unite_legale** | **bool** | Indicatrice de changement du caractère employeur par rapport à la période précédente | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


