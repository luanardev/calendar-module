<div class="card card-outline">
    <div class="card-header">
      
        <div class="float-right">  
            <a class="btn btn-sm btn-primary"  href="{{route('financialyear.create')}}" >
                <i class="fas fa-plus-circle"></i> Create
            </a>             
            <a class="btn btn-sm btn-primary"  href="{{route('financialyear.index')}}" >
                <i class="fas fa-sync-alt"></i> Refresh
            </a>
        </div>
        <div class="float-left">
            <div class="col-lg-12 col-md-12 col-sm-12">               
                <div class="input-group">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search Financial Year">
                </div>              
            </div>
        </div>
    </div>
    
    <div class="card-body">
        <x-adminlte-flash />
        <div class="row">
            <div class="col-md-12">
                @forelse ($financialyears as $financialyear)
                    <div class="col-lg-2 col-md-3 col-sm-6">  
                        <a href="{{route('financialyear.show', $financialyear)}}">                     
                            <div class="card card-widget widget-user">			
                                <div class="widget-user-header">
                                    <img class="img-circle" src="{{asset('img/calendar.png')}}" width="50px" />										
                                    <h6 class="widget-user-desc text-center">FY {{$financialyear->code}}</h6>
                                    <p>{!! $financialyear->statusBadge() !!}</p>									
                                </div>								
                            </div>
                        </a>                       
                    </div>
                @empty
                    <div class="offset-lg-5 pt-lg-4">
                        <h5>Financial Year Not found</h5>
                    </div> 
                @endforelse
            </div>
        </div>
    </div>
        
</div>

