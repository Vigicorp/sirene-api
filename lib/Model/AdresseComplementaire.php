<?php
/**
 * AdresseComplementaire
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

namespace Sirene\Client\Model;

use \ArrayAccess;
use \Sirene\Client\ObjectSerializer;

/**
 * AdresseComplementaire Class Doc Comment
 *
 * @category Class
 * @description Ensemble des variables d&#39;adresse complémentaire d&#39;un établissement
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdresseComplementaire implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdresseComplementaire';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'complement_adresse2_etablissement' => 'string',
        'numero_voie2_etablissement' => 'string',
        'indice_repetition2_etablissement' => 'string',
        'type_voie2_etablissement' => 'string',
        'libelle_voie2_etablissement' => 'string',
        'code_postal2_etablissement' => 'string',
        'libelle_commune2_etablissement' => 'string',
        'libelle_commune2_etranger_etablissement' => 'string',
        'distribution_speciale2_etablissement' => 'string',
        'code_commune2_etablissement' => 'string',
        'code_cedex2_etablissement' => 'string',
        'libelle_cedex2_etablissement' => 'string',
        'code_pays_etranger2_etablissement' => 'string',
        'libelle_pays_etranger2_etablissement' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'complement_adresse2_etablissement' => null,
        'numero_voie2_etablissement' => null,
        'indice_repetition2_etablissement' => null,
        'type_voie2_etablissement' => null,
        'libelle_voie2_etablissement' => null,
        'code_postal2_etablissement' => null,
        'libelle_commune2_etablissement' => null,
        'libelle_commune2_etranger_etablissement' => null,
        'distribution_speciale2_etablissement' => null,
        'code_commune2_etablissement' => null,
        'code_cedex2_etablissement' => null,
        'libelle_cedex2_etablissement' => null,
        'code_pays_etranger2_etablissement' => null,
        'libelle_pays_etranger2_etablissement' => null
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
        'complement_adresse2_etablissement' => 'complementAdresse2Etablissement',
        'numero_voie2_etablissement' => 'numeroVoie2Etablissement',
        'indice_repetition2_etablissement' => 'indiceRepetition2Etablissement',
        'type_voie2_etablissement' => 'typeVoie2Etablissement',
        'libelle_voie2_etablissement' => 'libelleVoie2Etablissement',
        'code_postal2_etablissement' => 'codePostal2Etablissement',
        'libelle_commune2_etablissement' => 'libelleCommune2Etablissement',
        'libelle_commune2_etranger_etablissement' => 'libelleCommune2EtrangerEtablissement',
        'distribution_speciale2_etablissement' => 'distributionSpeciale2Etablissement',
        'code_commune2_etablissement' => 'codeCommune2Etablissement',
        'code_cedex2_etablissement' => 'codeCedex2Etablissement',
        'libelle_cedex2_etablissement' => 'libelleCedex2Etablissement',
        'code_pays_etranger2_etablissement' => 'codePaysEtranger2Etablissement',
        'libelle_pays_etranger2_etablissement' => 'libellePaysEtranger2Etablissement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'complement_adresse2_etablissement' => 'setComplementAdresse2Etablissement',
        'numero_voie2_etablissement' => 'setNumeroVoie2Etablissement',
        'indice_repetition2_etablissement' => 'setIndiceRepetition2Etablissement',
        'type_voie2_etablissement' => 'setTypeVoie2Etablissement',
        'libelle_voie2_etablissement' => 'setLibelleVoie2Etablissement',
        'code_postal2_etablissement' => 'setCodePostal2Etablissement',
        'libelle_commune2_etablissement' => 'setLibelleCommune2Etablissement',
        'libelle_commune2_etranger_etablissement' => 'setLibelleCommune2EtrangerEtablissement',
        'distribution_speciale2_etablissement' => 'setDistributionSpeciale2Etablissement',
        'code_commune2_etablissement' => 'setCodeCommune2Etablissement',
        'code_cedex2_etablissement' => 'setCodeCedex2Etablissement',
        'libelle_cedex2_etablissement' => 'setLibelleCedex2Etablissement',
        'code_pays_etranger2_etablissement' => 'setCodePaysEtranger2Etablissement',
        'libelle_pays_etranger2_etablissement' => 'setLibellePaysEtranger2Etablissement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'complement_adresse2_etablissement' => 'getComplementAdresse2Etablissement',
        'numero_voie2_etablissement' => 'getNumeroVoie2Etablissement',
        'indice_repetition2_etablissement' => 'getIndiceRepetition2Etablissement',
        'type_voie2_etablissement' => 'getTypeVoie2Etablissement',
        'libelle_voie2_etablissement' => 'getLibelleVoie2Etablissement',
        'code_postal2_etablissement' => 'getCodePostal2Etablissement',
        'libelle_commune2_etablissement' => 'getLibelleCommune2Etablissement',
        'libelle_commune2_etranger_etablissement' => 'getLibelleCommune2EtrangerEtablissement',
        'distribution_speciale2_etablissement' => 'getDistributionSpeciale2Etablissement',
        'code_commune2_etablissement' => 'getCodeCommune2Etablissement',
        'code_cedex2_etablissement' => 'getCodeCedex2Etablissement',
        'libelle_cedex2_etablissement' => 'getLibelleCedex2Etablissement',
        'code_pays_etranger2_etablissement' => 'getCodePaysEtranger2Etablissement',
        'libelle_pays_etranger2_etablissement' => 'getLibellePaysEtranger2Etablissement'
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
        $this->container['complement_adresse2_etablissement'] = isset($data['complement_adresse2_etablissement']) ? $data['complement_adresse2_etablissement'] : null;
        $this->container['numero_voie2_etablissement'] = isset($data['numero_voie2_etablissement']) ? $data['numero_voie2_etablissement'] : null;
        $this->container['indice_repetition2_etablissement'] = isset($data['indice_repetition2_etablissement']) ? $data['indice_repetition2_etablissement'] : null;
        $this->container['type_voie2_etablissement'] = isset($data['type_voie2_etablissement']) ? $data['type_voie2_etablissement'] : null;
        $this->container['libelle_voie2_etablissement'] = isset($data['libelle_voie2_etablissement']) ? $data['libelle_voie2_etablissement'] : null;
        $this->container['code_postal2_etablissement'] = isset($data['code_postal2_etablissement']) ? $data['code_postal2_etablissement'] : null;
        $this->container['libelle_commune2_etablissement'] = isset($data['libelle_commune2_etablissement']) ? $data['libelle_commune2_etablissement'] : null;
        $this->container['libelle_commune2_etranger_etablissement'] = isset($data['libelle_commune2_etranger_etablissement']) ? $data['libelle_commune2_etranger_etablissement'] : null;
        $this->container['distribution_speciale2_etablissement'] = isset($data['distribution_speciale2_etablissement']) ? $data['distribution_speciale2_etablissement'] : null;
        $this->container['code_commune2_etablissement'] = isset($data['code_commune2_etablissement']) ? $data['code_commune2_etablissement'] : null;
        $this->container['code_cedex2_etablissement'] = isset($data['code_cedex2_etablissement']) ? $data['code_cedex2_etablissement'] : null;
        $this->container['libelle_cedex2_etablissement'] = isset($data['libelle_cedex2_etablissement']) ? $data['libelle_cedex2_etablissement'] : null;
        $this->container['code_pays_etranger2_etablissement'] = isset($data['code_pays_etranger2_etablissement']) ? $data['code_pays_etranger2_etablissement'] : null;
        $this->container['libelle_pays_etranger2_etablissement'] = isset($data['libelle_pays_etranger2_etablissement']) ? $data['libelle_pays_etranger2_etablissement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets complement_adresse2_etablissement
     *
     * @return string
     */
    public function getComplementAdresse2Etablissement()
    {
        return $this->container['complement_adresse2_etablissement'];
    }

    /**
     * Sets complement_adresse2_etablissement
     *
     * @param string $complement_adresse2_etablissement Complément d'adresse de l'établissement
     *
     * @return $this
     */
    public function setComplementAdresse2Etablissement($complement_adresse2_etablissement)
    {
        $this->container['complement_adresse2_etablissement'] = $complement_adresse2_etablissement;

        return $this;
    }

    /**
     * Gets numero_voie2_etablissement
     *
     * @return string
     */
    public function getNumeroVoie2Etablissement()
    {
        return $this->container['numero_voie2_etablissement'];
    }

    /**
     * Sets numero_voie2_etablissement
     *
     * @param string $numero_voie2_etablissement Numéro dans la voie
     *
     * @return $this
     */
    public function setNumeroVoie2Etablissement($numero_voie2_etablissement)
    {
        $this->container['numero_voie2_etablissement'] = $numero_voie2_etablissement;

        return $this;
    }

    /**
     * Gets indice_repetition2_etablissement
     *
     * @return string
     */
    public function getIndiceRepetition2Etablissement()
    {
        return $this->container['indice_repetition2_etablissement'];
    }

    /**
     * Sets indice_repetition2_etablissement
     *
     * @param string $indice_repetition2_etablissement Indice de répétition dans la voie
     *
     * @return $this
     */
    public function setIndiceRepetition2Etablissement($indice_repetition2_etablissement)
    {
        $this->container['indice_repetition2_etablissement'] = $indice_repetition2_etablissement;

        return $this;
    }

    /**
     * Gets type_voie2_etablissement
     *
     * @return string
     */
    public function getTypeVoie2Etablissement()
    {
        return $this->container['type_voie2_etablissement'];
    }

    /**
     * Sets type_voie2_etablissement
     *
     * @param string $type_voie2_etablissement Type de la voie
     *
     * @return $this
     */
    public function setTypeVoie2Etablissement($type_voie2_etablissement)
    {
        $this->container['type_voie2_etablissement'] = $type_voie2_etablissement;

        return $this;
    }

    /**
     * Gets libelle_voie2_etablissement
     *
     * @return string
     */
    public function getLibelleVoie2Etablissement()
    {
        return $this->container['libelle_voie2_etablissement'];
    }

    /**
     * Sets libelle_voie2_etablissement
     *
     * @param string $libelle_voie2_etablissement Libellé de la voie
     *
     * @return $this
     */
    public function setLibelleVoie2Etablissement($libelle_voie2_etablissement)
    {
        $this->container['libelle_voie2_etablissement'] = $libelle_voie2_etablissement;

        return $this;
    }

    /**
     * Gets code_postal2_etablissement
     *
     * @return string
     */
    public function getCodePostal2Etablissement()
    {
        return $this->container['code_postal2_etablissement'];
    }

    /**
     * Sets code_postal2_etablissement
     *
     * @param string $code_postal2_etablissement Code postal
     *
     * @return $this
     */
    public function setCodePostal2Etablissement($code_postal2_etablissement)
    {
        $this->container['code_postal2_etablissement'] = $code_postal2_etablissement;

        return $this;
    }

    /**
     * Gets libelle_commune2_etablissement
     *
     * @return string
     */
    public function getLibelleCommune2Etablissement()
    {
        return $this->container['libelle_commune2_etablissement'];
    }

    /**
     * Sets libelle_commune2_etablissement
     *
     * @param string $libelle_commune2_etablissement Libellé de la commune pour les adresses en France
     *
     * @return $this
     */
    public function setLibelleCommune2Etablissement($libelle_commune2_etablissement)
    {
        $this->container['libelle_commune2_etablissement'] = $libelle_commune2_etablissement;

        return $this;
    }

    /**
     * Gets libelle_commune2_etranger_etablissement
     *
     * @return string
     */
    public function getLibelleCommune2EtrangerEtablissement()
    {
        return $this->container['libelle_commune2_etranger_etablissement'];
    }

    /**
     * Sets libelle_commune2_etranger_etablissement
     *
     * @param string $libelle_commune2_etranger_etablissement Libellé complémentaire pour une adresse à l'étranger
     *
     * @return $this
     */
    public function setLibelleCommune2EtrangerEtablissement($libelle_commune2_etranger_etablissement)
    {
        $this->container['libelle_commune2_etranger_etablissement'] = $libelle_commune2_etranger_etablissement;

        return $this;
    }

    /**
     * Gets distribution_speciale2_etablissement
     *
     * @return string
     */
    public function getDistributionSpeciale2Etablissement()
    {
        return $this->container['distribution_speciale2_etablissement'];
    }

    /**
     * Sets distribution_speciale2_etablissement
     *
     * @param string $distribution_speciale2_etablissement Distribution spéciale (BP par ex)
     *
     * @return $this
     */
    public function setDistributionSpeciale2Etablissement($distribution_speciale2_etablissement)
    {
        $this->container['distribution_speciale2_etablissement'] = $distribution_speciale2_etablissement;

        return $this;
    }

    /**
     * Gets code_commune2_etablissement
     *
     * @return string
     */
    public function getCodeCommune2Etablissement()
    {
        return $this->container['code_commune2_etablissement'];
    }

    /**
     * Sets code_commune2_etablissement
     *
     * @param string $code_commune2_etablissement Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @return $this
     */
    public function setCodeCommune2Etablissement($code_commune2_etablissement)
    {
        $this->container['code_commune2_etablissement'] = $code_commune2_etablissement;

        return $this;
    }

    /**
     * Gets code_cedex2_etablissement
     *
     * @return string
     */
    public function getCodeCedex2Etablissement()
    {
        return $this->container['code_cedex2_etablissement'];
    }

    /**
     * Sets code_cedex2_etablissement
     *
     * @param string $code_cedex2_etablissement Numéro de Cedex
     *
     * @return $this
     */
    public function setCodeCedex2Etablissement($code_cedex2_etablissement)
    {
        $this->container['code_cedex2_etablissement'] = $code_cedex2_etablissement;

        return $this;
    }

    /**
     * Gets libelle_cedex2_etablissement
     *
     * @return string
     */
    public function getLibelleCedex2Etablissement()
    {
        return $this->container['libelle_cedex2_etablissement'];
    }

    /**
     * Sets libelle_cedex2_etablissement
     *
     * @param string $libelle_cedex2_etablissement Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @return $this
     */
    public function setLibelleCedex2Etablissement($libelle_cedex2_etablissement)
    {
        $this->container['libelle_cedex2_etablissement'] = $libelle_cedex2_etablissement;

        return $this;
    }

    /**
     * Gets code_pays_etranger2_etablissement
     *
     * @return string
     */
    public function getCodePaysEtranger2Etablissement()
    {
        return $this->container['code_pays_etranger2_etablissement'];
    }

    /**
     * Sets code_pays_etranger2_etablissement
     *
     * @param string $code_pays_etranger2_etablissement Code pays pour les établissements situés à l’étranger
     *
     * @return $this
     */
    public function setCodePaysEtranger2Etablissement($code_pays_etranger2_etablissement)
    {
        $this->container['code_pays_etranger2_etablissement'] = $code_pays_etranger2_etablissement;

        return $this;
    }

    /**
     * Gets libelle_pays_etranger2_etablissement
     *
     * @return string
     */
    public function getLibellePaysEtranger2Etablissement()
    {
        return $this->container['libelle_pays_etranger2_etablissement'];
    }

    /**
     * Sets libelle_pays_etranger2_etablissement
     *
     * @param string $libelle_pays_etranger2_etablissement Libellé du pays pour les adresses à l’étranger
     *
     * @return $this
     */
    public function setLibellePaysEtranger2Etablissement($libelle_pays_etranger2_etablissement)
    {
        $this->container['libelle_pays_etranger2_etablissement'] = $libelle_pays_etranger2_etablissement;

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


