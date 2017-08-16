<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\EstudiantesRepository;
use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class EstudiantesAPIController extends AppBaseController
{
	/** @var  EstudiantesRepository */
	private $estudiantesRepository;

	function __construct(EstudiantesRepository $estudiantesRepo)
	{
		$this->estudiantesRepository = $estudiantesRepo;
	}

	/**
	 * Display a listing of the Estudiantes.
	 * GET|HEAD /estudiantes
	 *
	 * @return Response
	 */
	public function index()
	{
		$estudiantes = $this->estudiantesRepository->all();

		return $this->sendResponse($estudiantes->toArray(), "Estudiantes retrieved successfully");
	}

	/**
	 * Show the form for creating a new Estudiantes.
	 * GET|HEAD /estudiantes/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Estudiantes in storage.
	 * POST /estudiantes
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Estudiantes::$rules) > 0)
			$this->validateRequestOrFail($request, Estudiantes::$rules);

		$input = $request->all();

		$estudiantes = $this->estudiantesRepository->create($input);

		return $this->sendResponse($estudiantes->toArray(), "Estudiantes saved successfully");
	}

	/**
	 * Display the specified Estudiantes.
	 * GET|HEAD /estudiantes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$estudiantes = $this->estudiantesRepository->apiFindOrFail($id);

		return $this->sendResponse($estudiantes->toArray(), "Estudiantes retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Estudiantes.
	 * GET|HEAD /estudiantes/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Estudiantes in storage.
	 * PUT/PATCH /estudiantes/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Estudiantes $estudiantes */
		$estudiantes = $this->estudiantesRepository->apiFindOrFail($id);

		$result = $this->estudiantesRepository->updateRich($input, $id);

		$estudiantes = $estudiantes->fresh();

		return $this->sendResponse($estudiantes->toArray(), "Estudiantes updated successfully");
	}

	/**
	 * Remove the specified Estudiantes from storage.
	 * DELETE /estudiantes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->estudiantesRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Estudiantes deleted successfully");
	}
}
