<?php

declare(strict_types=1);

namespace App\Module\GeoCoordinate\Message;

use App\Module\GeoCoordinate\ValueObject\Address;
use App\Shared\Messenger\SyncMessageInterface;

class FindGeoCoordinatesQuery implements SyncMessageInterface
{
    public function __construct(public readonly Address $address)
    {
    }

    public function serialize(): array
    {
        return [
            '',
        ];
    }

    public function deserialize(array $array): static
    {
        // TODO: Implement deserialize() method.
    }
}