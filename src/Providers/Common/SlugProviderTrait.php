<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Database\Providers\Common;

/**
 * This is the slug provider trait.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
trait SlugProviderTrait
{
    /**
     * Find an existing model by slug.
     *
     * @param string   $slug
     * @param string[] $columns
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($slug, array $columns = ['*'])
    {
        $model = $this->model;

        return $model::where('slug', '=', $slug)->first($columns);
    }
}
