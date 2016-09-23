<?php
// src/AppBundle/Controller/ExtractorService.php
namespace AppBundle\Controller;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\ORM\EntityManager;
//use Doctrine\ORM\Query;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Order;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
//use Symfony\Component\DependencyInjection\ContainerAwareTrait;

//class ExtractorService extends Controller
class ExtractorService implements ContainerAwareInterface
//class ExtractorService extends ContainerAwareTrait
{
    use \Symfony\Component\DependencyInjection\ContainerAwareTrait;
    // public function __construct(EntityManager $entityManager) {
    //
    // }

    public function createAction ()
    {
        $order = new Order();

        //$repository = $this->get('doctrine');
        var_dump($this->container);
        //echo 'env' . $this->getEnvironment();
        //$entityManager = new ObjectManager();
//if (!$this->container) die ('container error');
//echo print_r($this->container); die (PHP_EOL.'no container!'.PHP_EOL);
        //if (!$this->getDoctrine()) die('error....');

//doctrine.dbal.['sqlite'].connection;
//$this->container->get('database_connection');
        //$repository = $this->get('doctrine');


        // $repository = $this->getDoctrine() //->getManager();
        //     ->getRepository('AppBundle:Order');
        // echo PHP_EOL;
        // echo print_r($repository->findAll());
        // echo PHP_EOL;
        // echo 'Done !!!!';
        // return new Response('and so');


    }

}
