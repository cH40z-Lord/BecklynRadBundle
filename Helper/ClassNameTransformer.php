<?php

namespace Becklyn\RadBundle\Helper;


/**
 * Helps with class name transformations
 */
class ClassNameTransformer
{
    /**
     * Tries to map a model name to the associated entity class name.
     *
     * @param string $modelClassName
     *
     * @return string
     */
    public function transformModelToEntity ($modelClassName)
    {
        $className = trim($modelClassName, "\\");
        $className = preg_replace("~Bundle\\\\Model\\\\(.+)Model$~", "Bundle\\\\Entity\\\\\\1", $className);
        return $className;
    }
}
