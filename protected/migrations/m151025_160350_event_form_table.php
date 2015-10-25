<?php

class m151025_160350_event_form_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE event_form_id_seq;');
        $this->createTable('event_form', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'event_form_id_seq\')',
            'event_id' => 'INTEGER NOT NULL REFERENCES event (id) ON DELETE CASCADE',
            'form_id' => 'INTEGER NOT NULL REFERENCES form (id) ON DELETE CASCADE',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('event_form');
        $this->execute('DROP SEQUENCE IF EXISTS event_form_id_seq;');
    }
}
