<?php

namespace NAR\PedidosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NAR\PedidosBundle\Entity\Pedido;
use NAR\PedidosBundle\Form\PedidoType;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class PedidosController extends Controller
{
    public function indexAction(){
        
        $pedido = new Pedido();
        $form = $this->createCreateForm($pedido);
        
        return $this->render('NARPedidosBundle:Pedido:index.html.twig', array('form' => $form->createView()));
    }
    
    public function paypalAction(){
        $session = $this->getRequest()->getSession();
        $imp = $session->get('importe');
        return $this->render('NARPedidosBundle:Pedido:paypal.html.twig', array('importe' => $imp));
    }
    
    public function pedirAction(Request $request){
        $pedido = new Pedido();
        $form = $this->createCreateForm($pedido);
        $form->handleRequest($request);

        
        if($form->isValid()){

            $pedido->setIdentificacion($this->generarIdentificacion());
            $pedido->setFecha($request->request->get('diaSelect') . ' de Enero a las '.$request->request->get('horaSelect'));
            $pedido->setPagado(false);
            $em = $this->getDoctrine()->getManager();
            
            $session = $this->getRequest()->getSession();
            $session->set('importe', $pedido->getImporte());
            $session->set('identificacion', $pedido->getIdentificacion());
            
            $em->persist($pedido);
            $em->flush();
            
            return $this->redirectToRoute('nar_pedidos_paypal');
        }
        
         return $this->render('NARPedidosBundle:Pedido:index.html.twig', array('form' => $form->createView()));
        
    }
    
    private function generarIdentificacion($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        return $randomString;
    }
    
    private function createCreateForm(Pedido $entity){
         $form = $this->createForm(new PedidoType(), $entity, array(
                'action' => $this->generateUrl('nar_pedidos_pedir'),
                'method' => 'POST'
         ));
         
         return $form;
    }

}
