<?php include 'header.php';?>
<main class="items-manage-page">

    <div class="header">
        <h1>Manage Items</h1>
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
        <div class="bottom-header">
        </div>
    </div>

    <div class="content">

        <div class="controls-wrapper">
            <a href="javaScript:void();" class="controls-btn add-new-btn" title="Add A New Item"><i class="fa fa-plus"
                    aria-hidden="true"></i></a>
            <a href="javaScript:void();" class="controls-btn edit-btn" title="Edit Item"><i class="fas fa-pen"></i></a>
            <a href="javaScript:void();" class="controls-btn delete-btn" title="Delete Item"><i class="fa fa-trash"
                    aria-hidden="true"></i></a>
        </div>

        <div class="table-wrap">
            <div class="searchbox">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Search" aria-describedby="helpId">
                        <select name="">
                            <option value="">Code</option>
                            <option value="">Barcode</option>
                            <option value="">Description</option>
                        </select>
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="resizable editable data-table">
                    <thead>
                        <tr>
                            <th class="filter">Code</th>
                            <th class="filter editable">Barcode</th>
                            <th class="filter editable">Description</th>
                            <th class="filter">Type</th>
                            <th class="filter">UOM</th>
                            <th class="filter editable">Stock</th>
                            <th class="filter">Cost</th>
                            <th class="filter">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td></td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td>84</td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>52</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>54</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td></td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td>84</td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>52</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>54</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td></td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td>84</td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>52</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>54</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td></td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td>84</td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>52</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>54</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td></td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td>84</td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>52</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>54</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>002</td>
                            <td>Item Test</td>
                            <td>Warehouse</td>
                            <td></td>
                            <td>84</td>
                            <td>58</td>
                            <td>49.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- modal : start -->
    <div id="modal" class="modal-container three-controlls-modal">
        <div class="modal">
            <div class="head mb-4">
                <div class="close modal-dismiss">X</div>
                <h2 class="mb-0">Modify</h2>

                <div class="form-group text-center">
                    <label class="custom-checkbox mb-0" for="status">Mark as inactive
                        <input id="status" type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-lg-4">
                    <label for="code">Code</label>
                    <input id="code" type="text">
                </div>

                <div class="form-group col-lg-4">
                    <label for="b_code">Bar Code</label>
                    <input id="b_code" type="text">
                </div>

                <div class="form-group col-lg-5">
                    <label for="e_name">Item Name</label>
                    <input id="e_name" type="text">
                </div>
                <div class="col-lg-2 d-flex align-self-end justify-content-center">
                    <button class="btn-dark get_arabic">Get Arabic</button>
                </div>
                <div class="form-group col-lg-5">
                    <label for="a_name">Arabic Name</label>
                    <input id="a_name" type="text">
                </div>
                <div class="form-group col-lg-3">
                    <label for="cost">Cost</label>
                    <input id="cost" type="text">
                </div>
                <div class="form-group col-lg-3">
                    <label for="v_tax">Value added Tax %</label>
                    <input id="v_tax" type="text">
                </div>
                <div class="form-group col-lg-3">
                    <label for="price">Price</label>
                    <input id="price" type="text">
                </div>
                <div class="form-group col-lg-3">
                    <label for="vat_price">Price with VAT</label>
                    <input id="vat_price" type="text">
                </div>
                <div class="form-group col-lg-9">
                    <label for="desc">Description</label>
                    <input id="desc" type="text">
                </div>
                <div class="form-group col-lg-3 text-center d-flex align-self-end">
                    <label class="custom-checkbox" for="inventory">Inventory Item
                        <input id="inventory" type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                </div>
                <div class="form-group col-lg-4">
                    <label for="stock_opening">Stock Opening</label>
                    <input id="stock_opening" type="text">
                </div>
                <div class="form-group col-lg-4">
                    <label for="stock_current">Current Stock</label>
                    <input id="stock_current" type="text">
                </div>

                <div class="form-group col-lg-4 button-wrap">
                    <button class="modal-dismiss btn-primary mb-1">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal : end -->
</main>
<?php include 'footer.php';?>