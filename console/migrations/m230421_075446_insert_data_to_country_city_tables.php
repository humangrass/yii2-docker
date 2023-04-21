<?php

use yii\db\Migration;

/**
 * Class m230421_075446_insert_data_to_country_city_tables
 */
class m230421_075446_insert_data_to_country_city_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('country', ['code', 'name', 'population'], [
            ['AU', 'Australia', 24016400],
            ['BR', 'Brazil', 205722000],
            ['CA', 'Canada', 35985751],
            ['CN', 'China', 1375210000],
            ['DE', 'Germany', 81459000],
            ['FR', 'France', 64513242],
            ['GB', 'United Kingdom', 65097000],
            ['IN', 'India', 1285400000],
            ['RU', 'Russia', 146519759],
            ['US', 'United States', 322976000],
        ]);

        $this->batchInsert('city', ['name', 'population', 'country_code'], [
            ['Sydney', 4627324, 'AU'],
            ['Melbourne', 5119000, 'AU'],
            ['Brisbane', 2468000, 'AU'],
            ['Rio de Janeiro', 6718903, 'BR'],
            ['Sao Paulo', 12325232, 'BR'],
            ['Toronto', 2731571, 'CA'],
            ['Vancouver', 647540, 'CA'],
            ['Beijing', 21710000, 'CN'],
            ['Shanghai', 24183300, 'CN'],
            ['Berlin', 3748148, 'DE'],
            ['Paris', 2206488, 'FR'],
            ['London', 8908081, 'GB'],
            ['Mumbai', 12442373, 'IN'],
            ['Moscow', 11920000, 'RU'],
            ['New York', 8537673, 'US'],
            ['Los Angeles', 3976322, 'US'],
            ['Chicago', 2695598, 'US'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230421_075446_insert_data_to_country_city_tables cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230421_075446_insert_data_to_country_city_tables cannot be reverted.\n";

        return false;
    }
    */
}
