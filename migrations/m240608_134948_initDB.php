<?php

use yii\db\Migration;

/**
 * Class m240608_134948_initDB
 */
class m240608_134948_initDB extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240608_134948_initDB cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240608_134948_initDB cannot be reverted.\n";

        return false;
    }
    */
}
