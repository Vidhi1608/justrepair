{{-- <@php
    if (Auth::check()) {
            // return Auth::user()->role->name;
            $role = Auth::user()->role->name;

                switch ($role) {
                    case 'Admin':
                        return view('admin.template.home.layout.admin');
                        break;
                    case 'Technician':
                        return view('admin.template.home.layout.technician');
                        break;
                    case 'Manager':
                        return view('admin.template.home.layout.manager');
                        break;
                }
            // return redirect()->route('chcking');
        }
@endphp --}}