<?php

namespace Tecspro\Bundle\ComunBundle\Services;
use Doctrine\Common\Collections\ArrayCollection;

class HelpersObjectRelation {

    public function getOriginalEntity($entities) {
        $originalEntities = new ArrayCollection();
        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($entities as $entity) {
            $originalEntities->add($entity);
        }

        return $originalEntities;
    }

    public function getEntitiesToAdd($news_entities, $olds_entities) {

        return array_diff($news_entities, $olds_entities);
    }

    public function getEntitiesToRemove($news_entities, $olds_entities) {

        return array_diff($olds_entities, $news_entities);
    }
}
