<?php

namespace App\Repositories;

use App\Models\Sitemap;

class SitemapRepository implements Repository
{
    protected $model = Sitemap::class;

    public function all()
    {
        return $this->model::orderBy('id', 'asc')->get();
    }

    public function list()
    {
        //
    }

    public function update($request)
    {
        //
    }

    public function store($request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function get($id)
    {
        //
    }
}
