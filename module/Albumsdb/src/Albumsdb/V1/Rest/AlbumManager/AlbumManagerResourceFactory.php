<?php
namespace Albumsdb\V1\Rest\AlbumManager;

use Album\Model\AlbumTable;

class AlbumManagerResourceFactory
{
    public function __invoke($services)
    {
        return new AlbumManagerResource($services->get(AlbumTable::class));
    }
}
