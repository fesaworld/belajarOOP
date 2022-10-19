<?php
require_once('layouts/head.php');
?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="routing/calculator.php" method="post">
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="var1">Variable 1</label>
                            <input type="number" class="form-control" name="var1" id="var1">
                        </div>
                        <div class="col-4 form-group">
                            <label for="operator">Operator</label>
                            <select name="operator" id="operator" class="form-control">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">x</option>
                                <option value="/">:</option>
                            </select>
                        </div>
                        <div class="col-4 form-group">
                        <label for="var2">Variable 2</label>
                            <input type="number" class="form-control" name="var2" id="var1">
                        </div>
                    </div>
                    <button class="btn btn-success php">Hitung</button>
                </form>
            </div>
        </div>
    </div>
<?php

require_once('layouts/footer.php');
?>