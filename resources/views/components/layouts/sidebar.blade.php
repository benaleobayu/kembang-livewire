<aside class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
    <div class="bg-light border rounded-3 p-1 h-100 sticky-top">
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
            <x-layouts.navlink :active="request()->routeIs(route('user'))">User</x-layouts.navlink>
            <x-layouts.navlink :active="request()->routeIs(route('country'))">Country</x-layouts.navlink>
            <x-layouts.navlink :active="request()->routeIs(route('order'))">Order</x-layouts.navlink>
            <x-layouts.navlink :active="request()->routeIs(route('user'))">User</x-layouts.navlink>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link px-2 text-truncate">
                    <i class="bi bi-house fs-5"></i>
                    <span class="d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate">
                    <i class="bi bi-speedometer fs-5"></i>
                    <span class="d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate"><i class="bi bi-card-text fs-5"></i>
                    <span class="d-none d-sm-inline">Orders</span> </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate"><i class="bi bi-bricks fs-5"></i>
                    <span class="d-none d-sm-inline">Products</span> </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 text-truncate"><i class="bi bi-people fs-5"></i>
                    <span class="d-none d-sm-inline">Customers</span> </a>
            </li> --}}
        </ul>
    </div>
</aside>