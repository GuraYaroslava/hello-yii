<?php

class m151025_170313_insert_data_for_param extends CDbMigration
{
    public function safeUp()
    {
        $this->insertMultiple(
            'param',
            array(
                0 => array('name' => 'Name', 'param_type_id' => 1, 'form_id' => 1),
                1 => array('name' => 'Date', 'param_type_id' => 3, 'form_id' => 1),
                2 => array('name' => 'Story', 'param_type_id' => 2, 'form_id' => 2),
                3 => array('name' => 'Fairytale', 'param_type_id' => 2, 'form_id' => 3),
            )
        );
    }

    public function safeDown()
    {
        $this->delete('param', 'name = :name', array(':name' => 'Name'));
        $this->delete('param', 'name = :name', array(':name' => 'Date'));
        $this->delete('param', 'name = :name', array(':name' => 'Story'));
        $this->delete('param', 'name = :name', array(':name' => 'Fairytale'));
    }
}
