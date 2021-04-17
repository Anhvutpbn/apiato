<?php

/**
 * @apiGroup           Product
 * @apiName            updateProduct
 *
 * @api                {PATCH} /v1/api/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('api/{id}', [
    'as' => 'api_product_update_product',
    'uses'  => 'Controller@updateProduct',
    'middleware' => [
      'auth:api',
    ],
]);
