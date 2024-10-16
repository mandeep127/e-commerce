<h1>Your Cart</h1>
<ul>
    @foreach ($cartItems as $item)
        <li>{{ $item['name'] }} - Quantity: {{ $item['quantity'] }} - ${{ $item['price'] }}</li>
    @endforeach
</ul>
<a href="/">Back to Home</a>
