<div class="container">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="logo1" href=<?=$_OUTER_PATH."/views/index.php"?>> <svg xmlns="http://www.w3.org/2000/svg"
                    width="50" height="50" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                </svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="two" href=<?=$_OUTER_PATH."/views/trip/add.php"?>>Add trip </a>
                    </li>


                </ul>
                <div class="col-lg-auto justify-content-md-center">
                    <div class="container">
                        <form class="d-flex search" method="get">
                            <input class="form-control me-2" type="text" name="search" placeholder="Search by month..."
                                aria-label="Search">
                            <button class="btn btn-outline-succes" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>