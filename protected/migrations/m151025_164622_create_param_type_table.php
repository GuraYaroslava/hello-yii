<?php

class m151025_164622_create_param_type_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE param_type_id_seq;');
        $this->createTable('param_type', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'param_type_id_seq\')',
            'name' => 'VARCHAR(128) NOT NULL',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('param_type');
        $this->execute('DROP SEQUENCE IF EXISTS param_type_id_seq;');
    }
}
