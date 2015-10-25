<?php

class m151025_154320_create_fomrs_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE form_id_seq;');
        $this->createTable('form', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'form_id_seq\')',
            'name' => 'VARCHAR(128) NOT NULL',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('form');
        $this->execute('DROP SEQUENCE IF EXISTS form_id_seq;');
    }
}
