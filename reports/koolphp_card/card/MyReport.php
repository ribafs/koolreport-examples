<?php
//require_once "../../../../koolreport/core/autoload.php";

class MyReport extends \koolreport\KoolReport
{
    public function settings()
    {
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );
    }
}