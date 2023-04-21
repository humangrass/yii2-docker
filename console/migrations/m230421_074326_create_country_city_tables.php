<?php

use yii\db\Migration;

/**
 * Class m230421_074326_create_country_city_tables
 */
class m230421_074326_create_country_city_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey(),
            'code' => $this->char(2)->notNull()->unique(),
            'name' => $this->char(52)->notNull()->unique(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
        ]);
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
            'country_code' => $this->char(2)->notNull(),
        ]);
        $this->addForeignKey(
            'fk-city-country_code-country-code',
            'city',
            'country_code',
            'country',
            'code',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230421_074326_create_country_city_tables cannot be reverted.\n";
        $this->dropTable('city');
        $this->dropTable('country');
        return false;
    }
}
