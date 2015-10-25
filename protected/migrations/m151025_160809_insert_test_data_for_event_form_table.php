<?php

class m151025_160809_insert_test_data_for_event_form_table extends CDbMigration
{
    public function safeUp()
    {
        $this->insertMultiple(
            'event_form',
            array(
                0 => array('event_id' => 1, 'form_id' => 1),
                1 => array('event_id' => 1, 'form_id' => 2),
                2 => array('event_id' => 1, 'form_id' => 3),
                3 => array('event_id' => 2, 'form_id' => 4),
                4 => array('event_id' => 2, 'form_id' => 5),
            )
        );
    }

    public function safeDown()
    {
        $this->delete('event_form', 'event_id = :event_id AND form_id = :fomr_id', array(':event_id' => 1, 'form_id' => 1));
        $this->delete('event_form', 'event_id = :event_id AND form_id = :fomr_id', array(':event_id' => 1, 'form_id' => 2));
        $this->delete('event_form', 'event_id = :event_id AND form_id = :fomr_id', array(':event_id' => 1, 'form_id' => 3));
        $this->delete('event_form', 'event_id = :event_id AND form_id = :fomr_id', array(':event_id' => 2, 'form_id' => 4));
        $this->delete('event_form', 'event_id = :event_id AND form_id = :fomr_id', array(':event_id' => 2, 'form_id' => 5));
    }
}
