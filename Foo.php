<?php

namespace Backend\Util;


use Faker\Factory;
use Faker\ORM\Propel\EntityPopulator;

class Foo {

    public function bar() {


        $oGenerator = Factory::create();

        $aAccount = array(
            'Id' => function() use ($oGenerator) { return $oGenerator->numberBetween(1, 9); },
            'RegionId' => function() use ($oGenerator) { return $oGenerator->numberBetween(1, 9); }
        );

        $entity = new EntityPopulator('Account');
        $entity->mergeColumnFormattersWith($aAccount);
        foreach ($entity->getColumnFormatters() as $column => $format) {
            if (null !== $format) {
                //do further stuff
            }
        }
    }

}

?>