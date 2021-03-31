<?php


namespace App\Search\Domain\Repositories;


use App\Search\Domain\Search;

interface SearchRepositoryInterface
{
    /**
     * @param int $id
     * @return Search|null
     */
    public function findSearch(int $id): ?Search;
}
