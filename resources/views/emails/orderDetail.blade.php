@component('mail::message')
# Order Details

## Order Information
- **OrderID:** {{ $invoice->id }}
- **Name:** {{ $invoice->user->name }}
- **Phone:** {{ $invoice->orderInformation->phone }}
- **Address:** {{ $invoice->orderInformation->address }}
- **Order Date:** {{ $invoice->date }}
- **Total:** {{ $invoice->total }}
- **Status:** {{ $invoice->status->name }}

## Order Items
@component('mail::table')
| Varient ID | Name | Color | Memory | Storage | Quantity |
| ---------- | ---- | ----- | ------ | ------- | -------- |
@foreach ($invoice->invoiceDetails as $detail)
| {{ $detail->varient->id }} | {{ $detail->varient->product->name }} | <span style="display:inline-block;width:10px;height:10px;background-color:{{ $detail->varient->color }}"></span> {{ $detail->varient->color }} | {{ $detail->varient->memory }}GB | {{ $detail->varient->storage }}GB | {{ $detail->quantity }} |
@endforeach
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
