<?php
// src/AppBundle/Controller/ExtractorController.php
namespace AppBundle\Controller;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\ORM\EntityManager;
//use Doctrine\ORM\Query;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Order;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class ExtractorController extends Controller
//class ExtractorController implements ContainerAwareInterface
{
    //use \Symfony\Component\DependencyInjection\ContainerAwareTrait;
    /**
     * @Route("/extract", name="extract")
     */
    public function createAction ()
    {
        $order = new Order();
        //var_dump($this->container);

        //$entityManager = new ObjectManager();
//if (!$this->container) die ('container error');
//echo print_r($this->container); die (PHP_EOL.'no container!'.PHP_EOL);
        //if (!$this->getDoctrine()) die('error....');

    //$repository = $this->getDoctrine() //->getManager();
    //$inputRepo = $this->get('doctrine')->getManager('input');

    echo PHP_EOL;
    echo '<pre>';

    $inputOrders = $this->get('doctrine')
        ->getRepository('AppBundle:Order', 'input')
        ->findAll();
        //->findBy(array('id' => 2));
        //->findOneById(2);
    //$inputOrders = $inputRepo->findAll();
//print_r($inputOrders);
    $outputRepo = $this->get('doctrine')
        ->getRepository('AppBundle:Order', 'output');
echo 'count ', count($inputOrders), PHP_EOL;
    foreach ($inputOrders as $key => $inOrder) {
        $order = new Order();
        print_r($inOrder->getOrder());
        //$order->setOrder($inOrder->id, $inOrder->name, $inOrder->price);
        print_r($order);
    }

    //$order = new Order();


    // $order = new Order();
    // $order->setOrder(4,'order4', 12.95);
    // print_r($order);

    // $q = $this->get('doctrine')->getEntityManager()
    //     ->createQuery("SELECT * FROM orders");
    //
    // print_r($q->getResult());



        print_r($inputOrders, true) . '</pre>';
        //echo '<pre>' . print_r($outputRepo->findAll(), true) . '</pre>';
        echo PHP_EOL;

        return new Response('Done !');



    }
}
