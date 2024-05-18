<x-admin.layout>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Order Details</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h4>Order Information</h4>
                <p><strong>OrderID:</strong> {{ $order->id }}</p>
                <p><strong>Name:</strong> {{ $order->user->name }}</p>
                <p><strong>Email:</strong> {{ $order->user->email }}</p>
                <p><strong>Phone:</strong> {{ $order->user->phone }}</p>
                <p><strong>Address</strong> {{ $orderInformation->address }}</p>
                <p><strong>Order Date:</strong> {{ $order->date }}</p>
                <p><strong>Total:</strong> {{ $order->total }}</p>
                <p><strong>Status:
                    <form action="{{ route('order.updateStatus', $order->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status_id">
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}" {{ $order->status_id == $status->id ? 'selected' : '' }}>
                                    {{ $status->name }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>   
                </p>

                <h4>Order Items</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Varient ID</th>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Memory</th>
                            <th>Storage</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->invoiceDetails as $detail)
                            <tr>
                                <td>{{ $detail->varient->id }}</td>
                                <td>{{ $detail->varient->product->name}}</td>
                                <td>
                                    <span style="display: inline-block; width: 20px; height: 20px; background-color: {{ $detail->varient->color }};"></span>
                                    {{ $detail->varient->color }}
                                </td>
                                <td>{{ $detail->varient->memory }}GB</td>
                                <td>{{ $detail->varient->storage }}GB</td>
                                <td>{{ $detail->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>