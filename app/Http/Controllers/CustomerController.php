<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Menampilkan daftar semua customer.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Menampilkan form untuk membuat customer baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Menyimpan customer baru ke database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Simpan data customer ke database
        Customer::create($request->all());

        // Redirect ke halaman daftar customer
        return redirect()->route('customers.index');
    }

    /**
     * Menampilkan form untuk mengedit customer.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\View\View
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Memperbarui data customer di database.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Customer $customer)
    {
        // Validasi input
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Update data customer
        $customer->update($request->all());

        // Redirect ke halaman daftar customer
        return redirect()->route('customers.index');
    }

    /**
     * Menghapus customer dari database.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Customer $customer)
    {
        // Hapus data customer
        $customer->delete();

        // Redirect ke halaman daftar customer
        return redirect()->route('customers.index');
    }

    /**
     * Menampilkan detail customer.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\View\View
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
}
