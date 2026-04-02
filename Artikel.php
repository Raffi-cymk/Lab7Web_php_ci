<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll();

        return view('artikel/index', $data);
    }

    public function detail($slug)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->where('slug', $slug)->first();

        return view('artikel/detail', $data);
    }

    public function admin()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll();

        return view('artikel/admin', $data);
    }

    public function tambah()
    {
        return view('artikel/form_tambah');
    }

    public function simpan()
    {
        $model = new ArtikelModel();

        $judul = $_POST['judul'];
        $isi   = $_POST['isi'];

        $slug = strtolower(str_replace(' ', '-', $judul));

        $model->insert([
            'judul' => $judul,
            'isi'   => $isi,
            'slug'  => $slug
        ]);

        return redirect()->to('/artikel/admin');
    }

    public function edit($id)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id);

        return view('artikel/form_edit', $data);
    }

    public function update($id)
    {
        $model = new ArtikelModel();

        $model->update($id, [
            'judul' => $_POST['judul'],
            'isi'   => $_POST['isi']
        ]);

        return redirect()->to('/artikel/admin');
    }

    public function hapus($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);

        return redirect()->to('/artikel/admin');
    }
}