<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FieldJob</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profiles.index')}}">Tous les profiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('formationpage')}}">informations</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--@once
<script>
    alert(' include navigation');
</script>   
@endonce-->

