<?php
namespace Vivo\Service;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

/**
 * IndexerFieldHelperFactory
 * Instantiates the indexer field helper
 */
class IndexerFieldHelperFactory implements FactoryInterface
{
    /**
     * Create service
     * @param ServiceLocatorInterface $serviceLocator
     * @throws Exception\UnsupportedIndexerAdapterException
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $metadataManager    = $serviceLocator->get('metadata_manager');
        $pathBuilder        = $serviceLocator->get('path_builder');
        $fieldHelper        = new \Vivo\Indexer\FieldHelper($metadataManager, $pathBuilder);
        return $fieldHelper;
    }
}
