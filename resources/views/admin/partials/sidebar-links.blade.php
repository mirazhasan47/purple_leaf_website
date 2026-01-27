<a href="{{ route('dashboard') }}">Dashboard</a>
<a href="{{ route('users.index') }}">Users</a>
<a href="{{ route('products.index') }}">Products</a>
<a href="{{ route('orders.index') }}">Orders</a>

<a href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
