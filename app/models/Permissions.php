<?php

namespace HashTag\Models;

class Permissions extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $resource;

    /**
     *
     * @var string
     */
    public $action;

    /**
     *
     * @var integer
     */
    public $idProfile;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("'Permissions'");
        $this->belongsTo('idProfile', 'Profiles', 'id', array('alias' => 'Profiles'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Permissions';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissions[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissions
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
