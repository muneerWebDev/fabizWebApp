<?php include 'header.php';?>
<main class="expenses-page">

    <div class="header">
        <h1>Manage Expenses</h1>
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
        <div class="bottom-header">
        </div>
    </div>

    <div class="content">

        <div class="controls-wrapper">
            <a href="javaScript:void();" class="controls-btn add-new-btn" title="Add A New Expense"><i
                    class="fa fa-plus" aria-hidden="true"></i></a>
            <a href="javaScript:void();" class="controls-btn edit-btn" title="Edit"><i class="fas fa-pen"></i></a>
            <a href="javaScript:void();" class="controls-btn delete-btn" title="Delete"><i class="fa fa-trash"
                    aria-hidden="true"></i></a>
        </div>

        <div class="table-wrap">
            <div class="searchbox">
                <div class="diary-date">
                    <div class="btn-grp">
                        <button id="yest"><i class="fas fa-chevron-circle-left"></i></button>
                        <input type="text" name="" id="date">
                        <button id="tom"><i class="fas fa-chevron-circle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="resizable editable data-table">
                    <thead>
                        <tr>
                            <th class="filter editable">Expense</th>
                            <th class="filter editable">Remarks</th>
                            <th class="filter editable">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Test Test Test Test Test </td>
                            <td>001</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Test Test Test Test Test </td>
                            <td>002</td>
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

                <div class="form-group col-lg-3">
                    <label for="code">Expense</label>
                    <input id="code" type="text">
                </div>

                <div class="form-group col-lg-3">
                    <label for="e_name">Amount</label>
                    <input id="e_name" type="text">
                </div>

                <div class="form-group col-lg-4">
                    <label for="b_code">Remarks</label>
                    <input id="b_code" type="text">
                </div>
                <div class="form-group col-lg-2 button-wrap">
                    <button class="modal-dismiss btn-primary mb-1">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal : end -->
</main>
<?php include 'footer.php';?>