<?php

namespace Src;

class AddressHandler
{
    /**
     * @param array $validatedData
     * @return string
     */
    public function addHandler(array $validatedData)
    {
        return implode(', ', $validatedData);
    }
}
