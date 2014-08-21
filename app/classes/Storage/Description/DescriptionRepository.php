<?php

namespace App\Storage\Description;

interface DescriptionRepository
{
    public function find($id);
    public function findAll();
    public function query($params);
    public function update($id, $params);
    public function delete($id);
}
