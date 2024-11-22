<?php

namespace App\Traits;

use App\Models\Favorite;

trait CanBeFavorited
{
    /**
      *Define a relationship with the Favorite model.
     */

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    /**
     * Add this model to the user's favorites.
     *  @param int $userId
     * @return void
    */
    public function addFavorite($userId)

    {
        if (!$this->isFavoritedBy($userId)) {
            $this->favorites()->create(['user_id' => $userId]);
        }
    }
    /**
     * Remove this model from the user's favorites.
     *
     * @param int $userId
     * @return void
     */
    public function removeFavorite($userId)
    {
        $this->favorites()->where('user_id', $userId)->delete();
    }

    /**
     * Check if this model is favorited by a given user.
     *
     * @param int $userId
     * @return bool
     */
    public function isFavoritedBy($userId)
    {
        return $this->favorites()->where('user_id', $userId)->exists();
    }
}