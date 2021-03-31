<?php


namespace App\Search\Infrastructure\Repositories;


use App\Search\Domain\Repositories\SearchRepositoryInterface;
use App\Search\Domain\Search;

class EloquentSearchRepository implements SearchRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function findSearch(int $id): ?Search
    {
        return Search::find($id);
    }
}
