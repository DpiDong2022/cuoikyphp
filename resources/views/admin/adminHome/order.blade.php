<x-admin.layout>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Orders</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>Name</th>
                                <th>Order Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                @php
                                    $rowCount = $order->invoiceDetails->count();
                                @endphp
                                <tr>
                                    <td rowspan="{{ $rowCount }}">{{ $order->id }}</td>
                                    <td rowspan="{{ $rowCount }}">{{ $order->user->name }}</td>
                                    <td rowspan="{{ $rowCount }}">{{ $order->date }}</td>
                                    <td rowspan="{{ $rowCount }}">{{ $order->total }}</td>
                                    <td rowspan="{{ $rowCount }}">{{ $order->status->name }}</td>
                                    <td rowspan="{{ $rowCount }}">
                                        <a href="{{ route('order.detail', $order->id) }}" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                                @foreach($order->invoiceDetails as $detail)
                                    @if (!$loop->first)
                                        <tr></tr> <!-- Empty row to maintain the structure -->
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
