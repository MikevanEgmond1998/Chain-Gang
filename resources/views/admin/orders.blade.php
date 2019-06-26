@extends('admin.common_template_admin')

@section('content')

<div class="row no-gutters justify-content-center">
    <div class="col-12 text-center py-3" id="pagina-titel">
        <h3 class="m-0">ChainGang - Orders</h3>
    </div>
    <div class="col-12">
        <table class="display nowrap w-100" id="data-table">
        <thead>
        <tr>
        <th>Order nummer</th>
        <th>Klant naam</th>
        <th>Datum geplaatst</th>
        <th>Acties</th>
            <th></th>
        </tr>
        </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{DB::table('users')->where('id', $order->id)->value('name')}} {{DB::table('users')->where('id', $order->id)->value('lastname')}}</td>
                    <td>{{$order->created_at}}</td>
                    <td class="text-center"><a href="/admin/orders/{{$order->id}}" class="btn btn-primary">Bewerken <i class="fas fa-edit"></i></a></td>

                        <form method="POST" action="/admin/orders/{{$order->id}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                            <td class="text-center"><button type="submit" class="btn btn-danger">Delete</button></td>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
