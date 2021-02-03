<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

class BaseRepository {
    
    /**
     * @property Model $model
     * 
     *  Model property on class instances
    */
    protected $model;

    /**
     * Constructor to find model to repo
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @method mixed all()
     * 
     * Get all the instaces of the model
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @method mixed create()
     * 
     * Creates a new record in the database.
     * 
     * @param array $data The data needed to create the record.
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @method mixed update()
     * 
     * Update record in the database
     * 
     * @param array $data The data needed to update the record
     * 
     * @param int $id The ID of the data on the database.
     * 
     */
    public function update(array $data, int $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    /**
     * @method mixed find()
     * 
     * Finds a record from the database using the record's ID
     * 
     * @param int $id The ID of the record/model
     * 
     * @return Model
    */

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @method mixed delete()
     * 
     * Delete a record from the database
     * 
     * @param int $id ID of the record to be deleted
     * 
    */

    public function delete(int $id)
    {
        $this->model->destroy($id);
    }

    /**
     * @method Model getModel()
     * 
     * Gets the associated model
     * 
     * @return Model
     */

    public function getModel()
    {
        return $this->model;
    }

    /**
     * @method mixed setModel()
     * 
     * Associate a model to the repository
     * 
     * @param Model $model Model to be binded to repository
     * 
    */

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @method mixed  with()
     * 
     * Eager loads method relationships
     * 
     * @param array|string $relations 
     */

     public function with($relations)
     {
         $this->model->with($relations);
         return $this;
     }

     /**
      * @method mixed paginate()
      * 
      * Paginates model results
      */

     public function paginate(int $perPage = 20, int|null $currentPage =  null, array $options = [])
     {
         $this->model->paginate($perPage, $currentPage,$options);
     }
}