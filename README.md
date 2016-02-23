# Active Menu
Laravel link helper to detect if menu item is currently active

#Usage

```
<li class="{{ ActiveMenu::check(['customer']) }}"><a href="{{ url('customer') }}">Customers</a></li>
```

Which results in

```
<li class="active"><a href="{{ url('customer') }}">Customers</a></li>
```