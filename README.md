# SwaggerClient-php
<p>Date de la dernière modification : 31 janvier 2019</p> <p>API Sirene donne accès aux informations concernant les entreprises et les établissements immatriculés au répertoire interadministratif Sirene depuis sa création en 1973, y compris les unités fermées. La recherche peut être unitaire, multicritère, phonétique et porter sur les données courantes et historisées. Les services actuellement disponibles interrogent les unités légales (Siren) et les établissements (Siret). À venir : prédécesseurs et successeurs d'un établissement et données pluriannuelles. <h4 class=\"add-margin-top-5x\">Licence</h4> <p>La réutilisation des jeux de données mis à votre disposition à partir de la base Sirene est soumise à la licence « <a href=\"https://www.etalab.gouv.fr/licence-ouverte-open-licence\" target=\"_blank\">Licence Ouverte / Open Licence version 2.0</a> » conçue par Etalab, organisme chargé de coordonner l’action des services de l’État et de ses établissements publics pour faciliter la réutilisation la plus large possible de leurs informations publiques, via le portail interministériel <a href=\"https://www.data.gouv.fr/fr/datasets/base-sirene-des-entreprises-et-de-leurs-etablissements-siren-siret/\" title=\"data.gouv.fr\" target=\"_blank\" class=\"external-link\">data.gouv.fr</a></p> <p>La base Sirene contenant des données à caractère personnel, l’Insee attire votre attention sur les obligations légales qui en découlent :</p> <ul> <li>Le traitement de ces données relève des obligations de déclaration de la Loi 78-17 du 6 janvier 1978 modifiée, dite Loi Informatique et Libertés : <a href=\"http://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000000886460\" title=\"Nouvelle fenêtre : la loi 78-17 du 6 janvier 1978 sur legifrance.gouv.fr\" target=\"_blank\" class=\"external-link\">Loi 78-17</a></li> <li>Selon votre usage du jeu de données, il est de votre responsabilité de tenir compte du statut de diffusion le plus récent de chaque personne physique.</li> </ul> <p>En effet, selon l’<a href=\"http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=C505A51DBC1A4EB1FFF3764C69ACDB1C.tpdjo11v_1?idArticle=LEGIARTI000020165030&cidTexte=LEGITEXT000005634379&dateTexte=20100702\" title=\"Nouvelle fenêtre : l’article A123-96 du code de commerce sur legifrance.gouv.fr\" target=\"_blank\" class=\"external-link\">Article A123-96 du code de commerce</a> :</p> <p>\"Toute personne physique peut demander soit directement lors de ses formalités de création ou de modification, soit par lettre adressée au directeur général de l’Institut national de la statistique et des études économiques, que les informations du répertoire la concernant ne puissent être utilisées par des tiers autres que les organismes habilités au titre de l’<a href=\"https://www.legifrance.gouv.fr/affichCodeArticle.do?cidTexte=LEGITEXT000005634379&idArticle=LEGIARTI000006258837&dateTexte=&categorieLien=cid\" title=\"article R. 123-224\" target=\"_blank\" class=\"external-link\">article R. 123-224</a> ou les administrations, à des fins de prospection, notamment commerciale.\"</p> <h4 class=\"add-margin-top-5x\">Limites d'utilisation</h4> <p>L'usage d'API Sirene est soumis à une limite de 30 interrogations par minute.</p> <p>L'Insee se réserve le droit de changer cette limite en cas de nécessité.</p> <h4 class=\"add-margin-top-5x\">Droit de rectification des données du répertoire Sirene</h4> <p>L'<a href=\"https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000020165042&cidTexte=LEGITEXT000005634379&dateTexte=20151223\" title=\"Nouvelle fenêtre : l’article A123-90 du code de commerce sur legifrance.gouv.fr\" target=\"_blank\" class=\"external-link\">article A123-90 du code de commerce</a> indique que \"Le droit d'accès prévu par l'article 39 de la loi du 6 janvier 1978 s'exerce auprès du directeur régional de l'Institut national de la statistique et des études économiques.\"</p> <h4 class=\"add-margin-top-5x\">Homologation provisoire RGS (Référentiel général de sécurité)</h4> <p>Le directeur général de l’Insee, après avoir recueilli l’avis des membres de la commission d’homologation de sécurité, atteste que le système \"API Sirene\" est protégé, conformément aux objectifs fixés par le maître d’ouvrage, pour répondre, de manière proportionnée, aux besoins de protection du système et des informations, face aux risques identifiés.</p> <p>Paris le 22 Juin 2018</p> <p>Pour le directeur général de l’Insee</p> <p>Par délégation</p> <p>Le secrétaire général de l’Insee</p>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.6.3
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EtablissementApi(
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

## Documentation for API Endpoints

All URIs are relative to *https://api.insee.fr/entreprises/sirene/V3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EtablissementApi* | [**findBySiret**](docs/Api/EtablissementApi.md#findbysiret) | **GET** /siret/{siret} | Recherche d&#39;un établissement par son numéro Siret
*EtablissementApi* | [**findLiensSuccessionByQ**](docs/Api/EtablissementApi.md#findlienssuccessionbyq) | **GET** /siret/liensSuccession | Recherche multicritère sur les liens de succession
*EtablissementApi* | [**findSiretByQ**](docs/Api/EtablissementApi.md#findsiretbyq) | **GET** /siret | Recherche multicritère d&#39;établissements
*EtablissementApi* | [**findSiretByQPost**](docs/Api/EtablissementApi.md#findsiretbyqpost) | **POST** /siret | Recherche multicritère d&#39;établissements
*InformationsApi* | [**informations**](docs/Api/InformationsApi.md#informations) | **GET** /informations | État du service, dates de mise à jour et numéro de version
*UniteLegaleApi* | [**findBySiren**](docs/Api/UniteLegaleApi.md#findbysiren) | **GET** /siren/{siren} | Recherche d&#39;une unité légale par son numéro Siren (9 chiffres)
*UniteLegaleApi* | [**findSirenByQ**](docs/Api/UniteLegaleApi.md#findsirenbyq) | **GET** /siren | Recherche multicritère d&#39;unités légales
*UniteLegaleApi* | [**findSirenByQPost**](docs/Api/UniteLegaleApi.md#findsirenbyqpost) | **POST** /siren | Recherche multicritère d&#39;unités légales


## Documentation For Models

 - [Adresse](docs/Model/Adresse.md)
 - [AdresseComplementaire](docs/Model/AdresseComplementaire.md)
 - [Comptage](docs/Model/Comptage.md)
 - [DatesMiseAJourDonnees](docs/Model/DatesMiseAJourDonnees.md)
 - [Etablissement](docs/Model/Etablissement.md)
 - [Facette](docs/Model/Facette.md)
 - [Header](docs/Model/Header.md)
 - [LienSuccession](docs/Model/LienSuccession.md)
 - [PeriodeEtablissement](docs/Model/PeriodeEtablissement.md)
 - [PeriodeUniteLegale](docs/Model/PeriodeUniteLegale.md)
 - [Reponse](docs/Model/Reponse.md)
 - [ReponseEtablissement](docs/Model/ReponseEtablissement.md)
 - [ReponseEtablissements](docs/Model/ReponseEtablissements.md)
 - [ReponseInformations](docs/Model/ReponseInformations.md)
 - [ReponseLienSuccession](docs/Model/ReponseLienSuccession.md)
 - [ReponseUniteLegale](docs/Model/ReponseUniteLegale.md)
 - [ReponseUnitesLegales](docs/Model/ReponseUnitesLegales.md)
 - [UniteLegale](docs/Model/UniteLegale.md)
 - [UniteLegaleEtablissement](docs/Model/UniteLegaleEtablissement.md)


## Documentation For Authorization


## default

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://api.insee.fr/authorize
- **Scopes**: N/A


## Author




