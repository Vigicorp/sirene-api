<?php
/**
 * UniteLegale
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Sirene
 *
 * <p>Date de la dernière modification : 31 janvier 2019</p> <p>API Sirene donne accès aux informations concernant les entreprises et les établissements immatriculés au répertoire interadministratif Sirene depuis sa création en 1973, y compris les unités fermées. La recherche peut être unitaire, multicritère, phonétique et porter sur les données courantes et historisées. Les services actuellement disponibles interrogent les unités légales (Siren) et les établissements (Siret). À venir : prédécesseurs et successeurs d'un établissement et données pluriannuelles. <h4 class=\"add-margin-top-5x\">Licence</h4> <p>La réutilisation des jeux de données mis à votre disposition à partir de la base Sirene est soumise à la licence « <a href=\"https://www.etalab.gouv.fr/licence-ouverte-open-licence\" target=\"_blank\">Licence Ouverte / Open Licence version 2.0</a> » conçue par Etalab, organisme chargé de coordonner l’action des services de l’État et de ses établissements publics pour faciliter la réutilisation la plus large possible de leurs informations publiques, via le portail interministériel <a href=\"https://www.data.gouv.fr/fr/datasets/base-sirene-des-entreprises-et-de-leurs-etablissements-siren-siret/\" title=\"data.gouv.fr\" target=\"_blank\" class=\"external-link\">data.gouv.fr</a></p> <p>La base Sirene contenant des données à caractère personnel, l’Insee attire votre attention sur les obligations légales qui en découlent :</p> <ul> <li>Le traitement de ces données relève des obligations de déclaration de la Loi 78-17 du 6 janvier 1978 modifiée, dite Loi Informatique et Libertés : <a href=\"http://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000000886460\" title=\"Nouvelle fenêtre : la loi 78-17 du 6 janvier 1978 sur legifrance.gouv.fr\" target=\"_blank\" class=\"external-link\">Loi 78-17</a></li> <li>Selon votre usage du jeu de données, il est de votre responsabilité de tenir compte du statut de diffusion le plus récent de chaque personne physique.</li> </ul> <p>En effet, selon l’<a href=\"http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=C505A51DBC1A4EB1FFF3764C69ACDB1C.tpdjo11v_1?idArticle=LEGIARTI000020165030&cidTexte=LEGITEXT000005634379&dateTexte=20100702\" title=\"Nouvelle fenêtre : l’article A123-96 du code de commerce sur legifrance.gouv.fr\" target=\"_blank\" class=\"external-link\">Article A123-96 du code de commerce</a> :</p> <p>\"Toute personne physique peut demander soit directement lors de ses formalités de création ou de modification, soit par lettre adressée au directeur général de l’Institut national de la statistique et des études économiques, que les informations du répertoire la concernant ne puissent être utilisées par des tiers autres que les organismes habilités au titre de l’<a href=\"https://www.legifrance.gouv.fr/affichCodeArticle.do?cidTexte=LEGITEXT000005634379&idArticle=LEGIARTI000006258837&dateTexte=&categorieLien=cid\" title=\"article R. 123-224\" target=\"_blank\" class=\"external-link\">article R. 123-224</a> ou les administrations, à des fins de prospection, notamment commerciale.\"</p> <h4 class=\"add-margin-top-5x\">Limites d'utilisation</h4> <p>L'usage d'API Sirene est soumis à une limite de 30 interrogations par minute.</p> <p>L'Insee se réserve le droit de changer cette limite en cas de nécessité.</p> <h4 class=\"add-margin-top-5x\">Droit de rectification des données du répertoire Sirene</h4> <p>L'<a href=\"https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000020165042&cidTexte=LEGITEXT000005634379&dateTexte=20151223\" title=\"Nouvelle fenêtre : l’article A123-90 du code de commerce sur legifrance.gouv.fr\" target=\"_blank\" class=\"external-link\">article A123-90 du code de commerce</a> indique que \"Le droit d'accès prévu par l'article 39 de la loi du 6 janvier 1978 s'exerce auprès du directeur régional de l'Institut national de la statistique et des études économiques.\"</p> <h4 class=\"add-margin-top-5x\">Homologation provisoire RGS (Référentiel général de sécurité)</h4> <p>Le directeur général de l’Insee, après avoir recueilli l’avis des membres de la commission d’homologation de sécurité, atteste que le système \"API Sirene\" est protégé, conformément aux objectifs fixés par le maître d’ouvrage, pour répondre, de manière proportionnée, aux besoins de protection du système et des informations, face aux risques identifiés.</p> <p>Paris le 22 Juin 2018</p> <p>Pour le directeur général de l’Insee</p> <p>Par délégation</p> <p>Le secrétaire général de l’Insee</p>
 *
 * OpenAPI spec version: 3.6.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UniteLegale Class Doc Comment
 *
 * @category Class
 * @description Objet représentant une unité légale et son historique
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UniteLegale implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UniteLegale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'score' => 'float',
        'siren' => 'string',
        'statut_diffusion_unite_legale' => 'string',
        'unite_purgee_unite_legale' => 'bool',
        'date_creation_unite_legale' => 'string',
        'sigle_unite_legale' => 'string',
        'sexe_unite_legale' => 'string',
        'prenom1_unite_legale' => 'string',
        'prenom2_unite_legale' => 'string',
        'prenom3_unite_legale' => 'string',
        'prenom4_unite_legale' => 'string',
        'prenom_usuel_unite_legale' => 'string',
        'pseudonyme_unite_legale' => 'string',
        'identifiant_association_unite_legale' => 'string',
        'tranche_effectifs_unite_legale' => 'string',
        'annee_effectifs_unite_legale' => 'string',
        'date_dernier_traitement_unite_legale' => 'string',
        'nombre_periodes_unite_legale' => 'int',
        'categorie_entreprise' => 'string',
        'annee_categorie_entreprise' => 'string',
        'periodes_unite_legale' => '\Swagger\Client\Model\PeriodeUniteLegale[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'score' => 'float',
        'siren' => null,
        'statut_diffusion_unite_legale' => null,
        'unite_purgee_unite_legale' => null,
        'date_creation_unite_legale' => null,
        'sigle_unite_legale' => null,
        'sexe_unite_legale' => null,
        'prenom1_unite_legale' => null,
        'prenom2_unite_legale' => null,
        'prenom3_unite_legale' => null,
        'prenom4_unite_legale' => null,
        'prenom_usuel_unite_legale' => null,
        'pseudonyme_unite_legale' => null,
        'identifiant_association_unite_legale' => null,
        'tranche_effectifs_unite_legale' => null,
        'annee_effectifs_unite_legale' => null,
        'date_dernier_traitement_unite_legale' => null,
        'nombre_periodes_unite_legale' => 'int32',
        'categorie_entreprise' => null,
        'annee_categorie_entreprise' => null,
        'periodes_unite_legale' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'score' => 'score',
        'siren' => 'siren',
        'statut_diffusion_unite_legale' => 'statutDiffusionUniteLegale',
        'unite_purgee_unite_legale' => 'unitePurgeeUniteLegale',
        'date_creation_unite_legale' => 'dateCreationUniteLegale',
        'sigle_unite_legale' => 'sigleUniteLegale',
        'sexe_unite_legale' => 'sexeUniteLegale',
        'prenom1_unite_legale' => 'prenom1UniteLegale',
        'prenom2_unite_legale' => 'prenom2UniteLegale',
        'prenom3_unite_legale' => 'prenom3UniteLegale',
        'prenom4_unite_legale' => 'prenom4UniteLegale',
        'prenom_usuel_unite_legale' => 'prenomUsuelUniteLegale',
        'pseudonyme_unite_legale' => 'pseudonymeUniteLegale',
        'identifiant_association_unite_legale' => 'identifiantAssociationUniteLegale',
        'tranche_effectifs_unite_legale' => 'trancheEffectifsUniteLegale',
        'annee_effectifs_unite_legale' => 'anneeEffectifsUniteLegale',
        'date_dernier_traitement_unite_legale' => 'dateDernierTraitementUniteLegale',
        'nombre_periodes_unite_legale' => 'nombrePeriodesUniteLegale',
        'categorie_entreprise' => 'categorieEntreprise',
        'annee_categorie_entreprise' => 'anneeCategorieEntreprise',
        'periodes_unite_legale' => 'periodesUniteLegale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'score' => 'setScore',
        'siren' => 'setSiren',
        'statut_diffusion_unite_legale' => 'setStatutDiffusionUniteLegale',
        'unite_purgee_unite_legale' => 'setUnitePurgeeUniteLegale',
        'date_creation_unite_legale' => 'setDateCreationUniteLegale',
        'sigle_unite_legale' => 'setSigleUniteLegale',
        'sexe_unite_legale' => 'setSexeUniteLegale',
        'prenom1_unite_legale' => 'setPrenom1UniteLegale',
        'prenom2_unite_legale' => 'setPrenom2UniteLegale',
        'prenom3_unite_legale' => 'setPrenom3UniteLegale',
        'prenom4_unite_legale' => 'setPrenom4UniteLegale',
        'prenom_usuel_unite_legale' => 'setPrenomUsuelUniteLegale',
        'pseudonyme_unite_legale' => 'setPseudonymeUniteLegale',
        'identifiant_association_unite_legale' => 'setIdentifiantAssociationUniteLegale',
        'tranche_effectifs_unite_legale' => 'setTrancheEffectifsUniteLegale',
        'annee_effectifs_unite_legale' => 'setAnneeEffectifsUniteLegale',
        'date_dernier_traitement_unite_legale' => 'setDateDernierTraitementUniteLegale',
        'nombre_periodes_unite_legale' => 'setNombrePeriodesUniteLegale',
        'categorie_entreprise' => 'setCategorieEntreprise',
        'annee_categorie_entreprise' => 'setAnneeCategorieEntreprise',
        'periodes_unite_legale' => 'setPeriodesUniteLegale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'score' => 'getScore',
        'siren' => 'getSiren',
        'statut_diffusion_unite_legale' => 'getStatutDiffusionUniteLegale',
        'unite_purgee_unite_legale' => 'getUnitePurgeeUniteLegale',
        'date_creation_unite_legale' => 'getDateCreationUniteLegale',
        'sigle_unite_legale' => 'getSigleUniteLegale',
        'sexe_unite_legale' => 'getSexeUniteLegale',
        'prenom1_unite_legale' => 'getPrenom1UniteLegale',
        'prenom2_unite_legale' => 'getPrenom2UniteLegale',
        'prenom3_unite_legale' => 'getPrenom3UniteLegale',
        'prenom4_unite_legale' => 'getPrenom4UniteLegale',
        'prenom_usuel_unite_legale' => 'getPrenomUsuelUniteLegale',
        'pseudonyme_unite_legale' => 'getPseudonymeUniteLegale',
        'identifiant_association_unite_legale' => 'getIdentifiantAssociationUniteLegale',
        'tranche_effectifs_unite_legale' => 'getTrancheEffectifsUniteLegale',
        'annee_effectifs_unite_legale' => 'getAnneeEffectifsUniteLegale',
        'date_dernier_traitement_unite_legale' => 'getDateDernierTraitementUniteLegale',
        'nombre_periodes_unite_legale' => 'getNombrePeriodesUniteLegale',
        'categorie_entreprise' => 'getCategorieEntreprise',
        'annee_categorie_entreprise' => 'getAnneeCategorieEntreprise',
        'periodes_unite_legale' => 'getPeriodesUniteLegale'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const SEXE_UNITE_LEGALE_M = 'M';
    const SEXE_UNITE_LEGALE_F = 'F';
    const SEXE_UNITE_LEGALE_NULL = 'null';
    const CATEGORIE_ENTREPRISE_PME = 'PME';
    const CATEGORIE_ENTREPRISE_ETI = 'ETI';
    const CATEGORIE_ENTREPRISE_GE = 'GE';
    const CATEGORIE_ENTREPRISE_NULL = 'null';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexeUniteLegaleAllowableValues()
    {
        return [
            self::SEXE_UNITE_LEGALE_M,
            self::SEXE_UNITE_LEGALE_F,
            self::SEXE_UNITE_LEGALE_NULL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategorieEntrepriseAllowableValues()
    {
        return [
            self::CATEGORIE_ENTREPRISE_PME,
            self::CATEGORIE_ENTREPRISE_ETI,
            self::CATEGORIE_ENTREPRISE_GE,
            self::CATEGORIE_ENTREPRISE_NULL,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['siren'] = isset($data['siren']) ? $data['siren'] : null;
        $this->container['statut_diffusion_unite_legale'] = isset($data['statut_diffusion_unite_legale']) ? $data['statut_diffusion_unite_legale'] : null;
        $this->container['unite_purgee_unite_legale'] = isset($data['unite_purgee_unite_legale']) ? $data['unite_purgee_unite_legale'] : null;
        $this->container['date_creation_unite_legale'] = isset($data['date_creation_unite_legale']) ? $data['date_creation_unite_legale'] : null;
        $this->container['sigle_unite_legale'] = isset($data['sigle_unite_legale']) ? $data['sigle_unite_legale'] : null;
        $this->container['sexe_unite_legale'] = isset($data['sexe_unite_legale']) ? $data['sexe_unite_legale'] : null;
        $this->container['prenom1_unite_legale'] = isset($data['prenom1_unite_legale']) ? $data['prenom1_unite_legale'] : null;
        $this->container['prenom2_unite_legale'] = isset($data['prenom2_unite_legale']) ? $data['prenom2_unite_legale'] : null;
        $this->container['prenom3_unite_legale'] = isset($data['prenom3_unite_legale']) ? $data['prenom3_unite_legale'] : null;
        $this->container['prenom4_unite_legale'] = isset($data['prenom4_unite_legale']) ? $data['prenom4_unite_legale'] : null;
        $this->container['prenom_usuel_unite_legale'] = isset($data['prenom_usuel_unite_legale']) ? $data['prenom_usuel_unite_legale'] : null;
        $this->container['pseudonyme_unite_legale'] = isset($data['pseudonyme_unite_legale']) ? $data['pseudonyme_unite_legale'] : null;
        $this->container['identifiant_association_unite_legale'] = isset($data['identifiant_association_unite_legale']) ? $data['identifiant_association_unite_legale'] : null;
        $this->container['tranche_effectifs_unite_legale'] = isset($data['tranche_effectifs_unite_legale']) ? $data['tranche_effectifs_unite_legale'] : null;
        $this->container['annee_effectifs_unite_legale'] = isset($data['annee_effectifs_unite_legale']) ? $data['annee_effectifs_unite_legale'] : null;
        $this->container['date_dernier_traitement_unite_legale'] = isset($data['date_dernier_traitement_unite_legale']) ? $data['date_dernier_traitement_unite_legale'] : null;
        $this->container['nombre_periodes_unite_legale'] = isset($data['nombre_periodes_unite_legale']) ? $data['nombre_periodes_unite_legale'] : null;
        $this->container['categorie_entreprise'] = isset($data['categorie_entreprise']) ? $data['categorie_entreprise'] : null;
        $this->container['annee_categorie_entreprise'] = isset($data['annee_categorie_entreprise']) ? $data['annee_categorie_entreprise'] : null;
        $this->container['periodes_unite_legale'] = isset($data['periodes_unite_legale']) ? $data['periodes_unite_legale'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSexeUniteLegaleAllowableValues();
        if (!is_null($this->container['sexe_unite_legale']) && !in_array($this->container['sexe_unite_legale'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sexe_unite_legale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategorieEntrepriseAllowableValues();
        if (!is_null($this->container['categorie_entreprise']) && !in_array($this->container['categorie_entreprise'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'categorie_entreprise', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets score
     *
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float $score Score de l'élément parmi l'ensemble des éléments répondant à la requête, plus le score est élevé, plus l'élément est haut placé. Le score n'a pas de signification en dehors de la requête et n'est pas comparable aux score d'autres requêtes
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets siren
     *
     * @return string
     */
    public function getSiren()
    {
        return $this->container['siren'];
    }

    /**
     * Sets siren
     *
     * @param string $siren Numéro Siren de l'entreprise, toujours renseigné
     *
     * @return $this
     */
    public function setSiren($siren)
    {
        $this->container['siren'] = $siren;

        return $this;
    }

    /**
     * Gets statut_diffusion_unite_legale
     *
     * @return string
     */
    public function getStatutDiffusionUniteLegale()
    {
        return $this->container['statut_diffusion_unite_legale'];
    }

    /**
     * Sets statut_diffusion_unite_legale
     *
     * @param string $statut_diffusion_unite_legale Statut de diffusion de l’unité légale
     *
     * @return $this
     */
    public function setStatutDiffusionUniteLegale($statut_diffusion_unite_legale)
    {
        $this->container['statut_diffusion_unite_legale'] = $statut_diffusion_unite_legale;

        return $this;
    }

    /**
     * Gets unite_purgee_unite_legale
     *
     * @return bool
     */
    public function getUnitePurgeeUniteLegale()
    {
        return $this->container['unite_purgee_unite_legale'];
    }

    /**
     * Sets unite_purgee_unite_legale
     *
     * @param bool $unite_purgee_unite_legale True si l'unité est une unité purgée
     *
     * @return $this
     */
    public function setUnitePurgeeUniteLegale($unite_purgee_unite_legale)
    {
        $this->container['unite_purgee_unite_legale'] = $unite_purgee_unite_legale;

        return $this;
    }

    /**
     * Gets date_creation_unite_legale
     *
     * @return string
     */
    public function getDateCreationUniteLegale()
    {
        return $this->container['date_creation_unite_legale'];
    }

    /**
     * Sets date_creation_unite_legale
     *
     * @param string $date_creation_unite_legale Date de création de l'unité légale, au format AAAA-MM-JJ
     *
     * @return $this
     */
    public function setDateCreationUniteLegale($date_creation_unite_legale)
    {
        $this->container['date_creation_unite_legale'] = $date_creation_unite_legale;

        return $this;
    }

    /**
     * Gets sigle_unite_legale
     *
     * @return string
     */
    public function getSigleUniteLegale()
    {
        return $this->container['sigle_unite_legale'];
    }

    /**
     * Sets sigle_unite_legale
     *
     * @param string $sigle_unite_legale Sigle de l'unité légale
     *
     * @return $this
     */
    public function setSigleUniteLegale($sigle_unite_legale)
    {
        $this->container['sigle_unite_legale'] = $sigle_unite_legale;

        return $this;
    }

    /**
     * Gets sexe_unite_legale
     *
     * @return string
     */
    public function getSexeUniteLegale()
    {
        return $this->container['sexe_unite_legale'];
    }

    /**
     * Sets sexe_unite_legale
     *
     * @param string $sexe_unite_legale Sexe pour les personnes physiques sinon null
     *
     * @return $this
     */
    public function setSexeUniteLegale($sexe_unite_legale)
    {
        $allowedValues = $this->getSexeUniteLegaleAllowableValues();
        if (!is_null($sexe_unite_legale) && !in_array($sexe_unite_legale, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sexe_unite_legale', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sexe_unite_legale'] = $sexe_unite_legale;

        return $this;
    }

    /**
     * Gets prenom1_unite_legale
     *
     * @return string
     */
    public function getPrenom1UniteLegale()
    {
        return $this->container['prenom1_unite_legale'];
    }

    /**
     * Sets prenom1_unite_legale
     *
     * @param string $prenom1_unite_legale Premier prénom déclaré pour une personne physique, peut être null dans le cas d'une unité purgée
     *
     * @return $this
     */
    public function setPrenom1UniteLegale($prenom1_unite_legale)
    {
        $this->container['prenom1_unite_legale'] = $prenom1_unite_legale;

        return $this;
    }

    /**
     * Gets prenom2_unite_legale
     *
     * @return string
     */
    public function getPrenom2UniteLegale()
    {
        return $this->container['prenom2_unite_legale'];
    }

    /**
     * Sets prenom2_unite_legale
     *
     * @param string $prenom2_unite_legale Deuxième prénom déclaré pour une personne physique
     *
     * @return $this
     */
    public function setPrenom2UniteLegale($prenom2_unite_legale)
    {
        $this->container['prenom2_unite_legale'] = $prenom2_unite_legale;

        return $this;
    }

    /**
     * Gets prenom3_unite_legale
     *
     * @return string
     */
    public function getPrenom3UniteLegale()
    {
        return $this->container['prenom3_unite_legale'];
    }

    /**
     * Sets prenom3_unite_legale
     *
     * @param string $prenom3_unite_legale Troisième prénom déclaré pour une personne physique
     *
     * @return $this
     */
    public function setPrenom3UniteLegale($prenom3_unite_legale)
    {
        $this->container['prenom3_unite_legale'] = $prenom3_unite_legale;

        return $this;
    }

    /**
     * Gets prenom4_unite_legale
     *
     * @return string
     */
    public function getPrenom4UniteLegale()
    {
        return $this->container['prenom4_unite_legale'];
    }

    /**
     * Sets prenom4_unite_legale
     *
     * @param string $prenom4_unite_legale Quatrième prénom déclaré pour une personne physique
     *
     * @return $this
     */
    public function setPrenom4UniteLegale($prenom4_unite_legale)
    {
        $this->container['prenom4_unite_legale'] = $prenom4_unite_legale;

        return $this;
    }

    /**
     * Gets prenom_usuel_unite_legale
     *
     * @return string
     */
    public function getPrenomUsuelUniteLegale()
    {
        return $this->container['prenom_usuel_unite_legale'];
    }

    /**
     * Sets prenom_usuel_unite_legale
     *
     * @param string $prenom_usuel_unite_legale Prénom usuel pour les personne physiques, correspond généralement au Prenom1
     *
     * @return $this
     */
    public function setPrenomUsuelUniteLegale($prenom_usuel_unite_legale)
    {
        $this->container['prenom_usuel_unite_legale'] = $prenom_usuel_unite_legale;

        return $this;
    }

    /**
     * Gets pseudonyme_unite_legale
     *
     * @return string
     */
    public function getPseudonymeUniteLegale()
    {
        return $this->container['pseudonyme_unite_legale'];
    }

    /**
     * Sets pseudonyme_unite_legale
     *
     * @param string $pseudonyme_unite_legale Pseudonyme pour les personnes physiques
     *
     * @return $this
     */
    public function setPseudonymeUniteLegale($pseudonyme_unite_legale)
    {
        $this->container['pseudonyme_unite_legale'] = $pseudonyme_unite_legale;

        return $this;
    }

    /**
     * Gets identifiant_association_unite_legale
     *
     * @return string
     */
    public function getIdentifiantAssociationUniteLegale()
    {
        return $this->container['identifiant_association_unite_legale'];
    }

    /**
     * Sets identifiant_association_unite_legale
     *
     * @param string $identifiant_association_unite_legale Numéro au Répertoire National des Associations
     *
     * @return $this
     */
    public function setIdentifiantAssociationUniteLegale($identifiant_association_unite_legale)
    {
        $this->container['identifiant_association_unite_legale'] = $identifiant_association_unite_legale;

        return $this;
    }

    /**
     * Gets tranche_effectifs_unite_legale
     *
     * @return string
     */
    public function getTrancheEffectifsUniteLegale()
    {
        return $this->container['tranche_effectifs_unite_legale'];
    }

    /**
     * Sets tranche_effectifs_unite_legale
     *
     * @param string $tranche_effectifs_unite_legale Tranche d'effectif salarié de l'unité légale, valorisé uniquement si l'année correspondante est supérieure ou égale à l'année d'interrogation-3 (sinon, NN)
     *
     * @return $this
     */
    public function setTrancheEffectifsUniteLegale($tranche_effectifs_unite_legale)
    {
        $this->container['tranche_effectifs_unite_legale'] = $tranche_effectifs_unite_legale;

        return $this;
    }

    /**
     * Gets annee_effectifs_unite_legale
     *
     * @return string
     */
    public function getAnneeEffectifsUniteLegale()
    {
        return $this->container['annee_effectifs_unite_legale'];
    }

    /**
     * Sets annee_effectifs_unite_legale
     *
     * @param string $annee_effectifs_unite_legale Année de validité de la tranche d'effectif salarié de l'unité légale, valorisée uniquement si l'année est supérieure ou égale à l'année d'interrogation-3 (sinon, null)
     *
     * @return $this
     */
    public function setAnneeEffectifsUniteLegale($annee_effectifs_unite_legale)
    {
        $this->container['annee_effectifs_unite_legale'] = $annee_effectifs_unite_legale;

        return $this;
    }

    /**
     * Gets date_dernier_traitement_unite_legale
     *
     * @return string
     */
    public function getDateDernierTraitementUniteLegale()
    {
        return $this->container['date_dernier_traitement_unite_legale'];
    }

    /**
     * Sets date_dernier_traitement_unite_legale
     *
     * @param string $date_dernier_traitement_unite_legale Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siren concerné, format AAAA-MM-JJTHH:MM:SS
     *
     * @return $this
     */
    public function setDateDernierTraitementUniteLegale($date_dernier_traitement_unite_legale)
    {
        $this->container['date_dernier_traitement_unite_legale'] = $date_dernier_traitement_unite_legale;

        return $this;
    }

    /**
     * Gets nombre_periodes_unite_legale
     *
     * @return int
     */
    public function getNombrePeriodesUniteLegale()
    {
        return $this->container['nombre_periodes_unite_legale'];
    }

    /**
     * Sets nombre_periodes_unite_legale
     *
     * @param int $nombre_periodes_unite_legale Nombre de périodes dans la vie de l'unité légale
     *
     * @return $this
     */
    public function setNombrePeriodesUniteLegale($nombre_periodes_unite_legale)
    {
        $this->container['nombre_periodes_unite_legale'] = $nombre_periodes_unite_legale;

        return $this;
    }

    /**
     * Gets categorie_entreprise
     *
     * @return string
     */
    public function getCategorieEntreprise()
    {
        return $this->container['categorie_entreprise'];
    }

    /**
     * Sets categorie_entreprise
     *
     * @param string $categorie_entreprise Catégorie à laquelle appartient l'entreprise : Petite ou moyenne entreprise, Entreprise de taille intermédiaire, Grande entreprise
     *
     * @return $this
     */
    public function setCategorieEntreprise($categorie_entreprise)
    {
        $allowedValues = $this->getCategorieEntrepriseAllowableValues();
        if (!is_null($categorie_entreprise) && !in_array($categorie_entreprise, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'categorie_entreprise', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['categorie_entreprise'] = $categorie_entreprise;

        return $this;
    }

    /**
     * Gets annee_categorie_entreprise
     *
     * @return string
     */
    public function getAnneeCategorieEntreprise()
    {
        return $this->container['annee_categorie_entreprise'];
    }

    /**
     * Sets annee_categorie_entreprise
     *
     * @param string $annee_categorie_entreprise Année de validité de la catégorie d'entreprise
     *
     * @return $this
     */
    public function setAnneeCategorieEntreprise($annee_categorie_entreprise)
    {
        $this->container['annee_categorie_entreprise'] = $annee_categorie_entreprise;

        return $this;
    }

    /**
     * Gets periodes_unite_legale
     *
     * @return \Swagger\Client\Model\PeriodeUniteLegale[]
     */
    public function getPeriodesUniteLegale()
    {
        return $this->container['periodes_unite_legale'];
    }

    /**
     * Sets periodes_unite_legale
     *
     * @param \Swagger\Client\Model\PeriodeUniteLegale[] $periodes_unite_legale periodes_unite_legale
     *
     * @return $this
     */
    public function setPeriodesUniteLegale($periodes_unite_legale)
    {
        $this->container['periodes_unite_legale'] = $periodes_unite_legale;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


