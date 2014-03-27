<?php
namespace HarrisStreet\CoreConfigData\Exporter;

interface ExporterInterface
{

    /**
     * @param \Varien_Data_Collection $collection
     *
     * @return $this
     */
    public function setData(\Varien_Data_Collection $collection);

    /**
     * @return string
     */
    public function getData();

    public function getFileNameExtension();
}