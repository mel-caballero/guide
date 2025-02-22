<?php
$temas = include(__DIR__ . '/../data/menu.php');
?>
<header class="row main-color">
    <nav id="header-nav" aria-label="Menú principal" class="navbar navbar-expand-md main-color">
        <div class="container">
            <h1><a href="index.php">Guía de Accesibilidad</a></h1>
            <button class="navbar-toggler" aria-label="Menú desplegable" type="button" aria-controls="menuprincipal" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#menuprincipal">
                <svg role="img" class="bi bi-list text-white" aria-hidden="true" width="40" height="40" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div id="menuprincipal" class="collapse navbar-collapse">
                <ul id="menu" class="navbar-nav ms-auto me-2 px-4">
                    <?php foreach ($temas as $tema => $subtemas): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-<?php echo urlencode($tema); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo htmlspecialchars($tema); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-<?php echo urlencode($tema); ?>">
                                <?php foreach ($subtemas as $subtema): ?>
                                    <li>
                                        <a class="dropdown-item" href="index.php?page=<?php echo urlencode($subtema['nombre']); ?>">
                                            <?php echo htmlspecialchars($subtema['titulo']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
