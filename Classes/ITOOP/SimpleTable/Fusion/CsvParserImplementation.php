<?php
namespace ITOOP\SimpleTable\Fusion;

use Neos\Flow\Annotations as Flow;
use Neos\Fusion\FusionObjects\AbstractFusionObject;


class CsvParserImplementation extends AbstractFusionObject
{

    /**
     * Evaluate this Fusion object and return the result
     *
     * @return mixed
     */
    public function evaluate()
    {
        $data = [];

        $csvData = $this->tsValue('csv');
        $lines = preg_split('/\n|\r\n?/', $csvData);
        foreach ($lines as $line) {
            $data[] = str_getcsv($line, ';');
        }
        return $data;
    }
}