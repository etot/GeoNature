<?php

/**
 * BaseBibClasses
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_classe
 * @property integer $id_embranchement
 * @property string $nom_classe
 * @property string $desc_classe
 * 
 * @method integer    getIdClasse()         Returns the current record's "id_classe" value
 * @method integer    getIdEmbranchement()  Returns the current record's "id_embranchement" value
 * @method string     getNomClasse()        Returns the current record's "nom_classe" value
 * @method string     getDescClasse()       Returns the current record's "desc_classe" value
 * @method BibClasses setIdClasse()         Sets the current record's "id_classe" value
 * @method BibClasses setIdEmbranchement()  Sets the current record's "id_embranchement" value
 * @method BibClasses setNomClasse()        Sets the current record's "nom_classe" value
 * @method BibClasses setDescClasse()       Sets the current record's "desc_classe" value
 * @property BibEmbranchements $
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBibClasses extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('taxonomie.bib_classes');
        $this->hasColumn('id_classe', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_embranchement', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('nom_classe', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('desc_classe', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibEmbranchements', array(
             'local' => 'id_embranchement',
             'foreign' => 'id_embranchement'));
    }
}