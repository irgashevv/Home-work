<?php

namespace App\Controllers;

use App\core\App;
use Exception;

class HrController
{

    /**
     * Display a listing of the Employees.
     *
     * @return void
     * @throws Exception
     */
    public function index()
    {
        $employees = App::get('database')->getAll('employees');

        return view('hr/index', ['employees' => $employees]);
    }

    /**
     * Display HTML form, for storing new Employee
     *
     * @return void
     */
    public function create()
    {
        return view('hr/create');
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @return void
     * @throws Exception
     */
    public function store()
    {
        if (isset($_POST['submitted'])) {
            App::get('database')->insert('employees', [
                'name'          => $_POST['name'],
                'surname'       => $_POST['surname'],
                'patronymic'    => $_POST['patronymic'],
                'date_of_birth' => $_POST['date_of_birth'],
                'position'      => $_POST['position'],
                'favorite_book' => $_POST['favorite_book'],
            ]);

            redirect('');
        }
    }

    /**
     * Display HTML form, for updating new Employee
     *
     * @return void
     * @throws Exception
     */
    public function edit()
    {
        $employee = App::get('database')->getById('employees', $_GET['id']);

        return view('hr/edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return void
     * @throws Exception
     */
    public function update()
    {
        if (isset($_POST['submitted'])) {
            App::get('database')->update('employees', $_POST['id'], [
                'name'          => $_POST['name'],
                'surname'       => $_POST['surname'],
                'patronymic'    => $_POST['patronymic'],
                'date_of_birth' => $_POST['date_of_birth'],
                'position'      => $_POST['position'],
                'favorite_book' => $_POST['favorite_book'],
            ]);

            redirect('');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return void
     * @throws Exception
     */
    public function destroy()
    {
        App::get('database')->delete('employees', $_GET['id']);

        redirect('');
    }
}