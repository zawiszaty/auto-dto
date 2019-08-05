<?php


namespace Zawiszaty\App;


class ObjectDTO
{
    public function __construct(DTOInterface $object, array $propertyName)
    {
        $this->mapProperty($object, $propertyName);
    }

    private function mapProperty(DTOInterface $params, array $propertiesNames): void
    {
        foreach ($propertiesNames as $propertiesName)
        {
            try
            {
                $this->{$propertiesName} = $params->{'get' . ucfirst($propertiesName)}();
            }
            catch (\Error $error)
            {
                try
                {
                    $this->{$propertiesName} = $params->{$propertiesName};
                }
                catch (\Error $error)
                {
                    throw DTOException::fromMssingProperty($propertiesName);
                }
            }
        }
    }
}