<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Negotiation\Types;

/**
 * Class Offer
 * @property boolean $allowCounterOffer
 * @property \DTS\eBaySDK\Negotiation\Enums\OfferStatusEnum $offerStatus
 * @property \DTS\eBaySDK\Negotiation\Enums\OfferTypeEnum $offerType
 * @property \DTS\eBaySDK\Negotiation\Types\OfferedItem[] $offeredItems
 * @property string $initiatedBy
 * @property \DTS\eBaySDK\Negotiation\Types\TimeDuration $offerDuration
 * @property string $offerId
 * @property string $message
 * @property string $revision
 * @package DTS\eBaySDK\Negotiation\Types
 */
class Offer extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'offerType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerType'
        ],
        'offerDuration' => [
            'type' => 'DTS\eBaySDK\Negotiation\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerDuration'
        ],
        'offerStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerStatus'
        ],
        'allowCounterOffer' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'allowCounterOffer'
        ],
        'revision' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'revision'
        ],
        'offerId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerId'
        ],
        'initiatedBy' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initiatedBy'
        ],
        'message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'message'
        ],
        'offeredItems' => [
            'type' => 'DTS\eBaySDK\Negotiation\Types\OfferedItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'offeredItems'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
