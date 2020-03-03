<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m200303_064736_create_contact_table extends Migration
{
    private $table = 'contact';

    public function up()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'name' => $this->string(70)->notNull(),
            'email_or_phone_number' => $this->string()->notNull(),
            'subject' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
            'sent_at' => $this->integer()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
