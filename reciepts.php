<?php include 'header.php';?>
<main class="reciepts-page">

    <div class="header">
        <h1>Reciepts</h1>
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
        <div class="bottom-header">
        </div>
    </div>

    <div class="content">

        <div class="controls-wrapper">
            <a href="javaScript:void();" class="controls-btn add-new-btn" title="Add A New Purchase"><i
                    class="fa fa-plus" aria-hidden="true"></i></a>
            <a href="javaScript:void();" class="controls-btn edit-btn" title="Edit Purchase Details"><i
                    class="fas fa-pen"></i></a>
            <a href="javaScript:void();" class="controls-btn delete-btn" title="Delete Purchase"><i class="fa fa-trash"
                    aria-hidden="true"></i></a>
        </div>

        <div class="table-wrap">
            <div class="searchbox">
                <form class="form-inline row">
                    <div class="form-group col-8">
                        <select name="">
                            <option value="">Reciepts No</option>
                            <option value="">Customer Name</option>
                        </select>
                        <input type="text" name="" class="form-control" placeholder="Search" aria-describedby="helpId">
                    </div>
                    <div class="form-group search-by-date single col-4">
                        <select name="">
                            <option value="single">Date</option>
                            <option value="month">Month & Year</option>>
                            <option value="between">Between</option>
                        </select>

                        <input type="date" name="" class="form-control day" id="single" placeholder="Search">

                        <div class="date-between">
                            <input type="date" name="" id="from"><span>To</span> <input type="date" name="" id="to">
                        </div>
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="resizable editable data-table">
                    <thead>
                        <tr>
                            <th class="filter">Invoice No</th>
                            <th class="filter editable">Date</th>
                            <th class="filter editable">Customer</th>
                            <th class="filter">IPayment Mode</th>
                            <th class="filter">Net Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>24/7/15</td>
                            <td>Ali</td>
                            <td>Card</td>
                            <td>6548</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div> <!-- modal : start -->
    <div id="modal" class="modal-container three-controlls-modal">
        <div class="modal">
            <div class="head mb-4">
                <div class="close modal-dismiss">X</div>
                <h2 class="mb-0">Modify</h2>
            </div>
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="inv_no">Reciepts No</label>
                    <input id="inv_no" type="text">
                </div>

                <div class="form-group col-md-4 offset-md-4">
                    <label for="date">Date</label>
                    <input id="date" type="date">
                </div>

                <div class="form-group col-lg-4">
                    <label for="b_code">Customer</label>
                    <span class="inline-input-group">
                        <input id="id" type="text">
                        <input id="name" type="text">
                        <button class="btn btn-icon" title="Add New Customer"><i class="fas fa-file"></i></button>
                    </span>
                </div>

                <div class="items-table-section w-100">

                    <div class="table-responsive modal-responsive">

                        <table class="resizable data-table">
                            <thead>
                                <tr>
                                    <th class="filter">Reciepts No</th>
                                    <th class="filter editable">Date</th>
                                    <th class="filter">Net Amount</th>
                                    <th class="filter">Pending Amount</th>
                                    <th class="filter">Recieved</th>
                                    <th class="filter">Adjusted</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>12/5/19</td>
                                    <td>5265</td>
                                    <td>6548</td>
                                    <td>6548</td>
                                    <td>548</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>12/5/19</td>
                                    <td>5265</td>
                                    <td>6548</td>
                                    <td>6548</td>
                                    <td>548</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td colspan="2" class="text-right font-weight-bold">Total :</td>
                                <td>131525</td>
                                <td>15413</td>
                                <td>12321</td>
                                <td>5255</td>
                            </tfoot>

                        </table>
                    </div>
                </div>
                <div class="form-group radio-inline col-lg-4">
                    <label for="method">Payment Mode</label>
                    <label for="cash">Cash <input name="method" id="cash" type="radio"></label>
                    <label for="card">Card <input name="method" id="card" type="radio"></label>
                    <label for="cheque">Cheque <input name="method" id="cheque" type="radio"></label>
                    <label for="credit">Credit <input name="method" id="credit" type="radio"></label>
                </div>
                <div class="form-group col-lg-4 offset-lg-4">
                    <label for="cost">Round Off</label>
                    <input id="cost" type="text">
                </div>

                <div class="form-group col-lg-4">
                    <label for="cost">Reference No</label>
                    <input id="cost" type="text">
                </div>

                <div class="form-group col-lg-4 offset-lg-4">
                    <label for="a_name">Net Amnt</label>
                    <input id="a_name" type="number">
                </div>
                <div class="form-group col-lg-9">
                    <label for="cost">Remarks</label>
                    <input id="cost" type="text">
                </div>

                <div class="form-group col-lg-3 button-wrap">
                    <button class="modal-dismiss btn-primary mb-1">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal : end -->
</main>
<?php include 'footer.php';?>   