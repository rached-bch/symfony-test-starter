<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //phpinfo();
        
        // $url         = "http://www.dneonline.com/calculator.asmx?WSDL";
        // $client     = new \SoapClient($url, array("trace" => 1, "exception" => 0));

        // // Call wsdl function
        // $result = $client->__soapCall("Add", array(
        //     "DeleteMarketplaceAd" => array(
        //         "intA"        => 1,
        //         "intB"    => 2     // The ads ID
        //     )
        // ), NULL);
        // dump($result);die();


        $url         = "https://soap.aspsms.com/aspsmsx2.asmx?WSDL";
        $client     = new \SoapClient($url, array("trace" => 1, "exception" => 0));

        // Call wsdl function
        $result = $client->__soapCall("VerifyToken", array(
            "UserKey" => "1",
            "Password" => "1",
            "PhoneNumber" => "1",
            "TokenReference" => "1",
            "VerificationCode" => "1",

        ), NULL);
        dump($result);die();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
