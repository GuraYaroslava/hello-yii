<?php

class m151025_125804_insert_admin_to_users_table extends CDbMigration
{
    public function safeUp()
    {
    	$this->insert('user', array(
    		'username' => 'admin',
    		'password' => 'admin',
    		'email' => 'webmaster@example.com',
    	));
    }

    public function safeDown()
    {
    	$this->delete('user', 'username = :username', array(':username' => 'admin'));
    }
}
