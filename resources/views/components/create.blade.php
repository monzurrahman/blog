<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{$title}} <a href="{{$indexPageLink}}"><i class="fa fa-list" style="color: white; position: absolute; right: 20px"></i></a></h3>
            </div>
            <form method="post" action="{{$action}}">
                @csrf
                <div class="card-body">
                    {{$slot}}
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
