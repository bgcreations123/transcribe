<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/project">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Find Work
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/project">Transcription</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Work
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">My Projects</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Earnings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Metrics</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resources
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="dropdown-divider"></div>
                {{-- <a class="dropdown-item" href="#">Transcription Style Guide</a> --}}
                <button type="button" class="dropdown-item btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Transcription Style Guide</button>
                <div class="dropdown-divider"></div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hello, {{Auth::user()->email}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out"></i> {{ __('Logout') }}  ( {{ Auth::user()->name }} )
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/freelancer_profile"> <i class="fa fa-cogs"></i> Settings</a>
                  </div>
                </li>
          </ul>
        </div>
      </nav>

      <!-- Modal -->
<div class="col-md-12">
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ config('app.name') }} Style Guide</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>
