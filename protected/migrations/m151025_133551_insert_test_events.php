<?php

class m151025_133551_insert_test_events extends CDbMigration
{
    public function safeUp()
    {
        $this->insertMultiple(
            'event',
            array(
                0 => array('name' => 'event1'),
                1 => array('name' => 'event2'),
                2 => array('name' => 'event3'),
                3 => array('name' => 'event4'),
                4 => array('name' => 'event5'),
            )
        );
    }

    public function safeDown()
    {
        $this->delete('event', 'name = :name', array(':name' => 'event1'));
        $this->delete('event', 'name = :name', array(':name' => 'event2'));
        $this->delete('event', 'name = :name', array(':name' => 'event3'));
        $this->delete('event', 'name = :name', array(':name' => 'event4'));
        $this->delete('event', 'name = :name', array(':name' => 'event5'));
    }
}
