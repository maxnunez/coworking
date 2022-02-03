<?php


namespace App\Traits;

trait UpdateGenericClass
{
    public static function updateData($id, $fields = null)
    {
        $model = self::find($id);
        $fields = ($fields)? $fields : request()->except('_token');
        return $model->update($fields);
    }
}