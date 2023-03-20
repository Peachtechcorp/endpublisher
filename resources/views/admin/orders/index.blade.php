@extends('layouts.app')

@section('content')
    <div class="">
        <x-admin.layouts.header />
        <x-admin.layouts.side-bar />
        <div class="content-page">
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Recent Customers</h4> --}}


                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <th>Code</th>
                                            <th>Descritpion</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($orderItems as $orderItem)
                                            <tr>
                                                <th scope="row">{{ $orderItem->id }}</th>
                                                <th>{{ $orderItem->user->name }}</th>
                                                <td>{{ $orderItem->code }}</td>
                                                <td>{{ $orderItem->description }}</td>
                                                <td>{{ $orderItem->total }}</td>
                                                <td>{{ $orderItem->status }}</td>
                                                <td>{{ $orderItem->created_at->format('d M Y - H:i:s') }}</td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                            class="dropdown-toggle arrow-none btn btn-light btn-sm"
                                                            data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <form action="{{ route('orderItems.destroy', $orderItem->id) }}"
                                                                method="POST">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('orderItems.show', $orderItem->id) }}"><i
                                                                        class="mdi mdi-pencil mr-1 text-muted"></i>View </a>

                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-link"><i
                                                                        class="mdi mdi-delete mr-1 text-muted"></i>Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>

    </div>
@endsection
