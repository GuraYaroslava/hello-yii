<?php

class m151025_112320_create_events_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE event_id_seq;');
        $this->createTable('event', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'event_id_seq\')',
            'name' => 'VARCHAR(128) NOT NULL',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('event');
        $this->execute('DROP SEQUENCE IF EXISTS event_id_seq;');
    }
}
