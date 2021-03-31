<?php


namespace App\Search\Application\SearchUseCase;

class SearchUseCase implements SearchUseCaseInterface
{
    /**
     * SearchUseCase constructor.
     */
    public function __construct()
    {

    }

    /**
     * @inheritDoc
     */
    public function execute(SearchUseCaseInput $input): SearchUseCaseResult
    {
        $result = new SearchUseCaseResult();
        $result->id = 1;

        return $result;
    }
}
