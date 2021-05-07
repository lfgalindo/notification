<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TypeRepository;
use App\Libraries\Type;

class TypeController extends Controller
{
    private $type;
    private $typeRepository;

    public function __construct(
        Type $type,
        TypeRepository $typeRepository
    ) {
        $this->type           = $type;
        $this->typeRepository = $typeRepository;
    }

    public function store(Request $request)
    {
        $this->type->setDescription($request->input('description'));

        return $this->typeRepository->save($this->type) ?
            response()->json('sucesso!', 201)
            :
            response()->json('erro!', 500);
    }
}
