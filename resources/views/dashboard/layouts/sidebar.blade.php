<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard/all">
                <svg class="bi"><use xlink:href="#house-fill"/></svg> <!-- Change this SVG -->
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/about">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg> <!-- Change this SVG -->
                My profile
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/kelas">
                <svg class="bi"><use xlink:href="#people"/></svg> <!-- Change this SVG -->
                Kelas
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/student">
                <svg class="bi"><use xlink:href="#graph-up"/></svg> <!-- Change this SVG -->
                Data Siswa
            </a>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg> <!-- Change this SVG -->
                        Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
