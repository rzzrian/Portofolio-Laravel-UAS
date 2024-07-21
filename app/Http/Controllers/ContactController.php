<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Menyimpan data kontak ke database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        Contact::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Menampilkan daftar kontak.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data kontak
        $contacts = Contact::all();

        // Render tampilan dengan data kontak
        return view('backend.contacts.list', compact('contacts'));
    }
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('backend.contacts.edit', compact('contact'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
    
        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully!');
    }
    public function destroy($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully!');
}

}
