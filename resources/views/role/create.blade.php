@extends('layouts.app')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content content--top-nav">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Create Role
            </h2>
        </div>
        <!-- BEGIN: Input -->
        <div class="intro-y box mt-4">

            <div id="input" class="p-5">
                <div class="preview">
                    <form action="{{route('role.store')}}" method="POST">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Name</label>
                            <input id="regular-form-3" name="role_name" type="text" class="form-control" placeholder="Role Name">
                            <div class="form-help">Role Name Must be Unique</div>
                        </div>
                        <div class="mt-3">
                            <P>Permissions</P>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Role</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="role_create">
                                    <input id="checkbox-switch-1" class="form-check-input" type="checkbox" value="1" name="role_create" >
                                    <label class="form-check-label" for="checkbox-switch-1">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="role_view">
                                    <input id="checkbox-switch-2" class="form-check-input" type="checkbox" value="1" name="role_view" >
                                    <label class="form-check-label" for="checkbox-switch-2">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="role_edit">
                                    <input id="checkbox-switch-3" class="form-check-input" type="checkbox" value="1" name="role_edit" >
                                    <label class="form-check-label" for="checkbox-switch-3">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="role_update">
                                    <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="1" name="role_update" >
                                    <label class="form-check-label" for="checkbox-switch-4">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="role_delete">
                                    <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="1" name="role_delete" >
                                    <label class="form-check-label" for="checkbox-switch-5">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">User</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="user_create">
                                    <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="1" name="user_create" >
                                    <label class="form-check-label" for="checkbox-switch-6">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="user_view">
                                    <input id="checkbox-switch-7" class="form-check-input" type="checkbox" value="1" name="user_view" >
                                    <label class="form-check-label" for="checkbox-switch-7">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="user_edit">
                                    <input id="checkbox-switch-8" class="form-check-input" type="checkbox" value="1" name="user_edit" >
                                    <label class="form-check-label" for="checkbox-switch-8">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="user_update">
                                    <input id="checkbox-switch-9" class="form-check-input" type="checkbox" value="1" name="user_update" >
                                    <label class="form-check-label" for="checkbox-switch-9">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="user_delete">
                                    <input id="checkbox-switch-10" class="form-check-input" type="checkbox" value="1" name="user_delete" >
                                    <label class="form-check-label" for="checkbox-switch-10">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Department</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="dept_create">
                                    <input id="checkbox-switch-11" class="form-check-input" type="checkbox" value="1" name="dept_create" >
                                    <label class="form-check-label" for="checkbox-switch-11">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="dept_view">
                                    <input id="checkbox-switch-12" class="form-check-input" type="checkbox" value="1" name="dept_view" >
                                    <label class="form-check-label" for="checkbox-switch-12">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="dept_edit">
                                    <input id="checkbox-switch-13" class="form-check-input" type="checkbox" value="1" name="dept_edit" >
                                    <label class="form-check-label" for="checkbox-switch-13">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="dept_update">
                                    <input id="checkbox-switch-14" class="form-check-input" type="checkbox" value="1" name="dept_update" >
                                    <label class="form-check-label" for="checkbox-switch-14">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="dept_delete">
                                    <input id="checkbox-switch-15" class="form-check-input" type="checkbox" value="1" name="dept_delete" >
                                    <label class="form-check-label" for="checkbox-switch-15">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Designation</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="desig_create">
                                    <input id="checkbox-switch-11" class="form-check-input" type="checkbox" value="1" name="desig_create" >
                                    <label class="form-check-label" for="checkbox-switch-11">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="desig_view">
                                    <input id="checkbox-switch-12" class="form-check-input" type="checkbox" value="1" name="desig_view" >
                                    <label class="form-check-label" for="checkbox-switch-12">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="desig_edit">
                                    <input id="checkbox-switch-13" class="form-check-input" type="checkbox" value="1" name="desig_edit" >
                                    <label class="form-check-label" for="checkbox-switch-13">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="desig_update">
                                    <input id="checkbox-switch-14" class="form-check-input" type="checkbox" value="1" name="desig_update" >
                                    <label class="form-check-label" for="checkbox-switch-14">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="desig_delete">
                                    <input id="checkbox-switch-15" class="form-check-input" type="checkbox" value="1" name="desig_delete" >
                                    <label class="form-check-label" for="checkbox-switch-15">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Vehicle</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="veh_create">
                                    <input id="checkbox-switch-11" class="form-check-input" type="checkbox" value="1" name="veh_create" >
                                    <label class="form-check-label" for="checkbox-switch-11">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="veh_view">
                                    <input id="checkbox-switch-12" class="form-check-input" type="checkbox" value="1" name="veh_view" >
                                    <label class="form-check-label" for="checkbox-switch-12">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="veh_edit">
                                    <input id="checkbox-switch-13" class="form-check-input" type="checkbox" value="1" name="veh_edit" >
                                    <label class="form-check-label" for="checkbox-switch-13">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="veh_update">
                                    <input id="checkbox-switch-14" class="form-check-input" type="checkbox" value="1" name="veh_update" >
                                    <label class="form-check-label" for="checkbox-switch-14">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="veh_delete">
                                    <input id="checkbox-switch-15" class="form-check-input" type="checkbox" value="1" name="veh_delete" >
                                    <label class="form-check-label" for="checkbox-switch-15">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Paid Holidays</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="holiday_create">
                                    <input id="checkbox-switch-11" class="form-check-input" type="checkbox" value="1" name="holiday_create" >
                                    <label class="form-check-label" for="checkbox-switch-11">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="holiday_view">
                                    <input id="checkbox-switch-12" class="form-check-input" type="checkbox" value="1" name="holiday_view" >
                                    <label class="form-check-label" for="checkbox-switch-12">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="holiday_edit">
                                    <input id="checkbox-switch-13" class="form-check-input" type="checkbox" value="1" name="holiday_edit" >
                                    <label class="form-check-label" for="checkbox-switch-13">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="holiday_update">
                                    <input id="checkbox-switch-14" class="form-check-input" type="checkbox" value="1" name="holiday_update" >
                                    <label class="form-check-label" for="checkbox-switch-14">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="holiday_delete">
                                    <input id="checkbox-switch-15" class="form-check-input" type="checkbox" value="1" name="holiday_delete" >
                                    <label class="form-check-label" for="checkbox-switch-15">Delete</label>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Leaves</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="leave_create">
                                    <input id="checkbox-switch-11" class="form-check-input" type="checkbox" value="1" name="leave_create" >
                                    <label class="form-check-label" for="checkbox-switch-11">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="leave_view">
                                    <input id="checkbox-switch-12" class="form-check-input" type="checkbox" value="1" name="leave_view" >
                                    <label class="form-check-label" for="checkbox-switch-12">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="leave_edit">
                                    <input id="checkbox-switch-13" class="form-check-input" type="checkbox" value="1" name="leave_edit" >
                                    <label class="form-check-label" for="checkbox-switch-13">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="leave_update">
                                    <input id="checkbox-switch-14" class="form-check-input" type="checkbox" value="1" name="leave_update" >
                                    <label class="form-check-label" for="checkbox-switch-14">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="leave_delete">
                                    <input id="checkbox-switch-15" class="form-check-input" type="checkbox" value="1" name="leave_delete" >
                                    <label class="form-check-label" for="checkbox-switch-15">Delete</label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Sheet</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="sheet_create">
                                    <input id="checkbox-switch-11" class="form-check-input" type="checkbox" value="1" name="sheet_create" >
                                    <label class="form-check-label" for="checkbox-switch-11">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="sheet_view">
                                    <input id="checkbox-switch-12" class="form-check-input" type="checkbox" value="1" name="sheet_view" >
                                    <label class="form-check-label" for="checkbox-switch-12">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="sheet_edit">
                                    <input id="checkbox-switch-13" class="form-check-input" type="checkbox" value="1" name="sheet_edit" >
                                    <label class="form-check-label" for="checkbox-switch-13">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="sheet_update">
                                    <input id="checkbox-switch-14" class="form-check-input" type="checkbox" value="1" name="sheet_update" >
                                    <label class="form-check-label" for="checkbox-switch-14">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="sheet_delete">
                                    <input id="checkbox-switch-15" class="form-check-input" type="checkbox" value="1" name="sheet_delete" >
                                    <label class="form-check-label" for="checkbox-switch-15">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Comments</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="cmnt_create">
                                    <input id="checkbox-switch-16" class="form-check-input" type="checkbox" value="1" name="cmnt_create" >
                                    <label class="form-check-label" for="checkbox-switch-16">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="cmnt_view">
                                    <input id="checkbox-switch-17" class="form-check-input" type="checkbox" value="1" name="cmnt_view" >
                                    <label class="form-check-label" for="checkbox-switch-17">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="cmnt_edit">
                                    <input id="checkbox-switch-18" class="form-check-input" type="checkbox" value="1" name="cmnt_edit" >
                                    <label class="form-check-label" for="checkbox-switch-18">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="cmnt_update">
                                    <input id="checkbox-switch-19" class="form-check-input" type="checkbox" value="1" name="cmnt_update" >
                                    <label class="form-check-label" for="checkbox-switch-19">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="cmnt_delete">
                                    <input id="checkbox-switch-20" class="form-check-input" type="checkbox" value="1" name="cmnt_delete" >
                                    <label class="form-check-label" for="checkbox-switch-20">Delete</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">Finance</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="finance_create">
                                    <input id="checkbox-switch-16" class="form-check-input" type="checkbox" value="1" name="finance_create" >
                                    <label class="form-check-label" for="checkbox-switch-16">Create</label>
                                </div>
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="hidden" value="0" name="finance_view">
                                    <input id="checkbox-switch-17" class="form-check-input" type="checkbox" value="1" name="finance_view" >
                                    <label class="form-check-label" for="checkbox-switch-17">View</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="finance_edit">
                                    <input id="checkbox-switch-18" class="form-check-input" type="checkbox" value="1" name="finance_edit" >
                                    <label class="form-check-label" for="checkbox-switch-18">Edit</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="finance_update">
                                    <input id="checkbox-switch-19" class="form-check-input" type="checkbox" value="1" name="finance_update" >
                                    <label class="form-check-label" for="checkbox-switch-19">Update</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input class="form-check-input" type="hidden" value="0" name="finance_delete">
                                    <input id="checkbox-switch-20" class="form-check-input" type="checkbox" value="1" name="finance_delete" >
                                    <label class="form-check-label" for="checkbox-switch-20">Delete</label>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
            <!-- END: Input -->
        </div>
        <!-- END: Content -->
    @endsection
