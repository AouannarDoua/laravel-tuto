<x-master title="Profile">
    <h3>Modifier Profile:</h3>

    @if ($errors->any())
    <x-alert type="danger"> 
    <ul>
     @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
     @endforeach 
    </ul>
    </x-alert>
    @endif
    
    <form method="POST" action="{{route('profiles.update',$profile->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$profile->name)}}">
        <!--<small id="helpId" class="text-muted">Help text</small>-->
        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" value="{{old('email',$profile->email)}}">
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
        <textarea class="form-control" name="bio" >{{old('bio',$profile->bio)}}</textarea>
        <!--<small id="helpId" class="text-muted">Help text</small>-->
    </div>
    <div class="d-grid my-3">
    <button type="submit" class="btn btn-primary btn-block">Modifier</button>
    </div>
</form>
</x-master>
