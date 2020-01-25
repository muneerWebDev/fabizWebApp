<?php include 'header.php';?>
<main class="items-import-page">

    <div class="header">
        <h1>Item Import</h1>
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
        <div class="bottom-header">
        </div>
    </div>

    <div class="content">

        <div class="controls-wrapper imports-control">
            <a href="javaScript:void();" class="controls-btn open-btn" title="Import a file">
                <label for="fileImport"><i class="fas fa-file-import"></i></label>
                <input type="file" name="" class="d-none import" id="fileImport">
            </a>
            <a href="javaScript:void();" class="controls-btn cancel-btn" title="Cancel"><i
                    class="fas fa-window-close    "></i></a>
            <a href="javaScript:void();" class="controls-btn save-btn" title="Save"><i class="fas fa-check-circle"></i></a>
        </div>

        <div class="table-wrap">
            <div class="table-responsive">
                <table class="resizable data-table">
                    <thead>
                        <tr>
                            <th class="filter">Code</th>
                            <th class="filter">Description</th>
                            <th class="filter">Arabic Description</th>
                            <th class="filter">UOM</th>
                            <th class="filter">Extended Description</th>
                            <th class="filter">VAT Percentage</th>
                            <th class="filter">Price</th>
                            <th class="filter">Stock QTY</th>
                            <th class="filter">Barcode</th>
                            <th class="filter">Cost</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- <tr>
                            <td>001</td>
                            <td>Test Item</td>
                            <td>Inventory</td>
                            <td>48</td>
                            <td>10</td>
                            <td>48</td>
                            <td>10</td>
                            <td>15.00</td>
                            <td></td>
                            <td>15.00</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
<?php include 'footer.php';?>