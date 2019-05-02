# PeriodeEtablissement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_fin** | [**\DateTime**](\DateTime.md) | Date de fin de la période, null pour la dernière période, format AAAA-MM-DD | [optional] 
**date_debut** | [**\DateTime**](\DateTime.md) | Date de début de la période, format AAAA-MM-DD | [optional] 
**etat_administratif_etablissement** | **string** | État administratif de l&#39;établissement pendant la période (A&#x3D; établissement actif ; F&#x3D; établissement fermé) | [optional] 
**changement_etat_administratif_etablissement** | **bool** | Indicatrice de changement de l&#39;état administratif de l&#39;établissement par rapport à la période précédente | [optional] 
**enseigne1_etablissement** | **string** | Première ligne d&#39;enseigne | [optional] 
**enseigne2_etablissement** | **string** | Deuxième ligne d&#39;enseigne | [optional] 
**enseigne3_etablissement** | **string** | Troisième ligne d&#39;enseigne | [optional] 
**changement_enseigne_etablissement** | **bool** | Indicatrice de changement de l&#39;enseigne de l&#39;établissement par rapport à la période précédente (un seul indicateur pour les trois variables Enseigne1, Enseigne2 et Enseigne3) | [optional] 
**denomination_usuelle_etablissement** | **string** | Nom sous lequel l’activité de l’établissement est connu du public | [optional] 
**changement_denomination_usuelle_etablissement** | **bool** | Indicatrice de changement de la dénomination usuelle de l’établissement par rapport à la période précédente | [optional] 
**activite_principale_etablissement** | **string** | Activité principale de l&#39;établissement pendant la période (l&#39;APE est codifiée selon la &lt;a href&#x3D;&#39;https://www.insee.fr/fr/information/2406147&#39;&gt;nomenclature d&#39;Activités Française (NAF)&lt;/a&gt; | [optional] 
**nomenclature_activite_principale_etablissement** | **string** | Nomenclature de l&#39;activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipaleEtablissement | [optional] 
**changement_activite_principale_etablissement** | **bool** | Indicatrice de changement de l&#39;activité principale de l&#39;établissement par rapport à la période précédente | [optional] 
**caractere_employeur_etablissement** | **string** | Caractère employeur de l&#39;établissement (O&#x3D;oui ; N&#x3D;non ; null&#x3D;sans objet) | [optional] 
**changement_caractere_employeur_etablissement** | **bool** | Indicatrice de changement du caractère employeur de l&#39;établissement par rapport à la période précédente | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


