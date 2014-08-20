<?php

namespace App\Model;

class Description
{
    public static function find($id)
    {
        return self::mockup($id);
    }

    public static function all()
    {
        return self::mockups();
    }

    public function save()
    {
        return;
    }

    public static function create($params)
    {
        $mockup = self::mockup(1);

        foreach ($params as $key => $value) {
            $mockup->$key = $value;
        }

        return $mockup;
    }

    public static function destroy($id)
    {
        return;
    }

    protected function mockup($id)
    {
        $mockup = new self();
        $mockup->id = $id;

        return $mockup;
    }

    protected function mockups($ids = array(1, 2, 3, 4))
    {
        $mockups = array();

        foreach ($ids as $id) {
            $mockups[] = self::mockup($id);
        }

        return $mockups;
    }
}
