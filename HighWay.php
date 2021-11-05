<?php

require_once 'Vehicle.php';

abstract class HighWay
{
    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle): void;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    protected function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    protected function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    protected function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}
