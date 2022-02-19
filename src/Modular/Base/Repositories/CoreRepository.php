<?php
namespace Modulizm\Core\Modular\Base\Repositories;

use Modulizm\Core\Modular\Base\Models\CoreModel;

abstract class CoreRepository
{
    protected CoreModel $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * Need to determinate model and write inside the method return Model::class`
     *
     * @return mixed
     */
    abstract protected function getModelClass():string;

    protected function startConditions()
    {
        return clone $this->model;
    }

}
