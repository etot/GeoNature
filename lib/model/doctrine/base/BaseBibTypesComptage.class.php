<?php

/**
 * BaseBibTypesComptage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_type_comptage
 * @property string $nom_type_comptage
 * @property string $desc_type_comptage
 * @property string $message_type_comptage
 * @property Doctrine_Collection $BibTaxonsFaunePne
 * 
 * @method integer             getIdTypeComptage()        Returns the current record's "id_type_comptage" value
 * @method string              getNomTypeComptage()       Returns the current record's "nom_type_comptage" value
 * @method string              getDescTypeComptage()      Returns the current record's "desc_type_comptage" value
 * @method string              getMessageTypeComptage()   Returns the current record's "message_type_comptage" value
 * @method Doctrine_Collection getBibTaxonsFaunePne()     Returns the current record's "BibTaxonsFaunePne" collection
 * @method BibTypesComptage    setIdTypeComptage()        Sets the current record's "id_type_comptage" value
 * @method BibTypesComptage    setNomTypeComptage()       Sets the current record's "nom_type_comptage" value
 * @method BibTypesComptage    setDescTypeComptage()      Sets the current record's "desc_type_comptage" value
 * @method BibTypesComptage    setMessageTypeComptage()   Sets the current record's "message_type_comptage" value
 * @method BibTypesComptage    setBibTaxonsFaunePne()     Sets the current record's "BibTaxonsFaunePne" collection
 * 
 * @package    faune
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBibTypesComptage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactfaune.bib_types_comptage');
        $this->hasColumn('id_type_comptage', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('nom_type_comptage', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('desc_type_comptage', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('message_type_comptage', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('BibTaxonsFaunePne', array(
             'local' => 'id_type_comptage',
             'foreign' => 'id_type_comptage'));
    }
}