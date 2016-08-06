<?php

namespace App\Http\Controllers\Backend;

use App\Banner;
use App\Http\Requests\StoreBannerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannersController extends BaseController
{
    /**
     * Show all models.
     *
     * @return mixed
     */
    public function index() {
        $banners = Banner::paginate();
        return view('backend.banners.index', ['models' => $banners]);
    }

    /**
     * Show create form.
     *
     * @return mixed
     */
    public function create() {
        return view('backend.banners.form');
    }

    /**
     * Store a new model.
     *
     * @param StoreBannerRequest $request
     * @return mixed
     */
    public function store(StoreBannerRequest $request) {

        $banner = new Banner();
        $banner = $banner->create($request->all());

        $this->uploadFile($request, $banner);

        return redirect()->route('backend::banners_index')->with('success', 'Registro criado com sucesso.');
    }

    /**
     * Show form to edit a model.
     *
     * @param $id
     * @return mixed
     */
    public function edit($id) {
        $banner = Banner::findOrFail($id);
        return view('backend.banners.form', ['model'=>$banner]);
    }

    /**
     * Update a model.
     *
     * @param StoreBannerRequest $request
     * @return mixed
     */
    public function update(StoreBannerRequest $request) {

        $banner = Banner::findOrFail($request->id);
        $banner->update($request->all());

        $this->uploadFile($request, $banner);

        return redirect()->route('backend::banners_index')->with('success', 'Registro atualizado com sucesso.');
    }

    /**
     * Destroy a model.
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id) {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect()->route('backend::banners_index')->with('success', 'Registro removido com sucesso.');
    }

    /**
     * Make upload of the banner image.
     *
     * @param Request $request
     * @param Banner $model
     */
    private function uploadFile(Request $request, Banner $model)
    {
        if ($request->hasFile('imagem')) {

            if($model->imagem) {
                Storage::delete($model->imagem);
                $model->imagem = null;
            }

            $extension = explode('.', $request->file('imagem')->getClientOriginalName());
            $extension = end($extension);

            $fileName = 'uploads/banners/' . uniqid('', true) . '.' . $extension;

            $success = Storage::put(
                $fileName,
                file_get_contents($request->file('imagem')->getRealPath())
            );

            if($success) {
                $model->imagem = $fileName;
            }

            $model->save();

        }
    }
}