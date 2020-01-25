<?php include 'header.php';?>
<main class="suppliers-manage-page">

    <div class="header">
        <h1>Manage Suppliers</h1>
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
        <div class="bottom-header">
        </div>
    </div>

    <div class="content">

        <div class="controls-wrapper">
            <a href="javaScript:void();" class="controls-btn btn add-new-btn" title="Add A New Supplier"><i class="fa fa-plus"
                    aria-hidden="true"></i></a>
            <a href="javaScript:void();" class="controls-btn btn edit-btn" title="Edit Supplier Details"><i class="fas fa-pen"></i></a>
            <a href="javaScript:void();" class="controls-btn btn delete-btn" title="Delete Supplier"><i class="fa fa-trash"
                    aria-hidden="true"></i></a>
        </div>

        <div class="table-wrap">
            <div class="searchbox">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Search" aria-describedby="helpId">
                        <select name="">
                            <option value="">Supplier Number</option>
                            <option value="">Supplier Name</option>
                        </select>
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="resizable editable data-table">
                    <thead>
                        <tr>
                            <th class="filter">Supplier No</th>
                            <th class="filter editable">Supplier Name</th>
                            <th class="filter editable">Mobile</th>
                            <th class="filter">TRN No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Ali</td>
                            <td>+28 539818</td>
                            <td>5265</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Albert</td>
                            <td>+56 459848</td>
                            <td>8481</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Akhil</td>
                            <td>+88 213918</td>
                            <td>2685</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Albert</td>
                            <td>+56 459848</td>
                            <td>8481</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Ali</td>
                            <td>+28 539818</td>
                            <td>5265</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Ali</td>
                            <td>+28 539818</td>
                            <td>5265</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Albert</td>
                            <td>+56 459848</td>
                            <td>8481</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Akhil</td>
                            <td>+88 213918</td>
                            <td>2685</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Albert</td>
                            <td>+56 459848</td>
                            <td>8481</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Ali</td>
                            <td>+28 539818</td>
                            <td>5265</td>
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
            </div>
            <div class="row">

                <div class="form-group col-lg-6">
                    <label for="code">Supplier No</label>
                    <input id="code" type="text">
                </div>

                <div class="form-group col-lg-6">
                    <label for="b_code">Supplier Name</label>
                    <input id="b_code" type="text">
                </div>

                <div class="form-group col-lg-12">
                    <label for="e_name">Address</label>
                    <input id="e_name" type="text">
                </div>
                <div class="form-group col-lg-4">
                    <label for="a_name">Mobile</label>
                    <input id="a_name" type="number">
                </div>
                <div class="form-group col-lg-4">
                    <label for="cost">Tax Reg. No</label>
                    <input id="cost" type="text">
                </div>
                <div class="form-group col-lg-4">
                    <label for="v_tax">Value added Tax %</label>
                    <input id="v_tax" type="text">
                </div>
                <div class="form-group col-lg-4">
                    <label for="price">Credit Opening</label>
                    <input id="price" type="text">
                </div>
                <div class="form-group col-lg-4">
                    <label for="vat_price">Current Credit</label>
                    <input id="vat_price" type="text">
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