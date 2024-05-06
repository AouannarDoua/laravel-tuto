<x-master title="Profile">
    <div class="m-3">
    <h3>Profile:</h3>

    @if ($errors->any())
    <x-alert type="danger"> 
    <ul>
     @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
     @endforeach 
    </ul>
    </x-alert>
    @endif
    
    <form method="POST" action="{{route('profiles.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
        <!--<small id="helpId" class="text-muted">Help text</small>-->
        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Your Email@gmail.com">
        @error('email')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Your Password">
        <!--<small id="helpId" class="text-muted">Help text</small>-->
    </div>
    <div class="form-group">
        <label for="password">Password validation:</label>
        <input type="password" name="password" class="form-control" placeholder="confirm your password">
        <!--<small id="helpId" class="text-muted">Help text</small>-->
    </div>
    <div class="form-group">
        <label for="bio">Bio:</label>
        <textarea class="form-control" name="bio" placeholder="Description"></textarea>
        <!--<small id="helpId" class="text-muted">Help text</small>-->
    </div>
    <div class="d-grid my-3">
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
</div>

</x-master>
