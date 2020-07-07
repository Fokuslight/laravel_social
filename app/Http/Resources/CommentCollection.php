<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'comment_count' => $this->count(),
            'user_likes_post' => $this->collection->contains('id', auth()->user()->id),
            'links' => [
                'self' => url('/posts'),
            ]
        ];
    }
}
