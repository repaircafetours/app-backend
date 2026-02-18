<?php

namespace App\Http\Services\Logs;

use App\Http\Services\VisitorService;
use App\Models\Visitor;

class VisitorLoggerService {

    public function log(Visitor $visitor) {
        /** @var VisitorService $VisitorService */
        $VisitorService = app("VisitorService");
        $VisitorService->getFromVisitor($visitor);

        // TODO : Complete logger when the column table is available
    }

    public function logDelete(Visitor $visitor) {
        // TODO : Complete logger when the column table is available
    }

}