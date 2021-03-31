<?php


namespace App\Search\Application\SearchUseCase;


interface SearchUseCaseInterface
{
    /**
     * @param SearchUseCaseInput $input
     * @return SearchUseCaseResult
     */
    public function execute(SearchUseCaseInput $input): SearchUseCaseResult;
}
