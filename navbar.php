<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" style="background-color:snow; border:snow;" href="home.php">TODO & BLOGS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="background-color:white;" aria-current="page" href="home.php">&nbsp;&nbsp;| HOME |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="background-color:white;" href="todo.php">&nbsp;&nbsp;| TODO |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="background-color:white;" href="blog.php">&nbsp;&nbsp;| BLOG |</a>
                </li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" style="background-color:white;" href="post.php">&nbsp;&nbsp;| POST |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="background-color:white; " &nbsp href="logout.php">&nbsp;&nbsp;| LOGOUT |</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" style="background-color:white; " href="login.php">&nbsp;&nbsp;| LOGIN |</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>