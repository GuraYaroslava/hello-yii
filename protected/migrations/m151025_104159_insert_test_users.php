<?php

class m151025_104159_insert_test_users extends CDbMigration
{
    public function safeUp()
    {
        $this->insertMultiple(
            'user',
            array(
                0 => array('username' => 'test1', 'password' => 'pass1', 'email' => 'test1@example.com'),
                1 => array('username' => 'test2', 'password' => 'pass2', 'email' => 'test2@example.com'),
                2 => array('username' => 'test3', 'password' => 'pass3', 'email' => 'test3@example.com'),
                3 => array('username' => 'test4', 'password' => 'pass4', 'email' => 'test4@example.com'),
                4 => array('username' => 'test5', 'password' => 'pass5', 'email' => 'test5@example.com'),
                5 => array('username' => 'test6', 'password' => 'pass6', 'email' => 'test6@example.com'),
                6 => array('username' => 'test7', 'password' => 'pass7', 'email' => 'test7@example.com'),
                7 => array('username' => 'test8', 'password' => 'pass8', 'email' => 'test8@example.com'),
                8 => array('username' => 'test9', 'password' => 'pass9', 'email' => 'test9@example.com'),
                9 => array('username' => 'test10', 'password' => 'pass10', 'email' => 'test10@example.com'),
                10 => array('username' => 'test12', 'password' => 'pass11', 'email' => 'test11@example.com'),
                11 => array('username' => 'test13', 'password' => 'pass12', 'email' => 'test12@example.com'),
                12 => array('username' => 'test14', 'password' => 'pass13', 'email' => 'test13@example.com'),
                13 => array('username' => 'test15', 'password' => 'pass14', 'email' => 'test14@example.com'),
                14 => array('username' => 'test15', 'password' => 'pass15', 'email' => 'test15@example.com'),
                15 => array('username' => 'test16', 'password' => 'pass16', 'email' => 'test16@example.com'),
                16 => array('username' => 'test17', 'password' => 'pass17', 'email' => 'test17@example.com'),
                17 => array('username' => 'test18', 'password' => 'pass18', 'email' => 'test18@example.com'),
                18 => array('username' => 'test19', 'password' => 'pass19', 'email' => 'test19@example.com'),
                19 => array('username' => 'test20', 'password' => 'pass20', 'email' => 'test20@example.com'),
                20 => array('username' => 'test21', 'password' => 'pass21', 'email' => 'test21@example.com'),
                21 => array('username' => 'test22', 'password' => 'pass22', 'email' => 'test22@example.com'),
                22 => array('username' => 'test23', 'password' => 'pass23', 'email' => 'test23@example.com'),
                23 => array('username' => 'test24', 'password' => 'pass24', 'email' => 'test24@example.com'),
                24 => array('username' => 'test25', 'password' => 'pass25', 'email' => 'test25@example.com'),
                25 => array('username' => 'test26', 'password' => 'pass26', 'email' => 'test26@example.com'),
                26 => array('username' => 'test27', 'password' => 'pass27', 'email' => 'test27@example.com'),
                27 => array('username' => 'test28', 'password' => 'pass28', 'email' => 'test28@example.com'),
                28 => array('username' => 'test29', 'password' => 'pass29', 'email' => 'test29@example.com'),
                29 => array('username' => 'test30', 'password' => 'pass30', 'email' => 'test30@example.com'),
                30 => array('username' => 'test31', 'password' => 'pass31', 'email' => 'test31@example.com'),
                31 => array('username' => 'test32', 'password' => 'pass32', 'email' => 'test32@example.com'),
                32 => array('username' => 'test33', 'password' => 'pass33', 'email' => 'test33@example.com'),
                33 => array('username' => 'test34', 'password' => 'pass34', 'email' => 'test34@example.com'),
                34 => array('username' => 'test35', 'password' => 'pass35', 'email' => 'test35@example.com'),
                35 => array('username' => 'test36', 'password' => 'pass36', 'email' => 'test36@example.com'),
                36 => array('username' => 'test37', 'password' => 'pass37', 'email' => 'test37@example.com'),
                37 => array('username' => 'test38', 'password' => 'pass38', 'email' => 'test38@example.com')
            )
        );
    }

    public function safeDown()
    {
        $this->delete('user', 'username = :username', array(':username' => 'test1'));
        $this->delete('user', 'username = :username', array(':username' => 'test2'));
        $this->delete('user', 'username = :username', array(':username' => 'test3'));
        $this->delete('user', 'username = :username', array(':username' => 'test4'));
        $this->delete('user', 'username = :username', array(':username' => 'test5'));
        $this->delete('user', 'username = :username', array(':username' => 'test6'));
        $this->delete('user', 'username = :username', array(':username' => 'test7'));
        $this->delete('user', 'username = :username', array(':username' => 'test8'));
        $this->delete('user', 'username = :username', array(':username' => 'test9'));
        $this->delete('user', 'username = :username', array(':username' => 'test10'));
        $this->delete('user', 'username = :username', array(':username' => 'test11'));
        $this->delete('user', 'username = :username', array(':username' => 'test12'));
        $this->delete('user', 'username = :username', array(':username' => 'test13'));
        $this->delete('user', 'username = :username', array(':username' => 'test14'));
        $this->delete('user', 'username = :username', array(':username' => 'test15'));
        $this->delete('user', 'username = :username', array(':username' => 'test16'));
        $this->delete('user', 'username = :username', array(':username' => 'test17'));
        $this->delete('user', 'username = :username', array(':username' => 'test18'));
        $this->delete('user', 'username = :username', array(':username' => 'test19'));
        $this->delete('user', 'username = :username', array(':username' => 'test20'));
        $this->delete('user', 'username = :username', array(':username' => 'test21'));
        $this->delete('user', 'username = :username', array(':username' => 'test22'));
        $this->delete('user', 'username = :username', array(':username' => 'test23'));
        $this->delete('user', 'username = :username', array(':username' => 'test24'));
        $this->delete('user', 'username = :username', array(':username' => 'test25'));
        $this->delete('user', 'username = :username', array(':username' => 'test26'));
        $this->delete('user', 'username = :username', array(':username' => 'test27'));
        $this->delete('user', 'username = :username', array(':username' => 'test28'));
        $this->delete('user', 'username = :username', array(':username' => 'test29'));
        $this->delete('user', 'username = :username', array(':username' => 'test30'));
        $this->delete('user', 'username = :username', array(':username' => 'test31'));
        $this->delete('user', 'username = :username', array(':username' => 'test32'));
        $this->delete('user', 'username = :username', array(':username' => 'test33'));
        $this->delete('user', 'username = :username', array(':username' => 'test34'));
        $this->delete('user', 'username = :username', array(':username' => 'test35'));
        $this->delete('user', 'username = :username', array(':username' => 'test36'));
        $this->delete('user', 'username = :username', array(':username' => 'test37'));
        $this->delete('user', 'username = :username', array(':username' => 'test38'));
    }
}
