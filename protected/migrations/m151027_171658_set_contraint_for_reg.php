<?php

class m151027_171658_set_contraint_for_reg extends CDbMigration
{
    public function safeUp()
    {
        $this->createIndex('uniquePair', 'reg', array('user_id', 'event_id'), true);
    }

    public function safeDown()
    {
        $this->execute('ALTER TABLE reg DROP CONSTRAINT IF EXISTS "uniquePair"');
    }
}
