@extends('layouts.home-layout')
@section('content')

    <div class="col-lg-12">
        <form class="checkdomain form-inline">
            <div class="checkdomain-wrapper">
                <div class="form-group">
                    <input type="text" class="form-control" id="search" placeholder="Поиск...">
                    <button type="submit" class="btn btn-primary grd1"><i class="fa fa-search"></i>OK</button>
                </div>
                <hr>
                <div class="clearfix"></div>
                <div class="checkbox checkbox-warning">
                    <input id="bygroup" type="radio" class="styled">
                    <label for="domaincom">.com</label>
                </div>
                <div class="checkbox checkbox-warning">
                    <input id="domainnet" type="checkbox" class="styled" checked>
                    <label for="domainnet">.net</label>
                </div>
                <div class="checkbox checkbox-warning">
                    <input id="domainorg" type="checkbox" class="styled">
                    <label for="domainorg">.org</label>
                </div>
                <div class="checkbox checkbox-warning">
                    <input id="domaintv" type="checkbox" class="styled">
                    <label for="domaintv">.tv</label>
                </div>
                <div class="checkbox checkbox-warning">
                    <input id="domaininfo" type="checkbox" class="styled">
                    <label for="domaininfo">.info</label>
                </div>
            </div><!-- end checkdomain-wrapper -->
        </form>
    </div>

@endsection
