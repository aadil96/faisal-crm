@extends('layouts.app')

@section('main')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-three">

        <div class="widget-heading">
            <h5 class="">Customers</h5>
        </div>

        <div class="widget-content">
            <div class="table-responsive">
                <table class="table table-scroll">
                    <thead>
                        <tr>
                            <th><div class="th-content">Title</div></th>
                            <th><div class="th-content th-heading">First Name</div></th>
                            <th><div class="th-content th-heading">Last Name</div></th>
                            <th><div class="th-content th-heading">Address</div></th>
                            <th><div class="th-content th-heading">PIN Code</div></th>
                            <th><div class="th-content th-heading">Action</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Mr.</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Uzair</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Patel</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Mama heights</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">400016</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <a href="tel:+918879949408">Call</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Mr.</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Anjum</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Sorathiya</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Shiv Sagar</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">400016</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <a href="tel:+919833213576">Call</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Mr.</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Sohail</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Jodhatar</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">Fancy Terrace</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <span class="pricing">400016</span>
                                </div>
                            </td>
                            <td>
                                <div class="td-content">
                                    <a href="tel:+919769557160">Call</a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection