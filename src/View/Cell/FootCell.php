<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Foot cell
 */
class FootCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Users');
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }
}
