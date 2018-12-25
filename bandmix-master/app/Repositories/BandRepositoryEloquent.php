<?php

namespace App\Repositories;

use App\Entities\Genre;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\bandRepository;
use App\Entities\Band;
use App\Validators\BandValidator;

/**
 * Class BandRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BandRepositoryEloquent extends BaseRepository implements BandRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Band::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BandValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function query($option = [])
    {
        $query = $this->model->query();
        //search for name, id
        if(!empty($option['keyword'])){
            $query->where('id','=' ,$option['keyword']);
            $query->orWhere('name', 'like','%'.$option['keyword'].'%');
        }

        if(!empty($option['search_location'])){

            $query->where('location_id',$option['search_location']);
        }

        return $query;
    }
    
}
