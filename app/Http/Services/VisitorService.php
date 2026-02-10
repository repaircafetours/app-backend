<?php

namespace App\Http\Services;

use App\Models\Visitor;
use App\Http\Services\Logs\VisitorLoggerService;

class VisitorService {

    /**
     * @var VisitorLoggerService $logger
     */
    private $logger = app("VisitorLoggerService");


    public function save(Visitor $visitor): void {
        $this->logger->log($visitor);
        $visitor->save();
    }

    public function getFromVisitor(Visitor $visitor): Visitor {
        return $this->getFromId($visitor->id);
    }

    public function getFromId(int $id): Visitor {
        return Visitor::find($id);
    }

    public function getAll() {
        return Visitor::all();
    }

    public function delete(Visitor $visitor): void {
        $this->logger->logDelete($visitor);
        $visitor->delete();
    }
}