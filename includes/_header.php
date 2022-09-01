<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php">Sigma</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produtos.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
                <?php 
                session_start();
                @$logado = $_SESSION['logado']; 
                if($logado == 'logado'):
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./admin/logout.php">Logout</a>
                </li>
                <?php else:?>
                <li class="nav-item">
                    <a class="nav-link" href="./admin/login.php">Login</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
</header>

<main>