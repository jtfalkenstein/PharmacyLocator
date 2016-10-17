<?php

namespace PharmacyLocator\Application;

use Exception;
use PharmacyLocator\Exceptions\PharmacyLocatorException;
use PharmacyLocator\Repository\IPharmacyRepo;
use PharmacyLocator\RequestFactory\RequestFactory;
use PharmacyLocator\Responses\IResponseSerializer;

/**
 * This is the central top-level class for the PharmacyLocator. It receives the
 * dependencies it needs through its constructor and knows how to call those
 * dependencies to process the request and output a response.
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
        //Wrap entire process in global exception handler
        try{
            //1. Get request object
            $request = $this->reqFac->packageRequest();
            //2. Get closest pharmacy
            $pharmInfo = $this->pharmacyRepo->getNearestPharmacy($request->latitude, $request->longitude);
            //3. package response
            $response = $this->serializer->package($pharmInfo);
            //4. Echo it out as the response
            echo $response;
        } catch (PharmacyLocatorException $ex) {
            echo $this->serializer->packageException($ex);
        } catch (\Exception $ex) {            
            $except = new PharmacyLocatorException(
                "An exception was encountered when attempting to process your request.",
                null,
                $ex
            );    
            echo $this->serializer->packageException($except);
        }
    }
}
