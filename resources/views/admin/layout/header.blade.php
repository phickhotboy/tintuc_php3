<div class="bg-primary header">
    <h3 class="text-light layer">
        <span>Shoppe</span>
        <span>Quản lý tin tuc</span>
    </h3>

    {{-- <div class="dropdown">
        <img class="dropdown-toggle" src="../assets/image/png-clipart-computer-icons-user-profile-person-child-heroes.jpg" alt="" id="dropdownMenuButton1"
            data-bs-toggle="dropdown">
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="#">Language</a></li>
            <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
        </ul>
    </div> --}}
    <div class="dropdown">
        <img class="dropdown-toggle" src="../assets/image/png-clipart-computer-icons-user-profile-person-child-heroes.jpg" alt="Profile" id="dropdownMenuButton1" data-bs-toggle="dropdown">
        <a href="{{route('logout')}}"><button class="btn btn-primary">Logout</button></a>
    </div>
</div>