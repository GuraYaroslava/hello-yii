<?php

class m151027_130546_create_param_value_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE param_value_id_seq;');
        $this->createTable('param_value', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'reg_id_seq\')',
            'param_id' => 'INTEGER NOT NULL REFERENCES param (id) ON DELETE CASCADE',
            'reg_id' => 'INTEGER NOT NULL REFERENCES reg (id) ON DELETE CASCADE',
            'value' => 'TEXT NOT NULL',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('param_value');
        $this->execute('DROP SEQUENCE IF EXISTS param_value_id_seq;');
    }
}
