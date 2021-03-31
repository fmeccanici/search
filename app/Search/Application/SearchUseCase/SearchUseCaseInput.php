<?php


namespace App\Search\Application\SearchUseCase;

final class SearchUseCaseInput
{

    /**
     * @var int
     */
    protected $id;

    /**
     * SearchUseCaseInput constructor.
     * @param int $id
     * @throws \Exception
     */
    public function __construct(int $id)
    {
        // DO VALIDATIONS...
        if($id < 0) {
            throw new \Exception('Lower then 0');
        }

        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

}
