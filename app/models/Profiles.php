<?php

namespace HashTag\Models;

class Profiles extends \Phalcon\Mvc\Model
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
    public $active;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("'Profiles'");
        $this->hasMany('id', 'Permissions', 'idProfile', array('alias' => 'Permissions'));
        $this->hasMany('id', 'Users', 'idProfile', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Profiles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Profiles[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Profiles
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
