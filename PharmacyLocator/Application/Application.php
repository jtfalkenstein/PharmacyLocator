<?php

namespace PharmacyLocator\Application;

use Exception;
use PharmacyLocator\Exceptions\PharmacyLocatorException;
use PharmacyLocator\Repository\IPharmacyRepo;
use PharmacyLocator\RequestFactory\RequestFactory;
use PharmacyLocator\Responses\IResponseSerializer;

/**
 * Description of Application
 *
 * @author jfalkenstein
 */
class Application {
    private $reqFac;
    private $pharmacyRepo;
    private $serializer;
    public function __construct(RequestFactory $reqFac, IPharmacyRepo $pharmRepo, IResponseSerializer $serializer) {
        $this->reqFac = $reqFac;
        $this->pharmacyRepo = $pharmRepo;
        $this->serializer = $serializer;
    }
    
    
    public function run(){
        
        try{
            //1. Get request object
            $request = $this->reqFac->packageRequest();
            //2. Get closest pharmacy
            $pharmInfo = $this->pharmacyRepo->getNearestPharmacy($request->latitude, $request->longitude);
            //3. package response
            $response = $this->serializer->package($pharmInfo);
            //4. Send it out
            echo $response;
        } catch (Exception $ex) {
            $except;
            if(is_a($ex, PharmacyLocatorException::class)){
                $except = $ex;
            }else{
                $except = new PharmacyLocatorException(
                    "An exception was encountered when attempting to process your request.",
                    null,
                    $ex
                );    
            }
            $response = $this->serializer->packageException($except);
            echo $response;
        }
    }
}
