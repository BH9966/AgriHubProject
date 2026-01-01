<div class="col-lg-3">
    <ul class="account-nav">
      <li><a href="{{route('useraccount')}}" class="menu-link menu-link_us-s">Dashboard</a></li>
      <li><a href="account-orders.html" class="menu-link menu-link_us-s">Orders</a></li>
      <li><a href="account-address.html" class="menu-link menu-link_us-s">Addresses</a></li>
      <li><a href="account-details.html" class="menu-link menu-link_us-s">Account Details</a></li>
      <li><a href="account-wishlist.html" class="menu-link menu-link_us-s">Wishlist</a></li>
      <form action="{{ route('logout') }}" method="post" id="form-submit-user">
        @csrf
      <li><a href="login.html" class="menu-link menu-link_us-s" onclick="event.preventDefault();document.getElementById('form-submit-user').submit();">Logout</a></li>
    </form>
    </ul>
  </div>