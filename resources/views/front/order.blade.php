@extends('template')

@section('content')

    <main class="container" style="padding-bottom: 60px;">

            <table>
                <tr>
                    <td>Имя покупателя</td>
                    <td>Телефон</td>
                    <td>e-mail</td>
                    <tdПродукт</td>
                    <td>Цена</td>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->email }}</td>
                        @foreach($order->cart->items as $product)
                        
                            <td>{{$product['item']['title']}}</td>
                            <td>{{$product['price']}}</td>
                        @endforeach
                    </tr>
                @endforeach

    </main>

@endsection