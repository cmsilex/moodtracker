<?php

namespace CMSilex\MoodTracker\Entities;

use CMSilex\Components\CMSEntity;

/**
 * @Entity
 */
class Thought
{

    public function __construct()
    {
        $this->timeOfDay = new \DateTime();
    }

    /** @Column(type="integer") @Id @GeneratedValue */
    protected $id;

    /** @Column(type="text") */
    protected $situation;

    /** @Column(type="integer") */
    protected $mood;

    /** @Column(type="text") */
    protected $description;

    /** @Column(type="datetime") */
    protected $timeOfDay;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * @param mixed $situation
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;
    }

    /**
     * @return mixed
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * @param mixed $mood
     */
    public function setMood($mood)
    {
        $this->mood = $mood;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * @param mixed $timeOfDay
     */
    public function setTimeOfDay($timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
    }

}