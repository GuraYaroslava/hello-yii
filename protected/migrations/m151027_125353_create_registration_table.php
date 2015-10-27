<?php

class m151027_125353_create_registration_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE reg_id_seq;');
        $this->createTable('reg', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'reg_id_seq\')',
            'event_id' => 'INTEGER NOT NULL REFERENCES event (id) ON DELETE CASCADE',
            'user_id' => 'INTEGER NOT NULL REFERENCES "user" (id) ON DELETE CASCADE',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('reg');
        $this->execute('DROP SEQUENCE IF EXISTS reg_id_seq;');
    }
}
