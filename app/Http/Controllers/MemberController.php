<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Array data dummy anggota
    private array $members = [
        [
            'id' => 1,
            'nama' => 'Ahmad Dahlan',
            'nim' => '230101001',
            'email' => 'ahmad@example.com',
            'nomor_telepon' => '081234567890',
            'alamat' => 'Jl. Merdeka No. 12, Surabaya',
            'status' => 'aktif',
        ],
        [
            'id' => 2,
            'nama' => 'Siti Nurhaliza',
            'nim' => '230101002',
            'email' => 'siti@example.com',
            'nomor_telepon' => '089876543210',
            'alamat' => 'Jl. Pemuda No. 45, Malang',
            'status' => 'aktif',
        ],
    ];

    public function index()
    {
        $members = $this->members;
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    public function show(string $id)
    {
        $member = collect($this->members)->firstWhere('id', (int) $id);
        abort_if(! $member, 404);

        return view('members.show', compact('member'));
    }

    public function edit(string $id)
    {
        $member = collect($this->members)->firstWhere('id', (int) $id);
        abort_if(! $member, 404);

        return view('members.edit', compact('member'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'          => 'required|string|max:100',
            'nim'           => 'required|string|max:20',
            'email'         => 'required|email|max:100',
            'nomor_telepon' => 'required|string|max:15',
            'alamat'        => 'required|string',
            'status'        => 'required|in:aktif,nonaktif',
        ]);

        return redirect()->route('members.index')
            ->with('success', "Data anggota \"{$validated['nama']}\" berhasil diperbarui (data dummy).");
    }

    public function destroy(string $id)
    {
        return redirect()->route('members.index')
            ->with('success', "Anggota dengan ID {$id} berhasil dihapus (data dummy).");
    }
}
