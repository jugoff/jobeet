<?php


namespace Imie\TotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Job", mappedBy="category")
     */
    protected $jobs;

    /**
     * @ORM\ManyToMany(targetEntity="Affiliate", mappedBy="category")
     */
    protected $affiliates;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @param mixed $jobs
     */
    public function setJobs($jobs)
    {
        $this->jobs = $jobs;
    }

    /**
     * @return mixed
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }

    /**
     * @param mixed $affiliates
     */
    public function setAffiliates($affiliates)
    {
        $this->affiliates = $affiliates;
    }



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jobs
     *
     * @param \Imie\TotoBundle\Entity\Job $jobs
     * @return Category
     */
    public function addJob(\Imie\TotoBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \Imie\TotoBundle\Entity\Job $jobs
     */
    public function removeJob(\Imie\TotoBundle\Entity\Job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Add affiliates
     *
     * @param \Imie\TotoBundle\Entity\Affiliate $affiliates
     * @return Category
     */
    public function addAffiliate(\Imie\TotoBundle\Entity\Affiliate $affiliates)
    {
        $this->affiliates[] = $affiliates;

        return $this;
    }

    /**
     * Remove affiliates
     *
     * @param \Imie\TotoBundle\Entity\Affiliate $affiliates
     */
    public function removeAffiliate(\Imie\TotoBundle\Entity\Affiliate $affiliates)
    {
        $this->affiliates->removeElement($affiliates);
    }

    public function __toString()
    {
        return $this->getName();
    }
}
