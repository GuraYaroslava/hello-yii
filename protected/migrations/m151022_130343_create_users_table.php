<?php

class m151022_130343_create_users_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE user_id_seq;');
        $this->createTable('user', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'user_id_seq\')',
            'username' => 'VARCHAR(128) NOT NULL',
            'password' => 'VARCHAR(128) NOT NULL',
            'email' => 'VARCHAR(128) NOT NULL'
        ));
    }

    public function safeDown()
    {
        $this->dropTable('user');
        $this->execute('DROP SEQUENCE IF EXISTS user_id_seq;');
    }
}
