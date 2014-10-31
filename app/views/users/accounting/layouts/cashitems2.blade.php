

<div class="panel-group" id="accordion">
@foreach($cashvouchers as $vouch)
        <a class="btn btn-primary" href="../cashitems/{{$vouch->checkno}}">Labor</a>
        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#rates">Salary</a>
        <a class="btn btn-primary" href="../cashitems3/{{$vouch->checkno}}">Materials</a>
@endforeach
  </div>
  </div>
  </div>
  </div>
  </div>
