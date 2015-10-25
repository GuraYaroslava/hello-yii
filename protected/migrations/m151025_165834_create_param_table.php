<?php

class m151025_165834_create_param_table extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('CREATE SEQUENCE param_id_seq;');
        $this->createTable('param', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY DEFAULT NEXTVAL(\'param_id_seq\')',
            'name' => 'VARCHAR(50) NOT NULL',
            'param_type_id' => 'INTEGER NOT NULL REFERENCES param_type (id) ON DELETE CASCADE',
            'form_id' => 'INTEGER NOT NULL REFERENCES form (id) ON DELETE CASCADE',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('param');
        $this->execute('DROP SEQUENCE IF EXISTS param_id_seq;');
    }
}
