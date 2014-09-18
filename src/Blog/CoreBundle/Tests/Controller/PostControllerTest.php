<?php

namespace Blog\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


/**
 * Class PostControllerTest
 * @package Blog\CoreBundle\Tests\Controller
 */
class PostControllerTest extends WebTestCase
{

    /**
     *Test Post Index
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful(), 'The response was not successful');

        //testing for 3 displayed posts
        $this->assertCount(3, $crawler->filter('h2'), 'There should be 3 displayed posts');
    }

    public function testShow(){
        $client = static::createClient();

        $post = $client->getContainer()->get('doctrine')->getManager()->getRepository('ModelBundle:Post')->findFirst();

        $crawler = $client->request('GET', '/'.$post->getSlug());

        $this->assertTrue($client->getResponse()->isSuccessful(), 'The response was not successful');

        $this->assertEquals($post->getTitle(), $crawler->filter('h1')->text(), 'Invalid post title');

        $this->assertGreaterThanOrEqual(1, $crawler->filter('article.comment')->count(), 'There should be at least 1 comment');
    }

    public function testCreateComment()
    {
        $client = static::createClient();

        $post = $client->getContainer()->get('doctrine')->getManager()->getRepository('ModelBundle:Post')->findFirst();

        $crawler = $client->request('GET', '/'.$post->getSlug());

        $buttonCrawlerNode = $crawler->selectButton('Send');

        $form = $buttonCrawlerNode->form(array(
           'blog_modelbundle_comment[authorName]' => 'A humble commenter',
           'blog_modelbundle_comment[body]' => "Hi I'm commenting about symfony2!"
        ));

        $client->submit($form);

        $this->assertTrue(
            $client->getResponse()->isRedirect('/'.$post->getSlug()), 'There was no redirection after submitting the form'
        );

        $crawler = $client->followRedirect();

        $this->assertCount(
          1,
            $crawler->filter('html:contains("Your comment was submitted successfully")'),
            'There was not any confirmation messsage'
        );
    }

}
