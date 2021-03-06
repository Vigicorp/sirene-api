<?php
/**
 * PeriodeEtablissement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sirene\Client
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

namespace Sirene\Client\Model;

use \ArrayAccess;
use \Sirene\Client\ObjectSerializer;

/**
 * PeriodeEtablissement Class Doc Comment
 *
 * @category Class
 * @description Ensemble des variables historisées de l&#39;établissement entre dateDebut et dateFin
 * @package  Sirene\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PeriodeEtablissement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PeriodeEtablissement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_fin' => '\DateTime',
        'date_debut' => '\DateTime',
        'etat_administratif_etablissement' => 'string',
        'changement_etat_administratif_etablissement' => 'bool',
        'enseigne1_etablissement' => 'string',
        'enseigne2_etablissement' => 'string',
        'enseigne3_etablissement' => 'string',
        'changement_enseigne_etablissement' => 'bool',
        'denomination_usuelle_etablissement' => 'string',
        'changement_denomination_usuelle_etablissement' => 'bool',
        'activite_principale_etablissement' => 'string',
        'nomenclature_activite_principale_etablissement' => 'string',
        'changement_activite_principale_etablissement' => 'bool',
        'caractere_employeur_etablissement' => 'string',
        'changement_caractere_employeur_etablissement' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_fin' => 'date',
        'date_debut' => 'date',
        'etat_administratif_etablissement' => null,
        'changement_etat_administratif_etablissement' => null,
        'enseigne1_etablissement' => null,
        'enseigne2_etablissement' => null,
        'enseigne3_etablissement' => null,
        'changement_enseigne_etablissement' => null,
        'denomination_usuelle_etablissement' => null,
        'changement_denomination_usuelle_etablissement' => null,
        'activite_principale_etablissement' => null,
        'nomenclature_activite_principale_etablissement' => null,
        'changement_activite_principale_etablissement' => null,
        'caractere_employeur_etablissement' => null,
        'changement_caractere_employeur_etablissement' => null
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
        'date_fin' => 'dateFin',
        'date_debut' => 'dateDebut',
        'etat_administratif_etablissement' => 'etatAdministratifEtablissement',
        'changement_etat_administratif_etablissement' => 'changementEtatAdministratifEtablissement',
        'enseigne1_etablissement' => 'enseigne1Etablissement',
        'enseigne2_etablissement' => 'enseigne2Etablissement',
        'enseigne3_etablissement' => 'enseigne3Etablissement',
        'changement_enseigne_etablissement' => 'changementEnseigneEtablissement',
        'denomination_usuelle_etablissement' => 'denominationUsuelleEtablissement',
        'changement_denomination_usuelle_etablissement' => 'changementDenominationUsuelleEtablissement',
        'activite_principale_etablissement' => 'activitePrincipaleEtablissement',
        'nomenclature_activite_principale_etablissement' => 'nomenclatureActivitePrincipaleEtablissement',
        'changement_activite_principale_etablissement' => 'changementActivitePrincipaleEtablissement',
        'caractere_employeur_etablissement' => 'caractereEmployeurEtablissement',
        'changement_caractere_employeur_etablissement' => 'changementCaractereEmployeurEtablissement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_fin' => 'setDateFin',
        'date_debut' => 'setDateDebut',
        'etat_administratif_etablissement' => 'setEtatAdministratifEtablissement',
        'changement_etat_administratif_etablissement' => 'setChangementEtatAdministratifEtablissement',
        'enseigne1_etablissement' => 'setEnseigne1Etablissement',
        'enseigne2_etablissement' => 'setEnseigne2Etablissement',
        'enseigne3_etablissement' => 'setEnseigne3Etablissement',
        'changement_enseigne_etablissement' => 'setChangementEnseigneEtablissement',
        'denomination_usuelle_etablissement' => 'setDenominationUsuelleEtablissement',
        'changement_denomination_usuelle_etablissement' => 'setChangementDenominationUsuelleEtablissement',
        'activite_principale_etablissement' => 'setActivitePrincipaleEtablissement',
        'nomenclature_activite_principale_etablissement' => 'setNomenclatureActivitePrincipaleEtablissement',
        'changement_activite_principale_etablissement' => 'setChangementActivitePrincipaleEtablissement',
        'caractere_employeur_etablissement' => 'setCaractereEmployeurEtablissement',
        'changement_caractere_employeur_etablissement' => 'setChangementCaractereEmployeurEtablissement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_fin' => 'getDateFin',
        'date_debut' => 'getDateDebut',
        'etat_administratif_etablissement' => 'getEtatAdministratifEtablissement',
        'changement_etat_administratif_etablissement' => 'getChangementEtatAdministratifEtablissement',
        'enseigne1_etablissement' => 'getEnseigne1Etablissement',
        'enseigne2_etablissement' => 'getEnseigne2Etablissement',
        'enseigne3_etablissement' => 'getEnseigne3Etablissement',
        'changement_enseigne_etablissement' => 'getChangementEnseigneEtablissement',
        'denomination_usuelle_etablissement' => 'getDenominationUsuelleEtablissement',
        'changement_denomination_usuelle_etablissement' => 'getChangementDenominationUsuelleEtablissement',
        'activite_principale_etablissement' => 'getActivitePrincipaleEtablissement',
        'nomenclature_activite_principale_etablissement' => 'getNomenclatureActivitePrincipaleEtablissement',
        'changement_activite_principale_etablissement' => 'getChangementActivitePrincipaleEtablissement',
        'caractere_employeur_etablissement' => 'getCaractereEmployeurEtablissement',
        'changement_caractere_employeur_etablissement' => 'getChangementCaractereEmployeurEtablissement'
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

    const NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAP = 'NAP';
    const NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAF_REV1 = 'NAFRev1';
    const NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAF_REV2 = 'NAFRev2';
    const NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAF1993 = 'NAF1993';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNomenclatureActivitePrincipaleEtablissementAllowableValues()
    {
        return [
            self::NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAP,
            self::NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAF_REV1,
            self::NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAF_REV2,
            self::NOMENCLATURE_ACTIVITE_PRINCIPALE_ETABLISSEMENT_NAF1993,
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
        $this->container['date_fin'] = isset($data['date_fin']) ? $data['date_fin'] : null;
        $this->container['date_debut'] = isset($data['date_debut']) ? $data['date_debut'] : null;
        $this->container['etat_administratif_etablissement'] = isset($data['etat_administratif_etablissement']) ? $data['etat_administratif_etablissement'] : null;
        $this->container['changement_etat_administratif_etablissement'] = isset($data['changement_etat_administratif_etablissement']) ? $data['changement_etat_administratif_etablissement'] : null;
        $this->container['enseigne1_etablissement'] = isset($data['enseigne1_etablissement']) ? $data['enseigne1_etablissement'] : null;
        $this->container['enseigne2_etablissement'] = isset($data['enseigne2_etablissement']) ? $data['enseigne2_etablissement'] : null;
        $this->container['enseigne3_etablissement'] = isset($data['enseigne3_etablissement']) ? $data['enseigne3_etablissement'] : null;
        $this->container['changement_enseigne_etablissement'] = isset($data['changement_enseigne_etablissement']) ? $data['changement_enseigne_etablissement'] : null;
        $this->container['denomination_usuelle_etablissement'] = isset($data['denomination_usuelle_etablissement']) ? $data['denomination_usuelle_etablissement'] : null;
        $this->container['changement_denomination_usuelle_etablissement'] = isset($data['changement_denomination_usuelle_etablissement']) ? $data['changement_denomination_usuelle_etablissement'] : null;
        $this->container['activite_principale_etablissement'] = isset($data['activite_principale_etablissement']) ? $data['activite_principale_etablissement'] : null;
        $this->container['nomenclature_activite_principale_etablissement'] = isset($data['nomenclature_activite_principale_etablissement']) ? $data['nomenclature_activite_principale_etablissement'] : null;
        $this->container['changement_activite_principale_etablissement'] = isset($data['changement_activite_principale_etablissement']) ? $data['changement_activite_principale_etablissement'] : null;
        $this->container['caractere_employeur_etablissement'] = isset($data['caractere_employeur_etablissement']) ? $data['caractere_employeur_etablissement'] : null;
        $this->container['changement_caractere_employeur_etablissement'] = isset($data['changement_caractere_employeur_etablissement']) ? $data['changement_caractere_employeur_etablissement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNomenclatureActivitePrincipaleEtablissementAllowableValues();
        if (!is_null($this->container['nomenclature_activite_principale_etablissement']) && !in_array($this->container['nomenclature_activite_principale_etablissement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'nomenclature_activite_principale_etablissement', must be one of '%s'",
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
     * Gets date_fin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->container['date_fin'];
    }

    /**
     * Sets date_fin
     *
     * @param \DateTime $date_fin Date de fin de la période, null pour la dernière période, format AAAA-MM-DD
     *
     * @return $this
     */
    public function setDateFin($date_fin)
    {
        $this->container['date_fin'] = $date_fin;

        return $this;
    }

    /**
     * Gets date_debut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->container['date_debut'];
    }

    /**
     * Sets date_debut
     *
     * @param \DateTime $date_debut Date de début de la période, format AAAA-MM-DD
     *
     * @return $this
     */
    public function setDateDebut($date_debut)
    {
        $this->container['date_debut'] = $date_debut;

        return $this;
    }

    /**
     * Gets etat_administratif_etablissement
     *
     * @return string
     */
    public function getEtatAdministratifEtablissement()
    {
        return $this->container['etat_administratif_etablissement'];
    }

    /**
     * Sets etat_administratif_etablissement
     *
     * @param string $etat_administratif_etablissement État administratif de l'établissement pendant la période (A= établissement actif ; F= établissement fermé)
     *
     * @return $this
     */
    public function setEtatAdministratifEtablissement($etat_administratif_etablissement)
    {
        $this->container['etat_administratif_etablissement'] = $etat_administratif_etablissement;

        return $this;
    }

    /**
     * Gets changement_etat_administratif_etablissement
     *
     * @return bool
     */
    public function getChangementEtatAdministratifEtablissement()
    {
        return $this->container['changement_etat_administratif_etablissement'];
    }

    /**
     * Sets changement_etat_administratif_etablissement
     *
     * @param bool $changement_etat_administratif_etablissement Indicatrice de changement de l'état administratif de l'établissement par rapport à la période précédente
     *
     * @return $this
     */
    public function setChangementEtatAdministratifEtablissement($changement_etat_administratif_etablissement)
    {
        $this->container['changement_etat_administratif_etablissement'] = $changement_etat_administratif_etablissement;

        return $this;
    }

    /**
     * Gets enseigne1_etablissement
     *
     * @return string
     */
    public function getEnseigne1Etablissement()
    {
        return $this->container['enseigne1_etablissement'];
    }

    /**
     * Sets enseigne1_etablissement
     *
     * @param string $enseigne1_etablissement Première ligne d'enseigne
     *
     * @return $this
     */
    public function setEnseigne1Etablissement($enseigne1_etablissement)
    {
        $this->container['enseigne1_etablissement'] = $enseigne1_etablissement;

        return $this;
    }

    /**
     * Gets enseigne2_etablissement
     *
     * @return string
     */
    public function getEnseigne2Etablissement()
    {
        return $this->container['enseigne2_etablissement'];
    }

    /**
     * Sets enseigne2_etablissement
     *
     * @param string $enseigne2_etablissement Deuxième ligne d'enseigne
     *
     * @return $this
     */
    public function setEnseigne2Etablissement($enseigne2_etablissement)
    {
        $this->container['enseigne2_etablissement'] = $enseigne2_etablissement;

        return $this;
    }

    /**
     * Gets enseigne3_etablissement
     *
     * @return string
     */
    public function getEnseigne3Etablissement()
    {
        return $this->container['enseigne3_etablissement'];
    }

    /**
     * Sets enseigne3_etablissement
     *
     * @param string $enseigne3_etablissement Troisième ligne d'enseigne
     *
     * @return $this
     */
    public function setEnseigne3Etablissement($enseigne3_etablissement)
    {
        $this->container['enseigne3_etablissement'] = $enseigne3_etablissement;

        return $this;
    }

    /**
     * Gets changement_enseigne_etablissement
     *
     * @return bool
     */
    public function getChangementEnseigneEtablissement()
    {
        return $this->container['changement_enseigne_etablissement'];
    }

    /**
     * Sets changement_enseigne_etablissement
     *
     * @param bool $changement_enseigne_etablissement Indicatrice de changement de l'enseigne de l'établissement par rapport à la période précédente (un seul indicateur pour les trois variables Enseigne1, Enseigne2 et Enseigne3)
     *
     * @return $this
     */
    public function setChangementEnseigneEtablissement($changement_enseigne_etablissement)
    {
        $this->container['changement_enseigne_etablissement'] = $changement_enseigne_etablissement;

        return $this;
    }

    /**
     * Gets denomination_usuelle_etablissement
     *
     * @return string
     */
    public function getDenominationUsuelleEtablissement()
    {
        return $this->container['denomination_usuelle_etablissement'];
    }

    /**
     * Sets denomination_usuelle_etablissement
     *
     * @param string $denomination_usuelle_etablissement Nom sous lequel l’activité de l’établissement est connu du public
     *
     * @return $this
     */
    public function setDenominationUsuelleEtablissement($denomination_usuelle_etablissement)
    {
        $this->container['denomination_usuelle_etablissement'] = $denomination_usuelle_etablissement;

        return $this;
    }

    /**
     * Gets changement_denomination_usuelle_etablissement
     *
     * @return bool
     */
    public function getChangementDenominationUsuelleEtablissement()
    {
        return $this->container['changement_denomination_usuelle_etablissement'];
    }

    /**
     * Sets changement_denomination_usuelle_etablissement
     *
     * @param bool $changement_denomination_usuelle_etablissement Indicatrice de changement de la dénomination usuelle de l’établissement par rapport à la période précédente
     *
     * @return $this
     */
    public function setChangementDenominationUsuelleEtablissement($changement_denomination_usuelle_etablissement)
    {
        $this->container['changement_denomination_usuelle_etablissement'] = $changement_denomination_usuelle_etablissement;

        return $this;
    }

    /**
     * Gets activite_principale_etablissement
     *
     * @return string
     */
    public function getActivitePrincipaleEtablissement()
    {
        return $this->container['activite_principale_etablissement'];
    }

    /**
     * Sets activite_principale_etablissement
     *
     * @param string $activite_principale_etablissement Activité principale de l'établissement pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @return $this
     */
    public function setActivitePrincipaleEtablissement($activite_principale_etablissement)
    {
        $this->container['activite_principale_etablissement'] = $activite_principale_etablissement;

        return $this;
    }

    /**
     * Gets nomenclature_activite_principale_etablissement
     *
     * @return string
     */
    public function getNomenclatureActivitePrincipaleEtablissement()
    {
        return $this->container['nomenclature_activite_principale_etablissement'];
    }

    /**
     * Sets nomenclature_activite_principale_etablissement
     *
     * @param string $nomenclature_activite_principale_etablissement Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipaleEtablissement
     *
     * @return $this
     */
    public function setNomenclatureActivitePrincipaleEtablissement($nomenclature_activite_principale_etablissement)
    {
        $allowedValues = $this->getNomenclatureActivitePrincipaleEtablissementAllowableValues();
        if (!is_null($nomenclature_activite_principale_etablissement) && !in_array($nomenclature_activite_principale_etablissement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'nomenclature_activite_principale_etablissement', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nomenclature_activite_principale_etablissement'] = $nomenclature_activite_principale_etablissement;

        return $this;
    }

    /**
     * Gets changement_activite_principale_etablissement
     *
     * @return bool
     */
    public function getChangementActivitePrincipaleEtablissement()
    {
        return $this->container['changement_activite_principale_etablissement'];
    }

    /**
     * Sets changement_activite_principale_etablissement
     *
     * @param bool $changement_activite_principale_etablissement Indicatrice de changement de l'activité principale de l'établissement par rapport à la période précédente
     *
     * @return $this
     */
    public function setChangementActivitePrincipaleEtablissement($changement_activite_principale_etablissement)
    {
        $this->container['changement_activite_principale_etablissement'] = $changement_activite_principale_etablissement;

        return $this;
    }

    /**
     * Gets caractere_employeur_etablissement
     *
     * @return string
     */
    public function getCaractereEmployeurEtablissement()
    {
        return $this->container['caractere_employeur_etablissement'];
    }

    /**
     * Sets caractere_employeur_etablissement
     *
     * @param string $caractere_employeur_etablissement Caractère employeur de l'établissement (O=oui ; N=non ; null=sans objet)
     *
     * @return $this
     */
    public function setCaractereEmployeurEtablissement($caractere_employeur_etablissement)
    {
        $this->container['caractere_employeur_etablissement'] = $caractere_employeur_etablissement;

        return $this;
    }

    /**
     * Gets changement_caractere_employeur_etablissement
     *
     * @return bool
     */
    public function getChangementCaractereEmployeurEtablissement()
    {
        return $this->container['changement_caractere_employeur_etablissement'];
    }

    /**
     * Sets changement_caractere_employeur_etablissement
     *
     * @param bool $changement_caractere_employeur_etablissement Indicatrice de changement du caractère employeur de l'établissement par rapport à la période précédente
     *
     * @return $this
     */
    public function setChangementCaractereEmployeurEtablissement($changement_caractere_employeur_etablissement)
    {
        $this->container['changement_caractere_employeur_etablissement'] = $changement_caractere_employeur_etablissement;

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


