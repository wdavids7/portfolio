<section>
    <div class="container">
        <div class="nav-search-bar"><!-- side nav start -->
            <div class="py-3"><!-- py-3 start -->
                <div class="col-md-12"><!-- col-md-12 start -->
                    <div class="col-md-6 mx-auto"><!-- col-md-6 start -->

                        <form action="results.php" method="GET" class="d-flex" role="search"><!-- search form start -->

                            <input class="form-control me-2" type="text" placeholder="Search" name="user-query" list="datalistOptions" id="exampleDataList" aria-label="Search" required>

                            <datalist id="datalistOptions">
                                <option value="Cape Storm">
                                <option value="Defy">
                                <option value="Garmin">
                                <option value="Nike">
                                <option value="Yuppie Chef">
                            </datalist>

                            <button class="btn btn-outline-secondary" type="submit" name="search" value="Search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>

                        </form><!-- search form end -->
                    </div><!-- col-md-6 end -->
                </div><!-- col-md-12 end -->
            </div><!-- py-3 end -->
        </div><!-- side nav end -->
    </div>
</section>