<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class OwnerPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('owner.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:putra,putri,campuran,keluarga',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'address' => 'required|string',
        ]);

        $property = new Property($validatedData);
        $property->owner_id = Auth::id();
        $property->save();

        return redirect()->route('owner.dashboard')->with('success', 'Property created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('owner.properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        // Validasi request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            // Tambahkan aturan validasi lain jika diperlukan
            // misalnya untuk harga, jumlah kamar, fasilitas, dll.
        ]);

        // Update properti dengan data yang divalidasi
        $property->update($validatedData);

        // Redirect kembali ke halaman edit dengan pesan sukses
        // Atau bisa juga redirect ke halaman daftar properti atau detail properti
        return redirect()->route('owner.properties.edit', $property->id)
                         ->with('success', 'Properti berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(Property $property)
        {
            // Pastikan properti dimiliki oleh owner yang sedang login
            if ($property->owner_id !== auth()->id()) {
                abort(403, 'Unauthorized action.');
            }

            // Hapus properti
            $property->delete();

            // Redirect dengan pesan sukses
            return redirect()->route('owner.dashboard')
                           ->with('success', 'Properti berhasil dihapus.');
        }
}
