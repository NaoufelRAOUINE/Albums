<?php
return array(
    'router' => array(
        'routes' => array(
            'albumsdb.rest.album-manager' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/album-manager[/:album_manager_id]',
                    'defaults' => array(
                        'controller' => 'Albumsdb\\V1\\Rest\\AlbumManager\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            1 => 'albumsdb.rest.album-manager',
        ),
    ),
    'zf-rest' => array(
        'Albumsdb\\V1\\Rest\\AlbumManager\\Controller' => array(
            'listener' => 'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerResource',
            'route_name' => 'albumsdb.rest.album-manager',
            'route_identifier_name' => 'album_manager_id',
            'collection_name' => 'album_manager',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'DELETE',
            ),
            'collection_query_whitelist' => array(
                0 => 'title',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerResource',
            'collection_class' => 'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerCollection',
            'service_name' => 'AlbumManager',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Albumsdb\\V1\\Rest\\AlbumManager\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'Albumsdb\\V1\\Rest\\AlbumManager\\Controller' => array(
                0 => 'application/vnd.albumsdb.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Albumsdb\\V1\\Rest\\AlbumManager\\Controller' => array(
                0 => 'application/vnd.albumsdb.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'albumsdb.rest.album-manager',
                'route_identifier_name' => 'album_manager_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'albumsdb.rest.album-manager',
                'route_identifier_name' => 'album_manager_id',
                'is_collection' => true,
            ),
            'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerResource' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'albumsdb.rest.album-manager',
                'route_identifier_name' => 'album_manager_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(),
    ),
    'zf-content-validation' => array(
        'Albumsdb\\V1\\Rest\\AlbumManager\\Controller' => array(
            'input_filter' => 'Albumsdb\\V1\\Rest\\AlbumManager\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Albumsdb\\V1\\Rest\\Album\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'artist',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'title',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'Albumsdb\\V1\\Rest\\AlbumManager\\Validator' => array(),
    ),
    'service_manager' => array(
        'factories' => array(
            'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerResource' => 'Albumsdb\\V1\\Rest\\AlbumManager\\AlbumManagerResourceFactory',
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Albumsdb\\V1\\Rest\\AlbumManager\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);
