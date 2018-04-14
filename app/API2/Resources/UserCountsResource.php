<?php

declare(strict_types=1);

/*
 * +----------------------------------------------------------------------+
 * |                          ThinkSNS Plus                               |
 * +----------------------------------------------------------------------+
 * | Copyright (c) 2017 Chengdu ZhiYiChuangXiang Technology Co., Ltd.     |
 * +----------------------------------------------------------------------+
 * | This source file is subject to version 2.0 of the Apache license,    |
 * | that is bundled with this package in the file LICENSE, and is        |
 * | available through the world-wide-web at the following url:           |
 * | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 * +----------------------------------------------------------------------+
 * | Author: Slim Kit Group <master@zhiyicx.com>                          |
 * | Homepage: www.thinksns.com                                           |
 * +----------------------------------------------------------------------+
 */

namespace Zhiyi\Plus\API2\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCountsResource extends JsonResource
{
    /**
     * The resource to array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function toArray($request): array
    {
        static::withoutWrapping();

        return [
            'user' => [
                'following' => $this['user-following'] ?? 0,
            ],
        ];
    }

    /**
     * with response that the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illiminate\Http\Response $response
     * @return void
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function withResponse($request, $response)
    {
        $response->setStatusCode(200);
    }
}