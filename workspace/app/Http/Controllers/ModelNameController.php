<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateModelNameRequest;
use App\Http\Requests\UpdateModelNameRequest;
use App\Libraries\Repositories\ModelNameRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ModelNameController extends AppBaseController
{

	/** @var  ModelNameRepository */
	private $modelNameRepository;

	function __construct(ModelNameRepository $modelNameRepo)
	{
		$this->modelNameRepository = $modelNameRepo;
	}

	/**
	 * Display a listing of the ModelName.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modelNames = $this->modelNameRepository->paginate(10);

		return view('modelNames.index')
			->with('modelNames', $modelNames);
	}

	/**
	 * Show the form for creating a new ModelName.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('modelNames.create');
	}

	/**
	 * Store a newly created ModelName in storage.
	 *
	 * @param CreateModelNameRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateModelNameRequest $request)
	{
		$input = $request->all();

		$modelName = $this->modelNameRepository->create($input);

		Flash::success('ModelName saved successfully.');

		return redirect(route('modelNames.index'));
	}

	/**
	 * Display the specified ModelName.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$modelName = $this->modelNameRepository->find($id);

		if(empty($modelName))
		{
			Flash::error('ModelName not found');

			return redirect(route('modelNames.index'));
		}

		return view('modelNames.show')->with('modelName', $modelName);
	}

	/**
	 * Show the form for editing the specified ModelName.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$modelName = $this->modelNameRepository->find($id);

		if(empty($modelName))
		{
			Flash::error('ModelName not found');

			return redirect(route('modelNames.index'));
		}

		return view('modelNames.edit')->with('modelName', $modelName);
	}

	/**
	 * Update the specified ModelName in storage.
	 *
	 * @param  int              $id
	 * @param UpdateModelNameRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateModelNameRequest $request)
	{
		$modelName = $this->modelNameRepository->find($id);

		if(empty($modelName))
		{
			Flash::error('ModelName not found');

			return redirect(route('modelNames.index'));
		}

		$this->modelNameRepository->updateRich($request->all(), $id);

		Flash::success('ModelName updated successfully.');

		return redirect(route('modelNames.index'));
	}

	/**
	 * Remove the specified ModelName from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$modelName = $this->modelNameRepository->find($id);

		if(empty($modelName))
		{
			Flash::error('ModelName not found');

			return redirect(route('modelNames.index'));
		}

		$this->modelNameRepository->delete($id);

		Flash::success('ModelName deleted successfully.');

		return redirect(route('modelNames.index'));
	}
}
