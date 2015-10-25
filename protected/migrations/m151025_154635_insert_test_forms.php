<?php

class m151025_154635_insert_test_forms extends CDbMigration
{
    public function safeUp()
    {
        $this->insertMultiple(
            'form',
            array(
                0 => array('name' => 'form1'),
                1 => array('name' => 'form2'),
                2 => array('name' => 'form3'),
                3 => array('name' => 'form4'),
                4 => array('name' => 'form5'),
            )
        );
    }

    public function safeDown()
    {
        $this->delete('form', 'name = :name', array(':name' => 'form1'));
        $this->delete('form', 'name = :name', array(':name' => 'form2'));
        $this->delete('form', 'name = :name', array(':name' => 'form3'));
        $this->delete('form', 'name = :name', array(':name' => 'form4'));
        $this->delete('form', 'name = :name', array(':name' => 'form5'));
    }
}
