<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function AddEmployee(){
        return view('addEmployee');
    }

    public function StoreEmployee(Request $req){

        $validatedData = $req->validate([
            'nama' => 'required|string|between:5,20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|between:10,40',
            'noHP' => 'required|string|between:9,12|regex:/^08[0-9]+$/',
        ], [
            'nama.required' => 'Nama karyawan harus diisi.',
            'nama.between' => 'Nama karyawan harus memiliki panjang antara :5 dan :20 karakter.',
            'umur.required' => 'Umur karyawan harus diisi.',
            'umur.integer' => 'Umur karyawan harus berupa bilangan bulat.',
            'umur.min' => 'Umur karyawan minimal :20 tahun.',
            'alamat.required' => 'Alamat karyawan harus diisi.',
            'alamat.between' => 'Alamat karyawan harus memiliki panjang antara :10 dan :40 karakter.',
            'noHP.required' => 'Nomor telepon karyawan harus diisi.',
            'noHP.between' => 'Nomor telepon karyawan harus memiliki panjang antara :9 dan :12 karakter.',
            'noHP.regex' => 'Format nomor telepon karyawan tidak valid (dimulai dari 08).',
        ]);

        Employee::create([
            'employeeName' => $validatedData['nama'],
            'employeeAge' => $validatedData['umur'],
            'employeeAddress' => $validatedData['alamat'],
            'employeeNumber' => $validatedData['noHP'],
        ]);
        
        return redirect('/')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function ViewAllEmployee(){
        $employees = Employee::all();

        return view('welcome')->with('employee_employee', $employees);
    }
    public function ViewEmployee($id){
        $employee = Employee::findOrFail($id);

        return view('employeeDetail')->with('employee', $employee);
    }

    public function ViewUpdateEmployee($id){
        $employee = Employee::findOrFail($id);

        return view('updateEmployee')->with('employee', $employee);
    }

    public function SaveUpdate($id, Request $req){
        
        $validatedData = $req->validate([
            'nama' => 'required|string|between:5,20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|between:10,40',
            'noHP' => 'required|string|between:9,12|regex:/^08[0-9]+$/',
        ], [
            'nama.required' => 'Nama karyawan harus diisi.',
            'nama.between' => 'Nama karyawan harus memiliki panjang antara :5 dan :20 karakter.',
            'umur.required' => 'Umur karyawan harus diisi.',
            'umur.integer' => 'Umur karyawan harus berupa bilangan bulat.',
            'umur.min' => 'Umur karyawan minimal :20 tahun.',
            'alamat.required' => 'Alamat karyawan harus diisi.',
            'alamat.between' => 'Alamat karyawan harus memiliki panjang antara :10 dan :40 karakter.',
            'noHP.required' => 'Nomor telepon karyawan harus diisi.',
            'noHP.between' => 'Nomor telepon karyawan harus memiliki panjang antara :9 dan :12 karakter.',
            'noHP.regex' => 'Format nomor telepon karyawan tidak valid (dimulai dari 08).',
        ]);
        
        $employee = Employee::findOrFail($id)->update([
            'employeeName' => $validatedData['nama'],
            'employeeAge' => $validatedData['umur'],
            'employeeAddress' => $validatedData['alamat'],
            'employeeNumber' => $validatedData['noHP'],
        ]);
        return redirect('/')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function DeleteBook($id){
        Employee::destroy($id);

        return redirect('/')->with('success', 'Karyawan berhasil dihapus.');
    }
}
