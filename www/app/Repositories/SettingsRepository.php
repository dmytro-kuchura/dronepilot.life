<?php

namespace App\Repositories;

use App\Models\Settings;

class SettingsRepository implements Repository
{
    protected $model = Settings::class;

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function list()
    {
        return $this->model::select(
            'settings.*'
        )
            ->groupBy('settings.id')
            ->where('settings.status', Settings::STATUS_AVAILABLE)
            ->orderBy('settings.id', 'desc')
            ->get();
    }

    public function store($data)
    {
        // TODO: Implement store() method.
    }

    public function update($data)
    {
        // TODO: Implement update() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
