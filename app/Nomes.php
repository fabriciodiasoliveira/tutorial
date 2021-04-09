<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nomes extends Model
{
    //
    protected $fillable = ['nome'];
    public function getAllNomes()
    {
        return Nomes::query()->select('*')->get();
    }
    public function remove($id){
        Nomes::destroy($id);
    }
    public function store(array $options = [])
    {
        Nomes::query()->insert($options);
    }
    public function getNome($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Nomes::query()->where('id', '=', $id)->update($options);
    }
}
