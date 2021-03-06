<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link<?php if ($data['title'] === SITENAME) echo ' active'; ?>" href="<?php echo URLROOT; ?>">Game</a>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link<?php if ($data['title'] === 'scoreboard') echo ' active'; ?>"
                       href="<?php echo URLROOT; ?>/pages/scoreboard">Scoreboard</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

            <?php if (isset($_SESSION['user_id'])) : ?>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Welcome <?php echo $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Log out</a>
                </li>

            <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link<?php if ($data['title'] === 'log in') echo ' active'; ?>"
                       href="<?php echo URLROOT; ?>/users/login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if ($data['title'] === 'create an account') echo ' active'; ?>"
                       href="<?php echo URLROOT; ?>/users/register">Register</a>
                </li>

            <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
