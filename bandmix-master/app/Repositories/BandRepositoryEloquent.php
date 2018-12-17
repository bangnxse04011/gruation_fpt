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

        if(!empty($option['keyword'])){
            $query->where('id', $option['keyword']);
            $query->orWhere('name','like', '%'. $option['keyword'].'%');
        }

        if(!empty($option['genre'])){
            $query->whereHas('genres', function ($q) use ($option) {
                $q->where('genres.id', $option['genre']);
            });

//            $query->with('genres')->where('genres.id', $option['genre']);

        }
//        dd($query);
//        var_dump($query);
        return $query;


    }
    
}
