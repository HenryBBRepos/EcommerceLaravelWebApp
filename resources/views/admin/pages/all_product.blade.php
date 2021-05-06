@extends('admin.layout.app')

@section('content')
<div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>All Product</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Product</a>
                  </li>
                 
                </ol>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
 
  <!-- DataTables Row grouping -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="button-trigger2" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">List of All Added Product</h4>
         
        </div>
      </div>
    </div>
  </div>

  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <div id="page-length-option_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="page-length-option_length"><label>Show <select name="page-length-option_length" aria-controls="page-length-option" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div><div id="page-length-option_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="page-length-option"></label></div><table id="page-length-option" class="display dataTable dtr-inline collapsed" role="grid" aria-describedby="page-length-option_info" style="width: 981px;">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="page-length-option" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Title: activate to sort column descending">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="page-length-option" rowspan="1" colspan="1" style="width: 243px;" aria-label="Position: activate to sort column ascending">Description</th>
                    <th class="sorting" tabindex="0" aria-controls="page-length-option" rowspan="1" colspan="1" style="width: 123px;" aria-label="Office: activate to sort column ascending">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="page-length-option" rowspan="1" colspan="1" style="width: 90px;" aria-label="Age: activate to sort column ascending">Action</th>
                 </thead>
                <tbody>
                  
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Office Furniture</td>
                    <td>New office furniture for any...</td>
                    <td>GH1000</td>
                    <td>
                    <i class="material-icons dp48">delete</i>
                    <i class="material-icons dp48">edit</i>
                    <i class="material-icons dp48">visibility</i>
                  </td>
                </tr>
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Office Furniture</td>
                    <td>New office furniture for any...</td>
                    <td>GH1000</td>
                    <td>
                    <i class="material-icons dp48">delete</i>
                    <i class="material-icons dp48">edit</i>
                    <i class="material-icons dp48">visibility</i>
                  </td>
                </tr>
                 </tbody>
               
              </table><div class="dataTables_info" id="page-length-option_info" role="status" aria-live="polite">Showing 1 to 5 entries</div><div class="dataTables_paginate paging_simple_numbers" id="page-length-option_paginate"><a class="paginate_button previous disabled" aria-controls="page-length-option" data-dt-idx="0" tabindex="-1" id="page-length-option_previous">Previous</a><span><a class="paginate_button current" aria-controls="page-length-option" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="page-length-option" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="page-length-option" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="page-length-option" data-dt-idx="4" tabindex="0">4</a>
            </span>
            <a class="paginate_button next" aria-controls="page-length-option" data-dt-idx="7" tabindex="0" id="page-length-option_next">Next</a></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
@endsection