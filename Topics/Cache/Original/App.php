<?php

namespace Original;

class App
{

    public function __construct()
    {
        $startTime = \microtime(true);
        $this->init();
        $execTime = \microtime(true) - $startTime;
        echo "--- Execution time: $execTime(s)\n";
    }

    private function init()
    {
        echo "--- Script is executing\n";        
        $roundToRun = 200;
        for ($i = 0; $i < $roundToRun; $i++) {
           $this->getProductNameFromSku(1170032);
        }
    }

    private function getProductNameFromSku($sku) {
        $fp = fopen(data_path, 'r');
        while (!feof($fp)) {
            $line = fgets($fp, 80000);
            $data = str_getcsv($line, "\t");
            $productSku = $data[0];
            $productName = $data[1];
            if ((int)$productSku === $sku) {
                fclose($fp);
                return $productName;
            }
        }
        fclose($fp);
        return "Not found product name for this SKU\n";
    }
}
