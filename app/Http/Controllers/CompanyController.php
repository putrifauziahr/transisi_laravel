<?php

namespace App\Http\Controllers;

use App\Model\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        $company = Company::all();
        return view('company/index', compact('company'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function postCreate(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min  karakter ya !!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya !!!',
            'numeric' => ':attribute harus diisi angka !!!'
        ];
        $this->validate($request, [
            'nama' => 'required|min:3',
            'email' => 'required|min:3',
            'website' => 'required|min:3',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ], $messages);

        // menyimpan data file yang diupload ke variabel $gambar
        $logo = $request->file('logo');
        $nama_image = time() . "_" . $logo->getClientOriginalName();
        $destinationPath = 'storage/transisi';
        $logo->move($destinationPath, $nama_image);

        $post = new Company();
        $post->nama = $request->nama;
        $post->email = $request->email;
        $post->website = $request->website;
        $post->logo = $nama_image;
        $post->save();
        return redirect('showCompany')->with('alert', 'Data Company Berhasil ditambah');
    }

    public function update(Company $company)
    {
        return view('company.update', compact('company'));
    }

    public function postUpdate(Request $request, $id_company)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min  karakter ya !!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya !!!',
            'numeric' => ':attribute harus diisi angka !!!'
        ];
        $this->validate($request, [
            'nama' => 'required|min:3',
            'email' => 'required|min:3',
            'website' => 'required|min:3',
            'logo' => 'required|min:3',
        ], $messages);

        $update = [
            'nama' => $request->nama,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $request->logo,
        ];

        $update['nama'] = $request->get('nama');
        $update['email'] = $request->get('email');
        $update['website'] = $request->get('website');
        $update['logo'] = $request->get('logo');
        Company::where('id_company', $id_company)->update($update);
        return redirect('showCompany')->with('alert', 'Data Company Berhasil diperbarui');
    }

    public function delete(Company $company)
    {

        Company::destroy($company->id_company);
        return redirect('showCompany')->with('alertF', 'Data Company Berhasil dihapus');
    }
}
