<?php

namespace App\Http\Controllers;
use OpenApi\Attributes as OA;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="DOCUMENTACION DE CARLOS JAVIER GARCIA HENRIQUEZ",
 *     description="API desarrollada por Carlos Javier Garcia Henriquez, para la Universidad Francisco Gavidia",
 *     @OA\Contact(
 *          email="ia.carloshenriquez@ufg.edu.sv"
 *      ),
 *     @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Servidor Local de desarrollo"
 * )
 *
 * @OA\Server(
 *     url="http://testing.example.com",
 *     description="Servidor de pruebas"
 * )
 *
 * @OA\Server(
 *     url="http://jjcf.example.com",
 *     description="Servidor de producción"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     name="Authorization",
 *     in="header"
 * )
 * 
 * @OA\Tag(
 *     name="Zonas",
 *     description="Proyecto de Desarrollo de API para mantenimiento de tabla Zonas en BD Catálogos"
 * )
 */

abstract class Controller
{
    //
}
