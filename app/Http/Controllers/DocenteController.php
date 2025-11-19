<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DocenteController extends Controller
{

    public function indexUser(Request $request){
        $teachers = Teacher::query()
            ->when($request->filled('last_name'), function ($q) use ($request) {
                $q->where('last_name', 'like', '%' . $request->last_name . '%');
            })
            ->when($request->filled('dni'), function ($q) use ($request) {
                $q->where('dni', 'like', '%' . $request->dni . '%');
            })
            ->orderBy('last_name')
            ->paginate(10)
            ->withQueryString();

        return view('docentes.index', compact('teachers'));
    }

    public function index(Request $request)
    {
        $teachers = Teacher::query()
            ->when($request->filled('last_name'), function ($q) use ($request) {
                $q->where('last_name', 'like', '%' . $request->last_name . '%');
            })
            ->when($request->filled('dni'), function ($q) use ($request) {
                $q->where('dni', 'like', '%' . $request->dni . '%');
            })
            ->orderBy('last_name')
            ->paginate(10)
            ->withQueryString();

        return view('docentes.admin.index', compact('teachers'));
    }

    public function create()
    {
        return view('docentes.admin.create');
    }

    public function store(Request $request)
    {
        //TODO: FormRequest + materias

        $dataPersonal = $request->validate([
            'lastName'   => 'required|string|max:255',
            'name'       => 'required|string|max:255',
            'dni'        => 'required|numeric',
            'years'      => 'nullable|integer',
            'birthdate'  => 'nullable|date',
            'cuil'       => 'nullable|string|max:20',
            'zipCode'    => 'nullable|string|max:20',
            'address'    => 'nullable|string|max:255',
            'phone'      => 'nullable|string|max:50',
            'mailAbc'    => 'nullable|email',
        ]);

        $teacher = Teacher::create([
            'last_name'  => $dataPersonal['lastName'],
            'name'       => $dataPersonal['name'],
            'dni'        => $dataPersonal['dni'],
            'year_old'   => $dataPersonal['years'] ?? null,
            'birthdate'  => $dataPersonal['birthdate'] ?? null,
            'cuil'       => $dataPersonal['cuil'] ?? null,
            'zip_code'   => $dataPersonal['zipCode'] ?? null,
            'address'    => $dataPersonal['address'] ?? null,
            'phone'      => $dataPersonal['phone'] ?? null,
            'email_abc'  => $dataPersonal['mailAbc'] ?? null,
        ]);

        return redirect()->route('docentes.index')->with('success', 'Docente creado.');
    }

    public function edit($id)
    {
        $teacher = Teacher::with('subjects')->findOrFail($id);

        return view('docentes.admin.edit', compact('teacher'));
    }

    public function show($id)
    {
        $teacher = Teacher::with('subjects')->findOrFail($id);

        return view('docentes.admin.show', compact('teacher'));
    }

    public function showUser($id)
    {
        $teacher = Teacher::with('subjects')->findOrFail($id);

        return view('docentes.show', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'lastName'   => 'required|string|max:255',
            'name'       => 'required|string|max:255',
            'dni'        => 'required|numeric',
            'years'      => 'nullable|integer',
            'birthdate'  => 'nullable|date',
            'cuil'       => 'nullable|string|max:20',
            'zipCode'    => 'nullable|string|max:20',
            'address'    => 'nullable|string|max:255',
            'phone'      => 'nullable|string|max:50',
            'mailAbc'    => 'nullable|email',
        ]);

        $teacher = Teacher::findOrFail($id);

        $teacher->update([
            'last_name'  => $data['lastName'],
            'name'       => $data['name'],
            'dni'        => $data['dni'],
            'years'      => $data['years'] ?? null,
            'birthdate'  => $data['birthdate'] ?? null,
            'cuil'       => $data['cuil'] ?? null,
            'zip_code'   => $data['zipCode'] ?? null,
            'address'    => $data['address'] ?? null,
            'phone'      => $data['phone'] ?? null,
            'mail_abc'   => $data['mailAbc'] ?? null,
        ]);

        return redirect()->route('docentes.index')->with('success', 'Docente editado.');
    }

    public function delete($id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        // TODO: add cascade on delete
        return redirect()->route('docentes.index')->with('success', 'Docente eliminado.');
    }
}
