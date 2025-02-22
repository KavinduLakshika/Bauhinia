<style>
    .btn-margin-right {
        margin-right: 10px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">BAUHINIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>

            <div class="d-flex">
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == '1') {
                    ?>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle" style="margin-right: 10px;"></i>
                                <?php echo $_SESSION['name']; ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item disabled"><?php echo $_SESSION['type']; ?></a>
                                <div class="dropdown-divider"></div>
                                <?php
                                if ($_SESSION["type"] == "Customer") {
                                    ?>
                                    <a class="dropdown-item"
                                                   href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>cart"><i
                                                class="fas fa-shopping-cart" style="margin-right: 10px;"></i> My
                                        Cart</a>

                                    <a class="dropdown-item"
                                       href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>orders"><i
                                                class="fas fa-box" style="margin-right: 10px;"></i> My
                                        Orders</a>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($_SESSION["type"] == "Production Manager") {
                                    ?>
                                    <a class="dropdown-item"
                                       href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>daily_orders"><i
                                                class="fas fa-shopping-cart" style="margin-right: 10px;"></i> Daily Orders</a>
                                    <?php
                                }
                                ?>
                                <a class="dropdown-item"
                                   href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>logout"><i
                                            class="fas fa-sign-out-alt" style="margin-right: 10px;"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>