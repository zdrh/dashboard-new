<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>


            <ul class="navbar-nav me-end d-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('administrace/profil/edit') ?>">Upravit profil</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('administrace/profil/heslo/edit') ?>">Změnit heslo</a></li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('administrace/odhlaseni') ?>">Odhlásit</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!--
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>

<li><a class="dropdown-item" href="#">A third link</a></li>
</ul>
</li> --> <?php // $user->first_name . " " . $user->last_name ?>