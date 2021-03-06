   <!-- <h1 class="mt-4 w-100 text-center">Welcome!</h1>
    <div class="row w-100 h-100 mx-0 py-5">
        <div class="col-4">
            <form id="home-input-categorys" class="row w-100 h-100" action="">
                <label for="categorySelect">Category:</label>
                <select name="categorySelect[]" id="categorySelect" size="3" class="custom-select" multiple="multiple">
                    <option value="Any">Any</option>
                    <?php //for($i = 0; $i < count(Home::GetAllCategory()); ++ $i): ?>
                        <option value="<?//= Home::GetAllCategory()[$i]['Id'] ?>"><?//= Home::GetProductNameById($i + 1) ?></option>
                    <?php //endfor ?>
                </select>
                <label class="mt-4" for="priceMinInput">Price minimum:</label>
                <input id="priceMinInput" type="number" class="form-control" min="0" />
                <label class="mt-4" for="priceMaxInput">Price maximum:</label>
                <input id="priceMaxInput" type="number" class="form-control" min="0" />
                <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="onlyInStockCheckBox">
                    <label class="form-check-label" for="onlyInStockCheckBox">Only show items in stock</label>
                </div>
                <button class="mx-auto mt-4 btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="col">
            <?php //$Products = Home::GetAllProduct() ?>
            <div class="mt-4 card shadow">
                <?php //for($i = 0; $i <count($Products); ++ $i): ?>
                    <div class="card-body">
                        <h2><?//=$Products[$i]['Name']?></h2>
                        <img src="assets/pictures/<?//= $Products[$i]['Image'] ?>" alt="The picture can't be loaded!" />
                        <h4 class="text-muted"><?//= $Products[$i]['Price'] ?>$</h4>
                        <p>Category: <?//= Home::GetCategoryNameById($Products[$i]['CategoryId'])?></p>
                        <p>Description: <?//= $Products[$i]['Description'] ?></p>
                    </div>
                <?php //endfor ?>
            </div>
        </div>
    </div>-->
    
    <h1 class="heading-h1">Welcome!</h1>
    <div class="home-container">
        <div class="leftside">
            <form action="" method="GET">
                <label for="categorySelect">Category:</label>
                <select name="categorySelect[]" id="categorySelect" multiple="multiple">
                    <option value="Any">Any</option>
                    
                    <?php for($i = 0; $i < (count($this->model->GetAllCategory())); ++ $i): ?>
                    <option value="<?= $this->model->GetAllCategory()[$i]['Id'] ?>"><?= $this->model->GetProductNameById($i + 1) ?></option>
                    <?php endfor ?>
                </select>
                <label for="priceMinInput">Price minimum:</label>
                <input id="priceMinInput" type="number" min="0" />
                <label class="mt-4" for="priceMaxInput">Price maximum:</label>
                <input id="priceMaxInput" type="number" min="0" />
                <div>
                    <label for="onlyInStockCheckBox">Only show items in stock</label>
                    <input type="checkbox" value="" id="onlyInStockCheckBox">
                </div>
                <button class="button product-search" type="submit">Search</button>
            </form>
        </div>
        <div class="rightside">
            <?php $Products = $this->model->GetAllProduct() ?>
            <?php for($i = 0; $i <count($Products); ++ $i): ?>
                <div class="product-item">
                    <img src="assets/pictures/<?= $Products[$i]['Image'] ?>" alt="The picture can't be loaded!" />
                    <div class="product-item-details">
                        <h2><?= $Products[$i]['Name'] ?></h2>
                        <h4><?= $Products[$i]['Price'] ?>$</h4>
                        <p>Category: <?= $this->model->GetCategoryNameById($Products[$i]['CategoryId']) ?></p>
                        <p>Description: <?= $Products[$i]['Description'] ?></p>
                    </div>
                    <button class="button buy-it" type="submit">Buy it!</button>
                </div>
            <?php endfor ?>
        </div>
    </div>