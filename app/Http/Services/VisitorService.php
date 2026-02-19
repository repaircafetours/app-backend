<?php

namespace App\Http\Services;

use App\Models\Visitor;
use App\Http\Services\Logs\VisitorLoggerService;

class VisitorService {

    
    private VisitorLoggerService $logger;

    public function __construct(VisitorLoggerService $logger)
    {
        $this->logger = $logger;
    }

    public function save(Visitor $visitor): void {
        $this->logger->log($visitor);
        $visitor->save();
    }

    /**
     * Returns the old version of the current visitor. If it has not already been inserted in
     * database, returns the same visitor.
     * @param Visitor $visitor
     * @return Visitor The databse instance of the requested Visitor, or the same instance if it does not exists
     */
    public function getFromVisitor(Visitor $visitor): Visitor {
        if (!$visitor->id) return $visitor;
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