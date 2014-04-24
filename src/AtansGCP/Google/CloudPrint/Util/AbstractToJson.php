<?php
namespace AtansGCP\Google\CloudPrint\Util;

use Zend\Json\Json;

abstract class AbstractToJson
{
    public function toJson()
    {
        $data = $this->jsonFilter((array) $this);
        return Json::encode($data);
    }

    protected function jsonFilter(array $array) {
        $filtered = array();
        foreach ($array as $key => $value) {
            if (is_object($value)) {
                $value = (array) $value;
                $filtered[$key] = $this->jsonFilter($value);
            } elseif (is_array($value) && count($value)) {
                $filtered[$key] = $this->jsonFilter($value);
            } else {
                if (! is_null($value)) {
                    $filtered[$key] = $value;
                }
            }
        }
        return $filtered;
    }
}
