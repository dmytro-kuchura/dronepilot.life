<?php

namespace App\Repositories;

use App\Models\TagsSelected;

class TagsSelectedRepository
{
    protected $model = TagsSelected::class;

    public function update($id, $tags)
    {
        self::destroy($id);

        foreach ($tags as $tag) {
            $this->model::create([
                'tag_id' => $tag,
                'record_id' => $id,
            ]);
        }
    }

    public function destroy($id)
    {
        $this->model::where('record_id', $id)->delete();
    }
}
