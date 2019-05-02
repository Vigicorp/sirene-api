<?php
/**
 * Facette
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
 * Facette Class Doc Comment
 *
 * @category Class
 * @description Objet représentant une facette (un ensemble de comptages selon un champ, une requête ou une série d&#39;intervalles)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Facette implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Facette';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nom' => 'string',
        'manquants' => 'int',
        'total' => 'int',
        'modalites' => 'int',
        'avant' => 'int',
        'apres' => 'int',
        'entre' => 'int',
        'comptages' => '\Swagger\Client\Model\Comptage[]',
        'facettes' => '\Swagger\Client\Model\Facette[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nom' => null,
        'manquants' => 'int32',
        'total' => 'int64',
        'modalites' => 'int32',
        'avant' => 'int32',
        'apres' => 'int32',
        'entre' => 'int32',
        'comptages' => null,
        'facettes' => null
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
        'nom' => 'nom',
        'manquants' => 'manquants',
        'total' => 'total',
        'modalites' => 'modalites',
        'avant' => 'avant',
        'apres' => 'apres',
        'entre' => 'entre',
        'comptages' => 'comptages',
        'facettes' => 'facettes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nom' => 'setNom',
        'manquants' => 'setManquants',
        'total' => 'setTotal',
        'modalites' => 'setModalites',
        'avant' => 'setAvant',
        'apres' => 'setApres',
        'entre' => 'setEntre',
        'comptages' => 'setComptages',
        'facettes' => 'setFacettes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nom' => 'getNom',
        'manquants' => 'getManquants',
        'total' => 'getTotal',
        'modalites' => 'getModalites',
        'avant' => 'getAvant',
        'apres' => 'getApres',
        'entre' => 'getEntre',
        'comptages' => 'getComptages',
        'facettes' => 'getFacettes'
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
        $this->container['nom'] = isset($data['nom']) ? $data['nom'] : null;
        $this->container['manquants'] = isset($data['manquants']) ? $data['manquants'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['modalites'] = isset($data['modalites']) ? $data['modalites'] : null;
        $this->container['avant'] = isset($data['avant']) ? $data['avant'] : null;
        $this->container['apres'] = isset($data['apres']) ? $data['apres'] : null;
        $this->container['entre'] = isset($data['entre']) ? $data['entre'] : null;
        $this->container['comptages'] = isset($data['comptages']) ? $data['comptages'] : null;
        $this->container['facettes'] = isset($data['facettes']) ? $data['facettes'] : null;
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
     * Gets nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom
     *
     * @param string $nom Nom de la facette
     *
     * @return $this
     */
    public function setNom($nom)
    {
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets manquants
     *
     * @return int
     */
    public function getManquants()
    {
        return $this->container['manquants'];
    }

    /**
     * Sets manquants
     *
     * @param int $manquants Nombre d'éléments pour lesquels la facette vaut null
     *
     * @return $this
     */
    public function setManquants($manquants)
    {
        $this->container['manquants'] = $manquants;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total Nombre total d'éléments ayant une valeur non nulle pour la facette
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets modalites
     *
     * @return int
     */
    public function getModalites()
    {
        return $this->container['modalites'];
    }

    /**
     * Sets modalites
     *
     * @param int $modalites Nombre de valeurs distinctes pour la facette
     *
     * @return $this
     */
    public function setModalites($modalites)
    {
        $this->container['modalites'] = $modalites;

        return $this;
    }

    /**
     * Gets avant
     *
     * @return int
     */
    public function getAvant()
    {
        return $this->container['avant'];
    }

    /**
     * Sets avant
     *
     * @param int $avant Nombre d'éléments dont la valeur est inférieure au premier intervalle, uniquement pour les facettes de type intervalle
     *
     * @return $this
     */
    public function setAvant($avant)
    {
        $this->container['avant'] = $avant;

        return $this;
    }

    /**
     * Gets apres
     *
     * @return int
     */
    public function getApres()
    {
        return $this->container['apres'];
    }

    /**
     * Sets apres
     *
     * @param int $apres Nombre d'éléments dont la valeur est supérieure au dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @return $this
     */
    public function setApres($apres)
    {
        $this->container['apres'] = $apres;

        return $this;
    }

    /**
     * Gets entre
     *
     * @return int
     */
    public function getEntre()
    {
        return $this->container['entre'];
    }

    /**
     * Sets entre
     *
     * @param int $entre Nombre d'élements compris entre la borne inférieure du premier intervalle et la borne supérieure du dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @return $this
     */
    public function setEntre($entre)
    {
        $this->container['entre'] = $entre;

        return $this;
    }

    /**
     * Gets comptages
     *
     * @return \Swagger\Client\Model\Comptage[]
     */
    public function getComptages()
    {
        return $this->container['comptages'];
    }

    /**
     * Sets comptages
     *
     * @param \Swagger\Client\Model\Comptage[] $comptages comptages
     *
     * @return $this
     */
    public function setComptages($comptages)
    {
        $this->container['comptages'] = $comptages;

        return $this;
    }

    /**
     * Gets facettes
     *
     * @return \Swagger\Client\Model\Facette[]
     */
    public function getFacettes()
    {
        return $this->container['facettes'];
    }

    /**
     * Sets facettes
     *
     * @param \Swagger\Client\Model\Facette[] $facettes facettes
     *
     * @return $this
     */
    public function setFacettes($facettes)
    {
        $this->container['facettes'] = $facettes;

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

