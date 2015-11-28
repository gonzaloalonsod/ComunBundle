<?php

namespace Tecspro\ComunBundle\Services;
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

    // public function removeContainsEntity($originalEntities, $entities) {
    //     // remove the relationship between the entity and the Task
    //     foreach ($originalEntities as $entity) {
    //         if (false === $task->getTags()->contains($entity)) {
    //             // remove the Task from the Tag
    //             $entity->getTasks()->removeElement($task);
    //             // if it was a many-to-one relationship, remove the relationship like this
    //             // $entity->setTask(null);
    //             $em->persist($entity);
    //             // if you wanted to delete the Tag entirely, you can also do that
    //             // $em->remove($entity);
    //         }
    //     }
    // }
}