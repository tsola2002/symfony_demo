<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures for the Post Entity
 */
class Posts extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 15;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle('Title1 with John');
        $p1->setBody('It is a long established fact that a reader will be distracted by the readable content
                      of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less
                      normal distribution of letters as opposed to using  making it look like readable English Many desktop
                      publishing packages and web page editors now use Lorem Ipsum as their default model text and a search
                      for  will uncover many web sites still in their infancy Various versions have evolved over the years
                      sometimes by accident sometimes on purpose injected humour and the like');
        $p1->setAuthor($this->getAuthor($manager, 'John'));

        $p2 = new Post();
        $p2->setTitle('Title2 with Jane');
        $p2->setBody('This is the thing i have been talking about fact that a reader will be distracted by the readable content
                      of a page when looking at its layout The point of using Lorem Ipsum is that it has a more or less
                      normal distribution of letters as opposed to using  making it look like readable English Many desktop
                      publishing packages and web page editors now use Lorem Ipsum as their default model text and a search
                      for will uncover many web sites still in their infancy Various versions have evolved over the years
                      sometimes by accident sometimes on purpose injected humour and the like');
        $p2->setAuthor($this->getAuthor($manager, 'Jane'));

        $p3 = new Post();
        $p3->setTitle('Title3 with Jane');
        $p3->setBody('The third thing is i have been talking about fact that a reader will be distracted by the readable content
                      of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less
                      normal distribution of letters as opposed to using  making it look like readable English Many desktop
                      publishing packages and web page editors now use Lorem Ipsum as their default model text and a search
                      for will uncover many web sites still in their infancy Various versions have evolved over the years
                      sometimes by accident sometimes on purpose injected humour and the like');
        $p3->setAuthor($this->getAuthor($manager, 'Jane'));

        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);

        $manager->flush();
    }


    /**
     * Get an Author
     *
     * @param ObjectManager $manager
     * @param string        $name
     *
     * @return Author
     */
    private function getAuthor(ObjectManager $manager, $name)
    {
        return $manager->getRepository('ModelBundle:Author')->findOneBy(
            array(
                'name' => $name
            )
        );
    }
}
