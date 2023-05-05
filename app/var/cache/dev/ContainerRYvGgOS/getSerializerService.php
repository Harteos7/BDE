<?php

namespace ContainerRYvGgOS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UnwrappingDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/Normalizer/FlattenExceptionNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UidNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/MimeMessageNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/PropertyNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/FormErrorNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/BackedEnumNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

        $a = ($container->privates['property_info'] ?? $container->getPropertyInfoService());

        if (isset($container->privates['serializer'])) {
            return $container->privates['serializer'];
        }
        $b = ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'));
        $c = ($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService'));

        $d = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($c);
        $e = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($c);

        return $container->privates['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer($b), 1 => new \Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 3 => new \Symfony\Component\Serializer\Normalizer\UidNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $d), 6 => new \Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer(new \Symfony\Component\Serializer\Normalizer\PropertyNormalizer($c, $d, $a, $e, NULL)), 7 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 9 => new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer(), 10 => new \Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer(), 11 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($container->privates['mime_types'] ?? $container->load('getMimeTypesService'))), 12 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL), 13 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($c, $d, $b, $a, $e, NULL)], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(NULL, NULL), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }
}
