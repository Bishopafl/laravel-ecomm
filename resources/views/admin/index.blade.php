@extends('admin.admin_master')
@section('admin')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">{{ env('APP_NAME') }}</a>
    <span class="breadcrumb-item active">Dashboard</span>
</nav>

<div class="sl-pagebody">
    <div class="row row-sm mg-t-20">
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 pd-sm-25">
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                    <h6 class="card-body-title tx-12 tx-spacing-1">Sales Revenue</h6>
                    <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more"></i></a>
                </div><!-- d-flex -->
                <h2 class="tx-purple tx-lato tx-center mg-b-15">$34,330</h2>
                <p class="mg-b-0 tx-12"><span class="tx-success">+ 3.4%</span> compared last month</p>
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card bg-purple tx-white pd-25">
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                    <h6 class="card-body-title tx-12 tx-white-8 tx-spacing-1">Sales Revenue</h6>
                    <a href="" class="tx-white-8 hover-white"><i class="icon ion-more"></i></a>
                </div><!-- d-flex -->
                <h2 class="tx-lato tx-center mg-b-15">$34,330</h2>
                <p class="mg-b-0 tx-12 op-8">+ 6.2% compared last month</p>
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25">
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                    <h6 class="card-body-title tx-12 tx-spacing-1">Sales Revenue</h6>
                    <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more"></i></a>
                </div><!-- d-flex -->
                <h2 class="tx-teal tx-lato tx-center mg-b-15">$34,330</h2>
                <p class="mg-b-0 tx-12"><span class="tx-danger">- 3.4%</span> compared last month</p>
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card bg-teal tx-white pd-25">
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                    <h6 class="card-body-title tx-12 tx-white-8 tx-spacing-1">Sales Revenue</h6>
                    <a href="" class="tx-white-8 hover-white"><i class="icon ion-more"></i></a>
                </div><!-- d-flex -->
                <h2 class="tx-lato tx-center mg-b-15">$34,330</h2>
                <p class="mg-b-0 tx-12 op-8">+ 6.2% compared last month</p>
            </div><!-- card -->
        </div><!-- col-3 -->
    </div><!-- row -->

    <div class="row row-lg">
        <div class="col-sm-12 col-xl-12">
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Disabling Search &amp; Items Per Page Menu</h6>
                <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the
                    table, as shown in this example.</p>

                <div class="table-wrapper">
                    <div id="datatable2_wrapper" class="dataTables_wrapper no-footer">
                        <table id="datatable2" class="table display responsive nowrap dataTable no-footer dtr-inline"
                            role="grid" aria-describedby="datatable2_info" style="width: 1112px;">
                            <thead>
                                <tr role="row">
                                    <th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1"
                                        colspan="1" style="width: 143px;" aria-sort="ascending"
                                        aria-label="First name: activate to sort column descending">First name</th>
                                    <th class="wd-15p sorting" tabindex="0" aria-controls="datatable2" rowspan="1"
                                        colspan="1" style="width: 143px;"
                                        aria-label="Last name: activate to sort column ascending">Last name</th>
                                    <th class="wd-20p sorting" tabindex="0" aria-controls="datatable2" rowspan="1"
                                        colspan="1" style="width: 198px;"
                                        aria-label="Position: activate to sort column ascending">Position</th>
                                    <th class="wd-15p sorting" tabindex="0" aria-controls="datatable2" rowspan="1"
                                        colspan="1" style="width: 143px;"
                                        aria-label="Start date: activate to sort column ascending">Start date</th>
                                    <th class="wd-10p sorting" tabindex="0" aria-controls="datatable2" rowspan="1"
                                        colspan="1" style="width: 87px;"
                                        aria-label="Salary: activate to sort column ascending">Salary</th>
                                    <th class="wd-25p sorting" tabindex="0" aria-controls="datatable2" rowspan="1"
                                        colspan="1" style="width: 254px;"
                                        aria-label="E-mail: activate to sort column ascending">E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Airi</td>
                                    <td>Satou</td>
                                    <td>Accountant</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td>a.satou@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Angelica</td>
                                    <td>Ramos</td>
                                    <td>Chief Executive Officer</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                    <td>a.ramos@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Ashton</td>
                                    <td>Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td>a.cox@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Bradley</td>
                                    <td>Greer</td>
                                    <td>Software Engineer</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                    <td>b.greer@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Brenden</td>
                                    <td>Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                    <td>b.wagner@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Brielle</td>
                                    <td>Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                    <td>b.williamson@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Bruno</td>
                                    <td>Nash</td>
                                    <td>Software Engineer</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                    <td>b.nash@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Caesar</td>
                                    <td>Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                    <td>c.vance@datatables.net</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Cara</td>
                                    <td>Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                    <td>c.stevens@datatables.net</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Cedric</td>
                                    <td>Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                    <td>c.kelly@datatables.net</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- table-wrapper -->
            </div>
        </div>
    </div>

</div><!-- sfl-pagebody -->

@endsection