<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\News
 *
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int $id
 * @property string|null $image_path
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image_path'
    ];

}
