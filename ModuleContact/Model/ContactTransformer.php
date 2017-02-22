<?php

namespace Module\ApiClientBundle\ModuleContact\Model;

use libphonenumber\PhoneNumber;

class ContactTransformer
{
    /**
     * @param array $array
     *
     * @return Contact
     */
    public static function fromArray(array $array)
    {
        $phoneNumber = null;
        if (null !== $array['phone_number']) {
            $phoneNumber = new PhoneNumber();
            $phoneNumber->unserialize($array['phone_number']);
        }

        return new Contact($array['id'], $array['company_name'], $array['last_name'], $array['first_name'], $array['email'],
            $phoneNumber, $array['country_code'], $array['administrative_area'], $array['locality'], $array['dependent_locality'],
            $array['postal_code'], $array['sorting_code'], $array['address_line1'], $array['address_line2'], $array['username']);
    }
}
