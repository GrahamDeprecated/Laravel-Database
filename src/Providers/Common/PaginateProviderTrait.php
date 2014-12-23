<?php

/*
 * This file is part of Laravel Database by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://bit.ly/UWsjkb.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Database\Providers\Common;

use Illuminate\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * This is the paginate provider trait.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md> Apache 2.0
 */
trait PaginateProviderTrait
{
    /**
     * The paginated links generated by the paginate method.
     *
     * @var string
     */
    protected $paginateLinks;

    /**
     * Get a paginated list of the models.
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function paginate()
    {
        $model = $this->model;

        if (property_exists($model, 'order')) {
            $paginator = $model::orderBy($model::$order, $model::$sort)->paginate($model::$paginate, $model::$index);
        } else {
            $paginator = $model::paginate($model::$paginate, $model::$index);
        }

        if (!$this->isPageInRange($paginator) && !$this->isFirstPage($paginator)) {
            throw new NotFoundHttpException();
        }

        if ($paginator->getTotal()) {
            $this->paginateLinks = $paginator->links();
        }

        return $paginator;
    }

    /**
     * Is this current page in range?
     *
     * @param \Illuminate\Pagination\Paginator $paginator
     *
     * @return bool
     */
    protected function isPageInRange(Paginator $paginator)
    {
        return ($paginator->getFactory()->getCurrentPage() <= $paginator->getLastPage());
    }

    /**
     * Is the current page the first page?
     *
     * @param \Illuminate\Pagination\Paginator $paginator
     *
     * @return bool
     */
    protected function isFirstPage(Paginator $paginator)
    {
        return ($paginator->getFactory()->getCurrentPage() === 1);
    }

    /**
     * Get the paginated links.
     *
     * @return string
     */
    public function links()
    {
        return $this->paginateLinks;
    }
}
