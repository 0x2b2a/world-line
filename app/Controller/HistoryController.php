<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * @Controller()
 */
class HistoryController extends AbstractController
{
	/**
	 *  @RequestMapping(path = "", methods = "get")
	 */
    public function index(RequestInterface $request)
    {
    	return 'history line.';
    }
}
