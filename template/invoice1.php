<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>  
    <link rel="stylesheet" href="../css/pdf.css">
   
    <style>
        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
            background-color: blue;
            font-family: sans-serif !important
        }

        .mt-100 {
            margin-top: 50px
        }

        .mb-100 {
            margin-bottom: 50px
        }

        .card {
            border-radius: 1px !important
        }

        .card-header {
            background-color: #fff
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: .25rem .5rem;
            font-size: .765625rem;
            line-height: 1.5;
            border-radius: .2rem
        }   
    </style>

</head>
<body>
    <div class="container-fluid mt-100 mb-100">
        <div id="ui-view">
            <div>
                <div class="card">
                    <div class="card-header"> Invoice<strong>#BBB-245432</strong>
                        <div class="pull-right"> <a class="btn btn-sm btn-info" href="#" data-abc="true"><i class="fa fa-print mr-1"></i> Print</a> <a class="btn btn-sm btn-info" href="#" data-abc="true"><i class="fa fa-file-text-o mr-1"></i> Save</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <h6 class="mb-3">From:</h6>
                                <div><strong>BBBootstrap Inc.</strong></div>
                                <div>546 Aston Avenue</div>
                                <div>NYC, NY 12394</div>
                                <div>Email: contact@bbbootstrap.com</div>
                                <div>Phone: +1 848 389 9289</div>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-3">To:</h6>
                                <div><strong>Facebook Inc.</strong></div>
                                <div>345, SA Road</div>
                                <div>Cupertino CA 92154</div>
                                <div>Email: billings@facebook.com</div>
                                <div>Phone: +1 894 989 9898</div>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-3">Details:</h6>
                                <div>Invoice<strong> #BBB-245432</strong></div>
                                <div>March 22, 2020</div>
                                <div>VAT: BBB0909090</div>
                                <div>Account Name: BANK OF AMERICA</div>
                                <div><strong>SWIFT code: 985798579487</strong></div>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th class="center">UNIT</th>
                                        <th class="right">COST</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left">Laptops</td>
                                        <td class="left">Macbook Air 8GB RAM, 256GB SSD</td>
                                        <td class="center">5</td>
                                        <td class="right">$900</td>
                                        <td class="right">$4500</td>
                                    </tr>
                                    <tr>
                                        <td class="center">2</td>
                                        <td class="left">Samsung SSD</td>
                                        <td class="left">Samsung SSD(256 GB)</td>
                                        <td class="center">20</td>
                                        <td class="right">$50</td>
                                        <td class="right">$3000</td>
                                    </tr>
                                    <tr>
                                        <td class="center">3</td>
                                        <td class="left">PEN DRIVES</td>
                                        <td class="left">Samsung Pendrives(32GB)</td>
                                        <td class="center">100</td>
                                        <td class="right">$10</td>
                                        <td class="right">$1000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Subtotal</strong></td>
                                            <td class="right">$8500</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Discount (20%)</strong></td>
                                            <td class="right">$160</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>VAT (10%)</strong></td>
                                            <td class="right">$90</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>$9000</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="pull-right"> <a class="btn btn-sm btn-success" href="#" data-abc="true"><i class="fa fa-paper-plane mr-1"></i> Proceed to payment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
?>