<?php

namespace App\Http\Services\Logs;

use App\Http\Services\VisitorService;
use App\Models\Visitor;

class VisitorLoggerService {

    private VisitorService $service;


    /**
     * An initializer function that should only be called once within the service provider.
     * 
     * We use this method to resolve the circular dependency between VisitorService and VisitorLoggerService.
     * @param VisitorService $service
     * @return void
     */
    public function initialize(VisitorService $service) {
        $this->service = $service;
    }


    public function log(Visitor $visitor) {
        $this->service->getFromVisitor($visitor);

        // TODO : Complete logger when the column table is available
    }

    public function logDelete(Visitor $visitor) {
        // TODO : Complete logger when the column table is available
    }

}