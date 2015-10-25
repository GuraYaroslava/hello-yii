<?php

class m151025_164947_insert_data_for_param_type extends CDbMigration
{
    public function safeUp()
    {
        $this->insertMultiple(
            'param_type',
            array(
                0 => array('name' => 'text'),
                1 => array('name' => 'textarea'),
                2 => array('name' => 'date'),
            )
        );
    }

    public function safeDown()
    {
        $this->delete('param_type', 'name = :name', array(':name' => 'text'));
        $this->delete('param_type', 'name = :name', array(':name' => 'textarea'));
        $this->delete('param_type', 'name = :name', array(':name' => 'date'));
    }
}
