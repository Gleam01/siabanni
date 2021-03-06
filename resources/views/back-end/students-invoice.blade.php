@extends('back-end.main-layout')
@section('content')
<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Student Invoice
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Student</a></li>
                    <li class="breadcrumb-item active">Invoice</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Single</strong> Invoice</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Print Invoices</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="javascript:void(0);">Export to XLS</a></li>
                                    <li><a href="javascript:void(0);">Export to CSV</a></li>
                                    <li><a href="javascript:void(0);">Export to XML</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h3 class="m-b-0">Invoice Details : <strong class="text-primary">OU1825</strong></h3>
                        <ul class="nav nav-tabs">
                            <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
                            <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#notes" aria-expanded="false">Notes</a></li>
                            <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history" aria-expanded="false">History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <div class="card" id="details">
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <address>
                                                    <strong>ThemeMakker Inc.</strong><br>
                                                    795 Folsom Ave, Suite 546<br>
                                                    San Francisco, CA 54656<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-34636
                                                </address>
                                            </div>
                                            <div class="col-md-6 col-sm-6 text-right">
                                                <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2018</p>
                                                <p class="m-b-0"><strong>Order Status: </strong> <span class="badge bg-orange">Pending</span></p>
                                                <p><strong>Order ID: </strong> #123456</p>
                                            </div>
                                        </div>
                                        <div class="mt-40"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover m-b-0">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Class</th>
                                                                <th class="hidden-sm-down">Description</th>
                                                                <th>Duration</th>
                                                                <th class="hidden-sm-down">Fee</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>BCA Sem1</td>
                                                                <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                                                <td>6 Month</td>
                                                                <td class="hidden-sm-down">$180</td>
                                                                <td>$180</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>BCA Sem2</td>
                                                                <td class="hidden-sm-down">Lorem Ipsum is simply dummy text of the printing</td>
                                                                <td>6 Month</td>
                                                                <td class="hidden-sm-down">$180</td>
                                                                <td>$180</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Note</h5>
                                                <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p class="m-b-0"><b>Sub-total:</b> 360.00</p>
                                                <p class="m-b-0">Discout: 10%</p>
                                                <p class="m-b-0">VAT: 12.9%</p>
                                                <h3 class="m-b-0 m-t-10">USD 360.00</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print col-md-12 text-right">
                                            <button class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i class="zmdi zmdi-print"></i></button>
                                            <button class="btn btn-primary btn-round">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notes" aria-expanded="false">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 25822</h2>
                                        <small>Created at: 8 Jan, 2018</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 25823</h2>
                                        <small>Created at: 19 Dec, 2017</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>ID:</strong> 25824</h2>
                                        <small>Created at: 18 Dec, 2017</small>
                                    </div>
                                    <div class="body">
                                        <h6>This is Note</h6>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <button class="btn btn-primary btn-round">Add Note</button>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                        <div class="card" id="details">
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong>ThemeMakker Inc.</strong><br>
                                            795 Folsom Ave, Suite 546<br>
                                            San Francisco, CA 54656<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-34636
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2018</p>
                                        <p class="m-b-0"><strong>Order Status: </strong> <span class="badge bg-orange">Pending</span></p>
                                        <p><strong>Order ID: </strong> #123456</p>
                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Description</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Invoice Created</td>
                                                        <td>18 Dec, 2017</td>
                                                        <td><span class="badge badge-default">Panding</span></td>
                                                    </tr>
                                                     <tr>
                                                        <td>1</td>
                                                        <td>Invoice Sent</td>
                                                        <td>19 Dec, 2017</td>
                                                        <td><span class="badge badge-default">Panding</span></td>
                                                    </tr>
                                                     <tr>
                                                        <td>1</td>
                                                        <td>Invoice Paid</td>
                                                        <td>20 Dec, 2017</td>
                                                        <td><span class="badge badge-success">Success</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
