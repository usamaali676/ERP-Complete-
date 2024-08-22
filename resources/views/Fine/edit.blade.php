@extends('layouts.app')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content content--top-nav">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Fine Edit
            </h2>
        </div>
        <!-- BEGIN: Input -->
        <div class="intro-y box mt-4">

            <div id="input" class="p-5">
                <div class="preview">
                    <form action="{{route('fine.update', $fine->id)}}" method="POST">
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
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="tomselect-1">Select User </label>
                                    <div class="mt-2">
                                        <select name="user_id"  data-placeholder="Select User" class="tom-select w-full " >
                                            @if ($selectuser != null)
                                            <option value="{{$selectuser->id}}">{{$selectuser->name}}</option>
                                            @else
                                            <option value="">Please Select</option>
                                            @endif
                                            @foreach ($user as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <label for="regular-form-3" class="form-label">Amount</label>
                                    <input id="regular-form-3" name="amount" type="text" class="form-control" placeholder="Amount" value="{{$fine->amount}}">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <label for="regular-form-3" class="form-label">Date</label>
                                    <input id="regular-form-3" name="date" type="date" class="form-control" placeholder="Date" value="{{$fine->date}}">
                                </div>
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <label for="regular-form-3" class="form-label">Reason</label>
                                    <input id="regular-form-3" name="reason" type="text" class="form-control" placeholder="Reason" value="{{$fine->reason}}">
                                </div>


                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
            <!-- END: Input -->
        </div>
        <!-- END: Content -->
    @endsection
