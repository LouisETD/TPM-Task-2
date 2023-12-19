<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tenant;
use App\Models\asal;

class registration extends Controller
{
    public function redirectToregister(){
        $asals = asal::all();
        return view('registration', compact('asals'));
    }

    public function Registration(Request $request) {
    
        $validated = $request->validate([
            'nama_tenant_input' => 'required|unique:App\Models\Tenant,nama_tenant|max:255',
            'tenant_image_input' => 'required|mimes:jpg,png' ,
            'tipe_makanan_input' => 'required|string',
            'asal_makanan_input' => 'required|string'
        ]);

        $path = $request->file('tenant_image_input');
        $tenant = Tenant::create ([
            'nama_tenant' => $request-> nama_tenant_input,
            'tenant_image_path' => $path,
            'tipe_makanan' => $request-> tipe_makanan_input,
            'asals_id' => $request-> asals_id
        ]);

        $fileName = $tenant->id . $path->getClientOriginalName();
        $path->storeAs('public/image_tenant', $fileName);
        $tenant->tenant_image_path = 'image_tenant/' . $fileName;
        $tenant->save();

       return redirect('/');
    }

    public function updateTenantPage($id) {
        $tenant = Tenant::findorFail($id);
        $asal = asal::all();

        return view('update_tenant', compact('tenant', 'asals'));
    }

    public function updateTenant(Request $id1) {

        $validated = $request->validate([
            'nama_tenant_input' => 'required|unique:App\Models\Tenant,nama_tenant|max:255',
            'tenant_image_input' => 'required|mimes:jpg,png' ,
            'tipe_makanan_input' => 'required|string',
            'asal_makanan_input' => 'required|string'
        ]);

        $tenant = Tenant::find($id1);
        Storage::delete['/public/' . $tenant->tenant_image_path];

        $path = $request->file('tenant_image_input');
        
        Tenant::findorFail($id1)->update([
            'nama_tenant' => $request-> nama_tenant_input,
            'tenant_image_path' => $path,
            'tipe_makanan' => $request-> tipe_makanan_input,
            'asal_makanan' => $request-> asal_makanan_input
        ]);

        $tenant = Tenant::find($id1);
        $fileName = $tenant->id . $path->getClientOriginalName();
        $path->storeAs('public/image_tenant', $fileName);
        $tenant->tenant_image_path = 'image_tenant/' . $fileName;
        $tenant->save();

        return redirect('/');
    }

    public function deleteTenant($id) {
        Tenant::destroy($id);

        return redirect('/');
    }
}
